<?php

$para = $_GET;
if( !isset($para['n']) ){
	$para['n'] = 100;
	//exit;
}
$wr_id = $para['n'];

include_once $_SERVER['DOCUMENT_ROOT']."/customPage/libDB.php";
$datas = select("g5_write_300","*","wr_id='".sqlFilter($wr_id)."' ");

$view = array();
if( isset($datas[0]) ){
	$view = $datas[0];
}

?>
<!DOCTYPE html>
<html>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<head>
    <title>NFT 등록증명서</title>
    <meta http_quiv="content-type" content="text/html; charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+KR:wght@200,300,400,500,600,700,900&display=swap&subset=korean" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="certi_style.css">
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="jquery-barcode.js"></script>
   
</head>

</head>

<body>
    <div class="hpa" style="width:210mm;height:296.99mm;">
        <div class="hsR"
            style="top:-0.12mm;left:-0.11mm;width:210mm;height:264.61mm;background-repeat:no-repeat;background-image:url('certi_hd1.png');">
        </div>
        <div class="hcD" style="left:30mm;top:20mm;">
            <div class="hcI">
                <div class="hls ps9"
                    style="line-height:7.22mm;white-space:nowrap;left:0mm;top:0mm;height:7.90mm;width:150mm;">
                    <div class="htb"
                        style="left:0.50mm;width:169.96mm;top:0.50mm;height:7.90mm;display:inline-block;position:relative;vertical-align:middle;">
                        <div class="hce" style="left:0mm;top:0mm;width:28.01mm;height:6.91mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.02mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:24.41mm;">
                                        <span class="hrt cs16">등기고유번호</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:28.01mm;top:0mm;width:45.98mm;height:6.91mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.02mm;">
                                    <div class="hls ps23"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:42.38mm;">
                                        <span class="hrt cs23"><?=$view['wr_11']?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:74mm;top:0mm;width:37mm;height:6.91mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1.19mm;">
                                    <div class="hls ps0"
                                        style="line-height:2.79mm;white-space:nowrap;left:0mm;top:-0.18mm;height:3.53mm;width:33.40mm;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:111mm;top:0mm;width:57.96mm;height:6.91mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI">
                                    <div class="hls ps24"
                                        style="line-height:5.07mm;white-space:nowrap;left:0mm;top:0mm;height:5.91mm;width:54.36mm;">
                                       <!-- 바코드 -->
                                       <div>
                                        <div id="bcTarget1" style="margin-top:0px;"></div>
                                        <script type="text/javascript">
                                            $("#bcTarget1").barcode("<?=$view['wr_11']?>", "code128");
                                        </script>
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hcD" style="left:30mm;top:266.99mm;">
            <div class="hcI">
                <div class="hls ps25"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:-0.16mm;height:3.17mm;width:150mm;"><span
                        class="hrt cs19">발급확인번호: ARTER-1234
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;발급일:
                        2022년 2월 25일 11:23:32&nbsp;</span><span
                        class="hrt cs20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                        class="hrt cs21">&nbsp;</span></div>
                <div class="hls ps9"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:4.61mm;height:3.17mm;width:0mm;"></div>
                <div class="hls ps9"
                    style="line-height:2.48mm;white-space:nowrap;left:0mm;top:14.09mm;height:3.17mm;width:150mm;"></div>
            </div>
        </div>
        <div class="htb" style="left:30mm;width:170mm;top:271.76mm;height:9.48mm;"><svg class="hs"
                viewBox="-2.50 -2.50 175 14.48" style="left:-2.50mm;top:-2.50mm;width:175mm;height:14.48mm;">
                <path d="M147.64,0 L147.64,9.48" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                <path d="M170,0 L170,9.48" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                <path d="M147.64,0 L170.01,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                <path d="M147.64,9.48 L170.01,9.48" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                </path>
                <path d="M170,0 L170,9.48" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                <path d="M147.64,0 L147.64,9.48" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                <path d="M147.64,9.48 L170.01,9.48" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;">
                </path>
                <path d="M147.64,0 L170.01,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
            </svg>
            <div class="hce" style="left:0mm;top:0mm;width:147.64mm;height:9.48mm;">
                <div class="hcD" style="left:0mm;top:0mm;">
                    <div class="hcI">
                        <div class="hls ps0"
                            style="line-height:9.09mm;white-space:nowrap;left:0mm;top:0mm;height:9.48mm;width:147.63mm;">
                            <div class="hsR"
                                style="top:0mm;left:0mm;margin-bottom:0mm;margin-right:0mm;width:147.94mm;height:9.48mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url('certi_hd3.png');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hce" style="left:147.64mm;top:0mm;width:22.37mm;height:9.48mm;">
                <div class="hcD" style="left:0mm;top:0mm;">
                    <div class="hcI" style="top:0.79mm;">
                        <div class="hls ps20"
                            style="line-height:7.22mm;white-space:nowrap;left:0mm;top:0mm;height:7.90mm;width:22.37mm;">
                            <div class="hsR"
                                style="top:0mm;left:0mm;margin-bottom:0mm;margin-right:0mm;width:18.55mm;height:7.90mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url('certi_hd4.png');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hcD" style="left:30mm;top:35mm;">
            <div class="hcI">
                <div class="hls ps20"
                    style="line-height:6.28mm;white-space:nowrap;left:0mm;top:-0.35mm;height:7.06mm;width:150mm;"></div>
                <div class="hls ps20"
                    style="line-height:6.28mm;white-space:nowrap;left:0mm;top:10.94mm;height:7.06mm;width:150mm;"><span
                        class="hrt cs10">NFT 등록 증명서</span></div>
                <div class="hls ps0"
                    style="line-height:2.79mm;white-space:nowrap;left:0mm;top:22.40mm;height:3.53mm;width:150mm;"></div>
                <div class="hls ps0"
                    style="line-height:121.74mm;white-space:nowrap;left:0mm;top:28.22mm;height:121.74mm;width:150mm;">
                    <div class="htb"
                        style="left:1mm;width:150mm;top:1mm;height:121.74mm;display:inline-block;position:relative;vertical-align:middle;">
                        <div class="hce" style="left:0mm;top:0mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">등기물건명</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:0mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14"><?=$view['wr_subject']?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:6.23mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">등기종류</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:6.23mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14"><?=$view['wr_12']?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:12.45mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">카테고리</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:12.45mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14"><?=$view['wr_14']?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:18.68mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">블록체인 프로토콜</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:18.68mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14">BEP-721 (BSC)</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:24.91mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">블록체인 토큰ID</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:24.91mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14"><?=$view['wr_40']?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:31.13mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">스마트 컨트렉트</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:31.13mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14"><?=$view['wr_41']?></span></div>
                                </div>
                            </div>
                        </div>

              
                        <div class="hce" style="left:0mm;top:37.36mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">등록범위</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:37.36mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14"><?php echo $view['wr_46']?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:43.59mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">에디션번호</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:43.59mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14"><?='#'. number_format($view['wr_49'])?> (전체발행수 : <?=number_format($view['wr_48'])?>)</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:49.81mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">등록일</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:49.81mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14"><?=date("Y-m-d", strtotime($view['wr_44']))?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:56.04mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">소유권자</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:56.04mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14"><?php echo $view['wr_20'].'('. $view['wr_25'].')' ?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:62.27mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">저작권자</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:62.27mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14"><?php echo $view['wr_31'].'('. $view['wr_36'].')' ?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:68.49mm;width:37.06mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.67mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                        <span class="hrt cs13">등록해쉬값</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:68.49mm;width:110.94mm;height:6.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.50mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                        <span class="hrt cs14"><?=$view['wr_45']?></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:74.72mm;width:37.06mm;height:5.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:0.18mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:33.46mm;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:37.06mm;top:74.72mm;width:110.94mm;height:5.23mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:-0.21mm;height:4.23mm;width:107.34mm;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:79.95mm;width:87.98mm;height:6.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1mm;">
                                    <div class="hls ps0"
                                        style="line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:84.37mm;">
                                        <span class="hrt cs13">대표이미지</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:87.98mm;top:79.95mm;width:60.03mm;height:6.87mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:1mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.10mm;white-space:nowrap;left:0mm;top:-0.19mm;height:3.88mm;width:56.42mm;">
                                        <span class="hrt cs13">등기권자 확인서명</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:0mm;top:86.82mm;width:87.98mm;height:32.93mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI">
                                    <div class="hls ps0"
                                        style="line-height:31.93mm;white-space:nowrap;left:0mm;top:0mm;height:31.93mm;width:84.37mm;">
                                        <div class="hsR"
                                            style="top:0mm;left:0mm;margin-bottom:0mm;margin-right:0mm;width:76.63mm;height:31.93mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url('<?=get_file_thumbnail2($wr_id, 0)?>');">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hce" style="left:87.98mm;top:86.82mm;width:60.03mm;height:32.93mm;">
                            <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                <div class="hcI" style="top:5.88mm;">
                                    <div class="hls ps21"
                                        style="padding-left:5.22mm;line-height:3.43mm;white-space:nowrap;left:0mm;top:15.73mm;height:4.23mm;width:56.42mm;">
                                    </div>
                                </div>
                            </div>
                            <div class="hsR"
                                style="top:6.38mm;left:1.80mm;width:56.43mm;height:15.94mm;background-repeat:no-repeat;background-image:url('<?=$view['wr_10']?>');">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hls ps0"
                    style="line-height:2.79mm;white-space:nowrap;left:0mm;top:153.81mm;height:3.53mm;width:150mm;">
                </div>
                <div class="hls ps20"
                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:159.44mm;height:3.88mm;width:150mm;">
                </div>
                <div class="hls ps20"
                    style="line-height:3.76mm;white-space:nowrap;left:0mm;top:165.61mm;height:4.59mm;width:150mm;"><span
                        class="hrt cs17">위 물건(작품)은 본 인증원의 규정에 따라&nbsp;</span></div>
                <div class="hls ps20"
                    style="line-height:3.76mm;white-space:nowrap;left:0mm;top:172.95mm;height:4.59mm;width:150mm;"><span
                        class="hrt cs17">블록체인에 등록되었음을 증명합니다.</span></div>
                <div class="hls ps20"
                    style="line-height:3.76mm;white-space:nowrap;left:0mm;top:180.29mm;height:4.59mm;width:150mm;"><span
                        class="hrt cs24">2022년 2월 25일</span></div>
                <div class="hls ps0"
                    style="line-height:3.10mm;white-space:nowrap;left:0mm;top:187.66mm;height:3.88mm;width:150mm;">
                </div>
                <div class="hls ps20"
                    style="line-height:12.70mm;white-space:nowrap;left:0mm;top:194.06mm;height:12.70mm;width:150mm;">
                    <div class="hsR"
                        style="top:0mm;left:0mm;margin-bottom:0mm;margin-right:0mm;width:102.27mm;height:12.70mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url('certi_hd7.png');">
                    </div>
                </div>
                <div class="hls ps22"
                    style="line-height:2.17mm;white-space:nowrap;left:0mm;top:208.73mm;height:2.82mm;width:150mm;text-align: center;"><span
                        class="hrt cs15">한국 NFT공인인증원 | &nbsp;Korea NFT Certificate Authority</span></div>
                <div class="hls ps22"
                    style="line-height:2.17mm;white-space:nowrap;left:0mm;top:212.69mm;height:2.82mm;width:150mm; text-align: center;"><span
                        class="hrt cs15">서울시 서대문구 연세로50 연세대학교 공학원 206 </span></div>
                <div class="hls ps20"
                    style="line-height:2.79mm;white-space:nowrap;left:0mm;top:216.60mm;height:3.53mm;width:150mm;">
                </div>
                <div class="hls ps22"
                    style="line-height:1.88mm;white-space:nowrap;left:0mm;top:222.30mm;height:2.47mm;width:150mm;"><span
                        class="hrt cs19">* [인터넷발급] 문서하단의 바코드를 스캐너로 확인하거나 발급확인번호를 일벽하여 위변조 여부를 확인할 수 있습니다.&nbsp;</span>
                </div>
                <div class="hls ps22"
                    style="line-height:1.88mm;white-space:nowrap;left:0mm;top:225.76mm;height:2.47mm;width:150mm;"><span
                        class="hrt cs27">* 발급확인번호를 통한 확인은 발행일로부터 3개월까지 가능합니다.</span></div>
            </div>
        </div>
        <div class="hsR"
            style="top:32.27mm;left:92.05mm;width:25.90mm;height:11.03mm;background-repeat:no-repeat;background-image:url('certi_hd8.png');">
        </div>
    </div>
</body>

</html>