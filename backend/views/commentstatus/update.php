<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Commentstatus */

$this->title = 'Update Commentstatus: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Commentstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="commentstatus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
