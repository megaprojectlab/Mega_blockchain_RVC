<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/main.css?ver='.G5_CSS_VER.''.date("H:i:s").'">', 5);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/plugin/bxslider/jquery.bxslider.min.css">', 0);
add_javascript('
<script src="'.G5_THEME_URL.'/plugin/bxslider/jquery.bxslider.min.js?v7"></script>
<script src="'.G5_THEME_URL.'/plugin/youtubeloop/jquery.mb.YTPlayer.min.js?v7"></script>', 99);
add_javascript('<script src="'.G5_THEME_URL.'/js/WEBsiting.main.js?v7'.date("H:i:s").'"></script>', 100);
include_once(G5_THEME_PATH.'/head.php');

	/* 
	상단 메뉴바가 컨텐와 겹치는 경우 아래 코드를 사용하시면 상단 메뉴 부분 만큼 내려옵니다.
	메인 슬라이더를 사용하지 않는 경우 아래 스타일 코드의 주석을 해제해 주세요
	*/ 
	//add_stylesheet('<style>#topSpacer{display:block !important;}</style>', 10);

?>
<h2 class="sound_only">
    <?php echo $g5['title'] ?>
    <?php echo $config['cf_title'] ?>
</h2>




<?php /* 메인페이지 비쥬얼 슬라이더///////// */ ?>
<?php
	/* 
		메인 슬라이더의 가로세로 크기를 지정해 주시면 지정한 비율로 자동으로 맞춰집니다.
		모바일에서는 지정 사이즈의 좌우 30% 씩 제거되어 세로높이를 조금 더 확보합니다.

		글자 정렬 안내
		슬라이더의 li 에 txtCenter , txtLeft , txtRight 클래스로 정렬 가능합니다.

		이미지는 아래 지정된 사이즈와 동일하거나 또는 같은 비율로 제작하여 테마의 이미지 경로에 넣어주세요
		이미지 경로 style="background-image:URL('이미지경로')"

	*/
	$sliderWidth ="1920"; /* 메인 슬라이더늬 넓이를 지정해 주세요 */
	$sliderHeight ="600"; /* 메인 슬라이더늬 높이를 지정해 주세요 // 영상배경이 있는 경우 1080을 넘지 않도록 해주세요*/

	$sliderSpacer ='<img src="'.G5_THEME_URL.'/plugin/websiting/imageSpacer.php?w='.$sliderWidth.'&h='.$sliderHeight.'" alt="Slider Space">';
?>

<section class="mainVisualImage">
    <h2 class="sound_only">
        <?php echo $config['cf_title'] ?> KNCA Main Slide
    </h2>
    <div class="mvSlider">
        <ul>
            <li class="txtCenter">
                <?php echo $sliderSpacer ?>

                <?php /* 유튜브 배경세트 ////// */ ?>
                <div class="youtubeBackgroundBG mvMwAlign"><i class="fa fa-spin fa-circle-o-notch"></i>
                    <?php /* 유튜브 영상의 경우 videoURL:'N4mCIq4lnTs'  부분에 유튜브 주소창의 영상 아이디값을 입력해 주세요 */ ?>
                    <div class="youtubePlayer" data-property="{videoURL:'N4mCIq4lnTs'}"></div>
                </div>
                <?php /*  ////// 유튜브 배경세트 */ ?>


                <div class="WCMSScontS">
                    <dl>
                        <dt><i class="fa fa-youtube-square"></i> 한국NFT공인인증원</dt>
                        <dd>
                            한국 최초로 블록체인 기술기반 생활속의 NFT등기소가 여러분을 만납니다.
                            <br>
                            <a href="#" class="themeBgColor">view more +</a>
                        </dd>
                    </dl>
                </div>
            </li>
            <li class="txtCenter" style="background-image:URL('<?php echo G5_THEME_IMG_URL ?>/mainImg01.jpg')">
                <?php echo $sliderSpacer ?>

                <div class="WCMSScontS">
                    <dl>
                        <dt>생활속의 NFT 등기소 KNCA</dt>
                        <dd>
                            누구나 쉽고 편리하게 온,오프라인 NFT 등기소를 통해 소중한 자산을 등기하세요.
                            <br>
                            <a href="#" class="themeBgColor">view more +</a>
                        </dd>
                    </dl>
                </div>
            </li>
            <li class="txtLeft" style="background-image:URL('<?php echo G5_THEME_IMG_URL ?>/mainImg02.jpg')">
                <?php echo $sliderSpacer ?>

                <div class="WCMSScontS">
                    <dl>
                        <dt>KNCA 등기소 서비스</dt>
                        <dd>
                            아날로그의 디지털화, NFT등록, 인증, 열람, 증명서까지 특허된 원스탑서비스
                            <br>
                            <a href="#" class="themeBgColor">view more +</a>
                        </dd>
                    </dl>
                </div>
            </li>
            <li class="txtRight" style="background-image:URL('<?php echo G5_THEME_IMG_URL ?>/mainImg03.jpg')">
                <?php echo $sliderSpacer ?>

                <div class="WCMSScontS">
                    <dl>
                        <dt>NFT 등기부등본</dt>
                        <dd>
                            이제 NFT증명서와 NFT등기부등본을 통해 소유권과 자산 거래내역을 발급하고, 무인발급기로 발급가능합니다.
                            <br>
                            <a href="#" class="themeBgColor">view more +</a>
                        </dd>
                    </dl>
                </div>
            </li>
        </ul>
    </div>
    <?php echo '<aside id="sliderSpace">'.$sliderSpacer.'</aside>'; ?>

</section>
<?php /* /////////메인페이지 비쥬얼 슬라이더 */ ?>


<!--Search box -->
<section class="mainContents mt30 flex-center sm-none">

    <div class="hd_sch_wr w-70">
        <fieldset id="hd_sch">
            <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php"
                onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="ca_name||wr_subject||wr_content">
                <input type="hidden" name="sop" value="or">
                <div class="input-group flex-nowrap">

                    <label for="sch_stx" class="sound_only">검색어 필수</label>
                    <input type="text" name="stx" class="form-control" style="height:50px;" id="sch_str" maxlength="20"
                        placeholder="검색어를 입력해주세요">

                    <span class="input-group-btn">
                        <button type="submit" id="sch_submit" value="검색" class="btn btn-default" style="height:50px;"><i class="fa fa-search"
                                aria-hidden="true"></i><span class="sound_only">검색</span></button>
                    </span>
                </div>
            </form>

            <script>
                function search_submit(f) {
                    if (f.q.value.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.q.select();
                        f.q.focus();
                        return false;
                    }
                    return true;
                }
            </script>
        </fieldset>
    </div>
</section>


<!--favorite box -->
<style>
  /*favorite */
#fav .row {width:600px;}
#fav div a { width:80px; height:80px; line-height:80px; border:1px solid #999; border-radius:50%; display:block;}
#fav div a:hover { border:2px solid #de8f62; color:red;}
#fav div, #fav a { text-align:center; margin:0 auto; font-size:12px;}
#fav div i{font-size:2.5em;}

/*tab*/
    .nav-link{font-size:16px; font-weight:800; padding: 10px 20px; }
    .nav-tabs .nav-link.active .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #fff; background-color: #111000; }
    .nav-tabs .nav-link { border: 1px solid #999; }    

@media(max-width:750px){
    #fav .row {width:100%;}
      #fav div a { width:60px; height:60px; line-height:60px; border:1px solid #999; border-radius:50%; display:block;}
      #fav div i{font-size:2em;}
      #fav strong {font-size:10px; text-align:center;} 
      #fav .col {margin:0; padding:0;}

      .nav-link{font-size:14px; font-weight:800; padding: 10px 20px; }
     }
</style>


<!-- Go url -->
<section id="fav" class="mainContents mt30 text-center">
    <div class="row row-cols-5">
        <div class="col">
            <a href="/content/reg_guide">
                <i class="bi bi-vector-pen text-blue"></i>
                <!--<img src="<?=G5_THEME_IMG_URL?>/knca/icon_01_2x.png"> -->
            </a>
            <strong>NFT등기신청</strong>
        </div>

        <div class="col">
            <a href="/pages/myProcess.php">
                <i class="bi bi-menu-up"></i>
            </a>
            <strong>등기 진행현황</strong>
        </div>
        <div class="col">
            <a href="/content/nftreg">
                <i class="bi bi-pc-display-horizontal text-blue"></i>
            </a>
            <strong>증명서발급</strong>
        </div>
        <div class="col">
            <a href="#">
                <i class="bi bi-layout-wtf"></i>
            </a>
            <strong>등기변경신청</strong>
        </div>

        <div class="col">
            <a href="/pages/myProcess.php">
                <i class="bi bi-person-video3"></i>
            </a>
            <strong>MY페이지</strong>
        </div>
    </div>
</section>


<!-- specila NFT -->
<section class="mainContents mt50">
    <div class="line-5-red mb5"></div>
    <h2 class="title-20 mb20">스페셜 NFT등기<a href="https://kornft.org/300" class="ml30 fs-12 rounded"> 더보기 <i
                class="fa fa-plus-circle" aria-hidden="true"></i></a></h2>
    <?php echo latest('theme/knca_img_slide', '300', 10, 24); ?>
</section>


<section class="mainContents mt80">
<div class="row">
    <div class="col-sm mr50">
            <!-- 2  -->
            <div class="line-5-red mb10"></div>
            <h2 class="title-20 mb20">최근 등기물건 <a href="https://kornft.org/300" class="ml30 fs-12 rounded" > 더보기 <i
                        class="fa fa-plus-circle" aria-hidden="true"></i></a></h2>
            <?php
                    /* 웹진형 게시판 최신글 */
                    // 사용방법 : latest('theme/webzine', '게시판아이디', 출력라인, 글자수);
                    echo latest('theme/knca_img_list', '300',3, 24);
                    ?>
    </div> 

    <div class="col-sm">
            <!-- 1.tab -->
            <div class="tabs-container mt60">
                <!-------------------------- tabs -------------------------->
                <ul class="nav nav-tabs " role="tablist">


                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-nav3" data-bs-toggle="tab" data-bs-target="#tab-3"
                            type="button" role="tab" aria-controls="tab-3" aria-selected="true">KNCA언론보도</button>
                    </li>


                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-nav1" data-bs-toggle="tab" data-bs-target="#tab-1"
                            type="button" role="tab" aria-controls="tab-1" aria-selected="true">공지사항</button>
                    </li>
       
                    
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-nav2" data-bs-toggle="tab" data-bs-target="#tab-2"
                            type="button" role="tab" aria-controls="tab-2" aria-selected="false">자주묻는질문</button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="tab-nav1">
                        <?php echo latest('theme/basic_tabs', 'notice', 5, 40);?>
                    </div>
              
                    <div class="tab-pane active show fade" id="tab-3" role="tabpanel" aria-labelledby="tab-nav3">
                        <?php echo latest('theme/basic_tabs', 'knca_press', 5, 40);?>
                    </div>
              
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-nav2">
                        <?php echo latest('theme/faq', 'knca_guide', 5, 40);?>
                    </div>
                </div>

            </div><!-- ./End tabs -->

            <!-- 1.tab -->
            <div class="tabs-container mt50 border-b2">
                <!-------------------------- tabs -------------------------->
                <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-nav4" data-bs-toggle="tab" data-bs-target="#tab-4"
                            type="button" role="tab" aria-controls="tab-4" aria-selected="false">NFT정보</button>
                    </li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane fade  active show" id="tab-4" role="tabpanel" aria-labelledby="tab-nav4">
                        <?php echo latest('theme/basic_tabs', 'nft_news', 8, 40);?>
                    </div>
                </div>
            </div><!-- ./End tabs -->
            
     </div> <!-- col  end -->

</div>

</section>

                 
<section class="mainContents mt50">

      <div class="line-5-red mb10"></div>
            <h2 class="title-20 mb20">등기물건 목록 <a href="https://kornft.org/300" class="ml30 fs-12 rounded" > 더보기 <i class="fa fa-plus-circle" aria-hidden="true"></i></a></h2>
      <?php
     // 사용방법 : latest('theme/webzine', '게시판아이디', 출력라인, 글자수);
      echo latest('theme/basic_list', '300',10, 24);
     ?>
 </section>




<section class="mainContents cont_text">

    <ul class="figure_list">
        <li> <a href="<?=G5_URL?>/300/write?wr_12=1">
      
            <i class="fa fa-desktop"></i> </a>
            <strong>일반등기</strong>
            <span>기록보존용,위변조방지.증명서발급가능</span>
            </a>
        </li>
        <li><a href="<?=G5_URL?>/300/write?wr_12=2">
            <i class="fa fa-code"></i>
            <strong>확인등기</strong>
            <span>일반등기+신뢰강화(서류확인,등기자 서명..)</span>
            </a>
        </li>
        <li><a href="<?=G5_URL?>/300/write?wr_12=3">
            <i class="fa fa-shopping-cart"></i>
            <strong>검증등기</strong>
            <span>확인등기+실사검증 및 전문가을 통한 신뢰강화</span>
            </a>
        </li>
        <li> <a href="<?=G5_URL?>/pages/certiDoc.php">
            <i class="fa fa-android"></i>
            <strong>증명서출력</strong>
            <span>등록증명서, 등기부등본(거래내역,자산이력..)</span>
            </a>
        </li>
    </ul>
</section>

<hr>


<!-- 하단 롤링 로고 영역///////// -->
<section class="mainContents">
    <div class="bottomLogoRollWr">
        <div class="owl-carousel bottomLogoRoll">
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/01.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/02.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/03.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/04.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/05.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/06.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/07.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/08.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/09.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/10.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/11.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/12.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/13.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/14.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/15.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/16.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/17.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/18.png" alt="하단롤링로고"></a></div>
            <div><a href="#"><img src="https://kornft.org/theme/knca/img/knca/19.png" alt="하단롤링로고"></a></div>
        
        </div>
    </div>
    <script
        src="http://sir.pinkblossom.websiting.kr/theme/pinkblossom/plugin/owlcarousel/owl.carousel.min.js?v2"></script>
    <script>
        $('.bottomLogoRoll').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                980: {
                    items: 5
                },
                1200: {
                    items: 6
                }
            }
        })
    </script>
    <!-- /////////하단 롤링 로고 영역 -->
</section>


<hr>




<?php
if(defined('_INDEX_')) { /* index에서만 실행 */
	include G5_BBS_PATH.'/newwin.inc.php'; /* 팝업레이어 */
}
?>

<?php
include_once(G5_THEME_PATH.'/tail.php');