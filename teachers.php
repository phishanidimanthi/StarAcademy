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
    <?php include "header.php"; ?>
    <div class="mt-5">
        <p class="fw-bolder text-sm-center mainT" style="color: #10789E; font-size: 40px;">Our Courses</p>
    </div>
    <div class="container-fluid">
        <div id="carouselExampleControls" class="offset-2 col-8 carousel slide carousel-fade slider " style="align-items: center;" data-bs-ride="carousel">
            <div class="carousel-inner py-5">
                <div class="carousel-item active">
                    <img src="resourses/Slide1.jpg" class="d-block w-100 img-fluid" alt="STAR Academy">
                </div>
                <div class="carousel-item">
                    <img src="resourses/Slide2.jpg" class="d-block w-100 img-fluid" alt="STAR Academy">
                </div>
                <div class="carousel-item">
                    <img src="resourses/Slide3.jpg" class="d-block w-100 img-fluid" alt="STAR Academy">
                </div>
                <div class="carousel-item">
                    <img src="resourses/Slide4.jpg" class="d-block w-100 img-fluid" alt="STAR Academy">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <?php include "footer.php"; ?>

    </div>
</body>

</html>