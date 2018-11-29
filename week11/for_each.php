<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Associative array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$day=array("sun"=>"อาทิตย์","mon"=>"จันทร์","tue"=>"อังคาร","wed"=>"พุธ","thu"=>"พฤหัสบดี","fri"=>"ศุกร์");

foreach($day as $k=>$v){
    echo $k,"=>",$v,"<br>";


}
echo "<hr>";

?>
    
</body>
</html>