<?php
namespace backend\assets;

class SweetAlertAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/sweetalert/dist';

    
    public $css = [
        'sweetalert.css',
    ];
    public $js = [
        'sweetalert.min.js'
    ];
}