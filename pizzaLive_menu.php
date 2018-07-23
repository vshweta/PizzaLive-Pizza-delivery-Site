<!DOCTYPE html>
<html>
<head>
	<title>PizzaLive Menu</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="main.css" rel="stylesheet" media="all">
  <style type="text/css">
	#footer{
	  margin-top: 50px;
	  background-color: #800000;
	  color: #FFFFFF;
	}
	#quantity{
	  margin-left: -23px;
	}
	#quantity-label{
	  margin-left: -25px;
	}

  	#jumbotron{
  		background: #800000;
  	}
  	#nav{
  		color: black;
  	}
	

	.button{
		display: inline-block;
		border-radius:  4px;
		background-color: #f4511e;
		border: none;
		color:#FFFFFF;
		text-align: center;
		font-size: 28px;
		padding: 20px;
		width: 300px;
		transition: all 0.5s;
		cursor: pointer;
		margin: 5px;
		height: 40px;
	}
	.button span{
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.5s;
	}
	.button span:after{
		content: '\00bb';
		position: absolute;
		opacity: 0;
		top: 0;
		right: -20px;
		transition: 0.5s;
	}
	.button:hover span{
		padding-right: 25px;

	}
	.button:hover span:after{
		opacity: 1;
		right: 0;
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
	<div class="container-fluid">
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
  </div>
</div>
</nav>
</header>
<!-- top navigation done-->
<section>
	<h2 style="text-align: center;"></h2>
	<div class="container-fluid">
	<div class="jumbotron" id="jumbotron">
		<h5 style="text-align: center; color: black;"><b><i>Think Pizza.Think PizzaLive<b><i></h5>
		<h6 style="text-align: center; color: black;"><b><i>An exotic touch or an Indian twist.Indulgence of paneer,chicken,cheese or abundance of fresh cut veggies.If you want it,our all new pizza range has got it!<b><i></h6>
		<h4 style="text-align: center; color: white;">SUPREME</h4>
	</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-xs-6 col-sm-2" style="color: black;">
				<h3 style="text-align: justify; color: black;">Veggie Supreme</h3>
            		<img src="pizza_images\supreme-veg1.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h5 style="text-align: justify; color: black;">Onion,Capsicum,Mushroom,<br>Red Paprika,Black Olives,<br>Sweet Corn.</h5>
            		<h6 style="text-align: justify; color: black;">SUPREME</h6>

            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 545/-</h3>
								<div id="">
            		<button type="button" class="collapsed btn btn-success"  >Add to Cart</button>
							</div>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Veg Exotica</h3>
            		<img src="pizza_images\veg-exotica.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SUPREME</h6>
            		<h5 style="text-align: justify; color: black;">Red Capsicum,Green Capsicum,<br>Baby Corn,Black Olives,Jalapenos.</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 545/-</h3>
            		<button type="button" class=" btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Paneer Soya Supreme</h3>
            		<img src="pizza_images\paneer-soya-supreme.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SUPREME</h6>
            		<h5 style="text-align: justify; color: black;">Spiced Paneer,Flavourful Masala<br> Soya Chunks,Capsicum,Onion,Red<br> Paprika!A Pizza Like Never Before.<h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 545/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Veggie Italiano</h3>
            		<img src="pizza_images\veggie-italiano.png" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SUPREME</h6>
            		<h5 style="text-align: justify; color: black;">Red Capsicum,Mushroom,<br>Jalapenos,Exotic Green & <br>Yellow Zucchini,Black Olive<h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 545/-</h3>
            		<button type="button" class="cart btn btn-success" >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Chicken Supreme</h3>
            		<img src="pizza_images\chicken-supreme.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SUPREME</h6>
            		<h5 style="text-align: justify; color: black;">Aromatic lebanese Chicken,<br>ScheZwan Chicken Meatball,<br>Chicken Tikka<h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 625/-</h3>
            		<button type="button" class="btn btn-success" >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Triple Chicken Feast</h3>
            		<img src="pizza_images\tripple-chicken-feast.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SUPREME</h6>
            		<h5 style="text-align: justify; color: black;">ScheZwan Meatball,Aromatic<br>Lebanese Chicken,Cheesy<br>Chicken Sausage,Capsicum,<br>Onion,Red Paprika<h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 625/-</h3>
            		<button type="button" class="cart btn btn-success" >Add to Cart</button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black; align-content: center;">
				<h3 style="text-align: justify; color: black;">Chicken Italiano</h3>
            		<img src="pizza_images\chicken-italiano.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SUPREME</h6>
            		<h5 style="text-align: justify; color: black;">Chicken Pepperoni,Chicken<br>Sausage,Mushroom,Capsicum,<br>Black Olives.<h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 625/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Chicken Exotica</h3>
            		<img src="pizza_images\chicken-exotica.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SUPREME</h6>
            		<h5 style="text-align: justify; color: black;">Smoked Chicken,Chicken<br>Pepperoni,Exotic Green & <br>Yellow Zucchini & Jalapenos.<h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 625/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Super Supreme Regular</h3>
            		<img src="pizza_images\super-supreme-regular.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SUPREME</h6>
            		<h5 style="text-align: justify; color: black;">Smoked Chicken,Chicken<br>Pepperoni,Mushroom,Capsicum <br>Yellow Zucchini & Jalapenos.<h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 625/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

		</div>
	</div>

	<div class="container">
		<h2 style="text-align: center; color: black;"><b>----SIGNATURE-----<b></h2>
		<div class="row">
			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Tandoori Paneer</h3>
            		<img src="pizza_images\tandoori-paneer-pizza.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SIGNATURE</h6>
            		<h5 style="text-align: justify; color: black;">Paneer,Onion,Capsicum<br>Red Paprika & Tomato.</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 515/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Veggie Lover</h3>
            		<img src="pizza_images\veggie-lover.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SIGNATURE</h6>
            		<h5 style="text-align: justify; color: black;">Onion,Capsicum,Mushroom<br>Tomato,Red Paprika.</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 515/-</h3>
            		<button  type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Country Feast</h3>
            		<img src="pizza_images\country-feast.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SIGNATURE</h6>
            		<h5 style="text-align: justify; color: black;">Onion,Capsicum,Mushroom<br>Sweet Corn,Tomato</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 515/-</h3>
            		<button type="button" class="cart btn btn-success"  data-target="#details-11">Add to Cart</button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Chicken Tikka</h3>
            		<img src="pizza_images\chicken-tikka.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SIGNATURE</h6>
            		<h5 style="text-align: justify; color: black;">Chicken Tikka,Onion,Tomato</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 515/-</h3>
            		<button type="button" class="cart btn btn-success"  data-target="#details-12">Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Chicken Sausage N Tikka</h3>
            		<img src="pizza_images\chicken-sausage.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SIGNATURE</h6>
            		<h5 style="text-align: justify; color: black;">Cheesy Chicken Sausage,<br>Chicken Tikka,Capsicum,<br>Jalapeno,Red Paprika.</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 515/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Smoked Chicken</h3>
            		<img src="pizza_images\smoked-chicken.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">SIGNATURE</h6>
            		<h5 style="text-align: justify; color: black;">Smoked Chicken,Jalapeno<br>Red Paprika</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 545/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>
		</div>
	</div>
	<div class="container">
		<h2 style="text-align: center; color: black;"><b>---FAVOURITES---<b></h2>
		<div class="row">
			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Double Cheese</h3>
            		<img src="pizza_images\double-cheese.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">FAVOURITE</h6>
            		<h5 style="text-align: justify; color: black;">Extra Cheese on cheese.</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 415/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Veggie Feast</h3>
            		<img src="pizza_images\veggie-feast.png" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">FAVOURITE</h6>
            		<h5 style="text-align: justify; color: black;">Capsicum,Onion,Sweet Corn</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 415/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Spiced Paneer</h3>
            		<img src="pizza_images\spiced-paneer.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">FAVOURITE</h6>
            		<h5 style="text-align: justify; color: black;">Onion,Spiced Paneer,Tomato</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 415/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Soya Masala</h3>
            		<img src="pizza_images\soya-masala.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">FAVOURITE</h6>
            		<h5 style="text-align: justify; color: black;">Masala Soya Chunk,Onion & Green Capsicum</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 515/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Chickeroni(Chicken Pepperoni)</h3>
            		<img src="pizza_images\chickeroni.png" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">FAVOURITE</h6>
            		<h5 style="text-align: justify; color: black;">Chicken Pepperoni,Cheese</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 515/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Spiced Chicken Meatballs</h3>
            		<img src="pizza_images\spiced-chicken-meatballs.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">FAVOURITE</h6>
            		<h5 style="text-align: justify; color: black;"></h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 515/-</h3>
            		<button type="button" class="cart btn btn-success"  data-target="#details-20">Add to Cart</button>
			</div>
		</div>
	</div>
	<div class="container">
		<h2 style="text-align: center;color: black;"><b>---CLASSIC---<b></h2>
		<div class="row">
			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Margherita</h3>
            		<img src="pizza_images\margherita.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">CLASSIC</h6>
            		<h5 style="text-align: justify; color: black;">Cheese</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 275/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Chicken Sausage Overloaded</h3>
            		<img src="pizza_images\chicken-sausage.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">CLASSIC</h6>
            		<h5 style="text-align: justify; color: black;">Cheese Sausage,Onion.</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 395/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Spicy Chicken Overloaded</h3>
            		<img src="pizza_images\spicy-chicken-overloaded.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">CLASSIC</h6>
            		<h5 style="text-align: justify; color: black;">Chicken Keema,Chicken Meatball,<br>Capsicum,Onion,Red Paprika.</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 359/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>
		</div>
	</div>
	<div class="container">
		<h2 style="text-align: center;color: black;"><b>---HAND TOSSED BIG PIZZA---</b></h2>
		<div class="row">
			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Paneer Overloaded</h3>
            		<img src="pizza_images\paneer-overloaded.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">HAND TOSSED BIG PIZZA</h6>
            		<h5 style="text-align: justify; color: black;">Paneer,Onion,Tomato,Corn.</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Big|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 329/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Veggie Overloaded</h3>
            		<img src="pizza_images\veggie-overloaded.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: black;">HAND TOSSED BIG PIZZA</h6>
            		<h5 style="text-align: justify; color: black;">Onion,Tomato,Sweet Corn,Jalapeno,Black Olive</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Big|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 279/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>

			<div class="col-lg-4 col-xs-6 col-sm-4" style="color: black;">
				<h3 style="text-align: justify; color: black;">Spice-Overloaded</h3>
            		<img src="pizza_images\spice-overloaded.jpg" style="height: 150px; width:150px; border: circle;"><br>
            		<h6 style="text-align: justify; color: v;">HAND TOSSED BIG PIZZA</h6>
            		<h5 style="text-align: justify; color: black;">Onion,Capsicuum,Paprika,Jalapeno</h5>
            		<h5 style="text-align: justify; color: black;"><b>Crust:</b>Pan|<b>Size:</b>Medium|</h5>
            		<h3 style="text-align: justify; color: black;">Rs 279/-</h3>
            		<button type="button" class="cart btn btn-success"  >Add to Cart</button>
			</div>
		</div>
	</div>
</section>
<!--footer-->
<br><br>
<footer>
	<div class="container" style="background-color: #800000;">
		<div class="row">


				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<ul style=" color: black;"><b>--Order--</b></ul>
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
					<li><a href="feedback_form.php">Give us Feedback</a></li>
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
</div>
</div>


</body>
</html>
