<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}
include_once(G5_THEME_PATH.'/head.php');

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




		<!-------------------------- 유튜브 + 이미지 슬라이드 -------------------------->
		<section class="main-slider">

		  <div class="item image">
			<figure>
			  <div class="slide-image slide-media" style="background-image:url('https://via.placeholder.com/1920x1080');"><!-- 이미지 주소 -->
				<img data-lazy="https://via.placeholder.com/1920x1080" class="image-entity" /><!-- 이미지 주소 -->
			  </div>
				<p class="caption lh1-5 ko">
					소프트존 5.4<BR>
					IMAGE SLIDE
				</p>
			</figure>
		  </div>

		  <?php
		  /***
		  [테마메뉴얼]
		  http://ety.kr/board/ety_theme_manual
		  
		  
		  유튜브 주소 : https://www.youtube.com/watch?v=6lxg0NKZjOE
		  위 주소중에서 뒷부분 6lxg0NKZjOE 해당 하는 부분을 아래 $yurl 에 입력해주세요.
		  
		  ***/
		  
		  // 유튜브 영상 주소
		  $yurl = '6lxg0NKZjOE';
		  
		  
		  ?>
		  <div class="item youtube">
			<iframe class="embed-player slide-media" src="https://www.youtube.com/embed/<?php echo $yurl?>?t=133s&enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&playlist=<?php echo $yurl?>&start=1" frameborder="0" allowfullscreen style="height:100vh;"></iframe> 
			<p class="caption lh1-5 ko">
				소프트존 5.4<BR>
				YOUTUBE SLIDE
			</p>
		  </div>

		  <div class="item video">
			<video class="slide-video slide-media" loop muted preload="metadata">
			  <source src="<?php echo G5_THEME_URL?>/images/movie.mp4" type="video/mp4" /><!-- mp4 영상 주소 -->
			</video>
			<p class="caption lh1-5 ko">
				영상은 포함되어 있지 않습니다.<BR>
				MP4 동영상 SLIDE
			</p>
		  </div>


		</section>



		<!-------------------------- 아이콘박스 -------------------------->
		<?php
		/* 
		1. flaticon 아이콘박스 사용법 -> 클래스변경
		테마폴더/icon/flaticon.html 을 열어서 해당 class 명을 교체하시면 됩니다.
		
		
		2. 구글아이콘 사용법 -> account_balance_wallet 처럼 이름변경
		해당주소 : https://material.io/resources/icons/?style=outline
		
		<i class="material-icons">account_balance_wallet</i>
		
		*/
		
		?>
		<div class="container mt80 mb80">
			<div class="row">
				<div class="col-md-12">
					<div class="center-heading">
						<h2 class="ko">사업안내</h2>
						<span class="center-line"></span>
					</div>
				</div>                   
			</div>
			<div class="row owl-carousel owl-theme" style="margin: 0 auto;">
			
				<a href="javascript:void(0);">
					<div class="item margin30">
						<div class="colored-boxed green">
							<i class="flaticon-handshake"></i><!-- 아이콘이름 flaticon-handshake -->
							<h3 class="ko">타이틀</h3>
							<span class="center-line"></span>
							<p class="ko f15">
								회사 비즈니스 및 사업안내 소개
							</p>
						</div>
					</div>
				</a><!-- /.item -->
				
				<a href="javascript:void(0);">
					<div class="item margin30">
						<div class="colored-boxed dark">
							<i class="flaticon-market"></i>
							<h3 class="ko">타이틀</h3>
							<span class="center-line"></span>
							<p class="ko f15">
								회사 비즈니스 및 사업안내 소개
							</p>
						</div>
					</div>
				</a><!-- /.item -->
				
				<a href="javascript:void(0);">
					<div class="item margin30">
						<div class="colored-boxed blue">
							<i class="flaticon-planning"></i>
							<h3 class="ko">타이틀</h3>
							<span class="center-line"></span>
							<p class="ko f15">
								회사 비즈니스 및 사업안내 소개
							</p>
						</div>
					</div>
				</a><!-- /.item -->
				
				<a href="javascript:void(0);">
					<div class="item margin30">
						<div class="colored-boxed">
							<i class="flaticon-office"></i>
							<h3 class="ko">타이틀</h3>
							<span class="center-line"></span>
							<p class="ko f15">
								회사 비즈니스 및 사업안내 소개
							</p>
						</div>
					</div>
				</a><!-- /.item -->
				
				<a href="javascript:void(0);">
					<div class="item margin30">
						<div class="colored-boxed">
							<i class="flaticon-cloud-network-1"></i>
							<h3 class="ko">타이틀</h3>
							<span class="center-line"></span>
							<p class="ko f15">
								회사 비즈니스 및 사업안내 소개
							</p>
						</div>
					</div>
				</a><!-- /.item -->
				
				<a href="javascript:void(0);">
					<div class="item margin30">
						<div class="colored-boxed">
							<i class="flaticon-customers"></i>
							<h3 class="ko">타이틀</h3>
							<span class="center-line"></span>
							<p class="ko f15">
								회사 비즈니스 및 사업안내 소개
							</p>
						</div>
					</div>
				</a><!-- /.item -->
				
				<a href="javascript:void(0);">
					<div class="item margin30">
						<div class="colored-boxed">
							<i class="flaticon-cargo-ship"></i>
							<h3 class="ko">타이틀</h3>
							<span class="center-line"></span>
							<p class="ko f15">
								회사 비즈니스 및 사업안내 소개
							</p>
						</div>
					</div>
				</a><!-- /.item -->
				
			</div><!-- ./row -->
		</div><!-- /.container -->
		
		
		

		<!-- 배경이미지 주소 -->
		<style>
		.img-bg-1{background:url('https://via.placeholder.com/1920x500') 50% no-repeat;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;height:500px}
		</style>
		<section class="wide-image-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 img-bg-1">
						<div class="row">
							<div class="col-md-6">
							
							</div>
							<div class="col-md-5 col-md-offset-1">
								<div class="hidden-xs hidden-sm mt150"></div>
								<div class="hidden-lg hidden-md pd15"></div>
								<h3 class="ko">이미지소개</h3>
								<p class="ko">
									소비자들은 인터넷에 개설된 세계 각국의 가상상점에서 언제 어디서나 원하는 시간에 비교적 저렴한 가격으로 상품을 구입할 수 있다. 운영자의 입장에서는 운영비가 거의 들지 않고 상권의 제약을 받지 않으며 소비자의 취향에 맞는 상품정보를 제공할 수 있다.[위키백과]
								</p>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- 배경이미지 주소 -->
		<style>
		.wide-image-wrapper .img-right-2{background:url('https://via.placeholder.com/1920x1080') 50% 0 no-repeat;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;height:500px}
		</style>
		<section class="wide-image-wrapper">
			<div class="container-fluid">
				<div class="row vertical-align-child">
					<div class="col-md-6 img-right-2">
						<!-- 이미지는 테마폴더/css/common.css : 571 번줄 -->
					</div>				
				
					<div class="col-md-5 col-md-offset-1">
						<h3 class="ko">이미지소개</h3>
						<p class="ko">
							소비자들은 인터넷에 개설된 세계 각국의 가상상점에서 언제 어디서나 원하는 시간에 비교적 저렴한 가격으로 상품을 구입할 수 있다. 운영자의 입장에서는 운영비가 거의 들지 않고 상권의 제약을 받지 않으며 소비자의 취향에 맞는 상품정보를 제공할 수 있다.[위키백과]
						</p>
						<a href="#" class="btn btn-radius btn-dark btn-lg">Learn more</a>
					</div>

				</div>
			</div>
		</section>

		<style>
		.wide-image-wrapper .img-right{background:url('https://via.placeholder.com/1920x1080') 50% 0 no-repeat;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;height:500px}
		</style>
		<section class="wide-image-wrapper">
			<div class="container-fluid">
				<div class="row vertical-align-child">
					<div class="col-md-5 col-md-offset-1">
						<h3 class="ko">이미지소개</h3>
						<p class="ko">
							소비자들은 인터넷에 개설된 세계 각국의 가상상점에서 언제 어디서나 원하는 시간에 비교적 저렴한 가격으로 상품을 구입할 수 있다. 운영자의 입장에서는 운영비가 거의 들지 않고 상권의 제약을 받지 않으며 소비자의 취향에 맞는 상품정보를 제공할 수 있다.[위키백과]
						</p>
						<a href="#" class="btn btn-radius btn-dark btn-lg">Learn more</a>
					</div>
					<div class="col-md-6 img-right">
						<!-- 이미지는 테마폴더/css/common.css : 571 번줄 -->
					</div>
				</div>
			</div>
		</section>





		<?php
		/*
		-------------------------------------------------
		| 갤러리 사용법안내
		-------------------------------------------------
		
		상단 버튼은 카테고리 분류가 있는 경우에 출력이 됩니다.
		분류를 만들어 주시면 상단 버튼과 함께 개수가 출력 됩니다.

		아래 $bo = 'gallery' 처럼 게시판 이름만 변경하시면 됩니다.
		

		*/
		?>
		<!-------------------------- 갤러리 -------------------------->
        <div class="cube-full-width mt80">
			<?php


			// 게시판이름만 변경해주셔서 사용해주세요.
			
			$bo = 'gallery';

			$bota = $g5['write_prefix'].$bo;
			$sql = "select ca_name from {$bota} group by ca_name limit 10";
			$result = sql_query($sql);
			$ca_list = array();
			while($R = sql_fetch_array($result)){
				if($R['ca_name'])
				{
					$ca_list[] = $R['ca_name'];
				}
			}
			$ca_count = count($ca_list);
			?>
            <div id="filters-container" class="cbp-l-filters-alignCenter">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item ko">
                    ALL <div class="cbp-filter-counter"></div>
                </div>
				<?php
				for($i=0;$i<$ca_count;$i++){
					$ca = trim($ca_list[$i]);
				?>
                <div data-filter=".<?php echo $ca?>" class="cbp-filter-item">
                    <span class="ko f16"><?php echo $ca?></span> <div class="cbp-filter-counter"></div>
                </div>
				<?php } ?>
            </div>
            <div id="fullwidth-container" class="cbp">
				<?php
				$sql = "select * from {$bota} order by wr_id desc limit 10";
				$query = sql_query($sql);
				while($row = sql_fetch_array($query)){
					$bo_img = get_file($bo, $row['wr_id']);
					$ca_name = $row['ca_name'];
					$boimg = $bo_img[0]['file'];
					if($bo_img[0]['file']){
						$boimg = "/data/file/".$bo."/".$bo_img[0]['file'];
					}else{
						$row['wr_content'];
						preg_match("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $row['wr_content'], $boimg);
						$boimg = $boimg[1];
					}
				?>
                <div class="cbp-item motion <?php echo $ca_name?>">
                    <a href="<?php echo $boimg?>" class="cbp-caption cbp-lightbox" data-title="<?php echo $row['wr_subject']?>">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?php echo $boimg?>" alt="" style="height:246px;">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title ko"><?php echo $row['wr_subject']?></div>
                                    <div class="cbp-l-caption-desc ko"><?php echo $row['wr_name']?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
				<?php }?>
            </div>
        </div>
		<!-------------------------- /.갤러리 -------------------------->



		<!-------------------------- 제품안내 -------------------------->
		<?php echo latest('theme/gallery_list_carousel', 'gallery', 6, 20);?>



		<!-------------------------- 최근게시물 -------------------------->
		<section class="mt80 mb80">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="center-heading">
							<h2 class="ko">공지사항</h2>
							<span class="center-line"></span>
						</div>
					</div>                   
				</div>

				<div class="row">
					<div class="col-md-6">
						<?php echo latest('theme/basic_one', 'notice', 3, 10);?>
					</div>
					<div class="col-md-6">
						<?php echo latest('theme/basic_one', 'free', 3, 10);?>
					</div>
				</div>
			</div>
		</section>


		<div class="container mt80 mb80">
			<div class="row">
				<div class="col-md-12">
					<div class="center-heading">
						<h1 class="">SOFTZONE</h1>
						<span class="center-line"></span>
						<p class="kos4 f16">
						<strong>Corporate Identity System</strong><br>
						과거 버스를 이용할 때 사용하던 토큰을 형상화하여 디자인되었다.<br>
						누구나 사용할 수 있었던 토큰은 인테리어라는 다소 부담스럽고 무거운 주제를<br>
						좀 더 친근히 다가갈 수 있도록 하고자 모티브로 하였다.	<br>
						</p>
						
						<img src="https://via.placeholder.com/200x133">
					</div>
				</div>                   
			</div>
			
		</div><!-- /.container -->



	<?php
	include_once(G5_THEME_PATH.'/tail.php');
	?>