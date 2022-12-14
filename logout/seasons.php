<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Logout.css">
   
  <link rel="stylesheet" type="text/css" href="assets/css/season.css">
   
  <style>
    a{
      text-decoration: none;
    }
  </style>
  <title>Tripocity</title>
</head>

<body>
  <header class="p-3  "  >
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

       <ul class="nav col-12 col-lg-auto me-lg-auto ms-a">
            <a class="navbar-brand text-primary ms-auto" href="logout.php">Tripocity</a>
            <li>
              <a href="logout.php" class="nav-link px-2 text-black">Home</a>
            </li>
            <li>
              <a href="hotels.php" class="nav-link px-2 text-black">Hotels</a>
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
 
  <div class="container-fluid">
    <div id="carouselExampleDark" class="carousel carousel-dark slide position-relative" data-bs-ride="carousel">
      <div class="carousel-indicators" style=" display: flex; position: absolute; width: 100px; height: 50px;   margin-left: 47%;  ">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000" >
          <img src="https://d1whtlypfis84e.cloudfront.net/guides/wp-content/uploads/2019/07/27114414/Summer-season.jpg"  width="100%" height="750" 
            class="w-100 " alt="...">
          <div class="carousel-caption d-none d-md-block" >
            <h5 style="color:aliceblue"><b>MADHYA PRADESH</b></h5>
            <p style="color:aliceblue" ><i><b>Summer Season</b></i></p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img
            src=" https://d368ufu7xgcs86.cloudfront.net/10456-1552137985.jpg"   width="100%" height="750" 
            class=" " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5><b>MADHYA PRADESH</b></h5>
            <p><i><b>Winter Season</b></i></p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img
            src="https://keralakaumudi.com/web-news/en/2021/07/NMAN0255878/image/onam.1625592731.jpg"   width="100%" height="750" 
            class=" " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style="color:aliceblue"><b>MADHYA PRADESH</b></h5>
            <p style="color:aliceblue"><i><b>Monsoon Season</b></i></p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img
            src="https://cdn.britannica.com/05/155405-050-F8969EE6/Spring-flowers-fruit-trees-bloom.jpg"   width="100%" height="750" 
            class=" " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style="color:aliceblue"><b>MADHYA PRADESH</b></h5>
            <p style="color:aliceblue"><i><b>Spring Season</b></i></p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img
            src="https://cdn.britannica.com/88/137188-050-8C779D64/Boston-Public-Garden.jpg"  width="100%" height="750"
            class=" " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 ><b>MADHYA PRADESH</b></h5>
            <p><i><b>Autumn Season</b></i></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <br>
<div class="bottom" style="display: flex; justify-content:center;" >
  <h2>Places Visit According to season</h2>
</div>
  <br>
  <div class="container-fluid" style="position:relative; justify-content:center;" >
    <h1 style="text-align: center;">In Summer</h1>
    <br>
    
  <div class="clearfix border-2-dark">
    <div class="card-group">
      <div class="card"style="margin: 30px;">
          <img src="https://media.istockphoto.com/photos/pachmarhi-forest-treeline-picture-id1186385408?k=20&m=1186385408&s=612x612&w=0&h=GMnn_fbjQnq1G1CAmgoxRBO_Oo0-PEOWlMv_nkh1Y-o=" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="Pachmari.php" class="_blank">
              <h5 class="card-title">Pachmarhi : For Nature Lovers</h5>
          </div>
        </div>
   
      <div class="card"style="margin: 30px;">
          <img src="https://static.punjabkesari.in/multimedia/12_20_118998406bhedaghat-waterfall-4.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="jabalpur.php" class="_blank">
              <h5 class="card-title">Jabalpur : Breathtaking Beauty</h5>
          </div>
        </div>
      
      <div class="card"style="margin: 30px;">
          <img src="https://en-media.thebetterindia.com/uploads/2019/11/Untitled-design-75.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="panna.php" class="_blank" >
            <h5 class="card-title">Panna National Park : Rare Interactions</h5>
          </div>
        </div>

    </div>
    
  </div>
</div>
<br>


<div class="container-fluid" style="position:relative; justify-content:center;" >
  <h1 style="text-align: center;">In Winter</h1>
  <br>
  <div class="clearfix border-2-dark">
    <div class="card-group" style = "width:100%">
      <div class="card"style="margin: 30px;">
          <!-- <img src="https://static.toiimg.com/thumb/64665528/Khajuraho-Temples.jpg?" width="400" height="250" -->
           <img src="https://media.istockphoto.com/photos/famous-temples-of-khajuraho-picture-id520838006?k=20&m=520838006&s=612x612&w=0&h=AycsceKXVJ-X4VVns1eLGZPLgt3FN6-6UaeY5V4REic=" width="400" height="250"
             class="card-img-top" alt="...">
            <!-- <img src="https://www.outlookindia.com/outlooktraveller/public/uploads/filemanager/images/shutterstock_1387194695_5eef9f8054250.jpg" width="400" height="250"
            class="card-img-top" alt="..."> -->
          <div class="card-body">
            <a href="khajuraho.php" class="_blank">
              <h5 class="card-title">Khajuraho</h5>
          </div>
        </div>
   
      <div class="card"style="margin: 30px;">
          <img src="https://www.outlookindia.com/outlooktraveller/public/uploads/filemanager/images/shutterstock_1387194695_5eef9f8054250.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="bhimbetka.php" class="_blank">
              <h5 class="card-title">Bhimbetka</h5>
          </div>
        </div>
      
      <div class="card"style="margin: 30px;">
          <img src="https://3.imimg.com/data3/YB/QT/MY-11265563/bandhavgarh-national-park-500x500.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="bandhavgarh.php" class="_blank">
            <h5 class="card-title">Bandhavgarh National Park</h5>
          </div>
        </div>

    </div>
    
  </div>
</div>

<br>

<div class="container-fluid" style="position:relative; justify-content:center;" >
  <h1 style="text-align: center;">In Monsoon</h1>
  <br>
  <div class="clearfix border-2-dark">
    <div class="card-group" style = "width:100%">
      <div class="card"style="margin: 30px;">
          <img src="https://www.mptourism.com/images/point-of-interest/Jahaz%20Mahal.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="MagicalMandu.php" class="_blank">
              <h5 class="card-title">Magical Mandu</h5>
          </div>
        </div>
   
      <div class="card"style="margin: 30px;">
          <img src="https://static.wixstatic.com/media/421ce0_bc55a2c8c1ed489db4ba7692ea48087c~mv2.jpg/v1/fill/w_602,h_480,al_c,q_80,usm_0.66_1.00_0.01/Tawa%20Resort%2C%20Tawa.webp" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="Gwalior.php" class="_blank">
              <h5 class="card-title">Gwalior</h5>
          </div>
        </div>
      
      <div class="card"style="margin: 30px;">
          <img src="https://youphoria.co.in/wp-content/uploads/2018/08/paddle-boat-1.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="Bhopal.php" class="_blank">
            <h5 class="card-title">Bhopal: The City of Lakes</h5>
          </div>
        </div>

    </div>
    
  </div>
</div>
<br>

<div class="container-fluid" style="position:relative; justify-content:center;" >
  <h1 style="text-align: center;">In Spring </h1>
  <br>
  <div class="clearfix border-2-dark">
    <div class="card-group" style = "width:100%">
      <div class="card"style="margin: 30px;">
          <img src="https://doorsafar.com/wp-content/uploads/2021/02/tiger-in-Kanha-National-Park.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="kanhanationalpark.php" class="_blank">
              <h5 class="card-title">Kanha National Park</h5>
          </div>
        </div>
   
      <div class="card"style="margin: 30px;">
          <img src="https://www.mptourism.com/images/point-of-interest/Shri%20Yantra%20Temple.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="amarkantak.php" class="_blank">
              <h5 class="card-title">Amarkantak</h5>
          </div>
        </div>
      
      <div class="card"style="margin: 30px;">
          <img src="https://4.bp.blogspot.com/-D2JFeU-DIw0/VGCbiWfZEAI/AAAAAAAABTo/aEvc5t2UBR4/s1600/bhind.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="tamia.php" class="_blank">
            <h5 class="card-title">Tamia</h5>
          </div>
        </div>

    </div>
    
  </div>
</div>
<br>

<div class="container-fluid" style="position:relative; justify-content:center;" >
  <h1 style="text-align: center;">In Autumn</h1>
  <br>
  <div class="clearfix border-2-dark">
    <div class="card-group" style = "width:100%">
      <div class="card"style="margin: 30px;">
          <img src="https://img.theculturetrip.com/wp-content/uploads/2018/01/orchha-natural-reserve.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="Orchha.php" class="_blank">
              <h5 class="card-title">Orchha Nature Reserve</h5>
          </div>
        </div>
   
      <div class="card"style="margin: 30px;">
          <img src="https://www.holidify.com/images/cmsuploads/compressed/Patalpani_Waterfall_20180807213839.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="indore.php" class="_blank">
              <h5 class="card-title">Indore</h5>
          </div>
        </div>
      
      <div class="card"style="margin: 30px;">
          <img src="https://www.wondermondo.com/wp-content/uploads/2017/10/Pachmarhi.jpg" width="400" height="250"
            class="card-img-top" alt="...">
          <div class="card-body">
            <a href="shivpuri.php" class="_blank">
            <h5 class="card-title">Shivpuri</h5>
          </div>
        </div>

    </div>
    
  </div>
</div>


    <div class="container-fluid">
      <div class="card border-dark my-5 text-center mx-4">
        <div class="card-header bg-light ">Contact Us</div>
        <div class="box bg-light">

          <a href="#">facebook</a>
          <a href="#">instagram</a>
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
        </div>
      </div>
    </div>
  </div>






  <footer class="blog-footer text-center">
    <p>A Trip Planner<a href="https://getbootstrap.com/">Tripocity</a> by <a href="https://twitter.com/mdo">@Yav</a>.
    </p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

</html>