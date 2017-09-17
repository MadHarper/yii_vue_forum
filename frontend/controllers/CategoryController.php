<?php
namespace frontend\controllers;


use common\models\Post;
use yii\rest\ActiveController;
use common\models\CategorySearch;



class CategoryController extends ActiveController
{

    public $modelClass = 'common\models\Category';


    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create'], $actions['delete'], $actions['update']);

        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }


    public function actionSub($slug)
    {
        $searchModel = new CategorySearch();

        return $searchModel->searchSub($slug);
    }


    public function prepareDataProvider()
    {
        $searchModel = new CategorySearch();
        return $searchModel->searchFrontend(\Yii::$app->request->queryParams);
    }


}