<!DOCTYPE html>
<html>
<head>
	<title>Inside PizzaLive</title>
</head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  html {
  font-size: 1rem;
}

@include media-breakpoint-up(sm) {
  html {
    font-size: 1.2rem;
  }
}

@include media-breakpoint-up(md) {
  html {
    font-size: 1.4rem;
  }
}

@include media-breakpoint-up(lg) {
  html {
    font-size: 1.6rem;
  }
}

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
<body background="background\benitos.jpg">
	<div class="container-fluid">
		<header class="grid-collapse">
	<nav class="navbar navbar-inverse nav navbar-custom">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="Homepage_images\logo.png" width="110px" height="110px" alt="PizzaLive"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="pizzaLive_menu.php">Pizza</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
        <ul class="dropdown-menu" >
          <li><a href="pizzaLive_drinks.php">Drinks</a></li>
          <li><a href="pizzaLive_desserts.php">Desserts</a></li>
          <li><a href="pizzaLive_magicpan.php">Magic Pan</a></li>
          <li><a href="pizzaLive_sides.php">Sides</a></li>
          <li><a href="pizzaLive_sides.php">Meals</a></li>
          <li><a href="pizzaLive_sides.php">Offers</a></li>
        </ul>
      </li>
      <li><a href="inside_pizzaLive.php">Inside PizzaLive</a></li>
      <li><a href="feedback_form.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right" >
      <li ><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li ><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</header>
<section>
<br><br>
	<img src="inside_PizzaLive\display.jpg" width="100%" height="50%" style="backface-visibility:  0.7;">
</section>
<br>
<article style="text-align: justify;" >

		<div class="jumbotron">
			<p>
		"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."<br>
       "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
</div>
</article>
<br><br><br><br><br>
<!--footer-->
<footer>
	<div class="container" style="background-color: #800000">
		<div class="row">


				<div class="col-lg-2 col-sm-2">
					<ul style=" color: black;">Order</ul>
					<li><a href="pizzaLive_menu.php"> Pizza</a></li>
					<li><a href="pizzaLive_sides.php">Sides</a></li>
					<li><a href="pizzaLive_meals.php">Meals</a></li>
					<li><a href="pizzaLive_drinks.php">Drinks</a></li>
					<li><a href="pizzaLive_desserts.php">Desserts</a></li>
					<li><a href="pizzaLive_magicpan.php">Magic Pan</a></li>
					<li><a href="pizzaLive_offers.php">Offers</a></li>
				</div>


				<div class="col-lg-2 col-sm-2">
					<ul style=" color: black;">Visit PizzaLive</ul>
					<li><a href="locate_a_store.php" id="myModal">Locate a Store</a></li>
					<li>SiteMap</li>
					<li><a href="global_blog.php">global Blog</a></li>
				</div>

				<div class="col-lg-2 col-sm-2">
					<ul style=" color: black;">PizzaLive In India</ul>
					<li><a href="inside_pizzaLive.php">About Us</a></li>
					<li><a href="nutrition.php">Nutrition</a></li>
					<li><a href="tnc.php">Terms And Conditions</a></li>
				</div>
				<div class="col-lg-2 col-sm-2">
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
				<div class="col-lg-2 col-sm-2">
					<ul style=" color: black;">Connect With PizzaLive</ul>
					<li><a href="feedback_form.php">Give Us Feedback</a></li>
					<li><a href="login.php">Sign IN</a></li>
					<li><a href="register.php">Register</a></li>
				</div>
				<div class="col-lg-2 col-sm-2">
					<ul style=" color: black;">Follow Us</ul>
					<li><a href="www.facebook.com"> Facebook</a></li>
					<li><a href="www.Instagram"> Instagram</a></li>
					<li><a href="www.twitter.com"> Twitter</a></li>
				</div>
		</div>
	</div>
</footer>
<!--bottom box-->
<div class="col-sm-12" style="text-align: center;">
	<div class="container" >
	<h6 style="color:black; font-size: 10px;">
		@2018,PizzaLive International, &copy Shweta.All rights reserved.The PizzaLive name,logos and related marks are trademarks of PizzaLive,Inc.<br>
		Food shown are for illustration purpose only.Actual product may differ from the images shown in this website.Prices indicated may vary from store to store.This product is made for educational purpose.
	</h6>
	<h5 style="color:black; font-size: 10px;">
		Order a delicious Pizza on the go,anywhere,anytime.PizzaLive is happy to asist you with your home delivery.Every time you order,you get a hot and fresh pizza delivered at your doorstep in less than thirty minutes.*T&C Apply.
		<br>
		Hurry up and place your order now!!
	</h5>
	</div>

	</div>

</body>
</html>