<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = '@backend/themes/argon';

    public $css = [
       'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700',
       'https://use.fontawesome.com/releases/v5.0.6/css/all.css',
       './assets/css/nucleo-icons.css',
       './assets/css/nucleo-svg.css',
       './assets/css/font-awesome.css',
       './assets/css/nucleo-svg.css',
       './assets/css/argon-design-system.css?v=1.2.2',


    ];
    public $js = [
        'js/yii_overrides.js',
        'https://kit.fontawesome.com/42d5adcbca.js',
        './assets/js/core/popper.min.js',
        './assets/js/core/bootstrap.min.js',
        './assets/js/plugins/perfect-scrollbar.min.js',
        './assets/js/plugins/countup.min.js',
        './assets/js/plugins/choices.min.js',
        './assets/js/plugins/prism.min.js',
        './assets/js/plugins/highlight.min.js',
        './assets/js/plugins/rellax.min.js',
        './assets/js/plugins/tilt.min.js',
        './assets/js/plugins/choices.min.js',
        './assets/js/plugins/parallax.min.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI',
        './assets/js/material-kit.min.js?v=3.0.0',
        ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',

        'backend\assets\SweetAlertAsset',
    ];
}
