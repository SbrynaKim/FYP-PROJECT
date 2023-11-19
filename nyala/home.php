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
<meta charset="UTF-8">
<meta charset="UTF-8">
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyala Candle | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;600&family=Noto+Serif+KR:wght@300&family=Poller+One&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">

	<section class="home" id="home">
        <div class="row">
                <img src="img/banner.png">
        </div>
        <div class="home-text">
                <h1>Nyala Candle</h1>
                <br>
                <br>
                <p>Smell the good stuff. With a choice of different scents to evoke different emotions.<br>
                    To uplift, to relax, or simply to add an air of luxury, coming to you soon.  
                </p>
                <a href="collections.html" class="btn">Explore Now &#8594;</a>

            </div>
        </div>
    </div>
    </div>
</section>
		
	    <!------- Featured Categories ------->
		<div class ="categories">
        <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="img/2.png">
            </div>
            <div class="col-3">
                <img src="img/3.jpeg">
            </div>
            <div class="col-3">
                <img src="img/4.jpg">
            </div>
        </div>
    </div>
</div>
		

<!-------Featured Collections------->
<div class="small-container">
    <h2 class="title">Featured Collections</h2>
    <div class="row">
        <div class="col-4">
            <a href="collections details(lavender silk).html"><img src="img/uhhhh_lavender_silk.png"></a>
            <a href="collections details(lavender silk).html"></a><h4>Lavender Silk</h4></a>
            <p>RM75.00</p>
        </div>
        <div class="col-4">
            <a href="collection details(peach please).html"><img src="img/boss_babe_peach.png"></a>
            <a href="collection details(peach please).html"><h4>Peach Please</h4></a>
            <p>RM35.00</p>
        </div>
        <div class="col-4">
            <a href="collection details(musk rose).html"><img src="img/bunga_musk_rose.png"></a>
            <a href="collection details(musk rose).html"><h4>Musk Rose</h4></a>
            <p>RM75.00</p>
        </div>
        <div class="col-4">
            <a href="collection details(suave).html"><img src="img/classy_suave.png"></a>
            <a href="collection details(suave).html"><h4>Suave</h4></a>
            <p>RM75.00</p>
        </div>
    </div>

 <!-------- Latest Product-------->
 <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <a href="collection details(french lemon).html"><img src="img/spray_fench_lemon.png"></a>
            <a href="collection details(french lemon).html"><h4>French Lemon</h4></a>
            <p>RM69.00</p>
        </div>
        <div class="col-4">
            <a href="collection details(bergamot spray).html"><img src="img/spray_bergamot_lisse.png"></a>
            <a href="collection details(bergamot spray).html"><h4>Bergamot Lisse</h4></a>
            <p>RM69.00</p>
        </div>
        <div class="col-4">
            <a href="collection details(pomegranate spray).html"><img src="img/spray_pomegranate.png"></a>
            <a href="collection details(pomegranate spray).html"><h4>Pomegranate Moonlight</h4></a>
            <p>RM69.00</p>
        </div>
        <div class="col-4">
            <a href="collection details(rose&oud).html"><img src="img/spray_rose_&_oud.png"></a>
            <a href="collection details(rose&oud).html"><h4>Rose & Oud</h4></a>
            <p>RM69.00</p>
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