<?php
namespace onix\assets;

use yii\web\AssetBundle;

class AppearAsset extends AssetBundle
{
    public $sourcePath = '@bower/appear';

    public $js = [
        'jquery.appear.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
