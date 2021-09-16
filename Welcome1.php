<?php
    session_start();
    $user=$_SESSION['id'];
   $fn= $_SESSION['fname'];
   $ln=$_SESSION['lname'];
    $img= $_SESSION['img'];
    
   echo '
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Silicon.ac.in</title>
</head>

<body id="body">
    

    <div class="head red">
        <div class="row">

            <div class="col 4"></div>
            <!-- <div class="col 4 mid"><img src="/img/collegemark-2line.jpg" width="100px" height="60px" class="center"> -->
        </div>
        <div class="col 4"></div>
    </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark red">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Placements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ERP</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Admission
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">BTech</a></li>
                            <li><a class="dropdown-item" href="#">MTech</a></li>
                            <li><a class="dropdown-item" href="#">MCA</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <div class="alert alert-primary d-flex align-items-center red" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
            <use xlink:href="#info-fill" />
        </svg>
        <div class="d-grid gap-2">
            <a class="nav-link" href="#">Registration Opens for Summer Internship Program for ( 1 st Year B.Tech/ 1 st
                Year MCA/1 st
                Year MSc-DS/2 nd year LE)</a>
        </div>

    </div>
    <div class="container ">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner red">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1400x400/?university,college " class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h2><img class="rounded-circle" alt="100x100" src="'.$_SESSION['img'].'"
                        data-holder-rendered="true" height=150 wideth=100 ></h2>
                        <h2>'.$fn.' '.$ln.'</h2>
                    <p><b>You are successfully logged in</b></p>
                    <a class="btn btn-danger" href="signout.php" role="button">Logout</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1400x400/?coding,programming" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome '. $user .'  </h2>
                    <p><b>You are successfully logged in</b></p>
                    <a class="btn btn-danger" href="signout.php" role="button">Logout</a>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1400x400/?science,Technology,project" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h2><img class="rounded-circle" alt="100x100" src="'.$_SESSION['img'].'"
                    data-holder-rendered="true" height=150 wideth=100 ></h2>
                    <h2>'.$fn.' '.$ln.'</h2>
                    <p><b>You are successfully logged in</b></p>
                    <a class="btn btn-danger" href="signout.php" role="button">Logout</a>
                        
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container my-4">
        <h3>Departments</h3>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="/Assignment/Assignment8/img/CSE.png" class="card-img-top" alt="not found">
                    <div class="card-body">
                        <h5 class="card-title">CSE</h5>
                        <p class="card-text">CSE encompasses a variety of topics that relates to computation, like
                            analysis of algorithms, programming ,program design , software and computer hardware.
                        </p>
                        <a href="#" class="btn btn-primary">Learn More >></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="/Assignment/Assignment8/img/ECE2.jpg" height=145 wideth=300 class="card-img-top"
                        alt="not found">
                    <div class="card-body">
                        <h5 class="card-title">ECE</h5>
                        <p class="card-text">Electronics and Communications Engineering (ECE) involves researching,
                            designing, developing and testing of electronic equipment used in various systems.</p>
                        <a href="#" class="btn btn-secondary">Learn More >></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/Assignment/Assignment8/img/EEE2.jpeg" height=145 wideth=300 class="card-img-top"
                            alt="not found">
                        <div class="card-body">
                            <h5 class="card-title">EEE</h5>
                            <p class="card-text">EEE Engineers focuses on the analysis, design, development and
                                manufacture of electrical,electronic, Mechatronics technologies and automation and
                                control systems</p>
                            <a href="#" class="btn btn-info">Learn More >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/Assignment/Assignment8/img/MCA.png" class="card-img-top" alt="not found">
                        <div class="card-body">
                            <h5 class="card-title">MCA</h5>
                            <p class="card-text">MCA aims to groom the software skills and strengthen the computer
                                application aspect of students. This prepares the students for the industry
                                requirements .</p>
                            <a href="#" class="btn btn-dark">Learn More >></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>;
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>'
?>