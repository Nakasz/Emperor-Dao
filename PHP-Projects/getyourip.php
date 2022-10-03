<?php
$get = file_get_contents('https://ip.seeip.org/jsonip');
$ip = json_decode($get);
$ipp = $ip;
echo "your ip : " . $ipp->ipp . "\n";
?>
