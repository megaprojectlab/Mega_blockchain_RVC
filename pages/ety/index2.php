<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}
include_once(G5_THEME_PATH.'/head.php');
?>
<?php
if(defined('_INDEX_')) { // index에서만 실행
	if(is_mobile()){
		include G5_THEME_PATH.'/mobile_popup.php'; // 팝업레이어
	}else{
		include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
	}
}
?>
	<?php
	/*
	###########
	# 슬라이드
	###########

	슬라이드의 모바일 폰트 크기는 css/common.css 에서 수정
	약 473 번째줄

	슬라이드 height 조절
	테마폴더/js/revolution-custom.js 에서 tp-banner 부분 startheight: 700, 사이즈를 줄이시면 됩니다.


	*/
	?>


	<div class="fullwidthbanner">
		<div class="tp-banner">
			<ul>
				<!-- SLIDE 1 -->
				<li class="rv-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="RESPONSIVE" style="display:none;">
					<img src="https://via.placeholder.com/1920x700" alt="darkblurbg"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" style="display:none;">
					
					<div class="caption title-2 sft ko"
						 data-x="50"
						 data-y="160"
						 data-speed="1000"
						 data-start="1000"
						 data-easing="easeOutExpo">
						소프트존 <br>
						RESPONSIVE HOMEPAGE
					</div>
					<div id="fontsize" class="caption text sfl ko f22 lh1-7"
						 data-x="50"
						 data-y="290"
						 data-speed="1000"
						 data-start="1800"
						 data-easing="easeOutExpo">
						 글로벌 윤리경영을 위해서 각종국제협약, 국제기구의 윤리기준설정<br />
						 OECD 회원국의 관련법규등의 책임감있는 회사로 지켜나가겠습니다.
					</div>
					<div class="caption sfb rev-buttons tp-resizeme"
						 data-x="50"
						 data-y="360"
						 data-speed="500"
						 data-start="1800"
						 data-easing="Sine.easeOut">
						<a href="#" class="btn btn-theme-bg btn-lg ko">바로가기</a>
					</div>
				</li>

				<!-- SLIDE 2 -->
				<li class="rv-2" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="RESPONSIVE" style="display:none;">
					<img src="https://via.placeholder.com/1920x700"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" style="display:none;">
					<div class="caption title-2 text-center sft ko"
						 data-x="center"
						 data-y="160"
						 data-speed="1000"
						 data-start="1000"
						 data-easing="easeOutExpo">
						소프트존 <br>
						RESPONSIVE HOMEPAGE
					</div>
					<div id="fontsize" class="caption text sfl ko f22 lh1-7"
						 data-x="center"
						 data-y="290"
						 data-speed="1000"
						 data-start="1800"
						 data-easing="easeOutExpo">
						 안전하고 책임감있는 회사로 거듭나기 위하여 첫번째도<br />
						 안전, 두번째도 안전, 세번째도 안전을 위해서 노력하고 있습니다.
					</div>
					<div class="caption sfb rev-buttons tp-resizeme"
						 data-x="center"
						 data-y="360"
						 data-speed="500"
						 data-start="1800"
						 data-easing="Sine.easeOut">
						<a href="#" class="btn btn-theme-bg btn-lg ko">바로가기</a>
					</div>

				</li>
				<!-- SLIDE 3 -->
				<li class="rv-3" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="RESPONSIVE" style="display:none;">
					<!-- MAIN IMAGE -->
					<img src="https://via.placeholder.com/1920x700"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" style="display:none;">

					<div class="caption text-center-top sft ko f60"
						 data-x="right"
						 data-y="210"
						 data-speed="1000"
						 data-start="1400"
						 data-easing="easeOutExpo">
						RESPONSIVE HOMEPAGE
					</div>

					<div id="fontsize" class="caption text-center-btm sfr text-center ko f22 lh1-7"
						 data-x="right"
						 data-y="265"
						 data-speed="1000"
						 data-start="1600"
						 data-easing="easeOutExpo">
						안전하고 책임감있는 회사로 거듭나기 위하여 첫번째도 안전, <br />
						두번째도 안전, 세번째도 안전을 위해서 노력하고 있습니다.

					</div>
					<div class="caption sfb rev-buttons tp-resizeme"
						 data-x="right"
						 data-y="350"
						 data-speed="500"
						 data-start="1800"
						 data-easing="Sine.easeOut">
						<a href="#" class="btn border-white btn-lg ko">바로가기</a>
					</div>
				</li>

			</ul>
		</div>
	</div><!--full width banner-->
	<script>
	// 슬라이드 처리
	$(window).load(function(){
		$(".rv-1").css('display','block');
		$(".rv-2").css('display','block');
		$(".rv-3").css('display','block');
	}); 
	</script>
	<!-------------------------- 슬라이드 끝 -------------------------->


	<!-------------------------- YOUR PARTNER -------------------------->
	<div class="divide80"></div>
	<div class="container">
		<div class="row ko">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="center-heading">
					<h2>YOUR <strong>PARTNER</strong> </h2>
					<span class="center-line"></span>
					<p class="sub-text margin40">
						글로벌 종합물류유통 기업으로 고객가치를 최우선으로 전 세계 네트워크와 정보시스템을 기반으로 제품의 <strong>수출,수입,포장,보관</strong>등의 물류솔루션을 제공해드리고 있습니다. </p>
				</div>
			</div>
		</div>
	</div>
	<!-------------------------- //YOUR PARTNER  -------------------------->


	<?php
	/*

	https://material.io/resources/icons/?style=outline
	위 주소에서 아이콘 이름만 교체하시면 바로 사용이 가능합니다.

	아래 예처럼 analytics 이나 phonelink_setup 처럼 이름만 변경해주세요.

	<i class="material-icons f60">analytics</i>
	<i class="material-icons f60">phonelink_setup</i>

	*/
	?>

	
	<!-------------------------- 최근게시물 시작-------------------------->
	<div class="divide40"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<!-- tab -->
				<div class="tabs-container">
					<ul class="nav nav-tabs tab-list">
						<li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> NOTICE</a></li>
						<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"> BOARD</a></li>
						<li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false"> ETC</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab-1" class="tab-pane active">
							<p>
								<?php echo latest('theme/basic_sf', 'notice', 6, 23);?>
							</p>
						</div>
						<div id="tab-2" class="tab-pane">
							<p>
								<?php echo latest('theme/basic_sf', 'free', 6, 23);?>
							</p>
						</div>
						<div id="tab-3" class="tab-pane">
							<p>
								<?php echo latest('theme/basic_sf', 'notice', 6, 23);?>
							</p>
						</div>
					</div>
				</div><!-- //tab -->
			</div><!-- //col -->


			<div class="col-md-4 col-sm-6 margin30">
				<?php

				// 게시판이름 자유게시판의 경우 free
				$bo = 'gallery_webzin_movie';

				// 가장 마지막에 올린 게시물중에서 유튜브 영상 하나만 가져와서 보여줌
				$yt = sql_fetch("select wr_10 from g5_write_$bo order by wr_id desc limit 1");
				$yt = $yt['wr_10'];
				if($yt)
				{
					$basename = basename($yt);
					$url = str_replace("watch?v=","",$basename);
					$url = explode('&',$url);
					$url = $url[0];
				}else{
					// 게시판에 유튜브가 없는 경우 출력할 동영상 아이디값
					$url = 'xGlVPzmgpSM';
				}
				?>
				<iframe width="100%" height="240" src="https://www.youtube.com/embed/<?php echo $url?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div><!--//col-->



			<div class="col-md-4 col-sm-6 margin30">
				<div class="box_2 skills-wrapper wow animated bounceIn animated animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3">
							<div class="pe-icon-box-type-2">
								<i class="pe-7s-headphones"></i>
							</div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-9">
							<h4 class="left_title_main">CUSTOMER</h4>
						</div>
					</div><!-- //row -->
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<ul class="list-unstyled contact">
								<li>영업시간안내 : <strong>AM:09 ~ PM:19</strong></li>
								<li>휴무 : 토요일,주말,공휴일</li>
								<li><strong><i class="fa fa-phone"></i></strong>1588-1234</li>
								<li><strong><i class="fa fa-envelope"></i></strong><a href="#">Softzonecokr@naver.com</a></li>
								<li><strong><i class="fa fa-print"></i></strong>02) 1234-1234</li>
							</ul>
						</div>
					</div><!-- //row -->

				</div><!-- box -->
			</div><!-- //col-->
		</div><!-- //row -->
	</div>
	<!-------------------------- 최근게시물 끝 -------------------------->
	<div class="divide40"></div>
	<!-------------------------- 사각박스 시작 -------------------------->
	<div class="intro-text-1 light">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					
					<div class="pricing-simple">
					<a href="javascript:void(0);">
						<h4>GREETING</h4>
						<!--<ul class="list-unstyled">
							<li><i class="fa fa-check-square"></i> un passage du </li>
							<li><i class="fa fa-check-square"></i> sur Internet tendent </li>
							<li><i class="fa fa-check-square"></i> un dictionnaire de plus </li>
							<li><i class="fa fa-check-square"></i> un passage du </li>
						</ul>-->
						<p>
							 회사에 대한 제품안내 페이지로 이동 합니다.
						</p>
						<div class="img-block">
							<img src="https://via.placeholder.com/220x85" class="img-responsive">
						</div>
					</a>
					</div>
					
				</div>
				<div class="col-md-3 col-sm-6">
				
					<div class="pricing-simple">
					<a href="javascript:void(0);">
						<h4>TECHNOLOGY</h4>
						<p>
							 회사의 기술에 대해서 소개합니다.
						</p>
						<div class="img-block">
							<img src="https://via.placeholder.com/220x85" class="img-responsive">
						</div>
					</a>
					</div>

				</div>
				<div class="col-md-3 col-sm-6">
				
					<div class="pricing-simple">
					<a href="javascript:void(0);">
					<h4>BUSINESS</h4>

						<p>
							 사업관련분야에 대한 전망과 연구실적에 대하여 소개합니다.
						</p>
						<div class="img-block">
							<img src="https://via.placeholder.com/220x85" class="img-responsive">
						</div>
					</a>
					</div><!-- //pricing -->

				</div><!-- //col -->
				<div class="col-md-3 col-sm-6">
				
					<div class="pricing-simple">
					<a href="javascript:void(0);">
					<h4>SERVICE</h4>
						<p>
							 2018년도 상반기 운송시스템 개편안내
						</p>
						<div class="img-block">
							<img src="https://via.placeholder.com/220x85" class="img-responsive">
						</div>
					</a>
					</div><!-- //pricing -->

				</div><!-- //col -->
			</div>
		</div>
	</div>
	<!-------------------------- 사각박스 끝 -------------------------->
	<!-------------------------- 그래프 및 전망 -------------------------->
	<div style='height:100px;'></div>

	<div class="container">
		<div class="row">
			<div class="col-md-7 margin30">
			<h3 class="line">graph</h3>
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
				  <!-- //AREA CHART -->


			</div><!-- //col -->
			<div class="col-md-5">
					<div class="row">
						<div class="col-md-6 margin30">
							<div class="pricing-simple">
								<a href="/bbs/board.php?bo_table=gallery_webzin_movie"><img src="https://via.placeholder.com/211x123" class="img-responsive"></a>
							</div>
						</div><!-- //col -->
						<div class="col-md-6 margin30">
							<div class="pricing-simple">
								<a href="/bbs/board.php?bo_table=gallery_webzin_movie"><img src="https://via.placeholder.com/211x123" class="img-responsive"></a>
							</div>
						</div><!-- //col -->
					</div><!-- //row -->
					<div class="row margin30">
						<div class="col-md-12 wow animated bounceIn animated animated">
						
						<strong>2.9% 와 2.7% 성장률을 기록할 전망</strong> 
						<BR>
						소비자물가는 내수 증가세 둔화에도 불구하고 유가 상승의 영향에 주로 기인하여 1%대 중.후반을 기록할 것으로 예상
						<br>
						취업자 수 증가폭은 인구구조의 변화, 산업구조조정 등의 영향으로 작년에 비해 낮은 수준을 기록하는 한편, 실업률은 작년과 유사한 수준을 나타낼 전망이다.

							
						</div><!-- //col -->
					</div><!-- //row -->

			</div><!-- //col -->
		</div><!-- //row -->
	</div>
		
	<div class="divide40"></div>


		<!-------------------------- 회사소개,막대 그래프 -------------------------->
		<div style='height:100px;'></div>
		<div class="our-team-v-2">
		<div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <h3 class="line">About Company</h3>
                    <p>
                        미국의 정책금리 추가 인상 및 신흥국 금융시장의 변동성 확대 등 대외 환경
						변화에 대한 우려가 확대되고 있으나, 우리 경제의 물가 및 경기상황에 기초한 통화
						정책을 독립적으로 운용할 수 있는 환경은 여전히 유지되고 있는 것으로 평가됨.
                    </p>
                </div>
                <div class="col-sm-5">
                    <div class="skills-wrapper wow animated bounceIn animated animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">
                        <h3 class="heading-progress">Web Design SKILL <span class="pull-right">88%</span></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar">
                            </div>
                        </div>
                        <h3 class="heading-progress">Web Development SKILL <span class="pull-right">100%</span></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar">
                            </div>
                        </div>
                        <h3 class="heading-progress">Marketing <span class="pull-right">65%</span></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width: 65%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" role="progressbar">
                            </div>
                        </div>                    
                    </div><!--skills-->
                </div>
            </div>
        </div>
	</div><!-- //our-team -->
	<!-------------------------- 회사소개,막대 그래프 끝 -------------------------->


	<!-------------------------- 그래프 및 전망 -------------------------->
	<div class="container mt40 mb40">
		<div class="row">
			<div class="col-md-5">
	
				<div class="row margin30">
					<div class="col-md-12 wow animated bounceIn animated animated">
						<strong><span class='font-kr'>완화적 정책기조를 유지하는 통화정책</span></strong> 
						<BR>
						최근 소비가 양호한 흐름을 보이고 있으나 순해외소비 증가 등으로 인해 국내 서비스업
						경기의 개선은 지연되고 있으며 투자 증가세도 둔화되는 등 총수요 전반에 통화정책
						적 대응이 필요할 정도의 과열 신호가 감지되고 있다고 판단하기는 어려운 상황임. 
							
					</div><!-- //col -->
				</div><!-- //row -->

				<div class="row">
					<div class="col-md-6 margin30">
						<div class="pricing-simple">
							<img src="https://via.placeholder.com/211x123" class="img-responsive">
						</div>
					</div><!-- //col -->
					<div class="col-md-6 margin30">
						<div class="pricing-simple">
							<img src="https://via.placeholder.com/211x123" class="img-responsive">
						</div>
					</div><!-- //col -->
				</div>

			</div><!-- //col -->
			<div class="col-md-7">
			<h3 class="line">graph</h3>

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

			</div><!-- //col -->
		</div><!-- //row -->
	</div>
	<!-------------------------- 그래프 및 전망 끝 -------------------------->


	<!-------------------------- 최근게시물 -------------------------->
	<?php echo latest('theme/basic_gallery', 'gallery', 3, 10);?>
	<!-------------------------- //최근게시물 -------------------------->



	<!-------------------------- 최근게시물 -------------------------->
	<?php echo latest('theme/basic_one', 'notice', 5, 30);?>
	<!-------------------------- //최근게시물 -------------------------->

	<!-------------------------- 최근게시물 -------------------------->
	<?php echo latest('theme/basic_yt', 'gallery_movie', 2, 10);?>
	<!-------------------------- //최근게시물 -------------------------->


	<!-------------------------- 하단 배너 -------------------------->
	<!-- 
	테마폴더/js/custom.js : 283줄
	-->
	<div class="divide40"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel owl-theme">
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
					<div class="item"><img src="https://via.placeholder.com/212x72"></div>
				</div>
			</div>
		</div>
	</div>
	<!-------------------------- 하단 배너 끝 -------------------------->
	<div class="divide40"></div>

	<?php
	include_once(G5_THEME_PATH.'/tail.php');
	?>