
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STMP</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />

      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="./style/style.css">

  </head>
  <body>
<!-- NavBar start -->
 <div class="NavBar">
  <nav class="navbar navbar-expand-lg navbar-dark d-flex fixed-top ">
  <div class="container">
     <!-- logo -->
    <a class="navbar-brand logo" href="#">
        <h2>STMP.</h2>
    </a>
    <!-- logo end -->
     <!-- toggler button -->
    <button class="navbar-toggler" type="button"
    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" 
     aria-expanded="false" 
     aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- toggler button end-->

      <!-- ManuBar -->

    <div class="navmenu collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center align-item-center  flex-grow-1  ">
        <li class=" nav-item">
          <a class="nav-link active " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Food
          </a>
          <ul class="dropdown-menu ">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" >Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
           <button type="button" class=" login btn">Login</button>
      </form>
    </div>
          <!-- ManuBar end-->
  </div>
 </nav>
 </div>

<!-- NavBar start end -->
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

     
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
  </body>
</html>


   