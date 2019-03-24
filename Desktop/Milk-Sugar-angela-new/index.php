<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Milk & Sugar - Home</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/Magnific-Popup/magnific-popup.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.php">Milk & Sugar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="menu.php">Our Menu</a>
              <li class="nav-item"><a class="nav-link" href="orderstatus.php">Track Your Cake</a></li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Hero Banner Section start =================-->
  <section class="hero-banner">
    <div class="hero-wrapper">
      <div class="hero-left">
        <h1 class="hero-title">Cake, the most important thing.</h1>
        <div class="d-sm-flex flex-wrap">
          <a class="button button-hero button-shadow" href="#reserve-section">Order Now</a>
        </div>
        <ul class="hero-info d-none d-lg-block">
          <li>
            <img src="img/banner/fas-service-icon.png" alt="">
            <h4>Fast Service</h4>
          </li>
          <li>
            <img src="img/banner/fresh-cake-icon.png" alt="">
            <h4>Fresh Cake</h4>
          </li>
        </ul>
      </div>
      <div class="hero-right">
        <div class="owl-carousel owl-theme hero-carousel">
          <div class="hero-carousel-item">
            <img class="img-fluid" src="img/banner/red-velvet-banner.jpg" alt="">
          </div>
          <div class="hero-carousel-item">
            <img class="img-fluid" src="img/banner/matcha-banner.jpg" alt="">
          </div>
          <div class="hero-carousel-item">
            <img class="img-fluid" src="img/banner/strawberry-banner.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Hero Banner Section end =================-->

    <!--  Review Section Start-->
  <section class="section-margin">
      <div class="container">
          <div class="section-intro mb-75px">
              <h4 class="intro-title">Reviews</h4>
              <form class="form-inline menu_filter" method="GET" action="index.php">

                  <div class="row">
                      <div class="form-group input-flavour">
                          <div class="col-12"><input type="text" name="cname" placeholder="Cake Name.."></div>

                      </div>

                      <div class="form-group input-searchbtn" style="float: right">
                          <div class="col-12">
                              <input type="submit" value="Search" name="SearchReview"></div>
                      </div>
                  </div>
              </form>

          </div>
          <div class="row">
              <?php
              include 'connect.php';
              $conn = OpenCon();
              $cname = (isset($_GET['cname']) ? $_GET['cname'] : null);
              $query = "SELECT rw.cname,rw.score,rw.comment,rw.cakeID FROM Review_Write rw WHERE rw.cname = '{$cname}' ";
              $result = $conn->query($query);
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo '<div class="col-lg-6">
      <div class="media align-items-lg-center food-card">
            <img class="mr-3 mr-sm-4 cakeimg" src="img/home/cakeimg/'.$row['cakeID'].'.png" alt="" width=100px height=100px>
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
        <h4>'.$row['cname'].'</h4>
        <form>
        <p>Score: '.$row['score'].'</p>
        <p>Comment: '.$row['comment'].'</p>
</form>
        
</div>
</div>
</div>
</div>
';
                  }
              }
              else {
                  echo "See reviews of the cakes you are interested in !";
              }
              ?>
          </div>
      </div>
  </section>

    <!--Review Section End-->

  <!--================Reservation section start =================-->
  <a name="reserve-section"></a>
  <section class="bg-lightGray section-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-xl-5 mb-4 mb-md-0">
          <div class="section-intro">
            <h4 class="intro-title">Make Your Order</h4>
            <h2 class="mb-3">Spoil your sweet tooth with our cakes.</h2>
          </div>
          <p>We only use the authentic ingredients to make the best cakes in town. We imported organic butter from New Zealand and coffee beans from Ethiopian Highland. Quality and taste speak for itself.</p>
        </div>
        <div class="col-md-6 offset-xl-2 col-xl-5">
          <div class="search-wrapper">
            <h3>You want it, you got it.</h3>

            <form class="search-form" action="payment.php">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Your Name" name="user_name">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-user"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Your Address" name="user_address">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-email"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Your Phone Number" name="user_phone">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-headphone-alt"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Cake Name" name="cake_name">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-user"></i></span>
                  </div>
                </div>
              </div>
			  <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Cake Size" name="cake_size">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-user"></i></span>
                  </div>
                </div>
              </div>
			  <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Number of Cakes" name="quantity">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-email"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Today's Date (yyyy-mm-dd)" name="order_date">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-email"></i></span>
                  </div>
                </div>
              </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                    </div>
                </div>
			  
              <div class="form-group form-group-position">
                <button class="button border-0" type="submit">Submit</button>
              </div>
            </form>
			
			<?php
			$user_name = (isset($_GET['user_name']) ? $_GET['user_name'] : null);
			$user_address = (isset($_GET['user_address']) ? $_GET['user_address'] : null);
			$user_phone = (isset($_GET['user_phone']) ? $_GET['user_phone'] : null);
			$cake_name = (isset($_GET['cake_name']) ? $_GET['cake_name'] : null);
			$cake_size = (isset($_GET['cake_size']) ? $_GET['cake_size'] : null);
			$quantity = (isset($_GET['quantity']) ? $_GET['quantity'] : null);
			$order_date = (isset($_GET['order_date']) ? $_GET['order_date'] : null);
            $password = (isset($_GET['password']) ? $_GET['password'] : null);

			$query1 = "INSERT INTO customer1 VALUES ('{$user_name}', '{$user_address}', '{$user_phone}','{$password}');";
			$query2 = "SELECT cakeID FROM cake WHERE cname = '{$cake_name}' and size = '{$cake_size}'"; 
			$query3 = "SELECT price FROM cakeprice WHERE cname = '{$cake_name}' and size = '{$cake_size}'"; 
			
			$result1 = $conn->query($query1);
			$result2 = $conn->query($query2);
			$result3 = $conn->query($query3);
			
			if ($result2->num_rows > 0) {
				// output data of each row
				$row1 = $result2->fetch_assoc();
				
				if ($result3->num_rows > 0) {
					$row2 = $result3->fetch_assoc();
				// output data of each row
					
					$_SESSION["counter"] = $row2['price'] + 1;
					
					$temp = $quantity * $row2['price'];
										
					$nothing = 'NULL';
					
					$query4 = "INSERT INTO cakeorder VALUES ('{$_SESSION["counter"]}', '{$quantity}', '{$order_date}', '{$temp}', '{$nothing}', 'pending', '{$row1['cakeID']}')";
					
					$result4 = $conn->query($query4);
					
					if ($conn->affected_rows == 1) {
						echo 'Success!'; 
					}
				} else {
					echo 'Please fill in all fields.';
				}
			} else {
				echo 'Please fill in all fields.';
			}
//            $_SESSION['totalprice'] = $temp;
//            if (session_status() == PHP_SESSION_NONE) {session_start();}
//            if (!isset($_SESSION['totalprice'])) {
//                header('Location: payment.php');
//                exit();// <-- terminates the current script
//            }
			?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Reservation section end =================-->



  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
              <div class="col-lg-4">
                    <div class="media contact-info">
                      <span class="contact-info__icon"><i class="ti-home"></i></span>
                      <div class="media-body">
                        <h3>Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>
                      </div>
                    </div>
                    <div class="media contact-info">
                      <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                      <div class="media-body">
                        <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
                        <p>Mon to Fri 9am to 6pm</p>
                      </div>
                    </div>
                    <div class="media contact-info">
                      <span class="contact-info__icon"><i class="ti-email"></i></span>
                      <div class="media-body">
                        <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
                        <p>Send us your query anytime!</p>
                      </div>
                    </div>
				</div>
<!--				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">-->
<!--					<h4>Quick Links</h4>-->
<!--					<ul>-->
<!--						<li><a href="#">Jobs</a></li>-->
<!--						<li><a href="#">Brand Assets</a></li>-->
<!--						<li><a href="#">Investor Relations</a></li>-->
<!--						<li><a href="#">Terms of Service</a></li>-->
<!--					</ul>-->
<!--				</div>-->
			</div>
			<div class="footer-bottom row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

<?php
$custName = (isset($_GET['custName']) ? $_GET['custName'] : null);
$address = (isset($_GET['address']) ? $_GET['address'] : null);
$phonenum = (isset($_GET['phonenum']) ? $_GET['phonenum'] : null);
$deldate = (isset($_GET['deldate']) ? $_GET['deldate'] : null);
$addname = "INSERT INTO Customer1 VALUES('{$custName}','{$address}','{$phonenum}','{$password}')";
$newCust = $conn->query($addname);
CloseCon($conn);
?>
