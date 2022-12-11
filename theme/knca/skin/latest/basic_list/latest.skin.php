<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css?v8">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="">
   <? /*제목노출 
     <h2 class="basicLatTit fw-900"><a href="<?php echo get_pretty_url($bo_table); ?>"> 
     <?php  echo $bo_subject ?> <u class="themeBgColor"></u></a></h2> */?>

    <div class="table-list-eb">
    <div class="table-responsive">
        <table class="table fs-12 border-b2">
            <thead>
                <tr class="text-left">
                    <th>등기종류</th>
                    <th class="text-left">등기번호</th>
                    <th class="text-left">등기제목</th>
                    <th class="text-left" style="width:100px!important;">등기해쉬값 </th>
                   <?// <th class="text-left" style="width:100px!important;">스마트컨트렉트</th> ?>
                    <th>등기범위</th>
                    <th>등기권자</th>
                    <th>카테고리</th>
                    <th>등기일</th>
                    <th>등록증명서</th>
                    <th>등기부등본</th>
                </tr>
            </thead>
            <tbody>
       
            <?php for ($i=0; $i<count($list); $i++) { ?>
                <tr>
             
                <? if($list[$i]['wr_12'] === "검증등기") {$bg="bg-red2 text-white";}
                    elseif($list[$i]['wr_12'] === "확인등기") {$bg="bg-blue2 text-white";}
                        else{$bg="bg-gray text-white";}
                   echo "<td> <span class='btn btn-12 mr5 mt0"." ".$bg."'>".$list[$i]['wr_12']."</span></td>"; ?>

                    <td class="list1"><a href="<?=$list[$i]['href']?>"><?=substr($list[$i]['wr_11'],-10)?></a></td>
                    <td class="text-left"><a href="<?=$list[$i]['href']?>"><?=$list[$i]['subject']?></a></td>
                    <td class="text-left"><span class="hash-tag w200"> <a href="https://bscscan.com/address/<?=$list[$i]['wr_45']?>" target='blank'><?=$list[$i]['wr_45']?></a></span></td>
                  <?/*
                    <td class="text-left"><span class="hash-tag w200"> <a href="https://bscscan.com/address/<?=$list[$i]['wr_41']?>"><?=$list[$i]['wr_41']?></a></span></td> */?>
                    <td class="text-center" >#<?=$list[$i]['wr_49']?> / <?=$list[$i]['wr_48']?></td>
                    <td class="fs-12 text-center" ><?=$list[$i]['wr_20']?></td>
                    <td class="fs-12 text-left" ><?=$list[$i]['wr_14']?></td>
                    <td class="fs-10"> <?=substr($list[$i]['wr_44'],0,10) ?> <br> <?=substr($list[$i]['wr_44'],-5) ?></td>                  
                    
                    <td class="fs-12 text-left" >  <a href="/pages/bon0/certi_new.php?wr_id=<?=$list[$i]['wr_id'] ?>">  <span class="btn10 bg-gray1 outline">등록증명서 열람  </a> </span></td>
                    <td class="fs-12 text-left" > <a href="/pages/bon1/certi_history.php?wr_id=<?=$list[$i]['wr_id'] ?>" > <span class="btn10 bg-gray1 outline"> 등기부등본 열람</span> </a></td>
                    
                </tr>


                <?php 
	} 
	if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li"><i class="fa fa-exclamation-triangle"></i> 게시물이 없습니다.</li>
    <?php }  ?>
              
            </tbody>
        </table>
    </div>
</div>

    </ul>
  <? /*  <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more themeBgColor "><?php echo $bo_subject ?> 더보기 <i class="fa fa-plus-circle" aria-hidden="true"></i></a> */ ?>
</div>