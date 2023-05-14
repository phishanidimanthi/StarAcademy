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
        <a href="courses.php" class="fw-bolder mainT">Our Courses</a>
    </div>
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

        <div class="container row ">
            <div class="col-8 mb-5" style="margin-left: 130px;">
                <div class="text-sm-center fs-3 fw-bold mb-5" style="color: #696238;">
                    <p>Our Course Progression</p>
                </div>
                <div class="dropdown mx-5 ">
                    <button class="btn dropdown-toggle dropCourse" style="background-color: #CB0078;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Information and Communication Technology
                    </button>
                    <ul class="dropdown-menu dropCourse" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" style="background-color: #F742AD;" href="#">What is ICT?</a></li>
                        <li><a class="dropdown-item" style="background-color: #F15AB3;" href="#">Components of an ICT System</a></li>
                        <li><a class="dropdown-item" style="background-color: #EF75BD;" href="#">Example of an ICT System</a></li>
                        <li><a class="dropdown-item" style="background-color: #E889C1;" href="#">ICT Services and Application</a></li>
                        <li>
                            <p class="fw-bold text-danger fs-5 m-3">Lecture in charge</p>
                        </li>
                        <div class="row ">
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher1.jpg" class="img-thumbnail rounded">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Kumuduni Hewawasam</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher2.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Nilanthi Dasanayake</p>
                            </div>
                        </div>
                    </ul>
                </div>

                <div class="dropdown  mx-5 my-3">
                    <button class="btn dropdown-toggle dropCourse" style="background-color: #B400C4;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Web Development for Begginers
                    </button>
                    <ul class="dropdown-menu dropCourse" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" style="background-color: #E038EF;" href="#">The bacis of HTML</a></li>
                        <li><a class="dropdown-item" style="background-color: #E657F3;" href="#">The basic of CSS</a></li>
                        <li><a class="dropdown-item" style="background-color: #EE73F9;" href="#">The basic of JavaScript</a></li>
                        <li>
                            <p class="fw-bold text-danger fs-5 m-3">Lecture in charge</p>
                        </li>
                        <div class="row ">
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher3.jpg" class="img-thumbnail rounded">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Aruni</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher4.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Amalka</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher1.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Nilanthi Dasanayake</p>
                            </div>
                        </div>
                    </ul>
                </div>

                <div class="dropdown  mx-5 my-3">
                    <button class="btn dropdown-toggle dropCourse" style="background-color: #7E0CC7;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Database Management Systems for Begginers
                    </button>
                    <ul class="dropdown-menu dropCourse" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" style="background-color: #A02CEA;" href="#">MySQL</a></li>
                        <li><a class="dropdown-item" style="background-color: #B551F5;" href="#">The basic of PHP</a></li>
                        <li><a class="dropdown-item" style="background-color: #BE6CF3;" href="#">Create the Databases in MySQL Work Bench</a></li>
                        <li>
                            <p class="fw-bold text-danger fs-5 m-3">Lecture in charge</p>
                        </li>
                        <div class="row ">
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher5.jpg" class="img-thumbnail rounded">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Nilmini Hewawasam</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher6.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Mr Akila Perera</p>
                            </div>
                        </div>
                    </ul>
                </div>

                <div class="dropdown  mx-5 my-3">
                    <button class="btn dropdown-toggle dropCourse" style="background-color: #005EAF;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Software Engineering
                    </button>
                    <ul class="dropdown-menu dropCourse" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" style="background-color: #1683E0;" href="#">Operators and Expressions</a></li>
                        <li><a class="dropdown-item" style="background-color: #3797EA;" href="#">Conditional Statments</a></li>
                        <li><a class="dropdown-item" style="background-color: #57A9EF;" href="#">Loops, Jump Keywords and Control flow</a></li>
                        <li>
                            <p class="fw-bold text-danger fs-5 m-3">Lecture in charge</p>
                        </li>
                        <div class="row ">
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher8.jpg" class="img-thumbnail rounded">
                                <p class="fw-light text-black text-sm-center fs-6">Mr Lahiru Jayasekara</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher4.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Amalka</p>
                            </div>
                        </div>
                    </ul>
                </div>

                <div class="dropdown  mx-5 my-3">
                    <button class="btn dropdown-toggle dropCourse" style="background-color: #00A7AF;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Object Oriented Programming
                    </button>
                    <ul class="dropdown-menu dropCourse" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" style="background-color: #1BCFD8;" href="#">The concept of OOP</a></li>
                        <li><a class="dropdown-item" style="background-color: #3DDFE6;" href="#">Java Concepts</a></li>
                        <li><a class="dropdown-item" style="background-color: #73E7EC;" href="#">OOP for Beginners</a></li>
                        <li>
                            <p class="fw-bold text-danger fs-5 m-3">Lecture in charge</p>
                        </li>
                        <div class="row ">
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher9.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Mr Supun Perera</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher1.jpg" class="img-thumbnail rounded">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Kumuduni Hewawasam</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher2.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Nilanthi Dasanayake</p>
                            </div>

                        </div>
                    </ul>
                </div>

                <div class="dropdown  mx-5 my-3">
                    <button class="btn dropdown-toggle dropCourse" style="background-color: #018A46;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Software Application Development
                    </button>
                    <ul class="dropdown-menu dropCourse" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" style="background-color: #1DCC75;" href="#">The Basic of Swing</a></li>
                        <li><a class="dropdown-item" style="background-color: #42E293;" href="#">OOP with Swing</a></li>
                        <li><a class="dropdown-item" style="background-color: #64E8A6;" href="#">Create the simple Calculator</a></li>
                        <li>
                            <p class="fw-bold text-danger fs-5 m-3">Lecture in charge</p>
                        </li>
                        <div class="row ">
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher8.jpg" class="img-thumbnail rounded">
                                <p class="fw-light text-black text-sm-center fs-6">Mr Lahiru Jayasekara</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher5.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Nilmini Hewawasam</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher10.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Mr Tharaka Senarath</p>
                            </div>
                        </div>
                    </ul>
                </div>

                <div class="dropdown  mx-5 my-3">
                    <button class="btn dropdown-toggle dropCourse" style="background-color: #348A01;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Computer Hardware
                    </button>
                    <ul class="dropdown-menu dropCourse" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" style="background-color: #48AD0D;" href="#">The Identify the Basic Computer Hardware</a></li>
                        <li><a class="dropdown-item" style="background-color: #5DCC1C;" href="#">The Components of a Computer Hardware</a></li>
                        <li><a class="dropdown-item" style="background-color: #78DE3C;" href="#">Identify and describe internal desktop and laptop computer components</a></li>
                        <li><a class="dropdown-item" style="background-color: #89E255;" href="#">Troubleshooting Faulty Computer Hardware</a></li>
                        <li>
                            <p class="fw-bold text-danger fs-5 m-3">Lecture in charge</p>
                        </li>
                        <div class="row ">
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher4.jpg" class="img-thumbnail rounded">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Amalka</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher9.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Mr Kavindu Sandeepa</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher10.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Mr Tharaka Senarath</p>
                            </div>
                        </div>
                    </ul>
                </div>

                <div class="dropdown  mx-5 my-3">
                    <button class="btn dropdown-toggle dropCourse" style="background-color: #74AB02;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Computer Network
                    </button>
                    <ul class="dropdown-menu dropCourse" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" style="background-color: #74AB02;" href="#">Cyber Security for Beginners</a></li>
                        <li><a class="dropdown-item" style="background-color: #74AB02;" href="#">The Basic of Wireless Netwok</a></li>
                        <li><a class="dropdown-item" style="background-color: #74AB02;" href="#">The Security of a computer Network</a></li>
                        <li>
                            <p class="fw-bold text-danger fs-5 m-3">Lecturers</p>
                        </li>
                        <div class="row ">
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher1.jpg" class="img-thumbnail rounded">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Kumuduni Hewawasam</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher9.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Mr Kavindu Sandeepa</p>
                            </div>
                            <div class="col-3 d-block mt-2 mb-5 p-2 teacherProfile">
                                <img src="resourses/teacher2.jpg" class="img-thumbnail rounded ">
                                <p class="fw-light text-black text-sm-center fs-6">Miss Nilanthi Dasanayake</p>
                            </div>
                        </div>
                    </ul>
                </div>

            </div>
        </div>


        <?php include "footer.php"; ?>
    </div>

    </div>
</body>

</html>