<?php
use app\themes\assets\ds\BasicAsset;
echo "";

$themeFiles = $this->assetManager->getBundle(BasicAsset::className())->baseUrl;
?>
<section class="white" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
               <a href="#">
                   <img src="<?=$themeFiles?>/img/website.png" alt="Разработка сайтов">
                   <h2 class="s-color s-border s-title text-center">WEB-Сайты</h2>
               </a>
            </div>
            <div class="col-md-4 text-center">
                <a href="#">
                    <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
                    <h2 class="s-color s-border s-title text-center">PHP/JS - Скрипты</h2>
                </a>
            </div>
            <div class="col-md-4 text-center">
                <a href="#">
                    <img src="<?=$themeFiles?>/img/project.png" alt="Индивидуальный проект">
                    <h2 class="s-color s-border s-title text-center">Индивидуальный проект</h2>
                </a>
            </div>
        </div>
</div>
</section>
<section class="black" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Наши работы</h1>
            </div>
            <div class="fix-height-256 col-md-3 text-center">
                <div class="v-block">
                    <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
                </div>
                <div class="h-block">
                    <p>Портфолио 1</p>
                </div>
            </div>
            <div class="fix-height-256 col-md-3 text-center">
                <div class="v-block">
                    <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
                </div>
                <div class="h-block">
                    <p>Портфолио 2</p>
                </div>
            </div>
            <div class="fix-height-256 col-md-3 text-center">
                <div class="v-block">
                    <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
                </div>
               
                <div class="h-block">
                    <p>Портфолио 3</p>
                </div>
            </div>
            <div class="fix-height-256 col-md-3 text-center">
                <div class="v-block">
                    <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
                </div>
               
                <div class="h-block">
                    <p>Портфолио 4</p>
                </div>
            </div>
            <div class="fix-height-256 col-md-3 text-center">
                <div class="v-block">
                    <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
                </div>
                <div class="h-block">
                    <p>Портфолио 1</p>
                </div>
            </div>
            <div class="fix-height-256 col-md-3 text-center">
                <div class="v-block">
                    <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
                </div>
                <div class="h-block">
                    <p>Портфолио 2</p>
                </div>
            </div>
            <div class="fix-height-256 col-md-3 text-center">
                <div class="v-block">
                    <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
                </div>
                <div class="h-block">
                    <p>Портфолио 3</p>
                </div>
            </div>
            <div class="fix-height-256 col-md-3 text-center">
                <div class="v-block">
                    <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
                </div>
                <div class="h-block">
                    <p>Портфолио 4</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Преимущества работы с нами</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
            </div>
            <div class="col-md-6">
                <p>Ололо и трололо</p>
            </div>
        </div>
    </div>
</section>
<section class="black" id="partners">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Клиенты, партнеры и отзывы о нас</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
            </div>
            <div class="col-md-6">
                <p>Ололо и трололо</p>
            </div>
        </div>
    </div>
</section>
<section class="white" id="quest">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Остались вопросы?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?=$themeFiles?>/img/php-code.png" alt="PHP/JS-Скрипты">
            </div>
            <div class="col-md-6">
                <p>Ололо и трололо</p>
            </div>
        </div>
    </div>
</section>
<?php

$JsController = <<<JS
$(".h-block").hide();
$(".v-block").hover(function(){
    //$(this).hide();
    $(this).next(".h-block").css('display', 'inline-block'); //.show();
});
$(".h-block").mouseleave(function() {
    $(this).css('display', 'none');//hide();
    //$(this).prev(".v-block").show();
});
JS;

$this->registerJs($JsController);


?>
