<?php

class GoodsController extends Controller
{
    /*
     * 商品列表
     */
    public function actionList()
    {
        $modelGoods = new Goods();
        //$goods_list = $modelGoods->findAll();
        $sql = "select * from {{goods}} limit 3";  //sql语句查询
        $goods_list = $modelGoods->findAllBySql($sql);
        $this->renderPartial("list",['goods_list'=>$goods_list]);
    }
    /*
     * 添加商品
     */
    public function actionAdd()
    {
        $this->renderPartial("add");
    }
    /*
     * 修改商品
     */
    public function actionEdit()
    {
        $this->renderPartial("edit");
    }

}