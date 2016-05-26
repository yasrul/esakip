<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Skpd */

$this->title = 'Update Skpd: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Skpds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skpd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
