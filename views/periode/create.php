<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Periode */

$this->title = 'Create Periode';
$this->params['breadcrumbs'][] = ['label' => 'Periodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periode-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
