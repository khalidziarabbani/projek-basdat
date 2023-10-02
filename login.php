<?php

include 'config.php';
session_start();

// if( isset($_SESSION["login"]) ) {
//    header("Location: afterlogin.php");
//    exit;
// }


if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_info` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['id'] = $row['id'];
      $_SESSION['nama'] = $row['nama'];
      header('location:afterlogin.php');
   }else{
      $message[] = 'incorrect password or email!';
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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/loginew.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="container" id="container">
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>WELCOME TO REENTMOB</h1>
					<p>Tempat sewa mobil termudah dan termurah. Dimana saja dan kapan saja...</p>
				</div>
<div class="form-container">

   <form action="" method="post">
      <h3>Login Now</h3>
      <input type="email" name="email" required placeholder="Enter email" class="box">
      <input type="password" name="password" required placeholder="Enter password" class="box">
      <input type="submit" name="submit" class="btn-cok" value="Login Now">
      <p1>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>

</body>
</html>