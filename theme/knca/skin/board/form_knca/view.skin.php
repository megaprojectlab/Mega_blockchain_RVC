<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');


// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/board.common.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/plugin/bxslider/jquery.bxslider.min.css">', 0);

/*
// 소유권 변경
owner_update(array(
	"owner_num"=>$view['wr_id'],
	"show_name"=>"ray",
	"email"=>"email@email.co",
	"dateOf"=>"20001212",
	"phone"=>"01012345678",
	"home_address"=>"tex teasdfnasdkfsajfdl",
	"wallet_address"=>"0xsadvioassadf568sadf6sadfsadf",
));

// 저작권 변경
owner_update(array(
	"owner_num"=>$view['wr_id'],
	"show_name"=>"ray2",
	"email"=>"email@email.co",
	"dateOf"=>"20001212",
	"phone"=>"010-1234-5678",
	"home_address"=>"tex2 teasdfnasdkfsajfdl",
	"wallet_address"=>"0x2sadvioassadf568sadf6sadfsadf",
), "copyright");
*/

$check = sql_fetch_all("select * from g5_member where mb_id='".$view['mb_id']."' ");
if(isset($check[0])){
	$view['wr_25'] = $check[0]['wallet_address'];
	$view['wr_36'] = $check[0]['wallet_address'];
}

// option_type에 따라 구분, owner,copyright, newItem1


//소유권 정보
$owner_info = sql_fetch_all("select * from g5_write_300_owner where owner_num=".$view['wr_id']." and option_type='owner' and state=1 limit 1");
if( isset($owner_info[0]) ){
	if(trim($data['show_name']) != '' ){
		$data = $owner_info[0];
		$view['wr_20'] = $data['show_name'];
		$view['wr_21'] = $data['dateOf'];
		$view['wr_22'] = $data['email'];
		$view['wr_23'] = $data['phone'];
		$view['wr_24'] = $data['home_address'];
		$view['wr_25'] = $data['wallet_address'];
		$view['wr_10'] = $data['sign_img'];
		$view['wr_28'] = $data['owhash'];
	}
}

//저작권 정보
$copyr_info = sql_fetch_all("select * from g5_write_300_owner where owner_num=".$view['wr_id']." and option_type='copyright' and state=1 limit 1");
if( isset($copyr_info[0]) ){

	if(trim($data['show_name']) != '' ){
	$data = $copyr_info[0];
	$view['wr_31'] = $data['show_name'];
	$view['wr_32'] = $data['dateOf'];
	$view['wr_33'] = $data['email'];
	$view['wr_34'] = $data['phone'];
	$view['wr_35'] = $data['home_address'];
	$view['wr_36'] = $data['wallet_address'];
	$view['wr_39'] = $data['owhash'];
	}
	
}

//제한물건 표시
$new1_info = sql_fetch_all("select * from g5_write_300_owner where owner_num=".$view['wr_id']." and option_type='newItem1' and state=1 limit 1");
if( isset($new1_info[0]) ){
	

	if(trim($data['wr_51']) != ''){
	

	$data = $new1_info[0];
	$view['wr_51'] = $data['wr_51']; //등기원인
	$view['wr_52'] = $data['wr_52']; //설정일
	$view['wr_53'] = $data['wr_53']; //채권액
	$view['wr_54'] = $data['wr_54']; //채권자이름
	$view['wr_55'] = $data['wr_55']; //채권자코드
	$view['wr_56'] = $data['wr_56'];  //채권자정보주소

	$view['wr_57'] = $data['wr_57'];  //채무자명
	$view['wr_58'] = $data['wr_58'];  //채무자코드
	$view['wr_59'] = $data['wr_59'];  //채무자정보
	$view['wr_60'] = $data['wr_60'];   //설정근거 :확인서
	$view['wr_61'] = $data['wr_61'];  //기타설정사항
	$view['wr_62'] = $data['wr_62'];  //설정해제일


	}
}



$payType = 0;
if($view['wr_12'] == '일반등기'){
	$payType = 1;
}
else if($view['wr_12'] == '확인등기'){
	$payType = 2;
}
else if($view['wr_12'] == '검증등기'){
	$payType = 3;
}


//print_r($view['file']);

if(!isset($view['file'][0])){
	$img_check =  sql_fetch_all("select * from g5_board_file where wr_id=".$view['wr_id']." limit 1");
	
	if(isset($img_check[0])){

		$view['file'] = array(
			"count"=>1,
			"0"=>array(
				"href"=>"https://kornft.org/bbs/download.php?bo_table=300&wr_id=".$view['wr_id']."&no=0",
				"download"=>0,
				"path"=>"https://kornft.org/data/file/300",
				"file"=>$img_check[0]['bf_file'],
				"view"=>'<a href="https://kornft.org/bbs/view_image.php?bo_table=300&amp;fn='.$img_check[0]['bf_file'].'" target="_blank" class="view_image"><img src="https://kornft.org/data/file/300/'.$img_check[0]['bf_file'].'" alt="" width="600" height="363" title=""></a>',
			),
		);
	
	}
}



?>


<style>
elltext{
    width:100px; 
    padding:0 5px; 
    overflow:hidden; 
    text-overflow:ellipsis; 
    white-space:nowrap;
}
</style>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>


<!-- 헤더에서 별도 설정 시작 ------------------------------>
<div id="page_title" class="sbtImg">
<div class="page_title_in">
    <h2> <strong class="">개별등기 열람</strong>
        <span class="titleBbar"></span> </h2>
</div>
</div>


<section id="ctWrap">      
	<div id="container">
                  

<!-- 헤더에서 별도설정 끝 1.명칭변경, 2.중간메뉴삭제, 3.글제목을 위로..  ------------------------>


<!-- 게시물 읽기 시작 { -->

<article id="bo_v" style="width:<?php echo $width; ?>">
    <header>
        <h2 id="bo_v_title">
            <?php if ($category_name) { ?>
            <span class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 ?></span> 
            <?php } ?>
            
            <div class="sm-none"><span class="btn-20 btn-gray p10">등기명칭</span>
            <span class="fs-24 bo_v_tit"><?php echo cut_str(get_text($view['wr_subject']), 70); ?></span></div>

            <div class="md-none"><span class="btn-15 btn-gray p10">등기명칭</span>
            <span class="fs-16 bo_v_tit"><?php echo cut_str(get_text($view['wr_subject']), 70); ?></div>

        </h2>
    </header>

    <section id="bo_v_info">
        <h2>페이지 정보</h2>
        <span class="sound_only">작성자</span> <strong><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></strong>
        <span class="sound_only">댓글</span><strong><a href="#bo_vc"> <i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo number_format($view['wr_comment']) ?>건</a></strong>
        <span class="sound_only">조회</span><strong><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view['wr_hit']) ?>회</strong>
        <strong class="if_date"><span class="sound_only">작성일</span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong>
    </section>

<!-- 상단 등기 제목표시 끝 -->


<div class="prodWrap">



<?php if($view['wr_6']=="등기완료" ||  $is_admin){  
    //1.접수완료 2.결제대기 3.서류심사 4. 실사검증, 5.등기완료////////////////////////////////////////진행상태표시 등기완료 후에 표시됨 ?>


     <!-- 좌측이미지 -->
	<div class="prod01">
         <div class="rect-gray mt30 mb30 ">등기물건의 이미지 </div>
		<?php if (isset($view['file'][1]['file']) && $view['file'][1]['file']) {?>
		<?php
		// 파일 출력 
        $v_img_count = count($view['file']);

        for($i=0;$i<$view['file']['count'];$i++){
            if ( @preg_match("/.mp4/i", $view['file'][$i]['file'])) {
                $view['file'][$i]['view'] = '
                    <video muted autoplay loop playsinline controls width="100%" height="100%" >
                    <source src="'.G5_URL."/data/file/".$bo_table."/".$view['file'][$i]['file'].'" type="video/mp4">
                    </video>
                ';
            }
        }

		if($v_img_count) {
			echo "<ul id='bigphoto'>\n";
			for ($i=0; $i<=3; $i++) {
				$image[$i] = G5_URL."/data/file/$bo_table/".$view['file'][$i]['file'];

				if ($view['file'][$i]['view']) {
				?>
					
                <?php

                    if(@preg_match("/.mp4/i", $view['file'][$i]['file'])){
                        echo '<video muted autoplay loop playsinline controls width="100%" height="100%" >
                        <source src="'.G5_URL."/data/file/".$bo_table."/".$view['file'][$i]['file'].'" type="video/mp4">
                        </video>';
                    }
                    else{
                        echo '<li><a><img src="'.$image[$i].'"  alt="'.$view['wr_subject'].'"></a></li>';
                    }
				}

			}
			echo "</ul>\n";
		}
		 ?>

		<?php
		// 파일 출력
		if($v_img_count) {
			echo "<div class='smallphoto'>\n";
			for ($i=0; $i<=3; $i++) {
				if (isset($view['file'][$i]['view']) && $view['file'][$i]['view']) {
                    if(@preg_match("/.mp4/i", $view['file'][$i]['file'])){
                        $image[$i] = 'https://cdn.icon-icons.com/icons2/317/PNG/512/file-video-icon_34427.png';
                    }
				?>
					<a data-slide-index="<?php echo $i?>" style="background-image:URL(<?php echo $image[$i]?>);"></a>
				<?php
				}
			}
			echo "</div>\n";
		}
		?>

		<?php } else if (isset($view['file'][0]['file']) && $view['file'][0]['file']) { 
			$image[0] = G5_URL."/data/file/$bo_table/".$view['file'][0]['file'];
			?>
			<ul class="bigphoto">

			<?/*
            <li><a><img src="<?=$image[0]?>"  alt="<?php echo $view['wr_subject']; ?>"></a></li>
*/?>


            <? //동영상출력
                if ( @preg_match("/.mp4/i", $view['file'][0]['file'])) {
                    echo '<li><video muted autoplay loop playsinline controls width="100%" height="100%"  autoplay="true" >';
                    echo '<source src="'.G5_URL."/data/file/".$bo_table."/".$view['file'][0]['file'].'" type="video/mp4">';
                    echo '</video></li>';
                }
                else{ //이미지출력
             ?>
				<li><a><img src="<?=$image[0]?>"  alt="<?php echo $view['wr_subject']; ?>"></a></li>
                <?  }       ?>


			</ul>
		<?php } else {?>
			<ul class="bigphoto">
				<li><a class="bigphotoNoimg"><img src="<?php echo G5_THEME_URL ?>/plugin/websiting/imageSpacer.php?w=100&h=100" alt="이미지 없음"><b>no image</b></a></li>
			</ul>
		<?php } ?>

		
		<script src="<?php echo G5_THEME_URL ?>/plugin/bxslider/jquery.bxslider.min.js"></script>
		<script>
			$('#bigphoto').bxSlider({
				useCSS: false,
				adaptiveHeight: true,
				pagerCustom: '.smallphoto',
				auto: false
			});
		</script>

         <div class="mt20 sm-none">
          <a class="btn btn-outline btn-14" href="#detail">등기내용 상세보기 </a> 
         </div>


    </div>
    <!-- 좌측이미지끝 -->


<? }  // 등기중표시-----------?> 
    
    <!-- 우측 등기개요 표시부분 -->
    <div class="prod02">
      <div class="rect-dark mt30 mb30 ">등기의 개요</div>

        <table class="table tablecss w-100" style="border-top:2px solid #454545">
		     <tr>
              <td style="width:30%; background: #f1f1f1;">등기번호</td>
              <td style="color:red"><?php echo $view['wr_11']?> </td>
            </tr>
            <tr>
              <td style="background: #f1f1f1;"> 등기종류</td>
           
              <td style="height:60px; valign:middle">
              
            <?php if($view['wr_12']=='일반등기'){ 
                echo "<span class='btn-14 bg-dark'>".$view['wr_12']."</span>";               
                echo "<div class='mt5'> <span class='border-b2 text-blue'>신청자가 직접 확인,검증한후 등기</span></div>";
                } 
            ?>
            <?php if($view['wr_12']=='확인등기'){
                echo "<span class='btn-14 bg-blue'>".$view['wr_12']."</span>";               
                echo "<div class='mt5'> <span class='border-b2 text-blue'>관련 서류를 제출받아 KNCA에서 확인후 등기</span></div>";
                } 
            ?>
            <?php if($view['wr_12']=='검증등기'){
                echo "<span class='btn-14 bg-red'>".$view['wr_12']."</span>";               
                echo "<div class='mt5'> <span class='border-b2 text-blue'>KNCA에서 직접 실사,방문을 통해 검증한후 등기</span></div>";
                } 
            ?>
            </td>
            </tr>

          <tr>
          <td style="background: #f1f1f1;">물건의 유형</td>
          <td class="dbon2"><?php echo $view['wr_13']?></td>
         </tr>
         <tr>
          <td style="background: #f1f1f1;">카테코리</td>
          <td class="dbon2"><?php echo $view['wr_14']?></td>
         </tr>

         <tr>
         <td style="background: #f1f1f1;">등기범위</td>  
         <td class="dbon2 text-blue"><?php echo $view['wr_46']?></td>
         </tr>

         <?php if($view['wr_46']=="분할등기(부분등기)") {  ?>
         
         <tr>
         <td style="background: #f1f1f1;">에디션번호</td>
         <td class="text-blue"><?php echo '#'. number_format($view['wr_49']).'   /  ( 전체발행수: '. number_format($view['wr_48']).')' ?></td>
         </tr>
         <?php  } ?>
        


<?php if($view['wr_6']=="등기완료" ||  $is_admin){  
    //1.접수완료 2.결제대기 3.서류심사 4. 실사검증, 5.등기완료////////////////////////////////////////진행상태표시 등기완료 후에 표시됨 ?>

         <tr>
         <td style="background: #f1f1f1; ">블록체인 프로토콜</td>
         <td class="text-danger"><?php echo $view['wr_42']?> <?php if(!$view['wr_42']){ echo "BEP-721(Binance Smart Chain)";} ?> </td>
         </tr>
         <tr>
         <td style="background: #f1f1f1;">NFT 토큰ID</td>
         <td class="text-danger"><?php echo $view['wr_40']?></td>
         </tr>
         <tr>

         <td style="background: #f1f1f1;">NFT 스마트컨트렉트</td>
         <td class="text-danger"><span class="hash-tag w200"> <?php echo $view['wr_41']?></span></td>
         </tr>
         <tr>
       
         <tr>
         <td style="background: #f1f1f1;">블록체인 등록일</td> 
         <td class="text-danger"><?php echo $view['wr_44']?></td>
         </tr>

         <tr>
         <td style="background: #f1f1f1;">소유권자</td>
         <td style=""><?php echo $view['wr_20']?>
         <br> <div class="hash-tag"><?=$view['wr_25']?></div></td>
         </tr>
         <tr>
         <td style="background: #f1f1f1;">저작권자</td>
         <td style=""><?php echo $view['wr_31']?> <br> <div class="hash-tag"><?=$view['wr_36']?></div></td>
         </tr>

         <tr>
         <td style="background: #f1f1f1;">권리제한</td>
         <td class="text-danger"><?php echo $view['wr_50'] ?>
         <?php if($view['wr_50'] == "권리제한 있음"){
          echo "<a class='btn btn-xs btn-outline' href='#right_jehan'> 권리제한 보기</a>";
          }?>
            </td>
         </tr>

          <? //if($view['qr_show'] == 'yes'): ?>
         <tr>
         <td style="background: #f1f1f1;">QR Code</td>
         <td style=""><img src="https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=https://kornft.org/300/<?=$view['wr_id']?>" style="width : 200px; height:200px;"></td>
         </tr>
         <? //endif; ?>

        </table>
    </div>   

</div>


<ul class="bo_v_com sm-none">
        <li><a href="<?php echo $list_href ?>" class="btn_b03 btn"><i class="fa fa-list" aria-hidden="true"></i> 등기목록</a></li>

       
         <?if($is_member){ ?>
         <li><a href="/pages/bon0/certi_new.php?wr_id=<?=$wr_id?>" class="btn_b02 btn"><i class="fa fa-list" aria-hidden="true"></i> NFT등록증명서 열람</a></li>
      <?} else { ?>
        <a href="/bbs/login.php" onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn"><i class="fa fa-list" aria-hidden="true"></i> NFT 등록증명서 열람 </a>
         <?}?>
         
         <?if($is_member){ ?>
         <li><a href="/pages/bon1/certi_history.php?wr_id=<?=$wr_id?>" class="ml10 btn_b02 btn bg-red"><i class="fa fa-list" aria-hidden="true"></i> NFT 등기부등본 열람</a></li>
      <?} else { ?>
        <a href="/bbs/login.php" onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn bg-red"><i class="fa fa-list" aria-hidden="true"></i>  NFT 등기부등본 열람</a>
         <?}?>
   </li>
   
  
            <?php if ($is_admin) { ?><li><a href="<?php echo $write_href ?>" class="btn_b03 btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } ?>
</ul>


<!-- 등기부 상세내역 -->
<div id="detail" class="flex-center"><div class="line-5 bg-red"></div></div>

<h2 class="h2_title_center fw-700">
		등기부등본 상세내역<br>
        <small class="text-gray" >KNCA NFT Registration in Detail</small>	</h2>
    
        <!-- 바코드 -->
    <div>
 <script type="text/javascript" src="./jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="./jquery-barcode.js"></script>

    <div id="bcTarget1" style="margin-top:0px;"></div>
    <script type="text/javascript">
    $("#bcTarget1").barcode("  <?=$view['wr_11']?>   ", "code128");</script> 
    </div>

  
        

<p class="cont_text_info text-red bg-gray1">본 등기부 등본내용은 블록체인에 등록된 NFT정보를 위변조 없이 복호화하여 표시합니다.</p>

<!--01. 표제부 표시 -->        
<div id="detail_cover" class="rect-gray title-16" > 등기물건의 표시 [표제부] </div>

<table class="tablecss mt10 border-tb2 w-100" >  
         <tr>
              <td style="width:30%; background: #f1f1f1;">등기번호</td>
           
              <td style="color:red"><?php echo $view['wr_11']?> </td>
            </tr>

            <tr>
          <td style="background: #f1f1f1;">등기명칭</td>
          <td><div class="h3_tl"><?php echo $view['wr_subject'];?></div></td>
         </tr>

         <tr>
              <td style="background: #f1f1f1;"> 등기종류</td>
              <td style="height:65px; valign:middle">

            <?php if($view['wr_12']=='일반등기'){ 
                echo "<span class='rect-dark'>".$view['wr_12']."</span>";               
                echo "<span class='mt5 spanblock'> <span class='border-b2 text-blue'>신청자가 직접 확인,검증한후 등기</span></span>";
                } 
            ?>
            <?php if($view['wr_12']=='확인등기'){
                echo "<span class='rect-blue'>".$view['wr_12']."</span>";               
                echo "<span class='mt5 spanblock'> <span class='border-b2 text-blue'>관련 서류를 제출받아 KNCA에서 확인후 등기</span></span>";
                } 
            ?>
            <?php if($view['wr_12']=='검증등기'){
                echo "<span class='rect-red'>".$view['wr_12']."</span>";               
                echo "<span class='mt5 spanblock'> <span class='border-b2 text-blue'>KNCA에서 직접 실사,방문을 통해 검증한후 등기</span></span>";
                } 
            ?>
            </td>
         </tr>

         <tr>
         <td style="background: #f1f1f1;">등기자 서명</td>  <!--0.신청자 개인검증/ 1.KNCA서류검증 / 2.KNCA실사검증 -->
         <td class="dbon2">
         <?php if($view['wr_10']) { ?>
            <img src="<?php echo $view['wr_10']?>">
        <?php } ?>
       
        </td>
         </tr>

    </table>
    
    

   <div class="title-15 text-left mt30 text-black"> 
       <i class="fa fa-link mr10"></i>블록체인 등록사항 

	   <?php if($is_admin) { ?>
			<a class="btn btn-xs outline bg-white" href="/customPage/nft_mint.php?n=<?=$view['wr_id']?>" style="color:#566892;">NFT 생성</a> 
		<?php } ?>

    </div>   
         
  <table class="tablecss mt10 border-tb2 w-100">
         <tr>
         <td style="width:30%; background:#f1f1f1;">블록체인 프로토콜</td>
         <td style="text-align:left;padding-left:15px; color:darkred"><?php echo $view['wr_42']?> <?php if(!$view['wr_42']){ echo "BEP-20 (Binance Smart Chain)";} ?> </td>
         </tr>
         <tr>
         <td style="background: #f1f1f1;">토큰ID</td>
         <td style=""><?php echo $view['wr_40']?></td>
         </tr>
         <tr>
         <td style="background: #f1f1f1;">스마트컨트렉트</td>
         <td><span class="hash-tag"><?php echo $view['wr_41']?></span></td>
         </tr>
         <tr>
         <td style="background: #f1f1f1;">IPFS링크</td>
         <td style=""><span class="hash-tag"> <a href="<?=$view['wr_43']?>" target="_blank"><?php echo $view['wr_43']?></a> </span></td>
         </tr>
         <tr>
         <td style="background: #f1f1f1;">블록체인 등록일</td>
         <td style=""><?php echo $view['wr_44']?></td>
         </tr>
         <tr>
         <td style="background: #f1f1f1;">블록체인해쉬값</td>
         <td style=""><span class="hash-tag"><?php echo $view['wr_45']?></span></td>
         </tr>

  </table>





  <div class="title-15 text-left mt30 text-black h7_tl"> 등기물건의 표시 </div>
    <table class="tablecss mt10 border-tb2 w-100">  
          <tr>
          <td style="width:30%; background: #f1f1f2;">물건의 유형</td>
          <td style=""><?php echo $view['wr_13']?></td>
         </tr>
         <tr>
          <td style="background: #f1f1f1;">카테코리</td>
          <td style=""><?php echo $view['wr_14']?></td>
         </tr>


         <tr>
          <td style="vertical-align:top; padding-top:20px; background: #f1f1f1;">대표 이미지</td>
         
          <td style="align:center;">
          
                <div class="row ">
                     <div class="col-sm-12 col-md-6">
                      
             <?php          // 파일 출력
                echo "<div class='w-100' id=\"bo_v_img\">\n";
                echo get_file_thumbnail($view['file'][0]);
                echo "</div>\n";
                ?>
                     </div>
                     <div class="col-sm-12 col-md-6">

                        <div class="row flex-x-start">
                          <div class="col-sm-4 p5"> 
             <?php          // 파일 출력
                echo "<div class='' id=\"bo_v_img\">\n";
                echo get_file_thumbnail($view['file'][1]);
                echo "</div>\n";
                ?></div>
                          <div class="col-sm-4 p5">
                         
             <?php          // 파일 출력
                echo "<div class='' id=\"bo_v_img\">\n";
                echo get_file_thumbnail($view['file'][2]);
                echo "</div>\n";
                ?>
                          </div>
                          <div class="col-sm-4 p5">
                    
             <?php          // 파일 출력
                echo "<div class='' id=\"bo_v_img\">\n";
                echo get_file_thumbnail($view['file'][3]);
                echo "</div>\n";
                ?>
                          </div>
                       </div>

                        </div>
                        
                    </div>
        </td>
         </tr>

         <tr>
         <td style="vertical-align: top; padding:20px;  background: #f1f1f1;">등기물건 내용 및 스토리</td>
         <td style=""> 
        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->       
        </td>
         </tr>

         <tr>
          <td style="background: #f1f1f1;">특성 및 사양</td>
          <td style=""><?php echo nl2br($view['wr_15'])?></td>
         </tr>

         <tr>
          <td style="background: #f1f1f1;">등기물건 보관장소</td>
          <td style=""><?php echo $view['wr_16']?></td>
         </tr>



</table>


 <!--등기물건 상세내역 표시-->
<div class="border-b2 mt50 mb100">
<div class="rect-gray title-16"  data-bs-toggle="collapse" data-bs-target="#detail_added" aria-expanded="false" aria-controls="detail_added" > 
    등기물건의 상세내역 표시 <small class="ml30 fw-100">클릭</small><i class="fa fa-chevron-down ml5"></i> 
</div>

<div class="collapse p20 outline border-tb2" id="detail_added">

<div class="row">
    <div class="col-md-3 fs-16 text-blue mb20"><span class=" h6_tl"> 상세설명 및 스토리</span></div>
    <div class="col-md-9 pb20">
    <?php if($view['wr_17']) {?>      
    <?php echo get_view_thumbnail($view['wr_17']); ?>
    <?php } else {
        echo "등록된 내용이 없습니다.";
    }?>
    </div>
</div>



<div class="row">
<div class="col-md-3 fs-16 text-blue mb20"><span class=" h6_tl">참조링크(유튜브,영상,기타링크)</span></div>
    <div class="col-md-9 pb20">
    
    <?php
        // 링크
            if ($view['link'][1]) {
                $link = cut_str($view['link'][1], 60);
            ?>
          
                <a href="<?php echo $view['link_href'][1] ?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i>                     
                    <strong class="text-blue"><?php echo $link ?></strong>
                </a>
                <span class="bo_v_link_cnt text-blue"><?php echo $view['link_hit'][1] ?>회 연결</span>
          
          
          <div class="mt20 border-1">
   
    <!-- 유튜브영상출력 [1]이부분을 바꿔야 함 -->
            <?php
					$youtubeID[1] = $view['link'][1]; 
					$youtubeID[1] = explode('/',$youtubeID[1]); 
					if($youtubeID[1][2] == "youtu.be") {
				?>
				<div class="youtube_area"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $youtubeID[1][3]; ?>" frameborder="0" allowfullscreen></iframe></div>
			<?php } ?>
        </div>

   <?php } else {
        echo "등록된 내용이 없습니다.";
    }?>

     </div>
</div>


</div>
   
</div>  <!--end 물건표시 -->





<!-- 소유권 변동에 대한 표시 -->        
<div id="owner" class="rect-dark title-16"> 소유권자 및 저작권에 대한 표시 </div>

<div class="title-16 fw-900 h7_tl mt30 text-black"> 소유권자 </div>
<table class="tablecss w-100" style="border-top:3px solid #454545">  
      <tr>
         <td style="width:30%; background: #f1f1f1;">소유권자(현재)</td>
         <td style="">  <?php if($view['wr_27'] != '1'){
          echo $view['wr_20'] ;} else {        
          echo preg_replace('/(?<=.{1})./u','*',$view['wr_20']); } ?>          
        </td>
      </tr>
      <tr>
         <td style="background: #f1f1f1;">개인코드(Wallet)</td>
         <td><span class='hash-tag'><?php echo $view['wr_25'] ?></span></td>
      </tr>
    
      <tr>
         <td style="background: #f1f1f1;">생년월일</td>
         <td style="">  <?php if($view['wr_27'] != '1'){
          echo $view['wr_21'] ;} else {        
          echo preg_replace('/(?<=.{5})./u','*',$view['wr_21']); } ?>          
        </td>
      </tr>

      <tr>
         <td style="background: #f1f1f1;">주소</td>
         <td style="">  <?php if($view['wr_27'] != '1'){
          echo $view['wr_24'] ;} else {        
          echo preg_replace('/(?<=.{12})./u','*',$view['wr_24']); } ?>          
        </td>
      </tr>
      <tr>
         <td style="background: #f1f1f1;">이메일</td>
         <td style="">  <?php if($view['wr_27'] != '1'){
          echo $view['wr_22'] ;} else {        
          echo mb_substr($view['wr_22'], 0, -4).'**'; } ?>          
        </td>
      </tr>
      <tr>
         <td style="background: #f1f1f1;">연락처</td>
         <td style="">  <?php if($view['wr_27'] != '1'){
          echo $view['wr_23'] ;} else {      
          echo substr($view['wr_23'],0,-4)."****"; }?>          
        </td>
      </tr>

      <tr>
         <td style="background: #f1f1f1;">소유권자 서명</td> 
         <td style="">
         <?php if($view['wr_10']) { ?>
           
            <img src="<?php echo $view['wr_10']?>">
        <?php } ?>     
        </td>         
      </tr>
      <tr>
         <td style="background: #f1f1f1;">등록일</td>
         <td style=""><?php echo $view['wr_26'] ?></td>
      </tr>
      <tr>
         <td style="background: #f1f1f1;">소유권 해쉬값</td>
         <td><span class="hash-tag"><?php echo $view['wr_28'] ?></span></td>
      </tr>
</table>

<?php 
$owners = sql_fetch_all("select * from g5_write_300_owner where state IN (1,2) and option_type='owner' and owner_num=".$view['wr_id']." order by regtime desc limit 100"); 
?>

<?php if( count($owners) <= 1 ): ?>
<div class="btn btn-outline fs-14 mt20 fw-700">소유권 변동내역 표시 : <span class="text-danger fw-700 ml10"> 없음 </span>  </div>

<?php if($is_admin) { ?>
    <a class="btn btn-xs outline bg-white" href="/customPage/edit_owner.php?n=<?=$view['wr_id']?>" style="color:#566892;">소유권 변경 신청</a> 
<?php } ?>

<?php else: ?>
<div class="btn btn-outline fs-14 mt20 fw-700"  data-bs-toggle="collapse" data-bs-target="#owner_change" aria-expanded="false" aria-controls="owner_change" > 
        소유권 변동내역 표시 : <span class="text-danger fw-700 ml10"> 있음 </span> <small class="ml30 fw-300"> 자세히보기>클릭</small><i class="fa fa-chevron-down ml5"></i> 
    </div>
       
        <?php if($is_admin) { ?>
    <a class="btn btn-xs outline bg-white" href="/customPage/edit_owner.php?n=<?=$view['wr_id']?>" style="color:#566892;">소유권 변경 신청</a> 
        <?php } ?>


    <div class="collapse border-tb2" id="owner_change">

    <?/*소유권변경내역 : Pc버전일경우 =>표로 표시 */?>
        <div class="basic_table sm-none">
        <table class="w-100">
                    <colgroup>
                        <col style="width:10%;">
                        <col style="width:15%;">
                        <col style="width:15%;">
                        <col style="width:50%;">
                        <col style="width:10%;">
                    </colgroup>
                    
                        <tr>
                            <th>순번</th>
                            <th>성명</th>
                            <th>변경 등기일</th>
                            <th>식별정보</th>
                            <th>비고</th>
                        </tr>
                        
                        <?php for($i=0;$i<count($owners);$i++): ?>
                        <?php $data = $owners[$i]; $show_can = $data['state'] == 1 ? '' :'cancel'; ?>

                        <tr style="font-weight:400;">
                            <th><?=($i+1)?></th>
                            <td class="center <?=$show_can?>"><?=$data['show_name']?></td>
                            <td class="center <?=$show_can?>"><?=$data['regtime']?></td>
                            <td class="<?=$show_can?>">
                            *개인코드 : <span class="hash-tag"><?=$data['wallet_address']?></span> <br>
                            *주소 :<?=$data['home_address']?><br> *연락처 : <?=$data['phone']?> <br> *이메일 : <?=$data['email']?> <br> *생년월일 :<?=$data['dateOf']?> <p style="display : flex;"> Hash :<span class="hash-tag"><?=$data['owhash']?></span> </p>
                            </td>
                            <td class="center <?=$show_can?>">
                                <?=$data['state'] == 1 ? '현재사항' : '변경' ?>
                            </td>
                        </tr>
                        <?php endfor; ?>
            </table>
        </div>

   <?/*소유권변경내역 : 모바일은 세로로 div로 표시 */?>
   <div class="md-none fw-300">
                       
        <?php for($i=0;$i<count($owners);$i++): ?>
        <?php $data = $owners[$i]; $show_can = $data['state'] == 1 ? '' :'cancel'; ?>
      
            <div class="border-b1 mt20 py10"><span class="btn-15 bg-dark fw-700">순번</span> <span class="ml20 fw-900"><?=($i+1)?></span></div>
            <div class="border-b1 py-5"><span class="fw-700 mr10">변경등기일 : </span> <span class="<?=$show_can?>"><?=$data['regtime']?></div>
            <div class="border-b1 py-5"><span class="fw-700">소유자 식별정보 </span></div> 
            
            <div class="<?=$show_can?>">         
            <div class="pt10"><span class="fw-500 ml20 mr10">● 성  명 : </span><?=$data['show_name']?></div>
            <div class="flex-y-center"><span class="fw-500 ml20 mr10">● 개인코드 :</span><span class="hash-tag"><?=$data['wallet_address']?></span> </div>
            <div><span class="fw-500 ml20 mr10">● 주  소 :</span><?=$data['home_address']?></div>
            <div><span class="fw-500 ml20 mr10">● 연락처 :</span> <?=$data['phone']?></div>
            <div><span class="fw-500 ml20 mr10">● 이메일 :</span> <?=$data['email']?> </div>
            <div><span class="fw-500 ml20 mr10">● 생년월일 :</span><?=$data['dateOf']?></div>
            <div class="flex-y-center"><span class="fw-500 ml20 mr10">● 등기Hash :</span><span class="hash-tag"><?=$data['owhash']?></span></div>
            </div>

            <div class="mt10 py-10 border-t1"><span class="fw-700 mr20">등기상태:</span> <span class="fw-500 text-red"><?=$data['state'] == 1 ? '현재사항' : '변경' ?>  </span></div>
   
        <?php endfor; ?>

      </div>

    </div>
<?php endif; ?>


<div class="title-16 h7_tl mt50 text-black fw-900"> 저작권자 </div>
<table class="tablecss w-100" style="border-top:3px solid #454545">  

       <tr>
         <td style="background: #f1f1f1;">저작권자 검증방식</td>  <!--0.신청자 개인검증/ 1.KNCA서류검증 / 2.KNCA실사검증 -->
         <td style="color:red"><?php echo $view['wr_70'] ?></td>      
      </tr>

      <tr>
         <td style="width:30%; background: #f1f1f1;">저작권자(현재)</td>
         <td style="">  <?php if($view['wr_38'] != '1'){
          echo $view['wr_31'] ;} else {        
          echo preg_replace('/(?<=.{1})./u','*',$view['wr_31']); } ?>          
        </td>
      </tr>
      <tr>
         <td style="background: #f1f1f1;">개인코드(Wallet)</td>
         <td><span class="hash-tag"><?php echo $view['wr_36'] ?></span></td>
      </tr>
    
      <tr>
         <td style="background: #f1f1f1;">생년월일</td>
         <td style="">  <?php if($view['wr_38'] != '1'){
          echo $view['wr_32'] ;} else {        
          echo preg_replace('/(?<=.{5})./u','*',$view['wr_32']); } ?>          
        </td>
      </tr>

      <tr>
         <td style="background: #f1f1f1;">주소</td>
         <td style="">  <?php if($view['wr_38'] != '1'){
          echo $view['wr_35'] ;} else {        
          echo preg_replace('/(?<=.{12})./u','*',$view['wr_35']); } ?>          
        </td>
      </tr>
      <tr>
         <td style="background: #f1f1f1;">이메일</td>
         <td style="">  <?php if($view['wr_38'] != '1'){
          echo $view['wr_33'] ;} else {        
          echo mb_substr($view['wr_33'], 0, -4).'**'; } ?>          
        </td>
      </tr>
      <tr>
         <td style="background: #f1f1f1;">연락처</td>
         <td style="">  <?php if($view['wr_38'] != '1'){
          echo $view['wr_34'] ;} else {      
          echo substr($view['wr_34'],0,-4)."****"; }?>          
        </td>
      </tr>
      <tr>
         <td style="background: #f1f1f1;">등록일</td>
         <td style=""><?php echo $view['wr_37'] ?></td>
      </tr>
      <tr>
         <td style="background: #f1f1f1;">저작권 해쉬값</td>
         <td><span class="hash-tag"><?php echo $view['wr_39'] ?></span></td>
      </tr>

</table>

<?php 
$copyr = sql_fetch_all("select * from g5_write_300_owner where state IN (1,2) and option_type='copyright' and owner_num=".$view['wr_id']." order by regtime desc limit 100"); 
?>

<?php if( count($copyr) <= 1 ): ?>
<div class="btn btn-outline fs-14 mt20 fw-700">저작권 변동내역 표시 : <span class="text-danger fw-700 ml10"> 없음 </span>  </div>

<?php if($is_admin) { ?>
    <a class="btn btn-xs outline bg-white" href="/customPage/edit_owner.php?n=<?=$view['wr_id']?>&t=copyright" style="color:#566892;">저작권 변경 신청</a>  <?php } ?>

<?php else: ?>

 <div class="btn btn-outline fs-14 mt20"  data-bs-toggle="collapse" data-bs-target="#copywriter_change" aria-expanded="false" aria-controls="copywriter_change" > 
        저작권 변동내역 표시 : <span class="text-danger fw-700 ml10  fw-700"> 있음 </span> <small class="ml30 fw-300"> 자세히보기>클릭</small><i class="fa fa-chevron-down ml5"></i> 
    </div>
       
    <?php if($is_admin) { ?>
    <a class="btn btn-xs outline bg-white" href="/customPage/edit_owner.php?n=<?=$view['wr_id']?>&t=copyright" style="color:#566892;">저작권 변경 신청</a>  <?php } ?>

    <div class="collapse border-tb2" id="copywriter_change">

       <? /* PC버전*/?>
        <div class="basic_table sm-none">
                <table>
                    <colgroup>
                        <col style="width:10%;">
                        <col style="width:15%;">
                        <col style="width:15%;">
                        <col style="width:50%;">
                        <col style="width:10%;">
                    </colgroup>
                    
                        <tr>
                            <th>순번</th>
                            <th>성명</th>
                            <th>변경 등기일</th>
                            <th>식별정보</th>
                            <th>비고</th>
                        </tr>
                
                        <?php for($i=0;$i<count($copyr);$i++): ?>
                        <?php $data = $copyr[$i]; $show_can = $data['state'] == 1 ? '' :'cancel'; ?>
                        <tr style="font-weight:400;">
                            <th><?=($i+1)?></th>
                            <td class="center <?=$show_can?>"><?=$data['show_name']?></td>
                            <td class="center <?=$show_can?>"><?=$data['regtime']?></td>
                            <td class="<?=$show_can?>">

                            *개인코드 : <?=$data['wallet_address']?> <br>
                            *주소 :<?=$data['home_address']?><br> *연락처 : <?=$data['phone']?> <br> *이메일 : <?=$data['email']?> <br> *생년월일 :<?=$data['dateOf']?> <p style="display : flex;"> Hash :<span class="hash-tag"><?=$data['owhash']?></span> </p>
                            </td>
                            <td class="center <?=$show_can?>">
                                <?=$data['state'] == 1 ? '현재사항' : '변경' ?>
                            </td>

                        </tr>
                        <?php endfor; ?>

                </table>
        </div>
 
      <?/*모바일버전은 세로로 div로 표시 */?>
        <div class="md-none fw-300">
                                
            <?php for($i=0;$i<count($copyr);$i++): ?>
            <?php $data = $copyr[$i]; $show_can = $data['state'] == 1 ? '' :'cancel'; ?>
                         
            <div class="border-b1 mt20 py10"><span class="btn-15 bg-dark fw-700">순번</span> <span class="ml20 fw-900"><?=($i+1)?></span></div>
            <div class="border-b1 py-5"><span class="fw-700 mr10">변경등기일 : </span> <span class="<?=$show_can?>"><?=$data['regtime']?></span></div>
            <div class="border-b1 py-5"><span class="fw-700">저작자 식별정보 </span></div>     
             
            <div class="<?=$show_can?>">
            <div class="pt10"><span class="fw-500 ml20 mr10">● 성  명 : </span><?=$data['show_name']?></div>
            <div class="flex-y-center"><span class="fw-500 ml20 mr10">● 개인코드 :</span><span class="hash-tag"><?=$data['wallet_address']?></span> </div>
            <div><span class="fw-500 ml20 mr10">● 주  소 :</span><?=$data['home_address']?></div>
            <div><span class="fw-500 ml20 mr10">● 연락처 :</span> <?=$data['phone']?></div>
            <div><span class="fw-500 ml20 mr10">● 이메일 :</span> <?=$data['email']?> </div>
            <div><span class="fw-500 ml20 mr10">● 생년월일 :</span><?=$data['dateOf']?></div>
            <div class="flex-y-center"><span class="fw-500 ml20 mr10">● 등기Hash :</span><span class="hash-tag"><?=$data['owhash']?></span></div>
            </div>

            <div class="mt10 py-10 border-t1"><span class="fw-700 mr20">등기상태:</span> <span class="fw-500 text-red"><?=$data['state'] == 1 ? '현재사항' : '변경' ?>  </span></div>
   
            <?php endfor; ?>

        </div>

   </div>

<?php endif; ?>




<!-- 권리제한에 대한 표시----------------------- -->        
<div id="right_jehan" class="rect-red title-16 mt80" > 권리제한(담보,근저당,압류등)에 대한 표시 </div>

<div class="title-16 h7_tl mt30 text-black fw-900 mb20"> 현재 설정된 권리제한 : <strong class='text-red'><?=$view['wr_50']?> </strong> </div>

 <?php if($view['wr_50']=='권리제한 있음'){ ?>

   <?/*PC버전*/?>
   <div class="basic_table sm-none">
        <table>
            <colgroup>
                <col style="width:10%;">
                <col style="width:15%;">
                <col style="width:15%;">
                <col style="width:60%;">
            </colgroup>
            
            <tr>
                <th>순번</th>
                <th>등기원인</th>
                <th>설정일</th>
                <th>권리자 및 기타사항</th>
            </tr>

            <tr style="font-weight:400;">
                <td class="bg-gray1 text-center"> 1 </td>
                <td> <?php echo $view['wr_51'] ?>  </td>
                <td> <?php echo $view['wr_52'] ?>  </td>
                <td> 
                <i class="fa fa-caret-right mr5"></i>채권최고액 : 금 <?php echo number_format($view['wr_53'])?>원<br>  
                <i class="fa fa-caret-right mr5"></i>설정근거 : <?php echo $view['wr_60']?> <br><br>

                <i class="fa fa-caret-right mr5"></i>채권자명(개인코드) : <?php echo $view['wr_54'].' ('.$view['wr_55'].')'; ?> <br>  
                <i class="fa fa-caret-right mr5"></i>채권자정보 : <?php echo $view['wr_56']?> <br><br>
                    
                <i class="fa fa-caret-right mr5"></i>채무자명(개인코드) : <?php echo $view['wr_57'].' ('.$view['wr_58'].')'; ?> <br>  
                <i class="fa fa-caret-right mr5"></i>채무자정보 : <?php echo $view['wr_59']?> <br><br>
                    
                <i class="fa fa-caret-right mr5"></i>기타 설정사항 : <?php echo $view['wr_61']?> <br><br>

                <span class="hash-tag"><i class="fa fa-caret-right mr5"></i>설정 해쉬값 : <?php echo $view['wr_63']?></span><br>

                <i class="fa fa-caret-right mr5"></i>설정해제(말소)일 : <?php echo ($view['wr_62']) ? $view['wr_62'] : "<span class='fw-900 text-red'>설정중</span>" ?> <br>
                </td>
            </tr>
        </table>
   </div>

   <?/*모바일버전*/?>
   <div class="md-none">      

        <div class="border-t2 border-b2">
            <div class="mt20 py-5 "><span class="fw-700 mr20">순번<span> <span class="ml20 fw-900 btn-12 bg-gray"> 1 </span> </div>
            <div class="border-t1 py-5 "><span class="fw-700 mr20">등기원인 : <span><span class=""> <?=$view['wr_51']?> </span></div>
            <div class="border-t1 py-5 "><span class="fw-700 mr20">설정일 : <span><span class=""> <?=$view['wr_52']?> </span></div>
            
            <div class="border-t1 border-b1 py-5 "><span class="fw-700">권리자 및 기타사항</div>
            <div class="border-b2 fw-300  "> 
                <div><span class="fw-600">
                <i class="fa fa-caret-right mr5"></i>채권최고액 :</span> 금 <?=number_format($view['wr_53'])?>원</div>  
                <div><span class="fw-600">
                <i class="fa fa-caret-right mr5"></i>설정근거 :</span> <?=$view['wr_60']?> </div>
                <div><span class="fw-600">
                <i class="fa fa-caret-right mr5"></i>채권자명(개인코드) :</span> <span class="hash-tag"><?=$view['wr_54'].' ('.$view['wr_55'].')'?></span> </div>
                <div><span class="fw-600">
                <i class="fa fa-caret-right mr5"></i>채권자정보 :</span> <?=$view['wr_56']?> </div>
                <div><span class="fw-600">    
                <i class="fa fa-caret-right mr5"></i>채무자명(개인코드) :</span> <span class="hash-tag"><?=$view['wr_57'].' ('.$view['wr_58'].')'?></span> </div>  
                <div><span class="fw-600">
                <i class="fa fa-caret-right mr5"></i>채무자정보 : </span><?=$view['wr_59']?> </div>
                <div> <span class="fw-600">   
                <i class="fa fa-caret-right mr5"></i>기타 설정사항 :</span> <?=$view['wr_61']?> </div>
                <div><span class="fw-600">                      
                <span class="hash-tag flex-y-center"><i class="fa fa-caret-right mr5"></i>설정 해쉬값 : <?php echo $view['wr_63']?></span></div>

                <div class="border-t1 py-5"><span class="fw-700"> 설정해제(말소)일 : </span><span class="fw-700"><?php echo ($view['wr_62']) ? $view['wr_62'] : "<span class='text-red'>설정중</span>" ?> </span>
                </div>
                
            </div>
                    
        </div>
   </div> 

   <?}?>


    <?php 
    $new1 = sql_fetch_all("select * from g5_write_300_owner where state IN (1,2) and option_type='newItem1' and owner_num=".$view['wr_id']." order by regtime desc limit 100"); 
    ?>


    <?php if( count($new1) == 0 ) : ?>
    <div class="btn btn-outline fs-14 mt20 fw-700">권리제한변경 내역표시 : <span class="text-danger fw-700 ml10"> 없음 </span> </div> 
    
            
            <?php if($is_admin) { ?>
                <a class="btn btn-xs outline bg-white" href="/customPage/edit_owner.php?n=<?=$view['wr_id']?>&t=newItem1" style="color:#566892;">권리제한 설정변경신청</a>  <?php } ?>
    

<?php else: ?>

<div class="btn btn-outline fs-14 mt20 fw-700"  data-bs-toggle="collapse" data-bs-target="#restrict_change1" aria-expanded="false" aria-controls="restrict_change1" > 
    권리제한 변경내역 보기 : <span class="text-danger fw-700 ml10"> 있음 </span> <small class="ml30 fw-300"> 자세히보기>클릭</small><i class="fa fa-chevron-down ml5"></i> 
</div>
    
        <?php if($is_admin) { ?>
        <a class="btn btn-xs outline bg-white" href="/customPage/edit_owner.php?n=<?=$view['wr_id']?>&t=newItem1" style="color:#566892;">권리제한 설정 변경신청</a>  <?php } ?>
    

<div class="collapse border-tb2" id="restrict_change1">

    <?/*PC버전*/?>
    <div class="basic_table sm-none">
        <table>
            <colgroup>
                <col style="width:10%;">
                <col style="width:15%;">
                <col style="width:15%;">
                <col style="width:60%;">
            </colgroup>
            
                <tr>
                    <th>순번</th>
                    <th>등기원인</th>
                    <th>설정일</th>
                    <th>권리자 및 기타사항</th>
                </tr>
        
                <?php for($i=0;$i<count($new1);$i++): ?>
                <?php $data = $new1[$i]; $show_can = $data['state'] == 1 ? '' :'cancel'; ?>
                <tr style="font-weight:400;">
                    <td class="bg-gray1 text-center"><?=($i+1)?> </td>
                    <td class=""> <?=$data['wr_51']?>  </td>
                    <td class="<?=$show_can?>"> <?=$data['wr_52']?> </td>
                    <td class="<?=$show_can?>"> 
                    <i class="fa fa-caret-right mr5"></i>채권최고액 : 금 <?=number_format($data['wr_53'])?>원<br>  
                    <i class="fa fa-caret-right mr5"></i>설정근거 : <?=$data['wr_60']?> <br><br>

                    <i class="fa fa-caret-right mr5"></i>채권자명(개인코드) : <?=$data['wr_54'].' ('.$data['wr_55'].')'?> <br>  
                    <i class="fa fa-caret-right mr5"></i>채권자정보 : <?=$data['wr_56']?> <br><br>
                        
                    <i class="fa fa-caret-right mr5"></i>채무자명(개인코드) : <?=$data['wr_57'].' ('.$data['wr_58'].')'?> <br>  
                    <i class="fa fa-caret-right mr5"></i>채무자정보 : <?=$data['wr_59']?> <br><br>
                        
                    <i class="fa fa-caret-right mr5"></i>기타 설정사항 : <?=$data['wr_61']?> <br><br>
                    <i class="fa fa-caret-right mr5"></i>설정해제(말소)일 : <?php echo ($data['wr_62']) ? $data['wr_62'] : "<span class='text-red'>설정중</span>" ?> <br>
                    <span class="hash-tag"><i class="fa fa-caret-right mr5"></i>설정 해쉬값 : <?php echo $data['wr_63']?></span><br>
                    </td>
                </tr>
                <?php endfor; ?>
        </table>
    </div>

    <?/*모바일버전*/?>
    <div class="md-none bg-gray1">   
    
        <?php for($i=1;$i<count($new1);$i++): ?>
        <?php $data = $new1[$i]; $show_can = $data['state'] == 1 ? '' :'cancel'; ?>
    
       <div class="border-t2 border-b2">
            <div class="mt20 py-5 "><span class="fw-700 mr20">순번<span> <span class="ml20 fw-900 btn-12 bg-gray"><?=($i+1)?> </span> </div>
            <div class="border-t1 py-5 "><span class="fw-700 mr20">등기원인 : <span><span class="<?=$show_can?>"> <?=$data['wr_51']?> </span></div>
            <div class="border-t1 py-5 "><span class="fw-700 mr20">설정일 : <span><span class="<?=$show_can?>"> <?=$data['wr_52']?> </span></div>
            
            <div class="border-t1 border-b1 py-5 "><span class="fw-700">권리자 및 기타사항</div>
            <div class="border-b2 fw-300  <?=$show_can?>"> 
                <div><span class="fw-600">
                <i class="fa fa-caret-right mr5"></i>채권최고액 :</span> 금 <?=number_format($data['wr_53'])?>원</div>  
                <div><span class="fw-600">
                <i class="fa fa-caret-right mr5"></i>설정근거 :</span> <?=$data['wr_60']?> </div>
                <div><span class="fw-600">
                <i class="fa fa-caret-right mr5"></i>채권자명(개인코드) :</span> <span class="hash-tag"><?=$data['wr_54'].' ('.$data['wr_55'].')'?></span> </div>
                <div><span class="fw-600">
                <i class="fa fa-caret-right mr5"></i>채권자정보 :</span> <?=$data['wr_56']?> </div>
                <div><span class="fw-600">    
                <i class="fa fa-caret-right mr5"></i>채무자명(개인코드) :</span> <span class="hash-tag"><?=$data['wr_57'].' ('.$data['wr_58'].')'?></span> </div>  
                <div><span class="fw-600">
                <i class="fa fa-caret-right mr5"></i>채무자정보 : </span><?=$data['wr_59']?> </div>
                <div> <span class="fw-600">   
                <i class="fa fa-caret-right mr5"></i>기타 설정사항 :</span> <?=$data['wr_61']?> </div>
                <div><span class="fw-600">                      
                <span class="hash-tag flex-y-center"><i class="fa fa-caret-right mr5"></i>설정 해쉬값 : <?php echo $data['wr_63']?></span></div>

                <div class="border-t1 py-5"><span class="fw-700"> 설정해제(말소)일 : </span><span class="fw-700"><?php echo ($data['wr_62']) ? $data['wr_62'] : "<span class='text-red'>설정중</span>" ?> </span></div>
                <div>
                
            </div>
         </div> 
        <?php endfor;?>
        
    </div>

</div>

<?php endif; ?>




<!-- 확인등기 서류확인에 대한 표시 -->        
<div id="paper" class="rect-blue title-16 mt80" > [서류검증 확인]에 대한 표시 </div>
<div class="h7_tl fw-900 fs-16 mt20">*검증방식 :<span class="fw-900 text-red ml10"><?=$view['wr_70'] ?></span></div>

 <?php if($view['wr_12']!='일반등기'){ /* 확인등기,검증등기 */ ?>
    <div class="title-16 h7_tl mt20 mb10"> *등기물건 서류확인 내역</div>
    <div class="ml10 fw-700 btn btn-sm btn-outline"  data-bs-toggle="collapse" data-bs-target="#paper_check" aria-expanded="false" aria-controls="paper_check">서류확인 내역 자세히보기 > 클릭 <i class="fa fa-chevron-down ml5"></i> 
    </div>
 
    <div class="collapse p20 outline border-b2" id="paper_check">

        <div class="row">
            <div class="col-md-3 text-blue"><span class="fs-14 fw-700 "> 01.등기권자 신분확인</span></div>
            <div class="col-md-9 mb30">
                <?php if($view['file'][4]){  
                echo "<span class='text-red'>등기자의 신분을 확인하였음(확인자:KNCA)</span>"; }
                else { echo "<span class='text-red'>등기자의 신분이 확인되지 않음.</span>"; } ?>
            </td>

            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 text-blue mb20"><span class="fs-14 fw-700 "> 02.물건확인서(보증서)</span></div>
            <div class="col-md-9 pb20">
                <?php if($view['file'][5]){  
                 echo "<div class='regimg' id=\"bo_v_img\">\n";
                 echo get_file_thumbnail($view['file'][5]);
                 echo "</div>\n";
                }
                else { echo "<span class='text-red'> 등록 내용이 없음.</span>"; } ?>

            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 text-blue mb20"><span class="fs-14 fw-700 "> 03.저작권 확인서</span></div>
            <div class="col-md-9 pb20">
                <?php if($view['file'][6]){  
                echo "<div class='regimg' id=\"bo_v_img\">\n";
                echo get_file_thumbnail($view['file'][6]);
                echo "</div>\n";
                }
                else { echo "<span class='text-red'> 등록 내용이 없음.</span>"; } ?>

            </div>
        </div>
       
        <div class="row">
            <div class="col-md-3 text-blue mb20"><span class="fs-14 fw-700 ">04.검증관련-인터뷰(영상,이미지)</span></div>
            <div class="col-md-9 pb20">
                <?php if($view['file'][7]){  

                    // 파일 출력, 비디오 파일
                        echo "<div>\n";
                            if ($view['file'][7]['file'] && @preg_match("/.mp4/i", $view['file'][7]['file'])) {
                                echo '<video muted width="100%" height="100%" controls>';
                                echo '<source src="'.G5_URL."/data/file/".$bo_table."/".$view['file'][7]['file'].'" type="video/mp4">';
                                echo '</video>';
                            }
                        echo "</div>\n";
                    //mp4 끝 비디오출력

                    //그림파일이 있다면  
                    echo "<div>\n";
                    $image[7] = G5_URL."/data/file/$bo_table/".$view['file'][7]['file'];
                        if (isset($view['file'][7]['view']) && $view['file'][7]['view']) {  ?>
                            <a><img src="<?php echo $image[7]?>"></a>
                    <?php   }  //이미지 여기까지 
                    echo "</div>\n";
                    } //여기까지 검증관련 [7]번째파일이 있다면
                    
              else { echo "<span class='text-red'> 등록 내용이 없음.</span>"; } ?>

            </div>
        </div>
       
        <div class="row">
            <div class="col-md-3 text-blue mb5"><span class="fs-14 fw-700 "> 05.관련링크 (검증자료)</span></div>
            <div class="col-md-9 pb20 fs-12">
                    <?php
                    // 링크
                    if ($view['link'][2]) {
                        $link = cut_str($view['link'][2], 40); ?>
                          <a href="<?php echo $view['link_href'][2] ?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i>                     
                        <strong><?php echo $link ?></strong> </a>
                        <span class="bo_v_link_cnt"><?php echo $view['link_hit'][2] ?>회 연결</span> 
                    <?php } 
                   else { echo "<span class='text-red'> 등록 내용이 없음.</span>"; } ?>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3 text-blue mb5"><span class="fs-14 fw-700 "> 06.추가 검증자료 1</span></div>
            <div class="col-md-9 pb20 fs-12">
                <?php if($view['file'][8]){ ?> 
                    <i class="fa fa-download" aria-hidden="true"></i>
                    <a href="<?php echo $view['file'][8]['href'];  ?>" class="view_file_download">
                        <strong><?php echo $view['file'][8]['source'] ?></strong>
                    </a>
                    <?php echo $view['file'][8]['content'] ?> (<?php echo $view['file'][8]['size'] ?>)
                    <span class="bo_v_file_cnt"><?php echo $view['file'][8]['download'] ?>회 다운로드</span>

                    <?php     // 파일 출력
                    echo "<div id=\"bo_v_img\">\n";
                    echo get_file_thumbnail($view['file'][8]);
                    echo "</div>\n";
                    }
               else { echo "<span class='text-red'> 등록 내용이 없음.</span>"; } ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 text-blue mb5"><span class="fs-14 fw-700 "> 07.추가 검증자료 2</span></div>
            <div class="col-md-9 pb20 fs-12">
                <?php if($view['file'][9]){ ?> 
                    <i class="fa fa-download" aria-hidden="true"></i>
                    <a href="<?php echo $view['file'][9]['href'];  ?>" class="view_file_download">
                        <strong><?php echo $view['file'][9]['source'] ?></strong>
                    </a>
                    <?php echo $view['file'][9]['content'] ?> (<?php echo $view['file'][9]['size'] ?>)
                    <span class="bo_v_file_cnt"><?php echo $view['file'][9]['download'] ?>회 다운로드</span>

                    <?php     // 파일 출력
                    echo "<div id=\"bo_v_img\">\n";
                    echo get_file_thumbnail($view['file'][9]);
                    echo "</div>\n";
                    }
               else { echo "<span class='text-red'> 등록 내용이 없음.</span>"; } ?>
            </div>
        </div>

        <div class="btn btn_b03 m120"  data-bs-toggle="collapse" data-bs-target="#paper_check" aria-expanded="false" aria-controls="paper_check" > 
        *서류확인 내역 [닫기]<small class="ml30 fw-100"> 클릭</small><i class="fa fa-chevron-up ml5"></i> </div> 
    </div>

<?php } ?>  





<!-- 실사 검증등기에 대한 표시 -->        
<div id="result" class="rect-red title-16 mt80" > [실사검증 결과]에 대한 표시 </div>

 <?php if($view['wr_12']!='검증등기') { ?>
     <div class="h7_tl fw-900 fs-16 mt20">*실사검증 여부 :<span class="fw-900 text-red ml10">실사검증 내역이 없음</span></div>
<?php } 

else  { /* 검증등기일 경우 */ ?>
    <div class="title-16 h7_tl mt30 mb20"> 
        *검증결과 내역 표시
    </div>

    <div class="p20 outline border-b2 bg-gray1" id="silsa_result">

        <div class="row">
            <div class="col-md-3 text-blue"><span class="fs-14 fw-700 "> 01.검증기간</span></div>
            <div class="col-md-9 mb30">
              <?php echo $view['wr_87']." ~ ".$view['wr_93'] ?>
            </div>
        </div>    

        <div class="row">
            <div class="col-md-3 text-blue"><span class="fs-14 fw-700 "> 02.검증기관명 (제3기관 의뢰)</span></div>
            <div class="col-md-9 mb30">
              <?php echo $view['wr_88'] ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-blue"><span class="fs-14 fw-700 "> 03.검증내역 기록</span></div>
            <div class="col-md-9 mb30">
              <?php echo nl2br($view['wr_89']) ?>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3 text-blue"><span class="fs-14 fw-700 "> 04.검증소견</span></div>
            <div class="col-md-9 mb30">
              <?php echo nl2br($view['wr_91']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 text-blue"><span class="fs-14 fw-700 "> 05.기타의견</span></div>
            <div class="col-md-9 mb30">
              <?php echo $view['wr_92'] ?>
            </div>
        </div>

        
        <div class="row">
            <div class="col-md-3 text-blue"><span class="fs-14 fw-700 "> 06.검증위원명</span></div>
            <div class="col-md-9 mb30">
              <?php echo $view['wr_90'] ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-blue"><span class="fs-14 fw-700 "> 07.검증위원 확인(서명)</span></div>
            <div class="col-md-9 mb30">
            <?php if($view['wr_9']) { ?>
            <img src="<?php echo $view['wr_9']?>">
        <?php } ?>
       
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 text-blue"><span class="fs-14 fw-700 "> 08.검증해쉬값</span></div>
            <div class="col-md-9 mb30">
              <span class="hash-tag"><?php echo $view['wr_94'] ?> </span>
            </div>
        </div>

    </div>
    
<!--실사검증에 관한 현장사진 이미지 보기-->

    <div class="title-16 h7_tl mt30 mb10">  *실사검증 현장사진 </div>
    <div class="ml10 fw-500  btn btn-outline text-red"  data-bs-toggle="collapse" data-bs-target="#silsa_photo" aria-expanded="false" aria-controls="silsa_photo">검증사진 자세히보기 > 클릭 <i class="fa fa-chevron-down ml5"></i> 
    </div>
 
    <div class="collapse pt20" id="silsa_photo">
<div class="row">
     <?php  // 파일 출력
      $v_img_count = count($view['file']);
      if($v_img_count) {
          echo "<div class='col-sm-6 col-md-3 middlephoto mb30'>\n";
          for ($i=11; $i<=$v_img_count; $i++) {

              $image[$i] = G5_URL."/data/file/$bo_table/".$view['file'][$i]['file'];
              if (isset($view['file'][$i]['view']) && $view['file'][$i]['view']) {        
               
                 echo get_file_thumbnail($view['file'][$i]);     //현장사진출력

              }

          }
          echo "</div>\n";
      } 
      ?>


    </div>
      <!-- 검증이미지 끝 -->

</div>

<?php }   //실사검증 결과 끝 ?>



 <?php }
else {  /* ////////////////////////////////////등기완료가 안된다면  */ ?>
        <tr>
         <td class="bg-white text-center" style="height:200px; border:solid 3px red;" colspan="2">

       <?php if($view['wr_6']=="결제대기중" ){ ?>       
         <?php if ($is_member || $is_admin) {  ?>       
            
            <h2 class="fw-900 mb10 pt30 ">현재 <b class="text-red">등기신청이 접수</b>되었습니다. </h3>
            <h3 class="fs-18 mb10"><b>결제가 완료</b>되면 등기심사가 진행됩니다.</h3> 
           
            <span class="btn btn-warning btn-md" id="payBtn1" payType="<?=$payType?>"><a href=" " ><i class="fa fa-list" aria-hidden="true"></i> 결제하기</a></span>
            <? } 
            else{ ?>
            <div class="fw-500 fs-18 pt30">현재 <b class="text-blue">등기심사</b>가 진행되고 있습니다.</div>
            <h1 class="fs-24 mb10 pt0 fw-900 text-red"><b>심사중</b></h1> 
            <? } 
            }                      
        else{ ?>
        <div class="fw-500 fs-18 pt3-">현재 <b class="text-blue">등기심사</b>가 진행되고 있습니다.</div>
        <h1 class="fs-24 mb10 pt0 fw-900 text-red"><b><?=$view['wr_6'] ?></b></h1> 
        <? } //일반인은 결제전에 심사중 노출, 결제후에는 진행상황 노출 ?>

        <span class="mt20 mt20"><a href="<?php echo $list_href ?>" class="btn-light btn"><i class="fa fa-list" aria-hidden="true"></i> 다른 등기목록</a></span>
        </td>        
      </tr>
    </table>

    </div>      
</div>

<?php
}  /* 끝 등기진행상황 노출 끝*/
?>


<div class="border-b3 mt30"></div>

  <!-- 게시물 상단 버튼 시작 { -->
<div id="bo_v_top">
            
            <?php
            ob_start();
            ?>

     <div>
            <ul class="bo_v_left">
                <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01 btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 등기수정</a></li><?php } ?>

<?php if($is_admin): ?>
<li><a href="https://kornft.org/customPage/admin/?wr_id=<?=$wr_id?>" class="btn_b01 btn bg-blue1" target="_blank" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Admin page 등기 수정</a></li>
<br><br>
<?php endif; ?>

<?php /*
                <?php if ($update_href) { ?><li><a href="./write?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$wr_id?>&page=<?=$page?>&act=state" class="btn_b02 btn "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 진행상태 등록</a></li><?php } ?>

                <?php if ($update_href) { ?><li><a href="./write?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$wr_id?>&page=<?=$page?>&act=right" class="btn_b01 btn bg-orange"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 권리제한 등록</a></li><?php } ?>
<br>
                <?php if ($update_href) { ?><li><a href="./write?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$wr_id?>&page=<?=$page?>&act=paper" class="btn_b01 btn bg-blue1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 서류검증 등록</a></li><?php } ?>

                <?php if ($update_href) { ?><li><a href="./write?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$wr_id?>&page=<?=$page?>&act=silsa" class="btn_b01 btn bg-blue1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 실사검증 기록</a></li><?php } ?>
<br>
*/?>

                <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01 btn" onclick="del(this.href); return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> 삭제</a></li><?php } ?>
                <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;"><i class="fa fa-files-o" aria-hidden="true"></i> 복사</a></li><?php } ?>
                <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;"><i class="fa fa-arrows" aria-hidden="true"></i> 이동</a></li><?php } ?>
                <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn_b01 btn"><i class="fa fa-search" aria-hidden="true"></i> 검색 목록</a></li><?php } ?>

                <?php if ($is_admin) { ?><li><a href="<?php echo $write_href ?>" class="btn_b03 btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } ?>

            </ul>

    </div>
 
	
   <div class=" flex-x-center pt20">   
         <?if($is_member){ ?>
         <div><a href="/pages/bon0/certi_new.php?wr_id=<?=$wr_id?>" class="btn_b02 btn"><i class="fa fa-list" aria-hidden="true"></i> NFT등록증명서 열람/발급</a></div>
      <?} else { ?>
        <a href="/bbs/login.php" onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn"><i class="fa fa-list" aria-hidden="true"></i> NFT등록증명서 열람/발급</a>
         <?}?>
         
         <?if($is_member){ ?>
         <div><a href="/pages/bon1/certi_history.php?wr_id=<?=$wr_id?>" class="ml10 btn_b02 btn bg-red"><i class="fa fa-list" aria-hidden="true"></i> NFT 등기부등본 열람/발급</a></div>
      <?} else { ?>
        <a href="/bbs/login.php" onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn bg-red"><i class="fa fa-list" aria-hidden="true"></i>  NFT등기부등본 열람/발급</a>
         <?}?>
   </div>
   

   <div class="flex-x-center mt10">

            <div><a href="<?php echo $list_href ?>" class="btn_b03 btn bg-yellow1"><i class="fa fa-list" aria-hidden="true"></i> 등기목록으로</a></div>

            <div class="ml10 mr10"><a href="" class="btn_b03 btn"><i class="fa fa-list" aria-hidden="true"></i> 구입안내</a></div>
         
            <?php if ($scrap_href) { ?><a href="<?php echo $scrap_href; ?>" target="_blank" class="btn btn_b03" onclick="win_scrap(this.href); return false;"><i class="fa fa-thumb-tack" aria-hidden="true"></i> 관심물건 스크랩</a><?php } ?>
  </div>



<div class="flex-x-center mt10">
<div>  <?php include_once(G5_SNS_PATH."/view.sns.skin.php"); ?>  </div>

<?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>

<div id="bo_v_share">
<!--  추천 비추천 시작 { -->
<?php if ( $good_href || $nogood_href) { ?>
    <?php if ($good_href) { ?>
        <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="btn btn_b01" title="추천"><i class="fa fa-thumbs-up"></i> <span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
    <?php } ?>
    <?php if ($nogood_href) { ?>
        <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="btn btn_b01" title="비추천"><i class="fa fa-thumbs-down"></i> <span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
    <?php } ?>
<?php } else {
    if($board['bo_use_good'] || $board['bo_use_nogood']) {
?>
    <?php if($board['bo_use_good']) { ?><a class="btn btn_b01" title="추천"><i class="fa fa-thumbs-up"></i> <span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a><?php } ?>
    <?php if($board['bo_use_nogood']) { ?><a class="btn btn_b01" title="비추천"><i class="fa fa-thumbs-down"></i> <span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a><?php } ?>
<?php
    }
}
?>
<!-- }  추천 비추천 끝 -->
</div>

</div>  <!--끝.flex 가운데정렬-->

<?php if ($prev_href || $next_href) { ?>
        <ul class="bo_v_nb1 border-t1 border-b1">
            <?php if ($prev_href) { ?><li class="btn_prv"><span class="nb_tit"><i class="fa fa-arrow-left" aria-hidden="true"></i> 이전글</span><a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject;?></a> </li><?php } ?>
            <?php if ($next_href) { ?><li class="btn_next"><span class="nb_tit"><i class="fa fa-arrow-right" aria-hidden="true"></i> 다음글</span><a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?></a> </li><?php } ?>
        </ul>
        <?php } ?>



        <?php
            $link_buttons = ob_get_contents();
            ob_end_flush();
            ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->

</article>
<!-- } 게시판 읽기 끝 -->

<form id="payForm" method="post">
	<input type="hidden" id="payType" name="payType" value="0">
</form>

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();


	$("#payBtn1").on('click', function(e){
		var index = $('#payBtn1').index(this);
		var ptype = $('#payBtn1').eq(index).attr('payType');

		goPay(ptype);
	});


	function goPay(ptype = 0) {
		$('#payType').val( ptype );
		var pWin = window.open("about:blank", "paywindow", "location=no, directories=no,resizable=no,status=no,toolbar=no,menubar=no, left=0, top=0, scrollbars=yes");
		var frm = document.getElementById("payForm");
		frm.action = "https://kornft.org/pages/lib_pay.php";
		frm.target = "paywindow";
		frm.submit();
	}

	window.addEventListener('message', function(e) {
		console.log(e.data);

		//payCall();

		if(e.data != undefined){
			if(e.data.res_cd != undefined){
			
				if(e.data.res_cd == "0000"){
					payCall();
				}
			}
		}
	});

	var isRun = false;
	function payCall(){
		if(isRun){
			return false;
		}
		isRun = true;

		const formData = new FormData();
		formData.append("type", "ajax" );
		formData.append("option", "regPay" );
		formData.append("wr_id", "<?=$view['wr_id']?>" );

		$.ajax({
			type: 'post',
			url: "https://kornft.org/pages/myProcess.php",
			processData: false,
			contentType: false,
			data: formData,
			dataType: "json",
			success: function(data)	{
				isRun = false;
				//$('#'+option+'Loading').addClass('d-none');
				if(data.code=="0") {
					alert(data.msg);
					location.reload(); 
				} else {
					alert(data.msg);
				}
			}
		});

	}



});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}



</script>
<!-- } 게시글 읽기 끝 -->