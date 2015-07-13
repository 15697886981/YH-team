<html>
<head>
	<meta charset="utf8">
	<title>报名名单</title>
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
			margin-top: 50px;
			text-align: center;
		}
		table{
			text-align: center;
			width: 100%;
			color: gray;
			font-size: 18px;

		}
		.title td{
			border-bottom: 1px solid gray;
		}
	</style>
</head>
<body>
	<div>
		<table>
			<tr class="title"> <td>编号</td><td>姓名</td><td>性别</td><td>年级/学部/专业</td><td>联系方式</td><td>组别</td><td>简介</td> </tr>
		
			<?php

				$conn= mysql_connect('localhost', 'root', '333');
				mysql_select_db("a0815200905", $conn);
				mysql_query("set names utf8");

				$sql= "select * from join_tb";

				$res= mysql_query($sql, $conn);
				echo count($res);
				//print_r($res);
				

				$res= mysql_fetch_assoc($res);

				echo "<pre>";
				var_dump($res);
				echo "<pre>";
				

				for($i=0; $i<1; $i++){
					echo "<tr>";
					echo "<td>".$res['id']."</td>";
					echo "<td>".$res['name']."</td>";
					echo "<td>".$res['sex']."</td>";
					echo "<td>".$res['level']."</td>";
					echo "<td>".$res['phone']."</td>";
					echo "<td>".$res['type']."</td>";
					echo "<td>".$res['introduce']."</td>";
					echo "</tr>";
				}
				
			?>
		</table>
	</div>
</body>
</html>