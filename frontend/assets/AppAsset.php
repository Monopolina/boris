<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap',
        'assets/css/bootstrap.min.css',
        'assets/css/font-awesome.css',
        'assets/css/templatemo-hexashop.css',
        'assets/css/owl-carousel.css',
        'assets/css/lightbox.css',
    ];
    public $js = [

        'assets/js/popper.js',
        'assets/js/bootstrap.min.js',
        'assets/js/owl-carousel.js',
        'assets/js/accordions.js',
        'assets/js/datepicker.js',
        'assets/js/scrollreveal.min.js',

        'assets/js/jquery.counterup.min.js',
        'assets/js/imgfix.min.js',
        'assets/js/slick.js',
        'assets/js/lightbox.js',
        'assets/js/isotope.js',
        'assets/js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap5\BootstrapAsset',
    ];
}
