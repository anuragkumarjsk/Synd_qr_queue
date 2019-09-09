<?php
//FUNCTION TO RETURN THE TIME / TIMESTAMP WHEN THE CLIENT ATTEMPTED TO CONNECT.
function time_is()
{
date_default_timezone_set('Asia/Kolkata');
$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];
$time_= $hour.':'.$min.':'.$sec;
return $time_;
}
?>