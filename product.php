<!DOCTYPE html>
<html lang="en">
<head>
  <title>Black Friday</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
<style>


</style>

</head>
<body>
<div class="container">
  <div class="row">


	    <img  class="img-fluid" src="img/ktm1.jpg" alt="HONDA" width="100%" height="345"> 
</div>
</div>
<div class="container" style="background-color:green;">
<div class="row">
<marquee><h1 class="display-4"style="color:#D78D21";><b><b>Black Friday</b></b> <i class="fas fa-car"></i></b></h1"></marquee>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-8"style="background-color:green;">
	<div class="btn-group">
  <button type="button" class="btn btn-success" ><b ><a href="home.php" style="text-decoration:none;color:white;">Home</a></b></button>
  <button type="button" class="btn btn-success"><b>Cart</b></button>
  <button type="button" class="btn btn-success"><b><a href="product.php"style="text-decoration:none;color:pink; ">Checkout</a></b></button>
  <button type="button" class="btn btn-success"><b>My account</b></button>
  <button type="button" class="btn btn-success"><b>Shop</b></button>
   <button type="button" class="btn btn-success"><b><a href="login.php"style="text-decoration:none;color:white;">Sign In</a></b></button>
  <button type="button" class="btn btn-success"><b><a href="register.php"style="text-decoration:none;color:white;">Sign Up</a></b></button>
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      

        <div class="modal-header" style="background-color:#DAF7A6;">
          <h4 class="modal-title"style="color:green;">Registration</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        

        <div class="modal-body">
          <form <form name="stdinfo" onsubmit="return formvali()">
Name:<br/>
<input type="text" name="" id="name" placeholder="name"/><br/>
Phone:<br/>
<input type="text" name="" id="phone" placeholder="phone" onblur="return phonevali()"/><br/>
Email:<br/>
<input type="email" name="" id="email" placeholder="your email"/><br/>
Password:<br/>

<input type="password" name="" id="password" placeholder="password" onblur="return passwordvali()"/><br/>
Gender:<br/>
<input type="radio" name="" id="gender">Male<br/>
<input type="radio" name="" id="gender">Female<br/>
<input type="radio" name="" id="gender">Other<br/>
Country
<select id="cont">
<option value=""></option>ect id="c
<option value="ban">Bangladesh</option>ect id="c
<option value="ban">India</option>ect id="c
<option value="ban">Japan</option>ect id="c
<option value="">Amerika</option>ect id="c
</select>
<input type="submit" value="Submit"/>
</form>
        </div>
        

        <div class="modal-footer"style="background-color:#DAF7A6;">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
       <b>Brands</b>
    </button>
    <div class="dropdown-menu" style="background-color:green";>
      <a class="dropdown-item" href="#"><b>HONDA</b></a>
      <a class="dropdown-item" href="#"><b>YAMAHA</b></a>
	   <a class="dropdown-item" href="#"><b>APRILIA</b></a>
	    <a class="dropdown-item" href="#"><b>KTM</b></a>
		<a class="dropdown-item" href="#"><b>SUZUKI</b></a>

  </div>
</div>
</div>	
    </div>
    <div class="col-sm-4"style="background-color:green;">
		<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search">
  <div class="input-group-append">
    <button class="btn btn-primary" type="button">OK</button>
    
  </div>
    </div>
    </div>
  </div>
</div>




<div class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"><b>Checkout</b></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li class="active"><a href="addproduct.html">Add Product</a></li>
        <li><a href="updateproduct.html">Update Product(s)</a></li>
        <li><a href="Addproductgroup.html">Add Product Group</a></li>
        <li><a href="checkorders.html">Check Customer Orders</a></li>
        <li><a href="logout.html">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
</div>

<div class="container">
  
  <div class="row">
    <div class="col-md-6">
    <h1>Add Product</h1>
    </div>
  </div>
  
    
  
<div class="row">
  
  <div class="col-md-6">
  <form role="form">
    
    <select class="form-control" id="productSelect"><option>Please Select a Product Group</option>
      <option>HONDA</option>
      <option>APRILIA</option>
      <option>YAMAHA</option>
	  <option>KTM</option>
	  <option>SUZUKI</option>
    </select>
    
 <div class="form-group">
   <label for="productname" class="loginFormElement">Username:</label>
   <input class="form-control" id="productname" type="email">
 </div>
    
 <div class="form-group">
   <label for="productprice" class="loginFormElement">Product Price</label>
   <input class="form-control" id="productprice" type="email">
 </div>
   

<div class="form-group">
 
<label class="control-label">Product Image</label>
 
<input class="filestyle" data-icon="false" type="file">
 
</div>
    
    <div class="form-group">
      <label class="loginformelement" for="productdescription">Product Description</label>
  	  <input id="productdescription" class="form-control input-lg" placeholder="Large" type="text"><div class="container">
      </div>
 
    <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Add Product</button>
  
    </div></form>
    
    </div>
  
  
  </div>
  

</div>

<div id="push"></div>
      
</body>
</html>