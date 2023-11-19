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
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;600&family=Noto+Serif+KR:wght@300&family=Poller+One&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Nyala Candle | about us</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		<div class="title2">
			<a href="home.php">home </a><span>/ about</span>
		</div>	
	</div>
		<div class="about">
			<div class="row">
				<div class="img-box">
					<img src="img/about-banner.png">
				</div>
				<div class="detail">
					<h1>Welcome to Nyala Shop</h1>
					<p>Nyala is inspired by menyala signifying the good vibes in life through the scent 
					    which established in October 2020. It is owned by Azfar Heri, a well-known as an Influencer.
						Nyala is a scented candle brand which provides with a unique design that has a luxurious vibe yet affordable 
					    The name of Nyala originates from the word ‘menyala’ which means light up. Nyala first candle collection are called 
						“UHHHHHHHHHH INTERESTING COLLECTION” consist of 3 flavors which is Lavender silk, Midnight Blossom, and wild wave. </p>
                    <a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</div>
		<div class="testimonial-container">
			<div class="title">
				<h1>what people say about us</h1>
            </div>
                <div class="container">
                	<div class="testimonial-item active">
                		<img src="img/review 1.png">
                		<h1>Aina Sofia</h1>
                		<p>"They sell candles and it has one of the most prettiest packagings, 
							perfect for the gifting!"</p>
                	</div>
                	<div class="testimonial-item">
                		<img src="img/review 2.png">
                		<h1>Hazim</h1>
                		<p>"What distinguishes candle from other lights is that it appeals 
							to our soul, not our eyes"</p>
                	</div>
                	<div class="testimonial-item">
                		<img src="img/review 3.png">
                		<h1>Mia Liyana</h1>
                		<p>"That moment when you open the box with fresh flowers and candles. 
							Trust me, they smell hellaaaaa goodddd..."</p>
                	</div>
                	<div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                	<div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                </div>
		</div>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<script type="text/javascript">
		let slides = document.querySelectorAll('.testimonial-item');
		let index = 0;

		function nextSlide(){
		    slides[index].classList.remove('active');
		    index = (index + 1) % slides.length;
		    slides[index].classList.add('active');
		}
		function prevSlide(){
		    slides[index].classList.remove('active');
		    index = (index - 1 + slides.length) % slides.length;
		    slides[index].classList.add('active');
		}
	</script>
	<?php include 'components/alert.php'; ?>
</body>
</html>