
<div class="border-b2 mt60 required">
<button class="regtitle btn btn-danger fs-15 fw-700" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSilsa" aria-expanded="false" aria-controls="collapseSilsa"> 05.[실사검증 예약신청]- 신청후 직접상담</span> <i class="fa fa-chevron-down ml20" style="float:right" ></i> </button>
</div>

<div class="collapse p20 bg-redl outline " id="collapseSilsa">
   
    <div class="frm_tl h6_tl checkbox">
        <input type="checkbox" name="wr_80" class="ml10 required"  value="실사검증 예약신청"<?php echo ($write['wr_80'] == "실사검증 예약신청") ? " checked" : "";?>> <span class="ml30 text-red">실사검증 예약신청(필수체크)</span>   
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
                <input type="text" name="wr_81" value="<?php echo $write['wr_81'] ?>" id="wr_81" class="frm_input full_input" size="50" maxlength="255" placeholder="실사검증 장소(상세주소)">       
            </div>

   <div class="frm_t">02.실사검증 희망일(KNCA일정에따라 정함)</div>
        <div class="bo_w_ico bo_w_tit write_div">
            <label for="wr_82" class="lb_icon required"><i class="fa fa-file"></i> </label>        
            <input type="date" name="wr_82" value="<?php echo $write['wr_82'] ?>" id="wr_82"  class="frm_input full_input" size="50" maxlength="255" placeholder="형식)2022.01.08~2022.01.30">       
        </div>

   <div class="frm_t">03. 실사검증 신청자측 연락처</div>

   <div class="formCol2wr"> 
       <div class="bo_w_ico write_div">
                <label for="wr_83" class="lb_icon required"><i class="fa fa-user"></i> <span class="sound_only">담당자명</span></label>
                <input type="text" name="wr_83" value="<?php echo $write['wr_83'] ?>" id="wr_83" class="frm_input full_input"  placeholder="담당자명">
       </div>
            
        <div class="bo_w_ico write_div">
            <label for="wr_84" class="lb_icon required"><i class="fa fa-phone"></i> <span class="sound_only">담당자 연락처</span></label>
            <input type="text" name="wr_84" value="<?php echo $write['wr_84'] ?>" id="wr_84" class="frm_input full_input" size="50"  placeholder="담당자 연락처">
        </div>
        <div class="bo_w_ico write_div">
                <label for="wr_85" class="lb_icon required"><i class="fa fa-envelope-o"></i> <span class="sound_only">담당자 이메일</span></label>
                <input type="email" name="wr_85" value="<?php echo $write['wr_85'] ?>" id="wr_85" class="frm_input full_input email"  placeholder="담당자 이메일">
        </div>

    </div>

    <div class="frm_t">04.기타 실사요청사항</div>
        <div class="bo_w_ico bo_w_tit write_div">
            <textarea name="wr_86" id="wr_86" rows="5" class="text-gray width-100 p10" placeholder="실사요청에 필요한 추가사항을 입력하세요 "><?php echo $write['wr_86'] ?></textarea>
        </div>


      
</div>   <!--실사검증 신청 끝-->