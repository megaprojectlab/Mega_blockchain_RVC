<?php
include_once('./_common.php');
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>한국NFT공인인증원(KNCA)의 NFT통합인증시스템입니다. NFT등록,NFT인증,NFT증명서발급, NFT작품임치 및 보관서비스</title>
    </head>

<?php
	include_once(G5_THEME_PATH.'/head_knca.php');
?>

<?php
	include_once(G5_THEME_PATH.'/navigation.php');
?>



        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>한국NFT공인인증원(KNCA)</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">KNCA</a></li>
                            <li>Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->


<div class="divide30 mobile-none"></div>
        
<div class="container">
 <div class="row" style="overflow: hidden;">
    <div class="col-sm-3" style="overflow-y: auto;">
				<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
                </div><!--sidebar col end-->
                
    <div class="col-sm-9"><!--left body col end-->

       <div class="row">
            <div class="col-md-12">
                <h3 class="line f20">찾아오시는 길</h3>
                <div class="divide20"></div>
            </div>
       </div>



       <style>
		  /* Always set the map height explicitly to define the size of the div
		   * element that contains the map. */
		  #map {
			height: 100%;
			border:1px solid #ccc;
		  }
		  /* Optional: Makes the sample page fill the window. */
		  html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		  }
		</style>


   
        <div class="container mb80">
   
			<div class="row">
				<div class="col-md-12 margin20">			
					
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1582.450199971182!2d127.0604579!3d37.5102672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca46a84e41805%3A0xfffebb7c9a1fac5a!2z7ISc7Jq47Yq567OE7IucIOqwleuCqOq1rCDsgrzshLEx64-ZIOyYgeuPmeuMgOuhnCA1MTE!5e0!3m2!1sko!2skr!4v1626367850478!5m2!1sko!2skr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>

				</div>
				<div class="col-md-12">
					<h4>ADDRESS</h4>
					<ul class="list-unstyled contact">
						<li><strong><i class="fa fa-map-marker"></i></strong>서울시 강남구 영동대로 511 트레이드타워(무역센터) 3407호 </li> 
						<li><strong>MAIL :</strong> <a href="#">support@nftkor.org</a></li>
						<li><strong>TEL :</strong> (82) 1522-1492</li>
						<li><strong>FAX :</strong> 02 412-2286</li>
						<li><strong>KAKAO :</strong> KNCA114</li>
					</ul>
				</div><!-- //col -->
			</div><!-- //row -->
      </div><!-- //container -->



      <!--contact section-->
      <section id="contact">
            <div class="container">
		
            <div class="row">
            <div class="col-md-12">
                <h3 class="line f20">Contact Us</h3>
                <div class="divide20"></div>
            </div>
       </div>


                <div class="row">
                    <div class="col-md-11 margin30">
                        <div class="divide30"></div>
                        <div class="form-contact">
                            <form name="message" id="frm" class="contact-form" method="post" novalidate>
							<input type="hidden" id="send_url" value="<?php echo G5_THEME_URL?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label class="ko2">문의자<span>*</span></label>
                                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label>E-mail<span>*</span></label>
                                                <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
								<div class="row control-group">
									<div class="form-group col-xs-12  controls">
										<label class="ko2">연락처</label>
										<input type="tel" class="form-control" placeholder="phone" name="tel" id="phone" autocomplete="off">
									</div>
								</div>
								<div class="row control-group">
									<div class="form-group col-xs-12 controls">
										<label class="ko2">아래 보안코드를 입력해주세요.<span>*</span></label>
										<input type="text" name="secode" id="secode" class="form-control" placeholder="<?php echo rand(000000,999999)?>" aria-describedby="sizing-addon2" required autocomplete="off">
									</div>
								</div> 

                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label class="ko2">문의내용<span>*</span></label>
                                        <textarea rows="5" class="form-control" placeholder="Message" name="content" id="content" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <div id="success"></div>
                                <div class="row">
                                    <div class="form-group col-xs-12 text-right">
                                        <button type="button" class="btn btn-lg ko" id="msg">문의하기</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--contact form-->
                    </div><!-- ./col -->
                </div>
            </div>
        </section>












    </div><!-- //end right_col -->
  </div><!-- //end row -->

</div><!--left sidebar container-->






 <!-- more info? -->
<div class="divide80"></div>
    <div class="intro-text-1 light">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="animated slideInDown ko">한국NFT공인인증원 인증서비스</h4>

                    <p class="ko">
                        소중한 작품이나 아이템들을 안전하게 소유권과 저작권과 서명이 명시된 NFT등록 등기시스템을 이용하세요. 문의사항이나 서비스에 대한 궁금증이 있으시다면 바로가기를 클릭해 주세요.
                    </p>                   
                </div>
                <div class="col-sm-4">
                    <a href="<?php echo G5_URL?>/bbs/qalist.php" target="_blank" class="btn border-theme btn-lg ko">바로가기</a>
                </div>
            </div>
        </div>
    </div> <!--intro text end-->




 <!-- footer section ------------------------------------ -->


 <?php
		include_once(G5_THEME_PATH."/footer.php");
	?>

 <?php
	include_once(G5_THEME_PATH.'/tail_knca.php');
	?>

</body>
</html>



<!-- 화면전환 -->
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



		<!-- 차트는 이곳에서 수정하세요. -->
		<script>
		  $(function () {
			"use strict";

			// AREA CHART
			var area = new Morris.Area({
			  element: 'revenue-chart',
			  resize: true,
			  data: [
				{y: '2015 Q1', item1: 2666, item2: 2666},
				{y: '2015 Q2', item1: 2778, item2: 2294},
				{y: '2015 Q3', item1: 4912, item2: 1969},
				{y: '2015 Q4', item1: 3767, item2: 3597},
				{y: '2016 Q1', item1: 6810, item2: 1914},
				{y: '2016 Q2', item1: 5670, item2: 4293},
				{y: '2016 Q3', item1: 4820, item2: 3795},
				{y: '2016 Q4', item1: 15073, item2: 5967},
				{y: '2017 Q1', item1: 10687, item2: 4460},
				{y: '2017 Q2', item1: 8432, item2: 5713}
			  ],
			  xkey: 'y',
			  ykeys: ['item1', 'item2'],
			  labels: ['Item 1', 'Item 2'],
			  lineColors: ['#a0d0e0', '#3c8dbc'],
			  hideHover: 'auto'
			});

			// LINE CHART
			var line = new Morris.Line({
			  element: 'line-chart',
			  resize: true,
			  data: [
				{y: '2015 Q1', item1: 2666},
				{y: '2015 Q2', item1: 2778},
				{y: '2015 Q3', item1: 4912},
				{y: '2015 Q4', item1: 3767},
				{y: '2016 Q1', item1: 6810},
				{y: '2016 Q2', item1: 5670},
				{y: '2016 Q3', item1: 4820},
				{y: '2016 Q4', item1: 15073},
				{y: '2017 Q1', item1: 10687},
				{y: '2017 Q2', item1: 8432}
			  ],
			  xkey: 'y',
			  ykeys: ['item1'],
			  labels: ['Item 1'],
			  lineColors: ['#3c8dbc'],
			  hideHover: 'auto'
			});

		  });


          
			// AREA CHART
			var area = new Morris.Area({
			  element: 'revenue-chart1',
			  resize: true,
			  data: [
				{y: '2015 Q1', item1: 2666, item2: 2666},
				{y: '2015 Q2', item1: 2778, item2: 2294},
				{y: '2015 Q3', item1: 4912, item2: 1969},
				{y: '2015 Q4', item1: 3767, item2: 3597},
				{y: '2016 Q1', item1: 6810, item2: 1914},
				{y: '2016 Q2', item1: 5670, item2: 4293},
				{y: '2016 Q3', item1: 4820, item2: 3795},
				{y: '2016 Q4', item1: 15073, item2: 5967},
				{y: '2017 Q1', item1: 10687, item2: 4460},
				{y: '2017 Q2', item1: 8432, item2: 5713}
			  ],
			  xkey: 'y',
			  ykeys: ['item1', 'item2'],
			  labels: ['Item 1', 'Item 2'],
			  lineColors: ['#a0d0e0', '#3c8dbc'],
			  hideHover: 'auto'
			});


		</script>