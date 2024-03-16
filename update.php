<?php
include 'connection.php';
if (isset($_POST['add'])) {
    $pname=$_POST['productname'];
    $quantity=$_POST['quantity'];
    $date=$_POST['date'];
    $price=$_POST['price'];
    $pId=$_GET['pId'];

    $update=$conn->query("UPDATE stock SET productname='$pname', quantity='$quantity', date='$date', price='$price' WHERE pId='$pId' ");

    if ($update) {
        header("location:admin.php");
    }
    else {
        echo "<script>alert('error');</script>";
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
    <title>Document</title>
</head>
<body>
<div class="header container-fluid w-100 shadow bg-white" >
    <div class="mx-auto" style="text-align:center;">
    <div class="mx-auto" style="text-align:center;">
    <div class="align-top shadow"><h1><div class="text-warning p-5" style="display:inline-block;"></div>
            STOCK MANAGEMENT SYSTEM</h1></div>
        </div>
    </div>
</div>
<form method="post" id="demo">
    <table class="table table-hover m-5 w-50 mx-auto bg-white shadow ">
        <tr class="bg-primary text-white">
            <th>Product name</th>
            <th>Product quantity</th>
            <th>Arrival date</th>
            <th>Product price</th>
            <th>Add</th>
        </tr>
<?php
 include 'connection.php';
  $pId=$_GET['pId'];
  $fetch=$conn->query("SELECT * FROM stock  WHERE pId='$pId'");
   while ($row=mysqli_fetch_assoc($fetch)) {
    ?>
        <tr>
            <td><input type="text" class="form-control" name="productname" value="<?php echo $row['productname'];?>" required ></td>
            <td><input type="text" class="form-control" name="quantity"value="<?php echo $row['quantity'];?>"  required placeholder="Kg"></td>
            <td><input type="date" class="form-control" name="date" value="<?php echo $row['date'];?>" required ></td>
            <td><input type="text" class="form-control" name="price" value="<?php echo $row['price'];?>" required placeholder="RWF"></td>
            <td><button type="submit" name="add" class="btn btn-primary">Update</button></td>
            
            
        </tr>
        
    </table>
    </form>
    <?php
}
    ?>
</body>
</html>