<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\SkpdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Skpds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpd-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Skpd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'inisial',
            'alamat',
            'phone',
            // 'email:email',
            // 'pj_sakip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
