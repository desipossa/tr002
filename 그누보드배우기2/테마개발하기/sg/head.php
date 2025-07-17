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
        <div class="inner hd_wrap">
            <h1>
                <a href="/">
                    <img src="<?=G5_THEME_URL;?>/images/logo_h.svg" alt="">
                </a>
            </h1>
            <nav class="gnb">
                <ul>
                    <li><a href="<?=G5_THEME_URL;?>/sub01.php">순곱이네 스토리</a></li>
                    <li><a href="<?=G5_THEME_URL;?>/sub02.php"> 순곱이네 메뉴</a></li>
                    <li><a href="<?=G5_THEME_URL;?>/sub03.php"> 순곱이네 창업</a></li>
                    <li><a href="<?=G5_THEME_URL;?>/sub04.php"> 순곱이네 매장</a></li>
                    <li><a href="/bbs/board.php?bo_table=qa"> 문의게시판</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <?php
    if(!defined('_INDEX_')) { 
        include G5_THEME_PATH.'/sub.head.php'; 
    }
    ?>
    
   