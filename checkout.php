<?php
session_start();
include_once("navbar.php");
include_once("connectDB.php");
$conn = new DB_conn;
$name  = $_POST['id'];
$sql = $conn -> autofill_name($name);
while($data = mysqli_fetch_array($sql)){
    $f_name = $data['first_name'];
    $l_name = $data['last_name'];
    $e_mail = $data['email'];
    $u_name = $data['username'];
    $t_ype = $data['type'];
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Checkout</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
<section class="vh-100" style="background-color: rgb(54, 54, 74);">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <form id="form1" method= "POST" action="insert_cart.php" enctype="multipart/form-data" >
          <div class="row justify-content-sm-left mt-2 ms-4 col-11 ">
              <div class = "col-md-5 ms-auto"  style="color:white;">
              <div class="card mb-4 " id="checkout1" style="background-color:#C39BD3">
                <div class="card-body p-4 text-body">
                  ชื่อ-นามสกุล:
                  <div class="control-group" >
                  <input type="text" name="cus_name" class = "form-control mb-2 "  required placeholder="ชื่อ-นามสกุล ..."
                  value="<?php echo $f_name," ",$l_name?>" readonly>
                  </div>
                  ที่อยู่สำหรับการจัดส่ง:
                  <div class="control-group">
                  <textarea class = "form-control mt-1 mb-2" required placeholder="ที่อยู่..." name="cus_add" id="cus_add" rows="10"></textarea>
                  </div>
                  เบอร์โทรศัพท์:
                  <div class="control-group">
                  <input type="number hidden" name="cus_tel" id="cus_tel" class = "from-control mt-1" required placeholder="เบอร์โทรศัพท์ ..." > 
                  </div>
                  <br><br>
                  <button class="btn btn-primary py-2 px-4" type="submit" name ='sendcart' id="sendcart">ยืนยันการสั่งซื้อสินค้า</button></form>
            </div>
            </div>
            </div>

    </form>
    <div class = "col-md-5 ms-auto mt-4">
                <?php
                $Total=0;
                $sumprice = 0;
                $m=1;
                if(isset($_SESSION["intLine"]) ){

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
                ?>
              

        <div class="card mb-2 " style="background-color:#D2B4DE">
          <div class="card-body p-4">

            <div class="row align-items-center">
              <div class="col-md-3">
              <img src="<?=$row_pro['pImage']?>"
                  class="img-fluid" alt="Generic placeholder image">
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small  mb-2 pb-2 text-center " >ชื่อสินค้า</p>
                  <p class="lead fw-normal mb-0 text-center"><?=$row_pro['pName']?></p>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center">
                <div>
                  <p class="small  mb-2 pb-2 text-center">ราคา</p>
                  <p class="lead fw-normal mb-0 text-center"><?=$row_pro['pPrice']?> บาท</p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small  mb-2 pb-2 text-center">จำนวน</p>
                  <p class="lead fw-normal mb-0 text-center"><?=$_SESSION['strQty'][$i]?></p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small  mb-2 pb-2 text-center">ราคารวม</p>
                  <p class="lead fw-normal mb-0 text-center"><?=$sum?></p>
                </div>
              </div>
            </div>

          </div>
        </div>

            <?php
            $m+=1;
                }
                }
            }
        }
        else{
            echo "<script> alert('asdasdasd'); </script>";
            echo "<script>window.location.href='index.php' </script>";

        }
                ?>
            <div class="card mb-5" style="background-color:#C39BD3">
          <div class="card-body p-4">

            <div class="float-end">
              <p class="mb-0 me-5 d-flex align-items-center">
                <span class="lead fw-normal">ยอดรวมทั้งสิ้น <?=$_SESSION["sumprice"]?> บาท</span>
              </p>
            </div>

          </div>
        </div>
        </div>
        
</div>
</div>
</body>
</html>