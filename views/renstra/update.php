<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Renstra */

$this->title = 'Update Renstra: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Renstras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="renstra-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
