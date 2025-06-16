<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
<header id="header">
    <div class="hd_wrap">
        <div class="inner">
            <h1>
                <a href="/"><img src="<?php echo G5_THEME_URL; ?>/images/logo1.png" alt="오즈키즈"></a>
            </h1>

            <nav class="gnb">
                <ul>
                    <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub01.html">New</a></li>
                    <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub02.html">Best</a></li>
                    <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub03.html">컨셉</a></li>
                    <li><a href="./menu_sub04.html">의류</a></li>
                    <li><a href="./menu_sub05.html">신발</a></li>
                    <li><a href="./menu_sub06.html">잡화</a></li>
                    <li><a href="./menu_sub07.html">Sale</a></li>
                    <li><a href="/bbs/board.php?bo_table=qa">Q &amp; A Board</a></li>
                </ul>
            </nav>

            <button class="hamburger hamburger--spring mbtn" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <div class="utils">
                <a href="">
                    <img src="<?php echo G5_THEME_URL; ?>/images/shopping-cart.svg" alt="">
                </a>
                <a href="">
                    <img src="<?php echo G5_THEME_URL; ?>/images/user.svg" alt="">
                </a>
                <a href="">
                    <img src="<?php echo G5_THEME_URL; ?>/images/search.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</header>

<?php
    if(!defined('_INDEX_')) { // index가 아닐 때
        include G5_THEME_PATH.'/sub.head.php'; // 팝업레이어
    }
    ?>