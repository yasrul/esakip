<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MisiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Misis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="misi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Misi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_renstra',
            'misi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
