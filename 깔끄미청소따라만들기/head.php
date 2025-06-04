<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<header id="header">
    <div class="hd_top">
        <div class="inner">
            <strong>부산아파트입주청소 금맥청소 : 부산아파트입주청소 부산 양산 김해 기장 아파트입주청소 이사청소 오피스텔청소 상가청소 전문업체 금맥청소</strong>
            <a href="/adm" class="adm">
                <img src="/images/list.svg" alt="">
            </a>
        </div>
    </div>
    <div class="hd_bottom">
        <div class="inner">
            <h1>
                <a href="/">
                    <img src="/images/logo.png" alt="">
                </a>
            </h1>
            <nav class="gnb">
                <ul>
                    <li><a href="/sub01.html">깔끄미청소 소개</a></li>
                    <li><a href="/sub02.html">아파트입주청소</a></li>
                    <li><a href="/sub03.html">이사/상가청소</a></li>
                    <li><a href="/sub04.html">사무실청소</a></li>
                    <li><a href="/bbs/board.php?bo_table=free">청소갤러리</a></li>
                    <li><a href="/bbs/board.php?bo_table=free">질문과답변</a></li>
                </ul>
            </nav>
            <button class="mbtn">
                <img src="./images/list.svg" alt="">
            </button>
        </div>
    </div>
</header>