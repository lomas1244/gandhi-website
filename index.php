<?php

$to_mail = "bookings@gandhirestaurant.co.uk";
if ($_POST["submit"]) {

         if (!$_POST['form-first-name']) {

             $error="<br />Please enter your name";

         }

         if (!$_POST['form-surname']) {

             $error="<br />Please enter your surname";

         }

         if (!$_POST['form-email']) {

             $error.="<br />Please enter your email address";

         }

         if (!$_POST['form-mobile']) {

             $error.="<br />Please enter your mobile";

         }

         if (!$_POST['form-guests']) {

             $error.="<br />Please enter number of guests";

         }

         if (!$_POST['date-input']) {

             $error.="<br />Please enter date";

         }

         if (!$_POST['form-time']) {

             $error.="<br />Please enter time";

         }

         if (!$_POST['form-reservation']) {

             $error.="<br />Please enter reservation";

         }

         if ($error) {

			 $result='<div class="alert alert-danger">
			    <strong>
			        There were error(s)
			        in your form:
			    </strong>'.$error.'
			</div>';

         } else {

		 if (mail($to_mail, "Reservation", "First Name: ".
			$_POST['form-first-name']."

			 Surname: ".$_POST['form-surname']."
			 Email: ".$_POST['form-email']."
			 Mobile: ".$_POST['form-mobile']."
			 Guests: ".$_POST['form-guests']."
			 Date: ".$_POST['date-input']."
			 Time: ".$_POST['form-time']."

			 Reservation: ".$_POST['form-reservation'])) {

			 $result='<div class="alert alert-success">
			    <strong>
			        Thank
			        you!
			    </strong> We\'ll be in touch.
			</div>';

		 } else {

			 $result='<div class="alert alert-danger">
			    Sorry, there was
			    an error sending your message. Please try again later.
			</div>';

		 }

 	}

 }

?>
<!DOCTYPE html>
<html lang="en" class="gr__getbootstrap_com">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Description" content="The Gandhi Restaurant Portsmouth is a family business established in 1979, making it the longest functioning Indian and Bengali cuisine supplier in the city. Utilising locally-sourced fresh produce combined with authentic Indian and Bengali spices to create the real taste of the region.">
  <meta name="Author" content="James Lomas">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Gandhi &middot; Portsmouth</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/gandhi-images/gandhi-favicon.gif">

  <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


  <!-- Custom styles for this template -->
  <link href="css/main.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">

  <style>
    h2 {
      text-shadow: 2px 2px 8px #000000;
    }
    
    .button {
      -webkit-transition-duration: 0.4s;
      transition-duration: 0.4s;
    }
    
    .button:hover {
      background-color: #f3c34e;
      color: white;
    }
    
    *,
    *:after,
    *:before {
      box-sizing: border-box;
    }
    
    // clear all the things
    @mixin clearfix() {
      &:after,
      &:before {
        display: table;
        content: " ";
        line-height: 0;
        font-size: 0;
        clear: both;
      }
    }
    
    // a little scaffolding...
    .container {
      @include clearfix;
      width: 50%;
      margin: 1em auto;
      border: 1px solid #ddd;
      padding: .3em .6em;
      p {
        font-size: .9em;
        color: #777;
        margin-bottom: 0.2em;
        font-style: italic;
      }
    }
    
    .group-header {
      float: right;
      font-weight: 700;
      width: 20%;
      margin: .4em 0 1em 0;
      span {
        float: left;
        width: 50%;
        text-align: center;
        display: block;
      }
    }
    
    h3 {
      @include clearfix;
      position: relative;
      font-weight: 700;
      margin: 0.8em 0 0.4em 0;
      span {
        float: left;
        width: 10%;
        text-align: center;
        display: block;
        &:first-child {
          width: 40%;
          text-align: left;
        }
      }
    }
    
    .gallery {
      position: relative;
      overflow: scroll;
    }
    
    .gallery .movable {
      display: flex;
      height: 60vh;
      transition: transform 0.4s;
    }
    
    .gallery .movable>div {
      flex: 1;
      min-width: 100%;
    }
  </style>


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container nav-container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
          aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.html"><img src="img/gandhi-images/gandhi-Logo.gif" id="gandhi-logo"></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li class="page-scroll">
            <a href="#whats-on">What's on</a>
          </li>
          <li class="page-scroll">
            <a href="#menu">Menu</a>
          </li>
          <li class="page-scroll">
            <a href="https://hungryhouse.co.uk/gandhi-portsea-island#menu">Order online</a>
          </li>
          <li>
            <form class="form-inline page-scroll">
              <a href="#booking"><button id="sign-in-btn" class="button btn btn-outline-success book-now-btn page-scroll" type="button">Book Now</button></a>
            </form>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>


  <section id="intro" class="carousel-header">
    <!-- Section 1 -->

    <!-- Mobile Diplay -->

    <div id="mobile-header" style="display: none;" class="page-divider">
      <div id="top-para" class="parallax">
        <div class="container page-scroll">
          <h2 class="mid-header mobile-header">Authentic flavours from the heart of India</h2>
          <p class="mobile-header-btn text-center">
            <a href="https://hungryhouse.co.uk/gandhi-portsea-island#menu"><button id="gandhi-btn-1" type="button" class="btn btn-primary btn-lg page-scroll">Takeaway</button></a>
            <a href="#booking"><button id="gandhi-btn-2" type="button" class="btn btn-primary btn-lg">Bookings</button></a>
          </p>
        </div>
      </div>
    </div>

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
          <img src="img/gandhi-images/gandhi-background-black.gif" alt="Fresh ingredients">
          <div class="carousel-caption">
            <h3 class="slide-title">Fresh ingredients, prepared by our experts</h3>
            <p>Our ingredients are sourced freshly each day and prepared by our award-winning head chef. Ready yourself for
              a journey of irresistable flavour.</p>
          </div>
        </div>

        <div class="item">
          <img src="img/gandhi-images/gandhi-background-4-black.gif" alt="Great tasting food">
          <div class="carousel-caption">
            <h3 class="slide-title">An experience founded from family tradition</h3>
            <p>Our service and welcoming atmosphere is derived from our family tradition, that was first implemented in the
              Gandhi Restaurant by our father in 1979.</p>
          </div>
        </div>

        <div class="item">
          <img src="img/gandhi-images/gandhi-background-3-black.gif" alt="Authentic indian flavours">
          <div class="carousel-caption">
            <h3 class="slide-title">Authentic flavours from the heart of India</h3>
            <p>Our menu has been evolving for over 3 decades. Our inspiration comes from our heritage and our experience across
              Indian cuisine.</p>
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
  <!-- End Section 1 -->


  <section id="whats-on">
    <!-- Section 2 -->
    <div class="container">
      <div class="col-sm-12">
        <?php 

      echo $result;

      ?>

      </div>
      <h2 class="section-title">What's On</h2>
      <div class="row card-row">
        <div class="col-md-4">
          <div class="card">
            <div>
              <img class="card-img-top" src="img/gandhi-images/gandhi-c1.gif" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4 class="card-title">Corporate Events</h4>
              <p class="card-text">The Gandhi Restaurant is the perfect setting for a business event. We cater for all events such as private
                meetings and large parties.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/gandhi-images/gandhi-c2.gif" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Special Occasions</h4>
              <p class="card-text">Celebrate your special occasion in a relaxing and luxurious atmosphere. Our team will be happy to help you
                arrange your perfect experience.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/gandhi-images/gandhi-c3.gif" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Family Friendly</h4>
              <p class="card-text">The Gandhi Restaurant is built on family tradition, as such we welcome families into our friendly environment.
                All ages can enjoy the Gandhi experience!</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- End Section 2 -->


  <section>
    <!-- Section 3 -->
    <div class="page-divider">
      <div id="middle-para" class="parallax">
        <div class="container">
          <h2 class="mid-header large-header">The finest indian cuisine in portsmouth since 1979.</h2>
          <h2 style="display: none;" class="mid-header small-header">The finest indian cuisine in portsmouth since 1979.</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section 3 -->


  <section id="menu">
    <!-- Section 4 -->
    <!-- Gandhi menu in-house -->

    <div id="gandhi-menu" class="container">
      <h2 class="menu-title">Menu</h2>
      <div style="border-style: solid; border-color: #151515; border-width: 1px; padding-top: 10px; padding-bottom: 50px; margin-bottom: 50px;"
        class="gallery">
        <div class="row">
          <div style="margin-left: 10px;" class="container">
            <p style="font-size: 12px; margin: 10px 0 0 0;">next/prev page</p>
            <button class="prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
            <button class="next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
          </div>
          <div class="movable">

            <div id="Starters" class="menu-container">
              <div style="margin-left: 20px;">
                <h4 style="font-family: 'Rock Salt', cursive; color: #151515; text-shadow: 2px 2px 8px #fff;">Starters</h4>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Onion Bhaji</span>
                      <span><img style="width: 20px;" src="img/gandhi-images/gandhi-veg-item.png"></span>
                      <span><br>£3.95</span>
                    </h3>
                    <p>Contains eggs, flour, herbs and spices.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Paneer</span>
                      <span><img style="width: 20px;" src="img/gandhi-images/gandhi-veg-item.png"></span>
                      <span><br>£4.95</span>
                    </h3>
                    <p>Grilled vegetarian Indian cheese served with pieces of tomato and onions.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Pani Puri</span>
                      <span><img style="width: 20px;" src="img/gandhi-images/gandhi-veg-item.png"></span>
                      <span><br>£4.95</span>
                    </h3>
                    <p>Popular appetiser prepared with chick peas, onions and potatoes, parcelled in small crusty puris then
                      topped with yoghurt and tangy tamarind sauce.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Subji Pakora Misali</span>
                      <span><img style="width: 20px;" src="img/gandhi-images/gandhi-veg-item.png"></span>
                      <span><br>£4.95</span>
                    </h3>
                    <p>Pieces of aubergine, potato, cauliflower &amp; Spinach, crispy deep-fried fritters.</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Chicken, Lamb, or Prawn Bhuna &amp; Puri</span>
                      <span></span>
                      <span><br>£5.50</span>
                    </h3>
                    <p>Medium spiced served on a deep fried bread, Puri contains egg, flour and sesame seeds.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Chicken Chat &amp; Puri</span>
                      <span></span>
                      <span><br>£5.50</span>
                    </h3>
                    <p>Diced chicken cooked with cucumber in tangy spicy sauce, Puri contains egg, flour &amp; sesame seeds
                      served on thin fried bread.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Chicken or Lamb Tikka</span>
                      <span></span>
                      <span><br>£4.95</span>
                    </h3>
                    <p>Tender pieces of chicken or filleted lamb marinated in yoghurt, ground cumin, and medium spices, then
                      roasted in the clay oven. Marinated in mustard paste, gram flour, yoghurt &amp; soya.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Badami Chicken or Lamb Tikka</span>
                      <span></span>
                      <span><br>£5.50</span>
                    </h3>
                    <p>Satay Chicken Tikka &#40;peanut sauce&#41;</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Sheek Kebab</span>
                      <span></span>
                      <span><br>£4.95</span>
                    </h3>
                    <p>The traditional skewer of finey minced lamb delicately flavoured with fresh coriander and mixed spices.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Hush Tikka</span>
                      <span></span>
                      <span><br>£5.50</span>
                    </h3>
                    <p>Succulent pieces of prime Duck. Contains mustard paste, gram flour, yoghurt and soya.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Mixed Kebab</span>
                      <span></span>
                      <span><br>£5.95</span>
                    </h3>
                    <p>Pieces of Chicken Tikka, Lamb Tikka and Sheek Kebab, marinated in mustard paste, gram flour, yoghurt
                      &amp; soya.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Mangsho Daka Dim</span>
                      <span></span>
                      <span><br>£5.50</span>
                    </h3>
                    <p>Whole egg coated with minced lamb, egg &amp; flour.</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Grilled Lamb Chops</span>
                      <span></span>
                      <span><br>£5.95</span>
                    </h3>
                    <p>Marinated in garlic, herbs and olive oil.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Prawn Cockatil</span>
                      <span></span>
                      <span><br>£4.95</span>
                    </h3>
                    <p>Contains shellfish.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Squid Amritsari</span>
                      <span></span>
                      <span><br>£4.95</span>
                    </h3>
                    <p>Light garlic-flavoured batter, deep-fried. Served with salad and sauce.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Crab Malibar</span>
                      <span></span>
                      <span><br>£5.50</span>
                    </h3>
                    <p>Crab meat prepared with onions, green peppers and potato, coated with egg.</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Grilled Sea Bass or Salmon</span>
                      <span></span>
                      <span><br>£5.95</span>
                    </h3>
                    <p>Mouth watering fillet of Sea Bass matured in a rich spicy marinade of coriander, garlic and trace of
                      olive oil, then delicately grilled.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>King Prawn Suka</span>
                      <span></span>
                      <span><br>£6.95</span>
                    </h3>
                    <p>Two whole succulent King Prawns marinated in coriander, garlic and medium spices, then grilled until
                      tender and golden.</p>
                  </div>

                </div>
              </div>

            </div>

            <div id="Traditional-dishes" class="menu-container">
              <div style="margin-left: 20px;">
                <h4 style="font-family: 'Rock Salt', cursive; color: #151515; text-shadow: 2px 2px 8px #fff;">Traditional Dishes</h4>
                <p style="font-size: 12px;">The following can be prepared with Vegetable, Chicken or Lamb, Tiger Prawns. Rice not included <br> Add
                  £1.00 for Chicken, Lamb or Lamb Tikka <br> Add £4.00 for King Prawn</p>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Curry, Madras, or Vindaloo</span>
                      <span></span>
                      <span><br>£7.95</span>
                    </h3>
                    <p>The original medium, fairly hot dish.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Korma</span>
                      <span></span>
                      <span><br>£7.95</span>
                    </h3>
                    <p>Rich, creamy, and mild with coconut &amp; almond.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Bhuna</span>
                      <span></span>
                      <span><br>£7.95</span>
                    </h3>
                    <p>Thick sauce, medium spice.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Rogon</span>
                      <span></span>
                      <span><br>£7.95</span>
                    </h3>
                    <p>Fresh tomatoes &amp; green peppers.</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Dupiaza</span>
                      <span></span>
                      <span><br>£7.95</span>
                    </h3>
                    <p>Cubed onions &amp; tomatoes.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Korai</span>
                      <span></span>
                      <span><br>£8.95</span>
                    </h3>
                    <p>Tomatoes, onions &amp; green peppers.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Balti</span>
                      <span></span>
                      <span><br>£8.95</span>
                    </h3>
                    <p>Highly flavoured with medium spice.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Jalfrezi</span>
                      <span></span>
                      <span><br>£8.95</span>
                    </h3>
                    <p>Cooked with green chillies, cubed onions, green peppers, and yoghurt. Hot.</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Garlic Chilli Chicken or Lamb</span>
                      <span></span>
                      <span><br>£8.95</span>
                    </h3>
                    <p>Fresh garlic and green chillies. Hot.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Dansak</span>
                      <span></span>
                      <span><br>£8.95</span>
                    </h3>
                    <p>Cooked in lentils with a sweet and sour taste. Fairly hot.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Patia</span>
                      <span></span>
                      <span><br>£8.95</span>
                    </h3>
                    <p>Cooked with onions with sweet &amp; sour taste. Fairly hot.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Kashmir</span>
                      <span></span>
                      <span><br>£8.95</span>
                    </h3>
                    <p>Fruity dish with pineapple, lychee &amp; banana.</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Chicken or Lamb Tikka Masssala.</span>
                      <span></span>
                      <span><br>£8.95</span>
                    </h3>
                    <p>One of the all-time favourites marinated with mustard paste, gram flour, yoghurt and soya.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Chicken or Lamb Pasanda</span>
                      <span></span>
                      <span><br>£8.95</span>
                    </h3>
                    <p>Mild. Marinated with mustard paste, gram flour, yoghurt and soya.</p>
                  </div>

                </div>
              </div>

            </div>

            <div id="Sizzlers" class="menu-container">
              <div style="margin-left: 20px;">
                <h4 style="font-family: 'Rock Salt', cursive; color: #151515; text-shadow: 2px 2px 8px #fff;">Tandoori Sizzlers</h4>
                <p style="font-size: 12px;">The following dishes are prepared and marinated with yoghurt, mustard paste, gram flour, soya, ground cumin
                  and medium spices then roasted in the clay oven. Served with salad &amp; mint sauce.</p>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Chicken Tikka</span>
                      <span></span>
                      <span><br>£9.95</span>
                    </h3>
                    <p></p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Lamb Tikka</span>
                      <span></span>
                      <span><br>£10.95</span>
                    </h3>
                    <p></p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Hush Tikka</span>
                      <span></span>
                      <span><br>£11.95</span>
                    </h3>
                    <p>Succulent pieces of prime Duck.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Chicken Shaslik</span>
                      <span></span>
                      <span><br>£10.95</span>
                    </h3>
                    <p>Grilled with onions, tomatoes and green peppers.</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Lamb Shaslik</span>
                      <span></span>
                      <span><br>£11.95</span>
                    </h3>
                    <p>Grilled with onions, tomatoes and green peppers.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Tandoori Chicken</span>
                      <span></span>
                      <span><br>£9.95</span>
                    </h3>
                    <p>Half chicken on the bone.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Tandoori Mixed Grill</span>
                      <span></span>
                      <span><br>£13.95</span>
                    </h3>
                    <p>Piece of Chicken Tikka, Lamb Tikka, Hush Tikka, Tandoori Chicken and Sheek Kebab.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Tandoori King Prawn</span>
                      <span></span>
                      <span><br>£14.95</span>
                    </h3>
                    <p>Succulent fresh-water whole King Prawns grilled to perfection.</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="Biriani" class="menu-container">
              <div style="margin-left: 20px;">
                <h4 style="font-family: 'Rock Salt', cursive; color: #151515; text-shadow: 2px 2px 8px #fff;">Dum Ka Biriani</h4>
                <p style="font-size: 12px;">The finest Basmati rice cooked in authentic style topped with whole boiled egg. Served in Indian pot with
                  vegetable curry side-dish.</p>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Vegetable Biriani</span>
                      <span></span>
                      <span><br>£9.95</span>
                    </h3>
                    <p>Please mention if egg is not required.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Chicken, or Tiger Prawn Biriani</span>
                      <span></span>
                      <span><br>£9.95</span>
                    </h3>
                    <p></p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Lamb Biriani</span>
                      <span></span>
                      <span><br>£10.95</span>
                    </h3>
                    <p></p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Chicken Tikka Biriani</span>
                      <span></span>
                      <span><br>£10.95</span>
                    </h3>
                    <p>Marinated with mustard paste, gram flour, yoghurt and soya.</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Lamb Tikka Biriani</span>
                      <span></span>
                      <span><br>£11.95</span>
                    </h3>
                    <p>Marinated with mustard paste, gram flour, yoghurt and soya.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Mixed Biriani</span>
                      <span></span>
                      <span><br>£12.95</span>
                    </h3>
                    <p>Chicken, Lamb, and Tiger Prawns.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>King Prawn Biriani</span>
                      <span></span>
                      <span><br>£13.95</span>
                    </h3>
                    <p></p>
                  </div>


                </div>
              </div>
            </div>

            <div id="Speciality" class="menu-container">
              <div style="margin-left: 20px;">
                <h4 style="font-family: 'Rock Salt', cursive; color: #151515; text-shadow: 2px 2px 8px #fff;">Specialities</h4>
                <p style="font-size: 12px;">All specialities are served with seasonal vegetables and Pilau rice.</p>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Thali</span>
                      <span></span>
                      <span><br>£15.95</span>
                    </h3>
                    <p>A traditional dish consisting of compartments of assorted dishes with various flavours. Served with
                      rice &amp; nan.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Satha Chicken</span>
                      <span></span>
                      <span><br>£12.95</span>
                    </h3>
                    <p>Portebello mushroom stuffed with medium spiced minced chicken.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Grilled Lamb Chops</span>
                      <span></span>
                      <span><br>£14.95</span>
                    </h3>
                    <p>Served sizzling on a bed of sauteed onions &amp; peppers.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Grilled Sea Bass</span>
                      <span></span>
                      <span><br>£15.95</span>
                    </h3>
                    <p>Mouth-watering fillets of Sea Bass matured in a rich spicy marinade of coriander, garlic and trace
                      of olive oil then delicately grilled. Served with medium sauce.</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Grilled Salmon</span>
                      <span></span>
                      <span><br>£14.95</span>
                    </h3>
                    <p>Mouth-watering fillet of Salmon matured in a rich spicy marinade of coriander, garlic and trace of
                      olive oil then delicately grilled. Served with medium sauce.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>King Prawn Flambay</span>
                      <span></span>
                      <span><br>£15.95</span>
                    </h3>
                    <p>Whole succulent King Prawns cooked in a rich sauce with green peppers and green chillies, flamed with
                      Sambuca. Served sizzling.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Seafood Platter</span>
                      <span></span>
                      <span><br>£15.95</span>
                    </h3>
                    <p>Piece of Salmon, fillet of Sea Bass, King Prawn &amp; Scallops served with medium sauce.</p>
                  </div>


                </div>
              </div>
            </div>

            <div id="Regional" class="menu-container">
              <div style="margin-left: 20px;">
                <h4 style="font-family: 'Rock Salt', cursive; color: #151515; text-shadow: 2px 2px 8px #fff;">Regional Dishes</h4>
                <p style="font-size: 12px;">The following can be prepared with vegetable, chicken, lamb or tiger prawns. Rice is not included.<br>Add
                  £1.00 for lamb<br>Add £4.00 for king prawn.</p>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Chom Chom Chicken</span>
                      <span></span>
                      <span><br>£9.95</span>
                    </h3>
                    <p>Cooked in creamy coconut and almond sauce with sweet mango.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Roshun Mirchi Chat</span>
                      <span></span>
                      <span><br>£9.95</span>
                    </h3>
                    <p>Distinctive tangy flavour with garlic, green chilli &amp; chat spices. Hot.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Hill Station Chicken</span>
                      <span></span>
                      <span><br>£9.95</span>
                    </h3>
                    <p>Honey and lime spiced. Medium.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Rajesthani</span>
                      <span></span>
                      <span><br>£9.95</span>
                    </h3>
                    <p>Cooked with chillies, spinach and coconut milk, with a hint of mint. Fairly hot.</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Rajesthani Salmon or Sea Bass</span>
                      <span></span>
                      <span><br>£12.95</span>
                    </h3>
                    <p>Mouth-watering fillet of Salmon or Sea Bass delicately grilled.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Goan</span>
                      <span></span>
                      <span><br>£9.95</span>
                    </h3>
                    <p>Cooked in red Goan crushed chillies, coconut milk, garlic &amp; coriander. Fairly hot.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Goan Salmon or Sea Bass</span>
                      <span></span>
                      <span><br>£!2.95</span>
                    </h3>
                    <p>Piece of Salmon, fillet of Sea Bass, King Prawn &amp; Scallops served with medium sauce.</p>
                  </div>

                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Sylhet</span>
                      <span></span>
                      <span><br>£9.95</span>
                    </h3>
                    <p>Cooked in a special blend of spices and Bangladeshi Naga Chillies. Fairly hot.</p>
                  </div>


                </div>
              </div>
              <div class="container">
                <div style="margin: 0 10px 0 10px;" class="row">
                  <div class="col-sm-3 menu-item">
                    <h3>
                      <span>Darjeeling</span>
                      <span></span>
                      <span><br>£9.95</span>
                    </h3>
                    <p>Cooked in cubed onions, green peppers, garlic, green chillies, and fresh tomatoes. A little dry but
                      superb. Hot served with separate madras sauce.</p>
                  </div>


                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>



    <!-- End of Gandhi menu -->

  </section>
  <!-- End Section 4 -->


  <section>
    <!-- Section 5 -->
    <div class="gandhi-divider">
      <div class="container">
        <div class="row">

          <div class="col-sm-4 col-md-offset-1">
            <div class="card">
              <div class="card-block">
                <h4 id="location-header" class="card-title">Made a booking? This is where to find us.</h4>
                <p id="location-paragraph" class="card-text">Here you can find our opening times and location. We look forward to welcoming you.</p>

                <table class="table table-striped">
                  <thead>
                    <tr style="color: #ffffff;">
                      <th>Opening Hours</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Mon-Thurs</th>
                      <td>5pm-11.30pm</td>
                    </tr>
                    <tr>
                      <th style="color: #ffffff;" scope="row">Fri-Sat</th>
                      <td style="color: #ffffff;">5pm-12am</td>
                    </tr>
                    <tr>
                      <th scope="row">Sun</th>
                      <td>5pm-11.30pm</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-offset-1 location-map">
            <iframe width="400" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAs2aeUa6sQN6MIg3LabTTlTM--QbKwk8M&q=139-141+Kingston Rd,Portsmouth+PO2+7EB"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- End Section 5 -->


  <section id="booking">
    <!-- Section 6 -->

    <div style="display: none;" class="container small-form">
      <div class="col-xs-10 col-xs-offset-1 col-md-11">
        <form>
          <div style="padding-bottom: 50px;" class="row">
            <h2 class="booking-title">Book a table</h2>



            <div class="row">
              <div class="col-sm-3 form-group">
                <label for="example-text-input" class="col-2 col-form-label">First name</label>
                <div class="col-10">
                  <input class="form-control" type="text" id="example-text-input">
                </div>
              </div>

              <div class="col-sm-3 form-group">
                <label for="example-text-input" class="col-2 col-form-label">Surname</label>
                <div class="col-10">
                  <input class="form-control" type="text" id="example-text-input">
                </div>
              </div>

              <div class="col-sm-6 form-group">
                <label for="example-email-input" class="col-2 col-form-label">Email</label>
                <div class="col-10">
                  <input class="form-control" type="email" placeholder="gandhi@example.com" id="example-email-input">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2 form-group">
                <label for="example-text-input" class="col-2 col-form-label">Mobile number</label>
                <div class="col-10">
                  <input class="form-control" type="tel" id="example-text-input" placeholder="07123456789">
                </div>
              </div>

              <div class="col-sm-2 form-group">
                <label for="example-number-input" class="col-2 col-form-label">Number of guests</label>
                <div class="col-10">
                  <input class="form-control" type="number" id="example-number-input">
                </div>
              </div>

              <div class="col-sm-3 form-group">
                <label for="date-input" class="col-2 col-form-label">Date</label>
                <div class="col-10">
                  <input class="form-control" type="date" value="today" id="date-input">
                </div>
              </div>

              <div class="col-sm-2 form-group">
                <label for="date-input" class="col-2 col-form-label">Time</label>
                <div class="col-10">
                  <select class="form-control" name="form-time">
                    <option selected>Choose...</option>
                    <option value="17:00">17.00</option>
                    <option value="17:30">17.30</option>
                    <option value="18:00">18.00</option>
                    <option value="18:30">18.30</option>
                    <option value="19:00">19.00</option>
                    <option value="19:30">19.30</option>
                    <option value="20:00">20.00</option>
                    <option value="20:30">20.30</option>
                    <option value="21:00">21.00</option>
                    <option value="21:30">21.30</option>
                    <option value="22:00">22.00</option>
                    <option value="22:30">22.30</option>
                    <option value="23:00">23.00</option>
                  </select>
                </div>
              </div>

              <div class="col-sm-3 form-group">
                <label for="date-input" class="col-2 col-form-label">Reservation type</label>
                <div class="col-10">
                  <select class="form-control" name="form-reservation">
                    <option selected>Choose...</option>
                      <option value="Dinner">Dinner</option>
                      <option value="Anniversary">Anniversary</option>
                      <option value="Birthday">Birthday</option>
                      <option value="Private Event">Private event</option>
                      <option value="Wedding">Wedding</option>
                      <option value="Corporate">Corporate</option>
                  </select>
                </div>
              </div>



            </div>
            <fieldset style="margin-left: 1px;" class="form-group row">
              <div class="col-sm-10">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    I'm an existing APOS rewards customer
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    I'm new to APOS
                  </label>
                </div>
              </div>
            </fieldset>
            <div>
              <button style="margin-top: 15px; margin-left: 10px;" type="submit" class="btn btn-primary">Confirm</button>

              <p class="text-muted" style="float: right; font-size: 12px; margin-top: 15px;">Powered by<img href="https://www.accentpos.com" style="width: 50px; padding-left: 10px;" src="img/gandhi-images/APOS-logo.png"></p>
            </div>
          </div>

        </form>
      </div>
    </div>


    <div class="container large-form">
      <!-- Large form start-->
      <div class="col-md-12">
        <form method="post">
          <div style="padding-bottom: 50px;" class="row">
            <h2 style="font-family: 'Rock Salt', cursive; padding-top: 50px; color: #151515; text-shadow: 2px 2px 8px #fff; margin-bottom:20px;">Book a table</h2>



            <div class="row">
              <div class="col-sm-3 form-group">
                <label for="example-text-input" class="col-2 col-form-label">First name</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="form-first-name">
                </div>
              </div>

              <div class="col-sm-3 form-group">
                <label for="example-text-input" class="col-2 col-form-label">Surname</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="form-surname">
                </div>
              </div>

              <div class="col-sm-6 form-group">
                <label for="example-email-input" class="col-2 col-form-label">Email</label>
                <div class="col-10">
                  <input class="form-control" type="email" placeholder="gandhi@example.com" name="form-email">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2 form-group">
                <label for="example-text-input" class="col-2 col-form-label">Mobile number</label>
                <div class="col-10">
                  <input class="form-control" type="tel" name="form-mobile" placeholder="07123456789">
                </div>
              </div>

              <div class="col-sm-2 form-group">
                <label for="example-number-input" class="col-2 col-form-label">Number of guests</label>
                <div class="col-10">
                  <input class="form-control" type="number" name="form-guests">
                </div>
              </div>

              <div class="col-sm-3 form-group">
                <label for="date-input" class="col-2 col-form-label">Date</label>
                <div class="col-10">
                  <input class="form-control" type="date" value="today" name="date-input" id="date-input">
                </div>
              </div>

              <div class="col-sm-2 form-group">
                <label for="form-time" class="col-2 col-form-label">Time</label>
                <div class="col-10">
                  <select class="form-control" name="form-time">
                    <option selected>Choose...</option>
                    <option value="17:00">17.00</option>
                    <option value="17:30">17.30</option>
                    <option value="18:00">18.00</option>
                    <option value="18:30">18.30</option>
                    <option value="19:00">19.00</option>
                    <option value="19:30">19.30</option>
                    <option value="20:00">20.00</option>
                    <option value="20:30">20.30</option>
                    <option value="21:00">21.00</option>
                    <option value="21:30">21.30</option>
                    <option value="22:00">22.00</option>
                    <option value="22:30">22.30</option>
                    <option value="23:00">23.00</option>
                  </select>
                </div>
              </div>

              <div class="col-sm-3 form-group">
                <label for="form-reservation" class="col-2 col-form-label">Reservation type</label>
                <div class="col-10">
                  <select class="form-control" name="form-reservation">
                    <option selected>Choose...</option>
                      <option value="Dinner">Dinner</option>
                      <option value="Anniversary">Anniversary</option>
                      <option value="Birthday">Birthday</option>
                      <option value="Private Event">Private event</option>
                      <option value="Wedding">Wedding</option>
                      <option value="Corporate">Corporate</option>
                  </select>
                </div>
              </div>



            </div>
            <fieldset style="margin-left: 1px;" class="form-group row">
              <div class="col-sm-10">
                <div class="form-check">
                  <label class="form-check-label">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="I'm an existing APOS rewards customer" checked>
          I'm an existing APOS rewards customer
        </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="I'm new to APOS">
          I'm new to APOS
        </label>
                </div>
              </div>
            </fieldset>
            <div>

              <!-- Button trigger modal -->
              <input type="submit" name="submit" class="btn btn-primary" value="Confirm" data-toggle="modal" data-target="#myModal" formaction="index.php?" />
              <!--<button type="submit" class="btn btn-primary" >Confirm</button>-->

              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                    </div>
                    <div class="modal-body">Thanks for choosing The Gandhi Restaurant, Portsmouth. We're currently processing your booking, and
                      will confirm it with you via the email address you have provided.
                      <br> We look forward to seeing you!
                    </div>
                    <div class="modal-footer">
                      <div class="col-sm-3">
                        <img class="modal-logo" src="img/gandhi-images/gandhi-Logo.png">
                      </div>
                      <div class="col-sm-2 col-sm-offset-7">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Great!</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <p class="text-muted" style="float: right; font-size: 12px; margin-top: 15px;">Powered by<img href="https://www.accentpos.com" style="width: 50px; padding-left: 10px;" src="img/gandhi-images/APOS-logo.png"></p>
            </div>
          </div>

        </form>
      </div>
    </div>




  </section>


  <footer>
    <!-- Footer -->
    <div class="gandhi-divider">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mb-5">
            <ul class="list-unstyled list-spaced">
              <li class="mb-2">
                <h6 class="text-uppercase">About</h6>
              </li>
              <li class="text-muted">
                We have been serving the best Indian cuisine in Portsmouth since 1979. We have spent over three decades pioneering our menu
                into what is available today. Our head chef has introduced many new dishes but we retain many of the original
                recipes that our father implemented when he first opened the Restaurant. We are always keen to hear your
                ideas for how we can continue to serve you best so please do not hesitate to contact us!
                <a href="mailto:enquiries@thegandhirestaurant.co.uk">enquiries@thegandhiresturant.co.uk</a>.
              </li>
            </ul>
            <a href="https://www.facebook.com/The-Gandhi-Restaurant-134025996647558/"><i style="font-size: 3em; margin-right: 20px;" class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/showcase/10981578"><i style="font-size: 3em; margin-right: 20px;" class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            <a href="https://twitter.com/it_accent"><i style="font-size: 3em; margin-right: 20px;" class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href="https://uk.pinterest.com/lomas1244/apos-mood-board/"><i style="font-size: 3em; margin-right: 20px;" class="fa fa-pinterest-square" aria-hidden="true"></i></a>
            <br>


            <h6 class="copyright">Copyright &copy; <a href="http://www.accent-itservices.co.uk">Accent I.T. Services</a> 2017, All Rights Reserved</h6>

          </div>

          <div class="col-md-2 mb-5">
            <ul class="list-unstyled list-spaced">
              <li class="mb-2">
                <h6 class="text-uppercase">Legal</h6>
              </li>
              <li class="text-muted"><a href="http://www.accent-itservices.co.uk/terms---conditions.html">Terms</a></li>
              <li class="text-muted"><a href="http://www.accent-itservices.co.uk/privacy---cookies-policy.html">Privacy</a></li>
            </ul>
          </div>

          <div class="col-md-2 mb-5">
            <ul class="list-unstyled list-spaced">
              <li class="mb-2"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>
  <script src="js/bootstrap.js"></script>
  <script src="js/main.js"></script>
  

  <div class="grammarly-disable-indicator"></div>

</body>

</html>