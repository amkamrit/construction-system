<?php

namespace backend\controllers;

use Yii;
use backend\models\Vehicleinformation;
use backend\models\VehicleinformationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * VehicleinformationController implements the CRUD actions for Vehicleinformation model.
 */
class VehicleinformationController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Vehicleinformation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VehicleinformationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionMultiple()
    {
        return $this->render('multiple');
    }

    /**
     * Displays a single Vehicleinformation model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Vehicleinformation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Vehicleinformation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //Information of Upload file

             $imageName=$model->Vechicle_Number;
            $model->file=UploadedFile::getInstance($model,'file');
            $model->file->saveAs( 'uploaded/'.$imageName.'.'.$model->file->extension);
            //save the image 
            $model->Images='uploaded/'.$imageName.'.'.$model->file->extension;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->Vechicle_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
public function actionUpload()
{
    $fileName = 'filess';
    $uploadPath = 'uploaded';

    if (isset($_FILES[$fileName])) {
        $file = \yii\web\UploadedFile::getInstanceByName($fileName);

        //Print file data
        //print_r($file);

        if ($file->saveAs($uploadPath . '/' . $file->name)) {
            //Now save file data to database

            echo \yii\helpers\Json::encode($file);
        }
    }else {
        return $this ->render('uploaded');
    }

    return false;
}
    /**
     * Updates an existing Vehicleinformation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Vechicle_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Vehicleinformation model.
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
     * Finds the Vehicleinformation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Vehicleinformation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vehicleinformation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
