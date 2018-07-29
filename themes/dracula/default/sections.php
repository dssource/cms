<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 */

use yii\bootstrap\Html;
$this->params['breadcrumbs'][] = ['label' => 'Информация', 'url' => '/sections'];
$this->params['breadcrumbs'][] = ['label' => Html::encode($model->name)];
?>
<section class="white no-padding-top">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
           <h1><?=Html::encode($model->name)?></h1>
        </div>
    </div>
    <?php
    if(count($model->pages) == 0)
        echo '<div class="row">'
            .'  <div class="col-md-12 text-center">В данном разделе нет записей</div>'
            .'</div>';
    else
        foreach ($model->pages as $page)
    {

        if($show > 0)
            echo '<hr>';
        echo '<div class="row">'
            .'  <div class="col-md-3 text-center">'.Html::a(Html::img($page->imageUrl, ['style' => 'max-height: 150px; width: auto;']), $page->url).'</div>'
            .'  <div class="col-md-9 text-left">'
            .'<h2>'.Html::a(Html::encode($page->name), $page->url).'</h2>'
            .'<p>'.$page->short.'</p>'
            .'</div>'
            .'</div>';
        $show++;
    }
    ?>
</div>
</section>