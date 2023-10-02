<?php 

include 'config.php';
session_start();
// Klo belum login gabakal bisa akses page
// if( !isset($_SESSION["login"]) ) {
//    header("Location: index.php");
//    exit;
// }

$id = $_SESSION['id'];
// $id_kerajang = $_POST['id_keranjang'];

if(isset($_POST['tambah'])){

    $nama_mobil = $_POST['nama_mobil'];
    $harga_mobil = $_POST['harga_mobil'];
    $gambar_mobil = $_POST['gambar_mobil'];
    $estimasi = $_POST['estimasi'];
 
    $select_keranjang = mysqli_query($conn, "SELECT * FROM `keranjang` WHERE nama = '$nama_mobil' AND user_id = '$id'") or die('query failed');
 
    if(mysqli_num_rows($select_keranjang) > 0){
       $message[] = 'mobil sudah ada dalam transaksi!';
    }else{
       mysqli_query($conn, "INSERT INTO `keranjang`(user_id, nama, harga, gambar, estimasi) VALUES('$id', '$nama_mobil', '$harga_mobil', '$gambar_mobil', '$estimasi')") or die('query failed');
       $message[] = 'mobil ditambahkan ke transaksi!';
       header('location:keranjang.php');
    }
 
 };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reentmob | Sewa mobil menjadi mudah!</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="css/afterlog.css">

    <script src="js/script.js" defer></script>
</head>
<body>
<!-- header scection starts    -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"><i class="fa-solid fa-car"></i> reentmob</i></a>
    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="afterlogin.php">sewa</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="keranjang.php">keranjang</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="myorder.php">my order</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="terms.php">terms & condition</a>
    </nav>
        
    
    <a data-aos="zoom-in-left" data-aos-delay="1300" href="logout.php" class="btn">logout</a>

</header>

<!-- header scection ends    -->

<div class="mobil">

   <h1 class= "heading"> Pilihan Mobil</h1>

   <div class="box-container">

   <?php
      $select_mobil = mysqli_query($conn, "SELECT * FROM `mobil`") or die('query failed');
      if(mysqli_num_rows($select_mobil) > 0){
         while($fetch_mobil = mysqli_fetch_assoc($select_mobil)){
   ?>
      <form method="post" class="box" action="">
         <img src="images/<?php echo $fetch_mobil['gambar']; ?>" al t="">
         <div class="nama"><?php echo $fetch_mobil['nama']; ?></div>
         <div class="harga">Rp. <?php echo $fetch_mobil['harga']; ?>/Jam</div>
         <input type="number" min="1" name="estimasi" value="1">
         <input type="hidden" name="gambar_mobil" value="<?php echo $fetch_mobil['gambar']; ?>">
         <input type="hidden" name="nama_mobil" value="<?php echo $fetch_mobil['nama']; ?>">
         <input type="hidden" name="harga_mobil" value="<?php echo $fetch_mobil['harga']; ?>">
         <input type="submit" value="sewa" name="tambah" class="btn-cok">
         <!-- <a href="keranjang.php" class="btn-cok" value = "sewa">Sewa</a> -->
      </form>
   <?php
      };
   };
   ?>

   </div>

</div>

<div class="credit">created by <span>Reentmob</span> | all rights reserved!</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>

</body>
</html>