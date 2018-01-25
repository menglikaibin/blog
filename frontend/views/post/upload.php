<?php
use yii\widgets\ActiveForm;
?>




<?php
$form = ActiveForm::begin(['options'=>['enctype'=>'mutipart/form-data']]);
?>
<?= $form->field($model,'imageFile')->fileInput() ?>

<button>Submit</button>

<?php ActiveForm::end() ?>