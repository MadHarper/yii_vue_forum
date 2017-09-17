<?php
namespace frontend\controllers;


use common\models\Post;
use yii\rest\ActiveController;



class ThemeController extends ActiveController
{

    public $modelClass = 'common\models\Theme';


    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create']);
        //$actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }
}