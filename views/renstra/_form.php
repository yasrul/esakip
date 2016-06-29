<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use app\models\Skpd;
use app\models\Periode;

/* @var $this yii\web\View */
/* @var $model app\models\Renstra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="renstra-form">

    <?php $form = ActiveForm::begin([
        'id' => '_form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-8\">{input}</div>\n<div class=\"col-lg-16\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <!--<?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'id_skpd')->dropDownList(Skpd::listSkpd(),
            ['prompt' => 'Pilih SKPD']
            )?>

    <?= $form->field($model, 'id_periode')->dropDownList(Periode::listPeriode(),
            ['prompt' => 'Pilih Periode']
            ) ?>

    <?= $form->field($model, 'visi')->textInput(['maxlength' => true]) ?>
    
    <?php if (!$model->isNewRecord) : ?>
        <h2>Misi</h2>
        <?= GridView::widget([
            'dataProvider' => new ActiveDataProvider([
                'query' => $model->getMisis(),
                'pagination' => FALSE,
            ]),
            'columns' => [
                ['class' => 'yii\grid\SerialColumn', 'header'=>'No', 'contentOptions' => ['style' => 'width:5%']],
                ['attribute'=>'misi', 'contentOptions' => ['style' => 'width:95%']],
                [
                    'class' => yii\grid\ActionColumn::className(),
                    'controller' => 'misi',
                    'header' => Html::a('<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', ['misi/create', 'relation_id' => $model->id]),
                    'template' => '{update}{delete}'
                ],
            ]
        ]); ?>
    <?php endif ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
