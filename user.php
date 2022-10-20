<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql="insert into crud (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);

    if($result){
        echo "Data insert sucessfully";
    }else{
        die(mysqli_error($con));
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>PHP CRUD Application</title>
</head>
<body>

<h1>Hello World</h1>


<div class="container my-5">
<form method="post">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control"  placeholder="Enter your name:" name="name" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control"  placeholder="Enter email" name="email" autocomplete="off">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control"  placeholder="Enter your mobile number:" name="mobile" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control"  placeholder="Password" name="password" autocomplete="off">
    </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button class="btn btn-primary my-5"><a class="text-light" href="display.php">View All</a></button>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>