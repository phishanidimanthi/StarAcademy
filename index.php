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

  <div class="container-fluid">

    <div id="carouselExampleControls" class="offset-1 col-10 carousel slide carousel-fade slider " style="align-items: center;" data-bs-ride="carousel">
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

    <div class="d-flex flex-row m-5 about">
      <p class="font-weight-normal">Star Academy, a private and non-public school (NPS), is a
        recognized leader in the Bay Area in educating students with learning differences from
        third grade through post-high school. Our team of highly skilled teachers and specialists
        provide an individually-tailored educational program which gives each student the skills,
        knowledge and resources they need to advance academically and find joy in learning. With this foundation,
        students are emboldened to see beyond their learning differences and envision what is possible.</p>
    </div>

    <div class="d-flex flex-row imgDiv1 rounded my-5">
      <div class="col-2 d-block mt-5 mb-5 p-2 offset-2 imgDiv" style="cursor: pointer;">
        <a href="courses.php" style="text-decoration: none;">
          <img src="resourses/courses.svg" class="img-fluid img-thumbnail rounded">
          <p class="fw-bold text-black text-sm-center fs-5">Courses</p>
        </a>
      </div>
      <div class="col-2 d-block mt-5 mb-5 mx-5 p-2 text-sm-center imgDiv" style="cursor: pointer;">
        <a href="teachers.php" style="text-decoration: none;">
          <img src="resourses/teachers.svg" class="img-fluid img-thumbnail rounded">
          <p class="fw-bold text-black text-sm-center fs-5">Teachers</p>
        </a>
      </div>
      <div class="col-2 d-block mt-5 mb-5 mx-2 p-2 text-sm-center imgDiv" style="cursor: pointer;">
        <a href="students.php" style="text-decoration: none;">
          <img src="resourses/student.png" class="img-fluid img-thumbnail rounded">
          <p class="fw-bold text-black text-sm-center fs-5">Students</p>
        </a>
      </div>

    </div>

    <?php include "footer.php"; ?>
  </div>

</body>

</html>