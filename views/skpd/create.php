<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Skpd */

$this->title = 'Create Skpd';
$this->params['breadcrumbs'][] = ['label' => 'Skpds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
