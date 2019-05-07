<?php 

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Problems';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10 text-navy">
                    <h2>Problems</h2>
                    <ol class="breadcrumb">
                        <li>
                            <?= Html::a('Dashboard', ['/site/index'], ['class' => '']) ?>
                        </li>

                        <li class="active">
                            <strong>Problems</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title bg-success">
                        <h5>Problems Data</h5>
                        <div class="ibox-tools">
                           <?= Html::a('Add Problems', ['create'], ['class' => 'btn btn-sm btn-danger']) ?>
                        </div>

                                </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            //'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                //'id',
                                'title',
                                'department.name', 
                                'description:ntext',
                                //'date_added',
                                //'user_id',
                                'status.name',

                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    
                        </div>

                    </div>
                </div>
            </div>
            </div>