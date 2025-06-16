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

    <section class="main_visual">
        <h2 class="blind">메인비주얼</h2>

        <div class="slg">
            <div class="txt">
                <strong>입는 순간 기분까지 상큼해져요!</strong>
                <p>아이 피부를 위한
                    <span>순한 촉감의 베이직 티셔츠</span>
                </p>
            </div>
        </div>


    </section>

    <section class="main_lnk">
        <h2 class="blind">메인링크</h2>
        <div class="inner rflx">
            <a href="./sub01.html" class="itm itm01">
                <i><img src="<?php echo G5_THEME_URL; ?>/images/main_lnk01.png" alt=""></i>
                <strong>무료배송,교환,반품</strong>
            </a>
            <a href="./sub02.html" class="itm itm02">
                <i><img src="<?php echo G5_THEME_URL; ?>/images/main_lnk02.png" alt=""></i>
                <strong>3시 이전 당일출고</strong>
            </a>
            <a href="./sub03.html" class="itm itm03">
                <i><img src="<?php echo G5_THEME_URL; ?>/images/main_lnk03.png" alt=""></i>
                <strong>등급별 혜택</strong>
            </a>
            <a href="" class="itm itm04">
                <i><img src="<?php echo G5_THEME_URL; ?>/images/main_lnk04.png" alt=""></i>
                <strong>이벤트</strong>
            </a>
            <a href="" class="itm itm05">
                <i><img src="<?php echo G5_THEME_URL; ?>/images/main_lnk05.png" alt=""></i>
                <strong>스타와함께</strong>
            </a>
            <a href="" class="itm itm06">
                <i><img src="<?php echo G5_THEME_URL; ?>/images/main_lnk06.png" alt=""></i>
                <strong>매장안내</strong>
            </a>
            <a href="" class="itm itm07">
                <i><img src="<?php echo G5_THEME_URL; ?>/images/main_lnk07.png" alt=""></i>
                <strong>포토리뷰</strong>
            </a>
            <a href="" class="itm itm08">
                <i><img src="<?php echo G5_THEME_URL; ?>/images/main_lnk08.png" alt=""></i>
                <strong>채팅상담</strong>
            </a>
        </div>
    </section>

    <section class="main_new default">
        <div class="inner">
            <div class="title">
                <h2>NEW ARRIVAL</h2>
                <p>가장 빠르게 만나는 최신 아이템, 누구보다 먼저 스타일을 완성해보세요.</p>
            </div>
            <div class="slide_wrap">
                <div class="swiper main_new_slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide itm">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/images/main_new01.jpg" alt="">
                            </figure>
                            <strong>갯벌친구 초경량 가슴장화</strong>
                            <p class="price">59,900원</p>
                        </div>
                        <div class="swiper-slide itm">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/images/main_new02.jpg" alt="">
                            </figure>
                            <strong>브리즈 실내복 상하복 세트</strong>
                            <p class="price">12,900원</p>
                        </div>
                        <div class="swiper-slide itm">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/images/main_new03.jpg" alt="">
                            </figure>
                            <strong>반짝하트 실내복 상하복 세트</strong>
                            <p class="price">17,900원</p>
                        </div>
                        <div class="swiper-slide itm">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/images/main_new04.jpg" alt="">
                            </figure>
                            <strong>디노공룡 실내복 상하복 세트</strong>
                            <p class="price">14,900원</p>
                        </div>
                        <div class="swiper-slide itm">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/images/main_new05.jpg" alt="">
                            </figure>
                            <strong>알라알라 실내복 상하복 세트</strong>
                            <p class="price">14,900원</p>
                        </div>
                        <div class="swiper-slide itm">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/images/main_new06.jpg" alt="">
                            </figure>
                            <strong>발레소녀 실내복 상하복 세트</strong>
                            <p class="price">12,900원</p>
                        </div>
                        <div class="swiper-slide itm">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/images/main_new07.jpg" alt="">
                            </figure>
                            <strong>컬러리본 실내복 상하복 세트</strong>
                            <p class="price">14,900원</p>
                        </div>
                        <div class="swiper-slide itm">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/images/main_new08.jpg" alt="">
                            </figure>
                            <strong>달콤머핀 실내복 상하복 세트</strong>
                            <p class="price">12,900원</p>
                        </div>
                        <div class="swiper-slide itm">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/images/main_new09.jpg" alt="">
                            </figure>
                            <strong>체리픽 반팔 티셔츠</strong>
                            <p class="price">9,900원</p>
                        </div>
                        <div class="swiper-slide itm">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/images/main_new10.jpg" alt="">
                            </figure>
                            <strong>안티버그 입는 모기장옷 상하 세트</strong>
                            <p class="price">39,900원</p>
                        </div>
                    </div>
                    <div class="page"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="main_basic default">
        <div class="title">
            <h2>BASIC ITEMS</h2>
            <p>매일 입어도 질리지 않는 심플한 디자인. 언제, 어디서나 자연스럽게 어울리는 데일리 아이템을 만나보세요.</p>
        </div>
        <div class="inner rflx">
            <a href="" class="itm">
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/images/main_basic01.jpg" alt="">
                </figure>
                <div class="colorchips">
                    <span style="background: #20C798;"></span>
                    <span style="background: #253266;"></span>
                    <span style="background: #FFDBDB;"></span>
                    <span style="background: #FF1C1C;"></span>
                    <span style="background: #f2e9d9;"></span>
                    <span style="background: #000000;"></span>
                    <span style="background: #3282E3;"></span>
                    <span style="background: #C9DBF7;"></span>
                </div>
                <strong>스튜디오 반팔 티셔츠</strong>
                <p class="price">12,900원</p>
                <em>리뷰 61</em>
            </a>
            <a href="" class="itm">
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/images/main_basic02.jpg" alt="">
                </figure>
                <div class="colorchips">
                    <span style="background: #E7A0A9;"></span>
                    <span style="background: #F1B39B;"></span>
                    <span style="background: #6ACEA6;"></span>

                </div>
                <strong>우리두리 티셔츠(2개 1세트)</strong>
                <p class="price">14,900원</p>
                <em>리뷰 16</em>
            </a>
            <a href="" class="itm">
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/images/main_basic03.jpg" alt="">
                </figure>
                <div class="colorchips">
                    <span style="background: #E0CAAA;"></span>
                    <span style="background: #878564;"></span>
                    <span style="background: #2C3A73;"></span>

                </div>
                <strong>네이처 린넨바지</strong>
                <p class="price">27,900원</p>
                <em>리뷰 9</em>
            </a>
            <a href="" class="itm">
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/images/main_basic04.jpg" alt="">
                </figure>
                <div class="colorchips">
                    <span style="background: #D987DB;"></span>
                    <span style="background: #000000;"></span>
                    <span style="background: #FDEB00;"></span>
                    <span style="background: #FEC0CB;"></span>

                </div>
                <strong>쥬시팝 치마레깅스(5부)</strong>
                <p class="price">15,900원</p>
                <em>리뷰 38</em>
            </a>
        </div>
        <div class="btn_wrap">
            <a href="./default._sub01.html" class="default_btn">의류 더보기</a>
        </div>
    </section>

    <section class="main_summer default">
        <div class="title">
            <h2>SWIMWEAR</h2>
            <p>아이들을 위해 특별히 디자인된 다채롭고 편안한 수영복으로, 해변이나 수영장에서 즐거운 시간을 보내세요!</p>
        </div>
        <div class="inner rflx">
            <a href="" class="itm">
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/images/main_summer01.jpg" alt="">
                </figure>
                <div class="colorchips">
                    <span style="background: #0000FD;"></span>
                </div>
                <strong>상어상어 래쉬가드</strong>
                <p class="price">29,900원</p>
                <em>리뷰 36</em>
            </a>
            <a href="" class="itm">
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/images/main_summer02.jpg" alt="">
                </figure>
                <div class="colorchips">
                    <span style="background: #0000FD;"></span>
                </div>
                <strong>빨간리본공주 래쉬가드</strong>
                <p class="price">49,900원</p>
                <em>리뷰 9</em>
            </a>
            <a href="" class="itm">
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/images/main_summer03.jpg" alt="">
                </figure>
                <div class="colorchips">
                    <span style="background: #FFFF01;"></span>
                </div>
                <strong>젤리젤리 래쉬가드</strong>
                <p class="price">29,900원</p>
                <em>리뷰 31</em>
            </a>
            <a href="" class="itm">
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/images/main_summer04.jpg" alt="">
                </figure>
                <div class="colorchips">
                    <span style="background: #0000FD;"></span>
                </div>
                <strong>브레드이발소 래쉬가드</strong>
                <p class="price">19,900원</p>
                <em>리뷰 16</em>
            </a>
        </div>
        <div class="btn_wrap">
            <a href="./default._sub02.html" class="default_btn">의류 더보기</a>
        </div>
    </section>

    <section class="oz_video default">
        <div class="title">
            <h2>OZKIZ VIDEO</h2>
            <p>일상 속 오즈키즈의 스타일을 영상으로 만나보세요.</p>
        </div>
        <div class="inner rflx">
            <video class="video" autoplay="" loop="" muted="" playsinline="" controls="">
                <source src="https://cdn.shopify.com/videos/c/o/v/da2455ee4a88436cb744a0c93c7c463a.mp4"
                    type="video/mp4">
            </video>
        </div>
    </section>

</main>


<?php
include_once(G5_THEME_PATH.'/tail.php');