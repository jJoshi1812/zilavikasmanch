<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CollectorDistrictSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Collector Districts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collector-district-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Collector District', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'district_id',
            'user_id',
            'status',
            'added_on',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
