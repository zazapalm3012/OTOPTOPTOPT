<?php
include_once ("connectDB.php");

$conn = new DB_conn;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container pt-5 me-5">
 <div class="row " >
 <div class="col-lg-8 table-responsive mb-5 ">
 <table class="table table-bordered text-center mb-0 ">
 <thead>
    <tr>
    <th scope="col">MENU</th>
    <th scope="col">BUTTON</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Member</th>
      <td class="align-middle"><a href="display_member.php" class="btn btn-sm btn-primary"> CLICK</a></td> 
    </tr>
    <tr>
      <th scope="row">Product</th>
      <td class="align-middle"><a href="display_product.php" class="btn btn-sm btn-primary"> CLICK</a></td> 

    </tr>
    <tr>
      <th scope="row ">Category</th>
      <td class="align-middle"><a href="display_category.php" class="btn btn-sm btn-primary"> CLICK</a></td> 

  </tbody>
 </table>
 </div>

 </div>
 </div> 
 </body>
 </html>
