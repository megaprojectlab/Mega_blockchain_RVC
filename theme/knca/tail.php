<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$admin = get_admin("super"); 

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

?>

<?php if (!defined("_INDEX_")) {  //인덱스에서 사용하지 않음?>
    </div><!-- // #container 닫음 -->
<?php }  //인덱스에서 사용하지 않음?>

	<button id="snbOpen">
		<b><i></i><i></i><i></i></b>
		<span class="sound_only">사이드메뉴 열기 닫기</span>
	</button>
	<aside id="sideBar">
		<h2 class="sound_only">사이트 전체메뉴</h2>

		<!-- SNB // -->
		<?php include_once(G5_THEME_PATH."/sideBar.php"); /* 사이드메뉴 PC or 모바일*/ ?>
      
		<!-- // SNB -->
		
		<!-- 서브메뉴바 하단 정보// -->
		<dl class="snbCS bg-gray1">
            
			<dt class="text-dark fw-900 pb5 h3_tl">등기신청문의</dt>
           <!-- <div class="line-5 w90 bg-dark mb10 mt0"></div> -->
			<dd class="text-black">
				<strong><i class="fa fa-phone-square"></i> <?php if($admin['mb_tel']){ echo '<span> Tel. '.$admin['mb_tel'].'</span>';} else echo '<span class=" text-black fw-900">02)392-0700</span>';?> </strong>
				<b><?php if($admin['mb_email']){ echo  '<span> E-mail. '; ?><a href='mailto:<?php echo "support@kornft.org" ?>'><?php echo  "<b class='fs-12'>support@kornft.org</b>"?></a></span><?php } else echo '<span>인증원 이메일</span>';?> </b>
                <br>
				<b><?php if($admin['mb_1']){ echo  '<span> Fax. '; ?><?php echo $admin['mb_1']?></span><?php } else echo '<span>월요일~금요일(공휴일휴무)</span>';?> </b>
				
				<?php if($admin['mb_2']){ echo  '<span>'; ?><?php echo $admin['mb_2']?></span><?php } else echo '<span class="fw-900">AM 09:00~ PM 6:00</span>';?>

                <p class="mt20"><b> 입금계좌 : </b></p>
				<span class="text-blue"> 하나은행 182-910022-30604<br>
				한국NFT공인인증원(주) </span> 
			</dd>
		</dl>

		<div id="snbMvAr">
			<a href="<?php echo G5_URL; ?>" id="btnHome">HOME</a>
			<div class="snbMvArBtn">
				<?php if ($is_member) {  ?>
				<a href="<?php echo G5_BBS_URL ?>/logout.php">LOGOUT</a>
				<a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
				<?php } else {  ?>
				<a href="<?php echo G5_BBS_URL ?>/login.php"><b>LOGIN</b></a>
				<a href="<?php echo G5_BBS_URL ?>/register.php">JOIN</a>
				<?php }  ?>
			</div>
		</div>
		<?php if ($is_admin) {  ?>
		<div id="snbMvArBottom">
			<a href="<?php echo G5_ADMIN_URL ?>"><b><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</b></a>
		</div>
		<?php }  ?>
		<!-- //서브메뉴바 하단 정보 -->
    </aside>

</section><!-- // #ctWrap 닫음 -->
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 커스텀배너 시작 { -->
<!-- <aside class="customBan">
	<a href="#"><img src="<?php echo G5_THEME_IMG_URL ?>/bottomAbg.jpg" alt=""> <span class="customBanTit">커스텀배너 <u></u></span></a>
	<a href="#"><img src="<?php echo G5_THEME_IMG_URL ?>/bottomAbg02.jpg" alt=""> <span class="customBanTit">for HTML <u></u></span></a>
</aside> -->
<!-- } 하단 커스텀배너 끝 -->

<hr>


        
		<!-------------------------- 우측하단 SNS -------------------------->
	
        <div style="position: fixed; right: 1%; bottom: 3%;z-index:9999">
				<div><a href="http://pf.kakao.com/_xjXSmb" target="_blank"><img src="<?php echo G5_THEME_URL?>/img/kakao.png" height="60" style="vertical-align: sub;"></a></div>
        
        <? /*
		  <div><a href="javascript:;" target="_blank"><img src="<?php echo G5_THEME_URL?>/img/cafe.png" height="60" style="vertical-align: sub;"></a></div>
		<div><a href="javascript:;" target="_blank"><img src="<?php echo G5_THEME_URL?>/img/blog.png" height="70" style="vertical-align: sub;"></a></div>    */?>

		</div>
   
   



<!-- 하단 시작 { -->
<footer id="footer">
						
    <dl class="contaniner">
        <dt> <a href="<?php G5_URL?>/index.php"><img src="<?php echo G5_THEME_IMG_URL; ?>/logo_knca.png" alt="<?php echo $config['cf_title'] ?>"></a></dt>

        <dd >
        <a href="<?php G5_URL?>/bbs/content.php?co_id=member_policy"><span>서비스이용약관</span></a> |
		<a href="<?php G5_URL?>/bbs/content.php?co_id=copyright"><span>NFT저작권정책</span></a> | 
		<a href="<?php G5_URL?>/bbs/content.php?co_id=privacy"><span>개인정보처리방침</span></a> |
		<a href="<?php G5_URL?>/bbs/content.php?co_id=company"><span>윤리경영</span></a>                            
        
            <?/*
        <a href="#" data-featherlight="<?php echo G5_THEME_URL ?>/index.php" >등기소홈</a>
            <a href="#" data-featherlight="<?php echo G5_THEME_URL ?>/pop.term.php .term_area" data-featherlight-type="ajax">서비스이용약관</a>
            <a href="#" data-featherlight="<?php echo G5_THEME_URL ?>/pop.privacy.php .term_area" data-featherlight-type="ajax">NFT저작권정책</a>
            <a href="#" data-featherlight="<?php echo G5_THEME_URL ?>/pop.privacy.php .term_area" data-featherlight-type="ajax">개인정보처리방침</a>
            <a href="#" data-featherlight="<?php echo G5_THEME_URL ?>/pop.noEmail.php .term_area" data-featherlight-type="ajax">윤리강령</a>
            */?>
        </dd>
    </dl>


	<address class="container">
    <div class="text-center sm-none">
    <strong><i class="fa fa-map-marker mr5"></i>NFT등록팀 :</strong> 서울시 강남구 삼성동 트레이드타워 3407호 
    <strong><i class="fa fa-map-marker ml10 mr5"></i>기술개발팀 :</strong> 서울시 서대문구 연세로50 연세대학교 공학원 206호 <br>
    <strong>CONTACT : <i class="fa fa-envelope ml10"></i> </strong> <a href="#">support@nftkor.org</a>
    <strong><i class="fa fa-phone ml5"></i>(82)2-392-0700  </strong> 
    <strong><i class="fa fa-th-large ml5"></i> 개인정보책임자 :</strong> 한송이 팀장
    <strong><i class="fa fa-file-text-o ml5"></i> 통신판매신고 :</strong> 서울강남 12345
    <dt class="mt10">Copyright&copy;2021. <a href="<?php G5_URL?>/index.php"><span style='color:#000;'>한국NFT공인인증원(KNCA)</span></a>. All Rights Reserved.</dt>
    </div>

<div class="text-left md-none"> <!--mobile -->
    <strong><i class="fa fa-map-marker"></i>NFT등록팀 :</strong> 서울시 강남구 삼성동 트레이드타워 3407호 </br>
    <strong><i class="fa fa-map-marker"></i>기술개발팀 :</strong> 서울시 서대문구 연세로50 연세대학교 공학원 206호 <br>
    <strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="#">support@kornft.org</a> <br>
    <strong><i class="fa fa-phone"></i> Phone :</strong> (82)2-392-0700 <br>
    <strong><i class="fa fa-file-text-o"></i> 개인정보책임자 :</strong> 한송이<br>
    <strong><i class="fa fa-th-large "></i> 통신판매신고 :</strong> 2021-서울강남-06581<br>
    <dt class="mt10">Copyright&copy;2021. <a href="<?php G5_URL?>/index.php"><span style='color:#000;'>한국NFT공인인증원(KNCA)</span></a>. All Rights Reserved.</dt>
</div>

<? /*
		<?php if($admin['mb_addr1']){ echo '<span>'.$admin['mb_addr1']; echo $admin['mb_addr2'].'</span>'; } else echo '<span>관리자모드에서 관리자정보의 주소를 입력해 주시기 바랍니다.</span>';?> 
		<?php if($admin['mb_tel']){ echo ' <em>|</em><span> Tel. '.$admin['mb_tel'].'</span>';} else echo '<span>관리자정보 전화번호 입력</span>';?> 
		<?php if($admin['mb_1']){ echo ' <em>|</em><span> Fax. '.$admin['mb_1'].'</span>';} else echo '<span>관리자정보 여분필드1 입력</span>';?> 
		<?php if($admin['mb_email']){ echo  ' <em>|</em><span> E-mail. '; ?><a href='mailto:<?php echo $admin['mb_email']?>'><?php echo $admin['mb_email']?></a></span><?php } else echo '<span>관리자정보 이메일 입력</span>';?> 
		<?php if($admin['mb_3'] == '내용없음') echo ''; else if($admin['mb_3']){ echo  '<br><span>'; ?><?php echo $admin['mb_3']?></span><?php } else echo '<br><span>관리자정보여분필드3 내용이 없을 경우 내용없음 이라고 입력해 주세요.</span>';?>

*/?>

	</address>

</footer>

<button type="button" id="top_btn" class="fa fa-angle-up" aria-hidden="true"><span class="sound_only">페이지 상단으로 이동</span></button>


<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->
<?php
include_once(G5_THEME_PATH."/tail.sub.php");