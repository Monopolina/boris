<?php
/** @var yii\web\View $this */
use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href=<?= Yii::$app->urlManager->createUrl(["equipment/index"]) ?> class="active">Главная</a></li>
                            <li class="scroll-to-section"><a href="<?= Yii::$app->urlManager->createUrl(["equipment/index"]) ?>#men">Кондиционеры</a></li>
                            <li class="scroll-to-section"><a href="<?= Yii::$app->urlManager->createUrl(["equipment/index"]) ?>#women">Увлажнители</a></li>
                            <li class="scroll-to-section"><a href="<?= Yii::$app->urlManager->createUrl(["equipment/index"]) ?>#kids">Очистители воздуха</a></li>
                            <li class="submenu">
                                <a>Страницы</a>
                                <ul>
                                    <li><a href=<?= Yii::$app->urlManager->createUrl(["equipment/about"]) ?>>О нас</a>
                                    </li>
                                    <li><a href=<?= Yii::$app->urlManager->createUrl(["equipment/magazin"]) ?>>Магазин</a>
                                    </li>
                                    <li><a href=<?= Yii::$app->urlManager->createUrl(["equipment/corzina"]) ?>>Корзина</a>
                                    </li>
                                    <li><a href=<?= Yii::$app->urlManager->createUrl(["equipment/contact"]) ?>>Связь с нами</a></li>
                                </ul>
                            </li>

                            <li class="scroll-to-section"><a href="#explore">Вход</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <?= $content ?>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Санни-Айлс-Бич, Флорида 33160, Соединенные Штаты
                                    Америки</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Покупки и категории</h4>
                    <ul>
                        <li><a href="#">Кондиционеры</a></li>
                        <li><a href="#">Увлажнители</a></li>
                        <li><a href="#">Очистители воздуха</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Полезные ссылки</h4>
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Связь с нами</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Справка и информация</h4>
                    <ul>
                        <li><a href="#">Помощь</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Авторское право © 2024 Климатическая техника., все права защищены.
                            <br>Дезайн: Ищенко Борис
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage(); ?>