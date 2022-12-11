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

		.about-bg{background-image:url('<?php echo $background_images?>');width:100%;-webkit-background-size:100% auto;-moz-background-size:100% auto;-o-background-size:100% auto;background-position:center; background-size: cover; background-repeat:no-repeat;color:#fff;height:100%;padding-top: 70px;}.ml-auto,.mx-auto{padding-top:10px;padding-bottom:10px}.lead{font-size:12px;font-weight:300}.display-4{ font-size:1.5rem;font-weight:300;}.btn,a.btn{line-height:20px!important;height:20px!important;padding:0 5px;text-align:center;font-weight:700;border:0;-webkit-transition:background-color .3s ease-out;-moz-transition:background-color .3s ease-out;-o-transition:background-color .3s ease-out;transition:background-color .3s ease-out}.btn-outline-secondary{font-size:11px;padding:0 5px}

		/* 슬라이드 mobile */
		.carousel-item {
			height: 100%;
			min-height: 176px;
			background: no-repeat center center scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		.carousel-item img{max-width:100%;}
		.carousel-caption {
			position: absolute;
			right: 0%;
			bottom: 20px;
			left: 0%;
			z-index: 10;
			padding-top: 20px;
			padding-bottom: 20px;
			color: #fff;
			text-align: center;
		}
	}
	/* desktop */
	@media (min-width: 1090px) {

		.about-bg{background-image:url('<?php echo $background_images?>');background-position:center center;background-repeat:no-repeat;color:#fff;height:300px}.lead{font-size:1.25rem;font-weight:300}.display-4{font-size:2.5rem;font-weight:300;line-height:1.2}


		/* 슬라이드 pc */
		.carousel-item {
			height: 100%;
			min-height: 288px;
			background: no-repeat center center scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		

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
			<h2>SERVICE 5</h2>
			<span class="center-line"></span>
		</div>

		<div class="row ks4">
			<div class="col-md-6 margin-bottom-20">

				<!-- 
				
				탭 메뉴를 추가하시거나 삭제할 수 있습니다. href="#아이디값" 을 추가해주시고 바로 아래 tab panes 쪽에 추가해주시면 됩니다.
				
				-->
				<ul class="nav nav-tabs">
				  <li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#home">미디어 1</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#menu1">미디어 2</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#menu2">TABLE</a>
				  </li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
				  
				  <!-- #home 내용추가 -->
				  <div class="tab-pane container active pr-0 pl-0 margin-top-10" id="home">
					<div class="media">
					  <img class="mr-3" src="https://via.placeholder.com/100X100" alt="Generic placeholder image">
					  <div class="media-body">
						인터넷 상의 웹 문서들을 총칭한 말로 이 문서 속에는 다양한 텍스트는 물론 그림, 소리, 동영상 파일도 내장할 수 있다. 다른 인터넷 상의 문서와 서로 연결할 수 있게 해주는 강조된(highlighted) 글자나 그림 등이 있다는 것이 특징이다. 이러한 부분들은 주로 밑줄로 구분할 수 있으며, 파란색의 바탕선이 그려져 있기도 하다.
					  </div>
					</div>
				  </div>
				  
				  <!-- #menu1 내용추가 -->
				  <div class="tab-pane container fade pr-0 pl-0 margin-top-10" id="menu1">
					<div class="media">
					  <div class="media-body">
						인터넷 상의 웹 문서들을 총칭한 말로 이 문서 속에는 다양한 텍스트는 물론 그림, 소리, 동영상 파일도 내장할 수 있다. 다른 인터넷 상의 문서와 서로 연결할 수 있게 해주는 강조된(highlighted) 글자나 그림 등이 있다는 것이 특징이다. 이러한 부분들은 주로 밑줄로 구분할 수 있으며, 파란색의 바탕선이 그려져 있기도 하다.
					  </div>
					  <img class="ml-3" src="https://via.placeholder.com/100X100" alt="Generic placeholder image">
					</div>
				  </div><!-- ./tab-pane -->

				  <!-- #menu2 내용추가 -->
				  <div class="tab-pane container fade pr-0 pl-0 margin-top-10" id="menu2">
						<table class="table">
						  <thead>
							<tr>
							  <th scope="col" style="width: 60px;">번호</th>
							  <th scope="col">이름</th>
							  <th scope="col">연락처</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>김OO</td>
							  <td>010-0000-0000</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>이OO</td>
							  <td>010-0000-0000</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td>박OO</td>
							  <td>010-0000-0000</td>
							</tr>
						  </tbody>
						</table>
				  </div><!-- ./tab-pane -->

				</div><!-- ./tab-content -->
			</div><!-- ./col -->

			<div class="col-md-6">
				<!-------------------------- carousel 슬라이드 -------------------------->
				<div id="demo" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				  </ul>
				  <!-- The slideshow -->
				  <div class="carousel-inner">

					<div class="carousel-item active">
					  <img src="https://via.placeholder.com/540x288"><!-- 이미지 변경 -->
					  <div class="carousel-caption d-md-block ks3">
						<h5>타이틀</h5>
						<p>회사에 관련된 소개 내용을 적는곳입니다.</p>
					  </div>
					</div>

					<div class="carousel-item">
					  <img src="https://via.placeholder.com/540x288"><!-- 이미지 변경 -->
					  <div class="carousel-caption d-md-block ks3">
						<h5>타이틀</h5>
						<p>회사에 관련된 소개 내용을 적는곳입니다.</p>
					  </div>
					</div>

					<div class="carousel-item">
					  <img src="https://via.placeholder.com/540x288"><!-- 이미지 변경 -->
					  <div class="carousel-caption d-md-block ks3">
						<h5>타이틀</h5>
						<p>회사에 관련된 소개 내용을 적는곳입니다.</p>
					  </div>
					</div>

				  </div>
				  <!-- Left and right controls -->
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				  </a>
				</div>
				<!-------------------------- ./carousel 슬라이드 -------------------------->
			</div><!-- ./col -->
		</div><!-- ./row -->

		<!-------------------------- 구글아이콘 -------------------------->
		<div class="row ks3 margin-top-30">
			<div class="col-md-3 margin-bottom-20">
				<div class="card text-center">
				  <div class="card-body">
				  	<span class="material-icons-outlined">settings</span>
					<h5 class="card-title"><strong>타이틀</strong></h5>
					<p class="card-text">글작성시에 들어가 내용들 입니다. 에티테마를 이용해주셔서 감사합니다.</p>
				  </div>
				</div>
			</div>
			<div class="col-md-3 margin-bottom-20">
				<div class="card text-center">
				  <div class="card-body">
				  	<span class="material-icons-outlined">face</span>
					<h5 class="card-title"><strong>타이틀</strong></h5>
					<p class="card-text">글작성시에 들어가 내용들 입니다. 에티테마를 이용해주셔서 감사합니다.</p>
				  </div>
				</div>
			</div>
			<div class="col-md-3 margin-bottom-20">
				<div class="card text-center">
				  <div class="card-body">
				  	<span class="material-icons-outlined">schedule</span>
					<h5 class="card-title"><strong>타이틀</strong></h5>
					<p class="card-text">글작성시에 들어가 내용들 입니다. 에티테마를 이용해주셔서 감사합니다.</p>
				  </div>
				</div>
			</div>
			<div class="col-md-3 margin-bottom-20">
				<div class="card text-center">
				  <div class="card-body">
				  	<span class="material-icons-outlined">admin_panel_settings</span>
					<h5 class="card-title"><strong>타이틀</strong></h5>
					<p class="card-text">글작성시에 들어가 내용들 입니다. 에티테마를 이용해주셔서 감사합니다.</p>
				  </div>
				</div>
			</div>
		</div><!-- ./row -->


		<!-------------------------- 테이블 -------------------------->
		<table class="table margin-top-10">
		  <thead class="thead-light">
			<tr>
			  <th scope="col" style="width: 60px;">#</th>
			  <th scope="col">타이틀</th>
			  <th scope="col">타이틀</th>
			  <th scope="col">타이틀</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">1</th>
			  <td>내용</td>
			  <td>내용</td>
			  <td>내용</td>
			</tr>
			<tr>
			  <th scope="row">2</th>
			  <td>내용</td>
			  <td>내용</td>
			  <td>내용</td>
			</tr>
			<tr>
			  <th scope="row">3</th>
			  <td>내용</td>
			  <td>내용</td>
			  <td>내용</td>
			</tr>
		  </tbody>
		</table>

		<!-------------------------- 테이블 -------------------------->
		<table class="table margin-top-40">
		  <thead class="thead-dark">
			<tr>
			  <th scope="col" style="width: 60px;">#</th>
			  <th scope="col">타이틀</th>
			  <th scope="col">타이틀</th>
			  <th scope="col">타이틀</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">1</th>
			  <td>내용</td>
			  <td>내용</td>
			  <td>내용</td>
			</tr>
			<tr>
			  <th scope="row">2</th>
			  <td>내용</td>
			  <td>내용</td>
			  <td>내용</td>
			</tr>
			<tr>
			  <th scope="row">3</th>
			  <td>내용</td>
			  <td>내용</td>
			  <td>내용</td>
			</tr>
		  </tbody>
		</table>

		<!-------------------------- 테이블 -------------------------->
		<table class="table table-striped  margin-top-40">
		  <thead>
			<tr>
			  <th scope="col" style="width: 60px;">#</th>
			  <th scope="col">타이틀</th>
			  <th scope="col">타이틀</th>
			  <th scope="col">타이틀</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">1</th>
			  <td>내용</td>
			  <td>내용</td>
			  <td>내용</td>
			</tr>
			<tr>
			  <th scope="row">2</th>
			  <td>내용</td>
			  <td>내용</td>
			  <td>내용</td>
			</tr>
			<tr>
			  <th scope="row">3</th>
			  <td>내용</td>
			  <td>내용</td>
			  <td>내용</td>
			</tr>
		  </tbody>
		</table>

	</div><!-- ./container -->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>