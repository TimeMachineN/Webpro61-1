<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Layout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>

<body>
    <!-- NAVIGATOR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link text-uppercase active" href="index.php?page=home">Home</a>

                </div>
                <div class="navbar-nav">
                    <a class="nav-item nav-link text-uppercase " href="index.php?page=about">About us</a>

                </div>
                <div class="navbar-nav">
                    <a class="nav-item nav-link text-uppercase " href="index.php?page=contact">Contact</a>

                </div>
            </div>
        </div>
    </nav>

    <!-- BODY -->
    <div class="body">
        <?php
        if(empty($_GET['page'])){
            include("home.html");
        }else {
            $page=$_GET['page'];
            include("$page.html");
        }
        ?>


    
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>

</html>