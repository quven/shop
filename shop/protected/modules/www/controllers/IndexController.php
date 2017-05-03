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

        $modelGoods = new Goods();
        $res = $modelGoods->findAll();

        print_r($res);die();
        $this->render("index");
    }

}