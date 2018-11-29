<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>คำนวณราคาสินค้าที่ต้องชำระ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <form method="POST" >
        <p>ราคาสินค้า:<input type="text" name="price"></p>
        <p>จำนวนสินค้า:<input type="text" name="amount"></p>
        <p>ประเภทสินค้า:<input type="radio" name="type" value="1">อิเล็กทรอนิกส์
            <input type="radio" name="type" value="2">เสื้อผ้า
            <input type="radio" name="type" value="3">อาหาร
        </p>
        <input type="submit" name="submit" value="คำนวนราคา">
    </form>
    <?php
    if(isset($_POST['submit'])){ //ถ้ามีการกดปุ่ม submit 
    if($_POST['type']==1){
        $percent=0.05;
        $type_name="อิเล็กทรอนิกส์";
        
    } 
    else if($_POST['type']==2){
        $percent=0.10;
        $type_name="เสื้อผ้า";
    }
    else {
        $percent=0.15;
        $type_name="อาหาร";
    }
    

    
    $discount=($_POST['price']*$_POST['amount'])*$percent;
    $sum_price=($_POST['price']*$_POST['amount']);
    $pay=$sum_price-$discount;


    echo "<p>ราคาสินค้า:",$_POST['price'],"</p>";
    echo "<p>จำนวนสินค้า:",$_POST['amount'],"</p>";
    echo "<p>ประเภทสินค้า:$type_name","</p>";
    echo "<p>ราคารวม:$sum_price","</p>";
    echo "<p>เปอร์เซ็นลดราคา:$percent","</p>";
    echo "<p>ส่วนลดราคา:$discount บาท","</p>";
    echo "<p>ราคาสุทธิ:$pay บาท","</p>","<hr>";
}
    ?>

</body>

</html>