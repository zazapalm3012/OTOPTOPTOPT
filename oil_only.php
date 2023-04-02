<?php
session_start();  
include_once ("connectDB.php");
include_once ("navbar.php");
 
$conn = new DB_conn;


?>

<!doctype html>
<html lang="en">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>CoCoNut Oil</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
  AOS.init();
</script>
  <body>
   <div class="container">
    <div class="row">

      <?php
      $sql = $conn->select_show_oil();  
      
      while($row = mysqli_fetch_array($sql)){  
      ?>
      <div class=" col-sm-3 shadow-sm" style="color:white;" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0">
     <img src="<?=$row['pImage']?>" class="mt-5 pt-2 my-3  mx-5 iMg">
        <br>
        
        <h5 class = "my-1 mx-5"style=color:#fc8eac;>  <?=$row['pName']?><br> </h5>
        <div class = "my-1 mx-5"> ราคา: <?=$row['pPrice']?> บาท<br>  </div>
       <button type="button" class="btn btn-primary btn-md mx-5 " data-bs-toggle="modal" 
       data-bs-target="#exampleModal" id="<?php echo $row['pId'];?>" onclick = "showDetails(this);">
        รายละเอียด
       </button>   
       <a class ="btn btn-primary mt-1" name = "p_add" href="order.php?id=<?=$row['pId']?>">สั่งซื้อ</a>

      </div>
      <?php
      }
      include_once("modal.php");
   include_once("ajax.js");
      ?>
    </div>
    
   </div>
    

<?php
include_once("footer.php");
?>

  </body>
</html>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
