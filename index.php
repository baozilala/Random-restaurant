<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>NGuestbook</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-warning page-header" style="text-align:center;">
					<?php 
						$Chinesecount = 9;
						$Americancount = 7;

						$Chinese = rand(1,$Chinesecount);
						$American = rand(1,$Americancount);

						if (!empty($_POST)) {
							
							$type = $_POST['CEtype'];
							
							if ( $type == "Chinese") {
								echo '恭喜您抽中了：';
								switch ($Chinese) {
									case '1':
										echo "China King";
										break;
									case '2':
										echo "红碗";
										break;
									case '3':
										echo "No.1";
										break;
									case '4':
										echo "May Flower";
										break;
									case '5':
										echo "Joy Garden";
										break;
									case '6':
										echo "聚乡缘";
										break;
									case '7':
										echo "Little Terryaki";
										break;
									case '8':
										echo "唐苑";
										break;
									case '9':
										echo "四川";
										break;
								}
							}elseif ($type == "American") {
								echo "恭喜您抽中了：";
								switch ($American) {
									case '1':
										echo "Pats Pizza";
										break;
									case '2':
										echo "Seasons Pizza";
										break;
									case '3':
										echo "PapaJohns";
										break;
									case '4':
										echo "Dominao";
										break;
									case '5':
										echo "Grotto Pizza";
										break;
									case '6':
										echo "Deer Park";
										break;
									case '7':
										echo "Applebee";
										break;
								}	
							}
						}else{
							echo "特拉华大学UD Share QQ群：501811";
						}
					 ?>
				 </h2>
			</div>
			<div class="col-md-12">
				 <form action="index.php" method="POST" id="cate" style="text-align:center;">
				 	<input type="radio" name="CEtype" value="Chinese" /> <span>中餐</span>
					<br>
					<input type="radio" name="CEtype" value="American" /> <span>美餐</span>
					<br><br>
					<button class="btn btn-info"  type="submit" form="cate">选，选。选！</button>
				</form>
			</div>
			<div class="col-md-12">
				<p style="text-align:center; border-top:1px solid gray; margin-top:20px; padding-top:10px;">
					欢迎加入我们的QQ群。群成员1200+人，
					<br>有经验的学哥学姐们帮助回答问题，让你事半功倍！
					<br>入群需要填写
					<span style="color:red;">【{学校的邮箱}】</span>
					，或
					<span style="color:red;">【{学生ID}】</span>
					（录取通知书上查找！7开头的数字！）
				</p>
			</div>
		</div>
	</div>
</body>
</html>