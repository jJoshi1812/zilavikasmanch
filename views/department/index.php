<?php 
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Departments';
$this->params['breadcrumbs'][] = $this->title;
 ?>




<div class="row wrapper border-bottom white-bg page-heading">

                <div class="col-lg-10 text-navy">
                    <h2>DEPARTMENTS</h2>
                    <ol class="breadcrumb">
                        <li>
                            <?= Html::a('Dashboard', ['/site/index'], ['class' => '']) ?>
                        </li>

                        <li class="active">
                            Departments
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


                        <h5>Department's Data</h5>
                        <div class="ibox-tools">
                         <?= Html::a('Add Department', ['create'], ['class' => 'btn btn-sm btn-danger']) ?>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-hover no-margins" >
                    <tbody>
                         <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

                    </tbody>

                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>