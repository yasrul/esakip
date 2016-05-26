<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Skpd;
use app\models\Periode;

/* @var $this yii\web\View */
/* @var $model app\models\Renstra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="renstra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_skpd')->dropDownList(Skpd::listSkpd(),
            ['prompt' => 'Pilih SKPD']
            )?>

    <?= $form->field($model, 'id_periode')->dropDownList(Periode::listPeriode(),
            ['prompt' => 'Pilih Periode']
            ) ?>

    <?= $form->field($model, 'visi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
