<?php
session_start();
$servername = "localhost";
$userservername = "root";
$database = "pfe_prj";
// Create connection
$conn = new mysqli($servername, $userservername,"", $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//valeur a rechercher
$CodePro = $_GET['idP'];
echo $CodePro;

    $req = "SELECT * from produit where idP=?  ";
    $statement =$conn->prepare($req);
    $statement->bind_param("s",$CodePro);
    $statement->execute();
    $res = $statement->get_result();
    $row = $res->fetch_assoc();

    $nom=$row['Nom'];
    $prix=$row['Prix'];
    $Description=$row['Description'];
    $fabricant=$row['Fabricant'];
    $NbrArticle=$row['NArticle'];
    $Garentie=$row['Garantie'];
    $DateLiv=$row['DateLiv'];
    $Status=$row['Status'];




?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Website title - bootstrap html template</title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css/ui.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!-- custom javascript -->
<script src="js/script.js" type="text/javascript"></script>

</head>
<body>


<header class="section-header">
<section class="header-main border-bottom">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-2 col-lg-3 col-md-12">
        <a href="http://bootstrap-ecommerce.com" class="brand-wrap">
          <img class="logo" src="images/logo.png">
        </a> <!-- brand-wrap.// -->
      </div>
      <div class="col-xl-6 col-lg-5 col-md-6">
        <form action="#" class="search-header">
          <div class="input-group w-100">
            <select class="custom-select border-right"  name="category_name">
                <option value="">All type</option><option value="codex">Special</option>
                <option value="comments">Only best</option>
                <option value="content">Latest</option>
            </select>
              <input type="text" class="form-control" placeholder="Search">
              
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-search"></i> Search
                </button>
              </div>
            </div>
        </form> <!-- search-wrap .end// -->
      </div> <!-- col.// -->
      <div class="col-xl-4 col-lg-4 col-md-6">
        <div class="widgets-wrap float-md-right">
          <div class="widget-header mr-3">
            <a href="#" class="widget-view">
              <div class="icon-area">
                <i class="fa fa-user"></i>
                <span class="notify">3</span>
              </div>
              <small class="text"> My profile </small>
            </a>
          </div>
          <div class="widget-header mr-3">
            <a href="#" class="widget-view">
              <div class="icon-area">
                <i class="fa fa-comment-dots"></i>
                <span class="notify">1</span>
              </div>
              <small class="text"> Message </small>
            </a>
          </div>
          <div class="widget-header mr-3">
            <a href="#" class="widget-view">
              <div class="icon-area">
                <i class="fa fa-store"></i>
              </div>
              <small class="text"> Orders </small>
            </a>
          </div>
          <div class="widget-header">
            <a href="#" class="widget-view">
              <div class="icon-area">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <small class="text"> Cart </small>
            </a>
          </div>
        </div> <!-- widgets-wrap.// -->
      </div> <!-- col.// -->
    </div> <!-- row.// -->
  </div> <!-- container.// -->
</section> <!-- header-main .// -->

<nav class="navbar navbar-main navbar-expand-lg border-bottom">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-bars text-muted mr-2"></i> Categories </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Machinery</a>
            <a class="dropdown-item" href="#">Electronics</a>
            <a class="dropdown-item" href="#">Home textile</a>
            <a class="dropdown-item" href="#">Home and kitchen</a>
            <a class="dropdown-item" href="#">Service and equipment</a>
            <a class="dropdown-item" href="#">Healthcare items</a>
            <a class="dropdown-item" href="#">Toys and Hobbies</a>
          </div>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="#">Ready to ship</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trade shows</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sell with us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Demo pages</a>
          <div class="dropdown-menu">
      <a class="dropdown-item" href="page-index.html">Main</a>
      <a class="dropdown-item" href="page-category.html">All category</a>
      <a class="dropdown-item" href="page-listing-large.html">Listing list</a>
      <a class="dropdown-item" href="page-listing-grid.html">Listing grid</a>
      <a class="dropdown-item" href="page-shopping-cart.html">Shopping cart</a>
      <a class="dropdown-item" href="page-detail-product.html">Item detail</a>
      <a class="dropdown-item" href="page-content.html">Info content</a>
      <a class="dropdown-item" href="page-user-login.html">Page login</a>
      <a class="dropdown-item" href="page-user-register.html">Page register</a>
      <a class="dropdown-item disabled text-muted" href="#">More components</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-md-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Get the app</a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" data-toggle="dropdown">English</a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Russian</a>
            <a class="dropdown-item" href="#">French</a>
            <a class="dropdown-item" href="#">Spanish</a>
            <a class="dropdown-item" href="#">Chinese</a>
          </div>
        </li>
     </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>
</header> <!-- section-header.// -->

<section class="py-3 bg-light">
  <div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Category name</a></li>
        <li class="breadcrumb-item"><a href="#">Sub category</a></li>
        <li class="breadcrumb-item active" aria-current="page">Items</li>
    </ol>
  </div>
</section>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg-white padding-y">
<div class="container">

<!-- ============================ ITEM DETAIL ======================== -->
	<div class="row">
		<aside class="col-md-6">
<div class="card">
<article class="gallery-wrap"> 
	<div class="img-big-wrap">
	  <div> <a href="#"><img src="images/items/15.jpg"></a></div>
	</div> <!-- slider-product.// -->
	<div class="thumbs-wrap">
	  <a href="#" class="item-thumb"> <img src="images/items/15.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="images/items/15-1.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="images/items/15-2.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="images/items/15-1.jpg"></a>
	</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
</div> <!-- card.// -->
		</aside>
		<main class="col-md-6">
<article class="product-info-aside">

<h2 class="title mt-3"><?=$nom;?> </h2>

<div class="rating-wrap my-3">
	<ul class="rating-stars">
		<li style="width:80%" class="stars-active"> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> 
		</li>
		<li>
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> 
		</li>
	</ul>
	<small class="label-rating text-muted">132 reviews</small>
	<small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders </small>
</div> <!-- rating-wrap.// -->

<div class="mb-3"> 
	<var class="price h4"><?=$prix;?> DH</var> 
	<span class="text-muted"><?=$prix;?> DH</span> 
</div> <!-- price-detail-wrap .// -->

<p>Compact sport shoe for running, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat </p>


<dl class="row">
  <dt class="col-sm-3">Manufacturer</dt>
  <dd class="col-sm-9"><?=$fabricant;?></dd>

  <dt class="col-sm-3">Article number</dt>
  <dd class="col-sm-9"><?=$NbrArticle;?></dd>

  <dt class="col-sm-3">Guarantee</dt>
  <dd class="col-sm-9"><?=$Garentie;?></dd>

  <dt class="col-sm-3">Delivery time</dt>
  <dd class="col-sm-9"><?=$DateLiv;?></dd>

  <dt class="col-sm-3">Availabilty</dt>
  <dd class="col-sm-9"><?=$Status;?></dd>
</dl>

	<div class="form-row  mt-4">
		<div class="form-group col-md flex-grow-0">
			<div class="input-group mb-3 input-spinner">
			  <div class="input-group-prepend">
			    <button class="btn btn-light" type="button" id="button-plus"> + </button>
			  </div>
			  <input type="text" class="form-control" value="1">
			  <div class="input-group-append">
			    <button class="btn btn-light" type="button" id="button-minus"> &minus; </button>
			  </div>
			</div>
		</div> <!-- col.// -->
		<div class="form-group col-md">
			<a href="#"  class="btn  btn-primary"> 
				<i class="fas fa-shopping-cart"></i> <span class="text">Add to cart</span> 
			</a>
			<a href="#" class="btn btn-light">
        <i class="fas fa-envelope"></i> <span class="text">Contact supplier</span> 
			</a>
		</div> <!-- col.// -->
	</div> <!-- row.// -->

</article> <!-- product-info-aside .// -->
		</main> <!-- col.// -->
	</div> <!-- row.// -->

<!-- ================ ITEM DETAIL END .// ================= -->


</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y bg">
<div class="container">

<div class="row">
	<div class="col-md-8">
		<h5 class="title-description">Description</h5>
		<p>
			Lava stone grill, suitable for natural gas, with cast-iron cooking grid, piezo ignition, stainless steel burners, water tank, and thermocouple. Thermostatic adjustable per zone. Comes complete with lava rocks. Adjustable legs. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. 
		</p>
		<ul class="list-check">
		<li>Material: Stainless steel</li>
		<li>Weight: 82kg</li>
		<li>built-in drip tray</li>
		<li>Open base for pots and pans</li>
		<li>On request available in propane execution</li>
		</ul>

		<h5 class="title-description">Specifications</h5>
		<table class="table table-bordered">
			<tr> <th colspan="2">Basic specs</th> </tr>
			<tr> <td>Type of energy</td><td>Lava stone</td> </tr>
			<tr> <td>Number of zones</td><td>2</td> </tr>
			<tr> <td>Automatic connection	</td> <td> <i class="fa fa-check text-success"></i> Yes </td></tr>

			<tr> <th colspan="2">Dimensions</th> </tr>
			<tr> <td>Width</td><td>500mm</td> </tr>
			<tr> <td>Depth</td><td>400mm</td> </tr>
			<tr> <td>Height	</td><td>700mm</td> </tr>

			<tr> <th colspan="2">Materials</th> </tr>
			<tr> <td>Exterior</td><td>Stainless steel</td> </tr>
			<tr> <td>Interior</td><td>Iron</td> </tr>

			<tr> <th colspan="2">Connections</th> </tr>
			<tr> <td>Heating Type</td><td>Gas</td> </tr>
			<tr> <td>Connected load gas</td><td>15 Kw</td> </tr>

		</table>
	</div> <!-- col.// -->
	
	<aside class="col-md-4">

		<div class="box">
		
		<h5 class="title-description">Files</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>

    <h5 class="title-description">Videos</h5>
      

    <article class="media mb-3">
      <a href="#"><img class="img-sm mr-3" src="images/posts/3.jpg"></a>
      <div class="media-body">
        <h6 class="mt-0"><a href="#">How to use this item</a></h6>
        <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin </p>
      </div>
    </article>

    <article class="media mb-3">
      <a href="#"><img class="img-sm mr-3" src="images/posts/2.jpg"></a>
      <div class="media-body">
        <h6 class="mt-0"><a href="#">New tips and tricks</a></h6>
        <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin </p>
      </div>
    </article>

    <article class="media mb-3">
      <a href="#"><img class="img-sm mr-3" src="images/posts/1.jpg"></a>
      <div class="media-body">
        <h6 class="mt-0"><a href="#">New tips and tricks</a></h6>
        <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin </p>
      </div>
    </article>


		
	</div> <!-- box.// -->
	</aside> <!-- col.// -->
</div> <!-- row.// -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<!-- ========================= SECTION SUBSCRIBE  ========================= -->
<section class="padding-y-lg bg-light border-top">
<div class="container">

<p class="pb-2 text-center">Delivering the latest product trends and industry news straight to your inbox</p>

<div class="row justify-content-md-center">
  <div class="col-lg-4 col-sm-6">
<form class="form-row">
    <div class="col-8">
    <input class="form-control" placeholder="Your Email" type="email">
    </div> <!-- col.// -->
    <div class="col-4">
    <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i> Subscribe </button>
    </div> <!-- col.// -->
</form>
<small class="form-text">We’ll never share your email address with a third-party. </small>
  </div> <!-- col-md-6.// -->
</div>
  

</div>
</section>
<!-- ========================= SECTION SUBSCRIBE END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-secondary">
  <div class="container">
    <section class="footer-top padding-y-lg text-white">
      <div class="row">
        <aside class="col-md col-6">
          <h6 class="title">Brands</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Adidas</a></li>
            <li> <a href="#">Puma</a></li>
            <li> <a href="#">Reebok</a></li>
            <li> <a href="#">Nike</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Company</h6>
          <ul class="list-unstyled">
            <li> <a href="#">About us</a></li>
            <li> <a href="#">Career</a></li>
            <li> <a href="#">Find a store</a></li>
            <li> <a href="#">Rules and terms</a></li>
            <li> <a href="#">Sitemap</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Help</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Contact us</a></li>
            <li> <a href="#">Money refund</a></li>
            <li> <a href="#">Order status</a></li>
            <li> <a href="#">Shipping info</a></li>
            <li> <a href="#">Open dispute</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Account</h6>
          <ul class="list-unstyled">
            <li> <a href="#"> User Login </a></li>
            <li> <a href="#"> User register </a></li>
            <li> <a href="#"> Account Setting </a></li>
            <li> <a href="#"> My Orders </a></li>
          </ul>
        </aside>
        <aside class="col-md">
          <h6 class="title">Social</h6>
          <ul class="list-unstyled">
            <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
            <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
            <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
            <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
          </ul>
        </aside>
      </div> <!-- row.// -->
    </section>  <!-- footer-top.// -->

    <section class="footer-bottom text-center">
    
        <p class="text-white">Privacy Policy - Terms of Use - User Information Legal Enquiry Guide</p>
        <p class="text-muted"> &copy 2019 Company name, All rights reserved </p>
        <br>
    </section>
  </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->


</body>
</html>