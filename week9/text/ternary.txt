<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ternary </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php

$a=20;
$b=79;

if($a>$b){
    echo "a>b";
}
else{
    echo "a<b";
}

echo $a>$b ?"a>b":"a<b";
?>
</body>
</html>