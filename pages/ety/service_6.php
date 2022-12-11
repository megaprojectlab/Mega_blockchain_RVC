<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

	<!-------------------------- 상단배경 수정 -------------------------->
	<?php

	/* 배경이미지 수정 */
	//$background_images = G5_URL.'/pages/img/1.jpg';
	$background_images = 'https://via.placeholder.com/1920x300';


	?>
	<style>
	/* mobile */
	@media (min-width: 1px) and (max-width: 1089px) {
			.about-bg{background-image:url('<?php echo $background_images?>');width:100%;-webkit-background-size:100% auto;-moz-background-size:100% auto;-o-background-size:100% auto;background-position:center; background-size: cover; background-repeat:no-repeat;color:#fff;height:100%;padding-top: 70px;}.ml-auto,.mx-auto{padding-top:10px;padding-bottom:10px}.lead{font-size:12px;font-weight:300}.display-4{ font-size:1.5rem;font-weight:300;}.btn,a.btn{line-height:20px!important;height:20px!important;padding:0 5px;text-align:center;font-weight:700;-webkit-transition:background-color .3s ease-out;-moz-transition:background-color .3s ease-out;-o-transition:background-color .3s ease-out;transition:background-color .3s ease-out}.btn-outline-secondary{font-size:11px;padding:0 5px}

			.para-text h2 {
				line-height: 1.5;
				font-size: 16px;
			}
	
	}
	/* desktop */
	@media (min-width: 1090px) {
		.about-bg{background-image:url('<?php echo $background_images?>');background-position:center center;background-repeat:no-repeat;color:#fff;height:300px}.lead{font-size:1.25rem;font-weight:300}.display-4{font-size:2.5rem;font-weight:300;line-height:1.2}
	}
	.carousel-item {
		height: 100%;
		min-height: 300px;
		background: no-repeat center center scroll;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	/* 구글아이콘 */
	.material-icons {
	  font-family: 'Material Icons';
	  font-weight: normal;
	  font-style: normal;
	  font-size: 60px;  /* Preferred icon size */
	  display: inline-block;
	  line-height: 1;
	  text-transform: none;
	  letter-spacing: normal;
	  word-wrap: normal;
	  white-space: nowrap;
	  direction: ltr;
	  padding-right: 15px;

	  /* Support for all WebKit browsers. */
	  -webkit-font-smoothing: antialiased;
	  /* Support for Safari and Chrome. */
	  text-rendering: optimizeLegibility;

	  /* Support for Firefox. */
	  -moz-osx-font-smoothing: grayscale;

	  /* Support for IE. */
	  font-feature-settings: 'liga';
	}
	.material-icons-outlined {
	  font-size: 60px;  /* Preferred icon size */
	   padding-right: 15px;
	}
	html[dir="rtl"] .icon {
	  -moz-transform: scaleX(-1);
	  -o-transform: scaleX(-1);
	  -webkit-transform: scaleX(-1);
	  transform: scaleX(-1);
	  filter: FlipH;
	  -ms-filter: "FlipH";
	}
	.parallax {
		position: relative;
		min-height: 350px;
		background: #3e3b3b52;
	}
	.rounded-circle{max-width: 100%;}
	</style>


	<div class="position-relative overflow-hidden p-md-5 text-center bg-dark bg-sub-1 ety-mt-main about-bg">
	  <div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-normal"><?php echo $title?></h1>
		<p class="lead font-weight-normal ko1">
			<?php echo $title_sub?>
		</p>
	  </div>
	  <div class="product-device shadow-sm d-none d-md-block"></div>
	  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
	</div>
	<!-------------------------- ./상단배경 수정 -------------------------->



	<div class="container margin-top-80">
		<div class="center-heading en1">
			<h2>SERVICE 6</h2>
			<span class="center-line"></span>
		</div>


		<div class="row">
			<div class="col-lg-3 col-sm-6 col-xs-6 col-6 text-center margin-bottom-20">
				<a href="#"><img src="https://via.placeholder.com/200x200" class="rounded-circle"></a><!-- 이미지 변경 -->
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 col-6 text-center margin-bottom-20">
				<a href="#"><img src="https://via.placeholder.com/200x200" class="rounded-circle"></a><!-- 이미지 변경 -->
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 col-6 text-center margin-bottom-20">
				<a href="#"><img src="https://via.placeholder.com/200x200" class="rounded-circle"></a><!-- 이미지 변경 -->
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 col-6 text-center margin-bottom-20">
				<a href="#"><img src="https://via.placeholder.com/200x200" class="rounded-circle"></a><!-- 이미지 변경 -->
			</div>
		</div>

	</div><!-- ./container -->



	<div class="parallax margin-top-80" data-parallax="scroll" data-image-src="https://via.placeholder.com/1920x1080"><!-- 이미지 변경 -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center p-center para-text">
					<h2 class='text-light ks5'>반응형 커뮤니티 , 반응형 와이드 에티테마 무료 다운로드 바로가기</h2>
					<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/board/theme_update"'>바로가기</button>
				</div>
			</div>
		</div>
	</div><!-- /parallax -->


	<!-------------------------- 타이틀박스 -------------------------->
	<div class="container margin-top-40 ks4">
		<div class="row">
		  <div class="col-sm-4 margin-bottom-20">
			<div class="card">
			  <div class="card-body">
				<h5 class="card-title"><strong>타이틀</strong></h5>
				<p class="card-text">간단한 프로그램 부터 복잡한 프로그램 까지 개발합니다.</p>
				<a href="#" class="btn btn-primary">GO</a>
			  </div>
			</div>
		  </div>
		  <div class="col-sm-4 margin-bottom-20">
			<div class="card">
			  <div class="card-body">
				<h5 class="card-title"><strong>타이틀</strong></h5>
				<p class="card-text">간단한 프로그램 부터 복잡한 프로그램 까지 개발합니다.</p>
				<a href="#" class="btn btn-primary">GO</a>
			  </div>
			</div>
		  </div>

		  <div class="col-sm-4 margin-bottom-20">
			<div class="card">
			  <div class="card-body">
				<h5 class="card-title"><strong>타이틀</strong></h5>
				<p class="card-text">간단한 프로그램 부터 복잡한 프로그램 까지 개발합니다.</p>
				<a href="#" class="btn btn-primary">GO</a>
			  </div>
			</div>
		  </div>

		</div>
	</div>


	<!-------------------------- 이미지 -------------------------->
	<div class="container margin-top-20">
		<div class="row">
			<div class="col-md-4 margin-bottom-20">
				<img class="card-img-top" src="https://via.placeholder.com/350x220">
			</div><!-- ./col -->
			<div class="col-md-4 margin-bottom-20">
				<img class="card-img-top" src="https://via.placeholder.com/350x220">
			</div><!-- ./col -->
			<div class="col-md-4 margin-bottom-20">
				<img class="card-img-top" src="https://via.placeholder.com/350x220">
			</div><!-- ./col -->
		</div>
	</div>

	<!-------------------------- 테이블 -------------------------->
	<div class="container margin-top-40">
		<div class="row">
			<div class="col-md-6 margin-bottom-20">
			  <table class="table table-bordered">
				<colgroup>
					<col width="20%">
					<col>
				</colgroup>
				<thead>
				  <tr>
					<th>담당자</th>
					<th>연락처</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>대표번호</td>
					<td>02-0000-0000</td>
				  </tr>
				  <tr>
					<td>AS 센터</td>
					<td>02-0000-0001</td>
				  </tr>
				  <tr>
					<td>오시는길</td>
					<td>경기도 여주시 아름다운아파트 101동</td>
				  </tr>
				  <tr>
					<td>홍보실</td>
					<td>031-000-0000 (내선1, 내선2)</td>
				  </tr>
				</tbody>
			  </table>
			</div><!-- ./col -->

			<div class="col-md-6 margin-bottom-20">
			  <table class="table table-bordered">
				<colgroup>
					<col width="20%">
					<col>
				</colgroup>
				<thead>
				  <tr>
					<th>담당자</th>
					<th>연락처</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>대표번호</td>
					<td>02-0000-0000</td>
				  </tr>
				  <tr>
					<td>AS 센터</td>
					<td>02-0000-0001</td>
				  </tr>
				  <tr>
					<td>오시는길</td>
					<td>경기도 여주시 아름다운아파트 101동</td>
				  </tr>
				  <tr>
					<td>홍보실</td>
					<td>031-000-0000 (내선1, 내선2)</td>
				  </tr>
				</tbody>
			  </table>
			</div><!-- ./col -->
		</div><!-- ./row -->
	</div><!-- ./container -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
