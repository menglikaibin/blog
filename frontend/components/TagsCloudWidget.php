<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 19:59
 */
namespace frontend\components;

use yii\base\Widget;

class TagsCloudWidget extends Widget
{
    public $tags;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $tagString = '';
        $fontStyle = array
        (
            '6'=>'danger',
            '5'=>'info',
            '4'=>'warning',
            '3'=>'primary',
            '2'=>'success'
        );

        foreach ($this->tags as $tag => $weight)
        {
            $tagString .= '<a href="' . \Yii::$app->homeUrl . '?r=post/index&PostSearch[tags]='
                .$tag.'">'.' <h'.$weight.' style="display:inline-block;"><span class="label label-'
                .$fontStyle[$weight].'">'.$tag.'</span></h'.$weight.'></a>';
        }
        return $tagString;
    }
}