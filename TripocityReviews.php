<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- <link rel="stylesheet" href="assets/css/nav.css"> -->
   <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

   <title>Tripocity</title>

</head>

<body>

   <header class="p-3 bg- "  >
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
         <div id="headerpage" class="header">
            <table style="width: 100%; margin-bottom: 5px">
               <tbody>
                  <tr>
                     <td>
                        <div style="
                        clear: both;
                        float: left;
                        width: 230px;
                        margin-top: 15px;
                        margin-left: 20px;
                      ">
                      <a><img src="https://img.icons8.com/bubbles/50/000000/airport.png"
                                 alt="Tripocity Logo" /></a>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>

<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <a class="navbar-brand text-primary mx-0" href="#">Tripocity</a>
          <li><a href="index.php" class="nav-link px-2 text-black " style="font-weight: 600;">Home</a></li>
          <li><a href="about.php" class="nav-link px-2 text-black " style="font-weight: 600;">About us</a></li>
          <li><a href="Hotels.php" class="nav-link px-2 text-black " style="font-weight: 600;">Hotels</a></li>
          <!-- <li><a href="Restaurants.php" class="nav-link px-2 text-white">Restaurants</a></li>
          <li><a href="TripocityTrains.php" class="nav-link px-2 text-white">Trains</a></li>
          <li><a href="Tripocitybuses.php" class="nav-link px-2 text-white"> Buses </a> </li> -->
          <li><a href="TripocityReviews.php" class="nav-link px-2 text-black " style="font-weight: 600;"> Reviews </a></li>
        </ul>

        

        <div class="text-end">
          <!--<button type="button" class="btn btn-outline-light me-2">Login / Sign-up</button>
          <a href="file:///C:/Users/Anushka%20Agrawal/Downloads/index.html">login or signup</a> -->

          <div class="text-end">
          <button class = "login_signup"><a style="color: inherit; text-decoration: inherit;" href="login">Login / Sign-up</a></button>
        </div>
  </header>
        </div>
  </header>
  
  <div class="contener my-5">
    <form action="Connect.php" method="post" class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label"><b> Name</b></label>
          <input type="text" class="form-control" id="validationCustom01" name="name" value="" required>
           
        </div>
      
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label"><b>Username</b></label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername"  name="username" value="" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label"><b>About </b></label>
            <select class="form-select" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              <option>Hotels</option>
              <!-- <option>Restaurants</option>
              <option>Transportation</option> -->
              <option>Suggestions</option>
            </select>
             </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label"><b>Reviews</b></label>
          <input type="text" class="form-control" id="validationCustom03" name="review" value="" required>
           
        </div>
        
         
        <!-- <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div> -->
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>
    </div>

  </div>
  </div>
  <!-- <div class="contener my-3 ">
    <div class="card border-light text-center">
      <div class="card-header bg-light border-dark">Why Tripocity...?
     </div>

    </div>
  </div> -->


         <!-- <ul class="nav col-12 col-lg-auto me-lg-auto ms-a">
            <a class="navbar-brand text-primary ms-auto" href="#">Tripocity</a>
            <li>
               <a href="http://127.0.0.1:5500/tripocity.html" class="nav-link  px-2  text-black " style="font-weight: 600;" >Home</a>
            </li>
            <li>
               <a href="http://127.0.0.1:5500/Hotels.html" class="nav-link px-2 text-black"style="font-weight: 600;">Hotels</a>
            </li>
            <li><a href="" class="nav-link px-2 text-black"style="font-weight: 600;">Restaurants</a></li>
             <li>
               <a href="file:///D:/images/TripocityTranportation.html"
                  class="nav-link px-2 text-black"style="font-weight: 600;">Transportation</a>
            </li> -->
            <!-- <li>
               <a href="http://127.0.0.1:5500/Reviews.html" class="nav-link px-2 text-black"style="font-weight: 600;">Reviews</a>
            </li>
         </ul>
         <div class="text-end">
            <button onclick="document.location='http://127.0.0.1:5500/index.html'" class="login_signup">
               Login / Sign-up
            </button>
         </div>
      </div>
   </header>
  
  <div class="container-fluid my-5">
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label" style="font-weight: 700;"> Name</label>
          <input type="text" class="form-control" id="validationCustom01" value="" required>
           
        </div>
      
        <div class="container-fluid col-md-4">
          <label for="validationCustomUsername" class="form-label"  style="font-weight: 700;" >Username</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        
        <div class=" col-6">
         
          <label for="subject  " style="font-weight: 700; margin-top: 5px;"  >Review</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="width: 100%; height: 100px; "></textarea>
        </div>
        
         
        <div class="col-12" style="box-sizing: content-box;">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>
    </div>

  </div>
  </div> --> 
   
  <br> 
  <div class="container-fluid contact_container">
    <div class="row">
       <div class="col-md-12">
       <div class="card border-dark my-3 text-center ">
          <div class="card-header bg-light ">Contact Us</div> -->
          
        <br> 
         <div class="box bg-light">
          
           <a href="https://www.facebook.com/"  ><img src="https://img.icons8.com/cute-clipart/64/000000/facebook-new.png"/></a>
           <span style="width:30px;display:inline-block"></span>
           <a href="https://www.instagram.com/"  ><img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"/></a>
           <span style="width:30px;display:inline-block"></span>
           <a href="https://twitter.com/?lang=en" ><img src="https://img.icons8.com/cute-clipart/64/000000/twitter.png"/></a>
           <span style="width:30px;display:inline-block"></span>
           <a href="https://in.linkedin.com/"><img src="https://img.icons8.com/cute-clipart/64/000000/linkedin.png"/></a>
         </div>
         <br>
       </div>
      </div>
    </div>
   </div>
          <br>
  </div>




  

  <footer class="blog-footer text-center">
    <p>A Trip Planner<a href="https://getbootstrap.com/">Tripocity</a> by <a href="https://twitter.com/mdo">@Yav</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>