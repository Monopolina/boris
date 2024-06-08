<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name;
?>

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>Увлажнители</h4>
                            <span>Свежесть. Свобода. Стиль</span>
                            <div class="main-border-button">
                                <a href=<?= Yii::$app->urlManager->createUrl(["equipment/magazin"]) ?>>Купить</a>
                            </div>
                        </div>
                        <img src="assets/images/left-banner-image.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Кондиционеры</h4>
                                        <span>Комфорт в любых условиях</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Кондиционеры</h4>
                                            <p>Комфорт в любых условиях</p>
                                            <div class="main-border-button">
                                                <a href=<?= Yii::$app->urlManager->createUrl(["equipment/magazin"]) ?>>В магазин</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/baner-right-image-01.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Вентиляторы</h4>
                                        <span>Создай свой климат</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Вентиляторы</h4>
                                            <p>Создай свой климат</p>
                                            <div class="main-border-button">
                                                <a href=<?= Yii::$app->urlManager->createUrl(["equipment/magazin"]) ?>>В магазин</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/baner-right-image-02.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Осушители</h4>
                                        <span>Мы создаем погоду в доме</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Осушители</h4>
                                            <p>Мы создаем погоду в доме</p>
                                            <div class="main-border-button">
                                                <a href=<?= Yii::$app->urlManager->createUrl(["equipment/magazin"]) ?>>В магазин</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/baner-right-image-03.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Очистители воздуха</h4>
                                        <span>Комфорт Стиль. Мы работаем для вас</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Очистители воздуха</h4>
                                            <p>Комфорт Стиль. Мы работаем для вас</p>
                                            <div class="main-border-button">
                                                <a href=<?= Yii::$app->urlManager->createUrl(["equipment/magazin"]) ?>>В магазин</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/baner-right-image-04.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Men Area Starts ***** -->
<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Новые кондиционеры</h2>
                    <span>Самые распространённые устройства для кондиционирования воздуха. </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        <?php 
                        $counter = 0;
                        foreach ($equipments as $equipment): ?>
                            <?php if ($equipment->type_equipment == 'Кондиционер' && $counter < 4): ?>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <?= \yii\helpers\Html::img("$equipment->foto") ?>
                                    </div>
                                    <div class="down-content">
                                        <h4><?= $equipment->name_equipment ?></h4>
                                        <span>$<?= $equipment->price_equipment ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Men Area Ends ***** -->

<!-- ***** Women Area Starts ***** -->
<section class="section" id="women">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Новые вентиляторы</h2>
                    <span> Простое и доступное решение для обеспечения циркуляции воздуха в помещении.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="women-item-carousel">
                    <div class="owl-women-item owl-carousel">
                        <?php 
                        $counter = 0;
                        foreach ($equipments as $equipment): ?>
                            <?php if ($equipment->type_equipment == 'Вентилятор' && $counter < 4): ?>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <?= \yii\helpers\Html::img("$equipment->foto") ?>
                                    </div>
                                    <div class="down-content">
                                        <h4><?= $equipment->name_equipment ?></h4>
                                        <span>$<?= $equipment->price_equipment ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Women Area Ends ***** -->

<!-- ***** Kids Area Starts ***** -->
<section class="section" id="kids">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Новые осушители</h2>
                    <span>Необходимы в случае избыточной влажности, которая может привести к появлению плесени и
                        грибка.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="kid-item-carousel">
                    <div class="owl-kid-item owl-carousel">
                        <?php 
                        $counter = 0;
                        foreach ($equipments as $equipment): ?>
                            <?php if ($equipment->type_equipment == 'Осушитель воздуха' && $counter < 4): ?>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <?= \yii\helpers\Html::img("$equipment->foto") ?>
                                    </div>
                                    <div class="down-content">
                                        <h4><?= $equipment->name_equipment ?></h4>
                                        <span>$<?= $equipment->price_equipment ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Kids Area Ends ***** -->