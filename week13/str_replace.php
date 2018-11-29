<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>str_replace</title>
</head>
<body>

<?php
	if(!empty($_POST['datatext'])){
		$datatext=$_POST['datatext'];
	$datatext=str_replace("กู","กระผม",$datatext);	

	
	}
	else{
	echo "<p>กรุณากรอกข้อมูล</p>";
	$_POST['datatext']="";
	$datatext="";
	}
	
?>



	<h1>ฟอร์มเป็นข้อมูล</h1>

	<form method="post" action="">
	ข้อความ: <textarea  rows="5" cols="70" name="datatext"><?php echo $_POST['datatext']?></textarea>
	<br>
	<input type="submit" value="ส่งข้อมูล" >
	</form>
<?php
	echo"<p>",nl2br($datatext),"</p>";
	echo"<hr>";
?>

</body>
</html>