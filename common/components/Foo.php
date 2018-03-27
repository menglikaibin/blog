<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/27
 * Time: 21:58
 */
namespace common\components;

use yii\base\Object;

class Foo extends Object
{
    private $_label;

    public function getLabel()
    {
        return $this->_label;
    }

    public function setLabel($value)
    {
        $this->_label = trim($value);
    }

    //getter 和 setter 方法创建李一个名为label的属性,在这个例子离,它只想一个私有的内部属性(_label)
    //特殊规则和限制
    //这雷属性的名字是不区分大小写的,php方法名是不区分大小写的.
    //如果此类属性名的类成员变量相同,以后这为准,
    //这类属性不支持可见性,定义属性的getter和setter方法是public.protected还是private对属性的可见性没有任何影响
    //这类属性不支持可见性,定义属性的方法是public.protected还是private对属性的可见性没有任何影响
    //这类属性的getter和setter方法只能定义为非京台的,若定义为静态方法则不会以相同方式处理
    //对不确定有无魔术方法的属性正常调用property_exists()将不会生效.你应该分别调用yii\base\BaseObject::canGetProperty()或yii\base\BaseObject::canSetProperty()




}