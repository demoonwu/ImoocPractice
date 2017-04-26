<?php
	$strOne="why so serious?";
	$strTwo="I'm a man of my word.";
	print_r(strcmp($strOne,$strTwo)."<br/>");
	print_r(strncmp($strOne,$strTwo,3)."<br/>");
	print_r(strcasecmp($strOne,strtoupper($strOne))."<br/>");
	//按照自然顺序进行字符串比较
	print_r(strnatcmp($strOne,strtoupper($strOne))."<br/>");
	
	//字符串的分割explode与拼装implode
	print_r(implode("|",explode(" ",$strOne))."<br/>");
	//字符串的查找、截取与替换
	echo"<hr/><h1>字符串的查找，截取和替换</h1>";
	//print_r(substr($strOne,4,2)."<hr/>");
	//print_r(strstr($strTwo,"n")."<br/>");
	//print_r(strrchr($strOne,"u")."<br/>");
	$strThree="wuyongwei@foxmail.com";
	$strFour="wuyongWEi@foxmail.com@qq.com";
	//----------------------strstr与strrchr的区别
	print_r(strstr($strFour,"@")."<br/>");
	print_r(strrchr($strFour,"@")."<br/>");
//-----------strstr与stristr的区别-----------------------	
	print_r(strstr($strFour,'e')."<br/>");
	print_r(stristr($strFour,"e")."<br/>");
//------------------寻找字符串中某字符出现的位置
	print_r(strpos($strThree,"w",2)."<br/>");
	print_r(strpos($strThree,"w")."<br/>");
	print_r(strrpos($strThree,"w")."<br/>");
	//替换
	print_r(str_replace("wuyongwei","demoonwu",$strThree)."<br/>");
?>