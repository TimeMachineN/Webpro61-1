<?php
$data=file("data.txt");

foreach ($data as $key => $value) {
    $index_num=$key%6;

    $header=array("ชื่อ","คะแนนวิชาที่","คะแนนวิชาที่","คะแนนวิชาที่","วิชาที่คะแนนสูงสุด","คะแนนเฉลี่ย");
    echo $header[$index_num],":",$value,"<br>";
    if($index_num==5){
        echo "<hr>";
    }
    # code...
}
?>