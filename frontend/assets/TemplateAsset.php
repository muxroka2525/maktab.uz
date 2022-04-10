<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class TemplateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/bootstrap.min.css',
        '/css/style.css',
        '/css/versions.css',
        '/css/responsive.css',
        '/css/custom.css',
    ];
    public $js = [
        '/js/modernizer.js',
        '/js/all.js',
        '/js/custom.js',
        '/js/timeline.min.js',
        '/js/myjs.js',
    ];
    
    public $depends = [
    ];


}
