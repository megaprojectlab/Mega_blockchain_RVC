<div class="border-b2 mt60 required">
<button class="regtitle btn btn-blue fs-15 fw-700" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFile" aria-expanded="false" aria-controls="collapseFile"> 04.[확인등기]를 위한 서류제출</span> <i class="fa fa-chevron-down ml20" style="float:right";></i> </button>
</div>

<div class="collapse p20 bg-bluel outline " id="collapseFile">

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
