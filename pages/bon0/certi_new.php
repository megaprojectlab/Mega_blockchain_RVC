<?php
/* copyright (c) websiting.co.kr */

include_once('../../common.php');

/* 페이지설정 코드 입력! */

	//페이지 제목 지정
	$g5['title'] = "NFT 등록증명서 열람용(견본)";
    echo $view['wr_subject'];
	
	//본 페이지에 해당되는 css가 있을 경우 아래 css 삽입 코드를 활성화 해주시기 바랍니다.
	//add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/page.css?ver='.G5_CSS_VER.'">', 0);

include_once('../../head.php');
?>


<?php
$wr_id = $_GET['wr_id'];  
if(!$wr_id){$wr_id="138";}  //물건번호
$all = $_GET['all']; //0.현재사항 1.말소사항포함
$op = $_GET['op']; //0.소유권 개인정보 1.표시여부
$cp = $_GET['cp']; //0.저작권 개인정보 1.표시여부
$rp = $_GET['rp']; //0.권리제한 개인정보 1.표시여부
$wrid=$wr_id; //넘겨주기위해
?>


<?php

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
    
    <link rel="stylesheet" type="text/css" href="certi_style.css">

</head>


<!--Search box -->
<section class="mainContents flex-start">
    <div class="hd_sch_wr w-90">
        <fieldset id="hd_sch">
            <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php"
                onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="ca_name||wr_subject||wr_content">
                <input type="hidden" name="sop" value="or">
				<input type="hidden" name="onetable" value="300">

                <div class="input-group flex-nowrap">
                    <label for="sch_stx" class="sound_only">검색어 필수</label>
                    <input type="text" name="stx" class="form-control" id="sch_str" maxlength="20"
                        placeholder="검색어를 입력해주세요">

                    <span class="input-group-btn">
                        <button type="submit" id="sch_submit" value="검색" class="btn btn-default"><i class="fa fa-search"
                                aria-hidden="true"></i><span class="sound_only">검색</span></button>
                    </span>
                </div>
            </form>
                <script>
                function fsearch_submit(f)
                {
                    if (f.stx.value.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i=0; i<f.stx.value.length; i++) {
                        if (f.stx.value.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    f.action = "";
                    return true;
                }
                </script>

    <div class="cont_text_important fs-12 mt10 mb30"> 증명서 발급을 원하는 등기물건을 조회후 신청하세요</div>
    </fieldset>
    </div>    
</section>


<div class="h6_tl"> 증명서 종류: <strong class="ml10 mr20 border-b3 "> NFT등록증명서(열람용) </strong> 
<a class="btn btn-15 fw-700 text-blue "
                                href="https://kornft.org/pages/bon1/certi_history.php?wr_id=<?=$wr_id?>&all=0&op=0&cp=0&rp=0">NFT 등기부등본 내역보기 ></a>
</div>

<div class="h2_tl"> 등기명 : <strong class="serif"> <?= $view['wr_subject'] ;?>  </strong> </div>



<div class="w300 ml-20 mt20 mb10"><span class="btn btn-md btn-outline fw-600 bg-blue1">          
    
    <?if($is_member && $wr_id){ ?>
        <a href ="/customPage/proof_call.php?wr_id=<?=$wr_id?>&mb_id=<?=$member['mb_id']?>"> 
    <?} else { ?>
        <a onclick="alert('KNCA 회원 로그인 후 <발급할 물건>을 선택후  이용가능한 서비스입니다.')" >
    <?}?>
   증명용 발급신청하기(유료) </a> 
   </span></div>
   <div class="text-red fs-12 fw-500 mb20"> *[열람용]은 정보를 위한 참고용으로서 법적효력이 없습니다. 증명을 위해서는 [증명용]을 발급받으시기 바랍니다.</div>





<?php if($view['wr_6']=="등기완료" ||  $is_admin){  
    //1.접수완료 2.결제대기 3.서류심사 4. 실사검증, 5.등기완료////////////////////////////////////////진행상태표시 등기완료 후에 표시됨 ?>





<body>
    <div class="hpa" style="width:210mm;height:296.99mm;">
        <div class="hsR"
            style="top:1.11mm;left:0.13mm;width:209.87mm;height:295.87mm;background-repeat:no-repeat;background-image:url('hd1_back.png');">
        </div>
        <div class="hcD" style="left:13mm;top:10mm;">
            <div class="hcI">
                <div class="hls ps9"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:-0.16mm;height:3.17mm;width:183.99mm;">
                    <span class="hrt cs12">문서확인번호 ▣ XDCB-7F64-8A3B-6F63 ▣(열람용/견본)</span></div>
            </div>
        </div>
        <div class="hcD" style="left:13mm;top:253.99mm;">
            <div class="hcI" style="top:7.28mm;">
                <div class="hls ps23"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:-0.16mm;height:3.17mm;width:183.99mm;">
                    <span class="hrt cs12">발급일:  <?=date("Y-m-d H:i:s");?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                        class="hrt cs14">&nbsp;</span></div>
                <div class="hls ps9"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:4.61mm;height:3.17mm;width:183.99mm;">
                </div>
                <div class="hls ps9"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:9.38mm;height:3.17mm;width:183.99mm;">
                </div>
            </div>
        </div>
        <div class="hcD" style="left:13mm;top:20mm;">
            <div class="hcI">
                <div class="hls ps20"
                    style="line-height:11.16mm;white-space:nowrap;left:0mm;top:0mm;height:11.16mm;width:183.99mm;">
                    <div class="hsR"
                        style="top:0mm;left:0mm;margin-bottom:0mm;margin-right:0mm;width:26.12mm;height:11.16mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url('hd2_logo.png');">
                    </div>
                </div>
                <div class="hls ps20"
                    style="line-height:6.67mm;white-space:nowrap;left:0mm;top:14.60mm;height:7.41mm;width:183.99mm;">
                    <span class="hrt cs7">NFT 등록 증명서</span></div>
                <div class="hls ps0"
                    style="line-height:2.17mm;white-space:nowrap;left:0mm;top:26.68mm;height:2.82mm;width:183.99mm;">
                </div>
                <div class="hls ps20"
                    style="line-height:140.54mm;white-space:nowrap;left:0mm;top:31.34mm;height:140.54mm;width:183.99mm;">
                    <div class="htb"
                        style="left:1mm;width:167.97mm;top:1mm;height:140.54mm;display:inline-block;position:relative;vertical-align:middle;">
                        <div class="hce" style="left:0mm;top:0mm;width:43.05mm;height:8.90mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:2.01mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">등기고유번호</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:0mm;width:61.46mm;height:8.90mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:2.01mm;">
                                    <div class="hls ps27"
                                        style="padding-left:5.46mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:57.86mm;">
                                        <span class="hrt cs23"><?=$view['wr_11']; ?> </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:104.51mm;top:0mm;width:61.46mm;height:8.90mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1mm;">
                                    <div class="hls ps22"
                                        style="line-height:5.07mm;white-space:nowrap;left:0mm;top:0mm;height:5.91mm;width:57.86mm;">
                                        <div id="bcTarget" style="height:20px;"></div>
<script> $("#bcTarget").barcode("<?=$view['wr_11']?>", "code128"); </script>                           
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:8.90mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">물건의 명칭</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:8.90mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8"><strong class="serif"> <?= $view['wr_subject'] ;?>  </strong></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:16.13mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">등기종류</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:16.13mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8"><?= $view['wr_12'] ;?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:23.35mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">카테고리</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:23.35mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8">1.<?= $view['wr_13'] ;?> &nbsp 2.<?= $view['wr_14'] ;?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:30.58mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">블록체인 프로토콜</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:30.58mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8"><?= 	$view['wr_42'] ;?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:37.80mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">블록체인 토큰ID</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:37.80mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8"><?= 	$view['wr_40'] ;?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:45.03mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">스마트 컨트렉트</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:45.03mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8"><?= 	$view['wr_41'] ;?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:52.25mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">등록범위</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:52.25mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8"> <?= $view['wr_46'] ;?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:59.48mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">에디션번호</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:59.48mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8">#<?= $view['wr_49'] ;?> (전체발행수 : <?= $view['wr_48'] ;?>)</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:66.70mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">등록일</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:66.70mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8"><?=$view['wr_44'] ;?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:73.93mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">소유권자</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:73.93mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8"> <?=$view['wr_20'] ."(". $view['wr_25'] .")" ?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:81.15mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">저작권자</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:81.15mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8"><?=$view['wr_31'] ."(". $view['wr_36'] .")" ?> </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:88.38mm;width:43.05mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                        <span class="hrt cs22">등록해쉬값</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:88.38mm;width:122.92mm;height:7.22mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.17mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                        <span class="hrt cs8"><?=$view['wr_45'] ;?> </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:95.60mm;width:43.05mm;height:4.88mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:39.45mm;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.05mm;top:95.60mm;width:122.92mm;height:4.88mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:119.32mm;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:100.48mm;width:114.93mm;height:5.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:111.34mm;">
                                        <span class="hrt cs22">대표이미지</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:114.93mm;top:100.48mm;width:51.04mm;height:5.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps25"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:47.44mm;">
                                        <span class="hrt cs22">등기권자 확인서명</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:106.35mm;width:83.42mm;height:32.19mm;">
                            <div class="hcD" style="left:0mm;top:0mm;">
                                <div class="hcI">
                                    <div class="hls ps0"
                                        style="line-height:32.19mm;white-space:nowrap;left:0mm;top:0mm;height:32.19mm;width:83.42mm;">
                                        <div class="hsR"
                                            style="top:0mm;left:0mm;margin-bottom:0mm;margin-right:0mm;width:77.24mm;height:32.19mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url('   ');">
                                            <img src="<?= get_file_thumbnail2($wr_id, 0) ;?>" height="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:83.42mm;top:106.35mm;width:31.51mm;height:32.19mm;">
                            <div class="hcD" style="left:0mm;top:0mm;">
                                <div class="hcI" style="top:12.53mm;">
                                    <div class="hls ps0"
                                        style="line-height:19.66mm;white-space:nowrap;left:0mm;top:0mm;height:19.66mm;width:31.51mm;">
                                        <div class="hsR"
                                            style="top:0mm;left:0mm;margin-bottom:0mm;margin-right:0mm;width:26.80mm;height:19.66mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url('   ');">
                                            <img src="<?= get_file_thumbnail2($wr_id, 1) ;?>" height="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:114.93mm;top:106.35mm;width:51.04mm;height:32.19mm;">
                            <div class="hcD" style="left:0mm;top:0mm;">
                                <div class="hcI" style="top:17.55mm;">
                                    <div class="hls ps26"
                                        style="padding-left:5.22mm;line-height:14.64mm;white-space:nowrap;left:0mm;top:0mm;height:14.64mm;width:51.04mm;">
                                        <div class="hsR"
                                            style="top:0mm;left:0mm;margin-bottom:0mm;margin-right:0mm;width:44.57mm;height:14.64mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;">
                                            <img width="100%" src=" <?= $view['wr_10']  ;?> " >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hls ps24"
                    style="line-height:5.16mm;white-space:nowrap;left:0mm;top:175.60mm;height:6mm;width:183.99mm;">
                </div>
                <div class="hls ps20"
                    style="line-height:3.76mm;white-space:nowrap;left:0mm;top:181.06mm;height:4.59mm;width:183.99mm;">
                    <span class="hrt cs10">위 물건(작품)은 본 인증원의 규정에 따라&nbsp;</span></div>
                <div class="hls ps20"
                    style="line-height:3.76mm;white-space:nowrap;left:0mm;top:188.40mm;height:4.59mm;width:183.99mm;">
                    <span class="hrt cs10">블록체인에 등록되었음을 증명합니다.</span></div>
                <div class="hls ps20"
                    style="line-height:3.76mm;white-space:nowrap;left:0mm;top:195.73mm;height:4.59mm;width:183.99mm;">
                    <span class="hrt cs11">2<?=date("Y 년 m 월 d 일");?></span></div>
                <div class="hls ps0"
                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:203.11mm;height:3.88mm;width:183.99mm;">
                </div>
                <div class="hls ps20"
                    style="line-height:12.70mm;white-space:nowrap;left:0mm;top:209.51mm;height:12.70mm;width:183.99mm;">
                    <div class="hsR"
                        style="top:0mm;left:0mm;margin-bottom:0mm;margin-right:0mm;width:102.27mm;height:12.70mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url('hd7_company.png');">
                    </div>
                </div>
                <div class="hls ps21"
                    style="line-height:2.17mm;white-space:nowrap;left:0mm;top:224.18mm;height:2.82mm;width:183.99mm;">
                    <span
                        class="hrt cs17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                        class="hrt cs18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                        class="hrt cs19">한국 NFT공인인증원 | &nbsp;Korea NFT Certificate Authority</span></div>
                <div class="hls ps21"
                    style="line-height:2.17mm;white-space:nowrap;left:0mm;top:228.13mm;height:2.82mm;width:183.99mm;">
                    <span
                        class="hrt cs19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;서울시
                        서대문구 연세로50 연세대학교 공학원 206 &nbsp;</span></div>
            </div>
        </div>
    </div>




 <?php }
else {  /* ////////////////////////////////////등기완료가 안된다면  */ ?>

<div class="flex-x-center mt30">
<table>
        <tr>
         <td class="bg-white text-center p30" style="height:200px; border:solid 3px red;" colspan="2">

       <?php if($view['wr_6']=="결제대기중" ){ ?>       
         <?php if ($is_member || $is_admin) {  ?>       
            
            <h2 class="fw-900 mb10 pt30 fs-20 ">현재 <b class="text-red">등기신청이 접수</b>되었습니다. </h3>
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
</div>


<?php
}  /* 끝 등기진행상황 노출 끝*/
?>



</body>

</html>

<?php
include_once(G5_THEME_PATH.'/tail.php'); 
