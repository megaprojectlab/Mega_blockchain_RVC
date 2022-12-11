<?php
/* copyright (c) websiting.co.kr */
include_once('../common.php');

/* 페이지설정 코드 입력! */
	//페이지 제목 지정
	$g5['title'] = "증명서 발급안내";
	
	//본 페이지에 해당되는 css가 있을 경우 아래 css 삽입 코드를 활성화 해주시기 바랍니다.
	//add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/page.css?ver='.G5_CSS_VER.'">', 0);

/* 페이지설정 코드 입력! */
include_once('../head.php');
?>



<!--Search box -->
<section class="mainContents mt30 flex-start sm-none">

<h3 class="h2_tl mt30 mb20">01. 등기물건 조회하기  </h3>

    <div class="hd_sch_wr w-90">
        <fieldset id="hd_sch">
            <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php"
                onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="ca_name||wr_subject||wr_content">
                <input type="hidden" name="sop" value="or">

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
        </fieldset>
    </div>
</section>

<div class="cont_text_important fs-12 mt20"> 증명서 발급을 원하는 등기물건을 조회후 신청하세요</div>



  <!-- 증명서 발급 신청하기 -->

 <h3 class="h2_tl mt50 mb20">02. 증명서 발급 종류 </h3>

 
 <div class="cont_text">
         
		 NFT등기증명은 블록체인에 등록된 정보를 복호화하여, 자산활동이 가능하도록 증명서와 등기부등본 형태로 발급받을 수 있습니다. <br>
		 
		 이러한 KNCA등기증명 발급시스템을 통해 자산의 소유권이나 권리를 입증할 수 있어, 실질적으로 댜양한 자산활동에 활용할 수 있습니다.

         <li class="fw-800 fs-16 mt20 text-blue">01. NFT등록증명서 : <span class="btn btn-12 btn-outline fw-600">열람용</span>,<span class="btn btn-12 btn-outline fw-900">제출용</span>,<span class="btn btn-12 btn-outline fw-900">PDF증명용</span>,<span class="btn btn-12 btn-outline fw-600"> 무인발급기용</span></li>
         <li class="fw-800 fs-16 text-blue">02. NFT등기부등본 :  <span class="btn btn-12 btn-outline fw-600">열람용</span>,<span class="btn btn-12 btn-outline fw-900">제출용</span>,<span class="btn btn-12 btn-outline fw-900">PDF증명용</span>,<span class="btn btn-12 btn-outline fw-600"> 무인발급기용</span></li>
         <li class="fw-800 fs-16 mt20 text-red">프린터 증명서 출력용 </li>
         <li class="fw-800 fs-16 text-red">PDF증명용(파일로제공,정부인증) </li>
         <li class="fw-800 fs-16 text-red">무인발급기용(민원발급기 출력가능) </li>
   
 </div>


	
<h3 class="h2_tl mt50"> 03. 증명서 세부내역</h3>


<h3 class="h3_title mt30 fw-800">(1) NFT 등록증명서</h3>

	<div class="cont_text">
    <img src="<?=G5_THEME_URL?>/img/knca/knca_paper11.png" alt="" class="cont_img_left50p">

    <div class="fw-800 fs-16 mt20">01.목적 </div>
    <li class="mt10">  블록체인에 본인의 NFT가 올바르게 등록되어 있음을 증명함  </li>

    <div class="fw-800 fs-16 mt30">02.증명내용 </div>
                    
    <li class="mt20">블록체인 프로토콜, </li>
    <li>스마트컨트랙트, </li>
    <li>토큰ID, </li>
    <li>소유권자, </li>
    <li>저작권자, </li>
    <li>등록해쉬값</li>
    <li>등기권자 서명  </li>  
    <li>기타 블록체인에 등록된 내용을 복호화하여 증명함 </li>


    <div class="fw-800 fs-16 mt30">03.발급수수료 </div>
                    
    <div class="h7_t mt10">열람용(무료) : 웹내에서 열람가능  </div>                   
    <div class="h7_t mt10">제출용(프린터 출력용) : 1부 4000원 </div>
                    <li>온라인 PC프린터 출력 </li>
                    <li>무인발급기에서 출력</li>
     
    <div class="h7_t mt10">제출용(PDF 파일로 제공용) : 1부 6000원 </div>
                    <li> 여러장 출력가능 </li>
                    <li> 3개월간 유효</li>
                        
    </div>



<h3 class="h3_title mt30 fw-800">NFT 등기부등본</h3>

<div class="cont_text">
    <img src="<?=G5_THEME_URL?>/img/knca/knca_paper_2all.png" alt="" class="cont_img_left50p">

    <div class="fw-800 fs-16 mt20">01.목적 </div>
    <li class="mt10">블록체인에 저장되어 있는 NFT아이템의 소유권, 저작권, 권리제한(근저당설정등)의 거래 및 변동내역과</li>
    <li> 서류검증이나 실사검증 등의 NFT실체 검증 결과를 기록하여 안전한 NFT거래에 신뢰를 부여하는 등기부등본 형태의 증명서</li>

    <div class="fw-800 fs-16 mt30">02.증명내용 </div>
                    
    <li class="mt20">블록체인 프로토콜, </li>
    <li>스마트컨트랙트, </li>
    <li>토큰ID, </li>
    <li>소유권자, </li>
    <li>저작권자, </li>
    <li>등록해쉬값</li>
    <li>등기권자 서명  </li>  
    <li>스마트컨트랙트, </li>
    <li>소유권자 변동내역 </li>
    <li>저작권자 변동내역 </li>
    <li>권리제한(근저당설정,압류)등의 변동내역</li>
    <li>서류검증 내역 </li>  
    <li>실사검증 내역 </li>  
    <li>변경해쉬값의 기록 </li>  
    <li>기타 블록체인에 등록된 내용을 복호화하여 증명함 </li>

</div>

    <div class="fw-800 fs-16 mt30">03.발급수수료 </div>
                    
    <div class="h7_t mt10">열람용(무료) : 웹내에서 열람가능  </div>                   
    <div class="h7_t mt10">제출용(프린터 출력용) : 1부 4000원 </div>
                    <li>온라인 PC프린터 출력 </li>
                    <li>무인발급기에서 출력</li>
     
    <div class="h7_t mt10">제출용(PDF 파일로 제공용) : 1부 6000원 </div>
                    <li> 여러장 출력가능 </li>
                    <li> 3개월간 유효</li>
                        


<h3 class="h3_title mt30 fw-800 mt60">NFT 등기부등본 항목</h3>
<div class="cont_text">
    <img src="<?=G5_THEME_URL?>/img/knca/knca_paper_2detail.png" alt="" class="">
</div>


<h3 class="h3_title mt30 fw-800 mt60">KNCA 무인발급기</h3>
<div class="cont_text">
    <img src="<?=G5_THEME_URL?>/img/knca/knca_machine2.png" alt="" class="">
</div>



				<?php
				$wr_id = $_GET['n'];  //물건번호
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
?>



	</div>





<?php
include_once('../tail.php');
