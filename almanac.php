<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>萬年曆</title>
<style>
	.container{
		margin:0px auto;
		text-align: center;
	}
	p{
		font-size:20px;
	}
	select{
		width:100px;
		font-size:20px;
	}
	input{
		font-size:20px;
	}
</style>
</head>

<body>
<div class="container">
<form id="form1" name="form1" method="post" action="check.php">
<?php
	function getYear(){  //年
		echo '<select name="year" id="year">';
		echo '<option value="">選擇</option>';
		
		for ($year = 1900; $year <= 2025; $year++) {
			$yearName = date("Y", mktime(0, 0, 0, 1, 1, $year));
			echo "<option value='$year'>$yearName</option>";
		}
		echo '</select>年';
	}
	
	function getMonth(){  //月
		echo '<select name="month" id="month">';
		echo '<option value="">選擇</option>';
		
		for ($month = 1; $month <= 12; $month++) {
			$monthName = date("n", mktime(0, 0, 0, $month, 1));
			echo "<option value='$month'>$monthName</option>";
		}
		echo '</select>月';
	}
?>

<p>請選擇年月:
	<?php getYear(); ?>
	<?php getMonth(); ?>
</p>
<input type="submit" name="button" id="button" value="送出" />
</form>
</div>
</body>
</html>