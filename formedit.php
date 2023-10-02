<?php 

include 'config.php';
session_start();

// Klo belum login gabakal bisa akses page
// if( !isset($_SESSION["login"]) ) {
//     header("Location: index.php");
//     exit;
//  }

$user_id = $_SESSION['id'];



if(isset($_GET['id_keranjang'])){
    $id_keranjang = $_GET['id_keranjang'];
    $user_id = $_SESSION['id'];
    $sql = "SELECT * FROM keranjang WHERE id_keranjang = $id_keranjang";
    $query1 = mysqli_query($conn, $sql);
    $d = mysqli_fetch_object($query1);
    $nama_mobil = $d->nama;
    $estimasi = $d->estimasi;
}

if(isset($_POST['update'])){
    $update_estimasi = $_POST['estimasi'];
    $id_keranjang = $id_keranjang;
    $sql1 = "UPDATE keranjang SET estimasi = '$update_estimasi' WHERE id_keranjang = '$id_keranjang'";
    $query2 = mysqli_query($conn, $sql1);
    if ($query2) {
                header('location:keranjang.php');
    } else {
                echo '<script>alert("Edit gagal")';
    }
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reentmob | Sewa mobil menjadi mudah!</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="css/detail.css">
    
    


    <script src="script.js" defer></script>
</head>
<body>

<header class="header">
    <nav class="navbar">
        <a class="btn-sub2" data-aos="zoom-in-left" data-aos-delay="450" href="keranjang.php">Back</a>
    </nav>
</header>

<section class="services" id="terms">

    <div class="heading">
        <h1>Form Edit</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">

<!-- start -->
<form method="POST" class="formsewa" action="">
<div class="flex">
    <div class="inputBox">
        <span>mobil: </span>
        <div class="aaa"><?php echo $nama_mobil?></div>
    </div>
    <div class="inputBox">
        <span>estimasi:</span>
        <input type="number" placeholder="enter the estimate in hours" name="estimasi" value="<?php echo $estimasi?>">
    </div>
</div>

<input type="submit" value="submit" class="btn-sub" name="update">

</form>

<!-- end -->
        </div>
    </div>

</section>

<!-- footer section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>
</body>
</html>