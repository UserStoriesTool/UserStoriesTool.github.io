<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if( ! isset($_SESSION['username'])) {
	$_SESSION['username']='?';
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is a bookstore">
    <meta name="author" content="Elena Zolota">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Bookstore</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="layout.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php?p=start">Bookstore</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php?p=start">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?p=shopinfo">Shop Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?p=products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?p=cart">Cart</a>
          </li>
          <li class="nav-item">
	        <a class="nav-link" href="?p=contact">Contact</a>
	      </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <ul class="navbar-nav mr-auto">
	          <li class="nav-item">
	            <a class="nav-link" href="?p=signup">Sign up</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="?p=login">Login</a>
	          </li>
          </ul>
          <!--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
          <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
        </form>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
	        <?php
	        	if($_SESSION['username'] == 'admin' or $_SESSION['username'] == 'user') {
					print "<p>This is user: <i>$_SESSION[username]</i></p><hr/>";
	        	}	
 				print "<h4>Products Menu</h4>";
 				require('internal/productsmenu.php');
				switch($_SESSION['username']) {
				    case "user":  	require('internal/usermenu.php');
				      				break;
				    case "admin":   require('internal/adminmenu.php');
				        			break;
				}
			?>
        </nav>
      </div>
    </div>
    
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <!-- <div id="1"> <h1>Welcome!</h1></div> -->
        
    <div id="content">
	<?php
	if( ! isset($_REQUEST['p'])) {
		$_REQUEST['p']='start';
	}
	$p = $_REQUEST['p'];
	//print "must require page: internal/$p";
	switch ($p){
	case "start" :		require "internal/start.php";
						break;
	case "shopinfo": 	require "internal/shopinfo.php";
						break;
	case "cart" :		require "internal/cart.php";
						break;
	case "contact" :	require "internal/contact.php";
						break;
	case "login" :		require "internal/login.php";
						break;
	case "signup" :		require "internal/signup.php";						
						break;
	case 'do_login':	require "internal/do_login.php";
						break;
	case "customers" :  require "internal/customers.php";	
						break;
	case "orders" :  	require "internal/orders.php";	
						break;
	case "myorders" :  	require "internal/myorders.php";	
						break;
	case "mydetails" :  require "internal/mydetails.php";	
						break;
	case "logout" :  	require "internal/logout.php";
						break;						
	default: 
		print "Page doesn't exist...";
	}
	?>
	</div>
	</main>
	<div id="footer" align="bottom"></div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
