
 <!DOCTYPE html>
 <html>
 <head>
 	<title>2</title>
 </head>
 <body>
 
 </body>
 </html>

<?php

$vat = 15;
$price = 1500;
$vatToPay = $price * ($vat/100);
$totalPrice = $price+ $vatToPay;
echo "Price = ".$price. "<br />";
echo "Vat = ".$vat. "<br />";
echo "Price With Vat = ".$totalPrice

 ?>