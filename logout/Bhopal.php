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


    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://yometro.com/images/places/bhopal-main.jpg" width="100%" height="700"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.holidify.com/images/bgImages/BHOPAL.jpg" width="100%" height="700"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.india-tours.com/images/states-images/madhya-pradesh/bhopal/bhopal-india-tours-2.jpg"
                    width="100%" height="700" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid my-4 ">
        <h1 style="    text-align: center;
      margin-bottom: 60px;
      color: #44040b;
      text-transform: uppercase;
      letter-spacing: 6px;
      font-family: 'eb_garamondsemibold';
      font-weight: 600;
      font-size: 35px;
      padding-top: 2px;"> Bhopal: The City of Lakes</h1>
    </div>
    <div class="container-fluid">
        <p style=" text-align: center;"> Bhopal also known as the 'City of Royals' has a long, important history.
            Between 1819 and 1926, it was ruled by the generation of Begums for over 100 years, who gave the city its
            waterworks, railways, a postal system, and a municipality.
            Between 1819 and 1926, it was ruled by the generation of Begums for over 100 years, who gave the city its
            waterworks, railways, a postal system, and a municipality.
            The four Queens, Qudsia Begum (1819-37), Sikander Begum (1844-68), Shah Jahan Begum (1868-1901), and Sultan
            Jahan Begum (1901-1926) were great reformists and patrons of education, art, culture and public works.
            They also built several great monuments, which still stand as testimonies to the city's celebrated past.
            Bhopal is adorned by beautiful lakes and striking landscapes. Towards the north, you'll be welcomed by the
            old city that encompasses fascinating mosques, serpentine alleys, amazing food corners and buzzing chowks.
            On the other side of the upper lake is new Bhopal.
            Modern, with wide roads, shopping complexes, plush hotels and restaurants. Both contrast flanks are
            well-connected and offer something for every taste!
        </p>
    </div>


    <section>
        <div class="container-fluid my-4" style="border-bottom: 2px solid black ;">
            <h2 class="title" style="   text-align: center;
           margin-bottom: 60px;
           color: #44040b;
           text-transform: uppercase;
           letter-spacing: 6px;
           font-family: 'eb_garamondsemibold';
           font-weight: 600;
           font-size: 35px;
           padding-top: 2px;">Points of Interest</h2>

            <div class="row">
                <div class="col-sm-6 pr-0">
                    <div class="places-items first-img">
                        <div class="places-items-img places-item-1 open-lightbox"
                            style="background: URL(https://www.mptourism.com/images/point-of-interest/Laxmi%20Narayan%20Temple.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;height: 617px;">
                        </div>
                        <div class=" places-txt">
                            <h4 style="font-family: 'eb_garamondsemibold';"><b> Lakshmi Narayan Temple</b></h4>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 pd-0">
                    <div class="places-items">
                        <div class="places-items-img places-item-2 open-lightbox"
                            style="background:  URL( https://www.mptourism.com/images/point-of-interest/sapata%20pan.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;height:290px;width: 100%;">
                        </div>
                        <div class="places-txt">
                            <h4 style="font-family: 'eb_garamondsemibold';"><b>Sair Sapata</b></h4>
                        </div>
                    </div>
                    <div class="places-items">
                        <div class="places-items-img places-item-2 open-lightbox "
                            style="background: URL(https://www.mptourism.com/images/point-of-interest/Sadar%20Manzil.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;height: 290px;width: 100%;">
                        </div>
                        <div class="places-txt">
                            <h4 style="font-family: 'eb_garamondsemibold';"><b>Sadar Manzil</b> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 pl-0">
                    <div class="places-items">
                        <div class="places-items-img places-item-2 open-lightbox "
                            style="background:   URL(https://www.mptourism.com/images/point-of-interest/Upper%20Lake.jpg) ; background-size: cover; background-position: center; background-repeat: no-repeat;height: 290px;width: 100%;">
                        </div>
                        <div class="places-txt">
                            <h4 style="font-family: 'eb_garamondsemibold';"><b> Upper Lake</b> </h4>
                        </div>
                    </div>
                    <div class="places-items">
                        <div class="places-items-img places-item-2 open-lightbox "
                            style="background: URL(https://www.mptourism.com/images/point-of-interest/Vanvihar_3891.jpg ); background-size: cover; background-position: center; background-repeat: no-repeat;height: 290px;width: 100%;">
                        </div>
                        <div class="places-txt">
                            <h4 style="font-family: 'eb_garamondsemibold';"><b>Van Vihar National Park</b> </h4>
                        </div>
                    </div>
                </div>
            </div>

    </section>


    <section class="nearby-sec">
        <div class="container-fluid my-4 border-3">
            <h2 class="title  " style="   text-align: center;
               margin-bottom: 60px;
               color: #44040b;
               text-transform: uppercase;
               letter-spacing: 6px;
               font-family: 'eb_garamondsemibold';
               font-weight: 600;
               font-size: 35px;
               
               padding-top: 2px;"> Nearby destinations</h2>
            <div class="row">
                <div class="col-sm-6" style="display: flex; justify-content: center;">
                    <div class="nearby-items">
                        <div class="zoom-img">
                            <div class="nearby-img">
                                <img src="https://www.mptourism.com/images/destination/sanchi/nearby_image.png" width="100%" height="490">
                            </div>
                        </div>
                        <div class="nearby-dtl">
                            <h3 style=" font-family: 'eb_garamondsemibold';  "><b> Sacred Sanchi (48 KM)</b></h3>
                            <p>The town of Sanchi is synonymous with Buddhist Stupas - hemispherical structures
                                typically containing relics of the Buddha or his followers.
                                The Stupas of Sanchi were constructed on the orders of Emperor Ashoka to preserve and
                                spread the Buddhist philosophy.
                                Sanchi has been protecting these beautiful and sacred architectural wonders, just the
                                way these wonders have been safeguarding ancient history and art of the Mauryan period.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="nearby-items">
                        <div class="zoom-img">
                            <div class="nearby-img">
                                <img src="https://www.mptourism.com/images/destination/bhimbetka/nearby_image.png" width="100%" height="490">
                            </div>
                        </div>
                        <div class="nearby-dtl">
                            <h3 style=" font-family: 'eb_garamondsemibold';"><b>Amazing Bhimbetka (45 KM)</b></h3>
                            <p>Cave paintings dating back to approximately 30,000 years. Rock shelters that were home to
                                humans, millennia ago.
                                And a rich flora and fauna surrounding these, indeed, make Bhimbetka a gift to us from
                                our earliest ancestors.
                                The Bhimbetka Rock Shelter has the oldest-known rock art in India, as well as is one of
                                the largest prehistoric complexes to be seen.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container-fluid  my-3">
        <h2 style="display: flex; justify-content:center ;  text-align: center; color: black;text-transform: uppercase;
                font-family: 'eb_garamondsemibold';font-weight: 600;font-size: 35px; border-bottom: 2px solid black;  "
            class="ccontainer_Information"> How
            to Reach Bhopal </h2>
        <div class="text  " style=" text-align:  center; padding-bottom: 30px;">
            <i><b> Bhopal being the capital city of Madhya Pradesh has it's own airport and a railway station which
                    connects it to all major cities of the country. It also has very efficient bus and cab services
                    which can be particularly helpful while travelling to places near Bhopal.</b></i>
        </div>
        <div style="width: 100%; display: flex; justify-content: center; align-items: center;  font-weight:bold; ">

            <button class="btn btn-primary btn-layer  " style="white-space: nowrap;" data-bs-toggle="collapse"
                href="#multiCollapseExample1" role="button" aria-expanded="false"
                aria-controls="multiCollapseExample1">How
                to reach Bhopal By flight
            </button>
            <span style="width:80px;display:inline-block"></span>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">How
                to reach Bhopal By road
            </button>
            <span style="width:80px;display:inline-block"></span>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3"> How
                to reach Bhopal by train
            </button>
            <span style="width:80px;display:inline-block"></span>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">
                Local transport in Bhopal
            </button>

        </div>

        <div class="row">
            <div class="col-3">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        <p style="margin-left: 3px; text-align: start; border: 2px solid darkgrey;"><i><b> How to reach
                                    Bhopal by flight
                                    Bhopal has its own Airport, the Raja Bhoj International Airport, where regular
                                    flights operate to various cities of the country. The airport is about 15km away
                                    from the city.

                        </p>
                        <p> <b> Nearest Airport: </b>Raja Bhoj Airport (BHO)</b></i>
                            <br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        <p style="margin-left: 3px; text-align: start; border: 2px solid darkgrey;"><i><b> Bhopal is
                                    easily accessible through an excellent system of roadways and highways. NH12 and NH
                                    86 run through Bhopal.</b></i> </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                    <div class="card card-body">
                        <p style="margin-left: 3px; text-align: start; border: 2px solid darkgrey;"><i><b>
                                    Bhopal Junction falls under the west-central zone of India railways. The city is
                                    well connected to all major railway stations in the country. </b></i></p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="collapse multi-collapse" id="multiCollapseExample4">
                    <div class="card card-body">
                        <p style="margin-left: 3px; text-align: start; border: 2px solid darkgrey;"><i><b>
                                    The local auto-rickshaws, buses and cab services facilitate travelling locally in
                                    Bhopal
                                </b></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid">
        <div class="row no-gutters mb-50 mx-4">
            <h2 class="heading2 w-100"><b><i> Monthly Weather in Bhopal </i></b></h2>
            <div class="table-responsive">
                <table class="table "
                    style="border: 2px solid rgb(0, 0, 0);margin-top: 2px; margin-bottom: 2px; background-color:rgb(131, 206, 253) ;">
                    <thead>
                        <tr>
                            <th scope="col">Month</th>
                            <th scope="col">High/Low (°C)</th>
                            <th scope="col">Rain </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr scope="row" class="selected">
                            <td> January </td>
                            <td> 23°/
                                10° </td>
                            <td> 5 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> February </td>
                            <td> 28°/
                                12° </td>
                            <td> 0 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> March </td>
                            <td> 32°/
                                17° </td>
                            <td> 2 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> April </td>
                            <td> 37°/
                                22° </td>
                            <td> 3 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> May </td>
                            <td> 40°/
                                27° </td>
                            <td> 0 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> June </td>
                            <td> 38°/
                                27° </td>
                            <td> 12 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> July </td>
                            <td> 30°/
                                23° </td>
                            <td> 21 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> August </td>
                            <td> 27°/
                                22° </td>
                            <td> 28 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> September </td>
                            <td> 27°/
                                22° </td>
                            <td> 30 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> October </td>
                            <td> 28°/
                                20° </td>
                            <td> 9 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> November </td>
                            <td> 29°/
                                18° </td>
                            <td> 1 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> December </td>
                            <td> 25°/
                                12° </td>
                            <td> 2 days </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class=" container-fluid row no-gutters mb-50 ">


        <h2 class="heading2 w-100"><i><b> What is the best time to visit Bhopal </b></i> </h2>
        <p> The best time to visit Bhopal is during the winter months of October to March. The weather is an ideal one
            for exploring the experiencing the rich flavours of the grand city. July-September is the second best time
            to visit the city. </p>
    </div>

    <div class="container" style="align-items: center; justify-content: center; background-color: rgb(170, 234, 248);">
        <div class="row no-gutters mt-4 mb-50 ">
            <div class="col-12">
                <h2 class="heading2 w-100"
                    style=" text-align: center; border-bottom: 2px solid black; padding-bottom: 5px;">
                    More about Best Time to Travel to Bhopal</h2>
            </div>
            
                <div class="accordion" id="accordionFlexibleParagraphs">
     
                    <div class="card" style="background-color: rgb(240, 178, 240); margin: 10px;">
                      <div class="card-header collapsed" id="heading1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false">
                        <h2> Bhopal in Summer (April - June) </h2>
                      </div>
                      <div id="collapse1" class="accordion-item collapse" >
                        <div class="card-body article"> The summer months from April to June and May in specific are hot, dry and sultry ones. This isn't a good time to visit the city. If you do visit Bhopal during summers, make sure you carry scarves, light cotton clothes and keep yourself hydrated. 
                   </div>
                      </div>
                    </div>
                   
                    <div class="card" style="background-color: rgb(240, 178, 240); margin: 10px;">
                      <div class="card-header" id="heading2" data-toggle="collapse" data-target="#collapse2">
                        <h2> Bhopal in Monsoon (July - September) </h2>
                      </div>
                      <div id="collapse2" class="collapse accordion-item">
                        <div class="card-body article"> Monsoon months are the second best time to visit the city after lowered temperatures and cool showers. The added greenery and beauty is breathtaking. 
                   </div>
                      </div>
                    </div>
                   
                    <div class="card" style="background-color: rgb(240, 178, 240); margin: 10px;">
                      <div class="card-header" id="heading3" data-toggle="collapse" data-target="#collapse3">
                        <h2> Bhopal in Winter (October - March) </h2>
                      </div>
                      <div id="collapse3" class="collapse accordion-item">
                        <div class="card-body article"> The months of October to early March are perfect to visit Bhopal in terms of the pink weather and cool climate. This period witnesses a lot of tourists from far and wide. 
                   </div>
                      </div>
                    </div>
                      
                    </div>
        </div>
    </div>
    <br>


    <div class="col-sm-3 " data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
        <div class="travel-items" style=" text-align-last: center;">
            <h4><a href="https://www.google.com/maps/dir/Dhuandhar+Water+Fall,+Jabalpur,+Madhya+Pradesh/Marble+Rocks,+Madhya+Pradesh/Chausath+Yogini+temple,+Bhedaghat,+Madhya+Pradesh/@23.1037946,79.7936507,13z/data=!3m1!4b1!4m20!4m19!1m5!1m1!1s0x3981b4148395f967:0x43a66ba641bcf802!2m2!1d79.8133889!2d23.1254318!1m5!1m1!1s0x3981b4307f63f08f:0x74d795ee331f1ae4!2m2!1d79.795454!2d23.1299297!1m5!1m1!1s0x3981b43bf4abeb0d:0x9786477fc8a98c6d!2m2!1d79.8014251!2d23.1297282!3e0"
                    target="_blank">Destination Map</a></h4>
        </div>
    </div>



    <div class="container-fluid contact_container">
        <div class="card border-dark my-5 text-center mx-4">

            <div class="box bg-light">
                <div class="card-header  ">Contact Us</div>
                <a href="https://www.facebook.com/">Facebook</a>
                <a href="https://www.instagram.com/">Instagram</a>
                <a href="https://twitter.com/?lang=en">Twitter</a>
                <a href="https://in.linkedin.com/">Linkedin</a>
            </div>
        </div>
    </div>







    <footer class="blog-footer text-center">
        <p>A Trip Planner<a href="..">Tripocity</a> by <a href="...">@Yav</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>

</body>

</html>