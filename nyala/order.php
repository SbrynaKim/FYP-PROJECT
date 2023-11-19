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
	<title>Nyala Candle | order </title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		<div class="title2">
			<a href="home.php">home </a><span>/ order</span>
		</div>
		<section class="orders">
				<div class="title">
					<br>
					<img src="img/nyala logo.png" class="logo">
					<br>
					<h1>my orders</h1>
				</div>
				<div class="box-container">
					<?php 
						$select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ? ORDER BY date DESC");
						$select_orders->execute([$user_id]);
						if ($select_orders->rowCount()>0) {
							while($fetch_order = $select_orders->fetch(PDO::FETCH_ASSOC)){
								$select_products = $conn->prepare("SELECT * FROM `products` WHERE id=?");
								$select_products->execute([$fetch_order['product_id']]);
								if ($select_products->rowCount()>0) {
									while($fetch_product=$select_products->fetch(PDO::FETCH_ASSOC)){


					?>
					<div class="box" <?php if($fetch_order['status']=='cancel'){echo 'style="border:2px solid red";';} ?>>
						<a href="view_order.php?get_id=<?= $fetch_order['id']; ?>">
							<p class="date"><i class="bi bi-calender-fill"></i><span><?=$fetch_order['date']; ?></span></p>
							<img src="image/<?= $fetch_product['image']; ?>" class="image" >
							<div class="row">
								<h3 class="name"><?= $fetch_product['name']; ?></h3>
								<p class="price">Price : RM <?= $fetch_order['price']; ?>  <?= $fetch_order['qty']; ?></p>
								<p class="status" style="color:<?php if($fetch_order['status']=='delivered'){echo 'green';}elseif($fetch_order['status']=='canceled'){echo 'red';}else{echo 'orange';} ?>"><?= $fetch_order['status']; ?></p>
							</div>
						</a>
						
					</div>
					<?php 
									}
								}
							}
						}else{
							echo '<p class="empty">no order takes placed yet!</p>';
						}
					?>
				</div>
			
		</section>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php'; ?>
</body>
</html>