<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Website Layout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="layout.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="logo">
                DOWNLOAD.MOVIE
            </div>

            <div id="top-menu">
                <ul>
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=aboutus">About Us</a></li>
                    <li><a href="index.php?page=products">Products</a></li>
                    <li><a href="index.php?page=support">Support</a></li>
                </ul>
            </div>
            <div class="clearfloat"></div>
        </div>
        <div id="main">
            <?php
            if(empty($_GET['page'])){ //ถ้าตัวแปร page ว่าง
                include("home.html"); //include หน้าแรกมาแสดง
            }
            else{
                $page=$_GET['page']; //รับค่าตัวแปรเพื่มกำหนดไฟล์ที่จะ include
                include("$page.html");     
            }
            


            
                ?>
        </div>
        <div id="footer">
            <div id="footer-link">
                <h3>Resource for you </h3>
                <ul>
                    <li>Browse DB</li>
                    <li>Magazine</li>
                    <li>Job</li>
                    <li>Support</li>
                </ul>
            </div>
            <div id="footer-link">
                <h3>Resource for you </h3>
                <ul>
                    <li>Browse DB</li>
                    <li>Magazine</li>
                    <li>Job</li>
                    <li>Support</li>
                </ul>
            </div>

            <div id="footer-link">
                <h3>Resource for you </h3>
                <ul>
                    <li>Browse DB</li>
                    <li>Magazine</li>
                    <li>Job</li>
                    <li>Support</li>
                </ul>
            </div>
            <div id="footer-link">
                <h3>Resource for you </h3>
                <ul>
                    <li>Browse DB</li>
                    <li>Magazine</li>
                    <li>Job</li>
                    <li>Support</li>
                </ul>
            </div>
            <div class="clearfloat"></div>
        </div>

    </div>

</body>

</html>