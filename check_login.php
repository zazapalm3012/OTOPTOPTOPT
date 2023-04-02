<?php
session_start();
include_once("connectDB.php");
$conn = new DB_conn;
$error = array();
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
    <title>Hello, world!</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
  AOS.init();
</script>
  </head>
  <body?>
<?php
if(isset($_POST['login_user'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if(empty($user)){
        array_push($error,"Your user is required");
    }
    if(empty($pass)){
        array_push($error,"Your password is required");
    }
    if(count($error) == 0){
        $sql = $conn -> check_login($user,$pass);
        if(mysqli_num_rows($sql) == 1){
            $data = mysqli_fetch_array($sql);
            $_SESSION['name'] = $data ['first_name'];
?>

              <?php
            echo "<script>window.location ='index.php' </script>";
?>
<?php
        }
        else{
        array_push($error,"WRONG username or password");

            echo "<script>alert('Your username or password is incorrect') </script>";   
            echo "<script>window.location ='login.php' </script>";



        }
    }

}
?>
</body>
</html>