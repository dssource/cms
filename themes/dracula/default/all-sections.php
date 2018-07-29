<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 */

use yii\bootstrap\Html;
$this->params['breadcrumbs'][] = ['label' => 'Информация'];
?>
<section class="white no-padding-top">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
           <h1>Разделы</h1>
        </div>
    </div>
    <?php

    $show = 0;

    if(count($models) == 0)
        echo '<div class="row">'
            .'  <div class="col-md-12 text-center">В данном разделе нет записей</div>'
            .'</div>';
    else
        foreach ($models as $model)
        {
            if($model->id == 1) continue;
            if($show > 0)
                echo '<hr>';
            echo '<div class="row">'
                .'  <div class="col-md-3 text-center">'.Html::a(Html::img($model->imageUrl, ['style' => 'max-height: 150px; width: auto;']), $model->url).'</div>'
                .'  <div class="col-md-9 text-left">'
                .'<h2>'.Html::a(Html::encode($model->name), $model->url).'</h2>'
                .'<p>'.$model->description.'</p>'
                .'</div>'
                .'</div>';
            $show++;
        }
    ?>
</div>
</section>