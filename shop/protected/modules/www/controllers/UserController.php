<?php
/**
 * Created by PhpStorm.
 * User: xuehao
 * Date: 2017/4/10
 * Time: 下午10:19
 */
class UserController extends Controller
{
    //登陆页面
    public function actionLogin(){
        $this->render("login");
    }
    //注册页面
    public function actionRegister(){
        $this->render("register");
    }

}