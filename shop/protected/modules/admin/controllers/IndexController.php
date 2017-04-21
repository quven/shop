<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
        $this->renderPartial("index");
    }
    /*
     *  头部
     */
    public function actionHead()
    {
        $this->renderPartial("head");
    }
    /*
     * 左侧导航
     */
    public function actionLeft()
    {
        $this->renderPartial("left");
    }
    /*
     * 主题内容部分
     */
    public function actionMain()
    {
        $this->renderPartial("main");
    }
}