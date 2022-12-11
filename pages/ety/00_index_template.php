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
include_once('../common.php');
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>한국NFT공인인증원(KNCA)</title>
    </head>

<?php
	include_once(G5_THEME_PATH.'/head_knca.php');
?>

<?php
	include_once(G5_THEME_PATH.'/navigation.php');
?>



        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>한국NFT공인인증원(KNCA)</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">KNCA</a></li>
                            <li>About</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->

        <div class="divide30 mobile-none"></div>

		<!-- 모바일시 -->
		<div class="container hidden-lg hidden-md">
			<div class="row">
				<div class="col-md-12">
					<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
				</div>
			</div>
		</div>
		<!-- /.모바일시 -->


        
<!-- wide start -->
	
<div class="container">

    <div class="row" style="overflow: hidden;">
           <div class="col-md-12">
               <h3 class="line f20">한국NFT공인인증원</h3>
                <div class="divide20"></div>
            </div>
    </div>

  
    <div class="row">
            <div class="col-md-12">
                <h3 class="heading">Business</h3>
                <div class="divide20"></div>
            </div>
     </div>


</div>

<!-- index1 시작 ////////////////////////////////////////////////////////////////-->

<div class="container no-padding"></div>



<!-------------------------- 슬라이드 시작 -------------------------->
<?php

/* 

링크 주소함수 
            <?php include_once($G5_BBS_URL.'/search.php'); ?>



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

	// 유튜브주소값 수정하는 곳
	$yt_url1 = 'BLL-kW_TpT4';
    $yt_url2 = '5K3Jdux_DDg';
    $yt_url3 = '6lxg0NKZjOE';



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



<!--------------------------최근 게시물 불러오기  latest skin-------------------------->

<div>
 <h2>gallery_list<br></h2>
 <?php echo latest('theme/gallery_list', 'nft_registry', 16, 20);?>
 
 <h2>gallery_list_carousel <br></h2>
 <?php echo latest('theme/gallery_list_carousel', 'nft_registry', 16, 20);?>

 <h2>basic_gallery_knca_reg<br></h2>
 <?php echo latest('theme/basic_gallery_knca_reg', 'nft_registry', 16, 20);?>

 <h2>basic_gallery<br></h2>
 <?php echo latest('theme/basic_gallery', 'nft_registry', 16, 20);?>
 
 <h2>basic<br></h2>
 <?php echo latest('theme/basic', 'nft_registry', 6, 20); ?>
 
 <h2>basic_blue_bg<br></h2>
 <?php echo latest('theme/basic_blue_bg', 'nft_registry', 6, 20);?>
 
 <h2>basic_icon_1<br></h2>
 <?php echo latest('theme/basic_icon_1', 'nft_registry', 6, 20);?>
 
 <h2>basic_icon_slide<br></h2>
 <?php echo latest('theme/basic_icon_slide', 'nft_registry', 16, 20);?>
 
 <h2>basic_main<br></h2>
 <?php echo latest('theme/basic_main', 'nft_registry', 6, 20);?>
 
 <h2>basic_one<br></h2>
 <?php echo latest('theme/basic_one', 'nft_registry', 6, 20);?>
 
 <h2>basic_sf<br></h2>
 <?php echo latest('theme/basic_sf', 'nft_registry', 6, 20);?>
 
 <h2>basic_tabs<br></h2>
 <?php echo latest('theme/basic_tabs', 'nft_registry', 6, 20);?>
 
 <h2>basic_yt<br></h2></h2>
 <?php echo latest('theme/basic_yt', 'nft_registry', 6, 20);?>
 
 <h2>notice<br></h2>
 <?php echo latest('theme/notice', 'nft_registry', 6, 20);?>
 
 <h2>pic_basic<br></h2>
 <?php echo latest('theme/pic_basic', 'nft_registry', 6, 20);?>
 
 <h2>popup_yt<br></h2>
 <?php echo latest('theme/popup_yt', 'nft_registry', 6, 20);?>

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

                </div> 
                <!-- end container  -->
    


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
					<h3 class="wow animated fadeInDownfadeInRight animated" style="visibility: visible;">Core features of <span class="colored-text">한국NFT공인인증원</span></h3>
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


    <div class="divide80"></div>

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
					<?php echo latest('theme/gallery_list', 'nft_registry', 6, 10);?>
				</div>
				<div id="tab-2" class="tab-pane">
					<?php echo latest('theme/gallery_list', 'nft_registry_gallery', 6, 10);?>
				</div>
				<div id="tab-3" class="tab-pane">
					<?php echo latest('theme/gallery_list', 'nft_registry', 6, 10);?>
				</div>
			</div>
		</div>
	</div>

	<!-------------------------- 유튜브 -------------------------->
	<!-- 

	해당스킨내 백그라운드 이미지 수정
	/theme/테마이름/skin/latest/basic_yt/latest.skin.php

	-->
	<?php echo latest('theme/basic_yt', 'nft_registry', 6, 10);?>

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





<!-- index2 인덱스2  ///////////////////////////////////////////////////////////////-->


<h1>인덱스 2</h1>




<?php
	/*
	###########
	# 슬라이드
	###########

	슬라이드의 모바일 폰트 크기는 css/common.css 에서 수정
	약 473 번째줄

	슬라이드 height 조절
	테마폴더/js/revolution-custom.js 에서 tp-banner 부분 startheight: 700, 사이즈를 줄이시면 됩니다.


	*/
	?>


	<div class="fullwidthbanner">
		<div class="tp-banner">
			<ul>
				<!-- SLIDE 1 -->
				<li class="rv-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="RESPONSIVE" style="display:none;">
					<img src="https://via.placeholder.com/1920x700" alt="darkblurbg"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" style="display:none;">
					
					<div class="caption title-2 sft ko"
						 data-x="50"
						 data-y="160"
						 data-speed="1000"
						 data-start="1000"
						 data-easing="easeOutExpo">
						소프트존 <br>
						RESPONSIVE HOMEPAGE
					</div>
					<div id="fontsize" class="caption text sfl ko f22 lh1-7"
						 data-x="50"
						 data-y="290"
						 data-speed="1000"
						 data-start="1800"
						 data-easing="easeOutExpo">
						 글로벌 윤리경영을 위해서 각종국제협약, 국제기구의 윤리기준설정<br />
						 OECD 회원국의 관련법규등의 책임감있는 회사로 지켜나가겠습니다.
					</div>
					<div class="caption sfb rev-buttons tp-resizeme"
						 data-x="50"
						 data-y="360"
						 data-speed="500"
						 data-start="1800"
						 data-easing="Sine.easeOut">
						<a href="#" class="btn btn-theme-bg btn-lg ko">바로가기</a>
					</div>
				</li>

				<!-- SLIDE 2 -->
				<li class="rv-2" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="RESPONSIVE" style="display:none;">
					<img src="https://via.placeholder.com/1920x700"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" style="display:none;">
					<div class="caption title-2 text-center sft ko"
						 data-x="center"
						 data-y="160"
						 data-speed="1000"
						 data-start="1000"
						 data-easing="easeOutExpo">
						소프트존 <br>
						RESPONSIVE HOMEPAGE
					</div>
					<div id="fontsize" class="caption text sfl ko f22 lh1-7"
						 data-x="center"
						 data-y="290"
						 data-speed="1000"
						 data-start="1800"
						 data-easing="easeOutExpo">
						 안전하고 책임감있는 회사로 거듭나기 위하여 첫번째도<br />
						 안전, 두번째도 안전, 세번째도 안전을 위해서 노력하고 있습니다.
					</div>
					<div class="caption sfb rev-buttons tp-resizeme"
						 data-x="center"
						 data-y="360"
						 data-speed="500"
						 data-start="1800"
						 data-easing="Sine.easeOut">
						<a href="#" class="btn btn-theme-bg btn-lg ko">바로가기</a>
					</div>

				</li>
				<!-- SLIDE 3 -->
				<li class="rv-3" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="RESPONSIVE" style="display:none;">
					<!-- MAIN IMAGE -->
					<img src="https://via.placeholder.com/1920x700"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" style="display:none;">

					<div class="caption text-center-top sft ko f60"
						 data-x="right"
						 data-y="210"
						 data-speed="1000"
						 data-start="1400"
						 data-easing="easeOutExpo">
						RESPONSIVE HOMEPAGE
					</div>

					<div id="fontsize" class="caption text-center-btm sfr text-center ko f22 lh1-7"
						 data-x="right"
						 data-y="265"
						 data-speed="1000"
						 data-start="1600"
						 data-easing="easeOutExpo">
						안전하고 책임감있는 회사로 거듭나기 위하여 첫번째도 안전, <br />
						두번째도 안전, 세번째도 안전을 위해서 노력하고 있습니다.

					</div>
					<div class="caption sfb rev-buttons tp-resizeme"
						 data-x="right"
						 data-y="350"
						 data-speed="500"
						 data-start="1800"
						 data-easing="Sine.easeOut">
						<a href="#" class="btn border-white btn-lg ko">바로가기</a>
					</div>
				</li>

			</ul>
		</div>
	</div><!--full width banner-->
	<script>
	// 슬라이드 처리
	$(window).load(function(){
		$(".rv-1").css('display','block');
		$(".rv-2").css('display','block');
		$(".rv-3").css('display','block');
	}); 
	</script>
	<!-------------------------- 슬라이드 끝 -------------------------->


	<!-------------------------- YOUR PARTNER -------------------------->
	<div class="divide80"></div>
	<div class="container">
		<div class="row ko">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="center-heading">
					<h2>YOUR <strong>PARTNER</strong> </h2>
					<span class="center-line"></span>
					<p class="sub-text margin40">
						글로벌 종합물류유통 기업으로 고객가치를 최우선으로 전 세계 네트워크와 정보시스템을 기반으로 제품의 <strong>수출,수입,포장,보관</strong>등의 물류솔루션을 제공해드리고 있습니다. </p>
				</div>
			</div>
		</div>
	</div>
	<!-------------------------- //YOUR PARTNER  -------------------------->


	<?php
	/*

	https://material.io/resources/icons/?style=outline
	위 주소에서 아이콘 이름만 교체하시면 바로 사용이 가능합니다.

	아래 예처럼 analytics 이나 phonelink_setup 처럼 이름만 변경해주세요.

	<i class="material-icons f60">analytics</i>
	<i class="material-icons f60">phonelink_setup</i>

	*/
	?>

	
	<!-------------------------- 최근게시물 시작-------------------------->
	<div class="divide40"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<!-- tab -->
				<div class="tabs-container">
					<ul class="nav nav-tabs tab-list">
						<li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> NOTICE</a></li>
						<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"> BOARD</a></li>
						<li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false"> ETC</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab-1" class="tab-pane active">
							<p>
								<?php echo latest('theme/basic_sf', 'notice', 6, 23);?>
							</p>
						</div>
						<div id="tab-2" class="tab-pane">
							<p>
								<?php echo latest('theme/basic_sf', 'free', 6, 23);?>
							</p>
						</div>
						<div id="tab-3" class="tab-pane">
							<p>
								<?php echo latest('theme/basic_sf', 'notice', 6, 23);?>
							</p>
						</div>
					</div>
				</div><!-- //tab -->
			</div><!-- //col -->


			<div class="col-md-4 col-sm-6 margin30">
				<?php

				// 게시판이름 자유게시판의 경우 free
				$bo = 'gallery_webzin_movie';

				// 가장 마지막에 올린 게시물중에서 유튜브 영상 하나만 가져와서 보여줌
				$yt = sql_fetch("select wr_10 from g5_write_$bo order by wr_id desc limit 1");
				$yt = $yt['wr_10'];
				if($yt)
				{
					$basename = basename($yt);
					$url = str_replace("watch?v=","",$basename);
					$url = explode('&',$url);
					$url = $url[0];
				}else{
					// 게시판에 유튜브가 없는 경우 출력할 동영상 아이디값
					$url = 'xGlVPzmgpSM';
				}
				?>
				<iframe width="100%" height="240" src="https://www.youtube.com/embed/<?php echo $url?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div><!--//col-->



			<div class="col-md-4 col-sm-6 margin30">
				<div class="box_2 skills-wrapper wow animated bounceIn animated animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3">
							<div class="pe-icon-box-type-2">
								<i class="pe-7s-headphones"></i>
							</div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-9">
							<h4 class="left_title_main">CUSTOMER</h4>
						</div>
					</div><!-- //row -->
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<ul class="list-unstyled contact">
								<li>영업시간안내 : <strong>AM:09 ~ PM:19</strong></li>
								<li>휴무 : 토요일,주말,공휴일</li>
								<li><strong><i class="fa fa-phone"></i></strong>1588-1234</li>
								<li><strong><i class="fa fa-envelope"></i></strong><a href="#">한국NFT공인인증원cokr@naver.com</a></li>
								<li><strong><i class="fa fa-print"></i></strong>02) 1234-1234</li>
							</ul>
						</div>
					</div><!-- //row -->

				</div><!-- box -->
			</div><!-- //col-->
		</div><!-- //row -->
	</div>
	<!-------------------------- 최근게시물 끝 -------------------------->
	<div class="divide40"></div>
	<!-------------------------- 사각박스 시작 -------------------------->
	<div class="intro-text-1 light">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					
					<div class="pricing-simple">
					<a href="javascript:void(0);">
						<h4>GREETING</h4>
						<!--<ul class="list-unstyled">
							<li><i class="fa fa-check-square"></i> un passage du </li>
							<li><i class="fa fa-check-square"></i> sur Internet tendent </li>
							<li><i class="fa fa-check-square"></i> un dictionnaire de plus </li>
							<li><i class="fa fa-check-square"></i> un passage du </li>
						</ul>-->
						<p>
							 회사에 대한 제품안내 페이지로 이동 합니다.
						</p>
						<div class="img-block">
							<img src="https://via.placeholder.com/220x85" class="img-responsive">
						</div>
					</a>
					</div>
					
				</div>
				<div class="col-md-3 col-sm-6">
				
					<div class="pricing-simple">
					<a href="javascript:void(0);">
						<h4>TECHNOLOGY</h4>
						<p>
							 회사의 기술에 대해서 소개합니다.
						</p>
						<div class="img-block">
							<img src="https://via.placeholder.com/220x85" class="img-responsive">
						</div>
					</a>
					</div>

				</div>
				<div class="col-md-3 col-sm-6">
				
					<div class="pricing-simple">
					<a href="javascript:void(0);">
					<h4>BUSINESS</h4>

						<p>
							 사업관련분야에 대한 전망과 연구실적에 대하여 소개합니다.
						</p>
						<div class="img-block">
							<img src="https://via.placeholder.com/220x85" class="img-responsive">
						</div>
					</a>
					</div><!-- //pricing -->

				</div><!-- //col -->
				<div class="col-md-3 col-sm-6">
				
					<div class="pricing-simple">
					<a href="javascript:void(0);">
					<h4>SERVICE</h4>
						<p>
							 2018년도 상반기 운송시스템 개편안내
						</p>
						<div class="img-block">
							<img src="https://via.placeholder.com/220x85" class="img-responsive">
						</div>
					</a>
					</div><!-- //pricing -->

				</div><!-- //col -->
			</div>
		</div>
	</div>
	<!-------------------------- 사각박스 끝 -------------------------->
	<!-------------------------- 그래프 및 전망 -------------------------->
	<div style='height:100px;'></div>

	<div class="container">
		<div class="row">
			<div class="col-md-7 margin30">
			<h3 class="line">graph</h3>
				  <!-- AREA CHART -->
				  <div class="box box-primary">
					<div class="box-header with-border">
						<div class="box-tools pull-right"></div>
					</div>
					
					<div class="box-body chart-responsive">
					  <div class="chart" id="revenue-chart" style="height: 300px;"></div>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- //AREA CHART -->


			</div><!-- //col -->
			<div class="col-md-5">
					<div class="row">
						<div class="col-md-6 margin30">
							<div class="pricing-simple">
								<a href="/bbs/board.php?bo_table=gallery_webzin_movie"><img src="https://via.placeholder.com/211x123" class="img-responsive"></a>
							</div>
						</div><!-- //col -->
						<div class="col-md-6 margin30">
							<div class="pricing-simple">
								<a href="/bbs/board.php?bo_table=gallery_webzin_movie"><img src="https://via.placeholder.com/211x123" class="img-responsive"></a>
							</div>
						</div><!-- //col -->
					</div><!-- //row -->
					<div class="row margin30">
						<div class="col-md-12 wow animated bounceIn animated animated">
						
						<strong>2.9% 와 2.7% 성장률을 기록할 전망</strong> 
						<BR>
						소비자물가는 내수 증가세 둔화에도 불구하고 유가 상승의 영향에 주로 기인하여 1%대 중.후반을 기록할 것으로 예상
						<br>
						취업자 수 증가폭은 인구구조의 변화, 산업구조조정 등의 영향으로 작년에 비해 낮은 수준을 기록하는 한편, 실업률은 작년과 유사한 수준을 나타낼 전망이다.

							
						</div><!-- //col -->
					</div><!-- //row -->

			</div><!-- //col -->
		</div><!-- //row -->
	</div>
		
	<div class="divide40"></div>


		<!-------------------------- 회사소개,막대 그래프 -------------------------->
		<div style='height:100px;'></div>
		<div class="our-team-v-2">
		<div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <h3 class="line">About Company</h3>
                    <p>
                        미국의 정책금리 추가 인상 및 신흥국 금융시장의 변동성 확대 등 대외 환경
						변화에 대한 우려가 확대되고 있으나, 우리 경제의 물가 및 경기상황에 기초한 통화
						정책을 독립적으로 운용할 수 있는 환경은 여전히 유지되고 있는 것으로 평가됨.
                    </p>
                </div>
                <div class="col-sm-5">
                    <div class="skills-wrapper wow animated bounceIn animated animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">
                        <h3 class="heading-progress">Web Design SKILL <span class="pull-right">88%</span></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar">
                            </div>
                        </div>
                        <h3 class="heading-progress">Web Development SKILL <span class="pull-right">100%</span></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar">
                            </div>
                        </div>
                        <h3 class="heading-progress">Marketing <span class="pull-right">65%</span></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width: 65%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" role="progressbar">
                            </div>
                        </div>                    
                    </div><!--skills-->
                </div>
            </div>
        </div>
	</div><!-- //our-team -->
	<!-------------------------- 회사소개,막대 그래프 끝 -------------------------->


	<!-------------------------- 그래프 및 전망 -------------------------->
	<div class="container mt40 mb40">
		<div class="row">
			<div class="col-md-5">
	
				<div class="row margin30">
					<div class="col-md-12 wow animated bounceIn animated animated">
						<strong><span class='font-kr'>완화적 정책기조를 유지하는 통화정책</span></strong> 
						<BR>
						최근 소비가 양호한 흐름을 보이고 있으나 순해외소비 증가 등으로 인해 국내 서비스업
						경기의 개선은 지연되고 있으며 투자 증가세도 둔화되는 등 총수요 전반에 통화정책
						적 대응이 필요할 정도의 과열 신호가 감지되고 있다고 판단하기는 어려운 상황임. 
							
					</div><!-- //col -->
				</div><!-- //row -->

				<div class="row">
					<div class="col-md-6 margin30">
						<div class="pricing-simple">
							<img src="https://via.placeholder.com/211x123" class="img-responsive">
						</div>
					</div><!-- //col -->
					<div class="col-md-6 margin30">
						<div class="pricing-simple">
							<img src="https://via.placeholder.com/211x123" class="img-responsive">
						</div>
					</div><!-- //col -->
				</div>

			</div><!-- //col -->
			<div class="col-md-7">
			<h3 class="line">graph</h3>

				  <!-- LINE CHART -->
				  <div class="box box-info">
					<div class="box-header with-border">
					  <div class="box-tools pull-right"></div>
					</div>
					<div class="box-body chart-responsive">
					  <div class="chart" id="line-chart" style="height: 300px;"></div>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->

				  <div class="divide20"></div>

			</div><!-- //col -->
		</div><!-- //row -->
	</div>
	<!-------------------------- 그래프 및 전망 끝 -------------------------->


	<!-------------------------- 최근게시물 -------------------------->
	<?php echo latest('theme/basic_gallery', 'nft_registry_gallery', 3, 10);?>
	<!-------------------------- //최근게시물 -------------------------->



	<!-------------------------- 최근게시물 -------------------------->
	<?php echo latest('theme/basic_one', 'notice', 5, 30);?>
	<!-------------------------- //최근게시물 -------------------------->

	<!-------------------------- 최근게시물 -------------------------->
	<?php echo latest('theme/basic_yt', 'gallery_movie', 2, 10);?>
	<!-------------------------- //최근게시물 -------------------------->


	<!-------------------------- 하단 배너 -------------------------->
	<!-- 
	테마폴더/js/custom.js : 283줄
	-->
	<div class="divide40"></div>
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
	<div class="divide40"></div>


















<!-- index3 인덱스3  ///////////////////////////////////////////////////////////////-->



<h1>인덱스 3</h1>



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
                <h3 class="wow animated fadeInDownfadeInRight animated" style="visibility: visible;">Core features of <span class="colored-text">한국NFT공인인증원</span></h3>
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










<!-- index4 인덱스4  ///////////////////////////////////////////////////////////////-->


<h1>인덱스 4</h1>


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
							<!-- <i class="flaticon-market"></i> -->
                            <i class="material-icons f30">account_balance_wallet</i>
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
						<h1 class="">한국NFT공인인증원</h1>
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
















  





		

</div><!--wide container-->




 <!-- more info? -->
<div class="divide80"></div>
<div class="intro-text-1 light">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4 class="animated slideInDown ko">BUSINESS</h4>

                <p class="ko">
                    문의사항이나 제품에 대한 궁금증이 있으시다면 바로가기를 클릭해 주세요.
                </p>                   
            </div>
            <div class="col-sm-4">
                <a href="<?php echo G5_URL?>/bbs/qalist.php" target="_blank" class="btn border-theme btn-lg ko">바로가기</a>
            </div>
        </div>
    </div>
</div> <!--intro text end-->






 <!-- footer section ------------------------------------ -->


 <?php
		include_once(G5_THEME_PATH."/footer.php");
	?>

 <?php
	include_once(G5_THEME_PATH.'/tail_knca.php');
	?>

</body>
</html>



<!-- 화면전환 -->
<script>
$(document).ready(function(){
	$('.breadcrumb-wrap').backstretch([
	  "<?php echo G5_THEME_URL?>/img/etc/sub-1.png",
	  "<?php echo G5_THEME_URL?>/img/etc/sub-2.png",
	  "<?php echo G5_THEME_URL?>/img/etc/sub-3.png",
	  "<?php echo G5_THEME_URL?>/img/etc/sub-5.png",
	  "<?php echo G5_THEME_URL?>/img/etc/sub-6.png"
	], {
		fade: 750,
		duration: 4000
	});
});
</script>



		<!-- 차트는 이곳에서 수정하세요. -->
		<script>
		  $(function () {
			"use strict";

			// AREA CHART
			var area = new Morris.Area({
			  element: 'revenue-chart',
			  resize: true,
			  data: [
				{y: '2015 Q1', item1: 2666, item2: 2666},
				{y: '2015 Q2', item1: 2778, item2: 2294},
				{y: '2015 Q3', item1: 4912, item2: 1969},
				{y: '2015 Q4', item1: 3767, item2: 3597},
				{y: '2016 Q1', item1: 6810, item2: 1914},
				{y: '2016 Q2', item1: 5670, item2: 4293},
				{y: '2016 Q3', item1: 4820, item2: 3795},
				{y: '2016 Q4', item1: 15073, item2: 5967},
				{y: '2017 Q1', item1: 10687, item2: 4460},
				{y: '2017 Q2', item1: 8432, item2: 5713}
			  ],
			  xkey: 'y',
			  ykeys: ['item1', 'item2'],
			  labels: ['Item 1', 'Item 2'],
			  lineColors: ['#a0d0e0', '#3c8dbc'],
			  hideHover: 'auto'
			});

			// LINE CHART
			var line = new Morris.Line({
			  element: 'line-chart',
			  resize: true,
			  data: [
				{y: '2015 Q1', item1: 2666},
				{y: '2015 Q2', item1: 2778},
				{y: '2015 Q3', item1: 4912},
				{y: '2015 Q4', item1: 3767},
				{y: '2016 Q1', item1: 6810},
				{y: '2016 Q2', item1: 5670},
				{y: '2016 Q3', item1: 4820},
				{y: '2016 Q4', item1: 15073},
				{y: '2017 Q1', item1: 10687},
				{y: '2017 Q2', item1: 8432}
			  ],
			  xkey: 'y',
			  ykeys: ['item1'],
			  labels: ['Item 1'],
			  lineColors: ['#3c8dbc'],
			  hideHover: 'auto'
			});

		  });


          
			// AREA CHART
			var area = new Morris.Area({
			  element: 'revenue-chart1',
			  resize: true,
			  data: [
				{y: '2015 Q1', item1: 2666, item2: 2666},
				{y: '2015 Q2', item1: 2778, item2: 2294},
				{y: '2015 Q3', item1: 4912, item2: 1969},
				{y: '2015 Q4', item1: 3767, item2: 3597},
				{y: '2016 Q1', item1: 6810, item2: 1914},
				{y: '2016 Q2', item1: 5670, item2: 4293},
				{y: '2016 Q3', item1: 4820, item2: 3795},
				{y: '2016 Q4', item1: 15073, item2: 5967},
				{y: '2017 Q1', item1: 10687, item2: 4460},
				{y: '2017 Q2', item1: 8432, item2: 5713}
			  ],
			  xkey: 'y',
			  ykeys: ['item1', 'item2'],
			  labels: ['Item 1', 'Item 2'],
			  lineColors: ['#a0d0e0', '#3c8dbc'],
			  hideHover: 'auto'
			});


		</script>