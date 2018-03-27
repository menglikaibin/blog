<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\components\RctReplyWidget;
use common\models\Post;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

    <div class="row">

        <div class="col-md-9">
            <?= \yii\widgets\ListView::widget
            ([
                'id' => 'postList',
                'dataProvider' => $dataProvider,
                'itemView' => '_listitem', //子视图文件
                'layout' => '{items} {pager}',
                'pager' =>
                    [
                    'maxButtonCount' => 10,
                    'nextPageLabel' => Yii::t('app', '下一页'),
                    'prevPageLabel' => Yii::t('app', '下一页')
                    ]
            ]) ?>

        </div>

        <div class="col-md-3">

            <div class="searchbox">

                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>查找文章(
                        <?php
                        $data = Yii::$app->cache->get('postCount');

                        if ($data === false)
                        {
                            $data = Post::find()->count(); sleep(5);
                            Yii::$app->cache->set('postCount',$data);
                        }

                        echo $data;
                        ?>
                        )
                    </li>
                    <li class="list-group-item">搜索框
                        <form class="form-inline">
                            <div class="form-group" action="index.php?r=post/index" id="w0" method="get">
                                <input type="text" class="form-control" name="PostSearch[title]" id="w0input" placeholder="按标题" style="width: 120px">
                            </div>
                            <button type="submit" class="btn btn-default">搜索</button>
                        </form>
                    </li>
                </ul>

            </div>

            <div class="tagcloudbox">

                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>标签云
                    </li>
                    <li class="list-group-item">标签云</li>
                    <?= \frontend\components\TagsCloudWidget::widget(['tags'=>$tags])?>
                </ul>

            </div>

            <div class="searchbox">

                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>最新回复
                    </li>
                    <li class="list-group-item">回复</li>
                    <?= RctReplyWidget::widget(['recentComments'=>$recentComments])?>
                </ul>

            </div>

        </div>
    </div>
</div>


