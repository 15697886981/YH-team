<html>
<head>
	<meta charset="utf8">
	<title>招新报名</title>
	<style type="text/css">
		body{
			padding: 0px;
			margin: 0px;
			background-image: -webkit-linear-gradient(-135deg, white, #C0C0C0);
			background-image: linear-gradient(-135deg, white, #C0C0C0);
		}
		div{
			width: 100%;
			height: auto;
			margin-top: 240px;
			text-align: center;
		}
		a{
			font-size: 22px;
			color: gray;
		}
		a:hover{
			color: black;
		}
	</style>
</head>
<body>
	<div>
	<?php

		//获取提交数据
		$name= $_POST['name'];
		$sex= $_POST['sex'];
		$level= $_POST['level'];
		$phone= $_POST['phone'];
		$type= $_POST['type'];
		$introduce= $_POST['introduce'];

		$conn= mysql_connect('localhost', 'root', '333');
		mysql_select_db("a0815200905");
		mysql_query("set names utf8");
		$sql="insert into join_tb(name, sex, level, phone, type, introduce) values('".$name."', '".$sex."', '".$level."', '".$phone."', '".$type."', '".$introduce."')";
		$res=mysql_query($sql, $conn);

		echo $sql;
		if($res){
			echo "<h2>信息提交成功!!! 我们将会尽快联系你</h2>";
		}else{
			echo "<h2>很抱歉 信息提交失败！ 你可以重来一次或直接联系我们，谢谢!!</h2>";
		}

	?>

		<a href="./index.html">返 回</a>
	</div>
	
	
</body>
</html>