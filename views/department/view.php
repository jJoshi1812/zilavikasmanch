<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $model app\models\Department */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-view">

    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4 text-navy">
                    <h2>Department  detail</h2>
                    <ol class="breadcrumb">
                        <li>
                            <?= Html::a('Dashboard', ['/site/index'], ['class' => '']) ?>
                        </li>
                        <li>
                            <?= Html::a('Department', ['index'], ['class' => '']) ?>
                        </li>
                        <li class="active">
                            <strong><?= $model->name;?></strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="wrapper-content">
                    <div class="row">
                            <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title bg-success">
                                    <h3 class="pull-left">Problems</h3>
                                    <div class="ibox-tools">
                                         <?= Html::a('Add Problems', ['/problems/create'], ['class' => 'btn btn-sm btn-danger']) ?>
                                          </div>

                                            </div>
                                </div>
                                <div class="ibox-content">

                                    <div class="table-responsive">
                                <table class="table table-striped table-hover no-margins" >
                                
                                <tbody>
                                    <?= GridView::widget([
                                        'dataProvider' => $dataProviderProblem,
                                        //'filterModel' => $searchModel,
                                        'columns' => [
                                            ['class' => 'yii\grid\SerialColumn'],

                                            //'id',
                                            'title',
                                            //'department.name', 
                                            //'description:ntext',
                                            'date_added',
                                            //'user_id',
                                            'status.name',

                                            [
                                                'class' => 'yii\grid\ActionColumn',
                                                'header' => 'Actions',
                                                'template' => '{view}',
                                                'buttons' => [
                                                    'view' => function ($url, $model) {
                                                    return Html::a(' View', ['/problems/view','id'=>$model->id], [
                                                    'title' => Yii::t('app', 'view'), 'class'=>'btn btn-primary btn-xs'
                                                    ]);
                                                    },
                                                ],

                                            ],
                                        ],
                                    ]); ?>
                                </tbody>
                               
                                </table>
                                    </div>

                                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3">
                <div class="wrapper wrapper-content project-manager">
                    <h4><?= $model->name;?></h4>

                    <p class="small">
                        <?= $model->description;?>
                    </p>
                    <p class="small font-bold">
                        <span><i class="fa fa-circle text-warning"></i> High priority</span>
                    </p>


                    <ul class="list-unstyled project-files">
                                                <li>Updated on. <strong>23-10-17</strong></li>
                        <li>Status: <span class="label label-primary">Active</span></li>
                        <li></li>
                    </ul>
                    <div class="text-center m-t-md">



                    </div>
                </div>
            </div>
        </div>
        
        

</div>
