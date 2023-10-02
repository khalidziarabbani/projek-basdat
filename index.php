<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reentmob | Sewa mobil menjadi mudah!</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="css/homee.css">

    <script src="js/script.js" defer></script>
</head>
<body>
<!-- header scection starts    -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"><i class="fa-solid fa-car"></i> reentmob</i></a>
    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#term">terms & condition</a>
    </nav>
    
    
    <a data-aos="zoom-in-left" data-aos-delay="1300" href="login.php" class="btn">login</a>

</header>

<!-- header scection ends    -->

<!-- home section starts -->
<section class="home" id="home">

    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">Ayo Bergabung!</span>
        <h3 data-aos="fade-up" data-aos-delay="300">sewa mobil termudah dan termurah</h3>
        <p data-aos="fade-up" data-aos-delay="450">berkendara, berlibur bersama keluarga kini semakin mudah. pilih mobil terbaik anda!</p>
        <a data-aos="fade-up" data-aos-delay="600" href="login.php" class="btn-cok">login</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="img-container" data-aos="fade-right" data-aos-delay="300">
        <img src="images/pexels-s-von-hoerst-2684219.jpg" img class="gambar"></img>
        <!-- <div class="controls">
            <span class="control-btn" data-src="images/img1.jpg"></span>
            <span class="control-btn" data-src="images/img2.jpg"></span>
            <span class="control-btn" data-src="images/img3.jpg"></span>
        </div> -->
    </div>


    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>kenapa harus menggunakan website kami?</span>
        <h3>cara mudah sewa mobil siap menunggumu</h3>
        <p>reenmob adalah jasa penyewa mobil, mudah dan termuah. bisa dilakukan dimana saja dan kapan saja, tentunya dengan aman dan cepat. Caranya mudah, Anda tinggal pilih mobil yang Anda suka, ikuti syarat dan ketentuan, lalu tekan sewa!</p>
        <a href="#" class="btn-cok">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="term">

    <div class="heading">
        <h1>term and condition</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <ul>
            <li>Kami tidak akan menggunakan informasi pribadi itu untuk hal-hal yang melanggar hukum.</li>
            <li>Jika penyewa menggunakan mobil melebihi batas waktu( 24 jam perhari), maka akan dikenakan biaya overtime 10% per jam. Untuk lebih dari 6 jam, sewa akan dihitung menjadi 1 hari.</li>
            <li>Pembayaran sewa mobil yaitu uang muka minimal Rp 100.000,- dan sisa pembayaran pada saat mobil diterima atau mulai digunakan.
mengirim melalui Bank BNI No Rek 7700225580 atas nama Suryaa</li>
            <li>Kami berhak sepenuhnya menolak atau membatalkan penyewaan secara sepihak, dengan alasan yang cukup kuat misalnya data penyewa yang tidak lengkap dan jelas.</li>
            <li>Untuk pengantaran mobil gratis di daerah Jabodetabek di jam kerja mulai jam 07.30-18.00 WIB</li>
            </ul>
    </div>

</section>

<!-- services section ends -->

<!-- banner section starts  -->
<!-- <section class="login-form" id="log">
    <div class="banner">

    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>masih gatau</span>
        <h3>gatau</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum praesentium amet quibusdam quam officia suscipit odio.</p>
        <a href="#login" class="btn">login</a>
    </div>

    </div>
</section> -->

<!-- banner section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"><i class="fa-solid fa-car"></i> reentmob </a>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#terms" class="links"> <i class="fas fa-arrow-right"></i> terms & condition </a>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>contact info</h3>
            <p> <i class="fas fa-map"></i> jawa barat, indonesia </p>
            <p> <i class="fas fa-phone"></i> +62 888 334 321 </p>
            <p> <i class="fas fa-envelope"></i> surya@gmail.com </p>
        </div>

    </div>

</section>

<div class="credit">created by <span>Reentmob</span> | all rights reserved!</div>

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