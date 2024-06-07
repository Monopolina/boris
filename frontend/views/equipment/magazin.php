<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = Yii::$app->name;
?>

<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>«КлиматКонтроль»</h2>
                    <span>Покутайте у нас</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Products Area Starts ***** -->
<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Наши продукты</h2>
                    <span>Ознакомьтесь со всеми нашими продуктами.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($equipments as $equipment): ?>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="<? Url::to(['equipment/view', 'id => $equipment->id_equipment']) ?>"><i
                                                class="fa fa-eye"></i></a></li>
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
                </div>
            <?php endforeach; ?>
            <div class="col-lg-12">
                <div class="pagination">
                    <?= LinkPager::widget(['pagination' => $pages]) ?>
                    <!-- <ul>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">></a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Products Area Ends ***** -->