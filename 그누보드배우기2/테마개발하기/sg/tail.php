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
    if(!defined('_INDEX_')) { 
        include G5_THEME_PATH.'/sub.tail.php'; 
    }
    ?>
    <footer id="footer">
        <div class="inner">
            <ul class="customer">
                <li> (주)순곱이네프렌차이즈</li>
                <li> 부산광역시 동래구 명륜로 105 502호(동일빌딩)</li>
                <li>대표전화 : 051-555-6611 </li>
                <li>대표자 : 감정희 </li>
                <li>사업자등록번호 : 429-86-00393</li>
            </ul>
            <address>Copyright © (주)순곱이네프렌차이즈 All Rights Reserved.</address>
        </div>
    </footer>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");