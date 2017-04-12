<?php
/**
 * Created by PhpStorm.
 * User: xuehao
 * Date: 2017/4/12
 * Time: 下午7:10
 */
class IndexController extends Controller
{

    public function actionIndex(){

        $this->renderPartial("index");
    }

}