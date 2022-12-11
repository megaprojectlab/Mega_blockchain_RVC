<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// multiupload
include_once($board_skin_path."/skin.lib.php");

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/board.common.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>


<?php
//01.서명관련
sql_query("ALTER TABLE `{$write_table}` CHANGE `wr_10` `wr_10` TEXT NOT NULL ", false);
sql_query("ALTER TABLE `{$write_table}` CHANGE `wr_9` `wr_9` TEXT NOT NULL ", false);

?>



<!-- 헤더에서 별도 설정 시작 ------------------------------>
<div id="page_title" class="sbtImg">
<div class="page_title_in">
    <h2>
        <strong class="">등기 신청</strong>
        <span class="titleBbar"></span> </h2>
</div>
</div>

<section id="ctWrap">      
	<div id="container">
                
<!-- 헤더에서 별도설정 끝 1.명칭변경, 2.중간메뉴삭제, 3.글제목을 위로..  ------------------------>


<section id="bo_w">
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">

    <?php //변경시마다 해쉬값생성
       $wr_8= 'kc'.sha1(time()); ?>
    <input type="hidden" name="wr_8" value="<?php echo $wr_8 ?>">




 <!--04. 확인등기 서류제출-->
<?php if($wr_12 !='일반등기') { ?>

<div class="border-b2 mt60 required">
<button class="regtitle btn btn-blue fs-15" type="button" data-toggle="collapse" data-target="#collapseFile" aria-expanded="false" aria-controls="collapseFile"> 04.[확인등기]를 위한 서류제출</span> <i class="fa fa-chevron-down ml20" style="float:right";></i> </button>
</div>

<div class=" p20 bg-bluel outline " id="collapseFile">

        <!-- 파일첨부1 : 신분증-->
    <div class="frm_t">01.신청자 신분증(필수)</div>
        <div class="bo_w_flie write_div">
                <div class="file_wr write_div">
                <label for="bf_file[]" class="lb_icon required"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only">신청자 신분증</span></label>
                <input  id="bf_file_4" type="file" name="bf_file[]"  title="확인등기 파일첨부 1 :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file">
                </div>

                <?php if ($is_file_content) { ?>
                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[4]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input">
                <?php } ?>
            
                <?php if($w == 'u' && $file[4]['file']) { ?>
                <input type="checkbox" id="bf_file_del4" name="bf_file_del[4]" value="1" > <label for="bf_file_del4"><?php echo $file[4]['source'].'('.$file[4]['size'].')'; ?> 파일 삭제</label>
                <?php } ?>
        </div>


        <!-- 파일첨부2 : 관련 보증서 첨부 (KNCA양식)-->
    <div class="frm_t">02.등기물건_확인서 첨부(KNCA양식-필수))</div>
        <div class="bo_w_flie write_div">
                <div class="file_wr write_div">
                <label for="bf_file[]" class="lb_icon required"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only">검증관련 보증서첨부</span></label>

                <input  id="bf_file_5" type="file" name="bf_file[]"  title="확인등기 파일첨부 2 :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file">

                </div>

                <?php if ($is_file_content) { ?>
                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[5]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input">
                <?php } ?>
            
                <?php if($w == 'u' && $file[5]['file']) { ?>
                <input type="checkbox" id="bf_file_del5" name="bf_file_del[5]" value="1" > <label for="bf_file_del5"><?php echo $file[5]['source'].'('.$file[5]['size'].')'; ?> 파일 삭제</label>
                <?php } ?>
        </div>


        <!-- 파일첨부3 : 저작권 확인서 첨부 (KNCA양식)-->
    <div class="frm_t">03. 저작권 확인서 첨부(KNCA양식-필수))</div>
        <div class="bo_w_flie write_div">
                <div class="file_wr write_div">
                <label for="bf_file[]" class="lb_icon required"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only">검증관련 저작권확인서 첨부</span></label>
                <input  id="bf_file_6" type="file" name="bf_file[]"  title="확인등기 파일첨부3 :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file">
                </div>

                <?php if ($is_file_content) { ?>
                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[6]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input">
                <?php } ?>
            
                <?php if($w == 'u' && $file[6]['file']) { ?>
                <input type="checkbox" id="bf_file_del6" name="bf_file_del[6]" value="1" > <label for="bf_file_del6"><?php echo $file[6]['source'].'('.$file[6]['size'].')'; ?> 파일 삭제</label>
                <?php } ?>
        </div>

        <!-- 파일첨부4 : 검증관련-->
    <div class="frm_t">04.검증관련_이미지or영상파일(설명인터뷰등)</div>
        <div class="bo_w_flie write_div">
                <div class="file_wr write_div">
                <label for="bf_file[]" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only">검증관련 참조이미지,영상</span></label>
                <input  id="bf_file_7" type="file" name="bf_file[]"   title="검증 파일첨부 :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
                </div>

                <?php if ($is_file_content) { ?>
                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[7]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input">
                <?php } ?>
            
                <?php if($w == 'u' && $file[7]['file']) { ?>
                <input type="checkbox" id="bf_file_del7" name="bf_file_del[7]" value="1" > <label for="bf_file_del7"><?php echo $file[7]['source'].'('.$file[7]['size'].')'; ?> 파일 삭제</label>
                <?php } ?>
        </div>

        <!-- 파일첨부5 : 관련 추가서류 1-->
    <div class="frm_t">05.검증관련_추가서류 1</div>
        <div class="bo_w_flie write_div">
                <div class="file_wr write_div">
                <label for="bf_file[]" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only">검증관련 추가서류 첨부</span></label>
                <input  id="bf_file_8" type="file" name="bf_file[]"  title="검증 파일첨부 :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file">
                </div>

                <?php if ($is_file_content) { ?>
                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[8]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input">
                <?php } ?>
            
                <?php if($w == 'u' && $file[8]['file']) { ?>
                <input type="checkbox" id="bf_file_del8" name="bf_file_del[8]" value="1" > <label for="bf_file_del8"><?php echo $file[8]['source'].'('.$file[8]['size'].')'; ?> 파일 삭제</label>
                <?php } ?>
        </div>

        <!-- 파일첨부5 : 관련 추가서류 2-->
    <div class="frm_t">06.검증관련_추가서류 2</div>
        <div class="bo_w_flie write_div">
                <div class="file_wr write_div">
                <label for="bf_file[]" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only">검증관련 추가서류 첨부</span></label>
                <input  id="bf_file_9" type="file" name="bf_file[]"  title="검증 파일첨부 :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file">
                </div>

                <?php if ($is_file_content) { ?>
                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[9]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input">
                <?php } ?>
            
                <?php if($w == 'u' && $file[9]['file']) { ?>
                <input type="checkbox" id="bf_file_del9" name="bf_file_del[9]" value="1" > <label for="bf_file_del9"><?php echo $file[9]['source'].'('.$file[9]['size'].')'; ?> 파일 삭제</label>
                <?php } ?>
        </div>


        <!-- 파일링크 : 검증관련 참조링크-->
    <div class="frm_t">07.검증관련_참고할 외부링크</div> 
        <div class="bo_w_link write_div">
                <label for="wr_link2"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 외부링크  #2</span></label>
                <input type="text" name="wr_link2" value="<?php if($w=="u"){echo$write['wr_link2'];} ?>" id="wr_link2" class="frm_input full_input" size="50" placeholder="참조할 외부 링크주소(영상,자료가 있는곳)를 입력해 주세요.">
        </div>
</div> <!--끝 확인등기서류  -->

<?php } ?>

 
  
 <!--05.실사검증 신청-->
<?php if($wr_12 =='검증등기') { ?>

<div class="border-b2 mt60 required">
<button class="regtitle btn btn-danger fs-15" type="button" data-toggle="collapse" data-target="#collapseSilsa" aria-expanded="false" aria-controls="collapseSilsa"> 05.[실사검증 예약신청]- 신청후 직접상담</span> <i class="fa fa-chevron-down ml20" style="float:right" ></i> </button>
</div>

<div class=" p20 bg-redl outline " id="collapseSilsa">
   
    <div class="frm_tl h6_tl checkbox">
        <input type="checkbox" name="wr_80" class="ml10 required" required value="실사검증 예약신청"<?php echo ($write['wr_80'] == "실사검증 예약신청") ? " checked" : "";?>> <span class="ml30 text-red">실사검증 예약신청(필수체크)</span>   
    </div>
    <div class="cont_text_info bg-white">
            <ul style="list-style:circle;padding-left:20px;">
                <li><b>등기아이템의 실체확인 :</b> 현장을 방문하여 등기아이템의 실체를 확인합니다. </li>
                <li><b>소유권 여부</b>  </li>
                <li><b>저작권 여부</b> </li>
                <li><b>신청자 실명확인 </b> </li>
                <li><b>작품(아이템확인) 보관여부 </b> </li>
                <li><b>아이템의 특성(제작기법: 제작년도: 크기: 에디션: 재질: 특이사항:) </b> </li>
                <li><b>블록체인 정보와 동일성여부 확인: </b> </li>
                <li><b>기타사항   </b> </li>
            
        </ul>
    </div>

    
   <div class="frm_t">01.실사검증 장소</div>
            <div class="bo_w_ico bo_w_tit write_div">
                <label for="wr_81" class="lb_icon required"><i class="fa fa-file"></i> </label>        
                <input type="text" name="wr_81" value="<?php echo $write['wr_81'] ?>" id="wr_81" required class="frm_input full_input" size="50" maxlength="255" placeholder="실사검증 장소(상세주소)">       
            </div>

   <div class="frm_t">02.실사검증 희망일(KNCA일정에따라 정함)</div>
        <div class="bo_w_ico bo_w_tit write_div">
            <label for="wr_82" class="lb_icon required"><i class="fa fa-file"></i> </label>        
            <input type="date" name="wr_82" value="<?php echo $write['wr_82'] ?>" id="wr_82" required class="frm_input full_input" size="50" maxlength="255" placeholder="형식)2022.01.08~2022.01.30">       
        </div>

   <div class="frm_t">03. 실사검증 신청자측 연락처</div>

   <div class="formCol2wr"> 
       <div class="bo_w_ico write_div">
                <label for="wr_83" class="lb_icon required"><i class="fa fa-user"></i> <span class="sound_only">담당자명</span></label>
                <input type="text" name="wr_83" value="<?php echo $write['wr_83'] ?>" id="wr_83" class="frm_input full_input" required placeholder="담당자명">
       </div>
            
        <div class="bo_w_ico write_div">
            <label for="wr_84" class="lb_icon required"><i class="fa fa-phone"></i> <span class="sound_only">담당자 연락처</span></label>
            <input type="text" name="wr_84" value="<?php echo $write['wr_84'] ?>" id="wr_84" class="frm_input full_input" size="50" required placeholder="담당자 연락처">
        </div>
        <div class="bo_w_ico write_div">
                <label for="wr_85" class="lb_icon required"><i class="fa fa-envelope-o"></i> <span class="sound_only">담당자 이메일</span></label>
                <input type="email" name="wr_85" value="<?php echo $write['wr_85'] ?>" id="wr_85" class="frm_input full_input email" required placeholder="담당자 이메일">
        </div>

    </div>

    <div class="frm_t">04.기타 실사요청사항</div>
        <div class="bo_w_ico bo_w_tit write_div">
            <textarea name="wr_86" id="wr_86" rows="5" class="text-gray width-100 p10" placeholder="실사요청에 필요한 추가사항을 입력하세요 "><?php echo $write['wr_86'] ?></textarea>
        </div>


      
</div>   <!--실사검증 신청 끝-->

<?php } //실사검증 신청 끝 ?>



   

    
<?php 
//관리자 입력용 //////////////////////////////////////////////////////////////////////////////////기록입력
$act= $_GET['act']; ?>

<?php
//****[01]. 관리자의 [검증서류 확인] 기록*************
 if($is_admin && $act=="") { ?>
<section id="silsa">
    <div class="border-b2 mt60">
    <button class="btn btn-dark fs-15 width-100 text-left" type="button" data-toggle="collapse" data-target="#collapseAdmin1" aria-expanded="false" aria-controls="collapseAdmin1"> **[관리자용 -서류검증 기록하기]</span> <i class="fa fa-chevron-down ml20"></i> </button>
    </div>

    <div class="collapse p20 bg-redl outline " id="collapseAdmin1">
   
   <div class="frm_t">01.서류검증 확인일 (완료시에만 체크하세요)</div>
            <div class="bo_w_ico bo_w_tit write_div">
                <label for="wr_75" class="lb_icon"><i class="fa fa-file"></i> </label>        
                <?php if(!$write['wr_75']){ $wr_75 ='제출서류 확인중'; ?>
                <input type="date" name="wr_75" value="<?php echo $write['wr_75'] ?>" id="wr_75" class="frm_input full_input" size="50" maxlength="255" placeholder="서류확인 시간 표시로 완료허가 2022-01-16"> 
                <?php } else { echo "<span class='text-red fw-900'>서류 검증완료</span>". $wr_75; } ?>       
            </div>

   <div class="frm_t">02.신청자 KYC(신분증,실명) 확인하였나요?</div>
            
        <div class="radio outline bg-gray radius-5 mt0 flex-x-center" style="max-width:500px;">
        <label class="radio_f"><input type="radio" class="radio_f" name="wr_71" value="확인함"<?php echo ($write['wr_71'] == "확인함") ? " checked" : "";?> required> 확인함 </label>
        <label class="radio_f"><input type="radio" name="wr_71" value="아니오"<?php echo ($write['wr_71'] == "아니오") ? " checked" : "";?> required> 아니오</label>
    </div>

    <div class="frm_t">03.등기물건 확인서(보증서)확인하였나요?</div>
            
            <div class="radio outline bg-gray radius-5 mt0 flex-x-center" style="max-width:500px;">
            <label class="radio_f"><input type="radio" class="radio_f" name="wr_72" value="확인함"<?php echo ($write['wr_72'] == "확인함") ? " checked" : "";?> required> 확인함 </label>
            <label class="radio_f"><input type="radio" name="wr_72" value="아니오"<?php echo ($write['wr_72'] == "아니오") ? " checked" : "";?> required> 아니오</label>
    </div>

    <div class="frm_t">04.저작권 확인서(보증서)확인하였나요?</div>
            
            <div class="radio outline bg-gray radius-5 mt0 flex-x-center" style="max-width:500px;">
            <label class="radio_f"><input type="radio" class="radio_f" name="wr_73" value="확인함"<?php echo ($write['wr_73'] == "확인함") ? " checked" : "";?> required> 확인함 </label>
            <label class="radio_f"><input type="radio" name="wr_73" value="아니오"<?php echo ($write['wr_73'] == "아니오") ? " checked" : "";?> required> 아니오</label>
    </div>

    <div class="frm_t">05.서류검증을 위해 제출된 관련첨부 내역은?</div>

    <select name="wr_74" id="ca_name" required class="frm_input full_input required text-blue fw-700">
            <option value="">등록아이템 유형</option>   
                <option value="이미지,문서(보증서,확인서)"<?php echo ($write['wr_74'] == "이미지,문서(보증서,확인서)") ? " selected" : "";?>>*이미지,문서(보증서,확인서)</option>
                <option value="이미지,문서화일,영상"<?php echo ($write['wr_74'] == "이미지,문서화일,영상") ? " selected" : "";?>>*이미지,문서화일,영상</option>
                <option value="이미지,문서파일,영상,링크"<?php echo ($write['wr_74'] == "이미지,문서파일,영상,링크") ? " selected" : "";?>>*이미지,문서파일,영상,링크</option>
            </select>
    </div>

    
    <?php //변경시 서류검증 해쉬값생성
       $wr_8= 'x05'.sha1(time()); ?>
    <input type="hidden" name="wr_76" value="<?php echo $wr_76 ?>">

</section>
 <?php } //서류검증 기록 끝****** ?>



<?php
//****4. 관리자의 [실사검증] 기록*************
 if($is_admin && $act=="") { ?>
<section id="silsa">
    <div class="border-b2 mt60">
    <button class="btn btn-success fs-15 width-100 text-left" type="button" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseAdmin"> **[관리자용 - 등기현황-실사검증 기록하기]</span> <i class="fa fa-chevron-down ml20"></i> </button>
    </div>

    <div class="collapse p20 bg-redl outline " id="collapseAdmin">
   
   <div class="frm_t">01.등기완료 하기(완료시에만 체크하세요)</div>
            <div class="bo_w_ico bo_w_tit write_div">
                <label for="wr_87" class="lb_icon"><i class="fa fa-file"></i> </label>        
                <?php if(!$write['wr_87']){ $wr_87 ='등기 진행중'; ?>
                <input type="date" name="wr_87" value="<?php echo $write['wr_87'] ?>" id="wr_87" class="frm_input full_input" size="50" maxlength="255" placeholder="등기완료시간 표시로 완료허가 2022-01-16"> 
                <?php } else { echo "<span class='text-red fw-900'>등기완료</span>". $wr_87; } ?>       
            </div>

   <div class="frm_t">02.타 전문기관 의뢰시 (기관명)</div>
        <div class="bo_w_ico bo_w_tit write_div">
            <label for="wr_88" class="lb_icon"><i class="fa fa-file"></i> </label>        
            <input type="text" name="wr_88" value="<?php echo $write['wr_88'] ?>" id="wr_88" class="frm_input full_input" size="50" maxlength="255" placeholder="전문기관명(제3기관의뢰시)">       
        </div>


   <div class="frm_t">03.실사검증 내역기록</div>
        <textarea name="wr_89" id="wr_89" rows="7" class="text-gray width-100 p10" placeholder=""><?php echo $write['wr_89'] ?>
        01.등기 아이템의 실체여부 :
        02.소유권여부 : 
        03.저작권여부 : 
        04.신청자 실명확인 : 
        05.작품(아이템확인) 보관여부 : 
        06.아이템의 특성(제작기법: 제작년도: 크기: 에디션: 재질: 특이사항:)
        07.블록체인 정보와 동일성여부 확인:
        08.기타사항  
        </textarea>

   <div class="frm_t">04.검증위원(분과위원) 성명</div>
        <div class="bo_w_ico bo_w_tit write_div">
            <label for="wr_90" class="lb_icon"><i class="fa fa-file"></i> </label>        
            <input type="text" name="wr_90" value="<?php echo $write['wr_90'] ?>" id="wr_90" class="frm_input full_input" size="50" maxlength="255" placeholder="검증위원(분과위원) 성명">       
        </div>


    <!--검증자 서명란-->
    <div class="frm_tl h6_tl">*검증자 서명확인</div>
    <div>
                    <?php if($write['wr_9']) { ?>
                        <br><img src="<?php echo $write['wr_9'] ?>">
                    <?php } ?>                   
                        <input type="hidden" name="wr_9"  value="<?php echo $write['wr_9'] ?>" class="form-control input-sm">
                        <div id="wr_9"></div>                    

                    <style type="text/css">
                        #div_signcontract1{ width: 500px; }
                        .popupHeader{ margin: 10px; }
                    </style>


                    <script type="text/javascript">
                        var isSign = false;
                        var leftMButtonDown = false;
                        
                        jQuery(function(){
                            //Initialize sign pad
                            init_Sign_Canvas1();
                        });
                        
                        function fun_submit1() {
                            if(isSign) {
                                var canvas1 = $("#canvas1").get(0);
                                var imgData = canvas.toDataURL();
                                jQuery('#page1').find('p').remove();
                                jQuery('#page1').find('img').remove();
                                jQuery('#page1').append(jQuery('<p id="message1" class="text-danger mt10"><i class="fa fa-check-square-o mr10"></i>위의 검증자가 서명하여 확인하였습니다.</p>'));
                                jQuery('#wr_9').append($('<input type="hidden" name="wr_9" required class="form-control input-sm">').attr('value',imgData));
                                
                                closePopUp1();
                            } else {
                                alert('공란에 사인(서명)을 하세요.');
                            }
                        }
                        
                        function closePopUp1() {
                            jQuery('#divPopUpSignContract1').popup('close');
                            jQuery('#divPopUpSignContract1').popup('close');
                        }
                        
                        function init_Sign_Canvas1() {
                            isSign = false;
                            leftMButtonDown = false;
                            
                          jQuery('#message1').remove(); //메세지 삭제

                            //Set Canvas width
                            var sizedWindowWidth = $(window).width();
                            if(sizedWindowWidth > 700)
                                sizedWindowWidth = $(window).width() / 2;
                            else if(sizedWindowWidth > 400)
                                sizedWindowWidth = sizedWindowWidth - 100;
                            else
                                sizedWindowWidth = sizedWindowWidth - 50;
                             
                             //$("#canvas").width(sizedWindowWidth);
                             $("#canvas1").width(283);
                             $("#canvas1").height(80);
                             $("#canvas1").css("border","1px solid #000");
                            
                             var canvas1 = $("#canvas1").get(0);
                            
                             canvasContext1 = canvas1.getContext('2d');

                             if(canvasContext1)
                             {
                                 //canvasContext.canvas.width  = sizedWindowWidth;
                                 canvasContext1.canvas1.width  = 283;
                                 canvasContext1.canvas1.height = 80;

                                 canvasContext1.fillStyle = "#fff";
                                 canvasContext1.fillRect(0,0,sizedWindowWidth,200);
                                 
                                 canvasContext1.moveTo(50,150);
                                 canvasContext1.lineTo(sizedWindowWidth-50,150);
                                 canvasContext1.stroke();
                                
                                 canvasContext1.fillStyle = "#000";
                                 canvasContext1.font="20px Arial";
                                 canvasContext1.fillText("x",40,155);
                             }
                             // Bind Mouse events
                             $(canvas1).on('mousedown', function (e) {
                                 if(e.which === 1) { 
                                     leftMButtonDown = true;
                                     canvasContext1.fillStyle = "#000";
                                     var x = e.pageX - $(e.target).offset().left;
                                     var y = e.pageY - $(e.target).offset().top;
                                     canvasContext1.moveTo(x, y);
                                 }
                                 e.preventDefault();
                                 return false;
                             });
                            
                             $(canvas1).on('mouseup', function (e) {
                                 if(leftMButtonDown && e.which === 1) {
                                     leftMButtonDown = false;
                                     isSign = true;
                                 }
                                 e.preventDefault();
                                 return false;
                             });
                            
                             // draw a line from the last point to this one
                             $(canvas1).on('mousemove', function (e) {
                                 if(leftMButtonDown == true) {
                                     canvasContext1.fillStyle = "#000";
                                     var x = e.pageX - $(e.target).offset().left;
                                     var y = e.pageY - $(e.target).offset().top;
                                     canvasContext1.lineTo(x,y);
                                     canvasContext1.stroke();
                                 }
                                 e.preventDefault();
                                 return false;
                             });
                             
                             //bind touch events
                             $(canvas1).on('touchstart', function (e) {
                                leftMButtonDown = true;
                                canvasContext1.fillStyle = "#000";
                                var t = e.originalEvent.touches[0];
                                var x = t.pageX - $(e.target).offset().left;
                                var y = t.pageY - $(e.target).offset().top;
                                canvasContext1.moveTo(x, y);
                                
                                e.preventDefault();
                                return false;
                             });
                             
                             $(canvas1).on('touchmove', function (e) {
                                canvasContext1.fillStyle = "#000";
                                var t = e.originalEvent.touches[0];
                                var x = t.pageX - $(e.target).offset().left;
                                var y = t.pageY - $(e.target).offset().top;
                                canvasContext1.lineTo(x,y);
                                canvasContext1.stroke();
                                
                                e.preventDefault();
                                return false;
                             });
                             
                             $(canvas1).on('touchend', function (e) {
                                if(leftMButtonDown) {
                                    leftMButtonDown = false;
                                    isSign = true;
                                }
                             
                             });
                        }
                    </script>

                    <div data-role="page">

                        <div data-role="popup" id="divPopUpSignContract1">
                            <div class="ui-content popUpHeight">
                                <div id="div_signcontract1">
                                    <canvas id="canvas1">Canvas is not supported</canvas>

                                    <h4 class="fw-700 my-10">위 검증사항을 확인하여 검증등록 합니다.</h4>
                                    <div>
                                        <input id="btnSubmitSign1" type="button" data-inline="true" data-mini="true" data-theme="b" class="btn   btn-dark btn-md" value=" 서명확인 (클릭필수) " onclick="fun_submit1()" />
                                        <input id="btnClearSign1" type="button" data-inline="true" data-mini="true" data-theme="b" class="btn btn-light" value=" 재작성 " onclick="init_Sign_Canvas1()" />
                                    </div>

                                    <div id="page1" data-role="content"></div>	
                                </div>	
                            </div>
                        </div>
                    </div>
    </div>  
    <!--검증자 서명끝-->
        

    <div class="frm_t">05.검증 소견</div>
        <div class="wr_content">
                <?php echo editor_html("wr_91", $write['wr_91'] ); ?>
            </div>

    <div class="frm_t">06.기타 의견</div>
        <div class="wr_content">
                <?php echo editor_html("wr_92", $write['wr_92'] ); ?>
        </div>


    <!-- 파일첨부 : 실사검증 사진 및 자료 -->
    <div class="frm_t">실사검증 관련 자료 및 사진</div>
        <?php for ($i=11; $is_file && $i<21; $i++) { ?>
            <div class="bo_w_flie write_div">
                <div class="file_wr write_div">
                    <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
                    <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="실사검증 자료첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
                </div>
                <?php if ($is_file_content) { ?>
                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
                <?php } ?>

                <?php if($w == 'u' && isset($file[$i]['file'])) { ?>
                <span class="file_del">
                    <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
                </span>
                <?php } ?>
                
            </div>
        <?php } ?>
 
   </div>   <!--실사검증-->

</section>
 <?php } //실사검증 기록 끝****** ?>

 


  <!-- 신청하기 버튼 -->
   <div class="btn_confirm write_div mt30 pb100">
		<button type="reset" class="btn_cancel btn"><i class="fa fa-repeat "></i> 새로작성</button>
        <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn btn_cancel radius-0">목록보기</a>
        <button type="submit" id="btn_submit" accesskey="s" class="btn_submit btn"><i class="fa fa-paper-plane"></i> 등기신청하기</button>
    </div>

    </form>






    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }



    function fwrite_submit(f)
    {
        //여분필드 에디터사용   
        <?php echo get_editor_js("wr_17"); ?>
        <?php echo chk_editor_js("wr_17"); ?>

        <?php echo get_editor_js("wr_15"); ?>
        <?php echo chk_editor_js("wr_15"); ?>

        <?php echo get_editor_js("wr_91"); ?>
        <?php echo chk_editor_js("wr_91"); ?>

        <?php echo get_editor_js("wr_92"); ?>
        <?php echo chk_editor_js("wr_92"); ?>
        //

        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }


        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>
        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->