<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
echo $details->country; // -> "DE" for Germany - http://dev.maxmind.com/geoip/legacy/codes/iso3166/
?>