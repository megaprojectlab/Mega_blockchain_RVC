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
        <title>SOFTZONE - 소프트존 반응형 홈페이지 템플릿 COMPNAY 3 템플릿</title>

        <!-- Bootstrap -->
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
        <!--cube css-->
        <link href="<?php echo G5_THEME_URL ?>/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/css/bootstrap-select.css">
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
                        <h4>Company</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">Home</a></li>
                            <li>Company</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
		<div class="divide80 hidden-sm hidden-xs"></div>
		<div class="container hidden-lg hidden-md">
			<div class="row">
				<div class="col-md-12">
					<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
				</div>
			</div>
		</div>

		<div class="container ko">
            <div class="row">
                <div class="col-md-6 no-padding">
					<img src="https://via.placeholder.com/585x389" class="img-responsive">
				</div>

                <div class="col-md-6">

					<div class="hidden-lg hidden-md mt40 mb40"></div>
					<h3 class="line">Business</h3>
					<div class="row">
						<div class="col-md-1">
							<div class="pe-icon-box">
								<i class="pe-7s-light"></i>
							</div>
						</div>
						
						<div class="col-md-11">
							
							<div class="services-box-info">
								<h4>Graphics Design</h4>
								<p>
									최신 트렌드에 맞는 UI 제작을 하고 있으며 국내,해외에서도 사용할 수 있는 템플릿을 제작 및 개발 하고 있습니다.
								</p>
							</div>
						</div>
					</div>
					


					<!-- icon list -->
					<div class="row">
						<div class="col-md-1">
							<div class="pe-icon-box">
								<i class="pe-7s-folder"></i>
							</div>
						</div>
						
						<div class="col-md-11">
							<div class="services-box-info">
								<h4>Developer</h4>
								<p>
									필요한 모든 부분의 프로그램 개발 업무를 진행하고 있습니다.
									템플릿에 제한되지 않으며 모든 프로그램에 관련하여 상담해드리고 있습니다.
								</p>
							</div>
						</div>
                    </div>
					<!-- //icon list -->

				</div><!-- //col -->
			</div><!-- //row -->



            <div class="row mobile_height">
                <div class="col-md-6 col-md-push-6 no-padding">
					<img src="https://via.placeholder.com/585x389" class="img-responsive">
				</div>
                <div class="col-md-6 col-md-pull-6">

					<div class="hidden-lg hidden-md mt40 mb40"></div>
					<div class="divide20"></div>
					<h3 class="line">Business</h3>
					<div class="me-hobbies">
					<h4><i class="fa fa-image"></i> Images</h4>
					<p>
						이미지 제공시에 상업적용도로 사용할 수 없는 이미지도 포함될 수 있으므로 가급적 회사의 대표이미지를 사용해 주세요. 
					</p>
					</div>
					<div class="me-hobbies">
					<h4><i class="fa fa-gamepad"></i> Playing</h4>
					<p>
						저희 회사는 PC, MOBILE, TABLET 등의 기기 및 기타 기기를 사용함에 편리하게 사용 할 수 있는 UI 를 제공해 드리고 있습니다. 
					</p>
					</div>

				</div>
			</div>


            <div class="row mobile_height">
                <div class="col-md-6 no-padding">
					<img src="https://via.placeholder.com/585x389" class="img-responsive">
				</div>
                <div class="col-md-6">

					<div class="hidden-lg hidden-md mt40 mb40"></div>
					<div class="divide20"></div>
					<h3 class="line">Business</h3>
					<div class="row">
						<div class="col-md-1">
							<div class="pe-icon-box">
								<i class="pe-7s-graph"></i>
							</div>
						</div>
						
						<div class="col-md-11">
							<div class="services-box-info">
								<h4>Graph</h4>
								<p>
									복잡한 인터넷 환경속에서 살아남기 위해서는 최신 트렌드를 따라가는 방법이 최우선 과제이며 사용자층의 분석을 할 수 있는 솔루션등이 필요합니다.
								</p>
							</div>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-1">
							<div class="pe-icon-box">
								<i class="pe-7s-graph3"></i>
							</div>
						</div>
						<div class="col-md-11">
							<div class="services-box-info">
								<h4>Bigdata</h4>
								<p>
									제품등 소비자층의 빅테이터를 분석하는 일은 무엇보다도 중요하며 최신 제품을 생산할 경우 많은 참고 자료로 사용되어 집니다.
								</p>
							</div>
						</div>
                    </div>
					<!-- //icon list -->



				</div><!-- //col -->
			</div>


            <div class="row mobile_height">
                <div class="col-md-6 col-md-push-6 no-padding">
					<img src="https://via.placeholder.com/585x389" class="img-responsive">
				</div>
                <div class="col-md-6 col-md-pull-6">

					<div class="hidden-lg hidden-md mt40 mb40"></div>
					<div class="divide20"></div>
					<h3 class="line">Business</h3>

					<!-- item -->
					<div class="me-hobbies">
					<h4><i class="fa fa-globe"></i> Marketing</h4>
					<p>
						네이버 , 다음, 구글등의 블로그 마케팅으로 업체에서 받는 금액보다 저렴한 금액으로 마케팅 진행이 가능합니다. 업체대비 약 70% 이상 저렴합니다.
					</p>
					</div>
					<!-- //item -->

					<div class="me-hobbies">
					<h4><i class="fa fa-group"></i> Marketing type</h4>
					<p>
						마케팅의 종류에는 대표적으로 바이럴 마케팅, 에코 마케팅등이 있습니다. 바이럴 마케팅의 경우 무작위 광고방식으로 노출을 시키는 작업이며 에코 마케팅은 해당분야에 맞는 타켓 마케팅 이라고 보시면 됩니다.
					</p>
					</div>

					
				</div>
			</div>
		</div><!-- //container -->
		
		<div class="divide80"></div>
		<?php
		include_once(G5_THEME_PATH."/footer.php");
		?>

        <!--must need plugin jquery-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="<?php echo G5_THEME_URL?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.stellar.min.js" type="text/javascript"></script>


        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="<?php echo G5_THEME_URL?>/js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="<?php echo G5_THEME_URL?>/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
		<!-- responsive-slider -->
		<script src="<?php echo G5_THEME_URL?>/slide/responsive-slider.js"></script>        
		<script src="<?php echo G5_THEME_URL?>/js/raphael-min.js"></script>
		<script src="<?php echo G5_THEME_URL?>/morris/morris.min.js"></script>   
		<script src="<?php echo G5_THEME_URL?>/js/jquery.backstretch.js"></script>
		<script src="<?php echo G5_THEME_URL?>/js/bootstrap-select.js"></script>
        <script src="<?php echo G5_THEME_URL?>/js/custom.js" type="text/javascript"></script>


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
		</script>
    </body>
</html>
