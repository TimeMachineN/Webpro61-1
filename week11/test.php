<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php
//จงสร้างอาเรย์เก็บตัวเลข1-100 
//สลับตำแหน่งค่าตัวเลข 1-100 นี้ 
//ให้แบ่งตัวเลข10 ตัว เก็บใน array 5 ตัวแปร
//วนลูปแสดงผล ค่าที่เก็บใน array 5 ตัวแปร

$number=range(1,100);
shuffle($number);


for($i=0;$i<count($number);$i++){
    if($i<10){
        $array1[]=$number[$i]; 
    }
        elseif($i<20){ //รอบ 1-10
            $array2[]=$number[$i];  
        }
           elseif ($i<30){ //รอบ11-20
            $array3[]=$number[$i]; 
           }
           elseif ($i<40){
               $array4[]=$number[$i];  
           }
               elseif ($i<50){
                   $array5[]=$number[$i];   
               }
           }
    
           for($x=1;$x<=5;$x++){
               echo "<h1>Array $x </h1>";

               $array_name=${"array".$x};//$ + "array"+1=$array1

               foreach ($array_name as $v) {
                   echo $v,"<br>";
               }
               echo "<hr>";
           }
       


?>
    
</body>
</html>