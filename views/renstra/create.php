<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Renstra */

$this->title = 'Create Renstra';
$this->params['breadcrumbs'][] = ['label' => 'Renstras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="renstra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
