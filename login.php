<!-- Koneksi -->
<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <link rel="shortcut icon" type="image/png" href="assets/img/logoBaristavro.svg">
	<title>Login MOUNTAINESIA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vujahday+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

</head>
<body>
	
    <img class="wave" src="images/bg-login.jpg">
	<a  href="index.php">
        <p style="float: left; margin-left: 40px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; color: white;">MOUNTAINESIA</p> 
	</a>

	<div class="container">
		
		<div class="login-content">

				<!-- Form Login -->
				<form method="POST" action="login.php" class="sign-in-form">
				<h2 class="title">MOUNTAINESIA</h2>
				<p class="input-login">LOGIN</p>
				 <!-- Terdapat validasi jika form ada yang belum diinputkan -->
         <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" placeholder="Username" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" placeholder="Password" name="password">
            	   </div>
            	</div>
            	<a href="register.php">Belum punya akun?</a>
            	<button type="submit" name="login-btn" class="btn solid">Login</button>
            </form>

        </div>
        <h1 style="font-family: 'Vujahday Script', cursive; color: white; margin-top: 180px; font-size: 38px;">" Menatap jalan setapak
            Bertanya-tanya sampai kapankah berakhir
            Mereguk nikmat coklat susu
            Menjalin persahabatan dalam hangatnya tenda
            Bersama sahabat mencari damai
            Mengasah pribadi mengukir cinta "</h1>
    </div>
    <script type="text/javascript" src="login.js"></script>
</body>
</html>
