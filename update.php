<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$middlename=$row['middlename'];
$surname=$row['surname'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $middlename=$_POST['middlename'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];



    $sql="update crud set id=$id,name='$name',middlename='$middlename',surname='$surname',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
    //echo "Updated successfully";
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
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"
                    value=<?php echo $name;?>>
                <div class="form-group">
                    <label>Middle name</label>
                    <input type="text" class="form-control" placeholder="Enter your middlename" name="middlename"
                        autocomplete="off" value=<?php echo $middlename;?>>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" class="form-control" placeholder="Enter your surname" name="surname"
                            autocomplete="off" value=<?php echo $surname;?>>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email" name="email"
                            autocomplete="off" value=<?php echo $email;?>>
                    </div>

                    <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile"
                            autocomplete="off" value=<?php echo $mobile;?>>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Enter your password" name="password"
                            autocomplete="off" value=<?php echo $password;?>>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>