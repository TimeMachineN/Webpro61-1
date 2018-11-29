<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Range Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
    $number=range(1,100);
    $char=range("a","z");
    print_r($number);
    echo "<hr>";
    print_r($char);
    echo "<hr>";

    shuffle($number);//สลับตัวแปรในอาเรย์
    for ($i=0; $i<count($number);$i++){
        echo $number[$i],"/";      
    }
    echo "<hr>";
    
    for ($i=0; $i<count($char); $i++) {
        echo $char[$i],"/"; 
        # code...
    }
    echo "<hr>";
    $char=array_reverse($char);//สลับหลังมาหน้า
    print_r($char);

?>
    
</body>
</html>