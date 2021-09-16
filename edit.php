<?php
require 'userdb_connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Silicon.ac.in</title>

</head>

<body>
    <?php
    $id= $_GET['id'];
     $sql = mysqli_query($conn, "SELECT first_name,last_name,password,parent,image,religion_name,gender,email,birth_date FROM `user` join religion_table on religion=religion_id where user_id='$id'");
     $res=mysqli_fetch_array($sql);
     if($res['gender']=='M')
     {
         $sel1="CHECKED";
         $sel2="";

     }
     else
     {
        $sel2="CHECKED";
        $sel1="";


     }
    ?> 
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="edit2.php" method="post" enctype="multipart/form-data">
                    <h4>It's free and always will be.</h4>
                    <input name="user_id" value="<?php  echo $id  ?>" type="hidden">
                    <div class="row" style="margin-left: 8px;">First Name
                        <div class="col mar">
                            <input type="text" name="firstname" value=" <?php echo $res['first_name'] ?>" class="form-control input-lg" placeholder="First Name " required />
                        </div>Last Name
                        <div class="col">
                            <input type="text" name="lastname" value="<?php echo $res['last_name'] ?>" class="form-control input-lg" placeholder="Last Name" required />
                        </div>
                    </div>

                    <div class="mb-2 mar">
                        <label for="img">User Image <br></label>
                        <input type="file" class="form-control" value="<?php echo $res['image'] ?>" id="img" name="img" accept="image/*" required>
                    </div>
                    <div class="mar">Parents Name
                        <input type="text" name="parents" value="<?php echo $res['parent'] ?>" class="form-control input-lg" placeholder="Parents Name" required />
                    </div>
                    <div class="mar">Email
                        <input type="email" name="email" value="<?php echo $res['email'] ?>" class="form-control email" placeholder="Your Email" required />
                    </div>

                    <div class="mar">Password
                        <input type="password" name="password" value="<?php echo $res['password'] ?>" class="form-control input-lg" placeholder="Password" required />
                    </div>
                    <div class="mar">Confirm Password

                        <input type="password" name="confirm_password" value="<?php echo $res['password'] ?>" class="form-control input-lg" placeholder="Confirm Password" required />
                    </div>

                    <div class="col-xs-4 col-md-4 mar">
                        <label>Birth Date</label>
                        <input type="date" value=" <?php echo $res['birth_date'] ?>" id="birthday" name="birthday" >
                    </div>
                    <div class="mar">
                        <label>Gender : </label> <label class="radio-inline">
                            <input type="radio" name="gender" <?php echo $sel1 ?> value="M" id=male required /> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" <?php echo $sel2 ?> value="F" id=female required /> Female
                        </label>
                    </div>
                    <div class="mar">
                        <label for="">Religion</label>
                        <select class="form-control dropdown" id="religion" name="religion">
                            <option value="" selected="selected" disabled="disabled">Select one...
                            </option>
                            <?php
                            // require 'userdb_connect.php';
                            $option = mysqli_query($conn, "SELECT * FROM religion_table;");
                            while ($data = mysqli_fetch_array($option)) 
                            {
                                if($data['religion_name']==$res['religion_name'])
                                {
                                    $chk="selected";
                                }
                                else
                                {
                                    $chk="";

                                }
                                echo  '<option value="' . $data['religion_id'] . '"'.$chk.'>'.  $data['religion_name'] . '</option>';
                            }
                            ?>
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

    <script type="text/javascript" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="app.js"></script>
    <script>
        $('document').ready(function() {
            $('user').DataTable();
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>