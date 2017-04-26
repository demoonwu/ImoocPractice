<?php
//先按值排序，如果它的值有相同，就再按键排序。
	function valueskeyssort($arr){
		if(!is_array($arr)) {
            echo "输入项目必须为数组";
            return false;
        }

        if(count($arr) < 1) {
            echo "数组不能为空";
            return false;
        }
		$values=array_values($arr);
		$keys=array_keys($arr);
		array_multisort($values,$keys);
		return array_combine($keys,$values);
	};
	
	 $arr = array("d"=>100,"b"=>23,"c"=>22,"f"=>22,"e"=>22);
	 echo "<pre>";
	 print_r( $arr );
	 echo "<br/>排序后<br/>";
	 print_r(valueskeyssort($arr));
?>