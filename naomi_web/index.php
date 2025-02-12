<!Doctype html>
<html>
    <head>
        <title>Online Shopping System Management</title>
        <!--- bootstrap CSS link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--- Font awesome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--- Css link -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--- navbar -->

        <div class="container-fluid p-0">

        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="images/logo.jpg" alt="logo" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">Contact: +255787131545</a>
        </li>

       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Register
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="register.php">Register</a></li>
            <li><a class="dropdown-item" href="#">Contact</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </li>
      </ul>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/17.jpg" class="d-block w-100" alt="..." style="width: 400px; height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="images/16.jpg" class="d-block w-100" alt="..." style="width: 400px; height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="images/15.jpg." class="d-block w-100" alt="..." style="width: 400px; height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="images/14.jpg" class="d-block w-100" alt="..." style="width: 400px; height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="images/12.jpg" class="d-block w-100" alt="..." style="width: 400px; height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="images/11.jpg" class="d-block w-100" alt="..." style="width: 400px; height: 400px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- second child--->
 <div class="bg-light">
<h3 class="text-center"><marquee>Welcome To Naomi Shopping Cart</marquee></h3>
<p class="text-center">🌟 Start Shopping Now and enjoy a seamless experience</p>
 </div>

 <!--third child-->
 <div class="row">
  <div class="col-md-10">
    <!--products--->
    <div class="row">
      <div class="col-md-4 mb-2">
      <div class="card">
      <img src="images/16.jpg" class="card-img-top" alt="...">
      <div class="card-body">
     <h5 class="card-title">Clothes</h5>
     <p class="card-text">cargo pant,T-shirt, hand bag, sun glasses, shoes and cap.</p>
     <a href="#" class="btn btn-info">Add Cart</a>
     <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="images/17.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Shoes</h5>
    <p class="card-text">Men`s boots .</p>
    <a href="#" class="btn btn-info">Add Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>
  <div class="col-md-4 mb-2">
 <div class="card">
  <img src="images/11.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Accesories</h5>
    <p class="card-text">A set of hair accesories.</p>
    <a href="#" class="btn btn-info">Add Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>

      <div class="col-md-4 mb-2">
 <div class="card">
  <img src="images/12.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jewelry </h5>
    <p class="card-text">Fashionable women jewelry set in different styles .</p>
    <a href="#" class="btn btn-info">Add Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>


      <div class="col-md-4 mb-2">
 <div class="card">
  <img src="images/15.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Shoes</h5>
    <p class="card-text">Women Casual Sport Shoes</p>
    <a href="#" class="btn btn-info">Add Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>

 <div class="col-md-4 mb-2">
 <div class="card">
  <img src="images/14.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Clothes</h5>
    <p class="card-text">Men`s casual wear. available in different colors.</p>
    <a href="#" class="btn btn-info">Add Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>
      
    </div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <!--- brands to be display -->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand1</a>
      <a href="#" class="nav-link text-light">Brand2</a>
      <a href="#" class="nav-link text-light">Brand3</a>
      <a href="#" class="nav-link text-light">Brand4</a>
    </li>

</ul>
<!---categories to be display--->

<ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>categories</h4></a>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link text-light">categories1</a>
      <a href="#" class="nav-link text-light">categories2</a>
      <a href="#" class="nav-link text-light">categories3</a>
      <a href="#" class="nav-link text-light">categories4</a>
    </li>

</ul>

  </div>

 </div>
<!--- footer -->
<div class="bg-info p-3 text-center">
  <p>All Right Reserved @-  Designed by Nstar</p>

</div>


</div>

        <!--- bootstrap JS link--->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>