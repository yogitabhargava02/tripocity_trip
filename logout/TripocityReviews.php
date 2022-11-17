<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="Logout.css">
   <link rel="stylesheet" href="../assets/css/nav.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

   <title>Tripocity</title>

</head>

<body>

   <header class="container-fluid" style="color: black" id="navv">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div id="headerpage" class="header">
          <table style="width: 100%; margin-bottom: 5px">
            <tbody>
              <tr>
                <td>
                  <div style="clear: both;  float: left; width: 230px;  margin-top: 15px; margin-left: 20px;  ">
                    <a><img src="https://img.icons8.com/bubbles/50/000000/airport.png" alt="Tripocity Logo" /></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
  
        <ul class="nav col-12 col-lg-auto me-lg-auto ms-a">
          <a class="navbar-brand text-primary ms-auto" href="Logout.php">Tripocity</a>
          <li>
            <a href="logout.php" class="nav-link px-2 text-black">Home</a>
          </li>
          <li>
            <a href="Hotels.php" class="nav-link px-2 text-black">Hotels</a>
          </li>
          <li><a href="about.php" class="nav-link px-2 text-black">About us</a></li>
           <!---  <li>
               <a href="file:///D:/images/TripocityTranportation.html"
                  class="nav-link px-2 text-black"style="font-weight: 600;">Transportation</a>
            </li>  -->
          <li>
            <a href="TripocityReviews.php" class="nav-link px-2 text-black">Reviews</a>
          </li>
        </ul>
        <div class="wrapper">
          <div class="navbar">
  
              <div class="nav_right">
                  <ul>
                      <li class="nr_li dd_main">
                          <img src="icon.png" width="900px" alt="profile_img">
  
                          <div class="dd_menu">
                               
                              <div class="dd_right">
                                  <ul>
                                      <!--             <li> 
                                          <a href="#">My Profile</a>
                                      </li>
                                      <li>
                                          <a href="#">Edit Profile</a>
                                      </li>     
                      -->
  
                                      <li>
                                          <a class="logo" href="index.php"> Logout</a>
                                      </li>
  
                                  </ul>
                              </div>
                          </div>
                      </li>
  
                  </ul>
              </div>
          </div>
      </div>
  
      <script>
          var dd_main = document.querySelector(".dd_main");
  
          dd_main.addEventListener("click", function () {
              this.classList.toggle("active");
          })
      </script>
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
  </div>
   
  <br> 
  <div class="container-fluid contact_container">
    <div class="row">
      <div class="col-md-12">
       <div class="card border-dark my-3 text-center ">
         <div class="card-header bg-light ">Contact Us</div>
          
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