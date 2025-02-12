<!Doctype html>
</html>
<head>
    <title>Admin Dashboard</title>
    <!--bootstrap css link --->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <!--- Font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--- Css link -->
 <link rel="stylesheet" href="style.css">

 <style type="text/css">

  .admin_image
{
    width: 100px;
    object-fit: contain;
    border-radius: 30px;
}

.footer 
{
    position:absolute;
    bottom:0;
}

 </style>
</head>

<body>

<!-- navbar--->
 <div class="container-fluid p-0">
  <!--- first-child--->
 <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
    <img src="images/logo.jpg" alt="logo" class="logo">
    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
            <li class="nav-item"></li>
            <a href="" class="nav-link">Welcome customer</a>

        </ul>

</nav>

    </div>
 </nav>

 <!--- second-child-->

 <div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>

 </div>

 <!--- third-child--->
 <div class="row">
 
 <div class="col-md-12 bg-secondary p-1 d-flex align-items-center"> 
    <div class="px-3">
        <a href="#"><img src="images/3.png" alt="" class="admin_image"></a>
        <p class="text-light text-center">Admin Name</p>
    </div>
    <div class="button text-center">
        <button class="my-3"><a  href=""class="nav-link text-light bg-info my-1">Insert Products</a></button>
        <button><a  href=""class="nav-link text-light bg-info my-1">View Products</a></button>
        <button><a  href=""class="nav-link text-light bg-info my-1">Insert categories</a></button>
        <button><a  href=""class="nav-link text-light bg-info my-1">View categories</a></button>
        <button><a  href=""class="nav-link text-light bg-info my-1">Insert Brands</a></button>
        <button><a  href=""class="nav-link text-light bg-info my-1">View Brands</a></button>
        <button><a  href=""class="nav-link text-light bg-info my-1">All Orders</a></button>
        <button><a  href=""class="nav-link text-light bg-info my-1">All Payments</a></button>
        <button><a  href=""class="nav-link text-light bg-info my-1">List Users</a></button>
        <button><a  href=""class="nav-link text-light bg-info my-1">Logout</a></button>


    </div>

 </div>

 </div>

 <div class="bg-info p-3 text-center footer">
  <p>All Rights Reserved @-  Designed by Nstar</p>

</div>

 </div>
    <!-- bootstrap js link --->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>