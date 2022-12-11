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
        <title>오시는길</title>

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

		<style>
		/* 별도 스타일시트 */
		#container {overflow:hidden;height:490px;position:relative;}
		#mapWrapper {width:100%;height:490px;z-index:1;}
		#rvWrapper {width:50%;height:490px;top:0;right:0;position:absolute;z-index:0;}
		#container.view_roadview #mapWrapper {width: 50%;}
		#roadviewControl {position:absolute;top:5px;left:5px;width:65px;height:24px;padding:2px;z-index: 1;background: #f7f7f7;border-radius: 4px;border: 1px solid #c8c8c8;box-shadow: 0px 1px #888;cursor: pointer;}
		#roadviewControl span {background: url(http://i1.daumcdn.net/localimg/localimages/07/mapapidoc/mapworker.png) no-repeat;  padding-left:23px;height:24px;font-size: 12px;display: inline-block;line-height: 2;font-weight: bold;}
		#roadviewControl.active {background: #ccc;box-shadow: 0px 1px #5F616D;border: 1px solid #7F818A;}
		#roadviewControl.active span {background: url(http://i1.daumcdn.net/localimg/localimages/07/mapapidoc/mapworker_on.png) no-repeat;color: #4C4E57;}
		#close {position: absolute;padding: 4px;top: 5px;left: 5px;cursor: pointer;background: #fff;border-radius: 4px;border: 1px solid #c8c8c8;box-shadow: 0px 1px #888;}
		#close .img {display: block;background: url(http://i1.daumcdn.net/localimg/localimages/07/mapapidoc/rv_close.png) no-repeat;width: 14px;height: 14px;}
		</style>

    </head>
	<?php
	include_once(G5_THEME_PATH.'/navigation.php');
	?>
    <body>
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Map</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">Home</a></li>
                            <li>Map</li>
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
		<!-- Page Content -->
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<div class="row">
				<div class="col-lg-12">
				  <h4 class="ko f20">Kakao Daum MAP</h4>
				</div>
			</div>
			<!-- /.row -->

			<div class="divide20"></div>


			<div class="row">
				<div class="col-md-9">

						<!-- Map -->
						<div class="row">
							<div class="col-md-12">
								<div id="container">
									<div id="rvWrapper">
										<div id="roadview" style="width:100%;height:100%;"></div> <!-- 로드뷰 -->
										<div id="close" title="로드뷰닫기" onclick="closeRoadview()"><span class="img"></span></div>
									</div>
									<div id="mapWrapper">
										<div id="map" style="width:100%;height:100%"></div> <!-- 지도를 -->
										<div id="roadviewControl" onclick="setRoadviewRoad()"><span>로드뷰</span></div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.row -->

						<div class="row">
							<div class="col-md-12">
							<div style='height:20px;'></div>
							</div>
						</div>
				</div>
				<div class="col-md-3">
						<!-- Team Members -->
						<div class="row">
						  <div class="col-md-12">
								<div class="thumbnail">
									<div class="" style="padding:20px;">
										<h3 class="ko f20">본사</h3>
										<p class="ko">서울특별시 노원구 중계4동 156-29번지 일원 한화 단지내상가 301~304호</p>
										<a href="javascript:;" class="btn btn-default ko" onclick="daum_map('서울 중구 세종대로 110','하이잭 본사')">바로가기</a>
									</div>
								</div>
							</div><!-- //col -->
							<div class="col-md-12">
								<div class="thumbnail">
									<div class="" style="padding:20px;">
										<h3 class="ko f20">하이잭 제주점</h3>
										<p class="ko">서울특별시 노원구 중계4동 156-29번지 일원 한화 단지내상가 301~304호</p>
										<a href="javascript:;" class="btn btn-default ko" onclick="daum_map('제주 제주시 과원북4길 69','하이잭 제주점')">바로가기</a>
									</div>
								</div>
							</div><!-- //col -->
							<div class="col-md-12">
								<div class="thumbnail">
									<div class="" style="padding:20px;">
										<h3 class="ko f20">여주시청</h3>
										<p class="ko">경기 여주시 세종로 1</p>
										<a href="javascript:;" class="btn btn-default ko" onclick="daum_map('경기 여주시 세종로 1', '여주시청')">바로가기</a>
									</div>
								</div>
							</div><!-- //col -->

						</div><!-- /.row -->
					</div><!-- //col -->
				</div><!-- //row -->

				<div class="divide20"></div>

				<div class="row">
				  <div class="col-md-12">
						<h4>ADDRESS</h4>
						<ul class="list-unstyled contact">
							<li><strong><i class="fa fa-map-marker"></i></strong>경기도 여주시 홍문동 아름다운아파트 101동 1004호</li> 
							<li><strong>MAIL :</strong> <a href="#">Email@domain.com</a></li>
							<li><strong>TEL :</strong> (82) 010 0000 0000</li>
							<li><strong>FAX :</strong> 02 1588 1234</li>
							<li><strong>SKYPE :</strong> SOFTZONE.856</li>
						</ul>
					</div>
				</div>

		</div><!-- /.container -->
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
        <script src="<?php echo G5_THEME_URL ?>/js/jquery-migrate.min.js"></script> 
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
        <script type="text/javascript" src="<?php echo G5_THEME_URL ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo G5_THEME_URL ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo G5_THEME_URL ?>/js/revolution-custom.js"></script>
        <!--cube portfolio plugin-->
        <script src="<?php echo G5_THEME_URL ?>/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="<?php echo G5_THEME_URL ?>/js/cube-portfolio.js" type="text/javascript"></script>
        <script src="<?php echo G5_THEME_URL ?>/js/pace.min.js" type="text/javascript"></script>
		<script src="<?php echo G5_THEME_URL ?>/js/bootstrap-select.js"></script>
		<script src="<?php echo G5_THEME_URL ?>/js/custom.js" type="text/javascript"></script>

		<script src="<?php echo G5_THEME_URL ?>/js/jquery.backstretch.js"></script>


		<?php
		/* 아래 카카오 api 를 입력해주세요 */
		?>
		<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=0b9aa15dbed05e8016f1543bfdcb9856&libraries=services"></script>
		<script>

			var overlayOn = false,
				container = document.getElementById('container'),
				mapWrapper = document.getElementById('mapWrapper'),
				mapContainer = document.getElementById('map'),
				rvContainer = document.getElementById('roadview');
			
			var mapCenter = new daum.maps.LatLng(33.45042 , 126.57091),
					mapOption = {
						center: new daum.maps.LatLng(37.5548768201904, 126.96966524449994),
						level: 12
					}; 
			var map = new daum.maps.Map(mapContainer, mapOption);
			var mapTypeControl = new daum.maps.MapTypeControl();
			map.addControl(mapTypeControl, daum.maps.ControlPosition.TOPRIGHT);
			var zoomControl = new daum.maps.ZoomControl();
			map.addControl(zoomControl, daum.maps.ControlPosition.RIGHT);
			var geocoder = new daum.maps.services.Geocoder();
			function daum_map(x,y){
				geocoder.addressSearch(x, function(result, status) {
					 if (status === daum.maps.services.Status.OK) {
						var coords = new daum.maps.LatLng(result[0].y, result[0].x);
						mapOption = {
							center: new daum.maps.LatLng(result[0].y, result[0].x),
							level: 3
						};
						xx=result[0].x;
						yy= result[0].y;
						$('#map').html('');
						map = new daum.maps.Map(mapContainer, mapOption);

						var marker = new daum.maps.Marker({
							map: map,
							position: coords
						});

						var infowindow = new daum.maps.InfoWindow({
							content: '<div style="width:150px;text-align:center;padding:6px 0;">' + y + '</div>'
						});
						infowindow.open(map, marker);

						map.setCenter(coords);
					} 
				}); 
			}
			var rv = new daum.maps.Roadview(rvContainer); 
			var rvClient = new daum.maps.RoadviewClient(); 
			daum.maps.event.addListener(rv, 'position_changed', function() {
				var rvPosition = rv.getPosition();
				map.setCenter(rvPosition);
				if(overlayOn) {
					marker.setPosition(rvPosition);
				}
			});
			var markImage = new daum.maps.MarkerImage(
				'http://i1.daumcdn.net/localimg/localimages/07/mapapidoc/roadview_wk.png',
				new daum.maps.Size(35,39), {
				offset: new daum.maps.Point(14, 39)
			});
			var marker = new daum.maps.Marker({
				image : markImage,
				position: mapCenter,
				draggable: true
			});
			daum.maps.event.addListener(marker, 'dragend', function(mouseEvent) {
				var position = marker.getPosition();
				toggleRoadview(position);
			});
			daum.maps.event.addListener(map, 'click', function(mouseEvent){
				if(!overlayOn) {
					return;
				}
				var position = mouseEvent.latLng;
				marker.setPosition(position);
				toggleRoadview(position);
			});
			function toggleRoadview(position){
				rvClient.getNearestPanoId(position, 50, function(panoId) {
					if (panoId === null) {
						toggleMapWrapper(true, position);
					} else {
					 toggleMapWrapper(false, position);
						rv.setPanoId(panoId, position);
					}
				});
			}

			// 지도를 감싸고 있는 div의 크기를 조정하는 함수입니다
			function toggleMapWrapper(active, position) {
				if (active) {

					// 지도를 감싸고 있는 div의 너비가 100%가 되도록 class를 변경합니다 
					container.className = '';

					// 지도의 크기가 변경되었기 때문에 relayout 함수를 호출합니다
					map.relayout();

					// 지도의 너비가 변경될 때 지도중심을 입력받은 위치(position)로 설정합니다
					map.setCenter(position);
				} else {

					// 지도만 보여지고 있는 상태이면 지도의 너비가 50%가 되도록 class를 변경하여
					// 로드뷰가 함께 표시되게 합니다
					if (container.className.indexOf('view_roadview') === -1) {
						container.className = 'view_roadview';

						// 지도의 크기가 변경되었기 때문에 relayout 함수를 호출합니다
						map.relayout();

						// 지도의 너비가 변경될 때 지도중심을 입력받은 위치(position)로 설정합니다
						map.setCenter(position);
					}
				}
			}

			// 지도 위의 로드뷰 도로 오버레이를 추가,제거하는 함수입니다
			function toggleOverlay(active) {
				if (active) {
					overlayOn = true;

					// 지도 위에 로드뷰 도로 오버레이를 추가합니다
					map.addOverlayMapTypeId(daum.maps.MapTypeId.ROADVIEW);

					// 지도 위에 마커를 표시합니다
					marker.setMap(map);

					// 마커의 위치를 지도 중심으로 설정합니다 
					marker.setPosition(map.getCenter());

					// 로드뷰의 위치를 지도 중심으로 설정합니다
					toggleRoadview(map.getCenter());
				} else {
					overlayOn = false;

					// 지도 위의 로드뷰 도로 오버레이를 제거합니다
					map.removeOverlayMapTypeId(daum.maps.MapTypeId.ROADVIEW);

					// 지도 위의 마커를 제거합니다
					marker.setMap(null);
				}
			}

			// 지도 위의 로드뷰 버튼을 눌렀을 때 호출되는 함수입니다
			function setRoadviewRoad() {
				var control = document.getElementById('roadviewControl');

				// 버튼이 눌린 상태가 아니면
				if (control.className.indexOf('active') === -1) {
					control.className = 'active';

					// 로드뷰 도로 오버레이가 보이게 합니다
					toggleOverlay(true);
				} else {
					control.className = '';

					// 로드뷰 도로 오버레이를 제거합니다
					toggleOverlay(false);
				}
			}

			// 로드뷰에서 X버튼을 눌렀을 때 로드뷰를 지도 뒤로 숨기는 함수입니다
			function closeRoadview() {
				var position = marker.getPosition();
				toggleMapWrapper(true, position);
			}
		</script>


	</body>
</html>
