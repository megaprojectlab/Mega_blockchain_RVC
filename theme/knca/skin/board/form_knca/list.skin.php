<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/board.common.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

for ($i=0; $i<count($list); $i++){
    $file_check =  sql_fetch_all("select * from g5_board_file where wr_id=".$list[$i]['wr_id']." limit 1");
	
    if(isset($file_check[0])){
        $list[$i]['files']['path'] = $file_check[0]['bf_file'];
    }
}

?>



<!-- 헤더에서 별도 설정 시작 ------------------------------>
<div id="page_title" class="sbtImg">
<div class="page_title_in">

    <? 
    if(strpos($_SERVER['REQUEST_URI'], "wr_12")) 
    { $title="등기 열람" ; } 
    else {$title="등기 리스트" ; } ?>

    <h2>
        <strong class=""><?=$title?></strong>
        <span class="titleBbar"></span> </h2>
</div>
</div>

<section id="ctWrap">    
<div id="container">


<!-- 헤더에서 별도설정 끝 1.명칭변경, 2.중간메뉴삭제, 3.글제목을 위로..  ------------------------>



<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">

<? if($_GET['stx']){?>
  <div class="h2_tl mr20"><? echo $_GET['stx'].'</div>'; } ?> <span id="bo_list_total" class="flex-x-start">
            <span class=""><i class="fa fa-file-o"></i> Total <?php echo number_format($total_count) ?> /</span>
            <?php echo $page ?> page </span>
                

    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div id="bo_btn_top"> 
         <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn"><i class="fa fa-rss" aria-hidden="true"></i> RSS</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn"><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</a></li><?php } ?>
            <?php /* if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } */?>
        </ul>
        <?php } ?>
    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->





    <!--Search box -->
<section class="mainContents mt30 flex-center">

    <div class="hd_sch_wr w-90">
        <fieldset id="hd_sch">
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="or">

            <input type="hidden" name="sfl" value="wr_subject||wr_content||wr_1||wr_2||wr_3||wr_4||wr_5||wr_6||wr_7||wr_8||wr_9||wr_10||
            wr_11||wr_12||wr_13||wr_14||wr_15||wr_16||wr_17||wr_18||wr_19||wr_20||
            wr_21||wr_22||wr_23||wr_24||wr_25||wr_26||wr_27||wr_28||wr_29||wr_30||
            wr_31||wr_32||wr_33||wr_34||wr_35||wr_36||wr_37||wr_38||wr_39||wr_40||
            wr_41||wr_42||wr_43||wr_44||wr_45||wr_46||wr_47||wr_48||wr_49||wr_50||
            wr_51||wr_52||wr_53||wr_54||wr_55||wr_56||wr_57||wr_58||wr_59||wr_60||
            wr_61||wr_62||wr_63||wr_64||wr_65||wr_66||wr_67||wr_68||wr_69||
            wr_70||wr_71||wr_72||wr_73||wr_74||wr_75||wr_76||wr_77||wr_78||wr_79||
            wr_80||wr_81||wr_82||wr_83||wr_84||wr_85||wr_86||wr_87||wr_88||wr_89||
            wr_90||wr_91||wr_92||wr_93||wr_94||wr_95||wr_96">

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

        <div class="cont_text_important fs-12 mt10 mb30"> 찾고자 하는 등기물건을 조회후 확인하세요</div>
        </fieldset>
    </div>
</section>



    

    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->

    

    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">


    <h2 class="sound_only"><?php echo $board['bo_subject'] ?> 등기목록</h2>

	<?php if ($is_checkbox) { ?>
	<div>
		<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
		<label for="chkall"><span class="sound_only">현재 페이지 게시물 </span>전체 선택</label><br><br>
	</div>
	<?php } ?>
    <div class="webzineList">
        <ul>
        <?php
        for ($i=0; $i<count($list); $i++) {
         ?>
        <li class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">
            <?php if ($is_checkbox) { ?>
            <div class="td_chk">
                <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
            </div>
            <?php } ?>
			<?php
				$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
				$youtubeID = $list[$i]['wr_link1']; 
				$youtubeID = explode('/',$youtubeID); 

				if(isset($thumb['src']) && $thumb['src']) {
					$img_content = '<a href="'.$list[$i]['href'].'" class="list_img"><img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" ></a>';
				} else {
					if(isset($youtubeID[2]) && $youtubeID[2] == "youtu.be") {
						$img_content = '<a href="'.$list[$i]['href'].'" class="list_img"><i class="youtube_img"><sup style="background-image:URL(//img.youtube.com/vi/'.$youtubeID[3].'/sddefault.jpg);" alt="'.$list[$i]['subject'].'"></sup><sub><i class="imgAr"><img src="'.G5_THEME_URL.'/plugin/websiting/imageSpacer.php?w='.$board['bo_gallery_width'].'&h='.$board['bo_gallery_height'].'" alt="youtube image spacer"></i></sub></i></a>
					';} else {
					$img_content = '<!-- 이미지없음 -->';
					}
                }
                if(@preg_match("/.mp4/i", $list[$i]['files']['path'])){
                    $img_content = '<a href="'.$list[$i]['href'].'" class="list_img"><video muted autoplay loop playsinline controls width="120px" height="120px"  ><source src="'.G5_URL."/data/file/".$bo_table."/".$list[$i]['files']['path'].'" type="video/mp4"></video></a>';
                }

				if (isset($list[$i]['icon_secret']) && !$list[$i]['icon_secret']){
					echo $img_content;
				}
			 ?>

			<?php
			if ($is_category && $list[$i]['ca_name']) {
			 ?>
			<a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
			<?php } ?>
			<a href="<?php echo $list[$i]['href'] ?>" class="bo_tit">
				
				<?php
				if ($list[$i]['is_notice']) // 공지사항
					echo '<strong class="notice_icon"><i class="fa fa-bullhorn" aria-hidden="true"></i><span class="sound_only">공지</span></strong>';
				else if ($wr_id == $list[$i]['wr_id'])
					echo '<span class="sound_only">열람중</span>';
				else
					echo '<span class="sound_only">'.$list[$i]['num'].'</span>';
				?>
			


            <?
            if($list[$i]['wr_12'] === "검증등기") {$bg="bg-red2 text-white";}
                    elseif($list[$i]['wr_12'] === "확인등기") {$bg="bg-blue2 text-white";}
                        else{$bg="bg-gray text-white";}
                echo "<span class='btn btn-12"." ".$bg."'>".$list[$i]['wr_12']."</span>"; ?>
                
				<strong><?php echo $list[$i]['subject'] ?></strong>

                <?php
					if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
				 ?>

				<?php
				if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
				if (isset($list[$i]['icon_link'])) echo rtrim($list[$i]['icon_link']);
				if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span> ";
				if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span> ";
				if (isset($youtubeID[2]) && $youtubeID[2] == "youtu.be")  echo "<i class=\"fa fa-youtube-play fts13px\"><span class=\"sound_only\">유투브영상</span></i> ";
				?>
				<?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">댓글</span><span class="cnt_cmt">+ <?php echo $list[$i]['wr_comment']; ?></span><span class="sound_only">개</span><?php } ?>
				
				<em>
					<?php 
					if (isset($list[$i]['icon_secret']) && $list[$i]['icon_secret']){
						echo '비밀글입니다. 로그인 또는 비밀번호 입력 후 확인 가능 합니다.';
					} else {
						echo cut_str(strip_tags($list[$i]['wr_content']),160," . . . ");
					}
					?>
				</em>
			</a>
			
			<div style="font-size:10px;">
                <span class="hash-tag w300 mt10 mb5"><span class="btn-10 outline bg-gray1 fw-700">블록체인 HASH | </span> <b><?php echo $list[$i]['wr_45'] ?></b></span><br>

                <span class="mr5">
                <span class="btn-10 outline">블록체인 TokenID</span><span class="ml5"><?php echo $list[$i]['wr_40'] ?></span></span>

				<span class="mr5">
                <span class="btn-10 outline">등기권자</span><span class="ml5"><?php echo $list[$i]['name'] ?></span> </span>

                <span class="mr5"> <span class="btn-10 outline">등기일</span><span><?php echo date("y-m-d",strtotime($list[$i]['wr_44'])) ?></span></span>
                

                <div class="mt10 md-none"></div> <span class="btn10 bg-gray1 outline"> <a href="/pages/bon0/certi_new.php?wr_id=<?=$list[$i]['wr_id'] ?>"  > 등록증명서 열람 </a> </span>
                
                <span class="ml5"> 
                <span class="btn10 bg-gray1 outline"> <a href="/pages/bon1/certi_history.php?wr_id=<?=$list[$i]['wr_id'] ?>" > 등기부등본 열람 </a> </span>
                </span>

			</div>

        </li>
        <?php } ?>
        </ul>
        <?php if (count($list) == 0) {?><p class="noDataArea"><b>No data</b> <?php if ($stx){ ?><strong><?php echo $stx ?></strong>로 검색된<?php } else { echo '등록된';}?> 자료가 없습니다.</p><?php } ?>
    </div>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($is_checkbox) { ?>
            <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn_admin"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button></li>
            <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn btn_admin"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button></li>
            <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn btn_admin"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button></li>
            <?php } ?>
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01 btn"><i class="fa fa-list" aria-hidden="true"></i> 목록</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>

    </form>
     

</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>



<!-- 페이지 -->
<?php echo $write_pages;  ?>


<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
