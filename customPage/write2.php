<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

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


<?php 
//등기유형 호출받기
if($_GET['wr_12']=='1'){ $wr_12 = '일반등기'; }
else if($_GET['wr_12']=='2'){ $wr_12 = '확인등기'; }
else { $wr_12 = '검증등기'; }
?>

<?php 
//분할등기 호출받기
$_GET['wr_46']='1'; /*임시로 분할등기설정,실제호출시삭제*/

if($_GET['wr_46']=='1'){ $wr_46 = '분할등기(부분등기)'; }
else { $wr_46 = '전체등기(독립등기)'; }
?>


    <?php //그누보드_글작성 옵션값
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
        if ($is_notice) {
            $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
        }

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">HTML</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }

        if ($is_mail) {
            $option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
        }
    }
    echo $option_hidden;  
  ?>




<!-- 등기분류 제목표시------------------->
<?php if ($w=='u' && $write['wr_12']) { $wr_12 = $write ['wr_12']; }?>

<?php if ($wr_12 == '일반등기') { ?>
    <h2 class="h2_title_center fw-900 mb0">일반등기 신청서</h2>   
    <div class="line-5-red div-center mb20" ></div>
    <p class="regtype bg-dark">일반등기는 <span class="text-yellow">[신청자 본인이 직접 확인] </span>한 사항을 블록체인에 위변조 없이 암호화하여 등록합니다.</p>
<?php $wr_70 = "[일반검증] 신청자 본인이 직접 확인후 등록"; } ?>

<?php if ($wr_12 == '확인등기') { ?>
    <h2 class="h2_title_center fw-900 mb0">확인등기 신청서</h2>   
    <div class="line-5-red div-center mb20" ></div>
    <p class="regtype bg-blue">확인등기는 신청자가 제출한 <span class="text-yellow">[증빙서류]</span>를 한국NFT공인인증원에서 <span class="text-yellow">서류를 검증한 후 </span>블록체인에 위변조 없이 암호화하여 등록합니다.</p>
    <?php $wr_70 = "[확인검증] 신청자가 제출한 서류를 KNCA에서 확인"; } ?>

<?php if ($wr_12 == '검증등기') { ?>
    <h2 class="h2_title_center fw-900 mb0"> 검증등기 신청서</h2>   
    <div class="line-5-red div-center mb20" ></div>
    <p class="regtype bg-red">검증등기는 [한국NFT공인인증원]에서 <span class="text-yellow border-b2">[직접 현장을 방문하여 실사하고, 면담과 [증빙서류]를 통해 직접 확인]</span>한 사항을 블록체인에 위변조 없이 암호화하여 등록합니다.</p>
    <?php $wr_70 = "[실사검증] KNCA에서 직접 방문을 통해 실사후 검증"; } ?>

<input type="hidden" name="wr_12" value="<?php echo $wr_12 ?>">
<input type="hidden" name="wr_70" value="<?php echo $wr_70 ?>">


<!-- 등기번호 -->
<?php
$row = sql_fetch("select bo_count_write from g5_board where bo_table = '$bo_table' ");
$reg_id = $row[bo_count_write];
?>

<?php if ($w != 'u') {
$wr_11 ="KNCA-".date("ym").sprintf('%06d',$reg_id); 
} else { $wr_11 = $write ['wr_11']; }?>

<div class="frm_t">*등기접수번호 : <span class="text-red ml10 border-b2"> <?php echo $wr_11 ?> </span></div>
<input type="hidden" name="wr_11" value="<?php echo $wr_11 ?>">

<!-- 등기종류 1.일반등기 2.확인등기 3.검증등기-->
<?php if ($wr_12 =='일반등기') { $wbg = 'bg-dark';}
else if ($wr_12 =='확인등기') { $wbg = 'bg-blue';}
else { $wbg = 'bg-red';}?>

<div class="">*등기종류 : <span class="btn-12 <?php echo $wbg; ?>"> <?php echo $wr_12 ;?></span>


<!--01. 물건의 개요 -->
<div class="border-b2">
<div class="regtitle btn btn-dark fs-15 mt30"><i class="fa fa-list mr10"></i> 01. 등기할 물건 표시</div>

<div class="border-t2 mt5 bg-bluel outline p20"> <!--물건표시 container--> 

    <!--1.등기물건 제목명 -->
    <div class="frm_tl h7_tl">등기 물건명칭</div>
        <div class="bo_w_ico bo_w_tit write_div border-1">
            <label for="wr_subject" class="lb_icon"><i class="fa fa-file"></i> </label>        
            <input type="text" name="wr_subject" value="<?php echo $subject ?> " id="wr_subject" required="" class="frm_input full_input required" size="50" maxlength="255" placeholder="등기할 아이템의 명칭(제목)은? ">       
        </div>


    <!-- 2.카테고리 -->
    <div class="frm_tl h7_tl">등록 카테고리</div>
    <div class="formCol2wr">
    <!-- 카테고리1 -->
    <div class="bo_w_ico write_div mt0 ">    
            <label for="wr_13"  class="lb_icon"><i class="fa fa-check"></i></label>
            <select name="wr_13" id="ca_name" required class="frm_input full_input required text-blue fw-700">
            <option value="">등록아이템 유형</option>   
                <option value="디지털(Digital)형태"<?php echo ($write['wr_13'] == "디지털(Digital)형태") ? " selected" : "";?>>*디지털(Digital)형태</option>
                <option value="아날로그(Analogue)형태"<?php echo ($write['wr_13'] == "아날로그(Analogue)형태") ? " selected" : "";?>>*아날로그(Analogue)형태</option>
                <option value="기타형태"<?php echo ($write['wr_13'] == "기타형태") ? " selected" : "";?>>*기타형태</option>
            </select>
    </div>
    <!-- 카테고리2 -->
    <div class="bo_w_ico write_div">    
            <label for="wr_14"  class="lb_icon"><i class="fa fa-check"></i></label>
            <select name="wr_14" id="ca_name" required class="frm_input full_input required text-blue">
                <option value="">등록아이템 분류</option>           
                <option value="디지털작품(Digital Art)"<?php echo ($write['wr_14'] == "디지털작품(Digital Art)") ? " selected" : "";?>>디지털작품(Digital Art)</option>
                <option value="미술작품(Art)"<?php echo ($write['wr_14'] == "미술작품(Art)") ? " selected" : "";?>>미술작품(Art)</option>
                <option value="사진(Photography)"<?php echo ($write['wr_14'] == "사진(Photography)") ? " selected" : "";?>>사진(Photography)</option>
                <option value="영상(Movie)"<?php echo ($write['wr_14'] == "영상(Movie)") ? " selected" : "";?>>영상(Movie)</option>
                <option value="음악(Music)"<?php echo ($write['wr_14'] == "음악(Music)") ? " selected" : "";?>>음악(Music)</option>
                <option value="도메인(Domain Names)"<?php echo ($write['wr_14'] == "도메인(Domain Names)") ? " selected" : "";?>>도메인(Domain Names)</option>
                <option value="게임(Game)"<?php echo ($write['wr_14'] == "게임(Game)") ? " selected" : "";?>>게임(Game)</option>
                <option value="스포츠(Sports)"<?php echo ($write['wr_14'] == "스포츠(Sports)") ? " selected" : "";?>>스포츠(Sports)</option>
                <option value="자동차(Car)"<?php echo ($write['wr_14'] == "자동차(Car)") ? " selected" : "";?>>자동차(Car)</option>
                <option value="----------------"<?php echo ($write['wr_14'] == "----------------") ? " selected" : "";?>>----------------</option>
                <option value="전자기기(IT Device)"<?php echo ($write['wr_14'] == "전자기기(IT Device)") ? " selected" : "";?>>전자기기(IT Device)</option>
                <option value="명품류 (Luxury Brand)"<?php echo ($write['wr_14'] == "명품류 (Luxury Brand)") ? " selected" : "";?>>명품류 (Luxury Brand)</option>
                <option value="도서류(Book)"<?php echo ($write['wr_14'] == "도서류(Book)") ? " selected" : "";?>>도서류(Book)</option>
                <option value="화장품류(Cosmetics)"<?php echo ($write['wr_14'] == "화장품류(Cosmetics)") ? " selected" : "";?>>화장품류(Cosmetics)</option>
                <option value="약품,식품류(Food)"<?php echo ($write['wr_14'] == "약품,식품류(Food)") ? " selected" : "";?>>약품,식품류(Food)</option>
                <option value="트레이딩카드(Trading Cards)"<?php echo ($write['wr_14'] == "트레이딩카드(Trading Cards)") ? " selected" : "";?>>트레이딩카드(Trading Cards)</option>
                <option value="수집품(Collectibles)"<?php echo ($write['wr_14'] == "수집품(Collectibles)") ? " selected" : "";?>>수집품(Collectibles)</option>
                <option value="기타"<?php echo ($write['wr_14'] == "기타") ? " selected" : "";?>>기타</option>
            
            </select>
    </div>
    </div>



  
<!--분할등기 입력 -->
<div class="frm_tl h7_tl">등기범위 : <?php echo "<strong class='text-red'>".$wr_46."</strong>" ;?> </div>

<?php if ($wr_46 =='분할등기(부분등기)') { ?>

    <div class="bo_w_ico write_div">
                <label for="wr_47" class="lb_icon required"><i class="fa fa-cubes"></i> <span class="sound_only">원본 스마트컨트랙트</span></label>                
                <input type="text" name="wr_47" value="<?php echo $write['wr_47'] ?>" id="wr_47" class="frm_input full_input " required size="50" placeholder="원본아이템(분할전)-스마트컨트랙트 입력(필수)">
            </div>

    <div class="well mp-0">
        <div class="formCol2wr">
        <div class="bo_w_ico write_div">
                <label for="wr_48" class="lb_icon required"><i class="fa fa-share-square-o"></i> <span class="sound_only">전체 에디션수</span></label>                
                <input type="text" name="wr_48" value="<?php echo $write['wr_48'] ?>" id="wr_48" class="frm_input full_input " required size="50" placeholder="전체 에디션수(필수)">
            </div>

            <div class="bo_w_ico write_div">
                <label for="wr_49" class="lb_icon"><i class="fa fa-th-list"></i> <span class="sound_only">해당 분할등록번호</span></label>
                <input type="text" name="wr_49" value="<?php echo $write['wr_49'] ?>" id="wr_49" class="frm_input full_input" size="50" placeholder="해당 분할 등록번호(필수)">
            </div>
        </div>
 
    </div>
    
<?php }?>



    <!--파일첨부1 : 등록이미지(필수) -->
    <div class="frm_tl h7_tl">등기물건 대표 이미지 등록 (필수)</div>
    <div class="formCol2wr border-1 bg-white">
        <div class="bo_w_flie write_div">
            <div class="file_wr write_div">
            <label for="bf_file[]" class="lb_icon required"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only">대표이미지 등록</span></label>
           
            <?php if($w!='u'){ $required='required';}else{$required='';} ?>
            <input  id="bf_file_0" type="file" name="bf_file[]"  <?php echo $required ?>  title="이미지 파일첨부1 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file">
            </div>

            <?php if ($is_file_content) { ?>
            <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[0]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input">
            <?php } ?>

            <?php if($w == 'u' && $file[0]['file']) { ?>
            <input type="checkbox" id="bf_file_del0" name="bf_file_del[0]" value="1" > <label for="bf_file_del0"><?php echo $file[0]['source'].'('.$file[0]['size'].')'; ?> 선택하여 현재등록된 파일을 삭제하고 새로 추가</label>
            <?php } ?>
        </div>
        <div id="image-holder" class="p10"></div>
    </div>


    <!-- 이미지미리보기 프리뷰 scrypt -->
    <script>
            $("#bf_file_0").on('change', function () {
            //Get count of selected files
            var countFiles = $(this)[0].files.length;

            var imgPath = $(this)[0].value;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            var image_holder = $("#image-holder");
            image_holder.empty();

            if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                if (typeof (FileReader) != "undefined") {

                    //loop for each file selected for uploaded.
                    for (var i = 0; i < countFiles; i++) {

                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $("<img />", {
                                "src": e.target.result,
                                    "class": "thumb-image"
                            }).appendTo(image_holder);
                        }

                        image_holder.show();
                        reader.readAsDataURL($(this)[0].files[i]);
                    }

                } else {
                    alert("이 브라우저는 <미리보기>를 지원하지 않습니다.");
                }
            } else {
                alert("이미지 화일(gif,png,jpg,jpeg)만 업로드가 가능합니다. 이미지를 다시 업로드하세요");
            }
            });
    </script>

    
    <!--등기물건 설명 -->
    <div class="frm_tl h7_tl required">등기물건 설명(필수)</div>
    <label for="wr_content" class="sound_only required">등기물건 설명<strong>(필수)</strong></label>
        <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <p id="char_count_desc">이 란은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
            <?php } ?>
            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
            <?php } ?> 


    <!--특성 및 사양 -->
    <div class="frm_tl h7_tl">특성 및 사양(선택)</div>
    <textarea name="wr_15" id="wr_15" rows="5" class="text-gray width-100 p10" placeholder="(예)작품일 경우 - ㅇ작품명: ㅇ작가명: ㅇ제작기법: ㅇ제작년도: ㅇ크기: ㅇ에디션: ㅇ재질: ㅇ특이사항:  "><?php echo $write['wr_15'] ?></textarea>


    <!--물건보관 방식 -->
    <div class="frm_tl h7_tl">물건 보관방식</div>
            <div class="radio required fs-15">
            <label class="radio_f"><input type="radio" class="radio_f" name="wr_16" required value="소유자 개인보관"<?php echo ($write['wr_16'] == "소유자 개인보관") ? " checked" : "";?> required> 소유자 개인보관 </label>
            <label class="radio_f"><input type="radio" name="wr_16" required value="전시가능한 별도장소에 보관"<?php echo ($write['wr_16'] == "전시가능한 별도장소에 보관") ? " checked" : "";?> requir> 전시가능한 별도장소에 보관</label>
            <label class="radio_f"><input type="radio" name="wr_16" required value="KNCA를 통한 위탁보관"<?php echo ($write['wr_16'] == "KNCA를 통한 위탁보관") ? " checked" : "";?> required> KNCA를 통한 위탁보관</label>
            </div>
    </div>

</div>  <!--end 필수물건표시 -->


<!--02.선택입력의 표시-->
<div class="border-b2 mt50">
<button class="regtitle btn btn-dark fs-15" type="button" data-toggle="collapse" data-target="#collapseAdded" aria-expanded="false" aria-controls="collapseAdded"> 02.등기물건의 상세 입력사항 (선택) <i class="fa fa-chevron-down ml20" style="float:right"></i> </button>

<div class="collapse p20 bg-grayl outline" id="collapseAdded">

            <!-- 파일첨부2 : 보충이미지 -->
            <div class="frm_t">추가 등기물건 이미지 (선택)</div>
            <?php for ($i=1; $is_file && $i<4; $i++) { ?>
                <div class="bo_w_flie write_div mb10">
                    <div class="file_wr write_div">
                        <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
                        <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
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
         

            <!-- 관련링크1  -->
            <div class="frm_t">등기물건 관련설명 외부링크(유투브,기사,기타)(선택)</div>
            <div class="bo_w_link write_div">
                    <label for="wr_link1"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 링크  #1</span></label>
                    <input type="text" name="wr_link1" value="<?php if($w=="u"){echo$write['wr_link1'];} ?>" id="wr_link1" class="frm_input full_input" size="50" 
                    placeholder="유튜브,영상,이미지 등 물건관련 링크를 선택해 주세요.">
            </div>

            <!--상세설명 표시-->
            <div class="frm_t">상세설명 및 스토리 (선택)</div>
            <div class="wr_content">
                <?php echo editor_html("wr_17", $write['wr_17'] ); ?>
            </div>
   
</div>  <!--end 물건표시 -->



<!--03.소유권,저작권의 표시-->
<div class="border-b2 mt50">
<button class="regtitle btn btn-dark fs-15" type="button" data-toggle="collapse" data-target="#collapseOn" aria-expanded="false" aria-controls="collapseOn"> 03.소유권,저작권 표시사항 <span class="text-yellow">(필수)</span> <i class="fa fa-chevron-down ml20" style="float:right"></i> </button>

<div class="p20 bg-bluel outline" id="collapseOn">

    <!--0.신청자 개인검증/ 1.KNCA서류검증 / 2.KNCA실사검증 -->
    <?php if( $wr_12 =='일반등기'){ $wr_30 ="3등급(신청자 개인검증)"; $wr_70 ="개인검증"; } 
            else if( $wr_12 =='확인등기'){ $wr_30 ="2등급(서류제출+KNCA서류검증)"; $wr_70 ="서류검증"; }   
            else if( $wr_12 =='검증등기'){ $wr_30 ="1등급(서류제출+KNCA서류검증+KNCA실사검증)"; $wr_70 ="실사검증"; } ?>

    <div class="frm_t ml10">*확인 등급 : <span class="text-red border-b2"> <?php echo $wr_30 ?> </span></div>
    <input type="hidden" name="wr_30" value="<?php echo $write['wr_30'] ?>">
    

    <!--소유권자의 표시-->
    <div class="border-b2">
    <button class="btn btn-gray mt30 w200" type="button" data-toggle="collapse" data-target="#collapseOwner" aria-expanded="false" aria-controls="collapseOwner"> 소유권자의 표시 <i class="fa fa-chevron-down ml20" ></i> </button>

    <div class="" id="collapseOwner">
    <div class="well mp-0">
        <div class="formCol2wr">
        <div class="bo_w_ico write_div">
                <label for="wr_20" class="lb_icon required"><i class="fa fa-user-circle-o"></i> <span class="sound_only">소유자 성명</span></label>                
                <input type="text" name="wr_20" value="<?php echo $write['wr_20'] ?>" id="wr_20" class="frm_input full_input bg-orange-b" required size="50" placeholder="소유자 성명(필수)">
            </div>

            <div class="bo_w_ico write_div">
                <label for="wr_21" class="lb_icon"><i class="fa fa-address-card-o"></i> <span class="sound_only">소유자 생년월일</span></label>
                <input type="text" name="wr_21" value="<?php echo $write['wr_21'] ?>" id="wr_21" class="frm_input full_input" size="50" placeholder="생년월일(2021-10-24 )">
            </div>
        </div>
        <div class="formCol2wr"> 
        <div class="bo_w_ico write_div">
                <label for="wr_22" class="lb_icon required"><i class="fa fa-envelope-o"></i> <span class="sound_only">이메일</span></label>
                <input type="email" name="wr_22" value="<?php echo $write['wr_22'] ?>" id="wr_22" class="frm_input full_input email bg-orange-b" required placeholder="이메일">
            </div>

            <div class="bo_w_ico write_div">
                <label for="wr_23" class="lb_icon"><i class="fa fa-phone"></i> <span class="sound_only">연락처</span></label>
                <input type="text" name="wr_23" value="<?php echo $write['wr_23'] ?>" id="wr_23" class="frm_input full_input" size="50" placeholder="연락처">
            </div>
        </div>
        <div class="formCol2wr">
        <div class="bo_w_ico write_div">
                <label for="wr_24" class="lb_icon"><i class="fa fa-home"></i> <span class="sound_only">주소</span></label>
                <input type="text" name="wr_24" value="<?php echo $write['wr_24'] ?>" id="wr_24" class="frm_input full_input" size="50" placeholder="주소">
            </div>

            <div class="bo_w_ico write_div">
                <label for="wr_25" class="lb_icon"><i class="fa fa-file-code-o"></i> <span class="sound_only">개인코드(블록체인 주소)</span></label>
                <input type="text" name="wr_25" value="<?php echo $write['wr_25'] ?>" id="wr_25" class="frm_input full_input" size="50" placeholder="개인코드(블록체인 지갑주소)">
            </div>
        </div>
    </div>
    </div>
    </div>

    <!--저작권자 표시 -->
    <div class="border-b2">
    <div class="btn btn-gray mt30 w200" type="button" data-toggle="collapse" data-target="#collapseCreator" aria-expanded="false" aria-controls="collapseCreator"> 저작권자의 표시 <i class="fa fa-chevron-down ml20"></i> </div>

    <div class="" id="collapseCreator">
    <div class="well mp-0">

        <div class="formCol2wr">
        <div class="bo_w_ico write_div">
                <label for="wr_31" class="lb_icon required"><i class="fa fa-user-circle-o"></i> <span class="sound_only">저작권자 성명</span></label>
                <input type="text" name="wr_31" value="<?php echo $write['wr_31'] ?>" id="wr_31" class="frm_input full_input bg-orange-b" required size="50" placeholder="저작권자 성명(필수)">
            </div>

            <div class="bo_w_ico write_div">
                <label for="wr_32" class="lb_icon"><i class="fa fa-address-card-o"></i> <span class="sound_only">저작권자 생년월일</span></label>
                <input type="text" name="wr_32" value="<?php echo $write['wr_32'] ?>" id="wr_32" class="frm_input full_input" size="50" placeholder="생년월일(2022-01-20)">
            </div>
        </div>

        <div class="formCol2wr">
        <div class="bo_w_ico write_div">
                <label for="wr_33" class="lb_icon"><i class="fa fa-envelope-o"></i> <span class="sound_only">이메일</span></label>
                <input type="email" name="wr_33" value="<?php echo $write['wr_33'] ?>" id="wr_33" class="frm_input full_input email " placeholder="이메일">
            </div>

            <div class="bo_w_ico write_div">
                <label for="wr_34" class="lb_icon"><i class="fa fa-phone"></i> <span class="sound_only">연락처</span></label>
                <input type="text" name="wr_34" value="<?php echo $write['wr_34'] ?>" id="wr_34" class="frm_input full_input" size="50" placeholder="연락처">
            </div>
        </div>

        <div class="formCol2wr">
        <div class="bo_w_ico write_div">
                <label for="wr_35" class="lb_icon"><i class="fa fa-home"></i> <span class="sound_only">주소</span></label>
                <input type="text" name="wr_35" value="<?php echo $write['wr_35'] ?>" id="wr_35" class="frm_input full_input" size="50" placeholder="주소">
            </div>

            <div class="bo_w_ico write_div">
                <label for="wr_36" class="lb_icon"><i class="fa fa-file-code-o"></i> <span class="sound_only">개인코드(블록체인 지갑주소)</span></label>
                <input type="text" name="wr_36" value="<?php echo $write['wr_36'] ?>" id="wr_36" class="frm_input full_input" size="50" placeholder="개인코드(블록체인 지갑주소)">
            </div>
        </div>
    </div>
    </div>
    </div>

</div>




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



 <!--06.신청자 서명-->
 <div class="frm_tl h6_tl">*신청자 서명확인</div>
    <div>
                    <?php if($write['wr_10']) { ?>
                        <br><img src="<?php echo $write['wr_10'] ?>">
                    <?php } ?>                   
                        <input type="hidden" name="wr_10"  value="<?php echo $write['wr_10'] ?>" class="form-control input-sm">
                        <div id="wr_10"></div>                    

                    <style type="text/css">
                        #div_signcontract{ width: 500px; }
                        .popupHeader{ margin: 10px; }
                    </style>


                    <script type="text/javascript">
                        var isSign = false;
                        var leftMButtonDown = false;
                        
                        jQuery(function(){
                            //Initialize sign pad
                            init_Sign_Canvas();
                        });
                        
                        function fun_submit() {
                            if(isSign) {
                                var canvas = $("#canvas").get(0);
                                var imgData = canvas.toDataURL();
                                jQuery('#page').find('p').remove();
                                jQuery('#page').find('img').remove();
                                jQuery('#page').append(jQuery('<p id="message" class="text-danger mt10"><i class="fa fa-check-square-o mr10"></i>위의 서명날인으로 접수 및 등록하였습니다.</p>'));
                                jQuery('#wr_10').append($('<input type="hidden" name="wr_10" required class="form-control input-sm">').attr('value',imgData));
                                
                                closePopUp();
                            } else {
                                alert('공란에 사인(서명)을 하세요.');
                            }
                        }
                        
                        function closePopUp() {
                            jQuery('#divPopUpSignContract').popup('close');
                            jQuery('#divPopUpSignContract').popup('close');
                        }
                        
                        function init_Sign_Canvas() {
                            isSign = false;
                            leftMButtonDown = false;
                            
                          jQuery('#message').remove(); //메세지 삭제

                            //Set Canvas width
                            var sizedWindowWidth = $(window).width();
                            if(sizedWindowWidth > 700)
                                sizedWindowWidth = $(window).width() / 2;
                            else if(sizedWindowWidth > 400)
                                sizedWindowWidth = sizedWindowWidth - 100;
                            else
                                sizedWindowWidth = sizedWindowWidth - 50;
                             
                             //$("#canvas").width(sizedWindowWidth);
                             $("#canvas").width(283);
                             $("#canvas").height(80);
                             $("#canvas").css("border","1px solid #000");
                            
                             var canvas = $("#canvas").get(0);
                            
                             canvasContext = canvas.getContext('2d');

                             if(canvasContext)
                             {
                                 //canvasContext.canvas.width  = sizedWindowWidth;
                                 canvasContext.canvas.width  = 283;
                                 canvasContext.canvas.height = 80;

                                 canvasContext.fillStyle = "#fff";
                                 canvasContext.fillRect(0,0,sizedWindowWidth,200);
                                 
                                 canvasContext.moveTo(50,150);
                                 canvasContext.lineTo(sizedWindowWidth-50,150);
                                 canvasContext.stroke();
                                
                                 canvasContext.fillStyle = "#000";
                                 canvasContext.font="20px Arial";
                                 canvasContext.fillText("x",40,155);
                             }
                             // Bind Mouse events
                             $(canvas).on('mousedown', function (e) {
                                 if(e.which === 1) { 
                                     leftMButtonDown = true;
                                     canvasContext.fillStyle = "#000";
                                     var x = e.pageX - $(e.target).offset().left;
                                     var y = e.pageY - $(e.target).offset().top;
                                     canvasContext.moveTo(x, y);
                                 }
                                 e.preventDefault();
                                 return false;
                             });
                            
                             $(canvas).on('mouseup', function (e) {
                                 if(leftMButtonDown && e.which === 1) {
                                     leftMButtonDown = false;
                                     isSign = true;
                                 }
                                 e.preventDefault();
                                 return false;
                             });
                            
                             // draw a line from the last point to this one
                             $(canvas).on('mousemove', function (e) {
                                 if(leftMButtonDown == true) {
                                     canvasContext.fillStyle = "#000";
                                     var x = e.pageX - $(e.target).offset().left;
                                     var y = e.pageY - $(e.target).offset().top;
                                     canvasContext.lineTo(x,y);
                                     canvasContext.stroke();
                                 }
                                 e.preventDefault();
                                 return false;
                             });
                             
                             //bind touch events
                             $(canvas).on('touchstart', function (e) {
                                leftMButtonDown = true;
                                canvasContext.fillStyle = "#000";
                                var t = e.originalEvent.touches[0];
                                var x = t.pageX - $(e.target).offset().left;
                                var y = t.pageY - $(e.target).offset().top;
                                canvasContext.moveTo(x, y);
                                
                                e.preventDefault();
                                return false;
                             });
                             
                             $(canvas).on('touchmove', function (e) {
                                canvasContext.fillStyle = "#000";
                                var t = e.originalEvent.touches[0];
                                var x = t.pageX - $(e.target).offset().left;
                                var y = t.pageY - $(e.target).offset().top;
                                canvasContext.lineTo(x,y);
                                canvasContext.stroke();
                                
                                e.preventDefault();
                                return false;
                             });
                             
                             $(canvas).on('touchend', function (e) {
                                if(leftMButtonDown) {
                                    leftMButtonDown = false;
                                    isSign = true;
                                }
                             
                             });
                        }
                    </script>

                    <div data-role="page">

                        <div data-role="popup" id="divPopUpSignContract">
                            <div class="ui-content popUpHeight">
                                <div id="div_signcontract">
                                    <canvas id="canvas">Canvas is not supported</canvas>

                                    <h4 class="fw-700 my-10">위 사항이 틀림없음을 확인하며 NFT등기신청합니다.</h4>
                                    <div>
                                        <input id="btnSubmitSign" type="button" data-inline="true" data-mini="true" data-theme="b" class="btn   btn-dark btn-md" value=" 서명확인 (클릭필수) " onclick="fun_submit()" />
                                        <input id="btnClearSign" type="button" data-inline="true" data-mini="true" data-theme="b" class="btn btn-light" value=" 재작성 " onclick="init_Sign_Canvas()" />
                                    </div>

                                    <div id="page" data-role="content"></div>	
                                </div>	
                            </div>
                        </div>
                    </div>
    </div>  
<!--서명끝-->
    


    <?php if ($is_use_captcha) { //캡챠 자동등록방지  ?>
    <div class="write_div captchaalign">
        <?php echo $captcha_html ?>
    </div>
    <?php } ?>


   

    <!--07.개인정보처리동의 및 확인절차 -->
    <div class="frm_t1 mt50 h6_tl">개인정보취급 동의</div>
    <div class="write_div">
		<textarea class="form-control" rows="5" readonly="readonly"><?=get_text($config['cf_privacy']) ?></textarea>
	</div>
    <div class="write_div_privacy flex-y-center">   
		<input type="checkbox" name="wr_agree" id="wr_agree" required> <span class="ml5 mr20 fs-15 flex-y-center"><b class="text-dark">개인정보처리방침에 동의합니다.(체크필수)</b></span> 
		<a href="#" data-featherlight="<?php echo G5_THEME_URL ?>/pop.privacy.php .term_area" data-featherlight-type="ajax"><b class="outline-btn fs-10">개인정보처리방침 자세히 보기</b></a>
    </div>



    
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

 

 <?php 
 //*****.5.관리자의 [권리제한] 등록************
 if($is_admin && $act=="") { ?>
<section id="jehan">

   <div class="border-b2 mt60">
    <button class="btn btn-danger fs-15 width-100 text-left" type="button"> **[관리자용 - 권리제한 기록하기]</span> <i class="fa fa-chevron-down ml20"></i> </button>
   </div>

   <div class="frm_tl h7_tl">권리제한 내용</div>
   <div class="">
              
           <!-- 권리제한 등기원인 -->
           <div class="bo_w_ico write_div">    
            <label for="wr_51"  class="lb_icon"><i class="fa fa-check"></i></label>
            <select name="wr_51" id="ca_name" required class="frm_input full_input required text-blue fw-700">
            <option value="">등기원인</option>   
                <option value="근저당설정"<?php echo ($write['wr_51'] == "근저당설정") ? " selected" : "";?>>*근저당설정"</option>
                <option value="압류설정"<?php echo ($write['wr_51'] == "압류설정") ? " selected" : "";?>>*압류설정</option>
                <option value="경매진행"<?php echo ($write['wr_51'] == "경매진행") ? " selected" : "";?>>*경매진행</option>
                <option value="기타제한"<?php echo ($write['wr_51'] == "기타제한") ? " selected" : "";?>>*기타제한</option>
            </select>
            </div>


        <div class="formCol2wr">

            <div class="bo_w_ico write_div">
                <label for="wr_52" class="lb_icon"><i class="fa fa-calendar"></i> <span class="sound_only">설정일</span></label>
                <input type="text" name="wr_52" value="<?php echo $write['wr_52'] ?>" id="wr_52" class="frm_input full_input" size="50" placeholder="설정일(2021-10-24 )">
            </div>

            <div class="bo_w_ico write_div">
                <label for="wr_53" class="lb_icon required"><i class="fa fa-money"></i> <span class="sound_only">채권최고액</span></label>                
                <input type="text" name="wr_53" value="<?php echo $write['wr_53'] ?>" id="wr_53" class="frm_input full_input bg-orange-b" required size="50" placeholder="채권최고액">
            </div>

        </div>


        <div class="frm_tl h7_tl">채권자 정보</div>
        <div class="formCol2wr">
            <div class="bo_w_ico write_div">
                <label for="wr_54" class="lb_icon"><i class="fa fa-user-circle-o"></i> <span class="sound_only">채권자 성명</span></label>
                <input type="text" name="wr_54" value="<?php echo $write['wr_54'] ?>" id="wr_54" class="frm_input full_input" size="50" placeholder="채권자 성명">
            </div>

            <div class="bo_w_ico write_div">
                <label for="wr_55" class="lb_icon"><i class="fa fa-address-card-o"></i> <span class="sound_only">채권자 코드</span></label>
                <input type="text" name="wr_55" value="<?php echo $write['wr_55'] ?>" id="wr_55" class="frm_input full_input" size="50" placeholder="채권자 코드">
            </div>
        </div>

        <div class="bo_w_ico write_div">
                <label for="wr_56" class="lb_icon"><i class="fa fa-address-card-o"></i> <span class="sound_only">채권자정보(주소,메일등)</span></label>
                <input type="text" name="wr_56" value="<?php echo $write['wr_56'] ?>" id="wr_56" class="frm_input full_input" size="50" placeholder="채권자정보(주소,메일등)">
         </div>


         <div class="frm_tl h7_tl">채무자 정보</div>
        <div class="formCol2wr">
            <div class="bo_w_ico write_div">
                <label for="wr_57" class="lb_icon"><i class="fa fa-user-circle-o"></i> <span class="sound_only">채무자 성명</span></label>
                <input type="text" name="wr_57" value="<?php echo $write['wr_57'] ?>" id="wr_57" class="frm_input full_input" size="50" placeholder="채무자 성명">
            </div>

            <div class="bo_w_ico write_div">
                <label for="wr_58" class="lb_icon"><i class="fa fa-address-card-o"></i> <span class="sound_only">채무자 코드</span></label>
                <input type="text" name="wr_58" value="<?php echo $write['wr_58'] ?>" id="wr_58" class="frm_input full_input" size="50" placeholder="채무자 코드">
            </div>
        </div>

        <div class="bo_w_ico write_div">
                <label for="wr_59" class="lb_icon"><i class="fa fa-address-card-o"></i> <span class="sound_only">채무자정보(주소,메일등)</span></label>
                <input type="text" name="wr_59" value="<?php echo $write['wr_59'] ?>" id="wr_59" class="frm_input full_input" size="50" placeholder="채무자정보(주소,메일등)">
         </div>
  
         <div class="frm_tl h7_tl">권리제한 설정서류 종류</div>
         <div class="bo_w_ico write_div">

            <label for="wr_60"  class="lb_icon"><i class="fa fa-check"></i></label>
            <select name="wr_60" id="ca_name" required class="frm_input full_input required text-blue fw-700">
            <option value="">권리제한 입증서류</option>   
                <option value="근저당설정 계약서"<?php echo ($write['wr_60'] == "근저당설정 계약서") ? " selected" : "";?>>*근저당설정 계약서"</option>
                <option value="압류설정 계약서"<?php echo ($write['wr_60'] == "압류설정 계약서") ? " selected" : "";?>>*압류설정 계약서</option>
                <option value="경매진행 확인서"<?php echo ($write['wr_60'] == "경매진행 확인서") ? " selected" : "";?>>*경매진행 확인서</option>
                <option value="기타 권리제한 서류"<?php echo ($write['wr_60'] == "기타 권리제한 서류") ? " selected" : "";?>>*기타 권리제한 서류</option>
            </select>
            </div>

  
        <!-- 파일첨부21 : 권리제한 증빙서류제출-->
        <div class="frm_tl">권리제한 증빙서류 제출(필수)</div>
            <div class="bo_w_flie write_div">
                    <div class="file_wr write_div">
                    <label for="bf_file[]" class="lb_icon required"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only">신청자 신분증</span></label>
                    <input  id="bf_file_21" type="file" name="bf_file[]"  title="권리제한 증빙파일첨부 :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file">
                    </div>

                    <?php if ($is_file_content) { ?>
                    <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[21]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input">
                    <?php } ?>
                
                    <?php if($w == 'u' && $file[21]['file']) { ?>
                    <input type="checkbox" id="bf_file_del21" name="bf_file_del[21]" value="1" > <label for="bf_file_del21"><?php echo $file[21]['source'].'('.$file[21]['size'].')'; ?> 파일 삭제</label>
                    <?php } ?>
            </div>




        </div>
   
   <div class="frm_tl h7_tl">기타 설정사항</div>
    <textarea name="wr_61" id="wr_61" rows="5" class="text-gray width-100 p10" placeholder="기타 권리설정에 필요한 사항입력가능"><?php echo $write['wr_61'] ?></textarea>


</section>
 <?php } //권리제한 기록 끝****** ?>


 <?php //권리제한 없음-기본값.
 if(!write['wr_51']){
       $wr_50 = '권리제한 없음';}
       else { $wr_50 = "권리제한 있음";} ?>






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