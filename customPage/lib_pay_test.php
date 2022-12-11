<?php
	if(!isset($_POST['payType'])){
		exit;
	}

	if($_POST['payType'] == 0){
		exit;
	}

	$payUrl = "http://testinpay.yammiapp.com/apipay/v1/";

	$payConfig = array(
		1=>array(
			"good_name"=>"일반등기",
			"good_mny"=>"1000",
		),
		2=>array(
			"good_name"=>"확인등기",
			"good_mny"=>"2000",
		),
		3=>array(
			"good_name"=>"검증등기",
			"good_mny"=>"3000",
		),
	);

	if( !isset($payConfig[ $_POST['payType'] ] ) ){
		exit;
	}

	$payConfig = $payConfig[ $_POST['payType'] ];
?>
<!doctype html>
<html lang="ko">
  <head>
  <meta charset="utf-8">
    <title>HTML</title>
  </head>
  
  <body>
	<form id="order_info" method="post">
		<input type="hidden" name="atype" value="apipay">
		<input type="hidden" name="ordr_idxx" id="or_code">
		<input type="hidden" name="good_name" value="<?=$payConfig['good_name']?>">
		<input type="hidden" name="good_mny" value="<?=$payConfig['good_mny']?>">

		<? if(isset($_POST['buyr_name'])): ?>
		<input type="hidden" name="buyr_name" value="<?=$_POST['buyr_name']?>">
		<? endif; ?>

		<? if(isset($_POST['buyr_tel1'])): ?>
		<input type="hidden" name="buyr_tel1" value="<?=$_POST['buyr_tel1']?>">
		<? endif; ?>

		<? if(isset($_POST['buyr_tel2'])): ?>
		<input type="hidden" name="buyr_tel2" value="<?=$_POST['buyr_tel2']?>">
		<? endif; ?>

		<? if(isset($_POST['buyr_mail'])): ?>
		<input type="hidden" name="buyr_mail" value="<?=$_POST['buyr_mail']?>">
		<? endif; ?>
    </form>
  </body>

  <script>
		function getTime(){
			return new Date().getTime();
		}
		function goPay( ) {
			document.getElementById("or_code").value = getTime();
            var frm = document.getElementById("order_info");
            frm.action = "<?=$payUrl?>";
            frm.target = "paywindow";
            frm.submit();
        }
		goPay();
  </script>
</html>


<?
/*
-Fail-
res_cd: "8105"
res_en_msg: "Format Error (Payment amount)"
res_msg: "포맷에러(지불|신용카드|금액)"


-Success-
acqu_cd: "CCLG"
acqu_name: "신한카드"
amount: "1000"
app_no: "35422712"
app_time: "20220510150502"
bizx_numb: "0112043609"
ca_order_id: "CERT_1652162676001"
card_bin_bank_cd: "0301"
card_bin_type_01: "0"
card_bin_type_02: "1"
card_cd: "CCLG"
card_mny: "1000"
card_name: "신한카드"
card_no: "5107370000003454"
cert_no: "22760479454035"
coupon_mny: "0"
escw_yn: "N"
join_cd: "0000"
mall_taxno: "6028801180"
mcht_taxno: "1138521083"
noinf: "N"
order_no: "CERT_1652162676001"
partcanc_yn: "Y"
pay_method: "PACA"
pg_txid: "0510150502MOD0479454030000000010000035422712"
quota: "00"
res_cd: "0000"
res_en_msg: "processing completed"
res_free_mny: "0"
*/
?>