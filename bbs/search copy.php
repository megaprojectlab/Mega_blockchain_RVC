<?php
include_once('./_common.php');

$g5['title'] = '전체검색 결과';
include_once('./_head.php');

$search_table = Array();
$table_index = 0;
$write_pages = "";
$text_stx = "";
$srows = 0;

$stx = strip_tags($stx);
//$stx = preg_replace('/[[:punct:]]/u', '', $stx); // 특수문자 제거
$stx = get_search_string($stx); // 특수문자 제거
if ($stx) {
    $stx = preg_replace('/\//', '\/', trim($stx));
    $sop = strtolower($sop);
    if (!$sop || !($sop == 'and' || $sop == 'or')) $sop = 'and'; // 연산자 and , or
    $srows = isset($_GET['srows']) ? (int)preg_replace('#[^0-9]#', '', $_GET['srows']) : 10;
    if (!$srows) $srows = 10; // 한페이지에 출력하는 검색 행수

    $g5_search['tables'] = Array();
    $g5_search['read_level'] = Array();
    $sql = " select gr_id, bo_table, bo_read_level from {$g5['board_table']} where bo_use_search = 1 and bo_list_level <= '{$member['mb_level']}' ";
    if ($gr_id)
        $sql .= " and gr_id = '{$gr_id}' ";
    $onetable = isset($onetable) ? $onetable : "";
    if ($onetable) // 하나의 게시판만 검색한다면
        $sql .= " and bo_table = '{$onetable}' ";
    $sql .= " order by bo_order, gr_id, bo_table ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++)
    {
        if ($is_admin != 'super')
        {
            // 그룹접근 사용에 대한 검색 차단
            $sql2 = " select gr_use_access, gr_admin from {$g5['group_table']} where gr_id = '{$row['gr_id']}' ";
            $row2 = sql_fetch($sql2);
            // 그룹접근을 사용한다면
            if ($row2['gr_use_access']) {
                // 그룹관리자가 있으며 현재 회원이 그룹관리자라면 통과
                if ($row2['gr_admin'] && $row2['gr_admin'] == $member['mb_id']) {
                    ;
                } else {
                    $sql3 = " select count(*) as cnt from {$g5['group_member_table']} where gr_id = '{$row['gr_id']}' and mb_id = '{$member['mb_id']}' and mb_id <> '' ";
                    $row3 = sql_fetch($sql3);
                    if (!$row3['cnt'])
                        continue;
                }
            }
        }
        $g5_search['tables'][] = $row['bo_table'];
        $g5_search['read_level'][] = $row['bo_read_level'];
    }

    $op1 = '';

    // 검색어를 구분자로 나눈다. 여기서는 공백
    $s = explode(' ', strip_tags($stx));
    
    if( count($s) > 1 ){
        $s = array_slice($s, 0, 2);
        $stx = implode(' ', $s);
    }

    $text_stx = get_text(stripslashes($stx));
    
    $search_query = 'sfl='.urlencode($sfl).'&amp;stx='.urlencode($stx).'&amp;sop='.$sop;

    // 검색필드를 구분자로 나눈다. 여기서는 +
    $field = explode('||', trim($sfl));

    $str = '(';
    for ($i=0; $i<count($s); $i++) {
        if (trim($s[$i]) == '') continue;

        $search_str = $s[$i];

        // 인기검색어
        insert_popular($field, $search_str);

        $str .= $op1;
        $str .= "(";

        $op2 = '';
        // 필드의 수만큼 다중 필드 검색 가능 (필드1+필드2...)
        for ($k=0; $k<count($field); $k++) {
            $str .= $op2;
            switch ($field[$k]) {
                case 'mb_id' :
                case 'wr_name' :
                    $str .= "$field[$k] = '$s[$i]'";
                    break;
                case 'wr_subject' :
                case 'wr_content' :

                    case 'wr_1' :
                    case 'wr_2' :  
                    case 'wr_3' :
                    case 'wr_4' :    
                    case 'wr_5' :
                    case 'wr_6' :  
                    case 'wr_7' :
                    case 'wr_8' :    
                    case 'wr_9' :
                    case 'wr_10' : 
                    case 'wr_11' :
                    case 'wr_12' :  
                    case 'wr_13' :
                    case 'wr_14' :    
                    case 'wr_15' :
                    case 'wr_16' :  
                    case 'wr_17' :
                    case 'wr_18' :    
                    case 'wr_19' :
                    case 'wr_20' : 
                    case 'wr_21' :
                    case 'wr_22' :  
                    case 'wr_23' :
                    case 'wr_24' :    
                    case 'wr_25' :
                    case 'wr_26' :  
                    case 'wr_27' :
                    case 'wr_28' :    
                    case 'wr_29' :
                    case 'wr_30' : 
                    case 'wr_31' :
                    case 'wr_32' :  
                    case 'wr_33' :
                    case 'wr_34' :    
                    case 'wr_35' :
                    case 'wr_36' :  
                    case 'wr_37' :
                    case 'wr_38' :    
                    case 'wr_39' :
                    case 'wr_40' : 
                    case 'wr_41' :
                    case 'wr_42' :  
                    case 'wr_43' :
                    case 'wr_44' :    
                    case 'wr_45' :
                    case 'wr_46' :  
                    case 'wr_47' :
                    case 'wr_48' :    
                    case 'wr_49' :
                    case 'wr_50' : 
                    case 'wr_51' :
                    case 'wr_52' :  
                    case 'wr_53' :
                    case 'wr_54' :    
                    case 'wr_55' :
                    case 'wr_56' :  
                    case 'wr_57' :
                    case 'wr_58' :    
                    case 'wr_59' :
                    case 'wr_60' : 
                    case 'wr_61' :
                    case 'wr_62' :  
                    case 'wr_63' :
                    case 'wr_64' :    
                    case 'wr_65' :
                    case 'wr_66' :  
                    case 'wr_67' :
                    case 'wr_68' :    
                    case 'wr_69' :
                    case 'wr_70' : 
                    case 'wr_71' :
                    case 'wr_72' :  
                    case 'wr_73' :
                    case 'wr_74' :    
                    case 'wr_75' :
                    case 'wr_76' :  
                    case 'wr_77' :
                    case 'wr_78' :    
                    case 'wr_79' :
                    case 'wr_80' : 
                    case 'wr_81' :
                    case 'wr_82' :  
                    case 'wr_83' :
                    case 'wr_84' :    
                    case 'wr_85' :
                    case 'wr_86' :  
                    case 'wr_87' :
                    case 'wr_88' :    
                    case 'wr_89' :
                    case 'wr_90' : 
                    case 'wr_91' :
                    case 'wr_92' :  
                    case 'wr_93' :
                    case 'wr_94' :    
                    case 'wr_95' :
                    case 'wr_96' :  

                    if (preg_match("/[a-zA-Z]/", $search_str))
                        $str .= "INSTR(LOWER({$field[$k]}), LOWER('{$search_str}'))";
                    else
                        $str .= "INSTR({$field[$k]}, '{$search_str}')";
                    break;
                default :
                    $str .= "1=0"; // 항상 거짓
                    break;
            }
            $op2 = " or ";
        }
        $str .= ")";

        $op1 = " {$sop} ";
    }
    $str .= ")";

    $sql_search = $str;

    $str_board_list = "";
    $board_count = 0;

    $time1 = get_microtime();

    $total_count = 0;
    for ($i=0; $i<count($g5_search['tables']); $i++) {
        $tmp_write_table   = $g5['write_prefix'] . $g5_search['tables'][$i];

        $sql = " select wr_id from {$tmp_write_table} where {$sql_search} ";
        $result = sql_query($sql, false);
        $row['cnt'] = @sql_num_rows($result);

        $total_count += $row['cnt'];
        if ($row['cnt']) {
            $board_count++;
            $search_table[] = $g5_search['tables'][$i];
            $read_level[]   = $g5_search['read_level'][$i];
            $search_table_count[] = $total_count;

            $sql2 = " select bo_subject, bo_mobile_subject from {$g5['board_table']} where bo_table = '{$g5_search['tables'][$i]}' ";
            $row2 = sql_fetch($sql2);
            $sch_class = "";
            $sch_all = "";
            if ($onetable == $g5_search['tables'][$i]) $sch_class = "class=sch_on";
            else $sch_all = "class=sch_on";
            $str_board_list .= '<li><a href="'.$_SERVER['SCRIPT_NAME'].'?'.$search_query.'&amp;gr_id='.$gr_id.'&amp;onetable='.$g5_search['tables'][$i].'" '.$sch_class.'><strong>'.((G5_IS_MOBILE && $row2['bo_mobile_subject']) ? $row2['bo_mobile_subject'] : $row2['bo_subject']).'</strong><span class="cnt_cmt">'.$row['cnt'].'</span></a></li>';
        }
    }

    $rows = $srows;
    $total_page = ceil($total_count / $rows);  // 전체 페이지 계산
    if ($page < 1) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
    $from_record = ($page - 1) * $rows; // 시작 열을 구함

    for ($i=0; $i<count($search_table); $i++) {
        if ($from_record < $search_table_count[$i]) {
            $table_index = $i;
            $from_record = $from_record - ($i > 0 ? $search_table_count[$i-1] : 0);
            break;
        }
    }

    $bo_subject = array();
    $list = array();

    $k=0;
    for ($idx=$table_index; $idx<count($search_table); $idx++) {
        $sql = " select bo_subject, bo_mobile_subject from {$g5['board_table']} where bo_table = '{$search_table[$idx]}' ";
        $row = sql_fetch($sql);
        $bo_subject[$idx] = ((G5_IS_MOBILE && $row['bo_mobile_subject']) ? $row['bo_mobile_subject'] : $row['bo_subject']);

        $tmp_write_table = $g5['write_prefix'] . $search_table[$idx];

        $sql = " select * from {$tmp_write_table} where {$sql_search} order by wr_id desc limit {$from_record}, {$rows} ";
        $result = sql_query($sql);
        for ($i=0; $row=sql_fetch_array($result); $i++) {
            // 검색어까지 링크되면 게시판 부하가 일어남
            $list[$idx][$i] = $row;
            $list[$idx][$i]['href'] = get_pretty_url($search_table[$idx], $row['wr_parent']);

            if ($row['wr_is_comment'])
            {
                $sql2 = " select wr_subject, wr_option from {$tmp_write_table} where wr_id = '{$row['wr_parent']}' ";
                $row2 = sql_fetch($sql2);
                //$row['wr_subject'] = $row2['wr_subject'];
                $row['wr_subject'] = get_text($row2['wr_subject']);
            }

            // 비밀글은 검색 불가
            if (strstr($row['wr_option'].(isset($row2['wr_option']) ? $row2['wr_option'] : ''), 'secret'))
                $row['wr_content'] = '[비밀글 입니다.]';

            $subject = get_text($row['wr_subject']);
            if (strstr($sfl, 'wr_subject'))
                $subject = search_font($stx, $subject);

            if ($read_level[$idx] <= $member['mb_level'])
            {
                //$content = cut_str(get_text(strip_tags($row['wr_content'])), 300, "…");
                $content = strip_tags($row['wr_content']);
                $content = get_text($content, 1);
                $content = strip_tags($content);
                $content = str_replace('&nbsp;', '', $content);
                $content = cut_str($content, 300, "…");

                if (strstr($sfl, 'wr_content'))
                    $content = search_font($stx, $content);
            }
            else
                $content = '';

            $list[$idx][$i]['subject'] = $subject;
            $list[$idx][$i]['content'] = $content;
            $list[$idx][$i]['name'] = get_sideview($row['mb_id'], get_text(cut_str($row['wr_name'], $config['cf_cut_name'])), $row['wr_email'], $row['wr_homepage']);

            $k++;
            if ($k >= $rows)
                break;
        }
        sql_free_result($result);

        if ($k >= $rows)
            break;

        $from_record = 0;
    }

    $write_pages = get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?'.$search_query.'&amp;gr_id='.$gr_id.'&amp;srows='.$srows.'&amp;onetable='.$onetable.'&amp;page=');
}

$group_select = '<label for="gr_id" class="sound_only">게시판 그룹선택</label><select name="gr_id" id="gr_id" class="select"><option value="">전체 분류';
$sql = " select gr_id, gr_subject from {$g5['group_table']} order by gr_id ";
$result = sql_query($sql);
for ($i=0; $row=sql_fetch_array($result); $i++)
    $group_select .= "<option value=\"".$row['gr_id']."\"".get_selected($gr_id, $row['gr_id']).">".$row['gr_subject']."</option>";
$group_select .= '</select>';

if (!$sfl) $sfl = 'wr_subject';
if (!$sop) $sop = 'or';

include_once($search_skin_path.'/search.skin.php');

include_once('./_tail.php');