<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\themes\assets\dracula\BasicAsset;
use dssource\basic\models\Menu;
use dssource\basic\widgets\Alert;

BasicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div class="wrap">
    <?php
    NavBar::begin([ // отрываем виджет
        'brandLabel' => 'Моя организация', // название организации
        'brandUrl' => Yii::$app->homeUrl, // ссылка на главную страницу сайта
        'options' => [
            'class' => 'navbar-inverse', // стили главной панели
        ],
    ]);

    echo Menu::widget();


    NavBar::end(); // закрываем виджет
    ?>
    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    <?php $this->beginBody() ?>
        <?= $content ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
