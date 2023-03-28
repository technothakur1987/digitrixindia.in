<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e357c704ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../style.css">
    <title>Digitrix :user Dashboard</title>
  </head>
  <body >
    <!--navbar-->
    <div class="container-fluid bg-danger text-white text-center pt-2 pb-0 navbar fixed-top">
      <div class="right-navbar d-flex justify-content-center align-items-center">
        <ul class="list-unstyled d-flex m-auto">
          <li class=""><a href="../index.php"><i class="fa-solid fa-house "></i></a></li>
          <li class=""><a href="user_dashboard.php"><i class="fa-solid fa-user "></i></a> </li>
          <li class=""><a href="tel:8109184732"><i class="fa-solid fa-phone "></i></a></li>
        </ul>
      </div>
      <div class="left-navbar d-flex justify-content-center align-items-center">
        <ul class="list-unstyled d-flex  m-auto">
          <li class="py-2"><a href="https://www.youtube.com/results?search_query=motivational+story+" target="_blank"><i class="fa-brands fa-youtube "></i></a></li>
          <li class="py-2"><a href="https://www.instagram.com/thakursingh622/" target="_blank"><i class="fa-brands fa-instagram "></i></i></a></li>
          <li class="py-2"><a href="https://www.instagram.com/thakursingh622/" target="_blank"><i class="fa-brands fa-twitter "></i></a></li>
          <li class="py-2"><a href="https://www.instagram.com/thakursingh622/" target="_blank"><i class="fa-brands fa-facebook "></i></a></li>
          <li class="position-relative p-2"><a href="../shopping_cart.php" ><span class="position-absolute top-0 start-0 translate-start badge rounded-circle bg-dark">0</span><i class="fa-solid fa-cart-shopping "></i></a></li>
          <li class="navbar-hover py-2"><a onclick="myFunction()" ><i class="fa-solid fa-bars "></i></a></li>
        </ul>
        

      </div>
      <div class="w-100 text-start" id="myDIV">
        <ul class="list-unstyled  pt-3">
        <a href="../aboutus.php" class="text-decoration-none text-white"><li class="py-2 ps-2 mydivhover-li fw-bold">ABOUT US</li></a>
        <a href="../certificate.php" class="text-decoration-none text-white"><li class="py-2 ps-2 mydivhover-li fw-bold">OUR CERTIFICATES</li></a>
        <a href="../contact.php" class="text-decoration-none text-white"><li class="py-2 ps-2 mydivhover-li fw-bold">CONTACT US</li></a>
          
        </ul>
      </div>
    </div>

    <!--Quotation page starts here-->
    <div class="container-fluid d-flex justify-content-center align-items-center pt-5">

            <form class="mt-5">
                <h3 class="text-center text-danger">Quotaion page</h3>
  
                <div class="mb-3">
                    <div class=" form-check form-check1">
                    <input class=" form-check-input form-check-input1" type="checkbox" value="" id="flexCheckDefault">

                        <label class="form-check-label text-white " for="flexCheckDefault">
                         :- Home Page Final Price
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white "> No Of Static Pages</label>
                    <input type="number" step="1" pattern="^[-/d]/d*$" class="form-control" id="exampleInputPassword1" placeholder="Plz Enter Total nu of static page in website">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword11" class="form-label text-white "> No Of Static Pages</label>
                    
                    <select class="form-select form-control" aria-label="Default select example"  id="exampleInputPassword11">
                        <option selected>No Of Static webpages  </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
       
                        <option value="6">Six</option>
       
                        <option value="7">Seven</option>
       
                        <option value="8">Eight</option>
       
                        <option value="9">Nine</option>
       
                        <option value="10">More than 10</option>
       
                        
       
                        </select>
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword11" class="form-label text-white "> Domain Name Registration  if available within price </label>
                    
                    <select class="form-select form-control" aria-label="Default select example"  id="exampleInputPassword11">
                        <option selected>Domain name</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword11" class="form-label text-white "> Server with 1 gb of space and hosting </label>
                    
                    <select class="form-select form-control" aria-label="Default select example"  id="exampleInputPassword11">
                        <option selected>Open this select menu</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword11" class="form-label text-white "> Content Writing 700 per page  </label>
                    
                    <select class="form-select form-control" aria-label="Default select example"  id="exampleInputPassword11">
                        <option selected>Content Writing</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword11" class="form-label text-white "> Admin Panel  </label>
                    
                    <select class="form-select form-control" aria-label="Default select example"  id="exampleInputPassword11">
                        <option selected>Admin Panel</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    
                </div>
  
                
                <a onclick="myFunction2()" class="text-white btn hoverdashboardbtn ps-2 pe-2">Calculate</a>
                <div class="w-100 text-start border p-2" id="myDIVV">
                    <h4 class="text-danger">
                        Your Final Quotation price is 0/-Inr..
                    </h4>
                    <h4 class="text-white">
                        Coupon
                    </h4>
                    <p class="text-secondary ">Enter Coupon code If You have One...</p>
                    
                                
                                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Enter Coupon code</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Enter Coupon code">
                                <button class="btn btn-danger" type="button">Apply Now</button>
                                </div>
        

                </div>

                <a type="submit" class="btn hoverdashboardbtn">Submit</a>
            </form>
    </div>



   


   

   

  

   
 


 


    


    <!--Footer-->
 <div class="container-fluid">
    
    <footer class="py-5">
    <div class="row" style=" --bs-gutter-x: 0rem!important;">
      <div class="col-6 col-md-2 mb-3">
        <h5 class="text-danger">Main 
          Sections
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="../index.php" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="../aboutus.php" class="nav-link p-0 text-muted">About Us</a></li>
          <li class="nav-item mb-2"><a href="../certificate.php" class="nav-link p-0 text-muted">Our Certificates</a></li>
          <li class="nav-item mb-2"><a href="../contact.php" class="nav-link p-0 text-muted">Contact Us</a></li>

        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5 class="text-danger" >Important Links:</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="../search_engine_optimization.php" class="nav-link p-0 text-muted"><i class="fa-solid fa-magnifying-glass"></i> seo</a></li>
          <li class="nav-item mb-2"><a href="../search_engine_advertising.php" class="nav-link p-0 text-muted"><i class="fa-solid fa-arrow-up"></i> sem</a></li>
          <li class="nav-item mb-2"><a href="../web_develop.php" class="nav-link p-0 text-muted"><i class="fa-solid fa-mars-stroke-up"></i> web-dev</a></li>
          <li class="nav-item mb-2"><a href="../digi_marketing_strategy.php" class="nav-link p-0 text-muted"><i class="fa-solid fa-thumbs-up"></i> digi-marketing</a></li>
          <li class="nav-item mb-2"><a href="../content_marketing.php" class="nav-link p-0 text-muted"><i class="fa-solid fa-file"></i> con.-marketing</a></li>
          
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5 class="text-danger">Contact Us</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">135, new colony , Indore (mp)</a></li>
          <li class="nav-item mb-2"><a href="mailto:technothakur1987@gmail.com" class="nav-link p-0 text-muted">Technothakur1987@gmail.com</a></li>
          <li class="nav-item mb-2"><a href="tel:8109184732" class="nav-link p-0 text-muted">+91/ 8109184732</a></li>
          
          
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5 class="text-danger">Subscribe to our newsletter</h5>
          <p class="text-light text-muted">Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-danger" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4  border-danger border-top">
      <p class="text-danger">© 2023 TechnoThakur. All Rights Reserved.</p>
      
    </div>
  </footer>
</div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></>
  <script>
    AOS.init();
  </script>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="../style.js"></script>  
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>