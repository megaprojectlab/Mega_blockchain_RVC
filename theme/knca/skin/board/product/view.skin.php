<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/board.common.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/plugin/bxslider/jquery.bxslider.min.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->

<article id="bo_v" style="width:<?php echo $width; ?>">

	<?php if ($copy_href) { ?>
	<section id="bo_v_info" style="border:3px dashed #ddd;background:#efefef;">
		<h2>페이지 정보</h2>
		<strong>조회수 등록일은 관리자만 확인 가능합니다.</strong><br>
		<span class="sound_only">작성자</span> <strong><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></strong>
		<span class="sound_only">조회</span><strong><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view['wr_hit']) ?>회</strong>
		<strong class="if_date"><span class="sound_only">작성일</span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong> 
		<br><br>
        <?php if ($update_href) { ?><a href="<?php echo $update_href ?>" class="btn_b01 btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 수정</a><?php } ?>
        <?php if ($delete_href) { ?><a href="<?php echo $delete_href ?>" class="btn_b01 btn" onclick="del(this.href); return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> 삭제</a><?php } ?>
	</section>
	<?php } ?>
	<div class="prodWrap">
		<div class="prod02">

			<h2 id="bo_v_title">
				<?php if ($category_name) { ?>
				<div class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 ?></div> 
				<?php } ?>
				<div><?php echo cut_str(get_text($view['wr_subject']), 70); ?></div> 
			</h2>
			<?php if ($view['wr_1']) { ?><div class="sbjB1"><?php echo $view['wr_1']?></div><?php } ?>
			<ul>
				<?php if ($view['wr_2']) { ?><li><?php echo $view['wr_2']?></li><?php } ?>
			</ul>

		</div>
		<div class="prod01">
		<?php if (isset($view['file'][1]['file']) && $view['file'][1]['file']) {?>
		<?php
		// 파일 출력
		$v_img_count = count($view['file']);
		if($v_img_count) {
			echo "<ul id='bigphoto'>\n";

			for ($i=0; $i<=count($view['file']); $i++) {
				$image[$i] = G5_URL."/data/file/$bo_table/".$view['file'][$i]['file'];
				if ($view['file'][$i]['view']) {
				?>
					<li><a><img src="<?php echo $image[$i]?>"  alt="<?php echo $view['wr_subject']; ?>"></a></li>
				<?php
				}
			}

			echo "</ul>\n";
		}
		 ?>

		<?php
		// 파일 출력
		if($v_img_count) {
			echo "<div class='smallphoto'>\n";
			for ($i=0; $i<=count($view['file']); $i++) {
				if (isset($view['file'][$i]['view']) && $view['file'][$i]['view']) {
				?>
					<a data-slide-index="<?php echo $i?>" style="background-image:URL(<?php echo $image[$i]?>);"></a>
				<?php
				}
			}
			echo "</div>\n";
		}
		?>

		<?php } else if (isset($view['file'][0]['file']) && $view['file'][0]['file']) { 
			
			$image[0] = G5_URL."/data/file/$bo_table/".$view['file'][0]['file'];
			?>
			<ul class="bigphoto">
				<li><a><img src="<?=$image[0]?>"  alt="<?php echo $view['wr_subject']; ?>"></a></li>
			</ul>
		<?php } else {?>
			<ul class="bigphoto">
				<li><a class="bigphotoNoimg"><img src="<?php echo G5_THEME_URL ?>/plugin/websiting/imageSpacer.php?w=100&h=100" alt="이미지 없음"><b>no image</b></a></li>
			</ul>
		<?php } ?>

		
		<script src="<?php echo G5_THEME_URL ?>/plugin/bxslider/jquery.bxslider.min.js"></script>
		<script>
			$('#bigphoto').bxSlider({
				useCSS: false,
				adaptiveHeight: true,
				pagerCustom: '.smallphoto',
				auto: false
			});
		</script>

		</div>
	</div>


    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>

		<?php 
		// 유투브 링크 시작
		// 유투브 공유 링크가 있을때만 표시됩니다
		// ex. https://youtu.be//게시글아이디
		if(isset($view['link'][1]) && $view['link'][1]) { 
 
			$cnt = 0;
			for ($i=1; $i<=count($view['link']); $i++) {
				if ($view['link'][$i]) {
					$youtubeID[$i] = $view['link'][$i]; 
					$youtubeID[$i] = explode('/',$youtubeID[$i]); 
					if($youtubeID[$i][2] == "youtu.be") {
				?>
				<div class="youtube_area"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $youtubeID[$i][3]; ?>" frameborder="0" allowfullscreen></iframe></div>
				<?php
					}
				}
			}
		} 
		//유투브 링크 끝
		?>


        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>


    </section>

    <div id="bo_v_share">
        <!--  추천 비추천 시작 { -->
        <?php if ( $good_href || $nogood_href) { ?>
            <?php if ($good_href) { ?>
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="btn btn_b01" title="추천"><i class="fa fa-thumbs-up"></i> <span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
            <?php } ?>
            <?php if ($nogood_href) { ?>
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="btn btn_b01" title="비추천"><i class="fa fa-thumbs-down"></i> <span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
            <?php } ?>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
            <?php if($board['bo_use_good']) { ?><a class="btn btn_b01" title="추천"><i class="fa fa-thumbs-up"></i> <span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><a class="btn btn_b01" title="비추천"><i class="fa fa-thumbs-down"></i> <span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a><?php } ?>
        <?php
            }
        }
        ?>
        <!-- }  추천 비추천 끝 -->

        <?php if ($scrap_href) { ?><a href="<?php echo $scrap_href;  ?>" target="_blank" class="btn btn_b03" onclick="win_scrap(this.href); return false;"><i class="fa fa-thumb-tack" aria-hidden="true"></i> 스크랩</a><?php } ?>

        <?php
        include_once(G5_SNS_PATH."/view.sns.skin.php");
        ?>
    </div>

    <?php
    $cnt = 0;
    if ($view['file']['count']) {
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                $cnt++;
        }
    }
     ?>

    <?php if($cnt) { ?>
    <!-- 첨부파일 시작 { -->
    <section id="bo_v_file">
        <h2>첨부파일</h2>
        <ul>
        <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
         ?>
            <li>
                <i class="fa fa-download" aria-hidden="true"></i>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong>
                </a>
                <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 첨부파일 끝 -->
    <?php } ?>

    <?php if(isset($view['link'][1]) && $view['link'][1]) { ?>
    <!-- 관련링크 시작 { -->
    <section id="bo_v_link">
        <h2>관련링크</h2>
        <ul>
        <?php
        // 링크
        $cnt = 0;
        for ($i=1; $i<=count($view['link']); $i++) {
            if ($view['link'][$i]) {
                $cnt++;
                $link = cut_str($view['link'][$i], 70);
            ?>
            <li>
                <a href="<?php echo $view['link_href'][$i] ?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i> 
                    
                    <strong><?php echo $link ?></strong>
                </a>
                <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
            </li>
            <?php
            }
        }
        ?>
        </ul>
    </section>
    <!-- } 관련링크 끝 -->
    <?php } ?>

    <!-- 게시물 상단 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
        ?>

        <ul class="bo_v_left">
            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01 btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 수정</a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01 btn" onclick="del(this.href); return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> 삭제</a></li><?php } ?>
            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;"><i class="fa fa-files-o" aria-hidden="true"></i> 복사</a></li><?php } ?>
            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;"><i class="fa fa-arrows" aria-hidden="true"></i> 이동</a></li><?php } ?>
            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn_b01 btn"><i class="fa fa-search" aria-hidden="true"></i> 검색 목록</a></li><?php } ?>
        </ul>

        <ul class="bo_v_com">
           <li><a href="<?php echo $list_href ?>" class="btn_b01 btn"><i class="fa fa-list" aria-hidden="true"></i> 목록</a></li>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } ?>
        </ul>

        <?php if ($prev_href || $next_href) { ?>
        <ul class="bo_v_nb">
            <?php if ($prev_href) { ?><li class="btn_prev transOJ"><a href="<?php echo $prev_href ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="sound_only"> 이전글</span> <b><?php echo $prev_wr_subject;?> </b></a> </li><?php } ?>
            <?php if ($next_href) { ?><li class="btn_next transOJ"> <a href="<?php echo $next_href ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i> <span class="sound_only">다음글 </span> <b><?php echo $next_wr_subject;?> </b></a> </li><?php } ?>
        </ul>
        <?php } ?>
        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
         ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->

</article>
<!-- } 게시판 읽기 끝 -->

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->