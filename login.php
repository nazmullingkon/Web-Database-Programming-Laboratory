<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Black Friday</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <link rel="stylesheet" type="text/css" href="style.css">
    <style>
  header { 

  background: url(img/ktm1.jpg)no-repeat center fixed; 
  height:360px;
  width:100%;
}

  </style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-12">
<header class="title">
<div class="cut">
<img src="img/icon.jpg"alt="">
</div>
</header>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-12">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="img/logo.jpg" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.php"><b>Home</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><b>Cart</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><b>Checkout</b></a>
    </li>
	    <li class="nav-item">
      <a class="nav-link" href="#"><b>My account</b></a>
    </li>
	    <li class="nav-item">
      <a class="nav-link" href="#"><b>Shop</b></a>
    </li>
	    <li class="nav-item">
      <a class="nav-link" href="register.php"><b>Sign Up</b></a>
    </li>
	  <li class="nav-item">
      <a class="nav-link" href="login.php"><b>Sign In</b></a>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       <b> Brands</b>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="honda.php"><b>Honda</b></a>
        <a class="dropdown-item" href="#"><b>yamaha</b></a>
        <a class="dropdown-item" href="#"><b>Suzuki</b></a>
		<a class="dropdown-item" href="#"><b>Aprilia<b></a>
		<a class="dropdown-item" href="#"><b>KTM</b></a>
		</div>
  </ul>
</nav>
</div>
</div>
</div>
<br/>

<div class="container">
  <div class="row">

   <div class="col-sm-6">
<img  class="img-fluid" src="img/cb1.jpg" alt="HONDA"style="width:100%;height:260px;"><br><br>
<h2 style="background-color:black;color:white;">Brands</h2>
<a href="honda.php"><img  class="img-fluid" src="img/honda3.jpg" alt="honda3"style="width:45%;height:160px;"></a>
<a href="#"><img  class="img-fluid" src="img/yamaha.jpg" alt="yamaha"style="width:45%;height:160px;"></a>
<a href="#"><img  class="img-fluid" src="img/suzuki.jpg" alt="suzuki"style="width:45%;height:160px;"></a>
<a href="#"><img  class="img-fluid" src="img/aprilia.jpg" alt="aprilia"style="width:45%;height:160px;"></a>
   </div>
 <div class="col-sm-6">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn btn-success" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>
  </div>
  </div>

</body>
</html>