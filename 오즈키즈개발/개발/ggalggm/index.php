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
            <div class="swiper main_slg_slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide itm">
                        <div class="txt">
                            <strong>부산 아파트입주청소</strong>
                            <em>신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소</em>
                            <p>보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                                구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.</p>
                        </div>
                    </div>
                    <div class="swiper-slide itm">
                        <div class="txt">
                            <strong>부산 아파트입주청소</strong>
                            <em>신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소</em>
                            <p>보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                                구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.</p>
                        </div>
                    </div>
                    <div class="swiper-slide itm">
                        <div class="txt">
                            <strong>부산 아파트입주청소</strong>
                            <em>신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소</em>
                            <p>보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                                구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page"></div>
        </div>
    </section>
    <section class="main_lnk">
        <h2 class="blind">메인 링크</h2>
        <div class="inner">
            <a href="" class="itm" style="--x: 0; --bg: #da544b">
                <i>icon</i>
                <strong>아파트입주청소</strong>
            </a>
            <a href="" class="itm" style="--x: -100px; --bg: #f4cb4f">
                <i>icon</i>
                <strong>아파트입주청소</strong>
            </a>
            <a href="" class="itm" style="--x: -200px; --bg: #337689">
                <i>icon</i>
                <strong>아파트입주청소</strong>
            </a>
            <a href="" class="itm" style="--x: -300px; --bg: #6fa476">
                <i>icon</i>
                <strong>아파트입주청소</strong>
            </a>
            <a href="tel:051-331-3354" class="customer">
                <i>
                    <img src="<?php echo G5_THEME_URL; ?>/images/icon_user-plus.svg" alt="">
                </i>
                <strong>051-331-3354</strong>
                <p>부산 김해 양산 기장 아파트입주청소 이사청소<br>
                    믿고 맡길 수 있는 청소 전문업체</p>
            </a>
        </div>
    </section>
    <section class="main_content default">
        <h2 class="blind">아파트입주청소</h2>
        <div class="inner flx gap30">
            <a href="" class="itm">
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/images/main_content01.jpg" alt="">
                </figure>
                <strong>부산 아파트입주청소</strong>
                <p>
                    신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                    보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                    구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.
                </p>
            </a>
            <a href="" class="itm">
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/images/main_content02.jpg" alt="">
                </figure>
                <strong>부산 아파트입주청소</strong>
                <p>
                    신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                    보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                    구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.
                </p>
            </a>
            <a href="" class="itm">
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/images/main_content03.jpg" alt="">
                </figure>
                <strong>부산 아파트입주청소</strong>
                <p>
                    신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                    보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                    구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.
                </p>
            </a>
        </div>
    </section>
    <section class="main_map default">
        <h2 class="blind">찾아오시는길</h2>

        <div class="inner flx gap30">
            <div class="customer">
                <h3>알려드립니다. <a href="">more</a></h3>

                <a href="" class="itm">
                    <strong>똑소리나게 일잘하는 부산 청소업체 부산아파트입주청소 금맥청소</strong>
                    <p>
                        똑소리나게 일잘하는 부산 청소업체 부산아파트입주청소 금맥청소 홈페이지를 찾아주시는 고객 여러분 감사합니다. 합리적인 견적으로 정말 똑소리나게 일잘하는 부산 청…
                    </p>
                    <em>2010-01-22</em>
                </a>
                <a href="" class="itm">
                    <strong>똑소리나게 일잘하는 부산 청소업체 부산아파트입주청소 금맥청소</strong>
                    <p>
                        똑소리나게 일잘하는 부산 청소업체 부산아파트입주청소 금맥청소 홈페이지를 찾아주시는 고객 여러분 감사합니다. 합리적인 견적으로 정말 똑소리나게 일잘하는 부산 청…
                    </p>
                    <em>2010-01-22</em>
                </a>

            </div>
            <div class="__map">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1748312935623" class="root_daum_roughmap root_daum_roughmap_landing"
                    style="width: 100%;">
                </div>

                <!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
                <script charset="UTF-8" class="daum_roughmap_loader_script"
                    src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp": "1748312935623",
                        "key": "2i43qi5qcv7",
                        // "mapWidth": "640",
                        "mapHeight": "360"
                    }).render();
                </script>
            </div>
        </div>

        <style>
            .cont {
                display: none;
            }

            .wrap_controllers {
                display: none;
            }

            .border2 {
                display: block !important;
            }
        </style>
    </section>
</main>


<?php
include_once(G5_THEME_PATH.'/tail.php');