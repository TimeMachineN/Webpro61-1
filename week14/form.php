<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ฟอร์มสมัครสมาชิก</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>ฟอร์มสมัครสมาชิก</h1>
<form method="post" action="register.php">
<p>Username:<input type="text" name="username"></p>
<p>Password:<input type="password" name="pwd"></p>
<p>Name:<input type="text" name="name"></p>
<p>SureName:<input type="text" name="surename"></p>
<p>Address:<textarea row="5" cols="100" name="address"></textarea></p>
<p>Gender:<input type="radio" name="gender" value="male">male<input type="radio" name="gender" value="female">female</p>
<p><input type="submit" value="Register"><input type="reset" value="reset"></p>


</form>
    
</body>
</html>