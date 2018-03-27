<?php
use yii\widgets\ActiveForm;
?>

<?php
if (Yii::$app->session->hasFlash('info'))
{
    echo Yii::$app->session->getFlash('info');
}
$form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
        'id' => 'upload',
        'enableAjaxValidation' => false
])
?>


<?= $form->field($model, 'image')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>