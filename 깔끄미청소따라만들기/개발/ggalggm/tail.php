<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
    if(!defined('_INDEX_')) { // index가 아닐 때
        include G5_THEME_PATH.'/sub.tail.php'; // 팝업레이어
    }
    ?>

<footer id="footer">
    <div class="inner">
        <p>부산광역시 북구 만덕2로 14 상가동 제314호</p>
        <ul class="customer">
            <li>대표자 : 전정선</li>
            <li>사업자등록번호 : 606-11-45081</li>
            <li>Tel : 051-331-3354 </li>
            <li>e-mail : jjs3354@naver.com</li>
        </ul>
        <address>
            &copy; 부산아파트입주청소 깔끄미청소 All Rights Reserved.
        </address>
    </div>

</footer>
<?php
include_once(G5_THEME_PATH."/tail.sub.php");