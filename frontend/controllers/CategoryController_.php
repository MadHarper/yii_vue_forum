<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\httpclient\Client;
use common\models\Category;
use common\models\CategorySearch;

/**
 * Site controller
 */
class CategoryController extends Controller
{


    public function actionIndex()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $searchModel = new CategorySearch();

        $dataProvider = $searchModel->searchFrontend(Yii::$app->request->queryParams);

        $dataProvider->pagination->pageSize = 15;

        $models = $dataProvider->getModels();

        $answer = [];

        foreach ($models as $model){
            $answer[$model->id]['model'] = $model;
            $answer[$model->id]['childs'] = $model->childs;
        }

        return $answer;
    }


}