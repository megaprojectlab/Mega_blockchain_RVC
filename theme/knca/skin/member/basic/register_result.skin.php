<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원가입결과 시작 { -->
<div id="reg_result">
    <h2><strong>회원가입</strong>이 완료되었습니다.</h2>
    <p class="reg_result_p bg-blue1">
        <strong><?php echo get_text($mb['mb_name']); ?></strong>님의 <br>회원가입을 진심으로 축하합니다.<br>
    </p>

    <?php if (is_use_email_certify()) {  ?>
    <p class="text-blue fs-12">        
    <b class="h5_tl text-blue">인증메일 확인 </b> <br> 
    <i class="fa fa-envelope mr5"></i> 
    회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.<br>
    <i class="fa fa-envelope mr5"></i> 발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.
    </p>

    <p  class="reg_result_p bg-gray1 border-2 fs-14">
        <span>등록 아이디 : <b class="text-red mr20"><?php echo $mb['mb_id'] ?></b></span> <br>
        <span>이메일 주소 : <b class="text-red mr20"><?php echo $mb['mb_email'] ?></b></span>
    </p>
    <p class="fs-12 text-blue">
    <i class="fa fa-check-circle-o mr5"></i>  이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.
    </p>
    <?php }  ?>

    <p class="fs-12 text-blue">
    <i class="fa fa-check-circle-o mr5"></i>   회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.<br>
    <i class="fa fa-check-circle-o mr5"></i>      아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.
    </p>

    <p class="fs-12 text-blue">
    <i class="fa fa-check-circle-o mr5"></i>     회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.<br>
        감사합니다.
    </p>

        <a href="<?php echo G5_URL ?>/" class="btn_submit">메인으로</a>

</div>
<!-- } 회원가입결과 끝 -->
<?php
add_event('tail_sub','membershipChanger', 90, 3);

/* 퀵세팅헬퍼 테마관리자 적용 시 관련설정 제어 */
function membershipChanger(){
	echo '
<script>
$(document).ready(function(){
	$(".page_title_in .loc1D").text("MEMBERSHIP");
	$(".noInfoPageTit h2 a b").text("Member");
});
</script>
	';
}