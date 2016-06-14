<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Misi */

$this->title = 'Create Misi';
$this->params['breadcrumbs'][] = ['label' => 'Misis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="misi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
