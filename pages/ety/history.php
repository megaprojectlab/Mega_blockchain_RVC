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
        <title>연혁</title>

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
                        <h4>History</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">Home</a></li>
                            <li>History</li>
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

					<div class="row">
						<div class="col-md-12">
							<h3>HISTORY</h3>
							<div class="divide20"></div>
						</div>
					</div>


						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">

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
										<p class="font_2 ko">
											<i><span class="font_3">06</font></i> 소셜 네트워크 서비스, 현재 베타 서비스 상태<br />
											<i><span class="font_3">06</font></i> 오픈소스 플랫폼 기반으로 마이스페이스 , 링크드인 , 프렌드 연동<br />
											<i><span class="font_3">12</font></i> 게임 포털 정식 서비스 시작
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2005</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">05</font></i> 웹사이트가 소셜 대시보드를 사이트에 추가할 수 있도록 한 위젯 기반 소셜 서비스<br />
											<i><span class="font_3">06</font></i> 세컨드 라이프를 겨냥한 가상 3D 소셜 네트워크
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2006</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">01</font></i> 구글 지도에 소셜 요소를 추가한 포스퀘어 대응 위치기반서비스<br />
											<i><span class="font_3">03</font></i> 실시간 협업을 중심으로 구글의 소셜 서비스를 통합<br />
											<i><span class="font_3">07</font></i> 소셜 질의응답 서비스, 현재 구글 연구소로 이동
										</p>					
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2007</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">06</font></i> 소셜 네트워크 서비스, 현재 베타 서비스 상태<br />
											<i><span class="font_3">06</font></i> 오픈소스 플랫폼 기반으로 마이스페이스 , 링크드인 , 프렌드 연동<br />
											<i><span class="font_3">12</font></i> 게임 포털 정식 서비스 시작
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2008</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">05</font></i> 웹사이트가 소셜 대시보드를 사이트에 추가할 수 있도록 한 위젯 기반 소셜 서비스<br />
											<i><span class="font_3">06</font></i> 세컨드 라이프를 겨냥한 가상 3D 소셜 네트워크
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2009</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">01</font></i> 구글 지도에 소셜 요소를 추가한 포스퀘어 대응 위치기반서비스<br />
											<i><span class="font_3">03</font></i> 실시간 협업을 중심으로 구글의 소셜 서비스를 통합<br />
											<i><span class="font_3">07</font></i> 소셜 질의응답 서비스, 현재 구글 연구소로 이동
										</p>					
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2010</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">06</font></i> 소셜 네트워크 서비스, 현재 베타 서비스 상태<br />
											<i><span class="font_3">06</font></i> 오픈소스 플랫폼 기반으로 마이스페이스 , 링크드인 , 프렌드 연동<br />
											<i><span class="font_3">12</font></i> 게임 포털 정식 서비스 시작
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2011</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">05</font></i> 웹사이트가 소셜 대시보드를 사이트에 추가할 수 있도록 한 위젯 기반 소셜 서비스<br />
											<i><span class="font_3">06</font></i> 세컨드 라이프를 겨냥한 가상 3D 소셜 네트워크
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2012</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">01</font></i> 구글 지도에 소셜 요소를 추가한 포스퀘어 대응 위치기반서비스<br />
											<i><span class="font_3">03</font></i> 실시간 협업을 중심으로 구글의 소셜 서비스를 통합<br />
											<i><span class="font_3">07</font></i> 소셜 질의응답 서비스, 현재 구글 연구소로 이동
										</p>					
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2013</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">06</font></i> 소셜 네트워크 서비스, 현재 베타 서비스 상태<br />
											<i><span class="font_3">06</font></i> 오픈소스 플랫폼 기반으로 마이스페이스 , 링크드인 , 프렌드 연동<br />
											<i><span class="font_3">12</font></i> 게임 포털 정식 서비스 시작
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2014</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">05</font></i> 웹사이트가 소셜 대시보드를 사이트에 추가할 수 있도록 한 위젯 기반 소셜 서비스<br />
											<i><span class="font_3">06</font></i> 세컨드 라이프를 겨냥한 가상 3D 소셜 네트워크
										</p>
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2015</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">01</font></i> 구글 지도에 소셜 요소를 추가한 포스퀘어 대응 위치기반서비스<br />
											<i><span class="font_3">03</font></i> 실시간 협업을 중심으로 구글의 소셜 서비스를 통합<br />
											<i><span class="font_3">07</font></i> 소셜 질의응답 서비스, 현재 구글 연구소로 이동
										</p>					
										</td>
										</tr>

										<tr>
										<th scope="row"><h4 class="font_1"><i>2016</i></h4></th>
										<td colspan="3">
										<p class="font_2 ko">
											<i><span class="font_3">01</font></i> 소셜 네트워크 서비스, 베타 서비스 시작
										</p>						
										</td>
										</tr>

										</tbody>
										</table>

								</div><!-- //table -->
							</div><!-- //col -->
						</div><!-- //row  -->



                </div>
            </div>
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
		<script src="<?php echo G5_THEME_URL ?>/js/bootstrap-select.js"></script>
		<script src="<?php echo G5_THEME_URL ?>/js/custom.js" type="text/javascript"></script>


    </body>
</html>
