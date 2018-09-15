<?php

namespace frontend\assets;

use sweelix\webpack\WebpackAssetBundle;

class WebpackAsset extends WebpackAssetBundle
{

    /**
     * @var bool enable caching system (default to false)
     */
    public $cacheEnabled = false;

    /**
     * @var \yii\caching\Cache cache name of cache to use, default to `cache`
     */
    public $cache = 'cache';

    /**
     * @var string base webpack alias (do not add /src nor /dist, they are automagically handled)
     */
    public $webpackPath = '@frontend/assets/webpack';

    /**
     * @var array list of webpack bundles to publish (these are the entries from webpack)
     * the bundles (except for the manifest one which should be in first position) must be defined
     * in the webpack-yii2.json configuration file
     */
    public $webpackBundles = [
        'manifest',
        'bootstrap'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}