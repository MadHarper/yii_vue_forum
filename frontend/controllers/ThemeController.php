<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\httpclient\Client;
use common\models\Theme;
use common\models\ThemeSearch;

/**
 * Site controller
 */
class ThemeController extends Controller
{


    public function actionIndex()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $searchModel = new ThemeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $models = $dataProvider->getModels();


        return [
            'themes' => $models
        ];


        //return $this->render('index', ['searchModel' => $searchModel, 'dataProvider' => $dataProvider,]);
    }


}