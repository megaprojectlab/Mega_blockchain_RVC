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
			<h2>SERVICE 2</h2>
			<span class="center-line"></span>
		</div>


		<ul class="list-unstyled margin-top-50">
		  <li class="media">
			<div class="media-body">
			  <h5 class="mt-0 mb-1">GREETING</h5>
			  <p class="ks3">
				이스라엘 민족의 조상은 메소포타미아로부터 가나안 지방으로 이동하였던 것이나, 요셉을 중심으로 한 일부가 힉소스 지배(B.C.1730 ~ B.C.1570)의 이집트(영어: Egypt, 한국 한자: 埃及-애급)에 들어가 나일강의 델타 지역 동쪽에 머물러 살게 되었다.
				〈출애굽기〉에 의하면 요셉의 후손들은 그 뒤 새로운 파라오가 즉위하자 이집트의 노예로서 토목사업에 혹사당하게 되었다. 이때 이스라엘 민족해방의 지도자로 나타난 사람이 모세이다. [출처 위키백과]
			  </p>
			</div>
		  </li>
		</ul>

		<!-------------------------- 구글아이콘 -------------------------->
		<div class="row margin-top-50 margin-bottom-50 ks3">
			<div class="col-md-6 col-md-offset-1 item">
				<ul class="list-unstyled">
				  <li class="media">
					<span class="material-icons-outlined">home</span>
					<div class="media-body">
					  <h5 class="mt-0 mb-1"><strong>구글 Material Icons</strong></h5>
					  <p>https://fonts.google.com/icons 주소 이동해서 모든 아이콘을 사용할 수 있습니다. 가운데 아이콘 영문이름만 변경하시면 바로 사용할 수 있습니다.</p>
					</div>
				  </li>
				  <li class="media my-4">
					<span class="material-icons-outlined">search</span>
					<div class="media-body">
					  <h5 class="mt-0 mb-1"><strong>구글 Material Icons</strong></h5>
					  <p>https://fonts.google.com/icons 주소 이동해서 모든 아이콘을 사용할 수 있습니다. 가운데 아이콘 영문이름만 변경하시면 바로 사용할 수 있습니다.</p>
					</div>
				  </li>
				</ul>
			</div>

			<div class="col-md-6 col-md-offset-1 item">
				<ul class="list-unstyled">
				  <li class="media">
					<span class="material-icons-outlined">help_outline</span>
					<div class="media-body">
					  <h5 class="mt-0 mb-1"><strong>구글 Material Icons</strong></h5>
					  <p>https://fonts.google.com/icons 주소 이동해서 모든 아이콘을 사용할 수 있습니다. 가운데 아이콘 영문이름만 변경하시면 바로 사용할 수 있습니다.</p>
					</div>
				  </li>
				  <li class="media my-4">
					<span class="material-icons-outlined">analytics</span>
					<div class="media-body">
					  <h5 class="mt-0 mb-1"><strong>구글 Material Icons</strong></h5>
					  <p>https://fonts.google.com/icons 주소 이동해서 모든 아이콘을 사용할 수 있습니다. 가운데 아이콘 영문이름만 변경하시면 바로 사용할 수 있습니다.</p>
					</div>
				  </li>
				</ul>
			</div><!-- ./col -->
		</div><!-- ./row -->
		

		<div class="row">
			<div class="col-md-3">
				<div class="card margin-bottom-20">
				  <img src="https://via.placeholder.com/253x216" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title ks4"><strong>타이틀</strong></h5>
					<p class="card-text ks3">갤러리 형태의 게시물 입니다. 작업시 해당 부분을 복사해서 사용하시면 됩니다.</p>
					<a href="#" class="btn btn-primary ks3">바로가기</a>
				  </div>
				</div>
			</div><!-- ./col -->
			<div class="col-md-3">
				<div class="card margin-bottom-20">
				  <img src="https://via.placeholder.com/253x216" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title ks4"><strong>타이틀</strong></h5>
					<p class="card-text ks3">갤러리 형태의 게시물 입니다. 작업시 해당 부분을 복사해서 사용하시면 됩니다.</p>
					<a href="#" class="btn btn-secondary ks3">바로가기</a>
				  </div>
				</div>
			</div><!-- ./col -->
			<div class="col-md-3">
				<div class="card margin-bottom-20">
				  <img src="https://via.placeholder.com/253x216" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title ks4"><strong>타이틀</strong></h5>
					<p class="card-text ks3">갤러리 형태의 게시물 입니다. 작업시 해당 부분을 복사해서 사용하시면 됩니다.</p>
					<a href="#" class="btn btn-success ks3">바로가기</a>
				  </div>
				</div>
			</div><!-- ./col -->
			<div class="col-md-3">
				<div class="card margin-bottom-20">
				  <img src="https://via.placeholder.com/253x216" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title ks4"><strong>타이틀</strong></h5>
					<p class="card-text ks3">갤러리 형태의 게시물 입니다. 작업시 해당 부분을 복사해서 사용하시면 됩니다.</p>
					<a href="#" class="btn btn-danger ks3">바로가기</a>
				  </div>
				</div>
			</div><!-- ./col -->
		</div>


		<div class="row margin-top-40">
			<div class="col-md-6">

			<!-------------------------- 테이블 -------------------------->
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

			<div class="col-md-6">
			<!-------------------------- 테이블 -------------------------->
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



		<!-------------------------- 아코디언 -------------------------->
		<div class="accordion margin-top-40" id="accordionExample">
		  <div class="card">
			<div class="card-header" id="headingOne">
			  <h2 class="mb-0">
				<button class="btn btn-link btn-block text-left ks4" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				  무료 와이드 테마 라이선스 안내
				</button>
			  </h2>
			</div>

			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			  <div class="card-body ks3">
				무료로 상업적으로 이용가능한 그누보드용 테마 입니다. 유료 홈페이지 제작에 사용이 가능합니다. 배포처는 에티테마에서만 가능합니다.
			  </div>
			</div>
		  </div>
		  <div class="card">
			<div class="card-header" id="headingTwo">
			  <h2 class="mb-0">
				<button class="btn btn-link btn-block text-left collapsed ks4" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				  에티는 뭐고 소프트존은 뭔가요?
				</button>
			  </h2>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
			  <div class="card-body ks3">
				소프트존은 에티테마를 제작한 회사 입니다. 보통 소프트존으로 활동하고 있습니다.
			  </div>
			</div>
		  </div>
		  <div class="card">
			<div class="card-header" id="headingThree">
			  <h2 class="mb-0">
				<button class="btn btn-link btn-block text-left collapsed ks4" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				  소프트존은 뭐하는 곳인가요?
				</button>
			  </h2>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
			  <div class="card-body ks3">
				주로 웹관련 프로그램을 개발하고 있으며, 앱개발등을 하고 있습니다. 테마도 만들고 있네요~
			  </div>
			</div>
		  </div>
		</div>
		<!-------------------------- 아코디언 -------------------------->
	</div><!-- ./container -->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>