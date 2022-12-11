<?php

echo "test";
echo "<br><br><br><br><br>";

$option = urlencode("metaWalletPay?tokenc=0x5d33254591f34c89385AF385A8cC8a16A1326EB1&chainID=56&to=0x0Cb4C3d8E1E613F2BB4c4e1622edEd1D8d237DB7&amount=0.001");

?>


<div style="display: flex;">
	<img src="https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=<?=$option?>" style="margin: auto !important;">
</div>