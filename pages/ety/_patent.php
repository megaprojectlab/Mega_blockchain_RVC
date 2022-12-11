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
        <title>SOFTZONE - 소프트존 반응형 홈페이지 템플릿 특허</title>

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
                        <h4>Patent application</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">Home</a></li>
                            <li>Patent Application</li>
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
							<div class="table-responsive">

								<table cellspacing="0" border="1" class="tbl_type table table_title_1 ko">
								<caption>SOFTZONE TABLE</caption>
								<colgroup>
								<col width="140"><col><col width="120"><col>
								</colgroup>
								<tbody>
								<tr>
								<th scope="row">특허</th>
								<td colspan="3">제 10-1234657 호</td>
								</tr>
								<th scope="row">대표이사</th>
								<td colspan="3">홍길동</td>
								</tr>
								<tr>
								<th scope="row">출원번호</th>
								<td colspan="3">제 10-1234657 호</td>
								</tr>
								<tr>
								<th scope="row">출원일</th>
								<td colspan="3">2017년 07월 10일</td>
								</tr>

								<tr>
								<th scope="row">등록일</th>
								<td colspan="3">2017년 07월 01일</td>
								</tr>
								<tr>
								<th scope="row">발명의 명칭</th>
								<td colspan="3">3D 기반한 템플릿 기술</td>
								</tr>
								<tr>
								<th scope="row">특허권자</th>
								<td colspan="3">
								소프트존<BR>
								경기도 여주시 웃음을주는템플릿 아파트 101동
								</td>
								</tr>
								</tbody>
								</table>

							</div><!-- //table responsive -->
						</div><!-- //cos -->
					</div><!-- //row -->



					<div class="divide30"></div>
                    <div class="row">
                        <div class="col-md-12">
						<h4 class="line ko">삼성특허기술</h4>
                        </div>
                    </div>
                    <div class="divide50"></div>
                    <div class="row">
                        <div class="col-md-12 text-center">
						<!-- 특허 이미지 -->
						<img src="<?php echo G5_THEME_URL ?>/img/samsung_patent_600.jpg" alt="">
						<!-- //특허 이미지 -->
                        </div>
                    </div>

                    <div class="divide50"></div>

                    <div class="row">
                        <div class="col-md-12">
						<h4 class="line ko">LG특허기술- 접히는스마트폰</h4>
                        </div>
                    </div>

                    <div class="divide50"></div>

                    <div class="row">
                        <div class="col-md-12 text-center">
						<!-- 특허 이미지 -->
						<img src="<?php echo G5_THEME_URL ?>/img/t1.jpg" alt="">
						<img src="<?php echo G5_THEME_URL ?>/img/t2.jpg" alt="">
						<img src="<?php echo G5_THEME_URL ?>/img/t3.jpg" alt="">
						<img src="<?php echo G5_THEME_URL ?>/img/t4.jpg" alt="">
						<!-- //특허 이미지 -->
                        </div>
                    </div>
                    <div class="divide30"></div>


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
        <!--customizable plugin edit according to your needs-->
        <script src="<?php echo G5_THEME_URL ?>/js/custom.js" type="text/javascript"></script>
		<script type="text/javascript">
		 var urlmenu = document.getElementById( 'select-link' );
		 urlmenu.onchange = function() {
			  window.open( this.options[ this.selectedIndex ].value );
		 };
		</script>
		<script>
			$('.breadcrumb-wrap').backstretch([
			  "<?php echo G5_THEME_URL ?>/img/sub-1.png",
			  "<?php echo G5_THEME_URL ?>/img/sub-2.png",
			  "<?php echo G5_THEME_URL ?>/img/sub-3.png",
			  "<?php echo G5_THEME_URL ?>/img/sub-5.png",
			  "<?php echo G5_THEME_URL ?>/img/sub-6.png"
			], {
				fade: 750,
				duration: 4000
			});
		</script>
    </body>
</html>
