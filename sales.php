<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CTO - Travel organizer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">CTO<span>Travel organizer</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="destination.php" class="nav-link">Destination</a></li>
                <li class="nav-item active"><a href="sales.php" class="nav-link">Sales</a></li>
                <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/Viwe.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-0 bread">Sales</h1>
                <br>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Places <i class="fa fa-chevron-right"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <?php
            include 'connection.php';
            $select_item = mysqli_query($conn, "SELECT * FROM `item` LIMIT 6") or die('query failed');
            if (mysqli_num_rows($select_item) > 0) {
                while ($fetch_item = mysqli_fetch_assoc($select_item)) {
                    ?>
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url('images/<?=$fetch_item['image']?>');">
                                <span class="price">Price <?=$fetch_item['price']?></span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="#"><?=$fetch_item['name']?></a></h3>
                                <p class="location"><span><?=$fetch_item['des']?></span></p>
                                <form action="actions.php" method="GET">
                                    <input type="hidden" name="action_type" value="add_item">
                                    <input type="hidden" name="id" value="<?=$fetch_item['id']?>">
                                    <input type="hidden" name="name" value="<?=$fetch_item['name']?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="price" value="<?=$fetch_item['price']?>">
                                    <button type="submit" class="btn btn-warning btn-style">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-md-6">
          <h5 class="text-center">Cart Items</h5>
          <?php 
          $Total=0;
          if(isset($_SESSION['cart'])) { ?>
          <table class="table table-bordered">
              <thead>
                 <th>SN</th>
                 <th>Product</th>
                 <th>Quantity</th>
                 <th>Price</th>
                 <th>Options</th>
              </thead>
              <tbody>
                <?php
                $index =0;
                $i=1;
                foreach($_SESSION['cart'] as $key => $val) {   
                  $totalPrice = $val['quantity'] * $val['price'];
                  $Total = $Total + $totalPrice;
                  ?>            
                <tr>
                   <td><?=$i++?></td> 
                   <td><?=$val['product_name']?></td> 
                   <td><?=$val['quantity']?></td>  
                   <td><?=$totalPrice?></td> 
                   <td><a href="actions.php?action_type=remove_item&index=<?=$key?>">Remove </a></td>
                </tr>
              <?php $index++; } ?>
              <tr>
                <td></td>
                <td></td>
                <td><b>Total</b></td>
                <td><?=$Total?></td>
                <td></td>
              </tr>
              </tbody>

          </table>
           <?php } ?>
        </div>
                    <?php
                }
             else {
                echo '<p class="empty">No tailor or products added!</p>';
            }
            ?>
        </div>
    </div>
</section>

<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
    <!-- Footer content -->
</footer>

<!-- JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
</body>
</html>