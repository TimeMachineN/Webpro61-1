<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>แสดงข้อมูลสมาชิก</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$data=file("member.txt");



foreach ($data as $r=> $listmember  ) {
$index_number=$r%6;

/*if if($index_number==0){
    header="username";
}

*/
$header=array("Username","Password","Name","Surename","Address","Gender");   
    echo $header[$index_number],":",$listmember,"<br>";
    if($index_number==5) echo "<hr>";
   
}
    




/*echo "username:".$data[0],"<br>";
echo "password:".$data[1],"<br>";
echo "name:".$data[2],"<br>";
echo "surename:".$data[3],"<br>";
echo "address:".$data[4],"<br>";
echo "gender:".$data[5],"<br>";
echo  "<hr>"; */



?>
</body>
</html>

