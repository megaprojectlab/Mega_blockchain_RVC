1.과거내역표시여부 :
<a href="https://kornft.org/pages/certi2/knca1.php?n=82&all=1&op=1&cp=1&rp=1">말소사항 포함</a>
<a href="https://kornft.org/pages/certi2/knca1.php?n=82&all=0&op=1&cp=1&rp=1">현재 유효사항</a> <br>
2.개인정보포함여부 : 
<a href="https://kornft.org/pages/certi2/knca1.php?n=82&all=1&op=1&cp=1&rp=1">포함</a>
<a href="https://kornft.org/pages/certi2/knca1.php?n=82&all=1&op=0&cp=0&rp=0">미포함</a> <br>
3. 테스트 : 
<a href="https://kornft.org/pages/certi2/knca1.php?n=81&op=0&all=1">권리설정없음</a>
<a href="https://kornft.org/pages/certi2/knca1.php?n=80&op=0&all=1">서류검증</a> 
<a href="https://kornft.org/pages/certi2/knca1.php?n=82&op=0&all=1">실사검증</a> 

<hr><br>


<?php

$wr_id = $_GET['n'];  //물건번호
$all = $_GET['all']; //0.현재사항 1.말소사항포함
$op = $_GET['op']; //0.소유권 개인정보 1.표시여부
$cp = $_GET['cp']; //0.저작권 개인정보 1.표시여부
$rp = $_GET['rp']; //0.권리제한 개인정보 1.표시여부


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

//권리제한 불러오기
$new1_info = select("g5_write_300_owner", "*", "owner_num=".$view['wr_id']." and option_type='newItem1' and state=1 limit 1");
if( isset($new1_info[0]) ){
	$data = $new1_info[0];
	$view['wr_51'] = $data['wr_51'];
	$view['wr_52'] = $data['wr_52'];
	$view['wr_53'] = $data['wr_53'];
	$view['wr_54'] = $data['wr_54'];
	$view['wr_55'] = $data['wr_55'];
	$view['wr_56'] = $data['wr_56'];
	$view['wr_57'] = $data['wr_57'];
	$view['wr_58'] = $data['wr_58'];
	$view['wr_59'] = $data['wr_59'];
	$view['wr_60'] = $data['wr_60'];
	$view['wr_61'] = $data['wr_61'];
	$view['wr_62'] = $data['wr_62'];
    $view['wr_63'] = $data['wr_owhash'];


	$block_info[2]['num'] = 3;
	$block_info[2]['show'] = '근저당설정';
	$block_info[2]['date'] = date("Y-m-d H:i", strtotime($data['regtime']));
	$block_info[2]['hash'] = $data['owhash'];
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

<b>블록체인 등기부 등본  <?php if($all==0){echo "(현재 유효사항)";} else{echo "(말소사항 포함)";} ?>  <br></b>


등기고유번호 : <?=$view['wr_11']; ?>  <br>
바코드	:  <!-- 등기고유번호의 바코드 --> 
<div id="bcTarget" style="height:20px;"></div>
<script> $("#bcTarget").barcode("<?=$view['wr_11']?>", "code128"); </script>                           


<br>
물건의 명칭	: <strong class="serif"> <?= $view['wr_subject'] ;?>  </strong> <br>
등기의 종류	: <?= $view['wr_12'] ;?> <br>
검증수준	: <?= $view['wr_30'] ;?> <br>
물건의 유형	: <?= $view['wr_13'] ;?> <br>
카테고리	: <?= $view['wr_14'] ;?> <br>
등록범위	: <?= $view['wr_46'] ;?> <br>
에디션번호	: <?= $view['wr_49'] ;?> <br>
전체발행수	: <?= $view['wr_48'] ;?> <br>

<br>	
프로토콜 : <?=$view['wr_42'] ;?> <br>
토큰ID	: <?=$view['wr_40'] ;?> <br>
스마트컨트렉트: <?=$view['wr_41'] ;?> <br>
IPFS링크 : <?=$view['wr_43'] ;?> <br>
블록체인 등록일	: <?=$view['wr_44'] ;?> <br>
블록체인해쉬값: <?=$view['wr_45'] ;?> <br>

<br>
대표이미지	: <img src="<?=get_file_thumbnail2($wr_id, 0) ;?> " width="150px;"> <br>
*부분이미지	: <img src="<?= get_file_thumbnail2($wr_id, 1) ;?> " width="30px;" > <br>
등기자 확인서명	: <img src="<?= $view['wr_10'];?> " > <br>
	
<br>
등기물건 개요	:<br> <?=$view['wr_content'] ;?> <br>
특성 및 사양	: <?=$view['wr_15'] ;?> <br>
물건 보관방식	: <?=$view['wr_16'] ;?> <br><br>
	
	

<br><br>

<b>소유권에 관한표시 </b>
       
<?php 
    $a=count($owners) ;
    if( $all !='1'){ $a=1;}  //1.말소사항포함 $op1.개인정보 ?>  
    <?php for($i=0; $i<$a;$i++): ?>   
    
    <div  <? if($i>0){echo "style='text-decoration-line: line-through; text-decoration-color: red;'"; }?> >
            순위	: <?=($i+1)?><br>
            소유권자: <? if($op !='0'){echo $view['wr_20'];} else { echo preg_replace('/(?<=.{1})./u','*',$view['wr_20']); } ?> <br>
            등기일	: <?=$view['wr_26'] ;?> <br>
                
            개인코드: <?=$view['wr_25'] ;?> <br>
            주소	: <? if($op !='0'){echo $view['wr_24'];} else { echo preg_replace('/(?<=.{12})./u','*',$view['wr_24']); } ?> <br>
            연락처	: <? if($op !='0'){echo $view['wr_23'];} else { echo substr($view['wr_23'],0,-4)."****"; }?>  <br>
            이메일	: <? if($op !='0'){echo $view['wr_22'];} else { echo substr($view['wr_22'],0,-4)."**"; }?>  <br>
            생년월일: <?  if($op !='0'){echo $view['wr_21'];} else { echo preg_replace('/(?<=.{5})./u','*',$view['wr_21']); } ?> <br>
            해쉬값	: <?= $view['wr_28'] ;?> <br>
            상태	: <? if($i == 0){echo "현재사항";} else {echo "변경";} ?> <br>
                -----------------
        </div>

   <?php endfor; ?>
    


<br><br>

<b>저작권에 관한표시 </b>
         
         <?php 
             $b=count($copyr) ;
             if( $all !='1'){ $b=1;}  //1.말소사항포함 $cp1.개인정보 ?>  
             <?php for($i=0; $i<$b;$i++): ?>   
             
             <div  <? if($i>0){echo "style='text-decoration-line: line-through; text-decoration-color: red;'"; }?> >
                     순위	: <?=($i+1)?><br>
                     저작권자: <? if($rp !='0'){echo $view['wr_31'];} else { echo preg_replace('/(?<=.{1})./u','*',$view['wr_31']); } ?> <br>
                     등기일	: <?=$view['wr_37'] ;?> <br> 
                     <?=substr($view['wr_37'],0,10) ;?>
                     <?=substr($view['wr_37'],-5) ;?>
                         
                     개인코드: <?=$view['wr_36'] ;?> <br>
                     주소	: <? if($rp !='0'){echo $view['wr_35'];} else { echo preg_replace('/(?<=.{12})./u','*',$view['wr_35']); } ?> <br>
                     연락처	: <? if($rp !='0'){echo $view['wr_34'];} else { echo substr($view['wr_34'],0,-4)."****"; }?>  <br>
                     이메일	: <? if($rp !='0'){echo $view['wr_33'];} else { echo substr($view['wr_33'],0,-4)."**"; }?>  <br>
                     생년월일: <?  if($rp !='0'){echo $view['wr_32'];} else { echo preg_replace('/(?<=.{5})./u','*',$view['wr_32']); } ?> <br>
                     해쉬값	: <?= $view['wr_39'] ;?> <br>
                     상태	: <? if($i == 0){echo "현재사항";} else {echo "변경";} ?> <br>
                         -----------------
                 </div>
         
            <?php endfor; ?>

            
<br><br>

<b>권리제한에 관한표시 </b><br>
         
         <?php 
          $b=count($new1); 
          if(!$b){
                 
             if( $all !='1'){ $b=1;}  //1.말소사항포함 $cp1.개인정보 ?>  
             <?php for($i=0; $i<$b;$i++): ?>   
             
             <div  <? if($i>0){echo "style='text-decoration-line: line-through; text-decoration-color: red;'"; }?> >
                     순위	: <?=($i+1)?><br>
                     등기원인	: <?=$view['wr_51'] ;?> <br>
                     설정일	: <?=$view['wr_52'] ;?> <br>

                     채권최고액	: <?=$view['wr_53'] ;?> <br>
                     설정근거	: <?=$view['wr_60'] ;?> <br>

                    채권자명() : <? if($cp !='0'){echo $view['wr_54'];} else { echo preg_replace('/(?<=.{1})./u','*',$view['wr_54']); } ?> <br>
                    (개인코드)	: <?=$view['wr_55'] ;?> <br>
                    채권자정보	: <? if($cp !='0'){echo $view['wr_56'];} else { echo preg_replace('/(?<=.{12})./u','*',$view['wr_56']); } ?> <br>
                    채무자명():  <? if($cp !='0'){echo $view['wr_57'];} else { echo preg_replace('/(?<=.{1})./u','*',$view['wr_57']); } ?> <br>
                    (개인코드)	: <?=$view['wr_58'] ;?> <br>
                    채무자정보	: <? if($cp !='0'){echo $view['wr_59'];} else { echo preg_replace('/(?<=.{12})./u','*',$view['wr_59']); } ?> <br>
                    기타설정사항 : <?=$view['wr_61'] ;?> <br>
                    설정해제일	: <?=$view['wr_62'] ;?> <br>
                    설정해쉬값	: <?=$view['wr_63'] ;?> <br>
                    
                         -----------------
                 </div>
            <?php endfor; ?>

            <?php } else {echo "권리제한 없음";}?>
<br><br>

<b>서류검증에 관한표시 </b> <br>
<?php      
 if($view['wr_12'] !="일반등기"){ ?>

순위 : 1 <br>
등기원인 :	서류검증 <br>
검증등록일	: <?= $view['wr_75'] ;?> <br>
신청자KYC확인 : <?= $view['wr_71'] ;?> <br>
등기물건확인(보증)서 : <?=$view['wr_72'] ;?> <br>
저작권확인서	: <?= $view['wr_73'] ;?> <br>
검증관련첨부자료	: <?=$view['wr_74'] ;?> <br>
검증해쉬값	: <?= $view['wr_76'] ;?> <br>


<?php } else {echo "해당내용이 없음 (신청자가 직접 검증 후 온라인 등록함";}?>

<br><br>


<b>실사검증에 관한표시 </b> <br>	
<?php      
 if($view['wr_12'] =="검증등기"){ ?>

순위	: 1 <br>
등기원인	: <?="실사검증" ;?> <br>
<span class="hrt cs8"> <?php if($view['wr_12']=="검증등기"){echo '실사검증';}else{echo'실사검증 없음';} ?>

검증등록일	: <?=$view['wr_93'] ;?> <br>
<?= substr($view['wr_93'],0,10) ;?> <?= substr($view['wr_93'],-5) ;?>
<br>
검증기관	: <?=$view['wr_88'] ;?> <br>
검증장소	: <?=$view['wr_81'] ;?> <br>
검증기간	: <?=$view['wr_87'] ;?>~ <?=$view['wr_93'] ;?>  <br>
검증위원	: <?=$view['wr_90'] ;?> <br>
검증해쉬값	: <?=$view['wr_94'] ;?> <br>
<br>
등기물건실체: 확인함 <br>
저작권	: 확인함 <br>
소유권	: 확인함 <br>
검증위원서명: <img src=' <?=$view['wr_9'] ;?>'> <br>


<?php } else {echo "해당내용이 없음";}?>

<br>

-------------- <br><br>

<b>블록체인 해쉬정보 등록 히스토리 </b> <br>	

순위	: <?=$block_info[0]['num'] ;?> <br>
등기원인	: <?=$block_info[0]['show'] ;?> <br>
등록일시	: <?=$block_info[0]['date'] ;?> <br>
해쉬값	: <?=$block_info[0]['hash']  ;?> <br>
	


<?php 

$new2 = select("g5_write_300_owner", "*", "state IN (1,2) and owner_num=".$view['wr_id']." order by regtime asc limit 100"); 

$option_type = $new2[$i]['option_type'];
if($i == 0){ $why='등기생성';}
if($option_type == 'owner'){ $why='소유권 변경';}
if($option_type == 'copyright'){ $why='저작권 변경';}
if($option_type == 'newItem1'){  $why= $view['wr_51']; }
 ?>
  
             <?php for($i=0; $i< count($new2);$i++): ?>   
            
             <div  <? if($i>0){echo "style='text-decoration-line: line-through; text-decoration-color: red;'"; }?> >
                     순위	: <?=($i+1)?><br>
                     등기원인 : <?= $why ;?> <br>
                     등기일	: <?= $view['wr_37'] ;?> <br>
                     해쉬값	: <?= $view['wr_39'] ;?> <br>

                    </div>
         
            <?php endfor; ?>


<br>

<hr>
발급확인번호: <?="kn".date("HIYmdi-s").$view["wr_id"];?> <br>
발급일: <?=date("Y-m-d H:i:s");?> </br><br>


<b>
위 증명서는 KNCA규정에 따라 등록된 등기기록 내용과 틀림없음을 증명합니다<br><br>
서기 <?=date("Y 년 m 월 d 일");?> </br>

한국NFT공인인증원 (인)
</b>


</body>

</html>