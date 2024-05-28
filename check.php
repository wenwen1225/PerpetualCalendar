<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>萬年曆</title>
<style>
    .container {
        margin: 0px auto;
        text-align: center;
    }
    .table {
        margin-left: auto;
        margin-right: auto;
		width: 40%
    }
	th {
        background-color: #CCCCCC; /* 灰色背景 */
    }
</style>
</head>

<body>
<div class="container">
<?php
	header("Content-Type:text/html; charset=utf-8");
    $year = $_POST['year'];
    $month = $_POST['month'];
	
	DateTable($year,$month);

	function DateTable($year,$month){
		$number=date('t',mktime(0,0,0,$month,1,$year));  //月份的天數
		$first=date('w',mktime(0,0,0,$month,1,$year));  //月份第一天是星期幾
		$row=($number+$first)/7 ;  //計算週數
		
		$week=array("日","一","二","三","四","五","六");
		
		echo "<h2>{$year} 年 {$month} 月<br></h2>";    
		echo '<table class="table" border="1">';
		echo '<tr>';
		for($w=0;$w<7;$w++){  //星期
			echo '<th>'.$week[$w].'</th>';
		}
		echo '</tr>';
		
		$day=1;  //日期
		for($r=0;$r<$row;$r++){
			echo '<tr>';
			for ($i=0;$i<7;$i++){
				if ($r==0 && $i<$first){
					echo '<td></td>'; 
				}elseif($day>$number){
					echo '<td></td>'; 
				}else{
					echo '<td>'.$day.'</td>';
					$day++;
				}
			}
			echo '</tr>';
		}
		echo '</table>';
	}
?>
</div>
</body>
</html>
