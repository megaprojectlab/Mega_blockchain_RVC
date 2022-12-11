<section id="jehan">

   <div class="border-b2 mt60">
    <button class="btn btn-danger fs-15 width-100 text-left" type="button"> **[관리자용 - 권리제한 기록하기]</span> <i class="fa fa-chevron-down ml20"></i> </button>
   </div>

   <div class="frm_tl h7_tl">권리제한 내용</div>
   <div class="">
              
           <!-- 권리제한 등기원인 -->
           <div class="bo_w_ico write_div">    
            <label for="wr_51"  class="lb_icon"><i class="fa fa-check"></i></label>
            <select name="wr_51" id="ca_name" class="frm_input full_input required text-blue fw-700">
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
                <input type="text" name="wr_53" value="<?php echo $write['wr_53'] ?>" id="wr_53" class="frm_input full_input bg-orange-b"  size="50" placeholder="채권최고액">
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
            <select name="wr_60" id="ca_name" class="frm_input full_input required text-blue fw-700">
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