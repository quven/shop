<?php
/**
 * Created by PhpStorm.
 * User: xuehao
 * Date: 2017/4/10
 * Time: 下午10:19
 */
class UserController extends Controller
{

    public function actionlogin(){
        $this->renderPartial("login");
    }

}