<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/27
 * Time: 22:16
 */
namespace common\components;

use yii\db\ActiveRecord;
use yii\base\Behavior;
use yii\base\Component;

class MyBehavior extends Behavior
{
    public $prop1;

    private $_prop2;

    public function getProp2()
    {
        return $this->_prop2;
    }

    public function setProp2($value)
    {
        $this->_prop2 = $value;
    }


    public function foo()
    {
        $component = new Component();
        $component->attachBehavior('myBehavior1',new MyBehavior);  
    }

    public function events()
    {
        return
            [
                ActiveRecord::EVENT_BEFORE_VALIDATE=>'beforeValidate',
            ];
    }

    public function beforeValidate($event)
    {
        //处理逻辑
    }



    //以上代码定义了行为类app\components\MyBehavior 并为要附加行为的组件提供了两个属性prop1.prop2
    //和一个方法foo().注意属性Prop2是通过getter getProp2()和setter setProp2()定义的.能这样用是因为
    //yii\base\Object和yii\base\Behavior的祖先类,此祖先类支持用getter和setter方法定义属性
    //因为这是一个行为类,当它附加到一个组件时,该组件也将具有prop1和prop2属性和foo()方法



}