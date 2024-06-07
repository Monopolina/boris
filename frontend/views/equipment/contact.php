<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name;
?>
<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading about-page-heading" id="top">
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

<!-- ***** Contact Area Starts ***** -->
<div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8723.253759221128!2d53.2204186!3d56.8662945!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43e1385683a284f9%3A0x41d7f061d885889b!2z0JrQu9C40LzQsNGCLdCa0L7QvdGC0YDQvtC70Yw!5e0!3m2!1sru!2sru!4v1711976256697!5m2!1sru!2sru"
                        width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <!-- You can simply copy and paste "Embed a map" code from Google Maps for any location. -->

                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>«КлиматКонтроль»</h2>
                    <span>Подбор аналогов вентиляционного оборудования. Консультирование. Закажи онлайн консультацию ЗДЕСЬ.</span>
                </div>
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Ваше имя" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input name="email" type="text" id="email" placeholder="Ваш email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Ваще сообщение"
                                    required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button"><i
                                        class="fa fa-vk"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ***** Contact Area Ends ***** -->

<!-- ***** Subscribe Area Starts ***** -->
<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2>Подписавшись На Нашу Рассылку Новостей, Вы Можете Получить Скидку 30%</h2>
                    <span>Да, да! Это не шутки подписывайся!</span>
                </div>
                <form id="subscribe" action="" method="get">
                    <div class="row">
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Ваше имя" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Ваш Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-2">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button"><i
                                        class="fa fa-vk"></i></button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Местоположение магазина:<br><span>Ижевск, ул. Удмуртская 255В, отдел 123 (ТЦ «Флагман-Дисконт»)</span></li>
                            <li>Телефон:<br><span>+7(3412)97-09-67</span></li>
                            <li>Расположение офиса:<br><span>Удмуртская ул., 255В, Ижевск, республика Удмуртия, 426000</span></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Часы работы:<br><span>пн - пт 9 до 19, сб - вс 9 до 17</span></li>
                            <li>Email:<br><span>admin@klimat-kontrol.com</span></li>
                            <li>Социальные сети:<br><span><a href="https://vk.com/boris2282">VK</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Subscribe Area Ends ***** -->