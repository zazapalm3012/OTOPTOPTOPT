
<?php
session_start();
include_once ("connectDB.php");
$conn = new DB_conn;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Cart - Shopping</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
  AOS.init();
</script>
</head>

<body>
    <?php
    include_once('navbar.php');
?>

<div class="container ">
    
<?php
                $Total=0;
                $sumprice = 0;
                $m=1;
                if(isset($_SESSION["intLine"]) and $_SESSION["Total"] !=0){
                    ?>
    <div class="row">
    <div class = "col-md-10 mx-5 ">
    <section class="h-100" ">
    <div class="container h-100 py-3 mt-3">
        <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col-10 ">

            <div class="d-flex justify-content-between align-items-center mb-4 ">
            <h3 class="fw-normal mb-0 text-white">Shopping Cart</h3>
            </div>
                    
               
            <?php                
                for($i=0; $i <= (int)$_SESSION["intLine"]; $i++){
                   if( isset($_SESSION["strProductID"][$i])){
                    if(($_SESSION["strProductID"][$i]) != ""){
                    $sql1 = $conn->select_product_by_session($_SESSION["strProductID"][$i]);
                 
                        //$result1 = mysqli_query($conn, $sql1);
                        $row_pro = mysqli_fetch_array($sql1);

                       $_SESSION["price"] = $row_pro['pPrice'];
                        $Total = $_SESSION["strQty"][$i];
                        $sum = $Total * $row_pro['pPrice'];
                        $sumprice  =$sumprice + $sum;
                        $_SESSION["sumprice"] = $sumprice ;
                ?>

                <div class="card rounded-3 mb-4 ">
                    
                        <div class="card-body p-4">
                            
                            <div class="row d-flex justify-content-between align-items-center">
                                
                            <div class="col-md-2 col-lg-2 col-xl-2">
                            
                                <img
                                    src="<?=$row_pro['pImage']?>"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2"><?=$row_pro['pName']?></p>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <?php if($_SESSION["strQty"][$i] > 1){  ?>
                                    <a href="order_del.php?id=<?=$row_pro['pId']?>" class= "btn btn-outline-primary">-</a>
                                    <?php 
                                    } 
                                    else if($_SESSION["strQty"][$i] == 1){   
                                        ?>
                                        <a href="order_del.php?id=<?=$row_pro['pId']?>" class= "btn btn-outline-primary " disabled data-bs-toggle="button">-</a>

                                        <?php
                                    }
                                    
                                    ?>
                                        <input id="form1" min="0" name="quantity" value="<?=$_SESSION['strQty'][$i]?>" type="number hidden" readonly
                                        class="form-control form-control-sm " />
                                       
                                    <a href="order.php?id=<?=$row_pro['pId']?>" class= "btn btn-outline-primary">+</a>    
                                    
                                </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h5 class="mb-0"><?=$row_pro['pPrice']?> บาท</h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="pro_delete.php?Line=<?=$i?>" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                            
                            </div>
                            
                            </div>
                            
                        </div>
                        
                        </div>
                        <?php
                            }
                        }
                    }
                            ?>
                        </div>
                        
                        </div>
                        </div>
                        </section>
                        </div>
            <?php
            $m+=1;
 
        }
        else{
            echo "<script>window.location ='empty.php' </script>";

        }
                ?>
                
        </div>
        
        <form id="form1"  action="checkout.php" method= "POST">
        <div class = "col-sm-10 " style="text-align:right">
    <input type="hidden" id="id" name="id" value="<?= $_SESSION['name']?>">
    <button type="submit" class="btn btn-primary me-md-5 ">ยืนยันการสั่งซื้อ</button> 
    
    <a href ="show_product.php" ><br><button type="button" class="btn btn-primary me-md-5 mt-1">เลือกสินค้า</button></br></a>
    </div>
    
    
    
</form>
        
    </div>
   
    

    


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


      <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
