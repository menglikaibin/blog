<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Poststatus */

$this->title = 'Create Poststatus';
$this->params['breadcrumbs'][] = ['label' => 'Poststatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poststatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
