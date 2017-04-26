<?php
echo "原来时区为".date_default_timezone_get()."标准时间为".date("Y年n月j日g时i分s秒A")."<br/>";
date_default_timezone_set("PRC");
echo "现在时区已经成功修改为".date_default_timezone_get()."标准时间为".date("Y年n月j日g时i分s秒A")."<br/>";
$startTime=microtime(true);
echo "UNIX时间戳".time().'<br/>';
echo date("Y年n月j日g时i分s秒A")."<hr/>";

usleep(200000);
$endTime=microtime(true);
echo "脚本运行时间".(microtime(true)-$startTime);
?>