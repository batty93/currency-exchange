<?php
  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;  
  $lek = 9094;

echo "At the start of your transaction you had $riel riel, $kyat kyat, $krones krones, and $lek lek.";

$riel_to_usd = 0.00025;
$kyat_to_usd = 0.000477;
$krones_to_usd = 0.098;
$lek_to_usd = 0.012;

$usd_to_riel = $riel * $riel_to_usd;
$usd_to_kyat = $kyat * $kyat_to_usd;
$usd_to_krones = $krones * $krones_to_usd;
$usd_to_lek = $lek * $lek_to_usd;

echo "\nYour $riel riel were exchanged for $usd_to_riel usd.";
echo "\nYour $kyat kyat were exchanged for $usd_to_kyat usd.";
echo "\nYour $krones krones were exchanged for $usd_to_krones usd.";
echo "\nYour $lek lek were exchanged for $usd_to_lek usd.";

$final_amount = $usd_to_riel + $usd_to_kyat + $usd_to_krones + $usd_to_lek - 4;
echo "\nAfter deducting the transactions fees, you'll be recieving $final_amount usd.";

$dollars_only = $final_amount % 1000000000;

$change = $final_amount - $dollars_only;

$rounded_change = $change * 100;

$rounded_change %= 100;

$rounded_change /= 100;

$final_amount = $dollars_only + $rounded_change;

?>
