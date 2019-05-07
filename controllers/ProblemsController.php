<?php

namespace app\controllers;

use Yii;
use app\models\Problems;
use app\models\ila_student\Solutions;
use app\models\ProblemsSearch;
use app\models\ila_student\SolutionsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Status;

/**
 * ProblemsController implements the CRUD actions for Problems model.
 */
class ProblemsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','create','delete','view','update'],
                'rules' => [
                    [
                        'actions' => ['index','create','delete','view','update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Problems models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProblemsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Problems model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $searchModelSolution = new SolutionsSearch();
        $dataProviderSolution = $searchModelSolution->search(Yii::$app->request->queryParams,$id);
        $sol=Solutions::find()->where(['problem_id'=>$id])->count();
        return $this->render('view', [
            'searchModelSolution' => $searchModelSolution,
            'dataProvider' => $dataProviderSolution,
            'sol'=>$sol,
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Problems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Problems();
        $model->date_added = date('Y-m-d');
        $model->user_id = Yii::$app->user->getId();
        

        $modelStatus = Status::find()->where(['name'=>'pending'])->one();
        $model->status_id = $modelStatus->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            //print_r($model->getErrors());
            //exit();
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Problems model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Problems model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Problems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Problems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Problems::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
