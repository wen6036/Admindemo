<?php
/**
 * 后台用户控制器
 * @author yupoxiong<i@yufuping.com>
 */

namespace app\admin\controller;

use app\common\model\Attachment;
use think\Request;
use app\admin\model\AdminRole;
use app\admin\model\AdminUser;
use app\admin\validate\AdminUserValidate;

class AdminUserController extends Controller
{

    //列表
    public function index(Request $request, AdminUser $model)
    {

        $param = $request->param();
        $data  = $model->scope('where', $param)
            ->paginate($this->admin['per_page'], false, ['query' => $request->get()]);

        //关键词，排序等赋值
        $this->assign($request->get());

        $this->assign([
            'data'  => $data,
            'page'  => $data->render(),
            'total' => $data->total(),
        ]);
        return $this->fetch();
    }

    //添加
    public function add(Request $request, AdminUser $model, AdminUserValidate $validate)
    {
        if ($request->isPost()) {
            $param           = $request->param();
            $validate_result = $validate->scene('add')->check($param);
            if (!$validate_result) {
                return error($validate->getError());
            }
            $result = $model::create($param);

            $url = URL_BACK;
            if (isset($param['_create']) && $param['_create'] == 1) {
                $url = URL_RELOAD;
            }

            return $result ? success('添加成功', $url) : error();
        }

        $role = AdminRole::all(function ($query) {
            $query->column('id,name', 'id');
        });
        $this->assign([
            'role' => $role
        ]);

        return $this->fetch();
    }

    //修改
    public function edit($id, Request $request, AdminUser $model, AdminUserValidate $validate)
    {

        $data = $model::get($id);
        if ($request->isPost()) {
            $param           = $request->param();
            $validate_result = $validate->scene('edit')->check($param);
            if (!$validate_result) {
                return error($validate->getError());
            }

            $result = $data->save($param);
            return $result ? success() : error();
        }

        $role = AdminRole::all(function ($query) {
            $query->column('id,name', 'id');
        });

        $this->assign([
            'data' => $data,
            'role' => $role
        ]);
        return $this->fetch('add');

    }


    //删除
    public function del($id, AdminUser $model)
    {
        if (count($model->noDeletionId) > 0) {
            if (is_array($id)) {
                if (array_intersect($model->noDeletionId, $id)) {
                    return error('ID为' . implode(',', $model->noDeletionId) . '的数据无法删除');
                }
            } else if (in_array($id, $model->noDeletionId)) {
                return error('ID为' . $id . '的数据无法删除');
            }
        }

        if ($model->softDelete) {
            $result = $model->whereIn('id', $id)->useSoftDelete('delete_time', time())->delete();
        } else {
            $result = $model->whereIn('id', $id)->delete();
        }

        return $result ? success('操作成功', URL_RELOAD) : error();
    }


    //启用
    public function enable($id, AdminUser $model)
    {
        $result = $model->whereIn('id', $id)->update(['status' => 1]);
        return $result ? success('操作成功', URL_RELOAD) : error();
    }

    //禁用
    public function disable($id, AdminUser $model)
    {
        $result = $model->whereIn('id', $id)->update(['status' => 0]);
        return $result ? success('操作成功', URL_RELOAD) : error();
    }

    //个人资料
    public function profile(Request $request, AdminUser $model, AdminUserValidate $validate)
    {
        if ($request->isPost()) {
            $param = $request->param();
            if ($param['update_type'] === 'password') {

                $validate_result = $validate->scene('password')->check($param);
                if (!$validate_result) {
                    return error($validate->getError());
                }

                if (!password_verify($param['password'], $this->user->password)) {
                    return error('当前密码不正确');
                }
                $param['password'] = $param['new_password'];
            } else if ($param['update_type'] === 'avatar') {
                if (!$request->file('avatar')) {
                    return error('请上传新头像');
                }
                $attachment = new Attachment();
                $file       = $attachment->upload('avatar');
                if ($file) {
                    $param['avatar'] = $file->url;
                } else {
                    return error($attachment->getError());
                }
            }
            if (false !== $this->user->save($param)) {
                return success('修改成功', URL_RELOAD);
            }
            return error();
        }

        return $this->fetch();
    }


}
