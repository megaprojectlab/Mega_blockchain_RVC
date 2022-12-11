

<?php

$wr_id = $_GET['n'];  //물건번호
if(!$wr_id){$wr_id=82;}//임시테스트

// DB불러오기
include_once $_SERVER['DOCUMENT_ROOT']."/customPage/libDB.php";
$datas = select("g5_write_300","*","wr_id='".sqlFilter($wr_id)."' ");

$view = array();
if( isset($datas[0]) ){
	$view = $datas[0];
}

$block_info = array();

//소유권 불러오기
$owner_info = select("g5_write_300_owner", "*", "owner_num=".$view['wr_id']." and option_type='owner' and state=1 limit 1");
if( isset($owner_info[0]) ){
	$data = $owner_info[0];
	$view['wr_20'] = $data['show_name'];
	$view['wr_21'] = $data['dateOf'];
	$view['wr_22'] = $data['email'];
	$view['wr_23'] = $data['phone'];
	$view['wr_24'] = $data['home_address'];
	$view['wr_25'] = $data['wallet_address'];
	$view['wr_10'] = $data['sign_img'];

	$block_info[0]['num'] = 1;
	$block_info[0]['show'] = '등기생성';
	$block_info[0]['date'] = date("Y-m-d H:i", strtotime($data['regtime']));
	$block_info[0]['hash'] = $data['owhash'];
}

//저작권자 불러오기
$copyr_info = select("g5_write_300_owner", "*", "owner_num=".$view['wr_id']." and option_type='copyright' and state=1 limit 1");
if( isset($copyr_info[0]) ){
	$data = $copyr_info[0];
	$view['wr_31'] = $data['show_name'];
	$view['wr_32'] = $data['dateOf'];
	$view['wr_33'] = $data['email'];
	$view['wr_34'] = $data['phone'];
	$view['wr_35'] = $data['home_address'];
	$view['wr_36'] = $data['wallet_address'];

	$block_info[1]['num'] = 2;
	$block_info[1]['show'] = '소유권변경';
	$block_info[1]['date'] = date("Y-m-d H:i", strtotime($data['regtime']));
	$block_info[1]['hash'] = $data['owhash'];
}


$owners = select("g5_write_300_owner", "*", "state IN (1,2) and option_type='owner' and owner_num=".$view['wr_id']." order by regtime desc limit 100");
$copyr = select("g5_write_300_owner", "*", "state IN (1,2) and option_type='copyright' and owner_num=".$view['wr_id']." order by regtime desc limit 100");
$new1 = select("g5_write_300_owner", "*", "state IN (1,2) and option_type='newItem1' and owner_num=".$view['wr_id']." order by regtime desc limit 100");

?>





<!-- 양식출력 -->


<!DOCTYPE html>
<html>
<head>
    <!-- 폰트 -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+KR:wght@200,300,400,500,600,700,900&display=swap&subset=korean" rel="stylesheet">
    <style>*{font-family : 'Noto Sans KR', sans-serif; } .serif{font-family : 'Noto Serif KR', serif;} </style>    
    <!-- barcode -->
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="jquery-barcode.js"></script>
</head>



<body style="font-size:9pt;">

<b>NFT 등록 증명서 <br></b>

등기고유번호 : <?=$view['wr_11']; ?>  <br>
바코드	:  <!-- 등기고유번호의 바코드 --> 
<div id="bcTarget" style="height:20px;"></div>
<script> $("#bcTarget").barcode("<?=$view['wr_11']?>", "code128"); </script>                           


<br>
물건의 명칭	: <strong class="serif"> <?= $view['wr_subject'] ;?>  </strong> <br>
등기의 종류	: <?= $view['wr_12'] ;?> <br>
카테고리1	: <?= $view['wr_13'] ;?> <br>
카테고리2	: <?= $view['wr_14'] ;?> <br>
등록범위	: <?= $view['wr_46'] ;?> <br>
에디션번호	: <?= $view['wr_49'] ;?> <br>
전체발행수	: <?= $view['wr_48'] ;?> <br>

<br>
검증수준	: <?= 	$view['wr_30'] ;?> <br>
소유권자(개인코드)	: <?= 	$view['wr_20'] ."(". $view['wr_25'] .")" ?> <br>
저작권자(개인코드)	: <?= 	$view['wr_31'] ."(". $view['wr_36'] .")" ?> <br>

<br>	
블록체인 프로토콜 : <?= 	$view['wr_42'] ;?> <br>
블록체인 토큰ID	: <?= 	$view['wr_40'] ;?> <br>
스마트컨트렉트: <?= 	$view['wr_41'] ;?> <br>

블록체인 등기 해쉬값: <?= 	$view['wr_45'] ;?> <br>
블록체인 등록일	: <?= 	$view['wr_44'] ;?> <br>

<br>
대표이미지	: <img src=" <?= get_file_thumbnail2($wr_id, 0) ;?> " width="150px;"> <br>
*부분이미지	: <img src="  <?= get_file_thumbnail2($wr_id, 1) ;?> " width="30px;" >   <br>
등기자 확인서명	: <img src="  <?= $view['wr_10']  ;?> " > <br><br>
	

--------------------------------------------------------------<br>
<b>
위 물건(작품)은 본 인증원의 규정에 따라 블록체인에 등록되었음을 증명합니다.<br><br>
서기 <?=date("Y 년 m 월 d 일");?> </br>

한국NFT공인인증원 (인)
</b> <br><br>


발급확인번호: <?="kn".date("HIYmdi-s").$view["wr_id"];?> <br>
발급일: <?=date("Y-m-d H:i:s");?> </br>

</body>

</html>