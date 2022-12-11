<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}
include_once(G5_THEME_PATH.'/head.php');
?>
<?php
if(defined('_INDEX_')) { // index에서만 실행
	if(is_mobile()){
		include G5_THEME_PATH.'/mobile_popup.php'; // 팝업레이어
	}else{
		include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
	}
}
?>


	<?php

	/* 
	#=========================================#
	| 테마적용방법 동영상팁
	#=========================================# 

	▶ Gnuboard 최신 버전 다운로드 및 설치방법
	http://ety.kr/board/ety_theme_manual/48

	▶ 카페24 접속하기
	http://ety.kr/board/ety_theme_manual/50


	▶ 카페24 호스팅 구매하기
	http://ety.kr/board/ety_theme_manual/49


	▶ 파일질라 ftp 설치 및 접속하기
	http://ety.kr/board/ety_theme_manual/51


	▶ 그누보드 설치하기
	http://ety.kr/board/ety_theme_manual/48


	▶ 테마 적용하기
	http://ety.kr/board/ety_theme_manual/37


	▶ 테마가 반응형이 안되는 경우
	http://ety.kr/board/ety_theme_manual/23


	▶ 1분 만에 레이아웃 쉽게 만드는 방법
	http://ety.kr/board/ety_theme_manual/26?page=2


	▶ pages 폴더 사용하는 방법
	http://ety.kr/board/ety_theme_manual/16?page=3


	▶ 질문답변게시판 안내
	http://ety.kr/board/qa



	▶ 각 서브페이지 이미지 위치 : /pages/img/etc/ 폴더내

	각 서브페이지의 배경은 /theme/테마이름/js/custom.js : 385번째줄 (breadcrumb-wrap 부분) 파일에서 한번에 수정이 가능합니다.
	만일 서브페이지 별로 배경을 다르게 하실 경우 custom.js 자바스크립트를 해당페이지에 복사하셔서
	원하는 배경을 설정하시면 됩니다.

	*/
	?>



	<div class="container no-padding"></div>
	<!-------------------------- 슬라이드 시작 -------------------------->
	<?php

	/* 
	#=========================================#
	| 테마적용방법 동영상팁
	#=========================================# 

	▶ 유튜브 슬라이드 크기조절 및 사용방법안내
	http://ety.kr/board/ety_theme_manual/34?page=2

	

	[유튜브동영상주소 사용팁]

	슬라이드의 세로사이즈는 이미지 사이즈와 함께 테마폴더/common.css 파일을 수정해주시면 됩니다.

	주소창에 있는 주소의 url 중에서
	https://www.youtube.com/watch?v=o70MzTHHNbI
	뒷부분 o70MzTHHNbI 값만 넣어주세요.


	* 테마폴더/js/script.js 맨 하단에서 슬라이드 속도를 조절 할 수 있습니다.



	*/

	// 유튜브주소값 수정하는 곳
	$yt_url = '5K3Jdux_DDg';


	// 슬라이드 css 는 테마폴더/common.css : 646 번째줄부터 수정하시면 됩니다.

	?>

	<section class="main-slider">
		<!-- 이미지 -->
		<div class="item image">
			<figure>
				<div class="slide-image slide-media" style="background-image:url('https://via.placeholder.com/1920x620');">
					<img data-lazy="https://via.placeholder.com/1920x620" class="image-entity" />
				</div>
				<figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">fingerprint</i> 5.4 유튜브 3단 슬라이드<div class="small-text mt20">반응형으로 제작된 홈페이지 입니다.</div></figcaption>
			</figure>
		</div>

		<!-- 유튜브 -->
		<div class="item youtube">
			<iframe class="embed-player slide-media" src="https://www.youtube.com/embed/<?php echo $yt_url?>?version=3&vq=hd1080&t=133s&enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&start=1" frameborder="0" allowfullscreen></iframe> 
			<figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">live_tv</i> YOUTUBE<div class="small-text mt20">반응형으로 제작된 홈페이지 입니다.</div></figcaption>
		</div>

		<!-- 이미지 -->
		<div class="item image">
			<figure>
				<div class="slide-image slide-media" style="background-image:url('https://via.placeholder.com/1920x620');">
					<img data-lazy="https://via.placeholder.com/1920x620" class="image-entity" />
				</div>
				<figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">add_ic_call</i> 5.4 유튜브 3단 슬라이드<div class="small-text mt20">반응형으로 제작된 홈페이지 입니다.</div></figcaption>
			</figure>
		</div>

	</section>

	<!-------------------------- 슬라이드 끝 -------------------------->

	<div class="mt60 hidden-sm hidden-xs"></div>
	<div class="mt20 hidden-lg hidden-md"></div>

	<!-------------------------- YOUR PARTNER -------------------------->	
	<?php
	/*
	
	#=========================================#
	| 테마적용방법 동영상팁
	#=========================================# 

	▶ 수백개의 아이콘을 변경해보기
	http://ety.kr/board/ety_theme_manual/38?page=2


	https://material.io/resources/icons/?style=outline
	위 주소에서 아이콘 이름만 교체하시면 바로 사용이 가능합니다.

	아래 예처럼 analytics 이나 phonelink_setup 처럼 이름만 변경해주세요.

	<i class="material-icons f60">analytics</i>
	<i class="material-icons f60">phonelink_setup</i>


	*/
	?>

	<!-------------------------- 메인 아이콘박스 -------------------------->
	<div class="container SF_main_icon">
		<div class="row">
			<!-- 왼쪽 큰 이미지 -->
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<a href="<?php echo G5_URL?>/item">
					<img src="<?php echo G5_THEME_URL?>/img/item/item01.jpg" class="img-responsive">
				</a>
				<div class="hidden-lg hidden-md mb20"></div>
			</div><!-- ./col -->


			<!-- 나머지 아이콘과 이미지 -->
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

						<a href="<?php echo G5_BBS_URL?>/faq.php">
							<div class="colored-boxed dark">
								<i class="material-icons f60">feedback</i>
								<h3>FAQ</h3>
								<span class="center-line"></span>
								<p class="ko">
									자주하시는 질문
								</p>
							</div>
						</a>
						<div class="hidden-lg hidden-md mb20"></div>
					</div><!-- ./col -->
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

						<a href="<?php echo G5_URL?>/item">
							<img src="<?php echo G5_THEME_URL?>/img/item/001.jpg" class="img-responsive">
						</a>
						<div class="hidden-lg hidden-md mb20"></div>

					</div><!-- ./col -->
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						
						<a href="<?php echo G5_BBS_URL?>/qalist.php">
							<div class="colored-boxed bg-gray" style="border: 1px solid #525252;">
								<i class="material-icons f60">drive_file_rename_outline</i>
								<h3>1:1문의</h3>
								<span class="center-line"></span>
								<p class="ko">
									궁금한점이 있으시거나 문의사항이 있는 경우
								</p>
							</div>
						</a>
						<div class="hidden-lg hidden-md mb20"></div>
					</div><!-- ./col -->
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<a href="<?php echo G5_URL?>/item">
							<img src="<?php echo G5_THEME_URL?>/img/item/002.jpg" class="img-responsive">
						</a>
						<div class="hidden-lg hidden-md mb20"></div>
					</div><!-- ./col -->
				</div><!-- ./row -->

			</div><!-- ./col -->

		</div><!-- ./row -->
	</div><!-- /container -->
	<!-------------------------- 메인 아이콘박스 끝 -------------------------->



	<!-------------------------- 게시물 -------------------------->
	<div class="container mt60 mb60">
		<div class="row">
			<div class="col-md-6">
				<div class="tabs-container">
					<!-------------------------- tabs -------------------------->
					<ul class="nav nav-tabs nav-justified tab-list">
						<li class="active"><a data-toggle="tab" href="#tab-001" aria-expanded="true">공지사항</a></li>
						<li class=""><a data-toggle="tab" href="#tab-002" aria-expanded="false">고객센터</a></li>
						<li class=""><a data-toggle="tab" href="#tab-003" aria-expanded="false">자유게시판</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab-001" class="tab-pane active ko">
							<?php echo latest('theme/basic_tabs', 'notice', 5, 40);?>
						</div>
						<div id="tab-002" class="tab-pane ko">
							<?php echo latest('theme/basic_tabs', 'free', 5, 40);?>
						</div>
						<div id="tab-002" class="tab-pane ko">
							<?php echo latest('theme/basic_tabs', 'free', 5, 40);?>
						</div>
					</div>
				</div><!-- ./End tabs -->
			</div><!-- ./col -->
			<div class="col-md-6">
				<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
			</div>
		</div>
	</div>
	<!-------------------------- ./게시물 -------------------------->




	<!-------------------------- 소개페이지 -------------------------->
	<div class="wide-img-showcase">
		<div class="row margin-0 wide-img-showcase-row">
			<div class="col-sm-6 no-padding img-2" style="background: url(https://via.placeholder.com/1920x1080) scroll center no-repeat;"><!-- 배경이미지 변경 -->
				<div class="no-padding-inner">
					<div>&nbsp;</div>
				</div>
			</div>
			<div class="col-sm-6 col-sm-offset-6 no-padding gray">
				<div class="no-padding-inner gray">
					<h3 class="wow animated fadeInDownfadeInRight animated" style="visibility: visible;">Core features of <span class="colored-text">SOFTZONE</span></h3>
					<div class="services-box margin30 wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
						<div class="services-box-icon">
							<i class="material-icons f50">commute</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">물류시스템 브로슈어(영문)</h4>
							<p>
								대한민국을 대표하는 글로벌 물류및운송회사인 소프트존 입니다. 물류의 전과정과 프로세스, 해운, KD 등의 모든 정보가 
								포함되어 있습니다.
							</p>
						</div>
					</div><!--service box-->
					<div class="services-box margin30 wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
						<div class="services-box-icon">
							<i class="material-icons f50">production_quantity_limits</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">물류시스템 브로슈어(한글)</h4>
							<p>
								This is Soft Zone, a global logistics and transportation company representing Korea. All information such as logistics process, process, shipping, and KD Included.
							</p>
						</div>
					</div><!--service box-->

					<div class="services-box margin30 wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
						<div class="services-box-icon">
							<i class="material-icons f50">pending_actions</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">물류시스템 브로슈어(중문)</h4>
							<p>
								这是代表韩国的全球物流和运输公司Soft Zone。 所有信息，如物流流程，流程，运输和KD 它是包括在内。
							</p>
						</div>
						<div class="divide30"></div>
						<p><a href="#" class="btn btn-theme-dark btn-lg">DOWNLOAD</a></p>
					</div><!--service box-->

				</div>
			</div>
		</div>
	</div>
	<!-------------------------- //소개페이지 -------------------------->


	<div class="container mt80">
		<div class="row">
			<div class="col-md-12">
				<div class="center-heading">
					<h2 class="kos4">PRODUCT</h2>
					<span class="center-line"></span>
				</div>
			</div>                   
		</div>
		<div class="tabs-container">
			<ul class="nav nav-tabs tab-centers">
				<li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> 제품소개</a></li>
				<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"> 시공갤러리</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab-1" class="tab-pane active">
					<?php echo latest('theme/gallery_list', 'item', 6, 10);?>
				</div>
				<div id="tab-2" class="tab-pane">
					<?php echo latest('theme/gallery_list', 'gallery', 6, 10);?>
				</div>
			</div>
		</div>
	</div>





	<!-------------------------- 하단 배너 -------------------------->
	<div class="mt80"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel owl-theme">
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
				</div>
			</div>
		</div>
	</div>
	<!-------------------------- 하단 배너 끝 -------------------------->

	<div style='height:100px;'></div>

	<?php
	include_once(G5_THEME_PATH.'/tail.php');
	?>