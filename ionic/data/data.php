<?php 
	$type = $_REQUEST['type'];
	$str = '';
	if ($type == 'list') {
		$str = '{ "records":[ 
						{"Name":"王冉","City":"德州","Country":"中国","age":20}, 
						{"Name":"乔巴","City":"济南","Country":"中国","age":25}, 
						{"Name":"路飞","City":"休斯顿","Country":"美国","age":40}, 
						{"Name":"索隆","City":"日本","Country":"中国","age":23}, 
						{"Name":"乌索普","City":"华盛顿","Country":"美国","age":42}, 
						{"Name":"罗宾","City":"香港","Country":"中国","age":36}, 
						{"Name":"娜米","City":"越南","Country":"越南","age":18}, 
						{"Name":"山治","City":"禹城","Country":"中国","age":2}, 
						{"Name":"罗志祥","City":"莫斯科","Country":"俄罗斯","age":57}, 
						{"Name":"迪丽热巴","City":"平壤","Country":"朝鲜","age":28}, 
						{"Name":"baby","City":"伦敦","Country":"英国","age":41}
						] 
					}';
	}
	echo $str;
 ?>