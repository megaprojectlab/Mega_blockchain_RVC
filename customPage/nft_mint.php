<?php
//exit;
    $para = $_GET;
    print_r($para);
    echo "<br>";

    $config = array(
        "server"=>"bsc_main",
        "contract"=>"0xB4B3a20486AA2B79c8346A4b687708Ff27eA189E",
        "gas"=>"0xA9817C8001",
        "func"=>"addArti",
        "to"=>"0x900d9123403e76C335492F584d06481dfBF78549",
        "title"=>"kncaItem"
    );
    
    $contract = $config['contract'];

    echo "<a href='https://bscscan.com/address/{$contract}' target='_blank'>https://bscscan.com/address/{$contract}</a>";
    echo "<br>";

    if( !isset($para['n']) ){
        exit;
    }

    if( isset($para['to']) ){
        $config['to'] = $para['to'];
    }

    if( isset($para['title']) ){
        $config['title'] = $para['title'];
    }

    $json = file_get_contents("https://artixnft.com/proc/contractApi.html?a={$config['server']}&b={$config['contract']}&c={$config['gas']}&d={$config['func']}&e={$config['to']}&f={$config['title']}");
    $obj = json_decode($json, true);
    print_r($obj);
    echo "<br>";

    $conn= mysqli_connect("localhost","yconpayc_croe","lidya2016$","yconpayc_knca");
    mysqli_set_charset($conn, 'utf8');
    
    $cretime = date("Y-m-d H:i:s", time());

    $sql = "update g5_write_300 set wr_40='".$obj['result'][1]."', wr_41='".$contract."', wr_44='".$cretime."', wr_45='".$obj['result'][0]."' where wr_id='".$para['n']."'  ";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
// https://kornft.org/customPage/nft_mint.php?n=143
?>
<br>
<?php if(isset($para['goto'])): ?>
<button onclick='location.replace("<?=$para["goto"]?>")'>돌아가기</button>
<!-- <script> location.replace("<?=$para['goto']?>"); </script> -->
<?php endif; ?>