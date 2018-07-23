<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>pizzaLive Homepage</title>
  <style type="text/css">
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


  /*.navbar-toggle{
    margin-top: 20px;
      padding: 6px 6px !important;

  }
  */
 /* @media (min-width: 768px) {
  .navbar-nav > li > a {
    /* (80px - line-height of 27px) / 2 = 26.5px */
   /* padding-top: 20.5px;
    padding-bottom: 20.5px;
    padding-left: 17px;
    padding-right: 20px;
    line-height: 23px;
    column-gap: 60px;
    color: white;
    font-family:   Comic Sans MS;
    background-color: #073642;
  }

}*/
li{
  color: black;
}
li a{
  color: black;

}
li a:hover{
  color: blue;
}
h3,h4,h5,h6,h1,h2{
  color:black;
}
/*@media (max-width: 575.98px){
  .navbar-brand{
    width: 10%;
    height: 5%;
  }
 */

}
/*@media (min-width: 411px) and (max-width: 991px) {
    .navbar-collapse.collapse {
        display: none !important;
    }
    .navbar-collapse.collapse.in {
        display: block !important;
    }
    .navbar-header .collapse, .navbar-toggle {
        display:block !important;
    }
    .navbar-header {
        float:none;
    }
}
*/
 </style>

</head>
<body background="background\benitos.jpg" >


<!--<div class="content">
  <?php if (isset($_SESSION['success'])): ?>
    <div class="error success">
      <h3>
        <?php
          //echo $_SESSION['success'];
          unset($_SESSION['success']);
        ?>
      </h3>
    </div>
    <?php endif ?>
   -->

</div>

<nav class="navbar navbar-inverse " role="navigation">
  <div class="container-fluid">
    <div class="row">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="index.php"><img src="Homepage_images\logo.png" width="100px" height="100px"></a>
        </div>
   <div class="collapse navbar-collapse" id="navbar-collapse-main">
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="pizzaLive_menu.php">Pizza</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pizzaLive_drinks.php">Drinks</a></li>
          <li><a href="pizzaLive_desserts.php">Desserts</a></li>
          <li><a href="pizzaLive_magicpan.php">Magic Pan</a></li>
          <li><a href="pizzaLive_sides.php">Sides</a></li>
          <li><a href="pizzaLive_meals.php">Meals</a></li>
          <li><a href="pizzaLive_offers.php">Offers</a></li>
        </ul>
      </li>
      <li><a href="inside_pizzaLive.php">Inside PizzaLive</a></li>
      <li><a href="feedback_form.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      
       <?php if(isset($_SESSION["username"])): ?>
     <li> <h5 style="color: white; padding-top: 7px;"><i>  Welcome <?php echo $_SESSION['username']; ?>..!!</i></h5></li>
        <li><a href="index1.php?logout=1 ><span class="glyphicon glyphicon-log-in" "></span>Logout</a></li>
         <?php endif ?>
    </ul>
  </div>
</div>
</div></nav>
</div>
 <!--slideshows-->
<section>
 	<div class="container-fluid">
 	<!--<h2 style="text-align:center; color: white;">Pizza Starting at 99/- Only</h2>-->
  <br><br><br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="Homepage_images\images_slideshow\maxresdefault.jpg" alt="PizzaLiveOffers" style="width:100%;">
        <div class="carousel-caption">
          <h3>Veg Delights</h3>
          <p>Broccoli,mushroom,capsicum,onions,olives,garlic,mozzarella,tomato sauce, oregano & oil.</p>
        </div>
      </div>

      <div class="item">
        <img src="Homepage_images\images_slideshow\Pizza-Inside-A-Burger.jpg" alt="PizzaLiveOffers" style="width:100%;">
        <div class="carousel-caption">
          <h3>Burger Pizza</h3>
          <p>Looks like a burger tastes like a pizza. Fresh veggies with the goodness of wheat, baked to perfection</p>
        </div>
      </div>

      <div class="item">
        <img src="Homepage_images\images_slideshow\1802059.jpg" alt="PizzaLiveOffers" style="width:100%;">
        <div class="carousel-caption">
          <h3>Italiano</h3>
          <p>Ground beef ,onion, chedar cheese ,spicy barbecue ,tomato sauce, oregano & oil.</p>
        </div>
      </div>
  		<div class="item">
        <img src="Homepage_images\images_slideshow\photo2.jpg" alt="PizzaLiveOffers" style="width:100%;">
        <div class="carousel-caption">
          <h3>Colosseo</h3>
          <p>Tomoto sauce, mozzarella, garlic oil, spinach, artichokes, peas, onion, olives, oregano & oil.</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
<!--Article Part-->
<article>
	<div class="container">
		<section>
			<div class="uk-width-1-1">
				<div class="uk-panel uk-text-center">
					<div data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:300}">
						<h1 style="text-align: center;"><b><i>Come And Dine</i></b></h1>
					</div>
					<div data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:800}">
             			 <h3 style="text-align: center;"><b><i> with the finest</i></b></h3>
            		</div>
            		<br>
            		<div class="row">
            			<div class="col-md-4 col-sm-4 col-xs-12">
            				<div class="uk-text-center" style="color: black;">
            					<h3 class="uk-margin-bottom">Italiano</h3>
            					<img src="Homepage_images\italiano.jpg" style="height: 150px; width:150px; border: circle;"><br>
            					Ground Beef,onion,chedar<br> cheese,spicy barbeque,<br>tomato sauce,oregano & oil
            				</div>
            			</div>
            			<div class="col-md-4 col-sm-4 col-xs-12">

            					<div class="uk-text-center" style="color: black;">
            						<h3 class="uk-margin-bottom">Insalata Venezia</h3>
            						<img src="Homepage_images\Insalata Venezia.jpg" style="height: 150px; width:150px; border: circle;"><br>
            						Fresh rocket leaves,topped with sundried<br> tomato,sauteed mushroom & sweet roasted<br> peppers, feta cheese, pine kernels, served<br> with a balsamic dressing
            					</div>

            			</div>
            			<div class="col-md-4 col-sm-4 col-xs-12">
            				<div class="uk-text-center" style="color: black;">
            					<h3 class="uk-animation-slide-bottom uk-margin-bottom">Spaghetti Gamberetti</h3>
            					<img src="Homepage_images\Spaghetti-Gamberetti.jpg" style="height: 150px; width:150px; border: circle;"><br>
            					Sumptuous delicious food <br>baked in our restaurants with<br> curated ingredients and recipes
            				</div>
            			</div>
            		</div>

            		</div><div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="uk-text-center" style="color: black;">
                      <h3 class="uk-margin-bottom">Veg Pizza</h3>
                      <img src="Homepage_images\veg-pizza.jpg" style="height: 150px; width:150px; border: circle;"><br>
                      A delight for veggie lovers! <br>Choose from our wide range <br>of delicious vegetarian pizzas,<br>
                       it's softer and tastier
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="uk-text-center" style="color: black;">
                      <h3 class="uk-margin-bottom">Non-Veg Pizza</h3>
                      <img src="Homepage_images\non-veg-pizza.jpg" style="height: 150px; width:150px; border: circle;"><br>
                      Choose your favourite non-veg pizzas <br>from the PizzaLive Pizza menu. Get <br>fresh non-veg pizza with your choice <br>of crusts  & toppings
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="uk-text-center" style="color: black;">
                      <h3 class="uk-margin-bottom">Pizza Mania</h3>
                      <img src="Homepage_images\pizza-mania.png" style="height: 150px; width:150px; border: circle;"><br>
                      Indulge into mouth-watering taste<br> of Pizza mania range, perfect answer<br> to all your food cravings
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="uk-text-center" style="color: black;">
                      <h3 class="uk-margin-bottom">Burger Pizza</h3>
                      <img src="Homepage_images\burger-pizza.png" style="height: 150px; width:150px; border: circle;"><br>
                      Looks like a burger tastes like<br> a pizza. Fresh veggies with <br>the goodness of wheat, baked <br>to perfection
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="uk-text-center" style="color: black;">
                      <h3 class="uk-margin-bottom">Sides & Beverages</h3>
                      <img src="Homepage_images\sides&beverages.png" style="height: 150px; width:150px; border: circle;"><br>
                      Complement your pizza with<br> wide range of sides & beverages<br> available at Domino's Pizza India
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="uk-text-center" style="color: black;">
                      <h3 class="uk-margin-bottom">Speciality Chicken</h3>
                      <img src="Homepage_images\chicken.png" style="height: 150px; width:150px; border: circle;"><br>
                      Tender, juicy, melt-in-mouth, a <br>whole new range of drool-worthy<br> boneless chicken and chicken <br>wings that are tossed in exotic,<br> international flavours
                    </div>
                  </div>
				</div>
			</div>
		</section>
	</div>

</article>

<footer>
  <div class="container" style="background-color: #800000">
    <div class="row">


        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
          <ul style=" color: black;"><b>Order</b></ul>
          <li><a href="pizzaLive_menu.php"> Pizza</a></li>
          <li><a href="pizzaLive_sides.php">Sides</a></li>
          <li><a href="pizzaLive_meals.php">Meals</a></li>
          <li><a href="pizzaLive_drinks.php">Drinks</a></li>
          <li><a href="pizzaLive_desserts.php">Desserts</a></li>
          <li><a href="pizzaLive_magicpan.php">Magic Pan</a></li>
          <li><a href="pizzaLive_offers.php">Offers</a></li>
        </div>


        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
          <ul style=" color: black;"><b>Visit PizzaLive</b></ul>
          <li><a href="locate_a_store.php" id="myModal"> Locate a Store</a></li>
          <li>SiteMap</li>
          <li><a href="global_blog.php">global Blog</a></li>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
          <ul style=" color: black;"><b>PizzaLive In India</b></ul>
          <li><a href="inside_pizzaLive.php" >About Us</a></li>
          <li><a href="nutrition.php">Nutrition</a></li>
          <li><a href="tnc.php">Terms And Conditions</a></li>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
          <ul style=" color: black;"><b>Order Pizza In</b></ul>
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
          <ul style=" color: black;"><b>Connect With PizzaLive</b></ul>
          <li><a href="feedback_form.php">Give Us Feedback</a></li>
          <li><a href="login.php">Sign In</a></li>
          <li><a href="register.php"> Register</a></li>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
          <ul style=" color: black;"><b>Follow Us</b></ul>
          <li>Facebook</li>
          <li>Instagram</li>
          <li>Twitter</li>
        </div>
    </div>
  </div>
</footer>
<div class="col-xs-12 bottom-box" style="font-size: 10px;">
  All rights reserved.Copyright @ YMCAUST StudyMaterials Ltd.<a href="tnc.php" title="disclaimer">Disclaimer</a>|<a  href="tnc.php" title="T&C">Terms And Conditions</a>|<a href="tnc.php" title="PrivacyPolicy">Privacy Policy</a>
</div>

</body>
</html>
