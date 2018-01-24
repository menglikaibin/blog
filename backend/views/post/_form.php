<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\db\Query;
//use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textarea(['rows' => 6]) ?>

    <?php
    #第一种
//    $psObjs = \common\models\Poststatus::find()->all();
//    $allStatus = ArrayHelper::map($psObjs, 'id','name')
    #第二种
//    $psArray = Yii::$app->db->createCommand('select id,name from poststatus')->queryAll();
//    $allStatus = ArrayHelper::map($psArray,'id','name')

    #第四种
//    $allStatus = \common\models\Poststatus::find()
//    ->select(['name','id'])
//    ->orderBy('position')
//    ->indexBy('id')
//    ->column();


    #第三种
//    $allStatus = (new Query())
//        ->select(['name','id'])
//        ->from('poststatus')
//        ->count();
//
//    echo '<pre>';
//    print_r($allStatus);
//    echo '</pre>';
    ?>

    <?= $form->field($model, 'status')
        ->dropDownList(\common\models\Poststatus::find()
        ->select(['name','id'])
        ->orderBy('position')
        ->indexBy('id')
        ->column(),
        ['prompt'=>'请选择状态']) ?>


    <?= $form->field($model, 'author_id')
        ->dropDownList(\common\models\Adminuser::find()
            ->select(['nickname','id'])
            ->indexBy('id')
            ->column(),
            ['prompt'=>'请选择作者']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新增' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
