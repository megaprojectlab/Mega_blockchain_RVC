<?php
/* copyright (c) websiting.co.kr */

include_once('../../common.php');

/* 페이지설정 코드 입력! */

	//페이지 제목 지정
	$g5['title'] = "NFT 등기부등본 열람(견본)";
	
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

    <head>
        <!-- 폰트 -->
        <link
            href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Noto+Serif+KR:wght@200,300,400,500,600,700,900&display=swap&subset=korean"
            rel="stylesheet">
        <style>
            * {font-family: 'Noto Sans KR', sans-serif; }

            .serif { font-family: 'Noto Serif KR', serif; }
        </style>
        <!-- barcode -->
        <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="jquery-barcode.js"></script>

        <link rel="stylesheet" type="text/css" href="certi_history.css">
        
    </head>



<div class="w300 ml-20 mt0 mb10"><span class="btn btn-md btn-outline fw-600 bg-blue1">          
    
    <?if($is_member && $wr_id){ ?>
        <a href ="/customPage/proof_call.php?wr_id=<?=$wr_id?>&mb_id=<?=$member['mb_id']?>"> 
    <?} else { ?>
        <a onclick="alert('KNCA 회원 로그인 후 <발급할 물건>을 선택후  이용가능한 서비스입니다.')" >
    <?}?>
     증명용 발급신청하기(유료) </a> 
     </span>
</div>
<div class="text-red fs-12 fw-500 mb20"> *[열람용]은 정보를 위한 참고용으로서 법적효력이 없습니다. 증명을 위해서는 [증명용]을 발급받으시기 바랍니다.</div>


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
    


<section class="p20 bg-black-l" >   

<div class="h6_tl"> 증명서 종류: <strong class="ml10 mr20 border-b3 "> NFT등기부등본(열람용) </strong> 
<a class="btn btn-15 fw-700 text-blue "
                                href="https://kornft.org/pages/bon0/certi_new.php?wr_id=<?=$wr_id?>">NFT 등록증명서 보기 ></a>
</div>

<div class="h2_tl"> 등기명 : <strong class="serif"> <?= $view['wr_subject'] ;?>  </strong> </div>





   <div class="h6_tl"> 등기부 표시:<strong class="serif"> 
                    <a class="btn btn-12 btn-outline mr10 fw-700"
                                href="https://kornft.org/pages/bon1/certi_history.php?wr_id=<?=$wr_id?>&all=1&op=0&cp=0&rp=0">말소사항 포함</a>
                    <a class="btn btn-12 btn-outline fw-700"
                                href="https://kornft.org/pages/bon1/certi_history.php?wr_id=<?=$wr_id?>&all=0&op=0&cp=0&rp=0">현재 유효사항</a>

   </strong> </div>
       
</section>



<?php if($view['wr_6']=="등기완료"  ||  $is_admin){  
    //1.접수완료 2.결제대기 3.서류심사 4. 실사검증, 5.등기완료////////////////////////////////////////진행상태표시 등기완료 후에 표시됨 ?>




<section>
    <!-- #1페이지 -->
        <div class="hpa" style="width:210mm;height:296.99mm;">
            <div class="hsR"
                style="top:1.11mm;left:0.13mm;width:209.87mm;height:295.87mm;background-repeat:no-repeat;background-image:url('hd1_back.png');">
            </div>
            <div class="hcD" style="left:13mm;top:10mm;">
                <div class="hcI">
                    <div class="hls ps9"
                        style="line-height:2.48mm;white-space:nowrap;left:0mm;top:-0.16mm;height:3.17mm;width:183.99mm;">
                        <span class="hrt cs9">문서확인번호 ▣ XDCB-7F64-8A3B-6F63 ▣(열람용/견본)</span>
                    </div>
                </div>
            </div>
            <div class="hcD" style="left:13mm;top:253.99mm;">
                <div class="hcI" style="top:7.28mm;">
                    <div class="hls ps29"
                        style="line-height:2.48mm;white-space:nowrap;left:0mm;top:-0.16mm;height:3.17mm;width:183.99mm;">
                        <span class="hrt cs9">발급일:
                            <?=date("Y-m-d H:i:s");?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span><span class="hrt cs11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <div class="haN" style="left:0mm;top:0mm;width:1.59mm;height:3.17mm;"><span
                                class="hrt cs11">1</span></div><span class="hrt cs11">/4</span>
                    </div>
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
                        style="line-height:5.52mm;white-space:nowrap;left:0mm;top:14.65mm;height:6.35mm;width:183.99mm;">
                        <span class="hrt cs18">블록체인 등기부 등본
                            <?php if($all==0){echo "(현재 유효사항)";} else{echo "(말소사항 포함)";} ?>
                        </span>
                    </div>
                    <div class="hls ps20"
                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.93mm;height:3.88mm;width:183.99mm;">
                    </div>
                    <div class="hls ps32"
                        style="line-height:7.22mm;white-space:nowrap;left:0mm;top:31.34mm;height:7.90mm;width:183.99mm;">
                        <div class="htb"
                            style="left:0.50mm;width:182.94mm;top:0.50mm;height:7.90mm;display:inline-block;position:relative;vertical-align:middle;">
                            <div class="hce" style="left:0mm;top:0mm;width:28.01mm;height:6.91mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps0"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:24.41mm;">
                                            <span class="hrt cs34">등기고유번호</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:28.01mm;top:0mm;width:45.98mm;height:6.91mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps24"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:42.38mm;">
                                            <span class="hrt cs29">
                                                <?=$view['wr_11']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:74mm;top:0mm;width:37mm;height:6.91mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.55mm;">
                                        <div class="hls ps0"
                                            style="line-height:2.17mm;white-space:nowrap;left:0mm;top:-0.14mm;height:2.82mm;width:33.40mm;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:111mm;top:0mm;width:70.94mm;height:6.91mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps23"
                                            style="line-height:5.07mm;white-space:nowrap;left:0mm;top:0mm;height:5.91mm;width:67.34mm;">
                                            <div id="bcTarget" style="float:right; height:20px; "></div>
                                            <script> $("#bcTarget").barcode("<?=$view['wr_11']?>", "code128"); </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps32"
                        style="line-height:191.22mm;white-space:nowrap;left:0mm;top:38.63mm;height:191.22mm;width:183.99mm;">
                        <div class="htb"
                            style="left:0mm;width:181.94mm;top:0mm;height:191.22mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 186.94 196.22"
                                style="left:-2.50mm;top:-2.50mm;width:186.94mm;height:196.22mm;">
                                <defs>
                                    <pattern id="w_00" width="10" height="10" patternUnits="userSpaceOnUse">
                                        <rect width="10" height="10" fill="rgb(217,217,217)" />
                                    </pattern>
                                </defs>
                                <path fill="url(#w_00)" d="M0,0L181.94,0L181.94,9.33L0,9.33L0,0Z "></path>
                                <path d="M0,0 L0,191.22" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                                <path d="M30.01,9.33 L30.01,191.22"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M69.01,17.20 L69.01,88.04"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M99.02,17.20 L99.02,48.69"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M131.08,88.04 L131.08,133.01"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M181.94,0 L181.94,191.22"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                                <path d="M0,9.33 L181.94,9.33"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.50;"></path>
                                <path d="M0,17.20 L181.94,17.20"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,25.07 L181.94,25.07"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,32.94 L181.94,32.94"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M69.01,40.81 L181.94,40.81"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,48.68 L181.94,48.68"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M30.01,56.55 L181.94,56.55"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M30.01,64.42 L181.94,64.42"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M30.01,72.29 L181.94,72.29"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M30.01,80.17 L181.94,80.17"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,88.04 L181.94,88.04"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,133 L181.94,133"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                                <path d="M0,159.29 L181.94,159.29"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,180.35 L181.94,180.35"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,191.22 L181.94,191.22"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M181.94,0 L181.94,191.22"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,191.22" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                                <path d="M0,191.22 L181.94,191.22"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                            </svg>
                            <div class="hce" style="left:0mm;top:0mm;width:181.94mm;height:9.33mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.05mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:178.34mm;">
                                            <span class="hrt cs13">등기물건의 표시 [표제부]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0mm;top:9.33mm;width:30.01mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">물건의 명칭</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:9.33mm;width:151.93mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.32mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:148.32mm;">
                                            <span class="hrt cs14"><strong class="serif">
                                                    <?= $view['wr_subject'] ;?>
                                                </strong> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0mm;top:17.20mm;width:30.01mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">등기의 종류</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:17.20mm;width:39mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:35.39mm;">
                                            <span class="hrt cs12">
                                                <?= $view['wr_12'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:69.01mm;top:17.20mm;width:30.01mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">검증수준</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:99.02mm;top:17.20mm;width:82.92mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:79.32mm;">
                                            <span class="hrt cs12" style="font-size:11px; ">
                                                <?= $view['wr_30'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0mm;top:25.07mm;width:30.01mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">물건의 유형</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:25.07mm;width:39mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:35.39mm;">
                                            <span class="hrt cs12" style="font-size:11px; ">
                                                <?= $view['wr_13'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:69.01mm;top:25.07mm;width:30.01mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">카테고리</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:99.02mm;top:25.07mm;width:82.92mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:79.32mm;">
                                            <span class="hrt cs12">
                                                <?= $view['wr_14'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0mm;top:32.94mm;width:30.01mm;height:15.74mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:5.43mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">등록범위</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:32.94mm;width:39mm;height:15.74mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:5.43mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:35.39mm;">
                                            <span class="hrt cs12">
                                                <?= $view['wr_46'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:69.01mm;top:32.94mm;width:30.01mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">에디션번호</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:99.02mm;top:32.94mm;width:82.92mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:79.32mm;">
                                            <span class="hrt cs12">#
                                                <?= $view['wr_49'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:69.01mm;top:40.81mm;width:30.01mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">전체발행수</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:99.02mm;top:40.81mm;width:82.92mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:79.32mm;">
                                            <span class="hrt cs12">
                                                <?= $view['wr_48'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0mm;top:48.68mm;width:30.01mm;height:39.35mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:14.13mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">블록체인&nbsp;</span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">등록정보</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:48.68mm;width:39mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps0"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:35.39mm;">
                                            <span class="hrt cs25">프로토콜</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:69.01mm;top:48.68mm;width:112.93mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:109.33mm;">
                                            <span class="hrt cs12">
                                                <?=$view['wr_42'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:56.55mm;width:39mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps0"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:35.39mm;">
                                            <span class="hrt cs25">토큰ID</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:69.01mm;top:56.55mm;width:112.93mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:109.33mm;">
                                            <span class="hrt cs12">#
                                                <?=$view['wr_40'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:64.42mm;width:39mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps0"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:35.39mm;">
                                            <span class="hrt cs25">스마트컨트렉트</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:69.01mm;top:64.42mm;width:112.93mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:109.33mm;">
                                            <span class="hrt cs12">
                                                <?=$view['wr_41'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:72.29mm;width:39mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps0"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:35.39mm;">
                                            <span class="hrt cs25">IPFS링크</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:69.01mm;top:72.29mm;width:112.93mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:109.33mm;">
                                            <span class="hrt cs2">
                                                <?=$view['wr_43'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:80.17mm;width:39mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps0"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:35.39mm;">
                                            <span class="hrt cs25">블록체인 등록일</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:69.01mm;top:80.17mm;width:112.93mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:109.33mm;">
                                            <span class="hrt cs12">
                                                <?=$view['wr_44'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0mm;top:88.04mm;width:30.01mm;height:44.97mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">대표이미지</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:88.04mm;width:69.01mm;height:44.97mm;">
                                <div class="hcD" style="left:0mm;top:0mm;">
                                    <div class="hcI" style="top:2.01mm;">
                                        <div class="hls ps0"
                                            style="line-height:42.96mm;white-space:nowrap;left:0mm;top:0mm;height:42.96mm;width:69mm;">
                                            <div class="hsR"
                                                style="top:0mm;left:0mm;margin-bottom:0mm;margin-right:0mm;width:64.95mm;height:42.96mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url('   ');">
                                                <img src="<?= get_file_thumbnail2($wr_id, 0) ;?>" height="100%">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:99.02mm;top:88.04mm;width:32.07mm;height:44.97mm;">
                                <div class="hcD" style="left:0mm;top:0mm;">
                                    <div class="hcI" style="top:0mm;">
                                        <div class="hls ps0"
                                            style="line-height:18.82mm;white-space:nowrap;left:0mm;top:5mm;height:18.82mm;width:32.06mm;">
                                            <div class="hsR flex-y-center"
                                                style="top:10mm; left:0mm;margin-bottom:0mm;margin-right:0mm;width:28.45mm;height:18.82mm;display:inline-block;position:relative;vertical-align:baseline!important;background-repeat:no-repeat;"> <img height="100%"  src="<?=get_file_thumbnail2($wr_id, 1) ;?>">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:131.08mm;top:88.04mm;width:50.86mm;height:44.97mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps0"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:47.26mm;">
                                        </div>
                                        <div class="hls ps0"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:47.26mm;">
                                            <span class="hrt cs25">등기자 확인서명</span>
                                        </div>
                                        <div class="hls ps0"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:47.26mm;">
                                        </div>
                                    </div>
                                </div>
                                <div class="hsR"
                                    style="top:-70.06mm;left:5.24mm;width:38.56mm;height:19.31mm;background-repeat:no-repeat;">
                                    <img width="100%" src="<?=$view['wr_10'] ;?> " >
                                </div>
                            </div>
                            <div class="hce" style="left:0mm;top:133mm;width:30.01mm;height:26.28mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:10.70mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">등기물건 개요</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:133mm;width:151.93mm;height:26.28mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.5mm;">

                                        <div class="hls ps31"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;width:148.32mm;">
                                            <span class="hrt cs0">
                                                <?=nl2br($view['wr_content']);?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           


                            <div class="hce" style="left:0mm;top:159.29mm;width:30.01mm;height:21.07mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:8.10mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">특성 및 사양</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:159.29mm;width:151.93mm;height:21.07mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.10mm;">
                                    <div class="hls ps31"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;width:148.32mm;">
                                            <span class="hrt cs0">
                                                <?=nl2br($view['wr_15']) ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="hce" style="left:0mm;top:180.35mm;width:30.01mm;height:10.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:3mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.40mm;">
                                            <span class="hrt cs25">물건 보관방식</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:30.01mm;top:180.35mm;width:151.93mm;height:10.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:3mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:148.32mm;">
                                            <span class="hrt cs12">
                                                <?=$view['wr_16'] ;?>  
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- #2페이지 -->
        <div class="hpa" style="width:210mm;height:296.99mm;">
            <div class="hsR"
                style="top:1.11mm;left:0.13mm;width:209.87mm;height:295.87mm;background-repeat:no-repeat;background-image:url('hd1_back.png');">
            </div>
            <div class="hcD" style="left:13mm;top:10mm;">
                <div class="hcI">
                    <div class="hls ps9"
                        style="line-height:2.48mm;white-space:nowrap;left:0mm;top:-0.16mm;height:3.17mm;width:183.99mm;">
                        <span class="hrt cs9">문서확인번호 ▣ XDCB-7F64-8A3B-6F63 ▣(열람용/견본)</span>
                    </div>
                </div>
            </div>
            <div class="hcD" style="left:13mm;top:253.99mm;">
                <div class="hcI" style="top:7.28mm;">
                    <div class="hls ps29"
                        style="line-height:2.48mm;white-space:nowrap;left:0mm;top:-0.16mm;height:3.17mm;width:183.99mm;">
                        <span class="hrt cs9">
                            <?=date("Y-m-d H:i:s");?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span><span class="hrt cs11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <div class="haN" style="left:0mm;top:0mm;width:1.59mm;height:3.17mm;"><span
                                class="hrt cs11">2</span></div><span class="hrt cs11">/4</span>
                    </div>
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
                        style="line-height:108.44mm;white-space:nowrap;left:0mm;top:0mm;height:108.44mm;width:183.99mm;">
                        <div class="htb"
                            style="left:0.50mm;width:182.94mm;top:0.50mm;height:108.44mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 187.94 113.44"
                                style="left:-2.50mm;top:-2.50mm;width:187.94mm;height:113.44mm;">
                                <defs>
                                    <pattern id="w_10" width="10" height="10" patternUnits="userSpaceOnUse">
                                        <rect width="10" height="10" fill="rgb(217,217,217)" />
                                    </pattern>
                                </defs>
                                <path fill="url(#w_10)" d="M0,0L181.94,0L181.94,10.33L0,10.33L0,0Z "></path>
                                <path d="M0,0 L0,107.45" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                                <path d="M14.04,10.33 L14.04,107.45"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.69,10.33 L42.69,107.45"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M66.34,10.33 L66.34,107.45"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M156.28,10.33 L156.28,107.45"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M181.94,0 L181.94,107.45"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                                <path d="M0,10.33 L181.94,10.33"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.50;"></path>
                                <path d="M0,19.20 L181.94,19.20"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,63.32 L181.94,63.32"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,107.45 L181.94,107.45"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M181.94,0 L181.94,107.45"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,107.45" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                                <path d="M0,107.45 L181.94,107.45"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                            </svg>

                            <!-- 소유권표시 -->
                            <div class="hce" style="left:0mm;top:0mm;width:181.94mm;height:10.33mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.55mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:178.34mm;">
                                            <span class="hrt cs13">소유권에 관한 표시&nbsp;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 소유권 항목라인 -->
                            <div class="hce" style="left:0mm;top:10.33mm;width:14.04mm;height:8.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:10.43mm;">
                                            <span class="hrt cs8">순위</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:14.04mm;top:10.33mm;width:28.65mm;height:8.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:25.05mm;">
                                            <span class="hrt cs8">소유권자</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:42.69mm;top:10.33mm;width:23.66mm;height:8.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:20.05mm;">
                                            <span class="hrt cs8">등기일</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:66.34mm;top:10.33mm;width:89.94mm;height:8.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs8">소유권자 내역</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:156.28mm;top:10.33mm;width:25.66mm;height:8.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:22.06mm;">
                                            <span class="hrt cs8">상태</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- 01.소유권 첫줄 -->
                            <div class="hce" style="left:0mm;top:19.20mm;width:14.04mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:19.62mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:10.43mm;">
                                            <span class="hrt cs8">1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:14.04mm;top:19.20mm;width:28.65mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:19.62mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:25.05mm;">
                                            <span class="hrt cs8">
                                                <? if($op !='0'){echo $view['wr_20'];} else { echo preg_replace('/(?<=.{1})./u','*',$view['wr_20']); } ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:42.69mm;top:19.20mm;width:23.66mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:17.10mm;">
                                        <div class="hls ps26"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:20.05mm;">
                                            <span class="hrt cs8">
                                                <?=substr($view['wr_26'],0,10) ;?>
                                            </span>
                                        </div>
                                        <div class="hls ps26"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:4.86mm;height:3.88mm;width:20.05mm;">
                                            <span class="hrt cs8">
                                                <?=substr($view['wr_26'],-5) ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:66.34mm;top:19.20mm;width:89.94mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:4.10mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs8">*개인코드 :&nbsp;</span><span class="hrt cs12">
                                                <?=$view['wr_25'] ;?>
                                            </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs8">*주 소</span><span class="hrt cs25">&nbsp;</span><span
                                                class="hrt cs8">:&nbsp;</span><span class="hrt cs12">
                                                <? if($op !='0'){echo $view['wr_24'];} else { echo preg_replace('/(?<=.{12})./u','*',$view['wr_24']); } ?>
                                            </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs8">*연락처 :&nbsp;</span><span class="hrt cs12">
                                                <? if($op !='0'){echo $view['wr_23'];} else { echo substr($view['wr_23'],0,-4)."****"; }?>
                                            </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs8">*이메일 :&nbsp;</span><span class="hrt cs12">
                                                <? if($op !='0'){echo $view['wr_22'];} else { echo substr($view['wr_22'],0,-4)."**"; }?>
                                            </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs8">*생년월일</span><span
                                                class="hrt cs25">&nbsp;:&nbsp;</span><span class="hrt cs12">
                                                <? if($op !='0'){echo $view['wr_21'];} else { echo preg_replace('/(?<=.{5})./u','*',$view['wr_21']); } ?>
                                            </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:30.85mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs8">*Hash</span><span class="hrt cs25">&nbsp;</span><span
                                                class="hrt cs8">:&nbsp;</span><span class="hrt cs12">
                                                <?= $view['wr_28'] ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:156.28mm;top:19.20mm;width:25.66mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:19.62mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:22.06mm;">
                                            <span class="hrt cs8">
                                                현재사항
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                         <!-- 02.소유권 2번째줄 -->
                                <?php 
                                $a=count($owners) ; ?>
                                <? if($a>1){  ?>
                                <?php $data = $owners[1]; ?>

                            <div class="hce" style="left:0mm;top:63.32mm;width:14.04mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:19.62mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:10.43mm;">
                                            <span class="hrt cs8">2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hce" style="left:14.04mm;top:63.32mm;width:28.65mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:19.62mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:25.05mm;">
                                            <span class="hrt cs16">
                                                <? if($op !='0'){echo $data['show_name'] ;} else { echo preg_replace('/(?<=.{1})./u','*',$view['wr_20']); } ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hce" style="left:42.69mm;top:63.32mm;width:23.66mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:17.10mm;">
                                        <div class="hls ps26"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:20.05mm;">
                                            <span class="hrt cs16">
                                                <?=substr($data['regtime'],0,10);?>
                                            </span>
                                        </div>
                                        <div class="hls ps26"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:4.86mm;height:3.88mm;width:20.05mm;">
                                            <span class="hrt cs16">
                                                <?=substr($data['regtime'],-5) ;?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hce" style="left:66.34mm;top:63.32mm;width:89.94mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:4.10mm;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs16">*개인코드 :&nbsp;</span><span class="hrt cs15">
                                                <?=$data['wallet_address'] ;?>
                                            </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs16">*주 소</span><span class="hrt cs26">&nbsp;</span><span
                                                class="hrt cs16">:&nbsp;</span><span class="hrt cs15">
                                                <? if($op !='0'){echo $data['home_address'];} else { echo preg_replace('/(?<=.{12})./u','*',$data['home_address']); } ?>
                                            </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs16">*연락처 :&nbsp;</span><span class="hrt cs15">
                                                <? if($op !='0'){echo $data['phone'];} else { echo substr($data['phone'],0,-4)."****"; }?>
                                            </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs16">*이메일 :&nbsp;</span><span class="hrt cs15">
                                                <? if($op !='0'){echo $data['email'];} else { echo substr($data['email'],0,-4)."**"; }?>
                                            </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs16">*생년월일 :&nbsp;</span><span class="hrt cs15">
                                                <?  if($op !='0'){echo $data['dateOf'];} else { echo preg_replace('/(?<=.{5})./u','*',$data['dateOf']); } ?>
                                            </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:30.85mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs16">*Hash :&nbsp;</span><span class="hrt cs15">
                                                <?=$data['owhash'];?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hce" style="left:156.28mm;top:63.32mm;width:25.66mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:19.62mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:22.06mm;">
                                            <span class="hrt cs16">변경</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
              

                           <?} else {?>

                            <div class="hce" style="left:0mm;top:63.32mm;width:14.04mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:19.62mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:10.43mm;">
                                            <span class="hrt cs8"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hce" style="left:14.04mm;top:63.32mm;width:28.65mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:19.62mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:25.05mm;">
                                            <span class="hrt cs16"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:42.69mm;top:63.32mm;width:23.66mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:17.10mm;">
                                        <div class="hls ps26"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:20.05mm;">
                                            <span class="hrt cs16"> </span>
                                        </div>
                                        <div class="hls ps26"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:4.86mm;height:3.88mm;width:20.05mm;">
                                            <span class="hrt cs16"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:66.34mm;top:63.32mm;width:89.94mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:4.10mm; margin:0 auto;">
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs16"> </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs16"> </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:86.33mm; text-align:center;">
                                            <span class="hrt cs16">소유권 변동(변경) 없음 </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs16"> </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs16"> </span>
                                        </div>
                                        <div class="hls ps22"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:30.85mm;height:3.88mm;width:86.33mm;">
                                            <span class="hrt cs16"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:156.28mm;top:63.32mm;width:25.66mm;height:44.13mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:19.62mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:22.06mm;">
                                            <span class="hrt cs16"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?} //2째줄 끝?>

                        </div>
                    </div>


            <div class="hls ps20"
                style="line-height:5.52mm;white-space:nowrap;left:0mm;top:111.94mm;height:6.35mm;width:183.99mm;">
            </div>
            <div class="hls ps20"
                style="line-height:109.44mm;white-space:nowrap;left:0mm;top:122.41mm;height:109.44mm;width:183.99mm;">
                <div class="htb"
                    style="left:0.50mm;width:182.94mm;top:0.50mm;height:109.44mm;display:inline-block;position:relative;vertical-align:middle;">
                    <svg class="hs" viewBox="-2.50 -2.50 187.94 114.44"
                        style="left:-2.50mm;top:-2.50mm;width:187.94mm;height:114.44mm;">
                        <path fill="url(#w_10)" d="M0,0L181.94,0L181.94,9.33L0,9.33L0,0Z "></path>
                        <path d="M0,0 L0,108.45" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                        </path>
                        <path d="M14.04,9.33 L14.04,108.45"
                            style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                        <path d="M42.69,9.33 L42.69,108.45"
                            style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                        <path d="M66.34,9.33 L66.34,108.45"
                            style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                        <path d="M156.28,9.33 L156.28,108.45"
                            style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                        <path d="M181.94,0 L181.94,108.45"
                            style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                        <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                        </path>
                        <path d="M0,9.33 L181.94,9.33" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.50;">
                        </path>
                        <path d="M0,18.20 L181.94,18.20" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                        </path>
                        <path d="M0,63.32 L181.94,63.32" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                        </path>
                        <path d="M0,108.45 L181.94,108.45"
                            style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                        <path d="M181.94,0 L181.94,108.45"
                            style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                        <path d="M0,0 L0,108.45" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                        </path>
                        <path d="M0,108.45 L181.94,108.45"
                            style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                        <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                        </path>
                    </svg>


                        <!-- 저작권 표시 -->
                        <div class="hce" style="left:0mm;top:0mm;width:181.94mm;height:9.33mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:2.05mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:178.34mm;">
                                        <span class="hrt cs13">저작권에 관한 표시&nbsp;</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 저작권 항목 -->
                        <div class="hce" style="left:0mm;top:9.33mm;width:14.04mm;height:8.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:2mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:10.43mm;">
                                        <span class="hrt cs8">순위</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:14.04mm;top:9.33mm;width:28.65mm;height:8.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:2mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:25.05mm;">
                                        <span class="hrt cs8">저작권자</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:42.69mm;top:9.33mm;width:23.66mm;height:8.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:2mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:20.05mm;">
                                        <span class="hrt cs8">등기일</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:66.34mm;top:9.33mm;width:89.94mm;height:8.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:2mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs8">저작권자 내역</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:156.28mm;top:9.33mm;width:25.66mm;height:8.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:2mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:22.06mm;">
                                        <span class="hrt cs8">상태</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- #1.저작권 첫줄-->
                        <div class="hce" style="left:0mm;top:18.20mm;width:14.04mm;height:45.12mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:20.12mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:10.43mm;">
                                        <span class="hrt cs12">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:14.04mm;top:18.20mm;width:28.65mm;height:45.12mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:20.12mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:25.05mm;">
                                        <span class="hrt cs12">
                                            <? if($rp !='0'){echo $view['wr_31'];} else { echo preg_replace('/(?<=.{1})./u','*',$view['wr_31']); } ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:42.69mm;top:18.20mm;width:23.66mm;height:45.12mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:17.79mm;">
                                    <div class="hls ps27"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:20.05mm;">
                                        <span class="hrt cs12">
                                            <?=substr($view['wr_37'],0,10) ;?>
                                        </span>
                                    </div>
                                    <div class="hls ps27"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:4.46mm;height:3.88mm;width:20.05mm;">
                                        <span class="hrt cs12">
                                            <?=substr($view['wr_37'],-5) ;?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:66.34mm;top:18.20mm;width:89.94mm;height:45.12mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:4.60mm;">
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs8">*개인코드 :&nbsp;</span><span class="hrt cs12">
                                            <?=$view['wr_36'] ;?>
                                        </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs8">*주 소</span><span class="hrt cs25">&nbsp;</span><span
                                            class="hrt cs8">:&nbsp;</span><span class="hrt cs12">
                                            <? if($rp !='0'){echo $view['wr_35'];} else { echo preg_replace('/(?<=.{12})./u','*',$view['wr_35']); } ?>
                                        </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs8">*연락처 :&nbsp;</span><span class="hrt cs12">
                                            <? if($rp !='0'){echo $view['wr_34'];} else { echo substr($view['wr_34'],0,-4)."****"; }?>
                                        </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs8">*이메일 :&nbsp;</span><span class="hrt cs12">
                                            <? if($rp !='0'){echo $view['wr_33'];} else { echo substr($view['wr_33'],0,-4)."**"; }?>
                                        </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs8">*생년월일</span><span class="hrt cs25">&nbsp;:&nbsp;</span><span
                                            class="hrt cs12">
                                            <?  if($rp !='0'){echo $view['wr_32'];} else { echo preg_replace('/(?<=.{5})./u','*',$view['wr_32']); } ?>
                                        </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:30.85mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs8">*Hash</span><span class="hrt cs25">&nbsp;</span><span
                                            class="hrt cs8">:&nbsp;</span><span class="hrt cs12">
                                            <?= $view['wr_39'] ;?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:156.28mm;top:18.20mm;width:25.66mm;height:45.12mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:20.12mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:22.06mm;">
                                        <span class="hrt cs12">현재사항</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- #2.저작권 둘째줄 -->

                    
                            <?php 
                                $b=count($copyr) ; ?>
                            <? if($b>1){  ?>

                        <?php $data = $copyr[1]; ?>
                        <div class="hce" style="left:0mm;top:63.32mm;width:14.04mm;height:44.13mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:19.62mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:10.43mm;">
                                        <span class="hrt cs8">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hce" style="left:14.04mm;top:63.32mm;width:28.65mm;height:44.13mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:19.62mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:25.05mm;">
                                        <span class="hrt cs16">
                                            <? if($op !='0'){echo $data['show_name'] ;} else { echo preg_replace('/(?<=.{1})./u','*',$view['wr_20']); } ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:42.69mm;top:63.32mm;width:23.66mm;height:44.13mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:17.10mm;">
                                    <div class="hls ps26"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:20.05mm;">
                                        <span class="hrt cs16">
                                            <?=substr($data['regtime'],0,10);?>
                                        </span>
                                    </div>
                                    <div class="hls ps26"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:4.86mm;height:3.88mm;width:20.05mm;">
                                        <span class="hrt cs16">
                                            <?=substr($data['regtime'],-5) ;?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:66.34mm;top:63.32mm;width:89.94mm;height:44.13mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:4.10mm;">
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs16">*개인코드 :&nbsp;</span><span class="hrt cs15">
                                            <?=$data['wallet_address'] ;?>
                                        </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs16">*주 소</span><span class="hrt cs26">&nbsp;</span><span
                                            class="hrt cs16">:&nbsp;</span><span class="hrt cs15">
                                            <? if($op !='0'){echo $data['home_address'];} else { echo preg_replace('/(?<=.{12})./u','*',$data['home_address']); } ?>
                                        </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs16">*연락처 :&nbsp;</span><span class="hrt cs15">
                                            <? if($op !='0'){echo $data['phone'];} else { echo substr($data['phone'],0,-4)."****"; }?>
                                        </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs16">*이메일 :&nbsp;</span><span class="hrt cs15">
                                            <? if($op !='0'){echo $data['email'];} else { echo substr($data['email'],0,-4)."**"; }?>
                                        </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs16">*생년월일 :&nbsp;</span><span class="hrt cs15">
                                            <?  if($op !='0'){echo $data['dateOf'];} else { echo preg_replace('/(?<=.{5})./u','*',$data['dateOf']); } ?>
                                        </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:30.85mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs16">*Hash :&nbsp;</span><span class="hrt cs15">
                                            <?=$data['owhash'];?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:156.28mm;top:63.32mm;width:25.66mm;height:44.13mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:19.62mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:22.06mm;">
                                        <span class="hrt cs16">변경</span>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                            <?} else {?>

                        <div class="hce" style="left:0mm;top:63.32mm;width:14.04mm;height:44.13mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:19.62mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:10.43mm;">
                                        <span class="hrt cs8"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hce" style="left:14.04mm;top:63.32mm;width:28.65mm;height:44.13mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:19.62mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:25.05mm;">
                                        <span class="hrt cs16"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:42.69mm;top:63.32mm;width:23.66mm;height:44.13mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:17.10mm;">
                                    <div class="hls ps26"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:20.05mm;">
                                        <span class="hrt cs16"> </span>
                                    </div>
                                    <div class="hls ps26"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:4.86mm;height:3.88mm;width:20.05mm;">
                                        <span class="hrt cs16"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:66.34mm;top:63.32mm;width:89.94mm;height:44.13mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:4.10mm; margin:0 auto;">
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs16"> </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs16"> </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:86.33mm; text-align:center;">
                                        <span class="hrt cs16">저작권 변동(변경)사항 없음 </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs16"> </span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs16"></span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:30.85mm;height:3.88mm;width:86.33mm;">
                                        <span class="hrt cs16"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:156.28mm;top:63.32mm;width:25.66mm;height:44.13mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:19.62mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:22.06mm;">
                                        <span class="hrt cs16"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?} //2줄 저작권 끝 ?>

                </div>
            </div>
        </div>
    </div>
   </div>

    <!-- #3페이지 -->
        <div class="hpa" style="width:210mm;height:296.99mm;">
            <div class="hsR"
                style="top:1.11mm;left:0.13mm;width:209.87mm;height:295.87mm;background-repeat:no-repeat;background-image:url('hd1_back.png');">
            </div>
            <div class="hcD" style="left:13mm;top:10mm;">
                <div class="hcI">
                    <div class="hls ps9"
                        style="line-height:2.48mm;white-space:nowrap;left:0mm;top:-0.16mm;height:3.17mm;width:183.99mm;">
                        <span class="hrt cs9">문서확인번호 ▣ XDCB-7F64-8A3B-6F63 ▣(열람용/견본)</span>
                    </div>
                </div>
            </div>
            <div class="hcD" style="left:13mm;top:253.99mm;">
                <div class="hcI" style="top:7.28mm;">
                    <div class="hls ps29"
                        style="line-height:2.48mm;white-space:nowrap;left:0mm;top:-0.16mm;height:3.17mm;width:183.99mm;">
                        <span class="hrt cs9">
                            <?=date("Y-m-d H:i:s");?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span><span class="hrt cs11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <div class="haN" style="left:0mm;top:0mm;width:1.59mm;height:3.17mm;"><span class="hrt cs11">3</span>
                        </div><span class="hrt cs11">/4</span>
                    </div>
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
                        style="line-height:146.11mm;white-space:nowrap;left:0mm;top:0mm;height:146.11mm;width:183.99mm;">
                        <div class="htb"
                            style="left:0.50mm;width:182.94mm;top:0.50mm;height:146.11mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 187.94 151.11"
                                style="left:-2.50mm;top:-2.50mm;width:187.94mm;height:151.11mm;">
                                <defs>
                                    <pattern id="w_20" width="10" height="10" patternUnits="userSpaceOnUse">
                                        <rect width="10" height="10" fill="rgb(217,217,217)" />
                                    </pattern>
                                </defs>
                                <path fill="url(#w_20)" d="M0,0L181.94,0L181.94,9.33L0,9.33L0,0Z "></path>
                                <path d="M0,0 L0,145.12" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                                <path d="M15.04,9.33 L15.04,145.12"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M44.68,9.33 L44.68,145.12"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M69.34,9.33 L69.34,145.12"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M181.94,0 L181.94,145.12"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                                <path d="M0,9.33 L181.94,9.33" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.50;">
                                </path>
                                <path d="M0,17.20 L181.94,17.20" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                                </path>
                                <path d="M0,82.95 L181.94,82.95" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                                </path>
                                <path d="M0,145.11 L181.94,145.11"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M181.94,0 L181.94,145.12"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,145.12" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                                <path d="M0,145.11 L181.94,145.11"
                                    style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                                </path>
                            </svg>
                            <div class="hce" style="left:0mm;top:0mm;width:181.94mm;height:9.33mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.05mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:178.34mm;">
                                            <span class="hrt cs13">권리제한(근저당,압류등 설정)에 관한 표시&nbsp;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0mm;top:9.33mm;width:15.04mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:11.43mm;">
                                            <span class="hrt cs25">순위</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:15.04mm;top:9.33mm;width:29.65mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.05mm;">
                                            <span class="hrt cs25">등기원인</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:44.68mm;top:9.33mm;width:24.66mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:21.05mm;">
                                            <span class="hrt cs25">설정일</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:69.34mm;top:9.33mm;width:112.60mm;height:7.87mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps20"
                                            style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:108.99mm;">
                                            <span class="hrt cs25">권리자 및 기타사항</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <? if($view['wr_50']=='권리제한 없음'){   //첫번째 설정내역이 없으면 '해당없음표시' ?>
                            <div id="right1-0">
                                <div class="hce" style="left:0mm;top:17.20mm;width:15.04mm;height:65.75mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:30.43mm;">
                                            <div class="hls ps20"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:11.43mm;">
                                                <span class="hrt cs12">- </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hce" style="left:15.04mm;top:17.20mm;width:29.65mm;height:65.75mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:30.43mm;">
                                            <div class="hls ps20"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.05mm;">
                                                -</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hce" style="left:44.68mm;top:17.20mm;width:24.66mm;height:65.75mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:28.11mm;">
                                            <div class="hls ps27"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:7.76mm;width:21.05mm;">
                                                -</div>

                                        </div>
                                    </div>
                                </div>
                                <div class="hce" style="left:69.34mm;top:17.20mm;width:112.60mm;height:65.75mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:2.49mm;">
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:108.99mm;">
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:108.99mm;">

                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:108.99mm;">
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:108.99mm;">
                                            </div>
                                            <div class="hls ps30 text-center"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:108.99mm;">
                                                권리제한 및 설정내역 해당없음</div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:30.85mm;height:3.88mm;width:108.99mm;">
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:37.06mm;height:7.76mm;width:108.99mm;">
                                            </div>

                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:49.48mm;height:3.88mm;width:108.99mm;">
                                                -</div>

                                            <div class="hls ps22"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:55.69mm;height:3.88mm;width:108.99mm;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--right1-0 end-->

                            <?} else { ?>

                            <div id="right1-1">
                                <!-- #1 -->
                                <div class="hce" style="left:0mm;top:17.20mm;width:15.04mm;height:65.75mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:30.43mm;">
                                            <div class="hls ps20"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:11.43mm;">
                                                <span class="hrt cs12">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hce" style="left:15.04mm;top:17.20mm;width:29.65mm;height:65.75mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:30.43mm;">
                                            <div class="hls ps20"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.05mm;">
                                                <span class="hrt cs12">
                                                    <?=$view['wr_51'] ;?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hce" style="left:44.68mm;top:17.20mm;width:24.66mm;height:65.75mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:28.11mm;">
                                            <div class="hls ps27"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:21.05mm;">
                                                <span class="hrt cs12">
                                                    <?=substr($view['wr_52'],0,10) ;?>
                                                </span>
                                            </div>
                                            <div class="hls ps27"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:4.46mm;height:3.88mm;width:21.05mm;">
                                                <span class="hrt cs12">
                                                    <?=substr($view['wr_52'],-5) ;?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hce" style="left:69.34mm;top:17.20mm;width:112.60mm;height:65.75mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:2.49mm;">
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs8">채권최고액 :&nbsp;</span><span class="hrt cs12">금
                                                    <?= number_format($view['wr_53']) ;?>
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs8">설정근거 :&nbsp;</span><span class="hrt cs12">
                                                    <?=$view['wr_60'] ;?>
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs8">채권자명(개인코드) :&nbsp;</span><span class="hrt cs12">
                                                    <? if($cp !='0'){echo $view['wr_54'];} else { echo preg_replace('/(?<=.{1})./u','*',$view['wr_54']); } ?>(
                                                    <?=$view['wr_55'] ;?>)
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs8">채권자정보 :&nbsp;</span><span class="hrt cs12">
                                                    <? if($cp !='0'){echo $view['wr_56'];} else { echo preg_replace('/(?<=.{12})./u','*',$view['wr_56']); } ?>
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs8">채무자명(개인코드) :&nbsp;</span><span class="hrt cs12">
                                                    <? if($cp !='0'){echo $view['wr_57'];} else { echo preg_replace('/(?<=.{1})./u','*',$view['wr_57']); } ?>(
                                                    <?=$view['wr_58'] ;?>)
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:30.85mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs8">채무자정보 :&nbsp;</span><span class="hrt cs12">
                                                    <? if($cp !='0'){echo $view['wr_59'];} else { echo preg_replace('/(?<=.{12})./u','*',$view['wr_59']); } ?>
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:37.06mm;height:7.76mm;width:108.99mm;">
                                                <span class="hrt cs8">기타 설정사항 :&nbsp;</span><span class="hrt cs12">
                                                    <?=$view['wr_61'] ;?>&nbsp;
                                                </span>
                                            </div>

                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:49.48mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs8">설정해제(말소)일 :&nbsp;</span><span class="hrt cs12">설정중</span>
                                            </div>

                                            <div class="hls ps22"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:55.69mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs8">설정해쉬값 :&nbsp;</span><span class="hrt cs12">
                                                    <?=$view['wr_63'] ;?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?}?>
                            </div>
                            <!--right1-1 end-->


                            <!-- 2번째 -->
                            <?php 
                                $c=count($new1) ; ?>
                            <? if($c>1){  ?>

                            <?php $data = $new1[1]; ?>

                            <div id="right2-1">
                                <div class="hce" style="left:0mm;top:82.95mm;width:15.04mm;height:62.17mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:28.65mm;">
                                            <div class="hls ps20"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:11.43mm;">
                                                <span class="hrt cs12">2</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hce" style="left:15.04mm;top:82.95mm;width:29.65mm;height:62.17mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:28.65mm;">
                                            <div class="hls ps20"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.05mm;">
                                                <span class="hrt cs15">
                                                    <?=$data['wr_51'] ;?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hce" style="left:44.68mm;top:82.95mm;width:24.66mm;height:62.17mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:26.32mm;">
                                            <div class="hls ps27"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:21.05mm;">
                                                <span class="hrt cs15">
                                                    <?=substr($data['wr_52'],0,10) ;?>
                                                </span>
                                            </div>
                                            <div class="hls ps27"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:4.46mm;height:3.88mm;width:21.05mm;">
                                                <span class="hrt cs15">
                                                    <?=substr($data['wr_52'],-5) ;?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hce" style="left:69.34mm;top:82.95mm;width:112.60mm;height:62.17mm;">
                                    <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                        <div class="hcI" style="top:0.71mm;">
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs16">채권최고액 :&nbsp;</span><span class="hrt cs15">금
                                                    number_format(
                                                    <?=$data['wr_53'] ;?>)원
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs16">설정근거 :&nbsp;</span><span class="hrt cs15">
                                                    <?=$data['wr_60'] ;?>
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs16">채권자명(개인코드) :&nbsp;</span><span class="hrt cs15">
                                                    <? if($cp !='0'){echo $data['wr_54'];} else { echo preg_replace('/(?<=.{1})./u','*',$data['wr_54']); } ?>(
                                                    <?=$data['wr_55'] ;?>)
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs16">채권자정보 :&nbsp;</span><span class="hrt cs15">
                                                    <? if($cp !='0'){echo $data['wr_56'];} else { echo preg_replace('/(?<=.{12})./u','*',$data['wr_56']); } ?>
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs16">채무자명(개인코드) :&nbsp;</span><span class="hrt cs15">
                                                    <? if($cp !='0'){echo $data['wr_57'];} else { echo preg_replace('/(?<=.{1})./u','*',$data['wr_57']); } ?>(
                                                    <?=$data['wr_58'] ;?>)
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:30.85mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs16">채무자정보 :&nbsp;</span><span class="hrt cs15">
                                                    <? if($cp !='0'){echo $data['wr_59'];} else { echo preg_replace('/(?<=.{12})./u','*',$data['wr_59']); } ?>
                                                </span>
                                            </div>
                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:37.06mm;height:7.76mm;width:108.99mm;">
                                                <span class="hrt cs16">기타 설정사항 :&nbsp;</span><span class="hrt cs15">
                                                    <?=$data['wr_61'] ;?>&nbsp;
                                                </span>
                                            </div>

                                            <div class="hls ps30"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:49.48mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs16">설정해제(말소)일 :&nbsp;</span><span class="hrt cs15">
                                                    <?=$data['wr_62'] ;?>
                                                </span>
                                            </div>
                                            <div class="hls ps22"
                                                style="line-height:3.10mm;white-space:nowrap;left:0mm;top:55.69mm;height:3.88mm;width:108.99mm;">
                                                <span class="hrt cs16">설정해쉬값 :&nbsp;</span><span class="hrt cs15">
                                                    <?=$data['wr_owhash'] ;?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--right1-1 end-->

                    <?} else {?>

                    <div id="right2-0">
                        <div class="hce" style="left:0mm;top:82.95mm;width:15.04mm;height:62.17mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:28.65mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:11.43mm;">
                                        <span class="hrt cs12">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hce" style="left:15.04mm;top:82.95mm;width:29.65mm;height:62.17mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:28.65mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.05mm;">
                                        -</div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:44.68mm;top:82.95mm;width:24.66mm;height:62.17mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:26.32mm;">
                                    <div class="hls ps27"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:7.76mm;width:21.05mm;">
                                        <span class="hrt cs15">- </span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="hce" style="left:69.34mm;top:82.95mm;width:112.60mm;height:62.17mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.71mm;">
                                    <div class="hls ps30"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:108.99mm;">
                                    </div>
                                    <div class="hls ps30"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:108.99mm;">
                                    </div>
                                    <div class="hls ps30"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:108.99mm;">
                                    </div>
                                    <div class="hls ps30"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:108.99mm;">
                                    </div>
                                    <div class="hls ps30"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:108.99mm; text-align:center;">
                                        과거 설정내역 없음</div>
                                    <div class="hls ps30"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:30.85mm;height:3.88mm;width:108.99mm;">
                                    </div>
                                    <div class="hls ps30"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:37.06mm;height:3.88mm;width:108.99mm;">
                                    </div>
                                    <div class="hls ps30"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:43.27mm;height:3.88mm;width:108.99mm;">
                                    </div>
                                    <div class="hls ps30"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:49.48mm;height:3.88mm;width:108.99mm;">
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:55.69mm;height:3.88mm;width:108.99mm;">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--right2-0 end-->
            <?}?>


            <!-- 문서검증 -->
            <div class="hls ps20"
                style="line-height:5.52mm;white-space:nowrap;left:0mm;top:149.60mm;height:6.35mm;width:183.99mm;">
            </div>
            <div class="hls ps20"
                style="line-height:57.55mm;white-space:nowrap;left:0mm;top:160.08mm;height:57.55mm;width:183.99mm;">
                <div class="htb"
                    style="left:0.50mm;width:182.94mm;top:0.50mm;height:57.55mm;display:inline-block;position:relative;vertical-align:middle;">
                    <svg class="hs" viewBox="-2.50 -2.50 187.94 62.55"
                        style="left:-2.50mm;top:-2.50mm;width:187.94mm;height:62.55mm;">
                        <path fill="url(#w_20)" d="M0,0L181.94,0L181.94,9.33L0,9.33L0,0Z "></path>
                        <path d="M0,0 L0,56.56" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                        </path>
                        <path d="M15.04,9.33 L15.04,56.56" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                        <path d="M44.68,9.33 L44.68,56.56" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                        <path d="M69.34,9.33 L69.34,56.56" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                        <path d="M181.94,0 L181.94,56.56" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                        <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                        </path>
                        <path d="M0,9.33 L181.94,9.33" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.50;"></path>
                        <path d="M0,17.20 L181.94,17.20" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                        <path d="M0,56.55 L181.94,56.55" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                        <path d="M181.94,0 L181.94,56.56" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                        <path d="M0,0 L0,56.56" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                        </path>
                        <path d="M0,56.55 L181.94,56.55" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                        <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                        </path>
                    </svg>
                    <div class="hce" style="left:0mm;top:0mm;width:181.94mm;height:9.33mm;">
                        <div class="hcD" style="left:1.80mm;top:0.50mm;">
                            <div class="hcI" style="top:2.05mm;">
                                <div class="hls ps20"
                                    style="line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:178.34mm;">
                                    <span class="hrt cs13">서류검증에 관한 표시&nbsp;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hce" style="left:0mm;top:9.33mm;width:15.04mm;height:7.87mm;">
                        <div class="hcD" style="left:1.80mm;top:0.50mm;">
                            <div class="hcI" style="top:1.50mm;">
                                <div class="hls ps20"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:11.43mm;">
                                    <span class="hrt cs25">순위</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hce" style="left:15.04mm;top:9.33mm;width:29.65mm;height:7.87mm;">
                        <div class="hcD" style="left:1.80mm;top:0.50mm;">
                            <div class="hcI" style="top:1.50mm;">
                                <div class="hls ps20"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.05mm;">
                                    <span class="hrt cs25">등기원인</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hce" style="left:44.68mm;top:9.33mm;width:24.66mm;height:7.87mm;">
                        <div class="hcD" style="left:1.80mm;top:0.50mm;">
                            <div class="hcI" style="top:1.50mm;">
                                <div class="hls ps20"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:21.05mm;">
                                    <span class="hrt cs25">검증등록</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hce" style="left:69.34mm;top:9.33mm;width:112.60mm;height:7.87mm;">
                        <div class="hcD" style="left:1.80mm;top:0.50mm;">
                            <div class="hcI" style="top:1.50mm;">
                                <div class="hls ps20"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:108.99mm;">
                                    <span class="hrt cs25">서류검증에 관한 내역</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hce" style="left:0mm;top:17.20mm;width:15.04mm;height:39.35mm;">
                        <div class="hcD" style="left:1.80mm;top:0.50mm;">
                            <div class="hcI" style="top:17.24mm;">
                                <div class="hls ps20"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:11.43mm;">
                                    <span class="hrt cs8">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hce" style="left:15.04mm;top:17.20mm;width:29.65mm;height:39.35mm;">
                        <div class="hcD" style="left:1.80mm;top:0.50mm;">
                            <div class="hcI" style="top:17.24mm;">
                                <div class="hls ps20"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.05mm;">
                                    <span class="hrt cs8">
                                        <?php if($view['wr_12']=="일반등기"){echo '서류검증 없음';}else{echo'서류검증';} ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hce" style="left:44.68mm;top:17.20mm;width:24.66mm;height:39.35mm;">
                        <div class="hcD" style="left:1.80mm;top:0.50mm;">
                            <div class="hcI" style="top:14.71mm;">
                                <div class="hls ps26"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:21.05mm;">
                                    <span class="hrt cs8">
                                        <?= substr($view['wr_75'],0,10) ;?>
                                    </span>
                                </div>
                                <div class="hls ps26"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:4.86mm;height:3.88mm;width:21.05mm;">
                                    <span class="hrt cs8">
                                        <?= substr($view['wr_75'],-5) ;?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hce" style="left:69.34mm;top:17.20mm;width:112.60mm;height:39.35mm;">
                        <div class="hcD" style="left:1.80mm;top:0.50mm;">
                            <div class="hcI" style="top:4.82mm;">
                                <div class="hls ps0"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:108.99mm;">
                                    <span class="hrt cs8">신청자KYC확인</span><span class="hrt cs25">&nbsp;:&nbsp;</span><span
                                        class="hrt cs8">
                                        <?= $view['wr_71'] ;?>
                                    </span>
                                </div>
                                <div class="hls ps0"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:108.99mm;">
                                    <span class="hrt cs8">등기물건확인(보증)서</span><span class="hrt cs25">&nbsp;:&nbsp;</span><span
                                        class="hrt cs8">
                                        <?=$view['wr_72'] ;?>
                                    </span>
                                </div>
                                <div class="hls ps0"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:108.99mm;">
                                    <span class="hrt cs8">저작권 확인서</span><span class="hrt cs25">&nbsp;:&nbsp;</span><span
                                        class="hrt cs8">
                                        <?= $view['wr_73'] ;?>
                                    </span>
                                </div>
                                <div class="hls ps0"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:108.99mm;">
                                    <span class="hrt cs8">검증관련첨부자료</span><span class="hrt cs25">&nbsp;:&nbsp;</span><span
                                        class="hrt cs8">
                                        <?=$view['wr_74'] ;?>
                                    </span>
                                </div>
                                <div class="hls ps0"
                                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:108.99mm;">
                                    <span class="hrt cs8">검증해쉬값</span><span class="hrt cs25">&nbsp;:&nbsp;</span><span
                                        class="hrt cs8">
                                        <?= $view['wr_76'] ;?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
   </div>
  </div>

   
    <!-- #4페이지 -->
    <div class="hpa" style="width:210mm;height:296.99mm;">
        <div class="hsR"
            style="top:1.11mm;left:0.13mm;width:209.87mm;height:295.87mm;background-repeat:no-repeat;background-image:url('hd1_back.png');">
        </div>
        <div class="hcD" style="left:13mm;top:10mm;">
            <div class="hcI">
                <div class="hls ps9"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:-0.16mm;height:3.17mm;width:183.99mm;">
                    <span class="hrt cs9">문서확인번호 ▣ XDCB-7F64-8A3B-6F63 ▣(열람용/견본)</span>
                </div>
            </div>
        </div>
        <div class="hcD" style="left:13mm;top:253.99mm;">
            <div class="hcI" style="top:7.28mm;">
                <div class="hls ps29"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:-0.16mm;height:3.17mm;width:183.99mm;">
                    <span class="hrt cs9">
                        <?=date("Y-m-d H:i:s");?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </span><span class="hrt cs11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="haN" style="left:0mm;top:0mm;width:1.59mm;height:3.17mm;"><span class="hrt cs11">4</span>
                    </div><span class="hrt cs11">/4</span>
                </div>
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
                    style="line-height:85.91mm;white-space:nowrap;left:0mm;top:0mm;height:85.91mm;width:183.99mm;">
                    <div class="htb"
                        style="left:0.50mm;width:182.94mm;top:0.50mm;height:85.91mm;display:inline-block;position:relative;vertical-align:middle;">
                        <svg class="hs" viewBox="-2.50 -2.50 187.94 90.91"
                            style="left:-2.50mm;top:-2.50mm;width:187.94mm;height:90.91mm;">
                            <defs>
                                <pattern id="w_30" width="10" height="10" patternUnits="userSpaceOnUse">
                                    <rect width="10" height="10" fill="rgb(217,217,217)" />
                                </pattern>
                            </defs>
                            <path fill="url(#w_30)" d="M0,0L181.94,0L181.94,9.33L0,9.33L0,0Z "></path>
                            <path d="M0,0 L0,84.92" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                            <path d="M14.27,9.33 L14.27,84.92"
                                style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                            <path d="M43.40,9.33 L43.40,84.92"
                                style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                            <path d="M67.45,9.33 L67.45,84.92"
                                style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                            <path d="M129.26,49.55 L129.26,84.92"
                                style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                            <path d="M181.94,0 L181.94,84.92" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                            <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                            <path d="M0,9.33 L181.94,9.33" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.50;">
                            </path>
                            <path d="M0,17.20 L181.94,17.20" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                            </path>
                            <path d="M67.45,49.55 L181.94,49.55"
                                style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                            <path d="M67.45,56.42 L181.94,56.42"
                                style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                            <path d="M0,84.92 L181.94,84.92" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                            </path>
                            <path d="M181.94,0 L181.94,84.92" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                            <path d="M0,0 L0,84.92" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                            <path d="M0,84.92 L181.94,84.92" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                            </path>
                            <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                        </svg>
                        <div class="hce" style="left:0mm;top:0mm;width:181.94mm;height:9.33mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:2.05mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:178.34mm;">
                                        <span class="hrt cs13">실사검증에 관한 표시&nbsp;</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:9.33mm;width:14.27mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:10.67mm;">
                                        <span class="hrt cs8">순위</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:14.27mm;top:9.33mm;width:29.13mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:25.53mm;">
                                        <span class="hrt cs8">등기원인</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.40mm;top:9.33mm;width:24.05mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:20.45mm;">
                                        <span class="hrt cs8">검증등록</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:67.45mm;top:9.33mm;width:114.49mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:110.88mm;">
                                        <span class="hrt cs8">실사검증에 관한 내역</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:17.20mm;width:14.27mm;height:67.72mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:31.42mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:10.67mm;">
                                        <span class="hrt cs8">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:14.27mm;top:17.20mm;width:29.13mm;height:67.72mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:31.42mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:25.53mm;">
                                        <span class="hrt cs8">
                                            <?php if($view['wr_12']=="검증등기"){echo '실사검증';}else{echo'실사검증 없음';} ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:43.40mm;top:17.20mm;width:24.05mm;height:67.72mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:28.89mm;">
                                    <div class="hls ps26"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:20.45mm;">
                                        <span class="hrt cs8">
                                            <?= substr($view['wr_93'],0,10) ;?>
                                        </span>
                                    </div>
                                    <div class="hls ps26"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:4.86mm;height:3.88mm;width:20.45mm;">
                                        <span class="hrt cs8">
                                            <?= substr($view['wr_93'],-5) ;?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:67.45mm;top:17.20mm;width:114.49mm;height:32.35mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.32mm;">

                                    <?php if($view['wr_12']=='검증등기'){ ?>
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:110.88mm;">
                                        <span class="hrt cs8">검증기관 :
                                            <?=$view['wr_88'] ;?>
                                        </span>
                                    </div>
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:110.88mm;">
                                        <span class="hrt cs8">검증장소 :
                                            <?=$view['wr_81'] ;?>
                                        </span>
                                    </div>
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:110.88mm;">
                                        <span class="hrt cs8">검증기간 :
                                            <?=$view['wr_87'] ;?>~
                                            <?=$view['wr_93'] ;?>
                                        </span>
                                    </div>
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:110.88mm;">
                                        <span class="hrt cs8">검증위원 :
                                            <?=$view['wr_90'] ;?>
                                        </span>
                                    </div>
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:24.64mm;height:3.88mm;width:110.88mm;">
                                        <span class="hrt cs8">검증해쉬값 :
                                            <?=$view['wr_94'] ;?>
                                        </span>
                                    </div>

                                    <?php } else{ ?>
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:110.88mm; text-align:center;">
                                        <span class="hrt cs8">실사검증등기에 해당없음</span>
                                    </div>
                                    <? }?>

                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:67.45mm;top:49.55mm;width:61.81mm;height:6.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:58.21mm;">
                                        <span class="hrt cs25">검증결과</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:129.26mm;top:49.55mm;width:52.68mm;height:6.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:49.08mm;">
                                        <span class="hrt cs25">검증위원 서명</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:67.45mm;top:56.42mm;width:61.81mm;height:28.49mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:2.49mm;">

                                    <?php if($view['wr_12']=='검증등기'){ ?>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:58.21mm;">
                                        <span class="hrt cs8">등기물건 실체 확인함</span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:6.01mm;height:3.88mm;width:58.21mm;">
                                        <span class="hrt cs8">저작권 확인함</span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:12.22mm;height:3.88mm;width:58.21mm;">
                                        <span class="hrt cs8">소유권 확인함</span>
                                    </div>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:18.43mm;height:3.88mm;width:58.21mm;">
                                        <span class="hrt cs8">기재내용과 동일함을 확인함</span>
                                    </div>

                                    <?php } else{ ?>
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:10mm;height:3.88mm;width:58.21mm;text-align:center">
                                        <span class="hrt cs8">해당없음</span>
                                    </div>
                                    <? }?>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:129.26mm;top:56.42mm;width:52.68mm;height:28.49mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI">
                                    <div class="hls ps22"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:0mm;">
                                    </div>
                                </div>
                            </div>

                            <?php if($view['wr_12']=='검증등기'){ ?>
                            <div class="hsR"
                                style="top:-30.02mm;left:3.06mm;width:46.87mm;height:19.31mm;background-repeat:no-repeat;">
                                <img style="width:100%" src='<?=$view['wr_9'] ;?>'>
                            </div>
                            <?php }else{?>
                            <div class="hsR"
                                style="top:12.0mm;left:3.06mm;width:46.87mm;height:19.31mm;background-repeat:no-repeat; text-align:center;">
                                <span class="hrt cs8">해당없음</span>
                            </div>
                            <? }?>
                        </div>
                    </div>
                </div>
                <div class="hls ps20"
                    style="line-height:3.43mm;white-space:nowrap;left:0mm;top:89.51mm;height:4.23mm;width:183.99mm;">
                </div>
                <div class="hls ps20"
                    style="line-height:41.81mm;white-space:nowrap;left:0mm;top:96.50mm;height:41.81mm;width:183.99mm;">
                    <div class="htb"
                        style="left:0.50mm;width:182.94mm;top:0.50mm;height:41.81mm;display:inline-block;position:relative;vertical-align:middle;">
                        <svg class="hs" viewBox="-2.50 -2.50 187.94 46.81"
                            style="left:-2.50mm;top:-2.50mm;width:187.94mm;height:46.81mm;">
                            <path fill="url(#w_30)" d="M0,0L181.94,0L181.94,9.33L0,9.33L0,0Z "></path>
                            <path d="M0,0 L0,40.82" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                            <path d="M15.04,9.33 L15.04,40.82"
                                style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                            <path d="M44.68,9.33 L44.68,40.82"
                                style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                            <path d="M84.31,9.33 L84.31,40.82"
                                style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                            <path d="M181.94,0 L181.94,40.82" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                            <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                            <path d="M0,9.33 L181.94,9.33" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.50;">
                            </path>
                            <path d="M0,17.20 L181.94,17.20" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                            </path>
                            <path d="M0,25.07 L181.94,25.07" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                            </path>
                            <path d="M0,32.94 L181.94,32.94" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                            </path>
                            <path d="M0,40.81 L181.94,40.81" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                            </path>
                            <path d="M181.94,0 L181.94,40.82" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                            <path d="M0,0 L0,40.82" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                            <path d="M0,40.81 L181.94,40.81" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;">
                            </path>
                            <path d="M0,0 L181.94,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                            </path>
                        </svg>
                        <div class="hce" style="left:0mm;top:0mm;width:181.94mm;height:9.33mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:2.05mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:178.34mm;">
                                        <span class="hrt cs13">블록체인 해쉬정보 등록 히스토리</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:9.33mm;width:15.04mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:11.43mm;">
                                        <span class="hrt cs8">순위</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:15.04mm;top:9.33mm;width:29.65mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.05mm;">
                                        <span class="hrt cs8">등기원인</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:44.68mm;top:9.33mm;width:39.63mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:36.03mm;">
                                        <span class="hrt cs8">등록일시</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:84.31mm;top:9.33mm;width:97.63mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:94.02mm;">
                                        <span class="hrt cs8">해쉬값</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:17.20mm;width:15.04mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:11.43mm;">
                                        <span class="hrt cs8">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:15.04mm;top:17.20mm;width:29.65mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.05mm;">
                                        <span class="hrt cs8">등기생성</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:44.68mm;top:17.20mm;width:39.63mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:36.03mm;">
                                        <span class="hrt cs8">
                                            <?= $view['wr_44'] ;?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:84.31mm;top:17.20mm;width:97.63mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:94.02mm;">
                                        <span class="hrt cs2">
                                            <?= $view['wr_45'] ;?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:25.07mm;width:15.04mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:11.43mm;">
                                        <span class="hrt cs8">2 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:15.04mm;top:25.07mm;width:29.65mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.05mm;">
                                        <span class="hrt cs8"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:44.68mm;top:25.07mm;width:39.63mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:36.03mm;">
                                        <span class="hrt cs8"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:84.31mm;top:25.07mm;width:97.63mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:94.02mm;">
                                        <span class="hrt cs10"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:32.94mm;width:15.04mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:11.43mm;">
                                        <span class="hrt cs8">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:15.04mm;top:32.94mm;width:29.65mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:26.05mm;">
                                        <span class="hrt cs8"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:44.68mm;top:32.94mm;width:39.63mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps20"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:36.03mm;">
                                        <span class="hrt cs8"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:84.31mm;top:32.94mm;width:97.63mm;height:7.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.50mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:94.02mm;">
                                        <span class="hrt cs10"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hls ps0"
                    style="line-height:2.79mm;white-space:nowrap;left:0mm;top:141.94mm;height:3.53mm;width:183.99mm;">
                </div>
                <div class="hls ps20"
                    style="line-height:3.43mm;white-space:nowrap;left:0mm;top:147.55mm;height:4.23mm;width:183.99mm;">
                    <span class="hrt cs22">위 증명서는 KNCA 규정에 따라 등록된 등기기록 내용과 틀림없음을 증명합니다.</span>
                </div>
                <div class="hls ps20"
                    style="line-height:3.43mm;white-space:nowrap;left:0mm;top:154.32mm;height:4.23mm;width:183.99mm;">
                    <span class="hrt cs22">서기
                        <?=date("Y 년 m 월 d 일");?>
                    </span>
                </div>
                <div class="hls ps20"
                    style="line-height:3.43mm;white-space:nowrap;left:0mm;top:161.09mm;height:4.23mm;width:183.99mm;">
                </div>
                <div class="hls ps20"
                    style="line-height:3.43mm;white-space:nowrap;left:0mm;top:167.87mm;height:4.23mm;width:0mm;"></div>
                <div class="hls ps20"
                    style="line-height:3.43mm;white-space:nowrap;left:0mm;top:189.50mm;height:4.23mm;width:183.99mm;">
                </div>
                <div class="hls ps21"
                    style="line-height:2.17mm;white-space:nowrap;left:0mm;top:196.34mm;height:2.82mm;width:183.99mm;">
                    <span
                        class="hrt cs24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
                <div class="hls ps0"
                    style="line-height:2.79mm;white-space:nowrap;left:0mm;top:200.26mm;height:3.53mm;width:183.99mm;">
                </div>
                <div class="hls ps0"
                    style="line-height:2.79mm;white-space:nowrap;left:0mm;top:205.90mm;height:3.53mm;width:183.99mm;">
                </div>
                <div class="hls ps21"
                    style="line-height:2.17mm;white-space:nowrap;left:0mm;top:212.64mm;height:2.82mm;width:183.99mm;">
                    <span
                        class="hrt cs24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
                <div class="hls ps0"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:216.57mm;height:3.17mm;width:183.99mm;">
                    <span class="hrt cs20">*실선으로 그어진 부분은 말소(변경)된 등기사항을 표시함.</span>
                </div>
                <div class="hls ps0"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:221.65mm;height:3.17mm;width:183.99mm;">
                    <span class="hrt cs20">*등기부에 등록된 사항이 없는 항목은 생략함.&nbsp;</span>
                </div>
                <div class="hls ps0"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:226.73mm;height:3.17mm;width:183.99mm;">
                    <span class="hrt cs20">*등기부는 컬러 또는 흑백으로 출력가능함.</span>
                </div>
            </div>
        </div>
        <div class="hsR" style="top:231.72mm;left:13mm;width:183.99mm;height:1.06mm;"><svg class="hs"
                viewBox="-0.15 -0.15 184.29 1.35" style="left:-0.15mm;top:-0.15mm;width:184.29mm;height:1.35mm;">
                <defs>
                    <pattern id="w_31" width="10" height="10" patternUnits="userSpaceOnUse">
                        <rect width="10" height="10" fill="rgb(0,0,0)" />
                    </pattern>
                </defs>
                <path fill="url(#w_31)" d="M0,0L183.99,0L183.99,1.06L0,1.06L0,0Z "></path>
            </svg></div>
        <div class="htb" style="left:13.50mm;width:169mm;top:188.57mm;height:21.63mm;">
            <div class="hce" style="left:0mm;top:0mm;width:131.92mm;height:20.64mm;">
                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                    <div class="hcI" style="top:1.07mm;">
                        <div class="hls ps28"
                            style="line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:128.33mm;">
                            <span class="hrt cs27">한국NFT공인인증원 등기정보중앙관리소 전산운영책임관</span>
                        </div>
                        <div class="hls ps23"
                            style="line-height:12.84mm;white-space:nowrap;left:0mm;top:4.66mm;height:12.84mm;width:128.33mm;">
                            <div class="hsR"
                                style="top:0mm;left:0mm;margin-bottom:0mm;margin-right:0mm;width:93.94mm;height:12.84mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url('hdb_logo1.png');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hce" style="left:131.92mm;top:0mm;width:36.08mm;height:20.64mm;">
                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                    <div class="hcI">
                        <div class="hls ps25"
                            style="line-height:3.76mm;white-space:nowrap;left:0mm;top:-0.23mm;height:4.59mm;width:32.48mm;">
                        </div>
                    </div>
                </div>
                <div class="hsR"
                    style="top:0.50mm;left:0.12mm;width:19.59mm;height:19.64mm;background-repeat:no-repeat;background-image:url('hdb_logo2.png');">
                </div>
            </div>
        </div>

                            
    </div>

 
</section>



<div class="col mb20 p20">
                
                <div class="h4_tl">[제출용] 발급신청으로 이동하기 </div>
                <div class=" flex-x-start mb20">
                    <?if($is_member){ ?>
                    <div><a href="/customPage/proof_call.php?wr_id=<?=$wr_id?>&mb_id=<?=$member['mb_id']?>" class="btn_b02 btn"><i
                                class="fa fa-list" aria-hidden="true"></i> NFT등록증명서 발급</a></div>
                    <?} else { ?>
                    <div onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn"><i class="fa fa-list"
                            aria-hidden="true"></i> NFT 등록증명서 발급 </div>
                    <?}?>
                    
                    <?if($is_member){ ?>
                    <div><a href="/customPage/proof_call.php?wr_id=<?=$wr_id?>&mb_id=<?=$member['mb_id']?>"
                            class="ml10 btn_b02 btn bg-red"><i class="fa fa-list" aria-hidden="true"></i> NFT 등기부등본 발급</a></div>
                    <?} else { ?>
                    <div onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn bg-red"><i class="fa fa-list"
                            aria-hidden="true"></i> NFT등기부등본 발급 </div>
                    <?}?>    
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




<?php
include_once(G5_THEME_PATH.'/tail.php'); 
