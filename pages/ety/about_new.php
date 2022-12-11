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
        <title>인사말 - NEW</title>

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
        <!-- slide -->
		<link href="<?php echo G5_THEME_URL ?>/slide/responsive-slider.css" rel="stylesheet">
        <!--cube css-->
        <link href="<?php echo G5_THEME_URL ?>/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/css/bootstrap-select.css">
		<link href="<?php echo G5_THEME_URL ?>/css/magnific-popup.css" rel="stylesheet" type="text/css">
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
                        <h4>About</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">Home</a></li>
                            <li>About</li>
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
					<div class="about">
						<div class="row">
							<div class="row-slider">
								<div class="col-lg-12 mar-bot30">
									<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
										<div class="slides" data-group="slides">
											<ul>
						
												<div class="slide-body" data-group="slide">
													<li><img alt="" class="img-responsive" src="https://via.placeholder.com/845x300" width="100%" height="350"/></li>
													<li><img alt="" class="img-responsive" src="https://via.placeholder.com/845x300" width="100%" height="350"/></li>
													<li><img alt="" class="img-responsive" src="https://via.placeholder.com/845x300" width="100%" height="350"/></li>
									
												</div>
											</ul>
												<a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
												<a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
										
										</div>
									</div>
								</div>
						
							</div>
						</div>
					</div><!-- //about -->
					<div class="divide50"></div>
					<div class="row">
						<div class="col-md-12 margin20">
								<p class="ko">
								<span class="block-icon-03"><img src='https://via.placeholder.com/170x170'></span>
								1~2년 전만 해도 수많은 악성코드의 한 종류에 불과했던 랜섬웨어는 현재 막대한 피해를 동반하며 전세계를 휩쓰는 광풍이 되었다. 이와 관련해 안랩 시큐리티대응센터(AhnLab Security Emergency-response Center, 이하 ASEC)는 2020년 2분기 ASEC 리포트를 통해 2020년 상반기 랜섬웨어 동향을 발표할 예정이다. ASEC에 따르면 감염된 시스템의 파일을 암호화하는 랜섬웨어가 본격적으로 등장한 것은 2020년으로, 이후 공격자 관점의 랜섬웨어 수익 모델과 시장이 형성되기 시작했다. 2020년에 들어서면서 랜섬웨어의 기능은 더욱 고도화되었으며 시장확대, 고수익 추구 등의 경향이 두드러진다는 것이 ASEC의 설명이다. 
								</p>
								<p class="ko">
								2020년 1분기에 발견된 랜섬웨어의 종류가 65종이었으나, 2020년 1분기에는 79종에 달했다. 전년도 동기 대비 랜섬웨어의 종류가 늘어난 원인은 랜섬웨어 제작 서비스(Ransomware as a Service, RaaS)와 오픈소스를 이용한 랜섬웨어 제작의 활성화로 판단된다. 랜섬웨어는 이미 등장기와 성장기를 넘어서 관련 시장 형성을 통한 성숙기로 접어든 것으로 볼 수 있다. 
								</p>
								<img src="<?php echo G5_THEME_URL ?>/img/sign.png"> CEO, LJO
						</div>
						<div class="col-md-12">
							
						</div>
					</div><!--about intro-->
					<div class="row" style="margin-top:50px;">
						<div class="col-md-12">
							<h3 class="ko f20">담당자안내</h3>
							<div class="divide20"></div>
						</div>
					</div>


					<table class="tablecss ko">
						<thead>
							<tr>
								<th width="7%">번호</th>
								<th>개발사</th>
								<th>개발내용</th>
								<th>진행</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>소프트존</td>
								<td>세계프로패셔널태권도연맹</td>
								<td>개발완료</td>
							</tr>
							<tr>
								<td>2</td>
								<td>소프트존</td>
								<td>빅데이터를 이용한 문제은행개발</td>
								<td>개발완료</td>
							</tr>
							<tr>
								<td>3</td>
								<td>소프트존</td>
								<td>데이팅앱 및 미팅앱 개발완료</td>
								<td>개발완료</td>
							</tr>
							<tr>
								<td>4</td>
								<td>소프트존</td>
								<td>아이템거래사이트 개발완료</td>
								<td>개발완료</td>
							</tr>
							<tr><td colspan="4">... 외 105개</td></tr>
						</tbody>
					</table>



                </div><!-- //col -->
            </div><!-- //row -->
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
		<script src="<?php echo G5_THEME_URL ?>/js/jquery.backstretch.js"></script>
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
        <!--popup js-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo G5_THEME_URL ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo G5_THEME_URL ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo G5_THEME_URL ?>/js/revolution-custom.js"></script>

		<script src="<?php echo G5_THEME_URL ?>/slide/responsive-slider.js"></script>    		
		<script src="<?php echo G5_THEME_URL ?>/js/raphael-min.js"></script>
		<script src="<?php echo G5_THEME_URL ?>/morris/morris.min.js"></script>   
		<script src="<?php echo G5_THEME_URL ?>/js/bootstrap-select.js"></script>
        <script src="<?php echo G5_THEME_URL ?>/js/custom.js" type="text/javascript"></script>

	</body>
</html>
