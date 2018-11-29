<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show_Curency</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
require("function.php");
//money_exchange2(10000,"usd");
$arr=money_exchange2(10000,"usd");
print_r($arr);
echo "จำนวนเงิน=".$arr['thb'];
echo "สกุลเงิน=".$arr['unit'];
echo "แลกได้=".$arr['result'];

 ?>   
</body>
</html>