<?php
namespace onix\assets;

use yii\web\AssetBundle as YiiAssetBundle;

class AppearAsset extends YiiAssetBundle
{
    public $sourcePath = '@bower/appear';

    public $js = [
        'jquery.appear.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
