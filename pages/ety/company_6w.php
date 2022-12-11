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
        <title>SOFTZONE - 소프트존 반응형 홈페이지 템플릿 COMPNAY 4 템플릿</title>

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
			<h3 class="heading">Graph</h3>
			<div class="divide20"></div>
			<div class="row">
				<div class="col-lg-6 no-padding wow animated fadeInUp" data-wow-delay="0.1s">

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

				</div>
				<div class="col-lg-6 no-padding wow animated fadeInUp" data-wow-delay="0.1s">

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

					  <div class="divide20"></div>

			   </div>
			</div>

			<div class="divide80"></div>
			<div class="row">
				<div class="col-lg-6 wow animated fadeInUp" data-wow-delay="0.1s">
				  <h4>Global Trend</h4>
				  <p>
						APT 공격과의 결합방식은 다음과 같은 형태로 예상된다. ① 금융정보를
						가진 개인·기업 PC 및 대기업, 금융기관, 병원 등 중요한 정보를 가지고 있으면서
						막대한 몸값을 지불할 능력이 되는 기업 및 기관을 표적으로 한 타켓형
						랜섬웨어 유포, ② 이메일 등을 통한 기업임원 PC 또는 취약한 시스템에 대한
						랜섬웨어 유포, ③ 기업 내부 암호화 솔루션(DRM) 취약점을 이용한 랜섬웨어*
						* DRM 암호화에 사용되는 키 값을 해커가 변경하여 암호화 적용 시킨 후 몸값 요구
						SNS 계정을 활용한 랜섬웨어 유포방식은 SNS 계정을 해킹하여 지인에게
						다이렉트 메시지, 랜섬웨어 유포 단축 URL 전파 및 클릭 유도 등을 통해
						랜섬웨어 유포방식이다.				  
				  </p>
				 
				 <div class="divide50"></div>
				</div>
				<div class="col-lg-6 wow animated fadeInUp" data-wow-delay="0.1s">
				  <h4>Read</h4>
				  <p>
						특히, 2017년에는 대선, 헌법재판소 결정, 특검 등 사회·정치적 이슈를 노린
						랜섬웨어 유포가 증가될 것으로 예상되며, 북한의 금융 수익 목적의 해킹 활동*을
						표방에 따라 랜섬웨어 영역으로의 확대 가능성도 예상된다.
						* 방글라데시 국책은행 SWIFT 해킹(16.2월), 인터파크 개인정보 탈취 및 협박(16.7월) 등
						또한, 2017년에도 2016년에 나타났던 랜섬웨어 분석 지연, 백신 우회를 위한
						지능화 기술이 지속적으로 나타날 것으로 예상된다. 앞서 언급한 Cerber 랜섬웨어와
						같이 다른 랜섬웨어들도 더 진화된 기법을 적용한 지속적인 업데이트가 예상된다.				  
				  </p>
				  
				  <div class="divide50"></div>
			   </div>
			</div>
			
			<div class="row">
				<div class="col-lg-6 wow animated fadeInUp" data-wow-delay="0.1s">
				  <h4>Vision</h4>
				  <p>
						또한 랜섬웨어는 데이터를 암호화하여 사용이 불가능하도록 만든다는 특징이
						있으므로, 평소 중요자료를 정기적으로 백업하는 것이 가장 효과적인 예방
						방안이다. 단, 최근 랜섬웨어는 PC에 연결된 저장장치, 클라우드 등의 파일까지
						모두 암호화하므로 백업장치는 별도로 보관하며, 백업 시에만 연결하여 저장
						하는 것이 중요하다			  
				  </p>
				 
				 <div class="divide50"></div>
				</div>
				<div class="col-lg-6 wow animated fadeInUp" data-wow-delay="0.1s">
				  <h4>Attack</h4>
				  <p>
						타 악성코드와는 달리 랜섬웨어는 데이터를 암호화시키기 때문에 백신을
						통한 치료만으로는 암호화된 데이터를 복구할 수 없다는 특징을 가진다. 이 점은
						공격자가 악성코드 제작 소요시간에 비해 높은 이득을 취할 수 있도록 하는
						이점으로 작용하여 랜섬웨어 확대를 더욱 부채질하고 있다				  
				  </p>
				  
				  <div class="divide50"></div>
			   </div>
			</div>


		</div><!-- //container -->

		<div class="divide80"></div>
		<?php
		include_once(G5_THEME_PATH."/footer.php");
		?>

        <!--scripts and plugins -->
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
		<script src="<?php echo G5_THEME_URL?>/js/jquery.backstretch.js"></script>
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
