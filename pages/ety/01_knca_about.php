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

                            <li>About</li>

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

                <h3 class="line f20">한국NFT공인인증원</h3>

                <div class="divide20"></div>

            </div>

       </div>



<!-- 컨텐츠 내용 -->





<!-- 02.인사말 -->

    

<div class="row">

        <div class="col-md-12 margin20 text-center">

                <p class="ko">

                <div class="text-center"><img src="<?php echo G5_THEME_URL?>/img/knca/knca_logo.png" style="width:200px; margin:30px;"></div>            
             
                </p>


              <h3 class="text-center fw-900">생활속의 “NFT등기소” <br> <small>(디지털화,NFT등록,열람,인증서비스)</small> </h3>

                <div class="ko text-center m-auto lh-4">

				개인이나 기업이 보유한 대체불가능한 아날로그 또는 디지털 아이템을, 블록체인 기술을 활용해서 NFT화 할수 있도록,
				전문가가 아닌 누구나 쉽게 접근하고 활용할수 있도록, 
				온라인 및 오프라인에 NFT등록 인증원을 설립하고, 
				NFT등록, NFT열람, NFT인증, NFT현장감정, NFT 등록인증서 발급 등을 지원하는 		
				국내최초 NFT 공인인증 원스탑 서비스
				</div>

		<p>

<div class="mt-5">

<b> 디지털화 </b>: 다양한 아이템들을 특허출원된 기술로 디지털화하고, <br>
<b>NFT등록 </b>: 이를 대체불가능 NFT토큰으로 해쉬화하여 블록체인에 등록하고,<br>
<b>NFT열람 </b>: 등록된 NFT를 누구나 등기부등본처럼 내역을 열람할수 있고, <br>
<b>NFT인증 </b>: 등록여부 및 NFT소유권 등의 인증서를 발급 받을수 있는 서비스 <br>
<b>NFT감정 </b>: 실제 원본임을 실사를 통해 인증원에서 보증하는 서비스입니다.<br>
<b>인증마크 </b>:  각 NFT거래소에 공인인증 마크를 사용하여 신뢰성 공시하는 서비스<br>
<div>

                </p>


        </div>

        <div class="col-md-12">

            

        </div>

    </div><!--end greeting1-->





<!-- 인사말형식2 -->

<div class="divide50">

    <div class="row about01">



            <p class="ko">

<h4>* NFT 등록 및 인증 사업이란? </h4>

<div class="mb40">
ㅇ일반인 또는 기업이 소유한 대체 불가능한 아이템(아날로그 또는 디지털 형태)을, 누구나 쉽게 NFT인증원에 온라인 또는 오프라인으로 신청하면, 블록체인 기술을 활용해서 NFT화할 수 있도록 디지털하여 등록해주고 지원하고 보급하는 사업 <br>
</div>

<div class="mb40">
ㅇ전문가가 아닌 누구나 쉽게 접근하고 활용할수 있도록, <br>온라인 및 오프라인에 NFT등록 인증원을 설립하고, <br>NFT등록, NFT열람, NFT인증, NFT현장감정, NFT 등록인증서 발급 등을 지원하는 국내최초 NFT 공인인증 원스탑 서비스
 </div>
            </p>

        </div>

        <!-- col -->

    </div>

    <!-- row -->



</div>

<!-- end greeting2 -->



















	   <?php

$co_view = sql_fetch(" select co_content, co_mobile_content from {$g5['content_table']} where co_id = '내용관리명ID' ");

echo $co_view['co_content'];

?>













    </div><!-- //end right_col -->

  </div><!-- //end row -->



</div><!--left sidebar container-->









<div class="divide30"></div>

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