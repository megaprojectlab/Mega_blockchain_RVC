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
        <title>SOFTZONE - 소프트존 반응형 홈페이지 템플릿 CHART 템플릿</title>

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
                        <h4>About Us</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">Home</a></li>
                            <li>About Us</li>
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

		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> 인사말</a></li>
							<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="true"> 연혁</a></li>
							<li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">비전</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">조직도</a></li>
                        </ul>
						<div class="divide80"></div>
                        <div class="tab-content">
							<!-- tab 1 -->
							<div id="tab-1" class="tab-pane active">
								<div class="row about01">
									<div class="col-md-3 text-center">
										<img src="<?php echo G5_THEME_URL ?>/img/aboutme.png">
									</div>

									<div class="col-md-9">

									<div class="row">
										<div class="col-lg-12 col-ms-12 col-sm-12 col-xs-12 centerBox">
											<div class="push-left leftBox">
												<h3>Greeting</h3>
											</div>
											<div class="push-right rightBox">
												<a href="#" target="_blank" class="social-icon-sm si-gray si-gray-round si-facebook">
													<i class="fa fa-facebook"></i>
													<i class="fa fa-facebook"></i>
												</a>
												<a href="#" target="_blank" class="social-icon-sm si-gray si-gray-round si-instagram">
													<i class="fa fa-instagram"></i>
													<i class="fa fa-instagram"></i>
												</a>
												<a href="#" class="social-icon-sm si-gray si-gray-round si-twitter">
													<i class="fa fa-twitter"></i>
													<i class="fa fa-twitter"></i>
												</a>
												<a href="#" class="social-icon-sm si-gray si-g-plus si-gray-round">
													<i class="fa fa-google-plus"></i>
													<i class="fa fa-google-plus"></i>
												</a>
												<a href="#" class="social-icon-sm si-gray si-g-plus si-gray-round">
													<i class="fa fa-youtube"></i>
													<i class="fa fa-youtube"></i>
												</a>		
											</div>
										</div>
									</div>

										<p class="ko" style="padding-top:60px;">
										
										<span class="block-icon">G</span>
										밝은 곳이 있으면 어두운 곳도 있다는 만고의 진리처럼, IT 기술의 발전은 항상 새로운 보안 위협을 동반해왔다. 2017년에는 비교적 새로운 기술이라 할 수 있는 사물인터넷 기기와 관련된 위협이 전망된다. 더불어 기존의 보안 위협은 더욱 강력하고 교묘한 모습으로 사회 전반을 파고들 것으로 보인다. 
										</p>
										<p class="ko">
										특히 올해도 세계 경제 전망이 좋지 않은 만큼, 사이버 공격자들은 즉각적으로 금전적 이득을 취할 수 있는 공격에 집중할 것으로 보인다. 2016년 전세계를 집어삼킨 랜섬웨어(Ransomware)에서 이미 그 조짐이 드러났다. 일반 기업과 마찬가지로 악의적인 공격자들 역시 투자 대비 수익률이 높은 방법을 모색할 것이 분명하다.
										</p>
										<p class="ko">
										카스퍼스키랩은 윈도용 무료 애플리케이션인 '카스퍼스키 SW 업데이터'를 출시, 이러한 문제 해결을 지원하고 나섰다. 이 솔루션은 기기 내 자주 사용되는 프로그램 중 업데이트가 필요한 프로그램을 검색한 뒤, 취약점을 기준으로 업데이트 우선순위를 매겨 사용자에게 보고한다.
										<br>
										감사합니다. 대표 올림
										</p>
										<img src="<?php echo G5_THEME_URL ?>/img/sign.png"> CEO, LJO

									</div><!-- col -->
								</div><!-- row -->

							</div><!-- //tab 1 -->

                            <div id="tab-2" class="tab-pane">


								<div class="row">
									<div class="col-lg-12">
										<h4><i>History</i></h4>
									</div>
								</div><!-- row -->



								<div class="row">
									<div class="col-md-12">
										<div class="">

										<table cellspacing="0" border="1" summary="SOFTZONE TABLE" class="tbl_type_history table ">
										<caption>SOFTZONE TABLE</caption>
										<colgroup>
										<col width="140"><col><col width="120"><col>
										</colgroup>
										<tbody>
										<tr>

										<tr>
										<th scope="row"><h3 class="font_1"><i>2004</i></h3></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">06</font></i> 소셜 네트워크 서비스, 현재 베타 서비스 상태<br />
											<i><span class="font_3">06</font></i> 오픈소스 플랫폼 기반으로 마이스페이스 , 링크드인 , 프렌드 연동<br />
											<i><span class="font_3">12</font></i> 게임 포털 정식 서비스 시작
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2005</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">05</font></i> 웹사이트가 소셜 대시보드를 사이트에 추가할 수 있도록 한 위젯 기반 소셜 서비스<br />
											<i><span class="font_3">06</font></i> 세컨드 라이프를 겨냥한 가상 3D 소셜 네트워크
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2006</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">01</font></i> 구글 지도에 소셜 요소를 추가한 포스퀘어 대응 위치기반서비스<br />
											<i><span class="font_3">03</font></i> 실시간 협업을 중심으로 구글의 소셜 서비스를 통합<br />
											<i><span class="font_3">07</font></i> 소셜 질의응답 서비스, 현재 구글 연구소로 이동
										</p>					
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2007</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">06</font></i> 소셜 네트워크 서비스, 현재 베타 서비스 상태<br />
											<i><span class="font_3">06</font></i> 오픈소스 플랫폼 기반으로 마이스페이스 , 링크드인 , 프렌드 연동<br />
											<i><span class="font_3">12</font></i> 게임 포털 정식 서비스 시작
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2008</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">05</font></i> 웹사이트가 소셜 대시보드를 사이트에 추가할 수 있도록 한 위젯 기반 소셜 서비스<br />
											<i><span class="font_3">06</font></i> 세컨드 라이프를 겨냥한 가상 3D 소셜 네트워크
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2009</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">01</font></i> 구글 지도에 소셜 요소를 추가한 포스퀘어 대응 위치기반서비스<br />
											<i><span class="font_3">03</font></i> 실시간 협업을 중심으로 구글의 소셜 서비스를 통합<br />
											<i><span class="font_3">07</font></i> 소셜 질의응답 서비스, 현재 구글 연구소로 이동
										</p>					
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2010</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">06</font></i> 소셜 네트워크 서비스, 현재 베타 서비스 상태<br />
											<i><span class="font_3">06</font></i> 오픈소스 플랫폼 기반으로 마이스페이스 , 링크드인 , 프렌드 연동<br />
											<i><span class="font_3">12</font></i> 게임 포털 정식 서비스 시작
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2011</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">05</font></i> 웹사이트가 소셜 대시보드를 사이트에 추가할 수 있도록 한 위젯 기반 소셜 서비스<br />
											<i><span class="font_3">06</font></i> 세컨드 라이프를 겨냥한 가상 3D 소셜 네트워크
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2012</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">01</font></i> 구글 지도에 소셜 요소를 추가한 포스퀘어 대응 위치기반서비스<br />
											<i><span class="font_3">03</font></i> 실시간 협업을 중심으로 구글의 소셜 서비스를 통합<br />
											<i><span class="font_3">07</font></i> 소셜 질의응답 서비스, 현재 구글 연구소로 이동
										</p>					
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2013</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">06</font></i> 소셜 네트워크 서비스, 현재 베타 서비스 상태<br />
											<i><span class="font_3">06</font></i> 오픈소스 플랫폼 기반으로 마이스페이스 , 링크드인 , 프렌드 연동<br />
											<i><span class="font_3">12</font></i> 게임 포털 정식 서비스 시작
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2014</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">05</font></i> 웹사이트가 소셜 대시보드를 사이트에 추가할 수 있도록 한 위젯 기반 소셜 서비스<br />
											<i><span class="font_3">06</font></i> 세컨드 라이프를 겨냥한 가상 3D 소셜 네트워크
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2015</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">01</font></i> 구글 지도에 소셜 요소를 추가한 포스퀘어 대응 위치기반서비스<br />
											<i><span class="font_3">03</font></i> 실시간 협업을 중심으로 구글의 소셜 서비스를 통합<br />
											<i><span class="font_3">07</font></i> 소셜 질의응답 서비스, 현재 구글 연구소로 이동
										</p>					
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2016</i></h4></th>
										<td colspan="3">
										<p class="font_2">
											<i><span class="font_3">01</font></i> 소셜 네트워크 서비스, 베타 서비스 시작
										</p>						
										</td>
										</tr>

										</tbody>
										</table>

										</div><!-- //table -->
									</div><!-- //col -->
								</div><!-- //row  -->


                            </div><!-- //tab2 -->

                            <div id="tab-3" class="tab-pane">


								<div class="row">
									<div class="col-md-6 ko">
										밝은 곳이 있으면 어두운 곳도 있다는 만고의 진리처럼, IT 기술의 발전은 항상 새로운 보안 위협을 동반해왔다. 2017년에는 비교적 새로운 기술이라 할 수 있는 사물인터넷 기기와 관련된 위협이 전망된다. 더불어 기존의 보안 위협은 더욱 강력하고 교묘한 모습으로 사회 전반을 파고들 것으로 보인다.

										특히 올해도 세계 경제 전망이 좋지 않은 만큼, 사이버 공격자들은 즉각적으로 금전적 이득을 취할 수 있는 공격에 집중할 것으로 보인다. 2016년 전세계를 집어삼킨 랜섬웨어(Ransomware)에서 이미 그 조짐이 드러났다. 일반 기업과 마찬가지로 악의적인 공격자들 역시 투자 대비 수익률이 높은 방법을 모색할 것이 분명하다.

										카스퍼스키랩은 윈도용 무료 애플리케이션인 '카스퍼스키 SW 업데이터'를 출시, 이러한 문제 해결을 지원하고 나섰다. 이 솔루션은 기기 내 자주 사용되는 프로그램 중 업데이트가 필요한 프로그램을 검색한 뒤, 취약점을 기준으로 업데이트 우선순위를 매겨 사용자에게 보고한다. 
									</div><!-- //col -->
									<div class="col-md-6">

									
										<div class="v_graph">
											<ul>
											<li><span class="g_term">2014</span><span class="g_bar" style="height:0%"><span>0%</span></span></li>
											<li><span class="g_term">2015</span><span class="g_bar" style="height:10%"><span>20%</span></span></li>
											<li><span class="g_term">2016</span><span class="g_bar" style="height:20%"><span>30%</span></span></li>
											<li><span class="g_term">2017</span><span class="g_bar" style="height:30%"><span>40%</span></span></li>
											<li><span class="g_term">2018</span><span class="g_bar" style="height:40%"><span>50%</span></span></li>
											<li><span class="g_term">2019</span><span class="g_bar" style="height:50%"><span>60%</span></span></li>
											<li><span class="g_term">2020</span><span class="g_bar" style="height:80%"><span>100%</span></span></li>
											</ul>
										</div>

									</div><!-- //col -->
									
								</div><!-- row -->	

                            </div><!-- //tab3 -->

                            <div id="tab-4" class="tab-pane">
								<table width="100%" cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td align="center"><img src="<?php echo G5_THEME_URL ?>/img/chart.png" class="img-responsive"></td>
									</tr>
								</table>

                            </div><!-- //tab4 -->

                        </div>
                    </div>
				</div><!-- //col -->
			</div><!-- //row -->
		</div><!-- //container -->


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
		<script src="<?php echo G5_THEME_URL ?>/js/jquery.backstretch.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="<?php echo G5_THEME_URL ?>/js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="<?php echo G5_THEME_URL ?>/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
		<script src="<?php echo G5_THEME_URL ?>/js/bootstrap-select.js"></script>
		<script src="<?php echo G5_THEME_URL ?>/js/custom.js" type="text/javascript"></script>

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
