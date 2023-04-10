<?php
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>DigiMart</title>
	<meta name="viewport" content="initial-scale=1.0,width=device-width">
	<link rel ="icon" type="image/x-icon" href="img/favicon.svg">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php
include 'header.php';
if (isset($_GET['pid'])){
$pid = $_GET['pid'];

if(!is_numeric($pid)){
	die("<div class='error'><h1>No Such Product!</h1></div>");
	}
	else{
		$sql = "SELECT * FROM product_details WHERE pid=$pid";
		$result = $con->query($sql);
		if($result->num_rows>0){
			$row = $result->fetch_assoc();
		}
		else{
			die("<div class='error'><h1>No Such Product!</h1></div>");
		}
	}
}
else{
	die("<div class='error'><h1>No Such Product!</h1></div>");
}
?>
<div class="grid-cont">
	<div class="slide-container">
		<div class ="slide fade">
			<img src="img/p<?php echo $row["pid"] ?>i1.jpg">
		</div>
		<div class ="slide fade">
			<img src="img/p<?php echo $row["pid"] ?>i2.jpg">
		</div>
		<div class ="slide fade">
			<img src="img/p<?php echo $row["pid"] ?>i3.jpg">
		</div>
		<a class="prev" onclick="plusSlide(-1)">&#10094;</a>
		<a class="next" onclick="plusSlide(1)">&#10095;</a>
		<div style="text-align: center;margin: 1% 0">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
		</div>
	</div>

	<div class="desc">
	<h5>M.R.P:</h5> <h3>₹ <?php
	include 'numformat.php';
	echo numFormatIndia($row["mrp"]);
	?></h3>
	<hr>
	<div class="stock" id="stock-msg">
		<?php
		if($row["qty"]>0){
			echo "<span style='color:green'>In Stock</span>";
		}
		else{
			echo "Out Of Stock";
		}
		?>
	</div>
	<div class="shop-container">
	<h4>Qty.: </h4>
	<select class="qty" id="qty" onchange="stockCheck(this.value,<?php echo $row["qty"] ?>)">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
	</select>
	<button class="buy" id="buy"><img src="img/shop.svg" width="24px" height="24px"><span>Buy</span></button>
	<button class="add-cart" id="add-cart"><img src="img/cart-plus.svg" width="24px" height="24px"><span>Add To Cart</span></button>
	</div>
	<h2><?php echo $row["title"]; ?></h2><br><br>
	<h4>Product Description:</h4>
		<div style="padding:1% 2%">
		<?php echo $row["description"]; ?>
		</div>
	</div>
</div>
<hr style="margin:1% 3%">
<div class="details">
		<h4>Product Details:</h4>
		<ul style="margin:1%">
		<?php
		$str = explode(".,.",$row["detail"]);
		foreach($str as $val){
			echo "<li>$val</li>";
		}
		?>
		</ul>
</div>
<hr style="margin:1% 1%">
<script src="js/script.js">
</script>
<script src="js/script2.js">
</script>
<script>
	let stock = <?php echo $row["qty"]; ?>;
	if(stock===0){
		document.getElementById("qty").disabled = true;
		document.getElementById("buy").disabled = true;
		document.getElementById("add-cart").disabled = true;
	}
</script>
</body>
</html>
