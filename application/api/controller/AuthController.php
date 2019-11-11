<?php


namespace app\api\controller;

use app\common\model\User;
use app\common\validate\UserValidate;
use Exception;
use think\Request;
use think\response\Json;

class AuthController extends Controller
{


    /**d
     * 登录并发放token
     * @param Request $request
     * @param User $model
     * @param UserValidate $validate
     * @return Json|void
     */
    public function login(Request $request, User $model, UserValidate $validate)
    {
        $param = $request->param();
        //数据验证
        $validate_result = $validate->scene('login')->check($param);
        if (!$validate_result) {
            return error($validate->getError());
        }

        //登录逻辑
        try {
            $user  = $model::login($param);
            $token = $this->getToken($user->id);
        } catch (Exception $e) {
            return error($e->getMessage());
        }

        //返回数据
        return success(['token' => $token], '登录成功');
    }

}