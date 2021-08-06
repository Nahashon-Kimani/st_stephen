<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St Stephen</title>
    <!-- linking our CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Linking fontawesome -->
    <script src="https://kit.fontawesome.com/c99e7cdcbd.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   

<!-- Navigation Bar starts -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="image/logo.jpg" alt="School Logo">
        St Stephen
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto me-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navigation Bar Ends -->


<!-- Slider starts -->
<div id="carouselExampleCaptions" class="carousel slide slider" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/slider1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/slider2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/slider3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Slider ends -->


<!-- Marketting section starts -->
<section class="marketingSection text-secondary">
  <center>
    <h5>This is what we offer</h5>
    <div class="border"></div>

    <p class="py-2">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
    </p>

    <!-- Row starts -->
    <div class="container pt-sm-2 pt-md-3 pt-lg-5">
      <div class="row">
        <!-- First column  -->
        <div class="marketing-item p-sm-2 p-md-5 col-md-12 col-lg-4">
          <i class="fas fa-handshake"></i>
          <h4>Brighter Future</h4>
          <div class="border"></div>
          <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
          </p>
        </div>
        <!-- First column ends -->

        <!-- Second column starts -->
        <div class="marketing-item p-sm-2 p-md-5 col-md-12 col-lg-4">
          <i class="fas fa-people-carry"></i>
          <h4>Qualified Teachers</h4>
          <div class="border"></div>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
          </p>
        </div>
        <!-- Second Column ends -->


        <!-- Third column -->
        <div class="marketing-item p-sm-2 p-md-5 col-md-12 col-lg-4">
            <i class="fas fa-book"></i>
            <h4>State of the Art facilities</h4>
            <div class="border"></div>
            <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
            </p>
        </div>
        <!-- Third column ends -->
      </div>
    </div>
    <!-- Rows ends -->
  </center>
</section>
<!-- Marketing section ends -->


<!-- Our exellence section starts  -->
<section class="excellence bg-light py-sm-2 py-md-5">
  <div class="container">
    <h4 class="text-center text-capitalize fs-2 fw-bolder text-secondary">
      Our <span>excellence</span>
    </h4>
    <center>
      <div class="border"></div>
    </center>

    <!-- First row starts -->
    <div class="row my-4">
      <!-- First column with the image starts-->
      <div class="col-sm-12 col-lg-5">
        <img src="image/slider2.jpg" 
             alt="Good Image" 
             class="img-fluid img-thumbnail">
      </div>
      <!-- First column with the image ends-->

      <!-- Second column with text starts -->
      <div class="col-sm-12 col-lg-7">
        <p class="lead">Science Olympiad</p>
        <p class="fw-light lh-base">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <p class="fw-bold text-primary">
          <i class="fas fa-calendar-alt"></i>
          Awarded on <?php echo date('dS-F-Y h:i:s a'); ?>
        </p>
      </div>
      <!-- Second column with text ends -->
    </div>
    <!-- First row ends -->
  </div>
</section>
<!-- Our excellence section ends -->

<!-- Member Section starts  -->
<section class="memberSection">
  <div class="container">
    <div class="row text-center">
      <!-- First Column starts -->
      <div class="member col-sm-12 col-md-6 col-lg-4">
        <h1>1200</h1>
        <center>
          <div class="border"></div>
        </center>
        <p class="lead">Students</p>
      </div>
      <!-- First Column ends -->

      <!-- Second Column starts -->
      <div class="member col-sm-12 col-md-6 col-lg-4">
        <h1>171</h1>
        <center>
          <div class="border"></div>
        </center>
        <p class="lead">Teachers</p>
      </div>
      <!-- Second Column ends -->

      <!-- Third Column starts -->
      <div class="member col-sm-12 col-md-6 col-lg-4">
        <h1>35</h1>
        <center>
          <div class="border"></div>
        </center>
        <p class="lead">Departments</p>
      </div>
      <!-- Third Column ends -->
    </div>
  </div>
</section>
<!-- Member Section ends -->


<!-- News Section starts  -->
<section class="newsSection bg-light">
  <h4 class="text-secondary fw-bold fs-2 text-center">
    Latest <span>News</span>
  </h4>
  <center><div class="border"></div></center>

  <div class="container">
    <div class="row pt-sm-2 pt-md-3 pt-lg-5">
      <!-- First Card starts -->
      <div class="col-sm-12 col-md-6 col-lg-4 py-2">
        <div class="card">
          <img src="image/slider1.jpg" alt="News 1" class="card-img-top img-thumbnail">
          <p class="text-center pt-3">
            17<sup>th</sup> July 2021, <span class="author">By Ian</span>
          </p>
          <div class="card-body">
            <hr>
            <!-- Title  -->
              <h5 class="card-title">Riverside Camping</h5>
            <!-- Paragraph -->
              <p class="card-text text-secondary">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
              </p>
          </div>
        </div>
      </div>
      <!-- First card ends  -->

      <!-- Second card starts -->
      <div class="col-sm-12 col-md-6 col-lg-4 py-2">
        <div class="card">
          <img src="image/slider1.jpg" alt="News 1" class="card-img-top img-thumbnail">
          <p class="text-center pt-3">
            17<sup>th</sup> July 2021, <span class="author">By Ian</span>
          </p>
          <div class="card-body">
            <hr>
            <!-- Title  -->
              <h5 class="card-title">Riverside Camping</h5>
            <!-- Paragraph -->
              <p class="card-text text-secondary">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
              </p>
          </div>
        </div>
      </div>
      <!-- Second card ends -->

      <!-- Third Card starts -->
      <div class="col-sm-12 col-md-6 col-lg-4 py-2">
        <div class="card">
          <img src="image/slider1.jpg" alt="News 1" class="card-img-top img-thumbnail">
          <p class="text-center pt-3">
            17<sup>th</sup> July 2021, <span class="author">By Ian</span>
          </p>
          <div class="card-body">
            <hr>
            <!-- Title  -->
              <h5 class="card-title">Riverside Camping</h5>
            <!-- Paragraph -->
              <p class="card-text text-secondary">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
              </p>
          </div>
        </div>
      </div>
      <!-- Third Card ends -->
    </div>
  </div>

  <center>
    <a href="#" class="btn btn-info px-5 text-center mt-sm-3 mt-md-5">
      <i class="fas fa-eye"></i>
      View More...
    </a>
  </center>

</section>
<!-- News Section ends -->

<!-- Footer starts -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- First column starts -->
      <div class="col-ms-12 col-md-4">
        <h5 class="text-uppercase fs-4 fw-normal">
          Get In touch
        </h5>
        <!-- Monday to Friday -->
        <p class="text-white">
          <span class="fw-bolder">Monday - Friday:</span> 
          08:00 - 5:00pm
        </p>
        
        <!-- Saturday -->
        <p>
          Saturday: <span class="text-secondary">08:00 - 2:00pm</span>
        </p>

        <!-- Sunday -->
        <p>
          Sunday: <span class="text-secondary">Closed</span>
        </p>

        <!-- Social Media Icons -->
        <div class="social py-5">
          <i class="fab fa-facebook-square"></i>
          <i class="fab fa-twitter-square"></i>
          <i class="fab fa-youtube-square"></i>
          <i class="fab fa-pinterest-square"></i>
        </div>

      </div>
      <!-- First column ends -->

      <!-- Second Column starts -->
      <!-- Second Column ends -->

      <!-- Third column starts -->
      <!-- Third column ends -->
    </div>
  </div>
</footer>
<!-- Footer ends  -->


<!-- JQUERY -->
<script src="js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap Bundle -->
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>