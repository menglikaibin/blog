<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Commentstatus */

$this->title = 'Create Commentstatus';
$this->params['breadcrumbs'][] = ['label' => 'Commentstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commentstatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
