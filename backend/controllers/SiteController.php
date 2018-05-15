<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\projectregister;
use backend\models\runningprojectipc;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','projectstatus','detailproject'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
    public function actionProjectstatus()
    {
       $projectname=Projectregister::find()->all();
       $projectamount=Runningprojectipc::find()->all();

          return $this->render('projectstatus', [
            'projectname' => $projectname,
            'Projectamount' => $projectamount,
            
            ]);
    }
    
   // public function actionProjectamount()
    //{
      //  {
      // $Projectamount=runningprojectipc::find()->all();

        //  return $this->render('projectstatus', [
          //  'Projectamount' => $Projectamount,
            

            //]);
   // }
    //}
public function actionDetailproject($id)
    {
        $projectnames =Projectregister::find()->where(['Project_Id'=>$id])->one();
        $projectamounts =Runningprojectipc::find()->where(['Project_Id'=>$id])->one();

          return $this->render('detailproject', [
            'projectnames'=>$projectnames,
            'projectamounts'=>$projectamounts,
            ]);
    }
    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
