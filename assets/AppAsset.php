<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'font-awesome/css/font-awesome.css',
        'css/animate.css',
        'css/style.css',

    ];
    public $js = [
    'js/jquery-3.1.1.min.js',
    'js/bootstrap.min.js',
    'js/plugins/metisMenu/jquery.metisMenu.js',
    'js/plugins/slimscroll/jquery.slimscroll.min.js',
    'js/plugins/flot/jquery.flot.js',
    'js/plugins/flot/jquery.flot.tooltip.min.js',
    'js/plugins/flot/jquery.flot.spline.js',
    'js/plugins/flot/jquery.flot.resize.js',
    'js/plugins/flot/jquery.flot.pie.js',
    'js/plugins/flot/jquery.flot.symbol.js',
    'js/plugins/flot/jquery.flot.time.js',
    'js/plugins/peity/jquery.peity.min.js',
    'js/demo/peity-demo.js',
    'js/inspinia.js',
    'js/plugins/pace/pace.min.js',
    'js/plugins/jquery-ui/jquery-ui.min.js',
    'js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
    'js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    'js/plugins/easypiechart/jquery.easypiechart.js',
    'js/plugins/sparkline/jquery.sparkline.min.js',
    'js/demo/sparkline-demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}

