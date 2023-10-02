<?php 

include 'config.php';
session_start();

// Klo belum login gabakal bisa akses page
// if( !isset($_SESSION["login"]) ) {
//     header("Location: index.php");
//     exit;
//  }

$user_id = $_SESSION['id'];

if(isset($_GET['id_sewa'])){
    $id_sewa = $_GET['id_sewa'];
    $user_id = $_SESSION['id'];
    $sql = "SELECT * FROM keranjang WHERE id_keranjang=$id_sewa";
    $query1 = mysqli_query($conn, $sql);
    $d = mysqli_fetch_object($query1);
    $nama_mobil = $d->nama;
}

$rifqi = "SELECT * FROM keranjang WHERE id_keranjang = 'nama'";

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $estimasi = $_POST['estimasi'];
    $tanggal = $_POST['tanggal'];
    $nama_mobil = $nama_mobil;
    $user_id = $_SESSION['id'];

    
    $sql2 = "INSERT INTO formsewa(user_id, nama, no_telp, alamat, tanggal, nama_mobil, estimasi) VALUES('$user_id', '$nama', '$no_telp', '$alamat', '$tanggal', '$nama_mobil', '$estimasi')";
    $query2 = mysqli_query($conn, $sql2);

    if ($query2) {
        // $sql3 = "DELETE FROM keranjang WHERE id_keranjang = $id_sewa"
        // $query3 = mysqli_query($conn, $sql3);
        echo '<script>alert("Pemesanan berhasil");window.location="keranjang.php"</script>';
        header('location:payment.php');
    } else {
        echo '<script>alert("Pemesanan gagal")';
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
    <link rel="stylesheet" href="css/formsewa.css">


    <script src="script.js" defer></script>
</head>
<body>
<header class="header">
    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="450" href="keranjang.php">Back</a>
    </nav>
</header>

<section class="services" id="terms">

    <div class="heading">
        <h1>Form Sewa</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">

<!-- start -->
<form method="POST" class="formsewa" action="">
<div class="flex">
    <div class="inputBox">
        <span>name:</span>
        <input type="text" placeholder="enter your name" name="nama">
    </div>
    <div class="inputBox">
        <span>phone:</span>
        <input type="text" placeholder="enter your number" name="no_telp">
    </div>
    <div class="inputBox">
        <span>address:</span>
        <input type="text" placeholder="enter your address" name="alamat">
    </div>
    <div class="inputBox">
        <span>mobil: <?php echo $nama_mobil;?> </span>
    </div>
    <div class="inputBox">
        <span>estimasi:</span>
        <input type="number" placeholder="enter the estimate in hours" name="estimasi">
    </div>
    <div class="inputBox">
        <span>dates:</span>
        <input type="date" name="tanggal">
    </div>
</div>

<input type="submit" value="submit" class="btn-sub" name="submit">

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

<?php echo $id_sewa;?>
</body>
</html>