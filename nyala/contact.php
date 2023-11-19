<?php 
 include 'components/connection.php';
 session_start();
 if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
	}else{
		$user_id = '';
	}

	if (isset($_POST['logout'])) {
		session_destroy();
		header("location: login.php");
	}
?>
<style type="text/css">
	<?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;600&family=Noto+Serif+KR:wght@300&family=Poller+One&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Nyala Candle | contact us </title>

</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		<div class="title2">
			<a href="home.php">home </a><span>/ contact us</span>
        </div>		
		<div class="form-container">
			 <form method="post">
			 	<div class="title">
			 		<h1>leave a message</h1>
			 	</div>
			 	<div class="input-field">
			 		<p>your name <sup>*</sup></p>
			 		<input type="text" name="name">
			 	</div>
			 	<div class="input-field">
			 		<p>your email <sup>*</sup></p>
			 		<input type="email" name="email">
			 	</div>
			 	<div class="input-field">
			 		<p>your number <sup>*</sup></p>
			 		<input type="text" name="number">
			 	</div>
			 	<div class="input-field">
			 		<p>your message <sup>*</sup></p>
			 		<textarea name="message"></textarea>
			 	</div>
			 	<button type="submit" name="submit-btn" class="btn">send message</button>
			 </form>
			 
		</div>
		<div class="address">
			 	<div class="title">
			 		<img src="img/nyala logo.png" class="logo">
			 		<h1>contact detail</h1>
			 		<p>enter your contact detail </p>
			 	</div>
			 	<div class="box-container">
			 		<div class="box">
			 			<div>
			 				<h4>address</h4>
			 				<p>B2-13, Liberty Arc@Ampang Ukay, Hulu Kelang, 68000 Ampang, Selangor</p>
			 			</div>
			 		</div>
			 		<div class="box">
			 			<div>
			 				<h4>phone number</h4>
			 				<p>014-349 2301</p>
			 			</div>
			 		</div>
			 		<div class="box">
			 			<div>
			 				<h4>email</h4>
			 				<p>azfarheri@gushcloudtalent.com</p>
			 			</div>
			 		</div>
			 	</div>
			 </div>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php'; ?>
</body>
</html>