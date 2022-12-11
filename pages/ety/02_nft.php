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
		
        <title>사업안내 3</title>

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
		<!-- 서브페이지 용도 스타일시트 입니다. -->
		<link href="<?php echo G5_THEME_URL ?>/css/style_sub.css" rel="stylesheet" type="text/css" media="screen">
        
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
                        <h4>한국NFT공인인증원</h4>
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

		
		<div class="divide30 hidden-sm hidden-xs"></div>
        <div class="container">
            <div class="row" style="overflow: hidden;">
                <div class="col-sm-3" style="overflow-y: auto;">
					<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
                </div><!--sidebar col end-->

    
      <div class="col-sm-9">

				<!-- right start -->


		<div class="container">
		  <h2 class="ko f20">사업안내</h2>
			<div class="row">
				<div class="col-md-6 ko">
					1~2년 전만 해도 수많은 악성코드의 한 종류에 불과했던 랜섬웨어는 현재 막대한 피해를 동반하며 전세계를 휩쓰는 광풍이 되었다. 이와 관련해 안랩 시큐리티대응센터(AhnLab Security Emergency-response Center, 이하 ASEC)는 2017년 2분기 ASEC 리포트를 통해 2017년 상반기 랜섬웨어 동향을 발표할 예정이다. ASEC에 따르면 감염된 시스템의 파일을 암호화하는 랜섬웨어가 본격적으로 등장한 것은 2016년으로, 이후 공격자 관점의 랜섬웨어 수익 모델과 시장이 형성되기 시작했다. 2017년에 들어서면서 랜섬웨어의 기능은 더욱 고도화되었으며 시장확대, 고수익 추구 등의 경향이 두드러진다는 것이 ASEC의 설명이다.
					2016년 1분기에 발견된 랜섬웨어의 종류가 65종이었으나, 2017년 1분기에는 79종에 달했다.
				<div class="divide20"></div>
				</div><!-- ./col -->
				<div class="col-md-6 no-padding">

				  <!-- BAR CHART -->
				  <div class="box box-success">
					<div class="box-header with-border">
					  <div class="box-tools pull-right"></div>
					</div>
					<div class="box-body chart-responsive">
					  <div class="chart" id="bar-chart" style="height: 300px;"></div>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				  <div class="divide20"></div>

				</div><!-- //col -->
			</div> <!-- /.row -->
		</div><!-- ./container -->







		<!-- service -->
			<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="ko f20">통합구축 및 운영</h2>
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
												<li><img alt="" class="img-responsive" src="https://via.placeholder.com/1920x1275" width="100%" height="350"/></li>
												<li><img alt="" class="img-responsive" src="https://via.placeholder.com/1920x1275" width="100%" height="350"/></li>
												<li><img alt="" class="img-responsive" src="https://via.placeholder.com/1920x1275" width="100%" height="350"/></li>
											</div>
										</ul>
											<a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
											<a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
									</div>
								</div>
							</div>
						
							<div class="col-lg-6 ">
								<div class="company mar-left10">
									<h4 class="ko f20" style='padding-bottom:10px;'>통합DB구축 및 운영에 관한 제반사항</h4>

										<div class="row">
											<div class="col-xs-12">

												<div class="services-box margin30 wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
													<div class="services-box-icon-type-1">
														<i class="material-icons f60">dvr</i>
													</div><!--services icon-->
													<div class="services-box-info-type-1">
														<h4 class="ko">자료수집</h4>
														<p class="ko">
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
														<i class="material-icons f60">handyman</i>
													</div>
													<div class="services-box-info-type-1">
														<h4 class="ko">운영관리</h4>
														<p class="ko">
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
														<i class="material-icons f60">tune</i>
													</div><!--services icon-->
													<div class="services-box-info-type-1">
														<h4 class="ko">통합서비스제공</h4>
														<p class="ko">
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




		<div class="divide20"></div>
		<!-------------------------- 내용 세로 사이즈 조절 -------------------------->
		<style>
		.services-box p{height:50px;}
		</style>
		<!-------------------------- 내용 세로 사이즈 조절 -------------------------->
		<div class="container">
			<h2 class="ko f20">신청안내</h2>
			<div class="row">
				<div class="col-md-6 margin20">
					<div class="services-box wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="services-box-icon-default">
							<i class="material-icons">assignment</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">1.지원접수</h4>
							<p class="ko">
								예산에 맞는 편성을하여 기업들과 계획을 수립합니다.
							</p>
						</div>
					</div><!--services box-->
				</div><!--services col-->
				<div class="col-md-6 margin20">
					<div class="services-box wow animated fadeInUp" data-wow-delay="0.2s">
						<div class="services-box-icon-default">
							<i class="material-icons">book</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">2. 공급기업모집</h4>
							<p class="ko">
								예산에 맞는 공급기업을 모집하여 심사 후에 공급기업을 선정합니다.
							</p>
						</div>
					</div><!--services box-->
				</div><!--services col-->
				<div class="col-md-6 margin20">
					<div class="services-box wow animated fadeInUp" data-wow-delay="0.3s">
						<div class="services-box-icon-default">
							<i class="material-icons">business</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">3. 수요기업공모</h4>
							<p class="ko">
								수요기업에 맞는 기업을 추가로 선정하여 예산과 맞는 업체를 선별하고 규모를 판멸하여 공모를 합니다.
							</p>
						</div>
					</div><!--services box-->
				</div><!--services col-->
				<div class="col-md-6 margin20">
					<div class="services-box wow animated fadeInUp" data-wow-delay="0.3s">
						<div class="services-box-icon-default">
							<i class="material-icons">forward_to_inbox</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">4. 신청접수</h4>
							<p class="ko">
								신청접수를 통해서 중소기업 위주로 신청접수를 먼저 진행합니다.
							</p>
						</div>
					</div><!--services box-->
				</div><!--services col-->
				<div class="col-md-6 margin20">
					<div class="services-box wow animated fadeInUp" data-wow-delay="0.3s">
						<div class="services-box-icon-default">
							<i class="material-icons">nat</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">5. 수요기업 선정평가</h4>
							<p class="ko">
								중소기업 위주로 수요기업에 대한 선정평가를 진행합니다.
							</p>
						</div>
					</div><!--services box-->
				</div><!--services col-->
				<div class="col-md-6 margin20">
					<div class="services-box wow animated fadeInUp" data-wow-delay="0.3s">
						<div class="services-box-icon-default">
							<i class="material-icons">insights</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">6. 결과평가안내</h4>
							<p class="ko">
								중소기업과 대기업과의 결과평과를 별도로 구분하여 중소기업과 대기업간에 차이를 줄여 평가를 합니다.
							</p>
						</div>
					</div><!--services box-->
				</div><!--services col-->
			</div><!--services row-->
		</div><!-- ./container -->


		<div class="divide20"></div>
        <div class="container">
		<h2 class="ko f20">사업안내</h2>
            <div class="row special-feature">
                <div class="col-md-3 col-sm-6 margin20">
                    <div class="s-feature-box text-center">
                        <div class="mask-top">
                            <!-- Icon -->
                            <i class="fa fa-html5"></i>
                            <!-- Title -->
                            <h4 class="ko">기관소개</h4>
                        </div>
                    </div>

                </div><!--services col-->
                <div class="col-md-3 col-sm-6 margin20">
                    <div class="s-feature-box text-center">
                        <div class="mask-top">
                            <!-- Icon -->
                            <i class="fa fa-css3"></i>
                            <!-- Title -->
                            <h4 class="ko">공인시험기관</h4>
                        </div>
                    </div>
                </div><!--services col-->
                <div class="col-md-3 col-sm-6 margin20">
                    <div class="s-feature-box text-center">
                        <div class="mask-top">
                            <!-- Icon -->
                            <i class="fa fa-code"></i>
                            <!-- Title -->
                            <h4 class="ko">공인시험/교정</h4>
                        </div>
                     </div>
                </div><!--services col-->
                <div class="col-md-3 col-sm-6 margin20">
                    <div class="s-feature-box text-center">
                        <div class="mask-top">
                            <!-- Icon -->
                            <i class="fa fa-cogs"></i>
                            <!-- Title -->
                            <h4 class="ko">관련정보 및 양식</h4>
                        </div>

                    </div>
                </div><!--services col-->
            </div><!-- //row -->
		</div><!-- //container -->
     
        </div><!--left sidebar container-->

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
    </body>
</html>
