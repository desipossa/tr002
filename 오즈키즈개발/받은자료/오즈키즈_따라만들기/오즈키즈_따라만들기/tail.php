<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>
<footer id="footer">

    <footer id="footer">
        <div class="inner">
            <ul class="customer">
                <li><a href="">회사소개</a></li>
                <li><a href="">이용약관</a></li>
                <li><a href="" style="font-weight: 700;">개인정보처리방침</a></li>
                <li><a href="">이용안내</a></li>
            </ul>
            <p>
                <span>상호: (주)오픈한</span>
                <span>대표: 최철용</span>
                <span>대표전화: 070-5014-2222</span>
                <span>팩스: 02-927-9702</span>
            </p>
            <p>
                <span>사업자등록번호: 204-86-22070 [사업자정보확인]</span>
                <span>통신판매업 신고번호: 제 2021-서울성동-02898호</span>
                <span>개인정보 보호책임자: 홍상민</span>
            </p>
            <p>
                <span>E-mail: cs@ozkiz.com</span>
                <span>주소: 06128 서울 강남구 강남대로100길 37 오픈한웍스</span>
            </p>
            <address>
                &copy; 오즈키즈 All rights reserved. Designed by dfloor
            </address>
        </div>
    </footer>
</footer>

<?php
include_once(G5_PATH."/tail.sub.php");