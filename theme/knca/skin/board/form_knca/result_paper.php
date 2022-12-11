<section id="result_paper">
    <div class="border-b2 mt60">
    <button class="btn btn-dark fs-15 width-100 text-left" type="button" data-toggle="collapse" data-target="#collapseAdmin1" aria-expanded="false" aria-controls="collapseAdmin1"> **[관리자용 -서류검증 기록하기]</span> <i class="fa fa-chevron-down ml20"></i> </button>
    </div>

    <div class="p20 bg-redl outline " id="collapseAdmin1">
   
   <div class="frm_t">01.서류검증 확인일 (완료시에만 체크하세요)</div>
            <div class="bo_w_ico bo_w_tit write_div">
                <label for="wr_75" class="lb_icon"><i class="fa fa-file"></i> </label>        
                <?php if(!$write['wr_75']){ $wr_75 ='제출서류 확인중'; ?>
                <input type="text" name="wr_75" value="<?php echo $write['wr_75'] ?>" id="wr_75" class="frm_input full_input" size="50" maxlength="255" placeholder="서류확인 시간 표시로 완료허가 2022-01-16"> 
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

    <select name="wr_74" id="ca_name" required class="frm_input full_input required text-blue fw-700" check="<?=$write['wr_74']?>" >
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