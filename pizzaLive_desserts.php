<!DOCTYPE html>
<html>
<head>
	<title>PizzaLive Desserts</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	#cart {
    background-color: #4CAF50; /* Green */
    border: none;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
	}
	 .navbar-custom{
  color: #FFFFFF;
    background-color: #073642;
    overflow: none;
    width: 100%;
     border-color: black;
  }
  .navbar{
    min-height: 50px;
    background-color: #073642;
  }


  .navbar-toggle{
    margin-top: 20px;
      padding: 6px 6px !important;

  }
  @media (min-width: 768px) {
  .navbar-nav > li > a {
    /* (80px - line-height of 27px) / 2 = 26.5px */
    padding-top: 20.5px;
    padding-bottom: 20.5px;
    padding-left: 17px;
    padding-right: 20px;
    line-height: 23px;
    column-gap: 60px;
    color: white;
    font-family:   Comic Sans MS;
    background-color: #073642;
  }
}
li{
 	color: black;
}
li a{
	color: black;

}
li a:hover{
	color: blue;
}
  </style>
</head>
<body background="background\benitos.jpg">
	<header class="grid-collapse">
	<nav class="navbar navbar-inverse" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
      <a class="navbar-brand" href="index.php"><img src="Homepage_images\logo.png" width="100px" height="100px"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-main">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="pizzaLive_menu.php">Pizza</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pizzaLive_drinks.php">Drinks</a></li>
          <li><a href="pizzaLive_desserts.php">Desserts</a></li>
          <li><a href="pizzaLive_magicpan.php">Magic Pan</a></li>
        </ul>
      </li>
      <li><a href="pizzaLive_sides.php">Sides</a></li>
      <li><a href="pizzaLive_meals.php">Meals</a></li>
      <li><a href="pizzaLive_offers.php">Offers</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <!-- <button class="button" style="vertical-align: middle;"><span>Order Your Meal</span></button>-->
     <li><button type="button" class="btn btn-success btn-lg" href="#" style="width:150px; padding:2px; margin-top: 10px; text-align:center;">Start Your Order</button></li>
    </ul>
  </div></div>
</nav>
</header>
<section>
	<div class="container">
		<h1  style="text-align: center; color:black ">-----DESSERTS-----</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6" style="text-align: center; color: black;">
				<h3 style="text-align: center;color: black;">Choco Truffle Cake</h3>
				<h3 style="text-align: center;"><img src="desserts_images\choco-truffle-cake.png"></h3>
				<h4 style="text-align: center;color: black;">Classic Favourite.Rich Choco Cake.</h4>
				<h2 style="text-align: center; color: black;">Rs 89/-</h2>
				<button id="cart" class="btn btn-success" data-toggle="modal" data-target="myModal1">Add to Cart</button>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="col-lg-6 col-sm-6" style="text-align: center; color: black;">
				<h3 style="text-align: center;color: black;">Choco Volcano Cake</h3>
				<h3 style="text-align: center;"><img src="desserts_images\choco-volcano-cake.png"></h3>
				<h4 style="text-align: center;color: black;">Choco Delight With a Gooey Choclate Volcano Centre</h4>
				<h2 style="text-align: center; color: black;">Rs 89/-</h2>
				<button id="cart">Add to Cart</button>
			</div>
			</div>
		</div>
	</div>
</section>
<br><br><br><br><br>
<!--footer-->
<footer>
	<div class="container" style="background-color: #800000;">
		<div class="row">


				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<ul style=" color: black;">--Order--</ul>
					<li><a href="pizzaLive_menu.php"> Pizza</a></li>
					<li><a href="pizzaLive_sides.php">Sides</a></li>
					<li><a href="pizzaLive_meals.php">Meals</a></li>
					<li><a href="pizzaLive_drinks.php">Drinks</a></li>
					<li><a href="pizzaLive_desserts.php">Desserts</a></li>
					<li><a href="pizzaLive_magicpan.php">Magic Pan</a></li>
					<li><a href="pizzaLive_offers.php">Offers</a></li>
				</div>


				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<ul style=" color: black;">Visit PizzaLive</ul>
					<li><a href="locate_a_store.php" id="myModal">Locate a Store</a></li>
					<li>SiteMap</li>
					<li><a href="global_blog.php">global Blog</a></li>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<ul style=" color: black;">PizzaLive In India</ul>
					<li><a href="inside_pizzaLive.php">About Us</a></li>
					<li><a href="nutrition.php">Nutrition</a></li>
					<li><a href="tnc.php">Terms And Conditions</a></li>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<ul style=" color: black;">Order Pizza In</ul>
					<li>Bengaluru</li>
					<li>Delhi</li>
					<li>Faridabad</li>
					<li>Gurugram</li>
					<li>Greater Noida</li>
					<li>Mumbai</li>
					<li>Hyderabad</li>
					<li>Chennai</li>
					<li>Pune</li>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<ul style=" color: black;">Connect With PizzaLive</ul>
					<li><a href="feedback_form.php">Give Us Feedback</a></li>
					<li><a href="login.php">Sign In</a></li>
					<li><a href="register.php">Register</a></li>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<ul style=" color: black;">Follow Us</ul>
					<li><a href="www.facebook.com"> Facebook</a></li>
					<li><a href="www.instagram.com"> Instagram</a></li>
					<li><a href="www.twitter.com"> Twitter</a></li>
				</div>
		</div>
	</div>
</footer>
<!--bottom box-->
<div class="col-sm-12" style="text-align: center;">
	<div class="container" >
	<h6 style="color:black; font-size: 10px;">
		@2018,PizzaLive International,LLC.All rights reserved.The PizzaLive name,logos and related marks are trademarks of PizzaLive,Inc.<br>
		Food shown are for illustration purpose only.Actual product may differ from the images shown in this website.Prices indicated may vary from store to store.
	</h6>
	<h5 style="color:black; font-size: 10px;">
		Order a delicious Pizza on the go,anywhere,anytime.PizzaLive is happy to asist you with your home delivery.Every time you order,you get a hot and fresh pizza delivered at your doorstep in less than thirty minutes.*T&C Apply.
		<br>
		Hurry up and place your order now!!
	</h5>
	</div>
	<?php include 'add-to-cart-choco-truffle-cake.php'; ?>
</body>
</html>
