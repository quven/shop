<?php

class UserController extends Controller
{
    /*
     * 登陆页面
     */
    public function actionLogin()
    {
        $this->renderPartial("login");
    }

}