<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

    <main id="content">
        <section id="main_visual">
            <div class="swiper main_visual_slide">
                <div class="swiper-wrapper">
                    <div class="itm itm01 swiper-slide"></div>
                    <div class="itm itm02 swiper-slide"></div>
                    <div class="itm itm03 swiper-slide"></div>
                </div>
            </div>
            <div class="slg title">
                <h2>순곱이네 배달전문점 창업주 모집</h2>
                <p>순곱이네는 오프라인 매장 오픈을 지원하기도 하지만
                    소규모 배달전문점 창업도 환영합니다.
                    배달전문점 창업도 순곱이네가 하면 다릅니다.</p>
            </div>
        </section>
        <section id="main_content" class="default">
            <div class="title">
                <h2>순곱이네 배달전문점 창업주 모집</h2>
                <p>순곱이네는 오프라인 매장 오픈을 지원하기도 하지만
                    소규모 배달전문점 창업도 환영합니다.
                    배달전문점 창업도 순곱이네가 하면 다릅니다.</p>
            </div>
            <div class="inner content">
                <div class="itm">
                    <img src="<?=G5_THEME_URL;?>/images/main_slider_n01.jpg" alt="">
                </div>
                <div class="itm">
                    <img src="<?=G5_THEME_URL;?>/images/main_slider_n02.jpg" alt="">
                </div>
                <div class="itm">
                    <img src="<?=G5_THEME_URL;?>/images/main_slider_n03.jpg" alt="">
                </div>
            </div>
        </section>
    </main>

<?php
include_once(G5_THEME_PATH.'/tail.php');