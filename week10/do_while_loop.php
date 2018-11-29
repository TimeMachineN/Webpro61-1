<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>for_loop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $size=14;
    $r=0;
    $g=255;
    $b=15;
    $x=1;
    do{
        echo "<p style='font-size:$size"."pt; color:rgb($r,$g,$b);'>รอบที่ :$x:Web Programming </p>";
        if($x%2==0){
        echo "<hr>";
    }  
        
    $size+=2;
    $r+=27;
    $g-=28;
    $b+=26;
    $x++;
    }while ($x<=10)

    ?>
    
</body>
</html>