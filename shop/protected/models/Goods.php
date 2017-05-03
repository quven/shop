<?php
/**
 * Created by PhpStorm.
 * User: xuehao
 * Date: 2017/5/3
 * Time: 上午11:33
 */
class Goods extends CActiveRecord{
    /*
     * 返回当前模型对象的静态方法
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    /*
     * 返回当前数据表的名字
     */
    public function tableName(){
        return '{{goods}}';
    }
}