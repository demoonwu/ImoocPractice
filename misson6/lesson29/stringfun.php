<?php
	$strOne="大家好我是字符串";
	echo $strOne.'<br/>';
	print $strOne.'<br/>';
	printf("大家好%s的指数是%d<br/>","美股","10000");
	$strOne=sprintf("使用sprintf%s的指数是%d","美股","10000");
	echo $strOne."<hr/><h1>常用的字符串格式化函数</h1>";
//------------------常用的字符串格式化函数----------------------------------------
	$strTwo="   |abcdefgfedcba|   ";
	echo '====================>'.$strTwo.'<====================<br/>';
	print_r('====================>'.ltrim($strTwo," |a").'<====================<br/>');
	print_r('====================>'.rtrim($strTwo," |a").'<====================<br/>');
	print_r('====================>'.trim($strTwo," |a").'<====================<br/>');
	print_r('====================>'.str_pad($strTwo,30,"*").'<====================<br/>');
	print_r('====================>'.str_pad($strTwo,30,"*",STR_PAD_LEFT).'<====================<br/>');
	print_r('====================>'.str_pad($strTwo,30,"*",STR_PAD_BOTH).'<====================<br/>');
	//------------------字符串大小写转换函数--------------------------------
	$strThree="i have a dream,that one day i can use Python very well";
	echo "<hr/><h1>常用的字符串格式化函数</h1>{$strThree}<br/>";
	print_r(strtolower($strThree).'<====================<br/>');
	print_r(strtoupper($strThree).'<====================<br/>');
	print_r(ucfirst($strThree).'<====================<br/>');
	print_r(ucwords($strThree).'<====================<br/>');
	//------------------和HTML 相关联的字符串格式化函数--------------------------------
	$strFour="“I believe… \nwhatever doesn’t kill you simply makes you…\nstranger.” “";
	echo "<hr/><h1>常用的字符串格式化函数</h1>{$strFour}<br/>";
	print_r($strFour.'<====================<br/>');
	print_r(nl2br($strFour).'<====================<br/>');
	$new = htmlspecialchars("<a href='test'>Test</a>");
	echo $new;
	$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
	echo htmlentities($str);

// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
	echo htmlentities($str, ENT_QUOTES);
	
	$text = '<p>Test paragraph.</p><!-- Comment --> Other text';
	echo strip_tags($text);
	echo "\n";

// Allow <p>
	echo strip_tags($text, '<p>');


//--------------其他字符串格式化函数------------------
	$strFive="why so serious?";
	echo "<hr/><h1>其他字符串格式化函数</h1>{$strFive}<br/>";
	print_r(strrev($strFive).'<br/>');
	print_r(strlen($strFive).'<br/>');//算上两个空格15
	print_r(md5($strFive).'<br/>');
	
	


?>