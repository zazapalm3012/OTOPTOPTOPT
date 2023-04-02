
<?php
include_once ("navbar_index.php");
include_once ("connectDB.php");

$conn = new DB_conn;

?>

<!doctype html>
<html lang="en">
<head>
<title>Home</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
  AOS.init();
</script>
  </head>
  <body>
  <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel" style=background-color:blanchedalmond>
            <ol class="carousel-indicators">
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row p-5">
                            <div class=" col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="img/carousel.jpg" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left align-self-center">
                                    <h1 class="h1 text-success"><b>OTOP</b> Chiangmai</h1>
                                    <h3 class="h2">ผลิตภัณฑ์จากจังหวัดเชียงใหม่</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5">
                            <div class=" col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="img/HowTo.jpg" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <h1 class="h1">ผลิตจากธรรมชาติแท้</h1>
                                    <h3 class="h2">รับประกันรสชาติความอร่อย</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
        <!-- End Banner Hero -->
        
        <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">สินค้าแนะนำ</h1>
                    <p>
                        
                    </p>
                </div>
            </div>
            <div class="row">
              <?php
                    include_once("modal.php");
                    include_once("ajax.js");
$sql = $conn->select_product_by_id(15);  
while($row = mysqli_fetch_array($sql)){  
              ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                    <button type="button" class="btn  btn-md mx-5 " data-bs-toggle="modal" 
                      data-bs-target="#exampleModal" id="<?php echo $row['pId'];?>" onclick = "showDetails(this);">
                            <img src="<?php echo $row['pImage'];?>" class="card-img-top" alt="..." >
                            </button> 
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right"><?php echo $row['pPrice'];?>.00 บาท</li>
                            </ul>
                            <a href="###" class="h2 text-decoration-none text-dark"><?php echo $row['pName'];?></a>

                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php
 

$sql = $conn->select_product_by_id(23);  
while($row = mysqli_fetch_array($sql)){  
?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                    <button type="button" class="btn  btn-md mx-5 " data-bs-toggle="modal" 
                      data-bs-target="#exampleModal" id="<?php echo $row['pId'];?>" onclick = "showDetails(this);">
                            <img src="<?php echo $row['pImage'];?>" class="card-img-top" alt="..." >
                            </button> 
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right"><?php echo $row['pPrice'];?>.00 บาท</li>
                            </ul>
                            <a href="###" class="h2 text-decoration-none text-dark"><?php echo $row['pName'];?></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php
 

$sql = $conn->select_product_by_id(26);  
      
while($row = mysqli_fetch_array($sql)){  
                ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                    <button type="button" class="btn  btn-md mx-5 " data-bs-toggle="modal" 
                      data-bs-target="#exampleModal" id="<?php echo $row['pId'];?>" onclick = "showDetails(this);">
                            <img src="<?php echo $row['pImage'];?>" class="card-img-top" alt="..." >
                            </button>   
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">60.00 บาท</li>
                            </ul>
                            <a href="" class="h2 text-decoration-none text-dark">น้ำมันมะพร้าว</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php } ?>
<section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 id = "about"class="h1">เกี่ยวกับเรา</h1>
                    <p>
                        
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 mb-4 center">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="card-text">
                              ศูนย์จัดแสดง จำหน่ายและกระจายสินค้า OTOP เชียงใหม่ เป็นโครงการ "หนึ่งตำบล หนึ่งผลิตภัณฑ์" ผลิตภัณฑ์โอทอป ครอบคลุม ผลิตภัณฑ์ท้องถิ่น อย่างกว้างขวาง
                              โดยมีวัตถุประสงค์ เพื่อกระตุ้น ธุรกิจประกอบการ ท้องถิ่น ยกระดับ ฐานะ ความเป็นอยู่ ของคนในชุมชน ให้ดีขึ้น โดยการผลิต หรือจัดการทรัพยากรที่มีอยู่ ในท้องถิ่น ให้กลายเป็นสินค้า ที่มีคุณภาพ มีจุดเด่น เป็นเอกลักษณ์ ของตนเอง ที่สอดคล้องกับวัฒนธรรม
                              มุ่งสู่ความเป็นเลิศ ด้านการจำหน่ายสินค้า OTOP ทางระบบออนไลน์ (E-Commerce) ด้วยเว็บไซต์คุณภาพดี นำเสนอข้อมูล ที่มีรูปแบบ น่าเชื่อถือ เพื่อเสริมสร้าง "ภาพลักษณ์" ให้กับ ศูนย์จัดแสดง จำหน่ายและกระจายสินค้า โอทอป เชียงใหม่ ด้วยสินค้าคุณภาพ
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

  </body>
  
</html>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"></script>

