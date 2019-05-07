<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Solutions */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Solutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solutions-view">

    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4 text-navy">
                    <h2>Solution</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="admin_dashboard.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="Issues.html">Problems</a>
                        </li>
                        <li>
                            <a href="issues_view.html">Problem Details</a>
                        </li>
                        <li class="active">
                            <strong>Solution Detail</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-sm-8">
                      <div class="title-action text-navy"><small>Uploaded By</small>
                        <a href="userlink"><?= $model->students->username ?></a>
                    </div><small class="pull-right text-navy"></small>
                </div>
            </div>

        
                <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title bg-success">
                        <h5><?= $model->title ?></h5>
                        <div class="ibox-tools">
                            
                        </div>
                    </div>
                    
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div><h4><?= $model->description ?></h4><br></div>    
                                    
                                </form>
                                
                                
                            </div>
                            
                            
                        </div></div>
                    </div>       <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"><strong>Accept</strong></button>
                </div>
            </div>
        </div>

</div>
