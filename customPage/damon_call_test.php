<!doctype html>
<html lang="ko">
  <head>
  <meta charset="utf-8">
    <title>HTML</title>
    <style>
      * {
        font-size: 16px;
        font-family: Consolas, sans-serif;
      }
    </style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  
  <body>
	<form id="payForm" method="post">
		<input type="hidden" id="payType" name="payType" value="0">
    </form>



	<button id="payBtn1" ptype="2" >Pay Start</button>

	<script>
		function goPay(ptype = 0) {
			$('#payType').val( ptype );
            var pWin = window.open("about:blank", "paywindow", "location=no, directories=no,resizable=no,status=no,toolbar=no,menubar=no, left=0, top=0, scrollbars=yes");
            var frm = document.getElementById("payForm");
            frm.action = "./lib_pay_test.php";
            frm.target = "paywindow";
            frm.submit();
        }

		window.addEventListener('message', function(e) {
            console.log(e.data);
        });


		$('#payBtn1').on('click', function(e){
			console.log('test');
			let ptype = $('#payBtn1').attr('ptype');
			goPay(ptype);
		});

	</script>
  </body>
</html>