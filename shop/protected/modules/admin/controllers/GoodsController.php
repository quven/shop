<?php

class GoodsController extends Controller
{
    /*
     * 商品列表
     */
    public function actionList()
    {
        $this->renderPartial("list");
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