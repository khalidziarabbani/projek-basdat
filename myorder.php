<?php 

include 'config.php';
session_start();

// Klo belum login gabakal bisa akses page
// if( !isset($_SESSION["login"]) ) {
//    header("Location: index.php");
//    exit;
// }

$user_id = $_SESSION['id'];

// $sql = "SELECT * FROM keranjang WHERE id_keranjang = id_keranjang";

if(isset($_POST['update'])){
    $update_estimasi = $_POST['estimasi'];
    $id_keranjang = $_POST['id_keranjang'];
    mysqli_query($conn, "UPDATE `keranjang` SET estimasi = '$update_estimasi' WHERE id_keranjang = '$id_keranjang'") or die('query failed');
    $message[] = 'keranjang quantity updated successfully!';
 }
 
if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `keranjang` WHERE id_keranjang = '$remove_id'") or die('query failed');
    header('location:keranjang.php');
 }
   
if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `keranjang` WHERE user_id = '$user_id'") or die('query failed');
    header('location:keranjang.php');
 }

 if(isset($_POST['proses'])){

   $select_mobil = mysqli_query($conn, "SELECT * FROM `mobil` WHERE nama = '$nama_mobil' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($select_mobil) > 0){
      $message[] = 'mobil sudah ada my order';
   }else{
      mysqli_query($conn, "INSERT INTO `formsewa`(user_id, nama) VALUES('$user_id', '$nama_mobil')") or die('query failed');
      $message[] = 'mobil ditambahkan ke transaksi!';
      header('location:formsewa.php');
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

    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="css/keranjangnew.css">

    <script src="js/script.js" defer></script>
</head>
<body>


<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>


<!-- header scection starts    -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"><i class="fa-solid fa-car"></i> reentmob</i></a>
    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="afterlogin.php">sewa</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="keranjang.php">keranjang</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#myorder.php">my order</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="terms.php">terms & condition</a>
    </nav>
        
    
    <a data-aos="zoom-in-left" data-aos-delay="1300" href="logout.php" class="btn">logout</a>

</header>

<div class="keranjang">

   <h1 class="heading">Mobil Yang Telah Di Pesan</h1>

   <table>
      <thead>
         <th>nama</th>
         <th>no telp</th>
         <th>alamat</th>
         <th>tanggal</th>
         <th>nama mobil</th>
         <th>estimasi</th>
        
      </thead>
    <tbody>
    <?php
         $keranjang_query1 = mysqli_query($conn, "SELECT * FROM `formsewa` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($keranjang_query1) > 0){
            while($fetch_keranjang1 = mysqli_fetch_assoc($keranjang_query1)){
      ?>
         <tr>
            <td><?php echo $fetch_keranjang1['nama']; ?></td>
            <td><?php echo $fetch_keranjang1['no_telp']; ?></td>
            <td><?php echo $fetch_keranjang1['alamat']; ?></td>
            <td><?php echo $fetch_keranjang1['tanggal'];?></td>
             <td><?php echo $fetch_keranjang1['nama_mobil'];?></td>
             <td><?php echo $fetch_keranjang1['estimasi'];?></td>
         </tr>
      <?php
            }
         }else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
         }
      ?>
   </tbody>
   </table>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>


</body>
</html>
