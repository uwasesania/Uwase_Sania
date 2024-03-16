<?php
include("connection.php");
if(isset($_POST['submit'])){
    $uname=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];

    $insert="INSERT INTO user(username,password,email,phone)";

    if($insert){
        header("location:home.php");
    }else{
        echo"<script>alert('error');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap.min.css">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="bg-light">
<div class="header container-fluid w-100 shadow bg-white" >
    <div class="mx-auto" style="text-align:center;">
    <div class="align-top"><h1><div class="text-warning p-5" style="display:inline-block;"></div>
            STOCK MANAGEMENT SYSTEM</h1></div>
        </div>
    </div>
            
    <div class="container">
        <div class="card mx-auto w-30 mt-4 shadow p-5 h-100 bg-white " id="card">
           <form  class="form" method="post">
            <center><h1>Register</h1></center>
            <div class="mt-3" >
                <label for="username" class="form-label ">Username</label>
                <input type="text" id="username" class="form-control border-success" placeholder="Username" name="username" required>
                <label for="email" class="form-label ">email</label>
                <input type="text" id="email" class="form-control border-success" placeholder="email" name="email" required>
                <label for="phone" class="form-label ">phone</label>
                <input type="text" id="phone" class="form-control border-success" placeholder="phone" name="phone" required>
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control border-success" id="password" placeholder="password" required>
                <p><center><button type="submit" class="btn btn-primary col-6" name="submit" >Register</button></center></p>
                <p>ALREADY HAVE AN ACCOUNT <a href="index.php">Login</a></p>
            </div>
           </form>
        </div>
         <div class="panel panel-footer" style="margin-left:40%; margin-top:20%; color:gray;">
        &copy;copyright allright reserved 2023
    </div>
    </div>
   <script src="bootstrap.min.js></script>
</body>
</html>