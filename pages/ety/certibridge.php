<?php
/* copyright (c) websiting.co.kr */

include_once('../common.php');

/* 페이지설정 코드 입력! */

	//페이지 제목 지정
	$g5['title'] = "등기부등본 열람(견본)";
	
	//본 페이지에 해당되는 css가 있을 경우 아래 css 삽입 코드를 활성화 해주시기 바랍니다.
	//add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/page.css?ver='.G5_CSS_VER.'">', 0);

include_once('../head.php');
?>


<?php
$wr_id = $_GET['n'];  //물건번호
$all = $_GET['all']; //0.현재사항 1.말소사항포함
$op = $_GET['op']; //0.소유권 개인정보 1.표시여부
$cp = $_GET['cp']; //0.저작권 개인정보 1.표시여부
$rp = $_GET['rp']; //0.권리제한 개인정보 1.표시여부
?>



<h3 class="h3_tl mt30 mb20"> KNCA 증명서 발급신청 </h3>

<div class="row bg-dark py-30 px-10 border-2">
<?if($is_member){ ?>
    <div class="col">    <a type="button" href="/customPage/proof_call.php?wr_id=138&mb_id=<?=$member['mb_id']?>"  class="btn fw-900 py-20 btn-md btn-gray">NFT등기증명서 발급</a></div>
    <?} else { ?>
    <div onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn"><i class="fa fa-list"
                aria-hidden="true"></i> NFT 등록증명서 발급 </div>
    <?}?>
    <?if($is_member){ ?>
    <div class="col">    <a type="button" href="/customPage/proof_call.php?wr_id=138&mb_id=<?=$member['mb_id']?>"  class="btn fw-900 py-20 btn-md btn-primary">NFT등기부등본 발급</a> </div>
    <?} else { ?>
        <div onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn bg-red"><i class="fa fa-list"
                aria-hidden="true"></i> NFT등기부등본 발급 </div>
        <?}?>    

    
    <?if($is_member){ ?>
    <div class="col">  <a type="button" href="/customPage/proof_call.php?wr_id=138&mb_id=<?=$member['mb_id']?>"  class="btn fw-900 py-20 btn-md btn-danger">증명서(PDF증명신청)</a></div>
    <?} else { ?>
        <div onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn bg-red"><i class="fa fa-list"
                aria-hidden="true"></i> 증명서(PDF증명신청) </div>
        <?}?>    
</div>




<h3 class="h3_tl mt50 mt30 mb20"> KNCA 증명서 열람(미리보기) </h3>

<div style="margin:20px; font-size:12px; font-weignt:700;">
<div class="h6_tl">1.과거내역 표시-미리보기 :</div>
    <div> 
        <a class="btn btn-sm btn-outline"
            href="https://kornft.org/pages/bon1/certi_history.php?n=82&all=1&op=1&cp=1&rp=1">말소사항 포함</a>
        <a class="btn btn-sm btn-outline"
            href="https://kornft.org/pages/bon1/certi_history.php?n=82&all=0&op=1&cp=1&rp=1">현재 유효사항</a> <br>
    </div>

    <div class="h6_tl">2.개인정보 포함여부-미리보기 :</div>
    <div>
        <a class="btn btn-sm btn-outline"
            href="https://kornft.org/pages/bon1/certi_history.php?n=82&all=1&op=1&cp=1&rp=1">포함</a>
        <a class="btn btn-sm btn-outline"
            href="https://kornft.org/pages/bon1/certi_history.php?n=82&all=1&op=0&cp=0&rp=0">미포함</a> <br>
    </div>



    <?php /*

    <div class="h4_tl mt20">[증명서 발급신청]으로 이동하기 :</div>
    <div class=" flex-x-start mb20">
        <?if($is_member){ ?>
        <div><a href="/customPage/proof_call.php?wr_id=138&mb_id=<?=$member['mb_id']?>" class="btn_b02 btn"><i
                    class="fa fa-list" aria-hidden="true"></i> NFT등록증명서 발급</a></div>
        <?} else { ?>
        <div onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn"><i class="fa fa-list"
                aria-hidden="true"></i> NFT 등록증명서 발급 </div>
        <?}?>
        
        <?if($is_member){ ?>
        <div><a href="/customPage/proof_call.php?wr_id=138&mb_id=<?=$member['mb_id']?>"
                class="ml10 btn_b02 btn bg-red"><i class="fa fa-list" aria-hidden="true"></i> NFT 등기부등본 발급</a></div>
        <?} else { ?>
        <div onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn bg-red"><i class="fa fa-list"
                aria-hidden="true"></i> NFT등기부등본 발급 </div>
        <?}?>    
     </div>
</div>

*/?>






<h3 class="h3_tl mt50 mt30 mb30">NFT 증명서 발급안내 </h3>


<table style="border-collapse:collapse;table-layout:fixed;border-top:none;border-left:none;border-bottom:none;border-right:none;">
   <tbody>
      <tr>
         <td style="width:422.02pt;height:35.68pt;padding:1.41pt 5.1pt 1.41pt 5.1pt;border-top:solid #bfbfbf 0.28pt;border-left:solid #bfbfbf 0.28pt;border-bottom:solid #bfbfbf 0.28pt;border-right:solid #bfbfbf 0.28pt;" valign="middle">
            <p><span lang="en-us" xml:lang="en-us"></span><span lang="en-us" style="font-weight:bold;font-size:12pt;" xml:lang="en-us"></span><span lang="en-us" style="letter-spacing:0pt;font-weight:bold;font-size:12pt;" xml:lang="en-us">NFT </span><span style="font-family:'Noto sans KR';font-weight:bold;font-size:12pt;">증명서 발급안내 </span></p>
            </td>
         </tr>
      <tr>
         <td style="width:422.02pt;height:547.12pt;padding:1.41pt 5.1pt 1.41pt 5.1pt;border-top:solid #bfbfbf 0.28pt;border-left:solid #bfbfbf 0.28pt;border-bottom:solid #bfbfbf 0.28pt;border-right:solid #bfbfbf 0.28pt;" valign="top">
            <p style="margin-left:7pt;"><span style="font-family:'Noto sans KR';letter-spacing:0pt;">● </span><span style="font-family:'Noto sans KR';">증명서 종류</span></p>
            <p style="margin-left:7pt;"><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">NFT</span><span style="font-family:'Noto sans KR';">등록증명서</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: </span><span style="font-family:'Noto sans KR';">본인의 </span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">NFT </span><span style="font-family:'Noto sans KR';">등록증명서 출력 </span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">(</span><span style="font-family:'Noto sans KR';">본인만 가능</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">)</span></p>
            <p style="margin-left:7pt;"><span style="font-family:'Noto sans KR';">블록체인 등기부등본</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: </span><span style="font-family:'Noto sans KR';">등기물건의 현재</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">, </span><span style="font-family:'Noto sans KR';">과거 소유내역 확인 </span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">(</span><span style="font-family:'Noto sans KR';">누구나 가능</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">)</span></p>
            <p style="margin-left:7pt;">&nbsp;</p>
            <p>&nbsp;</p>
            <p style="margin-left:7pt;"><span style="font-family:'Noto sans KR';letter-spacing:0pt;">● </span><span style="font-family:'Noto sans KR';">증명서 형태</span></p>
            <p style="margin-left:7pt;"><span style="font-family:'Noto sans KR';">증명서 출력</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: </span><span style="font-family:'Noto sans KR';">프린터와 연결하여 원본 증명서 출력</span></p>
            <p style="margin-left:7pt;"><span style="font-family:'Noto sans KR';">전자증명서</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: </span><span style="font-family:'Noto sans KR';">전자파일일 때 원본 증명서 효력이 있으며</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">, </span><span style="font-family:'Noto sans KR';">전자증명서의 출력물은 원본 효력이 없음</span></p>
            <p style="margin-left:7pt;">&nbsp;</p>
            <p>&nbsp;</p>
            <p style="margin-left:7pt;"><span style="font-family:'Noto sans KR';letter-spacing:0pt;">● </span><span style="font-family:'Noto sans KR';">증명서 출력 수수료 </span></p>
            <p style="margin-left:7pt;"><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">NFT</span><span style="font-family:'Noto sans KR';">등록증명서</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: 4000</span><span style="font-family:'Noto sans KR';">원</span></p>
            <p style="margin-left:7pt;"><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">- </span><span style="font-family:'Noto sans KR';">블록체인 등기부등본</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: 5000</span><span style="font-family:'Noto sans KR';">원</span></p>
            <p style="margin-left:7pt;">&nbsp;</p>
            <p>&nbsp;</p>
            <p style="margin-left:7pt;"><span style="font-family:'Noto sans KR';letter-spacing:0pt;">● </span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">PDF </span><span style="font-family:'Noto sans KR';">전자 증명서 발급수수료 </span></p>
            <p style="margin-left:7pt;"><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">NFT</span><span style="font-family:'Noto sans KR';">등록증명서</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: 6000</span><span style="font-family:'Noto sans KR';">원</span></p>
            <p style="margin-left:7pt;"><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">- </span><span style="font-family:'Noto sans KR';">블록체인 등기부등본</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: 7000</span><span style="font-family:'Noto sans KR';">원</span></p>
            <p style="margin-left:7pt;">&nbsp;</p>
            <p>&nbsp;</p>
            <p style="margin-left:7pt;"><span style="font-family:'Noto sans KR';letter-spacing:0pt;">● </span><span style="font-family:'Noto sans KR';">증명서 우편신청</span></p>
            <p style="margin-left:7pt;"><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">NFT</span><span style="font-family:'Noto sans KR';">등록증명서</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: 6000</span><span style="font-family:'Noto sans KR';">원 </span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">+ </span><span style="font-family:'Noto sans KR';">배송수수료 </span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">8000</span><span style="font-family:'Noto sans KR';">원</span></p>
            <p style="margin-left:7pt;"><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">- </span><span style="font-family:'Noto sans KR';">블록체인 등기부등본</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: 7000</span><span style="font-family:'Noto sans KR';">원 </span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">+ </span><span style="font-family:'Noto sans KR';">배송수수료 </span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">8000</span><span style="font-family:'Noto sans KR';">원</span></p>
            <p style="margin-left:7pt;"><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">*</span><span style="font-family:'Noto sans KR';">배송수수료는 증명서 결제 후 별도로 추가 결제</span></p>
            <p style="margin-left:7pt;">&nbsp;</p>
            <p>&nbsp;</p>
            <p style="margin-left:7pt;"><span style="font-family:'Noto sans KR';letter-spacing:0pt;">● </span><span style="font-family:'Noto sans KR';">처리기간</span></p>
            <p style="margin-left:7pt;"><span style="font-family:'Noto sans KR';">출력 및 전자증명서</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: </span><span style="font-family:'Noto sans KR';">즉시</span></p>
            <p style="margin-left:7pt;"><span style="font-family:'Noto sans KR';">우편신청</span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">: </span><span style="font-family:'Noto sans KR';">평일 </span><span lang="en-us" style="letter-spacing:0pt;" xml:lang="en-us">13</span><span style="font-family:'Noto sans KR';">시 이전 신청 시 익일 수령 </span></p>
            <p style="margin-left:7pt;">&nbsp;</p>
            <p>&nbsp;&nbsp;</p>
            <p>&nbsp;</p>
            <p style="margin-left:7pt;"><span lang="en-us" xml:lang="en-us"></span><span lang="en-us" xml:lang="en-us"></span><span style="font-family:AppleSDGothicNeoM00;">블록체인등기부등본 예시</span><span lang="en-us" style="font-family:AppleSDGothicNeoM00;letter-spacing:0pt;" xml:lang="en-us">NFT </span><span style="font-family:AppleSDGothicNeoM00;">등록증명서 예시</span></p>
            <p style="margin-left:7pt;text-align:center;">&nbsp;</p>
            <p>&nbsp;</p>
            <table style="border-collapse:collapse;table-layout:fixed;border-top:none;border-left:none;border-bottom:none;border-right:none;">
               <tbody>
                  <tr>
                     <td style="width:114.67pt;height:21.31pt;padding:1.41pt 5.1pt 1.41pt 5.1pt;border-top:solid #000000 0.28pt;border-left:solid #000000 0.28pt;border-bottom:solid #000000 0.28pt;border-right:solid #000000 0.28pt;background:#dddddd;" valign="middle">
                        <p style="text-align:center;"><span style="font-family:'Noto sans KR';">발급신청 바로가기</span></p>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
<div class="hwp_editor_board_content">&nbsp;</div>

        </div>

<?php
include_once(G5_THEME_PATH.'/tail.php'); 
