<?php
/**
 * Created by PhpStorm.
 * User: xuehao
 * Date: 2017/4/12
 * Time: 下午7:21
 */
class GoodsController extends Controller
{
    //商品分类
    public function actionCategory(){

        $this->render("category");
    }
    //商品详情
    public function actionDetail(){
        $this->render("detail");
    }

}