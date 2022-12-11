<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');//썸네일 라이브러리

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/board.common.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$search_skin_url.'/style.css?v2">', 0);
?>



<!--Search box -->
<section class="mainContents mt30 flex-center">

    <div class="hd_sch_wr w-90">
        <fieldset id="hd_sch">
            <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php"
                onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="ca_name||wr_subject||wr_content">
                <input type="hidden" name="sop" value="or">

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



<div id="sch_result">

    <?php
    if ($stx) {
        if ($board_count) {
    ?>
    <section id="sch_res_ov">
        <h2 class="fs-30"><i class="fa fa-file-o" aria-hidden="true"></i> <strong><?php echo $stx ?></strong> 검색결과</h2>
        <p class="fs-14 mb30">Total : <strong class="sch_word"><?php echo number_format($total_count) ?>개</strong> : <?php echo number_format($page) ?>/<?php echo number_format($total_page) ?> 페이지 열람 중</p>
    </section>
    <?php
        }
    }
    ?>

    <?php
    if ($stx) {
        if ($board_count) {
     ?>
    <ul id="sch_res_board">
        <li class="fw-900"><a href="?<?php echo $search_query ?>&amp;gr_id=<?php echo $gr_id ?>" <?php echo $sch_all ?>>전체</a></li>
        <?php echo $str_board_list; ?>
    </ul>
    <?php
        } else {
     ?>
    <p class="noDataArea"><b>No data</b><?php if ($stx){ ?><strong><?php echo $stx ?></strong>(으)로 검색된<?php } else { echo '등록된';}?> 자료가 없습니다.</p>
    <?php } }  ?>

    <hr>

    <?php if ($stx && $board_count) { ?><section class="sch_res_list"><?php }  ?>
    <?php
    $k=0;
    for ($idx=$table_index, $k=0; $idx<count($search_table) && $k<$rows; $idx++) {
     ?>
        <h2 class="h2_tl fw-800"> <a href="<?php echo get_pretty_url($search_table[$idx], '', $search_query); ?>"><?php echo $bo_subject[$idx] ?></a></h2>
        <ul>
        <?php
        for ($i=0; $i<count($list[$idx]) && $k<$rows; $i++, $k++) {
            if ($list[$idx][$i]['wr_is_comment'])
            {
                $comment_def = '<span class="cmt_def"><i class="fa fa-commenting-o" aria-hidden="true"></i><span class="sound_only">댓글</span></span> ';
                $comment_href = '#c_'.$list[$idx][$i]['wr_id'];
            }
            else
            {
                $comment_def = '';
                $comment_href = '';
            }
			//썸네일 이미지 생성
			$thumb_info = get_list_thumbnail($search_table[$idx], $list[$idx][$i]['wr_id'],50,50, false, true);
			$sch_thumb = $thumb_info['src'];
         ?>

            <li>
				<?php if($sch_thumb){?> <i class="sch_res_cont_thum"><a href="<?php echo $list[$idx][$i]['href'] ?><?php echo $comment_href ?>"><img src="<?php echo $sch_thumb ?>" alt=""></a></i><?php }  ?> 
                <a href="<?php echo $list[$idx][$i]['href'] ?><?php echo $comment_href ?>" class="sch_res_title"><?php echo $comment_def ?><?php echo $list[$idx][$i]['subject'] ?></a>
                <p class="schResultCont">
					<?php echo cut_str(strip_tags(str_replace('|**|' , ' ', $list[$idx][$i]['content'])),150," . . . ") ?>
				</p>
         
                <? if($search_table[$idx]=="300"){ ?>
                <div class="sch_info">
                <div class="mt10 md-none"></div> 
                    <a href="/pages/bon0/certi_new.php?wr_id=<?=$list[$idx][$i]['wr_id'] ?>">  
                    <span class="btn10 bg-gray1 outline">등록증명서 열람  </a> </span>
                    <span class="ml5"> 
                    <a href="/pages/bon1/certi_history.php?wr_id=<?=$list[$idx][$i]['wr_id'] ?>" > 
                    <span class="btn10 bg-gray1 outline"> 등기부등본 열람</span> </a>

                    </span>

                    <?php echo $list[$idx][$i]['name'] ?> / 
                    <span class="sch_datetime"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $list[$idx][$i]['wr_datetime'] ?></span>

                </div>

                <?}?>

            </li>
        <?php }  ?>
        </ul>
        <div class="sch_more"><a href="<?php echo get_pretty_url($search_table[$idx], '', $search_query); ?>"><strong><i class="fa fa-plus-circle" aria-hidden="true"></i> <?php echo $bo_subject[$idx] ?></strong> 결과 더보기</a></div>

        <hr>
    <?php }  ?>
    <?php if ($stx && $board_count) {  ?></section><?php }  ?>

    <?php echo $write_pages ?>

</div>
<!-- } 전체검색 끝 -->