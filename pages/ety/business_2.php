<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/SF.lib.php');
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		
        <title>SOFTZONE - 소프트존 반응형 홈페이지 템플릿 비즈니스 3 페이지</title>

        <link href="<?php echo G5_THEME_URL ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- font awesome for icons -->
        <link href="<?php echo G5_THEME_URL ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="<?php echo G5_THEME_URL ?>/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="<?php echo G5_THEME_URL ?>/css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
        <!-- Revolution Style-sheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL ?>/rs-plugin/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL ?>/css/rev-style.css">
        <!--owl carousel css-->
        <link href="<?php echo G5_THEME_URL ?>/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo G5_THEME_URL ?>/owl-carousel/assets/owl.theme.default.css" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="<?php echo G5_THEME_URL ?>/css/yamm.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/css/bootstrap-select.css">
        <!-- slide -->
		<link href="<?php echo G5_THEME_URL ?>/slide/responsive-slider.css" rel="stylesheet">
        <!--cube css-->
        <link href="<?php echo G5_THEME_URL ?>/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
		<!-- chart -->
		<link href="<?php echo G5_THEME_URL ?>/morris/morris.css" rel="stylesheet" type="text/css" media="screen">
        <!-- custom css-->
        <link href="<?php echo G5_THEME_URL ?>/css/style_aqours.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo G5_THEME_URL ?>/css/common.css" rel="stylesheet" type="text/css" media="screen">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

	</head>
		<?php
		include_once(G5_THEME_PATH.'/navigation.php');
		?>
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Business</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">Home</a></li>
                            <li>Business</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->

        <div class="divide80 mobile-none"></div>
			<!-- 모바일시 -->
			<div class="container hidden-lg hidden-md">
				<div class="row">
					<div class="col-md-12">
						<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
					</div>
				</div>
			</div>
			<!-- /.모바일시 -->

			<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading">Business</h3>
					<div class="divide20"></div>
                </div>
            </div>
				<div class="about">
					<div class="row">
						<div class="row-slider">
							<div class="col-lg-6 mar-bot30">
								<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
									<div class="slides" data-group="slides">
										<ul>
											<div class="slide-body" data-group="slide">
												<li><img alt="" class="img-responsive" src="https://via.placeholder.com/555x369" width="100%" /></li>
												<li><img alt="" class="img-responsive" src="https://via.placeholder.com/555x369" width="100%" /></li>
												<li><img alt="" class="img-responsive" src="https://via.placeholder.com/555x369" width="100%" /></li>
											</div>
										</ul>
											<a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
											<a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
									
									</div>
								</div>
							</div>
						
							<div class="col-lg-6 ">
								<div class="company mar-left10">
									<h4 style='padding-bottom:10px;'>TEMPLATE & SOLUTION DEVELOPER</h4>

										<div class="row">
											<div class="col-xs-12">

												<div class="services-box margin30 wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
													<div class="services-box-icon-type-1">
														<i class="fa fa-tablet"></i>
													</div><!--services icon-->
													<div class="services-box-info-type-1">
														<h4>Fully Responsive</h4>
														<p>
															변화되는 모든 기기와 트렌드에 맞게 반응형 템플릿으로 제작되고 있습니다.
															국내 및 해외에서도 사용할 수 있는 템플릿 입니다.
														</p>
													</div>
												</div>

											</div><!-- //col -->
										</div><!-- //row -->

										<div class="row">
											<div class="col-xs-12">

												<div class="services-box margin30 wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
													<div class="services-box-icon-type-1">
														<i class="fa fa-superscript"></i>
													</div>
													<div class="services-box-info-type-1">
														<h4>Developer</h4>
														<p>
															필요한 모든 부분의 프로그램 개발 업무를 진행하고 있습니다.
															템플릿에 제한되지 않으며 모든 프로그램에 관련하여 상담해드리고 있습니다.
														</p>
													</div>
												</div>
											</div><!-- //col -->
										</div><!-- //row -->

										<div class="row">
											<div class="col-xs-12">

												<div class="services-box margin30 wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
													<div class="services-box-icon-type-1">
														<i class="fa fa-pencil"></i>
													</div><!--services icon-->
													<div class="services-box-info-type-1">
														<h4>Planning</h4>
														<p>
															많은경험을 한 결과 기획을 정확하게 해야 좋은 결과물이 나오게 됩니다.
															기획이 좋으면 좋은 디자인과 좋은 프로그램이 완성 됩니다.
														</p>
													</div>
												</div>

											</div><!-- //col -->
										</div><!-- //row -->

								</div>

							</div><!-- col -->
						
						</div>
					</div>
						
				</div>
				
			</div>

		<!--//service-->



		<div class="divide80"></div>


		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading">Chart</h3>
					<div class="divide20"></div>
                </div>
            </div>

			  <div class="row">
				<div class="col-md-6 no-padding">
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
				  <!-- /.box -->

				</div><!-- /.col (LEFT) -->
				<div class="col-md-6">

				  <blockquote class="wow animated fadeInRight animated">
					<span class="block-icon-03">S</span>
					<p>
					16년 랜섬웨어 유포는 전년도에 비해 증가하였는데, 한국인터넷진흥원에서
					접수한 랜섬웨어 피해신고 현황을 살펴보면 2015년 770건에서 2016년 1,438건으로
					전년대비 86.8% 증가한 것을 확인할 수 있다.
					한국인터넷진흥원에서 분석한 랜섬웨어 악성코드 수도 전년대비 약 3.5배가
					증가한 것을 볼 때 실제 랜섬웨어 건수가 증가한 것을 알 수 있다. 랜섬웨어의
					종류별 비율도 상반기에는 Locky 랜섬웨어가 높은 비율(79%)을 보였으나 하반기에는
					Cerber 랜섬웨어가 높은 비율(52%)로 유포되었음이 확인되었다.
					< 15~16년 랜섬웨어 피해 민원접수 현황 (출처:한국인터넷진흥원) >
					</p>
				  </blockquote>

				</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- //container -->


		<div class="divide30"></div>
		<div class="container">
			  <div class="row">
			
				<div class="col-md-6">
				  <blockquote class="wow animated fadeInLeft animated">
					<span class="block-icon-03">B</span>
					<p>
					랜섬웨어는 홈페이지 취약점 악용 및 파일공유 사이트를 이용한 유포방식이
					일반적이었으나, ’17년에는 이러한 기존 방식과 함께
					- 기간에 따라 복호화 비용 추가
					- 복구 가이드 파일 이름 변경 (@_readme_@) - Neutrino and RIG 익스플로잇 킷 이용
					- 유포 방식의 변화 (멀버타이징 방식 추가)
					더욱 진화된 방식을 이용한 랜섬웨어 유포가 예상된다.
					※ 멀버타이징(Malvertising) : 악성코드(Malware)와 광고(Advertising)의 합성어로 광고서버를
					해킹하여 악성코드를 유포하는 공격기법
					주요 방법으로는 APT 공격과 결합된 유포방식, 대중이 많이 이용하는 SNS
					계정 탈취를 통한 랜섬웨어 유포, 모바일환경을 대상으로 한 랜섬웨어 유포 등
					다양한 방식이 이용될 것으로 예상된다.
					</p>
				  </blockquote>

				</div><!-- /.col -->

				<div class="col-md-6 no-padding">

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

				</div><!-- /.col (RIGHT) -->


		</div><!-- /.row -->
	</div><!-- //container -->


	<div class="divide80"></div>


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
		<?php
		include_once(G5_THEME_PATH."/footer.php");
		?>

        <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="<?php echo G5_THEME_URL ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="<?php echo G5_THEME_URL ?>/js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.stellar.min.js" type="text/javascript"></script>


        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="<?php echo G5_THEME_URL ?>/js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="<?php echo G5_THEME_URL ?>/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
		<!-- responsive-slider -->
		<script src="<?php echo G5_THEME_URL ?>/slide/responsive-slider.js"></script>        
		<script src="<?php echo G5_THEME_URL ?>/js/raphael-min.js"></script>
		<!-- chart -->
		<script src="<?php echo G5_THEME_URL ?>/morris/morris.min.js"></script>   
		<script src="<?php echo G5_THEME_URL ?>/js/jquery.backstretch.js"></script>
		<script src="<?php echo G5_THEME_URL ?>/js/bootstrap-select.js"></script>
        <script src="<?php echo G5_THEME_URL ?>/js/custom.js" type="text/javascript"></script>

		<!--  차트는 이곳에서 수정 하세요. -->
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
		</script>

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

    </body>
</html>
