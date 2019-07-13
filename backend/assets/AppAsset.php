<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/assets';

        public $css = [
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        'bower_components/Ionicons/css/ionicons.min.css',
        'css/AdminLTE.css',
        'css/skins/skin-blue.min.css',
    ];
    public $js = [
        //'//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js',
        //'plugins/bower_components/jquery/dist/jquery.min.js',
        'bootstrap/dist/js/bootstrap.min.js',
        'js/adminlte.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
