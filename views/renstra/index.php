<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\RenstraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Renstras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="renstra-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Renstra', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            ['attribute' => 'skpd', 'value' => 'idSkpd.nama'],
            ['attribute' => 'periode', 'value' => 'idPeriode.periode'],
            'visi',

            ['class' => 'yii\grid\ActionColumn','template' => '{update}{delete}'],
        ],
    ]); ?>
</div>
