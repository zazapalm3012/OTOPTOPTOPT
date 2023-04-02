
<?php
include_once ("connectDB.php");
$conn = new DB_conn;
session_start();
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>OTOP CHIANG MAI</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
  AOS.init();
</script>
  </head>
  <body>
<?php


?>

    <?php
    if(isset($_SESSION['name'])){  //check NOT NULL

      if($_SESSION['name'] == 'Nattanon'){ //check admin
        header("location:admin/index.php");
        }   
        else{

          include_once("homepage_true.php");
          if(!isset($_SESSION['fin_cart'] ))
          include("login.js");
            }
          }    
            else if(!isset($_SESSION['name'])) //check NULL
            {   
                include_once ("homepage.php");

                    if(isset( $_SESSION['logout']))
                    {
                      include_once("logout_swal.js");
                      unset($_SESSION['logout']);
                    }
                   
            }

            
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" ></script>
<?php
include_once("footer.php");
?>
  </body>
</html>



