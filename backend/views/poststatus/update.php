<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Poststatus */

$this->title = 'Update Poststatus: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Poststatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="poststatus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
