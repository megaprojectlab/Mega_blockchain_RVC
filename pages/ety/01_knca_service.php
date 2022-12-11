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
                            <li>SERVICES</li>
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
                <h3 class="line f20">KNCA 주요 서비스</h3>
                <div class="divide20"></div>
            </div>
       </div>





	   <?php
$co_view = sql_fetch(" select co_content, co_mobile_content from {$g5['content_table']} where co_id = '내용관리명ID' ");
echo $co_view['co_content'];
?>






    </div><!-- //end right_col -->
  </div><!-- //end row -->

</div><!--left sidebar container-->




 <!-- 10.more info? -->
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