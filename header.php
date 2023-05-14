<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Academy</title>
    <link rel="icon" href="resourses/icon.png">

    <link rel="stylesheet" href="bootstrap.bundle.min.js">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="mainBody">
    
    <nav class="navbar navbar-expand-lg navbar-light navBar">
        <div class="container-fluid">
            <a href="index.php" class="col-3 logo"></a>
            <a class="navbar-brand active fontNav" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fontNav" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fontNav" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            News and Events
                        </a>
                        <ul class="dropdown-menu" style="background-color: #e696e2; border: none;" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item dropItem" href="#">School News</a></li>
                            <li><a class="dropdown-item dropItem" href="#">Events</a></li>
                            <li><a class="dropdown-item dropItem" href="#">Donate</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fontNav" href="#" tabindex="-1" aria-disabled="true">ContactUs</a>
                    </li>

                    <li class="nav-item">
                        <a type="button" class="btn nav-link fontNav signBtn1" href="signProcess.php">SignIn</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="btn nav-link fontNav signBtn2 " href="signProcess.php">SignUp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="bootstrap.bundle.js"></script>
</body>

</html>