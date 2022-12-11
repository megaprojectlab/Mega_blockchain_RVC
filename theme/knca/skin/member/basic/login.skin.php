<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
include_once(G5_THEME_PATH.'/head.php');
?>

<!-- 로그인 시작 { -->
<div id="mb_login" class="mbskin">
    <h2>MEMBER LOGIN</h2>

    <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
    <input type="hidden" name="url" value="<?php echo $login_url ?>">

    <fieldset id="login_fs">
        <legend>회원로그인</legend>

		<div class="loginForm">
			<label for="login_id"> <i class="fa fa-user"></i> <strong class="sound_only">회원아이디 필수</strong></label>
			<input type="text" name="mb_id" id="login_id" required class="frm_input required" size="20" maxLength="20" placeholder="아이디">
		</div>
		<div class="loginForm">
			<label for="login_pw"> <i class="fa fa-unlock-alt"></i> <strong class="sound_only">비밀번호 필수</strong></label>
			<input type="password" name="mb_password" id="login_pw" required class="frm_input required" size="20" maxLength="20" placeholder="비밀번호">
		</div>

        <input type="submit" value="로그인" class="btn_submit">
        <input type="checkbox" name="auto_login" id="login_auto_login">
        <label for="login_auto_login">자동로그인</label>
    </fieldset>

    <div id="login_fs_sns">
    <?php
    // 소셜로그인 사용시 소셜로그인 버튼
    @include_once(get_social_skin_path().'/social_login.skin.php');
    ?>
    </div>

    <aside id="login_info">
        <h2>회원로그인 안내</h2>
			<div class="login_info_btn">
				<a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost" class="btn_b01 btn">아이디/비밀번호 찾기</a>
				<a href="./register.php" class="btn_b01 btn">회원 가입</a>
				<a href="<?php echo G5_URL ?>" class="btn_b01 btn btn_home">메인페이지로 이동</a>
			</div>

			<p>
				아이디 및 비밀번호가 기억 안나실 때는 아이디/비밀번호 찾기를 이용하십시오.<br>
				회원이 아니시라면 회원 가입 후 이용해 주십시오.
			</p>
    </aside>

    </form>


</div>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>
<!-- } 로그인 끝 -->
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>
