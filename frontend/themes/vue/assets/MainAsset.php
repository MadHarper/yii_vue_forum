<?php

namespace frontend\themes\vue\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/vue/web';
    //public $baseUrl = '@web';



    public $publishOptions = [
        'only'=>[
            'css/*',
            'js/*',
            'vue/dist/*',
            //'vue/build/*',
        ],
    ];


    public $css = [
        'css/site.css',
        'css/animate.css',
    ];
    public $js = [
        'vue/dist/build.js',
        //'vue/build/build.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
