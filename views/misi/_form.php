<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Misi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="misi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

<<<<<<< HEAD
    <?= $form->field($model, 'id_renstra')->textInput(['maxlength' => true]) ?>
=======
    <?= $form->field($model, 'id_renstra')->textInput(['maxlength' => true]) ?> -->
>>>>>>> e21d06288b019c4daba8592822bbafa961e6670a

    <?= $form->field($model, 'misi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
