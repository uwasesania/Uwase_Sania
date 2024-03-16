<?php
include 'connection.php';
if (isset($_POST['add'])) {
    $pId=$_POST['pId'];
    $quantity=$_POST['quantity'];
    $fetch=$conn->query("SELECT * FROM stock WHERE pId='$pId'");
    $row=$fetch->fetch_assoc();
    $newquantity=$row["quantity"]-$quantity;

    $update=$conn->query("UPDATE stock SET quantity='$newquantity' WHERE pId='$pId'");
    if ($update) {
        header("location:admin.php");
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
    <link rel="stylesheet" href="bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .left{
            margin-top: 50px;
            box-shadow: 2px 2px 2px 2px rgb(98, 97, 97);
            border-radius: 10px;
            height: 450px;
            margin-left: 30px;
            align-items: left;
            font-size: 3vh;
            padding-top: 30px;
        }
        ul{
            align-items: center;
        }
        li{
            padding-top: 50px;
        }
        table{
            margin-top: 100px;
        }
        img{
            width: 1000px;
            height: 500px;
            margin-top:20px;
            margin-left:90px;
            border-radius: 5px;
            box-shadow:10px 10px 10px 2px rgb(118, 117, 117) ;

        }
    </style>
    <title>Document</title>
</head>
<body class="bg-light">
<div class="mx-auto" style="text-align:center;">
    <div class="align-top shadow"><h1><div class="text-warning p-5" style="display:inline-block;"></div>
            STOCK MANAGEMENT SYSTEM</h1></div>
        </div>
    </div>
   <div class="col-12">
    <div class="row">
        <div class="col-2">
        <ul class="left nav flex-column">
  <li class="nav-item">
    <a class="nav-link" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admin.php">Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add_product.php">Stock in</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add_product.php">Stock out</a>
  </li>
</ul>
        </div>
        <div class="text col-10">
        <form method="post" id="demo">
    <table class="table table-hover m-5 w-50 mx-auto bg-white shadow ">
        <tr class="bg-primary text-white">
            <th>Product id</th>
            <th>quantity to remove</th>
            <th>stock out</th>
        </tr>
        <tr>
            <td><input type="text" class="form-control" name="pId" required ></td>
            <td><input type="text" class="form-control" name="quantity"required placeholder="Kg"></td>
            <td><button type="submit" name="add" class="btn btn-primary">remove</button></td>
            
            
        </tr>
        
    </table>
    </form>
    </div>
   </div>
        <!-- remove -->
    </div>
    <div class="panel panel-footer" style="margin-left:40%; margin-top:30%; color:gray;">
        &copy;copyright allright reserved 2023
    </div>
   </div>
   <script src="bootstrap.min.js></script>
</body>
</html>