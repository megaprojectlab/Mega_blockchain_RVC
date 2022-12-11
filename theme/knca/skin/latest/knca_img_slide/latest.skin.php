<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/plugin/owlcarousel/owl.carousel.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;

$sql = " select * from {$g5['board_table']} where bo_table = '{$bo_table}' ";
$result = sql_query($sql);
$row=sql_fetch_array($result);

if ($row['bo_gallery_width'] == 0){
	$thumb_width = $row['bo_gallery_height'];
} else {
	$thumb_width = $row['bo_gallery_width'];
}
if ($row['bo_gallery_height'] == 0){
	$thumb_height = $row['bo_gallery_width'];
} else {
	$thumb_height = $row['bo_gallery_height'];
}
?>
<div class="border-1"></div>

<div class="prodLatWR">
	<div class="prodLat mp-0">
		<div class="prodLatREL owl-carousel prodLat_<?php echo $bo_table ?>">
		<?php
		for ($i=0; $i<count($list); $i++) {
		if($list[$i]['wr_18'] != 1){continue;}
		if($list[$i]['wr_id'] == 175..소리커서꺼야함){continue;}
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
			$noImage = '';
			$youtube_content = '';
		} else {
			if(isset($youtubeID[2]) && $youtubeID[2] == "youtu.be") {
				$youtube_content = '<sup class="youtube_img" style="background-image:URL(//img.youtube.com/vi/'.$youtubeID[3].'/sddefault.jpg); background-size:cover;"></sup>
			';
			} 
			$img = G5_THEME_URL.'/plugin/websiting/imageSpacer.php?w='.$row['bo_gallery_width'].'&h='.$row['bo_gallery_height'];
			$thumb['alt'] = 'No image';
			$noImage = '<u>No image</u>';
		}
		$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
		?>
			<div class="prodLatRELcon">
				<a href="<?php echo $list[$i]['href'] ?>">
					<i><?php echo $img_content; ?><?php echo $noImage; ?><?php echo $youtube_content; ?></i>
					<?php
					echo "<em>";
					if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";
					if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span> ";
					if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span> ";
					if (isset($youtubeID[2]) == "youtu.be")  echo "<i class=\"fa fa-youtube-play fts13px\"><span class=\"sound_only\">유투브영상</span></i> ";
					echo "</em>";
					if ($list[$i]['ca_name']) echo "<span class='bo_cate_link'>".$list[$i]['ca_name']."</span> ";
				//	echo "<b>";
				//	echo $list[$i]['subject']."</b>";
					?>
				</a>
  

<!-- 제목 -->
<h3 class="bo1 text-left fw-800"><span><a href="<?php echo $list[$i]['href'] ?>" class="lt_img">
<?php echo cut_str(strip_tags($list[$i]['subject']),'19','...')?></a></span></h4>

    <div class="slidestyle">
        <!-- 등기권자 -->
        <div class="ml10 mr10 text-left flex-y-center">*Hash : <span class="word-short w-60"><?php echo $list[$i]['wr_45']?></span></div>
        <div class="ml10 mr10 text-left ">*등기권자 : <span><?php echo $list[$i]['wr_20']?></span></div>
        <div class="ml10 mr10 text-left">*등기일 : <span><?php echo substr($list[$i]['wr_44'],0,10)?> </span></div>
       <div class="m10 border-t1 width-50"></div>
       
       <div class="text-left"> <a href="<?php echo $list[$i]['href'] ?>">
        <? if($list[$i]['wr_12'] === "검증등기") {$bg="bg-red2 text-white";}
                    elseif($list[$i]['wr_12'] === "확인등기") {$bg="bg-blue2 text-white";}
                        else{$bg="bg-gray text-white";}
                echo "<span class='btn btn-12"." ".$bg."'>".$list[$i]['wr_12']."</span>"; ?>
            
        </a>  </div>

        <!-- 내용 -->
        <div class="m10 mb0 text-left sldecontent">
        <?php echo cut_str(strip_tags($list[$i]['wr_content']),'55','...') ?>
        </div> 


    </div>

</div>  


		<?php 
		}  
		if (count($list) == 0) { //게시물이 없을 때  ?>
			<p class="empty_li"><i class="fa fa-exclamation-triangle"></i> 등기된 NFT가 없습니다.</p>
		<?php }  ?>
		</div>
		<!-- <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more "> 더보기 <i class="fa fa-plus-circle" aria-hidden="true"></i></a> -->

	</div>
</div>
<script src="<?php echo G5_THEME_URL ?>/plugin/owlcarousel/owl.carousel.min.js?v2"></script>
<script>
$('.prodLat_<?php echo $bo_table ?>').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsiveClass:true,
	autoplay:true,
	autoplayTimeout:4000,
	autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        980:{
            items:4
        },
        1200:{
            items:4
        }
    }
})
</script>