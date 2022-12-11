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
		
        <title>SOFTZONE - 소프트존 반응형 홈페이지 템플릿 비즈니스 4 페이지</title>

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
        <div class="container">
            <div class="row" style="overflow: hidden;">
                <div class="col-sm-3" style="overflow-y: auto;">
					<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
                </div><!--sidebar col end-->
                <div class="col-sm-9">

				<!-- left start -->
					<div class="row">
						<div class="col-md-12">
							<h3 class="heading">Business</h3>
							<div class="divide20"></div>
						</div>
					</div>
					<!--<h2 class="line">Item introduction</h2>-->


					<div class="about">
						<div class="row">
							<div class="row-slider">
								<div class="col-lg-6 mar-bot30">
									<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
										<div class="slides" data-group="slides">
											<ul>
						
												<div class="slide-body" data-group="slide">
													<li><img alt="" class="img-responsive" src="https://via.placeholder.com/408x272" width="100%"  /></li>
													<li><img alt="" class="img-responsive" src="https://via.placeholder.com/408x272" width="100%"  /></li>
													<li><img alt="" class="img-responsive" src="https://via.placeholder.com/408x272" width="100%"  /></li>
									
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
																변화되는 모든 기기와 트렌드에 맞게 반응형 템플릿으로 제작되고 있습니다.<br />
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
																필요한 모든 부분의 프로그램 개발 업무를 진행하고 있습니다.<br />
															</p>
														</div>
													</div>
												</div><!-- //col -->
											</div><!-- //row -->


									</div>

								</div><!-- col -->
							
							</div>
						</div>
					</div><!-- //about -->


					<div class="divide80"></div>

					<div class="row">
						<div class="col-md-12">
							<h3 class="heading">Platform</h3>
							<div class="divide20"></div>
						</div>
					</div>
					<div class="row wow animated bounceInUp animated" data-wow-delay="0.2s">
						<div class="col-md-6 no-padding">
							  <!-- LINE CHART -->
							  <div class="box box-info">
								<div class="box-header with-border">
								  <div class="box-tools pull-right"></div>
								</div>
								<div class="box-body chart-responsive">
								  <div class="chart" id="line-chart" style="height: 300px;"></div>
								</div><!-- /.box-body -->
							  </div><!-- /.box -->
							  <div class="divide20"></div>
						</div>
						<div class="col-md-6">
							<p>
								1~2년 전만 해도 수많은 악성코드의 한 종류에 불과했던 랜섬웨어는 현재 막대한 피해를 동반하며 전세계를 휩쓰는 광풍이 되었다. 이와 관련해 안랩 시큐리티대응센터(AhnLab Security Emergency-response Center, 이하 ASEC)는 2017년 2분기 ASEC 리포트를 통해 2017년 상반기 랜섬웨어 동향을 발표할 예정이다. ASEC에 따르면 감염된 시스템의 파일을 암호화하는 랜섬웨어가 본격적으로 등장한 것은 2016년으로, 이후 공격자 관점의 랜섬웨어 수익 모델과 시장이 형성되기 시작했다. 
							</p>
						</div>
					</div>




                </div>
            </div>
        </div><!--left sidebar container-->

		<div class="divide80"></div>
		<?php
		include_once(G5_THEME_PATH."/footer.php");
		?>
        <!--must need plugin jquery-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="<?php echo G5_THEME_URL ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.stellar.min.js" type="text/javascript"></script>
		<script src="<?php echo G5_THEME_URL ?>/js/jquery.backstretch.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo G5_THEME_URL ?>/js/wow.min.js" type="text/javascript"></script> 
        <script src="<?php echo G5_THEME_URL ?>/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
		<script src="<?php echo G5_THEME_URL ?>/slide/responsive-slider.js"></script> 
		<script src="<?php echo G5_THEME_URL ?>/js/raphael-min.js"></script>
		<script src="<?php echo G5_THEME_URL ?>/morris/morris.min.js"></script>  
		<script src="<?php echo G5_THEME_URL ?>/js/bootstrap-select.js"></script>
		<script src="<?php echo G5_THEME_URL ?>/js/custom.js" type="text/javascript"></script>
		<script>
		  $(function () {
			"use strict";

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
