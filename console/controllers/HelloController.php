<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 11:17
 */
namespace console\controllers;

use common\models\Post;
use yii\console\Controller;

class HelloController extends Controller
{
    public $rev=1;
    public function actionIndex()
    {
        echo 'hello world';
    }

    public function optionAliases()
    {
        return ['r'=>'rev'];
    }

    public function actionEcho()
    {
        $posts = Post::find()->all();

        foreach ($posts as $post)
        {
            echo ($post['id'].'-'.$post['title']."\n");
        }
    }


    public function actionWho($name)
    {
        echo 'hello '.$name;
    }

    public function actionIf()
    {
        if ($this->rev == 12)
        {
            echo strrev('Hello World!')."\n";
        }
        else
        {
            echo '123';
        }
    }

}