<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $middlename=$_POST['middlename'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];



    $sql="insert into crud (name,middlename,surname,email,mobile,password) values('$name','$middlename','$surname','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
    //echo "Data inserted successfully";
    header('location:display.php');
    }else{
    die(mysqli_error($con));
    }
    
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>First Project</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Middle name</label>
                <input type="text" class="form-control" placeholder="Enter your middlename" name="middlename"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label>Surname</label>
                <input type="text" class="form-control" placeholder="Enter your Surname" name="surname"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Mobile No.</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password"
                    autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>