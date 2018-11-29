<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>แสดงข้อมูลสินค้า</title>
    </head>
<body>
    <?php
    include("../include/connect_db.php");

    $result=mysqli_query($con,"SELECT product_id,product_title,product_sprice FROM products"); 
//or die("SQL error1:".mysql_error($con));
//ดึงข้อมูลที่เรา select ครั้งละ 1 แถว (row)
//list จัดเรียงตัวแปรจากอาร์เรย์ แล้วเก็บไว้ในตัวแปร
    echo "<table border=1>";
    echo "<tr><th>รหัสสินค้า</t
    ...<th>ชื่อสินค้า</th><th>ราคาสินค้า</th></tr>";
    while(list($product_id,$product_title,$product_sprice)=mysqli_fetch_row($result)){ 
    echo "<tr><td>$product_id</td>";
    echo "<td>$product_title</td>";
    echo "<td>$product_sprice</td></tr>";
    }
    echo "</table>";
    mysqli_close($con);

    ?>
</body>
</html>