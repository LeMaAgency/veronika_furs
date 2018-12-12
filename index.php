<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<div class="slider-section">
    <div class="profile-info">
        <div class="d-flex align-items-center w-100">
            <div class="mx-auto profile-inner">
                <h2>Johnston Malone<span>Photographer</span></h2>
                <span class="border-1"></span>
                <span class="border-2"></span>
            </div>
        </div>
    </div>
    <div class="owl-carousel main-slider">
        <div class="slide-item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/slider-1.jpg);"></div>
        <div class="slide-item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/slider-2.jpg);"></div>
        <div class="slide-item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/slider-3.jpg);"></div>
    </div>
</div><!-- Slider -->

<section class="about-section padding">
    <div class="container">
        <a href="#" class="profile"></a>
        <div class="about-content text-center">
            <h2 class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">"VERONIKA   FURS” - интернет- магазин верхней женской одежды из меха, кожи и аксессуаров.
                <br> Мы сотрудничаем напрямую с производителями и делаем лучшее доступным</h2>
            <img class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" src="<?=SITE_TEMPLATE_PATH?>/img/sign.png" alt="sign">
        </div>
    </div>
</section><!-- About -->

<section class="gallery-section padding">
    <div class="container">
        <div class="row gallery-items">
            <div class="col-md-6 single-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="gallery-wrap">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery-1.jpg" alt="pic">
                    <div class="gallery-content">
                        <h3>Коллекции</h3>
                        <a href="#" class="gallery-link" >Подробнее <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- Pic-1 -->
            <div class="col-md-6 single-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                <div class="gallery-wrap">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery-2.jpg" alt="pic">
                    <div class="gallery-content">
                        <h3>Рекомендуем</h3>
                        <a href="#" class="gallery-link" >Подробнее <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- Pic-2 -->
            <div class="col-md-6 single-item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                <div class="gallery-wrap">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery-3.jpg" alt="pic">
                    <div class="gallery-content">
                        <h3>Бренды</h3>
                        <a href="/brands/" class="gallery-link" >Подробнее <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- Pic-3 -->
            <div class="col-md-6 single-item wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                <div class="gallery-wrap">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery-4.jpg" alt="pic">
                    <div class="gallery-content">
                        <h3>Новые поступления</h3>
                        <a href="#" class="gallery-link" >Подробнее <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- Pic-4 -->
            <div class="col-md-6 single-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                <div class="gallery-wrap">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery-5.jpg" alt="pic">
                    <div class="gallery-content">
                        <h3>О нас</h3>
                        <a href="/about/" class="gallery-link" >Подробнее <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- Pic-5 -->
            <div class="col-md-6 single-item wow fadeInUp" data-wow-delay="650ms" data-wow-duration="1000ms">
                <div class="gallery-wrap">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery-6.jpg" alt="pic">
                    <div class="gallery-content">
                        <h3>Новости</h3>
                        <a href="/news/" class="gallery-link" >Подробнее <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- Pic-6 -->
        </div>
        <div class=" w-100 text-center">
            <a class="load-more" href="#"><i class="ti-reload"></i>Load More Photographs</a>
        </div>
    </div>
</section><!-- Gallery -->

<div class="instagram-import">
    <div id="instafeed" class="instafeed"></div>
</div><!-- Instafeed -->

<div class="clearfix"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
