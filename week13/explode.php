<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>แยกข้อมูลไปเก็บ array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
		$arr=array("cis---rmutl---chiang mai");

		$str=explode("---",$arr);
	    print_r($str);
	
	?>
</body>
</html>