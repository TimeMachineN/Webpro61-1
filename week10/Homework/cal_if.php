<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homework_if</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>คำนวณดอกเบี้ยที่ต้องชำระ</h1>
    <form method="POST">
        จำนวนเงินที่กู้:<input type="text" name="m">
        จำนวนปีที่กู้:<input type="text" name="y">
        <input type='submit' name='submit' value="cal">
    </form>
    <?php
    if(isset($_POST['submit'])){
    if($_POST['y']==5){
        $rate=0.10;
    }else if($_POST['y']==10){
        $rate=0.15;
    } else {
        $rate=0.20;
    }

    
    $interest=$_POST['m']*$rate;
    $total=$_POST['m']+$interest;
    $f=($total/(12*$_POST['y']));

    echo "<p>ดอกเบี้ยที่ีต้องเสีย:$interest บาท","</p>";
    echo "<p>จำนวนเงินทั้งหมดที่ต้องจ่าย:$total บาท","</p>";
    echo "<p>จำนวนเงินที่ต้องจ่ายในแต่ละเดือน:$f","<hr>";
}



    ?>
</body>
</html>