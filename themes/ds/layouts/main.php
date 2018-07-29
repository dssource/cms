<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\themes\assets\ds\BasicAsset;
use dssource\basic\models\Menu;
use dssource\basic\widgets\Alert;

BasicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!-- Digital-Solution.Ru -->
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
    <nav id="w0" class="navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="inset-logo">
                    <a  href="/"><img src="<?=$this->assetManager->getBundle(BasicAsset::className())->baseUrl?>/img/ds-logo.png" alt="Digital-Solution.Ru"></a>
                </div>
            </div>
            <div class="collapse navbar-collapse">
                <?= Menu::widget() ?>
            </div>
        </div>
    </nav>

        <?
        $breadCrumbs = Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]);

        if($breadCrumbs != '')
            echo '<div class="container">'.$breadCrumbs.'</div>';
        ?>
        <?= Alert::widget() ?>
    <?php $this->beginBody() ?>
        <?= $content ?>

</div>
<footer>
    <div class="container-fluid">
        <div class="rov">
            <div class="col-md-4 text-left">
                <p class="brand">Digital-Solution.Ru</p>
                <p><a href="/cms">Наша CMS</a></p>
                <p><a href="/work">Команда</a></p>
                <p><a href="/smi">Пресс-Kit</a></p>
                <p><a href="/smi">Контакты</a></p>
            </div>
            <div class="col-md-4 text-center">Кнопки соц сетей</div>
            <div class="col-md-4 text-right">Счетчики</div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
