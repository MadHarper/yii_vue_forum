<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\httpclient\Client;

/**
 * Site controller
 */
class AuthController extends Controller
{

    /*
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
    */



    public function actionAuthdate()
    {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if(Yii::$app->user->isGuest){
            return [
                'isAuth' => false
            ];
        }

        return [
            'isAuth' => true,
            'user_id' => Yii::$app->user->getIdentity()->id,
            'user_name' => Yii::$app->user->getIdentity()->username
        ];

    }



    public function actionLogin()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (!Yii::$app->user->isGuest) {
            return ['result' => false];
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return ['result' => true];
        } else {
            return ['result' => false]; //ToDo: и надо езе вернуть ошибки
        }
    }


    public function actionLogout()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;


        if(Yii::$app->user->logout()){
            return ['result' => true];
        }
    }
}
