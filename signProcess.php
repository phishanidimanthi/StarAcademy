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
    <div class="row mt-4 col-12">
        <div class="col-sm-2">
            <a href="index.php">
                <img src="resourses/logo.png" class="logo type-button">
            </a>
        </div>
        <div class="col-sm-8 mt-5 mb-5">
            <p class="text-uppercase fs-3 fw-bolder text-sm-center" style="color: rgb(227, 8, 239);">welcome to star academy</p>
        </div>
    </div>
    <div>
        <div class="container row m-5" id="loginBox">
            <div class="col-6 logingDiv">
                <div class="row mb-5 mt-5 mx-3 ">
                    <hr class="col-3 mt-3 mx-0 hrLog">
                    <p class="fs-4 fw-bold text-sm-center col-6" style="color: #032562;">User Login</p>
                    <hr class="col-3 mt-3 mx-0 hrLog">
                </div>
                <div class="mb-3 mt-2 mx-4 row">
                    <label class="col-sm-2 col-form-label fs-5 text-muted">Email</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control mx-3" style="background-color: #c5c3c3;" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 mx-4 row">
                    <label class="col-sm-2 col-form-label fs-5 text-muted">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control mx-3 " style="background-color: #c5c3c3;" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 mx-4 row">
                    <label class="col-sm-2 col-form-label fs-6 text-muted">Remember</label>
                    <div class="col-sm-10">
                        <input class="form-check-input mt-2 mx-3 " style="background-color: #c5c3c3;" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                </div>
                <div class="mb-5 mt-4 text-sm-center">
                    <button type="button" class="btn btn-success fw-bold rounded login border-info">Login</button>
                </div>
            </div>

            <div class="col-5 newUserBtn" style="border-bottom-right-radius: 10%;">
                <div class="row newUserTxt ">
                    <p class="fs-4 fw-bold text-sm-center col-8" style="color: #b1d5f3;">New User...???</p>
                    <p class="fs-5 fw-bold mt-3 align-middle col-8" style="color: #d2d1d1;">If you are a new user, Please SignUp here</p>
                </div>
                <div class="mb-5 mt-4 text-sm-center ">
                    <button type="button" class="btn btn-secondary fw-bold rounded newUserSign border-info" onclick="changeView();">SignUp</button>
                </div>
            </div>
        </div>

        <div class="container row m-5 d-none" id="signUpBox">
            <div class="col-7 logingDiv">
                <div class="row mb-5 mt-5 mx-3 ">
                    <hr class="col-3 mt-3 mx-0 hrLog">
                    <p class="fs-4 fw-bold text-sm-center col-6" style="color: #032562;">User SignUp</p>
                    <hr class="col-3 mt-3 mx-0 hrLog">
                </div>
                <div class="mb-3 mt-2 mx-5 row">
                    <label class="col-sm-4 col-form-label fs-5 text-muted">First Name</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control mx-0" style="background-color: #c5c3c3;" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 mt-2 mx-5 row">
                    <label class="col-sm-4 col-form-label fs-5 text-muted">Last Name</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control mx-0" style="background-color: #c5c3c3;" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 mt-2 mx-5 row">
                    <label class="col-sm-4 col-form-label fs-5 text-muted">Contact Number</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control mx-0" style="background-color: #c5c3c3;" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 mt-2 mx-5 row">
                    <label class="col-sm-4 col-form-label fs-5 text-muted">Email</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control mx-0" style="background-color: #c5c3c3;" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 mx-5 row">
                    <label class="col-sm-4 col-form-label fs-5 text-muted">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control mx-0 " style="background-color: #c5c3c3;" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 mx-5 row">
                    <label class="col-sm-4 col-form-label fs-5 text-muted">Conform Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control mx-0 " style="background-color: #c5c3c3;" id="inputPassword">
                    </div>
                </div>
                <div class="mb-5 mt-4 text-sm-center">
                    <button type="button" class="btn btn-success fw-bold rounded login border-info">Register</button>
                </div>
            </div>

            <div class="col-4 newUserBtn" style="border-bottom-right-radius: 10%;">
                <div class="row newUserTxt ">
                    <p class="fs-4 fw-bold text-sm-center col-8" style="color: #b1d5f3;">Already have an account...???</p>
                    <p class="fs-5 fw-bold mt-3 text-sm-center align-middle col-8" style="color: #d2d1d1;">If you register here already, Please Login here</p>
                </div>
                <div class="mb-5 mt-4 text-sm-center ">
                    <button type="button" class="btn btn-secondary fw-bold rounded newUserSign border-info" onclick="changeView();">SignIn</button>
                </div>
            </div>
        </div>

    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>