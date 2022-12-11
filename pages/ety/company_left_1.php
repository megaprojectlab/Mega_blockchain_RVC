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
        <title>SOFTZONE - 소프트존 반응형 홈페이지 템플릿 COMPNAY 7 템플릿</title>

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
							<h3 class="ko">COMPANY</h3>
							<div class="divide20"></div>
						</div>
					</div>
					<!--<h2 class="line">Item introduction</h2>-->

					<div class="row">
						<div class="col-md-12">
						<p class="ko">
						<span class="block-icon">G</span>
						밝은 곳이 있으면 어두운 곳도 있다는 만고의 진리처럼, IT 기술의 발전은 항상 새로운 보안 위협을 동반해왔다. 2017년에는 비교적 새로운 기술이라 할 수 있는 사물인터넷 기기와 관련된 위협이 전망된다. 더불어 기존의 보안 위협은 더욱 강력하고 교묘한 모습으로 사회 전반을 파고들 것으로 보인다.

						특히 올해도 세계 경제 전망이 좋지 않은 만큼, 사이버 공격자들은 즉각적으로 금전적 이득을 취할 수 있는 공격에 집중할 것으로 보인다. 2016년 전세계를 집어삼킨 랜섬웨어(Ransomware)에서 이미 그 조짐이 드러났다. 일반 기업과 마찬가지로 악의적인 공격자들 역시 투자 대비 수익률이 높은 방법을 모색할 것이 분명하다.

						카스퍼스키랩은 윈도용 무료 애플리케이션인 '카스퍼스키 SW 업데이터'를 출시, 이러한 문제 해결을 지원하고 나섰다. 이 솔루션은 기기 내 자주 사용되는 프로그램 중 업데이트가 필요한 프로그램을 검색한 뒤, 취약점을 기준으로 업데이트 우선순위를 매겨 사용자에게 보고한다. 					
						</p>
						</div>
					</div>

					<div class="divide50"></div>


					<div class="row">
						<div class="col-md-12">
							<h3>INTRODUCE</h3>
							<div class="divide20"></div>
						</div>
					</div>

					<div class="row wow animated bounceInUp animated" data-wow-delay="0.2s">
						<div class="col-md-12">
							<div class="table-responsive">

								<table cellspacing="0" border="1" class="tbl_type table ko" style="width:847px;">
								<caption>SOFTZONE TABLE</caption>
								<colgroup>
									<col width="140">
									<col>
									<col width="120">
									<col>
								</colgroup>
								<tbody>
								<tr>
								<th scope="row">회사명</th>
								<td><STRONG>소프트존</STRONG></td>
								<th scope="row">대표이사</th>
								<td>홍길동</td>
								</tr>
								<tr>
								<th scope="row">설립연도</th>
								<td colspan="3">2021-01-01</td>
								</tr>
								<tr>
								<th scope="row">업종</th>
								<td style="width:293px;white-space: normal;">웹어플리케이션 개발 & 솔루션 개발 & 템플릿 개발</td>
								<th scope="row">지역</th>
								<td>경기도</td>
								</tr>
								<tr>
								<th scope="row">주요생산제품</th>
								<td colspan="3">템플릿, 웹솔루션, 홈페이지솔루션, 기타솔루션</td>
								</tr>

								<tr>
								<th scope="row">주소</th>
								<td colspan="3">경기도 여주시 햇살좋은아파트</td>
								</tr>

								<tr>
								<th scope="row">홈페이지</th>
								<td colspan="3">#</td>
								</tr>


								<tr>
								<th scope="row">전화</th>
								<td>031-722-1234 / 010-0000-0000</td>
								<th scope="row">팩스</th>
								<td>031-722-1235</td>
								</tr>
								</tbody>
								</table>

							</div>
						</div>
					</div><!-- /.row -->
					<div class="row mb80 wow animated bounceInUp animated" data-wow-delay="0.2s"">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="img-box mb20">
								<img src="https://via.placeholder.com/262x157" class="img-responsive">
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="img-box mb20">
								<img src="https://via.placeholder.com/262x157" alt="" class="img-responsive">
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="img-box mb20">
								<img src="https://via.placeholder.com/262x157" alt="" class="img-responsive">
							</div>
						</div>
					</div><!-- //row -->

					<div class="row">
						<div class="col-md-12">
							<div class="services-box margin30">
								<div class="services-box-icon">
									<i class="fa fa-tablet f50" style="color:#111"></i>
								</div><!--services icon-->
								<div class="services-box-info">
									<h4 class="ko">모든기기최적화</h4>
									<p class="ko">
										모든기기에 최적화 되어 데스크탑, 태블릿, 모바일에서 편리하게 사용이 가능합니다.
									</p>
								</div>
							</div><!--service box-->
							<div class="services-box margin30">
								<div class="services-box-icon">
									<i class="fa fa-info f50" style="color:#111"></i>
								</div><!--services icon-->
								<div class="services-box-info">
									<h4 class="ko">사용자를 고려한 UI/UX</h4>
									<p class="ko">
										사용자 편의를 생각하여 UI/UX 를 고려하여 제작되었습니다.
									</p>
								</div>
							</div><!--service box-->

							<div class="services-box margin30">
								<div class="services-box-icon">
									<i class="fa fa-code f50" style="color:#111"></i>
								</div><!--services icon-->
								<div class="services-box-info">
									<h4 class="ko">20여개의 스킨으로 구성</h4>
									<p class="ko">
										20여가지가 넘는 스킨으로 구성되어 있으면 다수의 페이지를 지원합니다.
									</p>
								</div>
							</div><!--service box-->
						</div><!-- /.col -->
					</div><!-- /.row -->




                </div>
            </div>
        </div><!--left sidebar container-->



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

    </body>
</html>
