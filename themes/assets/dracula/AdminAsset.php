<?php

namespace app\themes\assets\dracula;

use yii\web\AssetBundle;
use dssource\basic\core\Themes;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $sourcePath;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->sourcePath = Themes::activeThemeRootPath().'/res/admin';
    }

    public $css = [
        'css/admin.css',
        'css/bootstrap-theme.css',
    ];
    public $js = [
        'js/jquery.liTranslit.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
