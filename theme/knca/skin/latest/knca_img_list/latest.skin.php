<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
$thumb_width =100;
$thumb_height =100;
?>

<div class="border-1"></div>
<div class="webzLat">
    <!-- <h2 class="webzLatTit"><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?> <u class="themeBgColor"></u></a></h2> -->
    <ul>
    <?php for ($i=0; $i<count($list); $i++) { 
		$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);
		$youtubeID = $list[$i]['wr_link1']; 
		$youtubeID = explode('/',$youtubeID);

		$add_style_c = "";
		if(trim($thumb['src']) == ''){
			$img_check =  sql_fetch_all("select * from g5_board_file where wr_id=".$list[$i]['wr_id']." limit 1");
			$add_style_c = 'style="width: 100px; height: 100px;"';
	
			if(isset($img_check[0])){
				$thumb['src'] = "https://kornft.org/data/file/".$img_check[0]['bo_table']."/".$img_check[0]['bf_file'];			
			}
		}

		if(isset($thumb['src']) && $thumb['src']) {
			$img = $thumb['src'];
			$thumb['alt'] = $list[$i]['subject'];
			$add_style_c = 'style="width: 100px; height: 100px;"';
			$img_content = '<i class="webzLatThumb mt10"><img src="'.$img.'" alt="'.$thumb['alt'].'" '.$add_style_c.' ></i>';

			if ( @preg_match("/.mp4/i", $img)) {
				$img_content = '<i class="webzLatThumb mt10"><video muted autoplay loop playsinline width="100px" height="100px"  autoplay="true" controls loop><source src="'.$img.'" type="video/mp4"></video></i>';
            }
		} else {
			if(isset($youtubeID[2]) && $youtubeID[2] == "youtu.be") {
				$img_content = '<i class="webzLatThumb" style="background-image:URL(//img.youtube.com/vi/'.$youtubeID[3].'/sddefault.jpg);"><img src="'.G5_THEME_URL.'/plugin/websiting/imageSpacer.php?w='.$thumb_width.'&h='.$thumb_height.'" class="youtubeImbBlank" alt=""></i>';
			} else {
				$img_content = "<!-- 이미지 없음 -->";
			}
		}
	?>
        <li class="">     
            <a href="<?php echo $list[$i]['href']?>" class="">
            
            <? if($list[$i]['wr_12'] === "검증등기") {$bg="bg-red2 text-white";}
                    elseif($list[$i]['wr_12'] === "확인등기") {$bg="bg-blue2 text-white";}
                        else{$bg="bg-gray text-white";}
                   echo "<span class='btn btn-10 mr5 mt0"." ".$bg."'>".$list[$i]['wr_12']."</span>"; ?>


				<?php echo $img_content; ?>

            <div class="content0 mb5">
                <?php
				echo "<b>";
				if ($list[$i]['ca_name']) echo "<span class='bo_cate_link'>[ ".$list[$i]['ca_name']." ]</span> ";
				if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";
				if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span> ";
				if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span> ";
                ?>

             
                <?php
                //카테고리
				echo "<span class='mr10 content1'>".$list[$i]['wr_14']."</span>"; ?>
                <?php
				if ($list[$i]['comment_cnt'])  
                echo "<span class=\"lt_cmt\">+ ".$list[$i]['comment_cnt']."</span>";
				echo "</b>";
				?>
            </div>


            <div class="content2 fw-800 text-dark mb5">
                <?php  //제목
                echo $list[$i]['subject'] ?>
            </div>

            <div class="content3"><?php //내용
            echo cut_str(strip_tags($list[$i]['wr_content']),100," . . . ") ?>
            </div>             
            </a>

 
        </li>
        
        <div class="content4 mb20 border-b1 pb10">
                <span class="mr5 word-short w200 mt10 mb0"> HASH: <?php echo $list[$i]['wr_45']?></span><br>
                <span class="mr5 mt0">| 등기권자:</span> <span class="mr10"><?php echo $list[$i]['wr_20']?></span> 
                <span class="mr5"> | 등기일:</span> <span><?php echo substr($list[$i]['wr_44'],0,10)?> </span>

                
                <div class="mt10 md-none"></div> 

                <a href="/pages/bon0/certi_new.php?wr_id=<?=$list[$i]['wr_id'] ?>">  <span class="btn10 bg-gray1 outline">등록증명서 열람  </a> </span>

                <span class="ml5"> 
                <a href="/pages/bon1/certi_history.php?wr_id=<?=$list[$i]['wr_id'] ?>" > <span class="btn10 bg-gray1 outline"> 등기부등본 열람</span> </a>
            
                </span>

			</div>


    <?php 
	} 
    if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li"><i class="fa fa-exclamation-triangle"></i> 게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    <!-- <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more themeBgColor"><?php echo $bo_subject ?> 더보기 <i class="fa fa-plus-circle" aria-hidden="true"></i></a> -->
</div>
