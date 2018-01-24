<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Commentstatus;

/* @var $this yii\web\View */
/* @var $model common\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php
    if (Yii::$app->session->hasFlash('info'))
    {
        echo Yii::$app->session->getFlash('info');
    }
    $form = ActiveForm::begin
    ([
        'action'=>['post/detail','id'=>$id,'#'=>'comments'],
        'method'=>'post',
    ]); ?>


    <div class="row">
        <div class="col-md-12"><?= $form->field($commentModel,'content')->textarea(['row'=>6])?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('发表评论', ['class' =>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>