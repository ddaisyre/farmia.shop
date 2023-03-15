<!DOCTYPE html>
<html>
<head>
	<title>WELCOME HOMEPAGE</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>
<style>
	.fs{

		font-size: 20px;
		padding: 15px;
		border-radius: 10px;
		margin: 20px;
		text-align: center;
		color: black;
	}
	#container{
		text-align: center;
		position: fixed;
		top: 50%;
		left: 37%;
	}
	body{
		background-image: url('farms/2.jpg');
	}

	.navbar {
		background-color: green;
	}
	.navbar-brand{
		color: white;
	}
	.nav-link{
		color: white;
	}
	.navbar-nav{
		color: white;
	}
	.copy{
		color: white;
	}
.container {
width: 400px;
height: 1000px;
display: flex;
justify-content: center;
align-items: center;
}
.imga{
  width: 70px;
  height: 70px;
}
</style>

	<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">AGRIWEB</a> -->
    <img src="logo1.jpg" class="imga">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
<!--         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Select Information
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="productpricelist.html">Product/Services</a></li>
            <li><a class="dropdown-item" href="aboutus.php">About Us</a></li>
            <li><a class="dropdown-item" href="Contactus.html">Accounts</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a class="nav-link disabled">for more inquiries click this buttons</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<body>



	<div class="container">
		<div id="container">
                  <a href="login.php" class="fs btn btn-warning" onclick="alert('Hello Mam/Sir Good Day!')"><i class="fa"></i>Buyers</a>
                  <a href="sellerlog.php" class="fs btn btn-success" onclick="alert('Hello Sir/Mam')"><i class="fa"></i>Seller</a>
                  <a href="admin-login.php" class="fs btn btn-danger" ><i class="fa"></i>Admin</a>
</div>
</div>

</body>
</html>