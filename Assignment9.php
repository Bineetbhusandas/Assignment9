<?php
session_start();
if (isset($_SESSION['id'])) 
{
    header('Location: Welcome1.php');
}

$cookie_name = "MY_COOKIE1";
$cookie_value = "COOKIE VALUE";
setcookie( $cookie_name , $cookie_value , time()+(86400) ,"/");

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
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
    <?php
    if(isset($_GET['datatable']))
    {
        
        $hellp= $_GET['datatable'];
        if($hellp=="success")
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!!!!</strong>Datatable edited successfully.....
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        else if($hellp=="delete")
        {
            
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!!!!</strong>Datatable deleted successfully.....
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

        }
        
    }
    if (isset($_GET['error'])) 
    {

        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Login Failed!!!!</strong>Wrong username or password.....
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    if (isset($_GET['signupsuccess'])) 
    {

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!!!!</strong>you are successfully signed up.A Confirmation Message has been sent to your mail. Please check it out.....
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    if (isset($_GET['signupfalid'])) 
    {

        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed!!!!</strong> sign up unsuccessfully......
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    // if(!isset($_COOKIE[$cookie_name]))
    // {
    //     echo '<h4> !!!!!Cookie '.$cookie_name.' is not set!!!!!</h4>';
    // }
    // else
    // {
    //     echo '<h4>Cookie '.$cookie_name.' is set...<br> Value : '.$_COOKIE[$cookie_name].'</h4> ';
    // }

    ?>

    <div class="container ">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner red">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1400x300/?university,college,technology " class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Sign in/Sign up</h2>
                        <p><b>Log in to your account.</b></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Sign in
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModa2">
                            Sign up
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1400x300/?coding,programming" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Sign in/Sign up</h2>
                        <p><b>Log in to your account.</b></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Sign in
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModa2">
                            Sign up
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1400x300/?science,Technology,project" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Sign in/Sign up</h2>
                        <p><b>Log in to your account.</b></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Sign in
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModa2">
                            Sign up
                        </button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="clearfix tableBox table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>

                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Parent</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Religion</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    include "userdb_connect.php";
                    $sql = mysqli_query($conn, "SELECT user_id,first_name,last_name,parent,email,gender,religion_name,birth_date FROM `user` join religion_table WHERE religion=religion_id;");
                    while ($res = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td data-head="Id"><?php echo $res['user_id'] ?> </td>
                            <td data-head="First Name"><?php echo $res['first_name'] ?></td>
                            <td data-head="Last Name"><?php echo $res['last_name'] ?></td>
                            <td data-head="Parent"><?php echo $res['parent'] ?></td>
                            <td data-head="Gender"><?php echo $res['gender'] ?></td>
                            <td data-head="Email"><?php echo $res['email'] ?></td>
                            <td data-head="Date of Birth"><?php echo $res['birth_date'] ?></td>
                            <td data-head="Religion"><?php echo $res['religion_name'] ?></td>
                            <td><?php echo '<a href=edit.php?id='.$res['user_id'].'>Edit</a>/<a href=delete.php?id='.$res['user_id'].'>Delete</a>' ?></td>
                        </tr>
                    <?php  } ?>

                </tbody>
            </table>

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
                    <img src="/Assignment/Assignment8/img/ECE2.jpg" height=145 wideth=300 class="card-img-top" alt="not found">
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
                        <img src="/Assignment/Assignment8/img/EEE2.jpeg" height=145 wideth=300 class="card-img-top" alt="not found">
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
    </div>

    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #6da9ad;">
                <div class='imp'>
                    <main>
                        <!-- <form action="<php echo $_SERVER['PHP_SELF'] ?> " method="POST"> -->
                        <form action="signin.php" method="POST">
                            <div class="imgcontainer">
                                <img src="https://img.icons8.com/ios/50/000000/name--v2.png" alt="Avatar" class="avatar" />
                            </div>
                            <div class="row">
                                <div class="col mar">
                                    <label for="input" class=""> <b> Email</b></label>
                                    <input type="email" class="form-control email" id="email" name="mail" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mar">
                                    <label for="Password" class="col"> <b>Password</b> </label>
                                    <input type="password" class="form-control" id="password" name="pass" required>
                                    <h5 id="passcheck" style="color: red;">
                                        **Please Fill the password
                                    </h5>
                                </div>
                            </div>
                            <div class="imgcontainer">
                                <button type="submit" class="btn btn-primary">Sign in</button>

                                <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
                            </div>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Full screen modal -->
    <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content " style="background-color: #6da9ad;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container" id="wrap">
                        <div class="row">
                            <div class="col">
                                <form action="signup.php" method="post" enctype="multipart/form-data">
                                    <h4>It's free and always will be.</h4>

                                    <div class="row" style="margin-left: 8px;">First Name
                                        <div class="col mar">
                                            <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name " required />
                                        </div>Last Name
                                        <div class="col">
                                            <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name" required />
                                        </div>
                                    </div>
                                    <div class="mb-2 mar">
                                        <label for="image">User Image <br></label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                    </div>
                                    <div class="mar">Parents Name
                                        <input type="text" name="parents" value="" class="form-control input-lg" placeholder="Parents Name" required />
                                    </div>
                                    <div class="mar">Email
                                        <input type="email" name="email" value="" class="form-control email" placeholder="Your Email" required />
                                    </div>

                                    <div class="mar">Password
                                        <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" required />
                                    </div>
                                    <div class="mar">Confirm Password

                                        <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password" required />
                                    </div>

                                    <div class="col-xs-4 col-md-4 mar">
                                        <label>Birth Date</label>
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                    <div class="mar">
                                        <label>Gender : </label> <label class="radio-inline">
                                            <input type="radio" name="gender" value="M" id=male required /> Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="F" id=female required /> Female
                                        </label>
                                    </div>
                                    <div class="mar">
                                        <label for="">Religion</label>
                                        <select class="form-control dropdown" id="religion" name="religion">
                                            <option value="" selected="selected" disabled="disabled">-- select one --
                                            </option>
                                            <?php
                                            require 'userdb_connect.php';
                                            $option = mysqli_query($conn, "SELECT * FROM religion_table;");


                                            while ($data = mysqli_fetch_array($option)) {
                                                echo  '<option value="' . $data['religion_id'] . '">' . $data['religion_id'] . ':' . $data['religion_name'] . '</option>';
                                            }
                                            ?>
                                            <!-- SELECT email,religion_name FROM `user`join religion_table on user.religion = religion_table.religion_id; -->
                                            <!-- 
                                            <option value=1>Buddhism</option>
                                            <option value=2>Christianity</option>
                                            <option value="3">Hinduism</option>
                                            <option value="4">Islam</option>
                                            <option value="5">Jainism</option>
                                            <option value="6">Sikhism</option>
                                            <option value=7>Other</option> -->
                                        </select>
                                    </div>
                                    <div class="mar">
                                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                                            Create account</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
    <script src="app.js"></script>
    <script>
       $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>