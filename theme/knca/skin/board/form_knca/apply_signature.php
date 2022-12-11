

    
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
