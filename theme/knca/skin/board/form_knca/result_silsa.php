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