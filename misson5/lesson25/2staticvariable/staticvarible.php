<?php
	
	function demo(){
		static $static_a=10;
		$static_a+=10;
		echo $static_a.'<hr/>';
	}
	demo();
	demo();
	demo();
	demo();
?>