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
	<div class="container no-padding"></div>



	<!-------------------------- 슬라이드 시작 -------------------------->
	<?php

	/* 

    [슬라이드 유튜브 주소 변경하기]
    http://ety.kr/board/ety_theme_manual/42


	슬라이드의 세로사이즈는 이미지 사이즈와 함께 테마폴더/common.css 파일을 수정해주시면 됩니다.

	[유튜브동영상주소 사용팁]

	주소창에 있는 주소의 url 중에서
	https://www.youtube.com/watch?v=o70MzTHHNbI
	뒷부분 o70MzTHHNbI 값만 넣어주세요.

	*/

	// 유튜브주소값 수정하는 곳
	$yt_url = 'BLL-kW_TpT4';

	?>
	<section class="main-slider">
		<!-- 이미지 -->
		<div class="item image">
			<figure>
				<div class="slide-image slide-media" style="background-image:url('https://via.placeholder.com/1920X620');">
					<img data-lazy="https://via.placeholder.com/1920X200" class="image-entity" />
				</div>
				<figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">fingerprint</i> 한국NFT공인인증원<div class="small-text mt20">NFT시장의 신뢰와 혁신을 창조합니다.</div></figcaption>
			</figure>
		</div>
		<!-- 유튜브 -->
		<div class="item youtube">
			<iframe class="embed-player slide-media" src="https://www.youtube.com/embed/<?php echo $yt_url?>?version=3&vq=hd1080&t=160s&enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&start=1" frameborder="0" allowfullscreen></iframe> 
			<figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">live_tv</i> YOUTUBE<div class="small-text mt20">NFT시장의 신뢰와 혁신을 창조합니다.</div></figcaption>
		</div>
		<!-- 이미지 -->
		<div class="item image">
			<figure>
				<div class="slide-image slide-media" style="background-image:url('https://via.placeholder.com/1920X620');">
					<img data-lazy="https://via.placeholder.com/1920X200" class="image-entity" />
				</div>
				<figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">add_ic_call</i> 한국NFT공인인증원<div class="small-text mt20">NFT시장의 신뢰와 혁신을 창조합니다.</div></figcaption>
			</figure>
		</div>
	</section>
	

	<!-------------------------- 비즈니스 1 -------------------------->
	<?php
	/*
	[수백개의 아이콘 변경해보기]
	http://ety.kr/board/ety_theme_manual/38?page=2

	[아이콘사용법]

	https://material.io/resources/icons/?style=outline
	위 주소에서 아이콘 이름만 교체하시면 바로 사용이 가능합니다.

	아래 예처럼 analytics 이나 phonelink_setup 처럼 <i></i> 사이의 텍스트 이름만 변경해주세요.

	<i class="material-icons f60">analytics</i>
	<i class="material-icons f60">phonelink_setup</i>

	또는

	테마폴더/flaticons/flaticon.html
	열어보시면 클래스명만 교체해서 아이콘을 변경하실 수 있습니다.


	*/
	?>

	<div class="container mt80 mb80">
		<div class="row">
			<div class="col-md-12 mb20">
				<div class="center-heading">
					<h2 class="kos4">NFT등록분야 </h2>
					<span class="center-line"></span>
					<P class="ko f16">
						디지털작품 뿐만아니라 아날로그 아이템도 NFT기술을 바탕으로 블록체인에 등록합니다.
					</P>
				</div>
			</div>                   
		</div>
		<div class="row special-feature">

			<!-- 애니메이션 효과 참고 -->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="#"><!-- 링크주소 -->
					<div class="s-feature-box text-center colorbox-1">
						<div class="mask-top colorbox-1">
							<!-- Icon -->
							<i class="flaticon-transportation"></i>
							<!-- Title -->
							<h4 class="ko">디지털화 서비스</h4>
						</div>
					</div>
				</a>
			</div><!--services col-->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="#"><!-- 링크주소 -->
				<div class="s-feature-box text-center colorbox-2">
					<div class="mask-top colorbox-2">
						<!-- Icon -->
						<i class="flaticon-cargo-ship-2"></i>
						<!-- Title -->
						<h4 class="ko">NFT검증 서비스</h4>
					</div>
				</div>
				</a>
			</div><!--services col-->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="#"><!-- 링크주소 -->
				<div class="s-feature-box text-center">
					<div class="mask-top">
						<!-- Icon -->
						<i class="flaticon-trading-2"></i>
						<!-- Title -->
						<h4 class="ko">각종플랫폼 서비스제공</h4>
					</div>
				</div>
				</a>
			</div><!--services col-->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="#"><!-- 링크주소 -->
				<div class="s-feature-box text-center">
					<div class="mask-top">
						<!-- Icon -->
						<i class="flaticon-world"></i>
						<!-- Title -->
						<h4 class="ko">글로벌서비스제공</h4>
					</div>
				</div>
				</a>
			</div><!--services col-->
		</div>

		<div class="row">
			<div class="col-md-6">
				<iframe width="100%" height="250" src="https://www.youtube.com/embed/cat30PaExyo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-md-6">
				<div class="tabs-container">
					<!-------------------------- tabs -------------------------->
					<ul class="nav nav-tabs nav-justified" style="text-align:left;">
						<li class="active"><a data-toggle="tab" href="#tab-001" aria-expanded="true">공지사항</a></li>
						<li class=""><a data-toggle="tab" href="#tab-002" aria-expanded="false">고객센터</a></li>
						<li class=""><a data-toggle="tab" href="#tab-003" aria-expanded="false">자유게시판</a></li>
					</ul>
					<div class="tab-content" style="padding:0px;">
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
			</div>

		</div>
	</div>



	<!-------------------------- 비즈니스 2 -------------------------->
	<div class="container mt80 mb80">
		<div class="row">
			<div class="col-md-12 mb20">
				<div class="center-heading">
					<h2 class="kos4">비즈니스 2 </h2>
					<span class="center-line"></span>
					<P class="ko f16">
						해외 운송서비스를 바탕으로 각종 글로벌한 플랫폼을 제공해드리는 서비스를 하고 있는 글로벌회사 입니다.
					</P>
				</div>
			</div>                   
		</div>
		<div class="row special-feature">
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="s-feature-box text-center colorbox-3">
					<div class="mask-top colorbox-3">
						<!-- Icon -->
						<i class="flaticon-logistics"></i>
						<!-- Title -->
						<h4 class="ko">해외운송서비스</h4>
					</div>
				</div>

			</div><!--services col-->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="s-feature-box text-center colorbox-4">
					<div class="mask-top colorbox-4">
						<!-- Icon -->
						<i class="flaticon-delivery-man"></i>
						<!-- Title -->
						<h4 class="ko">해상화물운반 및 운송서비스</h4>
					</div>
				</div>
			</div><!--services col-->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="s-feature-box text-center">
					<div class="mask-top">
						<!-- Icon -->
						<i class="flaticon-company"></i>
						<!-- Title -->
						<h4 class="ko">각종플랫폼 서비스제공</h4>
					</div>
				</div>
			</div><!--services col-->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="s-feature-box text-center">
					<div class="mask-top">
						<!-- Icon -->
						<i class="flaticon-diagram-1"></i>
						<!-- Title -->
						<h4 class="ko">글로벌서비스제공</h4>
					</div>
				</div>
			</div><!--services col-->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="s-feature-box text-center">
					<div class="mask-top">
						<!-- Icon -->
						<i class="flaticon-exchange"></i>
						<!-- Title -->
						<h4 class="ko">해외운송서비스</h4>
					</div>
				</div>

			</div><!--services col-->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="s-feature-box text-center colorbox-7">
					<div class="mask-top colorbox-7">
						<!-- Icon -->
						<i class="flaticon-money-exchange"></i>
						<!-- Title -->
						<h4 class="ko">해상화물운반 및 운송서비스</h4>
					</div>
				</div>
			</div><!--services col-->
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
			</div>

		</div>
	</div>


	<!-------------------------- 비즈니스 3 -------------------------->
	<div class="container mt80 mb80">
		<div class="row">
			<div class="col-md-12 mb20">
				<div class="center-heading">
					<h2 class="kos4">비즈니스 3 </h2>
					<span class="center-line"></span>
					<P class="ko f16">
						해외 운송서비스를 바탕으로 각종 글로벌한 플랫폼을 제공해드리는 서비스를 하고 있는 글로벌회사 입니다.
					</P>
				</div>
			</div>                   
		</div>
		<div class="row special-feature">
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="s-feature-box text-center colorbox-5">
					<div class="mask-top colorbox-5">
						<!-- Icon -->
						<i class="flaticon-airport"></i>
						<!-- Title -->
						<h4 class="ko">해외운송서비스</h4>
					</div>
				</div>

			</div><!--services col-->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="s-feature-box text-center colorbox-6">
					<div class="mask-top colorbox-6">
						<!-- Icon -->
						<i class="flaticon-line-chart"></i>
						<!-- Title -->
						<h4 class="ko">해상화물운반 및 운송서비스</h4>
					</div>
				</div>
			</div><!--services col-->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="s-feature-box text-center">
					<div class="mask-top">
						<!-- Icon -->
						<i class="flaticon-visitor"></i>
						<!-- Title -->
						<h4 class="ko">각종플랫폼 서비스제공</h4>
					</div>
				</div>
			</div><!--services col-->
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="s-feature-box text-center">
					<div class="mask-top">
						<!-- Icon -->
						<i class="flaticon-analysis"></i>
						<!-- Title -->
						<h4 class="ko">글로벌서비스제공</h4>
					</div>
				</div>
			</div><!--services col-->
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'free', 5, 40);?>
			</div>

		</div>
	</div>




	<!-------------------------- 소개페이지 -------------------------->
	<div class="wide-img-showcase">
		<div class="row margin-0 wide-img-showcase-row">
			<div class="col-sm-6 no-padding img-2" style="background: url(https://via.placeholder.com/1920X1080) scroll center no-repeat;">
				<div class="no-padding-inner ">
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



	<!-------------------------- 카운터 -------------------------->
	<section class="fun-fact-wrap parallax" data-stellar-background-ratio="0.5" style="background: url(https://via.placeholder.com/1920X1080);"><!-- 백그라운드 이미지 수정 -->
		<div class="container">               
			<div class="row">
				<div class="col-md-3 col-xs-6 margin20 facts-in">
					<h3 class="ko"><span class="counter">400</span> +</h3>
					<h4 class="ko f20">주요협력사</h4>
				</div><!--facts in-->
				<div class="col-md-3 col-xs-6 margin20 facts-in">
					<h3 class="ko"><span class="counter">1900</span></h3>
					<h4 class="ko f20">클라이언트</h4>
				</div><!--facts in-->
				<div class="col-md-3 col-xs-6 margin20 facts-in">
					<h3 class="ko"><span class="counter">12421</span> +</h3>
					<h4 class="ko f20">해외발주실적</h4>
				</div><!--facts in-->
				<div class="col-md-3 col-xs-6 margin20 facts-in">
					<h3 class="ko"<span class="counter">30000</span></h3>
					<h4 class="ko f20">국내판매량</h4>
				</div><!--facts in-->
			</div>
		</div>
	</section>


	<!-------------------------- 소개페이지 -------------------------->
	<section id="services-bg-wrap" class="white-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12 service-4-meta">
					<h3 class="ko f22">해상운송업</h3>
					<span class="center-line"></span>
					<p class="ko">
						2020년 1분기에 발견된 랜섬웨어의 종류가 65종이었으나, 2020년 1분기에는 79종에 달했다. 전년도 동기 대비 랜섬웨어의 종류가 늘어난 원인은 랜섬웨어 제작 서비스(Ransomware as a Service, RaaS)와 오픈소스를 이용한 랜섬웨어 제작의 활성화로 판단된다. 랜섬웨어는 이미 등장기와 성장기를 넘어서 관련 시장 형성을 통한 성숙기로 접어든 것으로 볼 수 있다.                         
					</p>
					<a href="#" class="btn border-black btn-lg ko">바로가기</a>
					<div class="hidden-lg hidden-md mb20"></div>
				</div>
				<div class="col-md-6 margin30">
					<img src="https://via.placeholder.com/559x323" class="img-responsive wow animated fadeInRight" alt="mockup">
				</div>
			</div><!-- ./row -->
		</div> 
	</section>
	
	<section id="services-bg-wrap" class="">
		<div class="container">
			<div class="row">
				<div class="col-md-6 margin30">
					  <!-- BAR CHART -->
					  <div class="box box-success wow animated fadeInLeft">
						<div class="box-header with-border">
						  <div class="box-tools pull-right"></div>
						</div>
						<div class="box-body chart-responsive">
						  <div class="chart" id="bar-chart"></div>
						</div>
						<!-- /.box-body -->
					  </div>
					  <!-- /.box -->
				</div>
				<div class="col-md-6  col-xs-12 service-4-meta">
					<h3 class="ko f22">회사성장세</h3>
					<span class="center-line"></span>
					<p class="ko">
						1~2년 전만 해도 수많은 악성코드의 한 종류에 불과했던 랜섬웨어는 현재 막대한 피해를 동반하며 전세계를 휩쓰는 광풍이 되었다. 이와 관련해 안랩 시큐리티대응센터(AhnLab Security Emergency-response Center, 이하 ASEC)는 2020년 2분기 ASEC 리포트를 통해 2020년 상반기 랜섬웨어 동향을 발표할 예정이다. ASEC에 따르면 감염된 시스템의 파일을 암호화하는 랜섬웨어가 본격적으로 등장한 것은 2020년으로, 이후 공격자 관점의 랜섬웨어 수익 모델과 시장이 형성되기 시작했다. 2020년에 들어서면서 랜섬웨어의 기능은 더욱 고도화되었으며 시장확대, 고수익 추구 등의 경향이 두드러진다는 것이 ASEC의 설명이다.                        
					</p>
					<div class="divide20"></div>			
				</div>
			</div><!-- ./row -->
		</div> 
	</section>
	<section id="services-bg-wrap" class="white-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6  col-xs-12 service-4-meta">
					<h3 class="ko f22">플랫폼서비스업</h3>
					<span class="center-line"></span>
					<p class="ko">
						1~2년 전만 해도 수많은 악성코드의 한 종류에 불과했던 랜섬웨어는 현재 막대한 피해를 동반하며 전세계를 휩쓰는 광풍이 되었다. 이와 관련해 안랩 시큐리티대응센터(AhnLab Security Emergency-response Center, 이하 ASEC)는 2020년 2분기 ASEC 리포트를 통해 2020년 상반기 랜섬웨어 동향을 발표할 예정이다. ASEC에 따르면 감염된 시스템의 파일을 암호화하는 랜섬웨어가 본격적으로 등장한 것은 2020년으로, 이후 공격자 관점의 랜섬웨어 수익 모델과 시장이 형성되기 시작했다. 2020년에 들어서면서 랜섬웨어의 기능은 더욱 고도화되었으며 시장확대, 고수익 추구 등의 경향이 두드러진다는 것이 ASEC의 설명이다.                         
					</p>
					<div class="divide20"></div>

					<a href="#" class="btn border-black btn-lg ko">바로가기</a>
					<div class="hidden-lg hidden-md mb20"></div>
				</div>
				<div class="col-md-6 margin30">
					<img src="https://via.placeholder.com/559x323" class="img-responsive wow animated fadeInRight" alt="mockup">
				</div>
			</div><!-- ./row -->
		</div> 
	</section>

	<!-------------------------- 상품안내 -------------------------->

	<?php echo latest('theme/basic_gallery', 'gallery', 6, 20);?>

	<!-------------------------- 갤러리 슬라이드 -------------------------->
	<div class="container mt80">
		<div class="row">
			<div class="col-md-12">
				<div class="center-heading">
					<h2 class="kos4">제품아이템</h2>
					<span class="center-line"></span>
				</div>
			</div>                   
		</div>

		<ul class="nav nav-tabs nav-justified main-nav">
			<li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">게시판 1</a></li>
			<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">게시판 2</a></li>
			<li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">게시판 2</a></li>
		</ul>

		<div class="tabs-container">

			<div class="tab-content">
				<div id="tab-1" class="tab-pane active">
					<?php echo latest('theme/gallery_list', 'gallery', 6, 10);?>
				</div>
				<div id="tab-2" class="tab-pane">
					<?php echo latest('theme/gallery_list', 'gallery', 6, 10);?>
				</div>
				<div id="tab-3" class="tab-pane">
					<?php echo latest('theme/gallery_list', 'gallery', 6, 10);?>
				</div>
			</div>
		</div>
	</div>

	<!-------------------------- 유튜브 -------------------------->
	<!-- 

	해당스킨내 백그라운드 이미지 수정
	/theme/테마이름/skin/latest/basic_yt/latest.skin.php

	-->
	<?php echo latest('theme/basic_yt', 'gallery_movie', 6, 10);?>

	<div class="divide60"></div>

	
	<!-------------------------- 폼메일 -------------------------->
	<!-- 
	
	관리자 - 기본환경설정 - 관리자메일주소를 사용합니다. 관리자 로그인후 이메일 주소를 변경해주세요.	
	
	-->



        <!--contact section-->
        <section id="contact">
            <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="center-heading">
							<h2 class="kos4">SENDMAIL</h2>
							<span class="center-line"></span>
						</div>
					</div>                   
				</div>
                <div class="row">
                    <div class="col-md-12 margin30">
                        <div class="divide30"></div>
                        <div class="form-contact">
                            <form name="message" id="frm" class="contact-form" method="post" novalidate>
							<input type="hidden" id="send_url" value="<?php echo G5_THEME_URL?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label class="ko2">담당자<span>*</span></label>
                                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label>E-mail<span>*</span></label>
                                                <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
								<div class="row control-group">
									<div class="form-group col-xs-12  controls">
										<label class="ko2">연락처</label>
										<input type="tel" class="form-control" placeholder="phone" name="tel" id="phone" autocomplete="off">
									</div>
								</div>
								<div class="row control-group">
									<div class="form-group col-xs-12 controls">
										<label class="ko2">아래 보안코드를 입력해주세요.<span>*</span></label>
										<input type="text" name="secode" id="secode" class="form-control" placeholder="<?php echo rand(000000,999999)?>" aria-describedby="sizing-addon2" required autocomplete="off">
									</div>
								</div> 

                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label class="ko2">문의내용<span>*</span></label>
                                        <textarea rows="5" class="form-control" placeholder="Message" name="content" id="content" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <div id="success"></div>
                                <div class="row">
                                    <div class="form-group col-xs-12 text-right">
                                        <button type="button" class="btn btn-lg ko" id="msg">SEND MESSAGE</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--contact form-->
                    </div><!-- ./col -->
                </div>
            </div>
        </section>



	<!-------------------------- ./폼메일 -------------------------->


	<!-------------------------- 하단 배너 -------------------------->
	<?php
	/*

	/theme/테마이름/js/custom.js : 319 번째줄에서 속도 조정

	*/
	?>
	<div class="divide30"></div>
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
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
				</div>
			</div>
		</div>
	</div>
	<!-------------------------- 하단 배너 끝 -------------------------->

	<div style='height:100px;'></div>

	<script src="<?php echo G5_THEME_URL ?>/js/raphael-min.js"></script>
	<script src="<?php echo G5_THEME_URL ?>/morris/morris.min.js"></script>
	<?php
	include_once(G5_THEME_PATH.'/tail.php');
	?>


		<!-- 차트는 이곳에서 수정하세요. -->
		<script>
		  $(function () {
			"use strict";

			//BAR CHART
			var bar = new Morris.Bar({
			  element: 'bar-chart',
			  resize: true,
			  data: [
				{y: '2014', a: 100, b: 90},
				{y: '2015', a: 75, b: 65},
				{y: '2016', a: 50, b: 40},
				{y: '2017', a: 75, b: 65},
				{y: '2018', a: 50, b: 40},
				{y: '2019', a: 75, b: 65},
				{y: '2020', a: 100, b: 90}
			  ],
			  barColors: ['#32c5d2', '#008998'],
			  xkey: 'y',
			  ykeys: ['a', 'b'],
			  labels: ['SOLUTION', 'THEME'],
			  hideHover: 'auto'
			});
		  });
		</script>
