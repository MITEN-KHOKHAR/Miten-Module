<?php
session_start();
if(isset($_POST["log1"]))
{
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    if($email=='miten1@gmail.com' && $pass=='miten1')
    {
        $_SESSION["email"]=$_POST["email"];
        echo "<h2 align='center' style='color:green'>You Are Logged in Successfully</h2>";
        header('refresh:3,welcome.php');
    }
    else
    {
        echo "<h4 align='center' style='color:green'>You Are Email and Password are Incorrect</h4>";
        header('refresh:3,index.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
   <!-- css file -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="css/style.css" rel="stylesheet"> 
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
      <!-- script file -->
   <!-- bootstrap link js -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<body> 
  <div class="row colur-mystl">
    <div class="col-md-12">  

      <!--start of navbar top option -->
          <nav class="navbar navbar-expand-sm text-black sticky-top mybord-stl pt-3 pb-3">
            <div class="container-fluid">
              <a class="navbar-brand p-3" href="#">Trusted and True Auto</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar" >
                <ul class="nav">
                  <form class="d-flex mg-mystl">
                    <input class="form-control me-3 col-sm-6" type="text" placeholder="Search City">
                    <button class="btn btn-success col-sm-4" type="button">Search City</button>
                  </form>
                  <li class="nav-item">
                    <a href="about-us.html" class="nav-link" href="#">About us</a>
                  </li> 
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Language</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">English</a></li>
                      <li><a class="dropdown-item" href="#">Gujarati</a></li>
                      <li><a class="dropdown-item" href="#">Hindi</a></li>
                    </ul>
                  </li>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Login / Register
                  </button>
                </ul>
              </div>
            </div>
          </nav>   
      <!-- end of navbar top option -->

  </div><!--end of col-md-12-->
  </div><!-- end of row -->


  <div class="row">
    <div class="col-md-12">  
      <!-- start of navbar option -->
      <nav class="navbar navbar-expand-sm navbar-dark mycol-stl">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="mynavbar">
            <ul class="navbar-nav">
              <div class="btn-group btn-group-md mynav-stl">
                <a href="buy-car.html" class="btn btn-primary">Buy Car</a>
                <a href="sell-car.html" class="btn btn-warning">Sell Car</a>
              </div>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Buy City</a>
                <ul class="dropdown-menu">
                  <li><a href="user-car-rajkot.html" class="dropdown-item" href="#">Rajkot</a></li>
                  <li><a href="user-car-ahmadabad.html" class="dropdown-item" href="#">Ahmadabad</a></li>
                  <li><a href="user-car-surat.html" class="dropdown-item" href="#">Surat</a></li>
                  <li><a href="user-car-dehli.html" class="dropdown-item" href="#">Dehli</a></li>
                  <li><a href="user-car-mumbai.html" class="dropdown-item" href="#">Mumbai</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Buy Model</a>
                <ul class="dropdown-menu">
                  <li><a href="used-swift.html" class="dropdown-item" href="#">Swift</a></li>
                  <li><a href="used-alto.html" class="dropdown-item" href="#">Alto</a></li>
                  <li><a href="used-swift-dzire.html" class="dropdown-item" href="#">Swift Dzire</a></li>
                  <li><a href="used-vitara-brezza.html" class="dropdown-item" href="#">Vitara Brezza</a></li>
                  <li><a href="used-alto-800.html" class="dropdown-item" href="#">Alto 800</a></li>
                  <li><a href="used-ertizo.html" class="dropdown-item" href="#">Ertizo</a></li>
                  <li><a href="used-baleno.html" class="dropdown-item" href="#">Baleno</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Buy Price</a>
                <ul class="dropdown-menu">
                  <li><a href="used-cars-0-lakh-2-lakh.html" class="dropdown-item" href="#">Less Than 2 Lakhs</a></li>
                  <li><a href="used-cars-2-lakh-4-lakh.html" class="dropdown-item" href="#">2 Lakhs to 4 Lakhs</a></li>
                  <li><a href="used-cars-4-lakh-6-lakh.html" class="dropdown-item" href="#">4 Lakhs to 6 Lakhs</a></li>
                  <li><a href="used-cars-10-lakhs-ups.html" class="dropdown-item" href="#">10 Lakhs to ups</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Buy Fuel Datils</a>
                <ul class="dropdown-menu">
                  <li><a href="used-cng-car.html" class="dropdown-item" href="#">CNG</a></li>
                  <li><a href="used-petrol-car.html" class="dropdown-item" href="#">Petrol</a></li>
                  <li><a href="used-diesel-car.html" class="dropdown-item" href="#">Diesel</a></li>
                  <li><a href="used-lpg-car.html" class="dropdown-item" href="#">LPG</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Buy Body Type</a>
                <ul class="dropdown-menu">
                  <li><a href="used-suv-car.html" class="dropdown-item" href="#">SUV</a></li>
                  <li><a href="used-sedan-car.html" class="dropdown-item" href="#">SEDAN</a></li>
                  <li><a href="used-hatchback-car.html" class="dropdown-item" href="#">HATCHBACK</a></li>
                  <li><a href="used-muv-car.html" class="dropdown-item" href="#">MUV</a></li>
                  <li><a href="used-van-car.html" class="dropdown-item" href="#">Van</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Showroom Location</a>
                <ul class="dropdown-menu">
                  <li><a href="location-rajkot.html" class="dropdown-item" href="#">Rajkot</a></li>
                  <li><a href="location-ahmadadbad.html" class="dropdown-item" href="#">Ahmadabad</a></li>
                  <li><a href="location-surat.html" class="dropdown-item" href="#">Surat</a></li>
                  <li><a href="location-dehli.html" class="dropdown-item" href="#">Dehli</a></li>
                  <li><a href="location-mumbai.html" class="dropdown-item" href="#">Mumbai</a></li>
                </ul>
              </li>              
            </ul>
          </div>
        </div>
      </nav>
      <!-- end of navbar option -->
</div><!--end of col-md-12-->
</div><!-- end of row -->



<div class="row">
  <div class="col-md-12"> 

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/1.jpg" alt="Los Angeles" class="img-fluid">
    </div>
    <div class="carousel-item">
      <img src="image/2.jpg" alt="Chicago" class="img-fluid">
    </div>
    <div class="carousel-item">
      <img src="image/3.jpg" alt="New York" class="img-fluid">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


</div><!--end of col-md-12-->
</div><!-- end of row -->




<div class="row">
  <div class="col-md-12 p-5"> 
<div class="container">
<!-- start of select buy & sell car form -->

<div id="accordion">
  <div class="card">
    <div class="card-header">
      <a class="btn btn-danger" data-bs-toggle="collapse" href="#collapseOne">
        Buy Car Form Filed Up
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
      <div class="card-body">
        <form action="/action_page.php">
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Select Model :</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Less than 2 Lakhs:</label>
            <select class="form-select" id="sel1" name="sellist1">
              <option>Select Less than Price</option>
              <option>Less Than 2 Lakhs</option>
              <option>2 Lakhs to 4 Lakhs</option>
              <option>4 Lakhs to 6 Lakhs</option>
              <option>10 Lakhs to ups</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Select Your City</label>
            <select class="form-select" id="sel1" name="sellist1">
              <option>Select City</option>
              <option>Rajkot</option>
              <option>Ahmadabad</option>
              <option>Surat</option>
              <option>Dehli</option>
              <option>Mumbai</option>
            </select>
          </div>
          <input type="submit" name="submeet" value="Submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <a class="collapsed btn btn-success" data-bs-toggle="collapse" href="#collapseTwo">
        Sell Car Form Filed Up
    </a>
    </div>
    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
      <div class="card-body">
        <form action="/action_page.php">
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Register Number:</label>
            <input type="email" class="form-control" id="email" placeholder="Register Number*" name="email">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Name:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Name*" name="pswd">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Mobile :</label>
            <input type="password" class="form-control" id="pwd" placeholder="Mobile*" name="pswd">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Email Address:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Email Address*" name="pswd">
          </div>
          <div class="form-check mb-3">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
          </div>
          <input type="submit" name="nxt" value="Next" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>


<!-- end of select but & sell car form -->
</div><!--end of container-->
</div><!--end of col-md-12-->
</div><!-- end of row -->




<div class="row">
  <div class="col-md-12"> 
<div class="container-fluid">

<!-- start of select watch silder photo car -->
  <!-- Nav tabs -->
  <a href="" class="btn btn-warning float-end btnmrg-stl">View All</a>
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#home">Recenlty Added</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu1">Top Rated</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container-fluid tab-pane active"><br>


      <!-- end of most recented option -->



  <!-- start of most Top Rated option -->      
  <div class="container-fluid">
    <div class="row mt-5">

      <div class="col-md-3">
        <div class="bxbormrg-stl">
        <img src="image/silde_img/Mahindra-1.jpg" class="img-fluid img-thumbnail">
        <h4 class="m-1">Dzire</h4>
        <p class="m-1">Solapur</p>
        <small class="mylig-stl">2022 | Petrol | 11 861 km</small>
  
        <form action="/action_page.php" class="">
          <div class="form-check mt-2 mb-4">
            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
            <label class="form-check-label col-sm-6" for="check1">Add to Compare</label>
            <p class="float-end offset-sm-1 col-sm-5"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
          </div>
  
            <h5 class="mt-3 mb-4"><i class="bi bi-currency-rupee"></i>4,00,000
            <a href="#" class="btn btn-secondary btn-group-md float-end">Contact Dealer</a></h5>
  
          <div class="btn-group btn-group-md mynav-stl">
            <a href="#" class="btn btn-primary">Contact Dealer</a>
            <a href="#" class="btn btn-warning">Book a Test Drive</a>
          </div>
        </form>
        </div><!--end of  class="bxbormrg-stl"-->
  </div><!--end of col md 3-->


  <div class="col-md-3">
    <div class="bxbormrg-stl">
    <img src="image/silde_img/Mahindra-1.jpg" class="img-fluid img-thumbnail">
    <h4 class="m-1">Dzire</h4>
    <p class="m-1">Solapur</p>
    <small class="mylig-stl">2022 | Petrol | 11 861 km</small>

    <form action="/action_page.php" class="">
      <div class="form-check mt-2 mb-4">
        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
        <label class="form-check-label col-sm-6" for="check1">Add to Compare</label>
        <p class="float-end offset-sm-1 col-sm-5"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
      </div>

        <h5 class="mt-3 mb-4"><i class="bi bi-currency-rupee"></i>4,00,000
        <a href="#" class="btn btn-secondary btn-group-md float-end">Contact Dealer</a></h5>

      <div class="btn-group btn-group-md mynav-stl">
        <a href="#" class="btn btn-primary">Contact Dealer</a>
        <a href="#" class="btn btn-warning">Book a Test Drive</a>
      </div>
    </form>
    </div><!--end of  class="bxbormrg-stl"-->
</div><!--end of col md 3-->



    <div class="col-md-3">
      <div class="bxbormrg-stl">
      <img src="image/silde_img/Mahindra-1.jpg" class="img-fluid img-thumbnail">
      <h4 class="m-1">Dzire</h4>
      <p class="m-1">Solapur</p>
      <small class="mylig-stl">2022 | Petrol | 11 861 km</small>

      <form action="/action_page.php" class="">
        <div class="form-check mt-2 mb-4">
          <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
          <label class="form-check-label col-sm-6" for="check1">Add to Compare</label>
          <p class="float-end offset-sm-1 col-sm-5"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
        </div>

          <h5 class="mt-3 mb-4"><i class="bi bi-currency-rupee"></i>4,00,000
          <a href="#" class="btn btn-secondary btn-group-md float-end">Contact Dealer</a></h5>

        <div class="btn-group btn-group-md mynav-stl">
          <a href="#" class="btn btn-primary">Contact Dealer</a>
          <a href="#" class="btn btn-warning">Book a Test Drive</a>
        </div>
      </form>
      </div><!--end of  class="bxbormrg-stl"-->
</div><!--end of col md 3-->


<div class="col-md-3">
  <div class="bxbormrg-stl">
  <img src="image/silde_img/Mahindra-1.jpg" class="img-fluid img-thumbnail">
  <h4 class="m-1">Dzire</h4>
  <p class="m-1">Solapur</p>
  <small class="mylig-stl">2022 | Petrol | 11 861 km</small>

  <form action="/action_page.php" class="">
    <div class="form-check mt-2 mb-4">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      <label class="form-check-label col-sm-6" for="check1">Add to Compare</label>
      <p class="float-end offset-sm-1 col-sm-5"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
    </div>

      <h5 class="mt-3 mb-4"><i class="bi bi-currency-rupee"></i>4,00,000
      <a href="#" class="btn btn-secondary btn-group-md float-end">Contact Dealer</a></h5>

    <div class="btn-group btn-group-md mynav-stl">
      <a href="#" class="btn btn-primary">Contact Dealer</a>
      <a href="#" class="btn btn-warning">Book a Test Drive</a>
    </div>
  </form>
  </div><!--end of  class="bxbormrg-stl"-->
</div><!--end of col md 3-->

    </div><!--end of container-fluid-->
    </div><!--end of row -->        
         


        
      <!-- end of most recented option -->
    </div>


    <div id="menu1" class="container-fluid tab-pane fade"><br>

     <!-- end of most Top Rated option -->      
      <div class="row">

        <div class="col-md-3 p-2 col-stl shadow-sm mrg-stl">
         <img src="image/silde_img/Mahindra-1.jpg" class="img-fluid img-thumbnail">
         <h4 class="m-1">Dzire</h4>
         <p class="m-1">Solapur</p>
         <small class="mylig-stl">2022 | Petrol | 11 861 km</small>

         <form action="/action_page.php" class="">
           <div class="form-check mt-2 mb-4">
             <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
             <label class="form-check-label col-sm-6" for="check1">Add to Compare</label>
             <p class="float-end offset-sm-1 col-sm-5"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
           </div>

             <h5 class="mt-3 mb-4"><i class="bi bi-currency-rupee"></i>4,00,000
             <a href="#" class="btn btn-secondary btn-group-md float-end">Contact Dealer</a></h5>

           <div class="btn-group btn-group-md mynav-stl">
             <a href="#" class="btn btn-primary">Contact Dealer</a>
             <a href="#" class="btn btn-warning">Book a Test Drive</a>
           </div>
         </form>
       </div><!--end of col-md-3-->


        <div class="col-md-3 p-2 col-stl shadow-sm mrg-stl">
         <img src="image/silde_img/Mahindra-1.jpg" class="img-fluid img-thumbnail">
         <h4 class="m-1">Dzire</h4>
         <p class="m-1">Solapur</p>
         <small class="mylig-stl">2022 | Petrol | 11 861 km</small>

         <form action="/action_page.php" class="">
           <div class="form-check mt-2 mb-4">
             <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
             <label class="form-check-label col-sm-6" for="check1">Add to Compare</label>
             <p class="float-end offset-sm-1 col-sm-5"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
           </div>

             <h5 class="mt-3 mb-4"><i class="bi bi-currency-rupee"></i>4,00,000
             <a href="#" class="btn btn-secondary btn-group-md float-end">Contact Dealer</a></h5>

           <div class="btn-group btn-group-md mynav-stl">
             <a href="#" class="btn btn-primary">Contact Dealer</a>
             <a href="#" class="btn btn-warning">Book a Test Drive</a>
           </div>
         </form>
       </div><!--end of col-md-3-->   

       
           </div>
         </form>
       </div><!--end of col-md-3-->


         </form>
       </div><!--end of col-md-3-->

     </div><!-- end of row -->
     <!-- end of most Top Rated option -->      
    </div><!--end of id menu1-->
  </div><!-- end of class="tab-content" -->
<!-- end of select watch silder photo car -->

</div><!--end of container-->
</div><!--end of col-md-12-->
</div><!-- end of row -->


<div class="row">
<div class="col-md-12">
<div class="container m-5">

<div class="row">  
<div class="col-md-6">
<img src="image/silde_img/virtus-2.webp" class="img-fluid">
</div><!--end of col md 6-->
<div class="col-md-6 mt-5">
  <h3>YOUR SEARCH FOR A FAIR AND TRANSPARENT PRICE FOR YOUR USED CAR ENDS HERE!</h3><br>
  <p>Get started with our AI-based scientific pricing engine and book a home evaluation today!</p>
  </div><!--end of col md 6-->

</div><!--end of row -->

<div class="row">
<div class="col-md-12">
  <form method="post" action="">
    <!-- Multiple inputs -->
    <div class="input-group mb-3">
      <span class="input-group-text">Person</span>
      <input type="text" class="form-control" placeholder="First Name">
      <input type="text" class="form-control" placeholder="Last Name">
    </div>
        <!-- Multiple inputs -->
        <div class="input-group mb-3">
          <span class="input-group-text">Email</span>
          <input type="text" class="form-control" placeholder="Enter Your Email ID">
          <input type="text" class="form-control" placeholder="Enter Your Mobile Number">
          <span class="input-group-text">Mobile Number</span>
        </div>
    <div class="input-group">
      <span class="input-group-text">Register Number</span>
      <input type="text" class="form-control" placeholder="Please enter without any space Your Register Number">
    </div><br>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
      <label class="form-check-label">I authorize Maruti Suzuki India Ltd. or its partners to call me. Please read our <a href="#">Privacy Policy.</a></label>
    </div><br>
    <input type="submit" name="nextbtn" class="btn btn-primary col-md-12" value="Submit">
  </form>
</div><!--end of col md 6-->
</div><!--end of row -->

</div><!--end of col-md-12-->
</div><!--end of container-->
</div><!-- end of row -->



    <!-- start of most Top Rated option -->      
    <div class="container-fluid">
    <div class="row mt-5 mb-5">

    <div class="col-md-5">
      <h4 class="pb-3">About Trusted and True Auto</h4>
      <img src="image/about_img/garage1-img.jpg" class="img-fluid">
      <h4 class="pt-4 pb-2">About Us</h4>
      <p align="justify">Since foraying into India???s pre-owned car market in 2001, True Value, Maruti Suzuki???s channel for pre-owned cars, has grown in both size and stature. With 1252 outlets spread across 942 cities, the new True Value caters to the diverse and burgeoning needs of pre-owned car buyers across the country.</p>
      <a href="#">Read More <i class="bi bi-arrow-right-circle-fill"></i></a></p>
    </div><!--end of col md 6-->


    <div class="col-md-2">
      <h4 class="pb-3">Blog List</h4>
      <img src="image/blog/Guide_to_Buying.png" class="img-fluid img-thumbnail mb-2">
      <p>What Makes Used Cars More Affordable? <br> <a href="#" class="pb-5">Read More... 
        <i class="bi bi-arrow-right-circle-fill"></i></a></p>

      <img src="image/blog/More_Affordable.png" class="img-fluid img-thumbnail mb-2">
      <p>Your Guide to Buying a Used Car in India <br> <a href="#" class="pb-5">Read More... 
        <i class="bi bi-arrow-right-circle-fill"></i></a></p>
       <a href="#" class="btn btn-success col-sm-12 p-2 mt-3">All View Blog</a> 
    </div><!--end of col md 2-->    



    <div class="col-md-5">
      <h4 class="pb-3">The True Value Advantages</h4>
      <iframe width="100%" height="275" src="https://www.youtube.com/embed/XyAFftrecMs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <h4 class="pt-4 pb-2">True Value Advantages</h4>
      <p align="justify">At Maruti Suzuki True Value, the term ???True Value??? takes on an all-important meaning. It is a sum of key aspects that every True Value certified pre-owned car adheres to, and value-adds that the car comes with, to ensure transparency, reliability and most importantly, customer delight.</p> <a href="#" class="pt-5">Read More... <i class="bi bi-arrow-right-circle-fill"></i></a>
    </div><!--end of col md 6-->

    </div><!--end of container-fluid-->
    </div><!--end of row -->


<div class="row coltesti-stl">
<div class="col-md-12">
  <div class="container">
  <div class="row">
<h4 class="mt-4 mb-5 text-center">Review & Recommendation</h4>

<div class="col-md-3">  
<div class="bxborstl-review mb-5">
  <h1 class="bi bi-person-hearts text-center"></h1> 
  <h5 class="text-center">Mr. Aman Agarwal</h5>
  <p class="col-sm-12 text-center"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
<i>"I purchased a pre-owned Alto from True Value Shaheedpath. My overall experience has been wonderful. I got the kind of car I was looking for well within my budget. They have quite a wide-ranging stock of cars and the way the staff helped me throughout was quite admirable. Very satisfied with my purchase from True Value and Maruti Suzuki.???</i>
</div><!--end of bxborstl-review mb-5-->
</div><!--end of col-md-3-->

<div class="col-md-3">  
  <div class="bxborstl-review mb-5">
    <h1 class="bi bi-person-hearts text-center"></h1> 
    <h5 class="text-center">Mr. Aman Agarwal</h5>
    <p class="col-sm-12 text-center"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
  <i>"I purchased a pre-owned Alto from True Value Shaheedpath. My overall experience has been wonderful. I got the kind of car I was looking for well within my budget. They have quite a wide-ranging stock of cars and the way the staff helped me throughout was quite admirable. Very satisfied with my purchase from True Value and Maruti Suzuki.???</i>
  </div><!--end of bxborstl-review mb-5-->
  </div><!--end of col-md-3-->

  <div class="col-md-3">  
    <div class="bxborstl-review mb-5">
      <h1 class="bi bi-person-hearts text-center"></h1> 
      <h5 class="text-center">Mr. Aman Agarwal</h5>
      <p class="col-sm-12 text-center"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
    <i>"I purchased a pre-owned Alto from True Value Shaheedpath. My overall experience has been wonderful. I got the kind of car I was looking for well within my budget. They have quite a wide-ranging stock of cars and the way the staff helped me throughout was quite admirable. Very satisfied with my purchase from True Value and Maruti Suzuki.???</i>
    </div><!--end of bxborstl-review mb-5-->
    </div><!--end of col-md-3-->
    
    <div class="col-md-3">  
      <div class="bxborstl-review mb-5">
        <h1 class="bi bi-person-hearts text-center"></h1> 
        <h5 class="text-center">Mr. Aman Agarwal</h5>
        <p class="col-sm-12 text-center"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
      <i>"I purchased a pre-owned Alto from True Value Shaheedpath. My overall experience has been wonderful. I got the kind of car I was looking for well within my budget. They have quite a wide-ranging stock of cars and the way the staff helped me throughout was quite admirable. Very satisfied with my purchase from True Value and Maruti Suzuki.???</i>
      </div><!--end of bxborstl-review mb-5-->
      </div><!--end of col-md-3-->  

      <a href="" class="btn btn-secondary offset-sm-5 col-sm-2 mb-5">View All</a>

  </div><!--end of row-->

</div><!--end of container-fluid-->
</div><!--end of col-md-12-->
</div><!--end of row-->



<div class="row mt-5 mb-5">
<div class="col-md-12">
<div class="container">

  <h4 class="pt-4 pb-5 text-center">Most Compared Cars <a href="" class="btn btn-success float-end">Compare to Car</a></h4>
<div class="row">

  <div class="col-md-3 p-2 col-stl mrg-stl">
    <img src="image/silde_img/Mahindra-1.jpg" class="img-fluid img-thumbnail">
    <h4 class="m-1">Dzire</h4>
    <p class="m-1">Solapur</p>
    <small class="mylig-stl">2022 | Petrol | 11 861 km</small>

    <form action="/action_page.php" class="">
      <div class="form-check mt-2 mb-4">
        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
        <label class="form-check-label col-sm-6" for="check1">Add to Compare</label>
        <p class="float-end offset-sm-1 col-sm-5"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
      </div>

        <h5 class="mt-3 mb-4"><i class="bi bi-currency-rupee"></i>4,00,000
        <a href="#" class="btn btn-secondary btn-group-md float-end">Contact Dealer</a></h5>

      <div class="btn-group btn-group-sm mynav-stl">
        <a href="#" class="btn btn-primary">Contact Dealer</a>
        <a href="#" class="btn btn-warning">Book a Test Drive</a>
      </div>
    </form>
  </div><!--end of col-md-3-->


  <div class="col-md-3 p-2 col-stl mrg-stl">
    <img src="image/silde_img/Mahindra-1.jpg" class="img-fluid img-thumbnail">
    <h4 class="m-1">Dzire</h4>
    <p class="m-1">Solapur</p>
    <small class="mylig-stl">2022 | Petrol | 11 861 km</small>

    <form action="/action_page.php" class="">
      <div class="form-check mt-2 mb-4">
        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
        <label class="form-check-label col-sm-6" for="check1">Add to Compare</label>
        <p class="float-end offset-sm-1 col-sm-5"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
      </div>

        <h5 class="mt-3 mb-4"><i class="bi bi-currency-rupee"></i>4,00,000
        <a href="#" class="btn btn-secondary btn-group-md float-end">Contact Dealer</a></h5>

      <div class="btn-group btn-group-sm mynav-stl">
        <a href="#" class="btn btn-primary">Contact Dealer</a>
        <a href="#" class="btn btn-warning">Book a Test Drive</a>
      </div>
    </form>
  </div><!--end of col-md-3-->


  <div class="col-md-3 p-2 col-stl mrg-stl">
    <img src="image/silde_img/Mahindra-1.jpg" class="img-fluid img-thumbnail">
    <h4 class="m-1">Dzire</h4>
    <p class="m-1">Solapur</p>
    <small class="mylig-stl">2022 | Petrol | 11 861 km</small>

    <form action="/action_page.php" class="">
      <div class="form-check mt-2 mb-4">
        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
        <label class="form-check-label col-sm-6" for="check1">Add to Compare</label>
        <p class="float-end offset-sm-1 col-sm-5"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
      </div>

        <h5 class="mt-3 mb-4"><i class="bi bi-currency-rupee"></i>4,00,000
        <a href="#" class="btn btn-secondary btn-group-md float-end">Contact Dealer</a></h5>

      <div class="btn-group btn-group-sm mynav-stl">
        <a href="#" class="btn btn-primary">Contact Dealer</a>
        <a href="#" class="btn btn-warning">Book a Test Drive</a>
      </div>
    </form>
  </div><!--end of col-md-3-->


  <div class="col-md-3 p-2 col-stl mrg-stl">
    <img src="image/silde_img/Mahindra-1.jpg" class="img-fluid img-thumbnail">
    <h4 class="m-1">Dzire</h4>
    <p class="m-1">Solapur</p>
    <small class="mylig-stl">2022 | Petrol | 11 861 km</small>

    <form action="/action_page.php" class="">
      <div class="form-check mt-2 mb-4">
        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
        <label class="form-check-label col-sm-6" for="check1">Add to Compare</label>
        <p class="float-end offset-sm-1 col-sm-5"><i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i> <i class="bi bi-star-fill star-clstl"></i></p>
      </div>

        <h5 class="mt-3 mb-4"><i class="bi bi-currency-rupee"></i>4,00,000
        <a href="#" class="btn btn-secondary btn-group-md float-end">Contact Dealer</a></h5>

      <div class="btn-group btn-group-sm mynav-stl">
        <a href="#" class="btn btn-primary">Contact Dealer</a>
        <a href="#" class="btn btn-warning">Book a Test Drive</a>
      </div>
    </form>
  </div><!--end of col-md-3-->
</div><!--end of row-->


</div><!--end of container-fluid-->
</div><!--end of col-md-12-->
</div><!--end of row-->



<div class="forgray">
<div class="row">
<div class="col-md-12">
  <div class="container-fluid">

<div class="row">
  <div class="col-md-2 mt-5 mb-5">
    <ul class="fotr-stl">
      <li><a href="emi-calculator.html" target="_blank" >EMI Calculator</a></li>
      <li><a href="trusted-true-auto-advantage.html" target="_blank" >Trusted & True Auto Advantage</a></li>
      <li><a href="site-map.html" target="_blank" >Site Map</a></li>
      <li><a href="showroom-location.html" target="_blank" >Showroom Locator</a></li>
    </ul>
    </div><!--end of col-md-2 mt-5 mb-5-->

    <div class="col-md-2 mt-5 mb-5">
      <ul class="fotr-stl">
        <li><a href="complant.html" target="_blank" >Complaint</a></li>
        <li><a href="about-true-value.html" target="_blank" >About True Value</a></li>
        <li><a href="true-value-hub.html" target="_blank" >True Value Hub</a></li>
        <li><a href="blog.html" target="_blank" >Blog</a></li>
      </ul>
      </div><!--end of col-md-2 mt-5 mb-5-->

      <div class="col-md-2 mt-5 mb-5">
        <ul class="fotr-stl">
          <li><a href="career.html" target="_blank" >Careers</a></li>
          <li><a href="contact-us.html" target="_blank" >Contact us</a></li>
          <li><a href="faqs.html" target="_blank" >FAQs</a></li>
          <li><a href="feedback.html" target="_blank" >Feedback</a></li>
        </ul>
        </div><!--end of col-md-2 mt-5 mb-5-->

        <div class="col-md-2 mt-5 mb-5">
          <ul class="fotr-stl">
            <li><a href="buy-car.html" target="_blank" >Buy</a></li>
            <li><a href="sell-car.html" target="_blank" >Sell</a></li>
            <li><a href="car-finance.html" target="_blank" >Finance</a></li>
            <li><a href="privacy-policy.html" target="_blank" >Privacy Policy</a></li>
            <li><a href="tearm-of-use.html" target="_blank" >Tearm of use</a></li>
          </ul>
          </div><!--end of col-md-2 mt-5 mb-5-->

          <div class="offset-md-1 col-md-3 mt-5 mb-5">
            <h5 class="fotblu-stl">Social Media Link Follow :</h5>
            <ul class="fotr-stl">
              <a href="https://www.facebook.com/" target="_blank" class="p-1"><h3><i class="bi bi-facebook"></i></a>
              <a href="https://web.whatsapp.com/" target="_blank" class="p-1"><i class="bi bi-whatsapp"></i></a>
              <a href="https://www.instagram.com/" target="_blank" class="p-1"><i class="bi bi-instagram"></i></a>
              <a href="https://www.twitter.com/" target="_blank" class="p-1"><i class="bi bi-twitter"></i></h3></a>
            </ul>
            </div><!--end of col-md-2 mt-5 mb-5-->          

<div class="row">
<div class="col-md-12">
<div class="container-fluid">
<p><small class="pb-2">*The content and information available on this website is limited to the sales and services offered by Maruti Suzuki India Limited in the jurisdiction of India only.</small></p>
<p><big class="pb-2"><b>*Caution: Beware of Fake Promotions or Offers</b></big></p>
<small>Please do not believe or engage with any promotional messages (SMS) or Web-link which ask you to click on a link and fill in your details to win a Maruti Suzuki car. These SMS or Web-link based offers are fake, and Maruti Suzuki India Limited bears no liability or responsibility whatsoever for any such communication which is fraudulent or misleading in nature.</small>

</div><!--end of container-fluid-->
</div><!--end of col md 12-->
</div><!--end of row-->

</div><!--end of container-fluid-->
</div><!--end of col-md-12-->
</div><!--end of row-->

<footer class="foter-colrstl mt-4 footer-borstl">
  <p class="p-3 text-center">All Rights Reserved. ?? 2019 Maruti Suzuki India Limited</p>
</footer>
</div><!--end of row-->


</div><!-- end of forgray -->




<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
       
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#home">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu">Register</a>
    </li>
  </ul>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>




      <!-- Modal body -->
      <div class="modal-body">

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <form method="post">
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
            <input type="text" name="email" class="form-control" placeholder="Enter Your Email Addresse">
          </div><br>
        
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            <input type="text" name="pass" class="form-control" placeholder="Enter Your Password">
          </div><br>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
            <label class="form-check-label">Remember Password</label>
            <a href="" class="float-end">Forget Password</a>
          </div>
          <input type="submit" name="log1" class="btn btn-info mt-4 mb-3 mgright-lofm" value="Login">
        <input type="reset" name="clean" class="btn btn-danger mt-4 mb-3 mgright-lofm" value="Clear">
      </form>

      
    </div>
    <div id="menu" class="container tab-pane fade"><br>
      <form name="f5" method="get" action="">
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
          <input type="text" class="form-control" placeholder="Enter First Name">

          <input type="text" class="form-control" placeholder="Enter Last Name">
          <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
        </div><br>        
      
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-pin-map-fill"></i></span>
          <textarea type="text" class="form-control" placeholder="Your Password"></textarea>
        </div><br>

        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
          <select class="form-select">

            <option value="">Select Your City</option>
            <?php
              $url_link="http://country.io/names.json";
              $data1=file_get_contents($url_link,True);
              $cnty=json_decode($data1);
              foreach($cnty as $cnty1)
              {
            ?>
            <option value="<?php echo $cnty1; ?>"><?php echo $cnty1; ?></option>
            <?php
              }
            ?>
          </select>
        </div><br>


        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-geo-fill"></i></span>
          <select class="form-select">
            <?php
               $urlLink="state_addlist_json.json";
               $data=file_get_contents($urlLink,True);
               $state=json_decode($data);
               foreach($state as $state1)
               {             
            ?>
            <option value="<?php echo $state1; ?>"><?php echo $state1; ?></option>
            <?php
               }
            ?>
            </select>
        </div><br>

        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-envelope-paper-fill"></i></i></span>
          <input type="text" class="form-control" placeholder="Enter Your Email Id">
        </div><br>        

        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-phone-vibrate-fill"></i></span>
          <input type="text" class="form-control" placeholder="Enter Your Mobile No.">

          <input type="text" class="form-control" placeholder="Enter Your Zip Number">
          <span class="input-group-text"><i class="bi bi-map-fill"></i></span>
        </div><br>        

        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
          <label class="form-check-label">Confirm Submited</label>
        </div>

        <input type="submit" name="submit" class="btn btn-info mt-4 mb-3 mgright-lofm" value="Submit">
        <input type="reset" name="clean" class="btn btn-danger mt-4 mb-3 mgright-lofm" value="Clear">
    </form>
    </div>
    </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>




</body>
</html>