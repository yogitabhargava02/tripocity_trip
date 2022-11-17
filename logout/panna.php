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
                <img src="https://www.tripexperienceblog.com/wp-content/uploads/2018/03/panna-national-park-safaris.jpg"
                    width="100%" height="700" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://imgk.timesnownews.com/story/iStock-1152381066_7.jpg?tr=w-1200,h-900" width="100%"
                    height="700" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://2.bp.blogspot.com/-_SFDTX0FnCA/WnCjDx77E3I/AAAAAAAAId0/83fkHjPSYE4KSmvhNyM2GzTq6KkDqyWGgCLcBGAs/s1600/WhatsApp%2BImage%2B2018-01-30%2Bat%2B9.29.14%2BPM.jpeg"
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
      padding-top: 2px;"> Panna National Park</h1>
    </div>
    <div class="container-fluid">
        <p style=" text-align: center;">Panna Tiger Reserve is a critical tiger habitat located in Vindhya Hill in
            northern Madhya Pradesh and fragile through dynamic dry deciduous forest. This land is characterized by
            extensive plateaus and gorges. It is a land of mesmerizing waterfalls, naturals, archaeological splendors,
            legends & cultural richness. It is also the land of the Ken River, which lends it unparalleled beauty. This
            land is sounded by natural boundaries like in north, it is surrounded by teak forest & in easte, it is
            surrounded by Teak-Kardhai mixed forest. The NE-SW running Vindhya Hill ranges links the eastern and western
            population of wild animals.</p>
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
                            style="background: URL(https://cdn.s3waas.gov.in/s3d645920e395fedad7bbbed0eca3fe2e0/uploads/bfi_thumb/2019071883-olwcisz0dzqd1xrucs3wan7bjshh3ttrw2ampiuqa2.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;height: 617px;">
                    </div>
                    <div class=" places-txt">
                            <h4 style="font-family: 'eb_garamondsemibold';"><b>Mahamati Prannathji temple </b></h4>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 pd-0">
                    <div class="places-items">
                        <div class="places-items-img places-item-2 open-lightbox"
                            style="background:  URL(https://upload.wikimedia.org/wikipedia/commons/c/c4/Ajaigarh_Fort_Chandella_Temples.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;height:290px;width: 100%;">
                        </div>
                        <div class="places-txt">
                            <h4 style="font-family: 'eb_garamondsemibold';"><b>Ajaygarh Fort
                                </b></h4>
                        </div>
                    </div>
                    <div class="places-items">
                        <div class="places-items-img places-item-2 open-lightbox "
                            style="background: URL( https://www.mptourism.com/images/point-of-interest/Ken%20boating%20site.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;height: 290px;width: 100%;">
                        </div>
                        <div class="places-txt">
                            <h4 style="font-family: 'eb_garamondsemibold';"><b>
                                    Ken boating site</b> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 pl-0">
                    <div class="places-items">
                        <div class="places-items-img places-item-2 open-lightbox "
                            style="background:   URL(https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/65/1f/cb/caption.jpg?w=300&h=300&s=1); background-size: cover; background-position: center; background-repeat: no-repeat;height: 290px;width: 100%;">
                        </div>
                        <div class="places-txt">
                            <h4 style="font-family: 'eb_garamondsemibold';"><b>
                                    Ken Ghariyal Sanctuary</b> </h4>
                        </div>
                    </div>
                    <div class="places-items">
                        <div class="places-items-img places-item-2 open-lightbox "
                            style="background: URL( https://www.conservationindia.org/wp-content/files_mf/dundhwasehaotherangle.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;height: 290px;width: 100%;">
                        </div>
                        <div class="places-txt">
                            <h4 style="font-family: 'eb_garamondsemibold';"><b> Rehen Falls </b> </h4>
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
                <div class="col-sm-6" style="padding-left: 50px; padding-right: 50px;">
                    <div class="nearby-items">
                        <div class="zoom-img">
                            <div class="nearby-img">
                                <img src="https://www.tourmyindia.com/blog//wp-content/uploads/2017/11/Explore-Wildlife-of-Bandhavgarh-National-Park-by-Jeep-Safari.jpg" width="100%" height="490">
                            </div>
                        </div>
                        <div class="nearby-dtl">
                            <h3 style=" font-family: 'eb_garamondsemibold';  "><b>bandhavgarh national park</b></h3>
                            <p>Bandhavgarh National Park is in the central Indian state of Madhya Pradesh. This
                                biodiverse park is known for its large population of royal Bengal tigers, especially in
                                the central Tala zone. Other animals include white tigers, leopards and deer. The mix of
                                tropical forest, Sal trees and grassland is home to scores of bird species, including
                                eagles. To the south are the remains of the ancient Bandhavgarh Fort.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" style="padding-left: 50px; padding-right: 50px;">
                    <div class="nearby-items">
                        <div class="zoom-img">
                            <div class="nearby-img">
                                <img
                                    src=" https://media.istockphoto.com/photos/sunset-over-kandariya-mahadeva-temple-picture-id508628776?k=20&m=508628776&s=612x612&w=0&h=rRhCQtckjBpgeeu5EtB3M2MhjaaCbyYWgArMRo9xBKM=" width="100%" height="490">
                            </div>
                        </div>
                        <div class="nearby-dtl">
                            <h3 style=" font-family: 'eb_garamondsemibold';"><b> Graceful Khajuraho (43 KM) </b></h3>
                            <p>Khajuraho is an ancient city known for magnificent temples and its intricate sculptures
                                located in the Chhatarpur district of Madhya Pradesh. Built in the medieval century by
                                the Chandela Dynasty, the UNESCO site of 'Khajuraho Group of Monuments' is famous for
                                its Nagara-Style architecture and graceful sculptures of nayikas and deities. The
                                splendour of the intricate statues is one of the reasons that makes it a popular site to
                                visit among tourists.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container-fluid   my-3">
        <h2 style="display: flex; justify-content:center ;  text-align: center; color: black;text-transform: uppercase;
                font-family: 'eb_garamondsemibold';font-weight: 600;font-size: 35px; border-bottom: 2px solid black;  "
            class="ccontainer_Information"> How
            to Reach Panna </h2>
        <div class="text  " style=" text-align:  center; padding-bottom: 30px;">
            <i><b> Though a popular tourist destination, not many options are available to reach Panna directly. The
                    nearest airport is in Khajuraho which is 36 km away. The nearest railway stations Satna and
                    Khajuraho are well connected to major cities in the country via regular trains. NH 75 links Panna to
                    nearby cities like Bhopal and major cities like Delhi..</b></i>
        </div>
        <div style="width: 100%; display: flex; justify-content: center; align-items: center;  font-weight:bold; ">

            <button class="btn btn-primary btn-layer  " style="white-space: nowrap;" data-bs-toggle="collapse"
                href="#multiCollapseExample1" role="button" aria-expanded="false"
                aria-controls="multiCollapseExample1">How
                to reach Bhedaghat By flight
            </button>
            <span style="width:80px;display:inline-block"></span>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">How
                to reach Bhedaghat By road
            </button>
            <span style="width:80px;display:inline-block"></span>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3"> How
                to reach Bhedaghat by train
            </button>
            <span style="width:80px;display:inline-block"></span>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">
                Local transport in Bhedaghat
            </button>

        </div>

        <div class="row">
            <div class="col-3">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        <p style="margin-left: 3px; text-align: start; border: 2px solid darkgrey;"><i><b> Panna Airport
                                    is currently non-functional, the nearest working airport is Khajuraho Airport which
                                    is 29 kms away. Cabs are available from the airport at around Rs 500 upto Panna.
                        </p>
                        <p> <b> Nearest Airport: </b> Khajuraho Airport (HJR)</b></i>
                            <br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        <p style="margin-left: 3px; text-align: start; border: 2px solid darkgrey;"><i><b> How to reach
                                    Panna by road
                                    Tourist and state owned buses connects Panna to all major cities in the state. State
                                    owned public bus services are available from Jhansi to Panna at regular intervals.
                                    Khajuraho also provides the same facilities.</b></i> </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                    <div class="card card-body">
                        <p style="margin-left: 3px; text-align: start; border: 2px solid darkgrey;"><i><b>
                                    Panna does not have a station of its own. Nearest railway station is Satna 75 km
                                    away, but not all trains take a halt here. The nearest major railway station is
                                    Jhansi which is 176 kms away from Panna and all the trains halt at this station.
                                    Cabs from the railway station are available at a rate of about Rs 3300 upto Panna.
                                </b></i></p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="collapse multi-collapse" id="multiCollapseExample4">
                    <div class="card card-body">
                        <p style="margin-left: 3px; text-align: start; border: 2px solid darkgrey;"><i><b>
                                    Within the Panna National Park, the best way to explore is on an elephant safari. An
                                    hour ride on a boat on the Ken river through the jungle area might also be very
                                    interesting and picturesque to spot wildlife in their natural environments. Jeep
                                    safari are not provided within the park, so if you want to explore the area on a
                                    vehicle, you would have to arrange on your own. Rest of Panna is just like another
                                    city with Taxis as the best way of commuting within the city.
                                </b></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid">
        <div class="row no-gutters mb-50 mx-4">
            <h2 class="heading2 w-100"><b><i> Monthly Weather in Panna</i></b></h2>
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
                            <td> 21°/
                                10° </td>
                            <td> 6 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> February </td>
                            <td> 26°/
                                12° </td>
                            <td> 1 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> March </td>
                            <td> 30°/
                                18° </td>
                            <td> 1 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> April </td>
                            <td> 36°/
                                22° </td>
                            <td> 1 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> May </td>
                            <td> 41°/
                                27° </td>
                            <td> 0 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> June </td>
                            <td> 40°/
                                28° </td>
                            <td> 11 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> July </td>
                            <td> 32°/
                                25° </td>
                            <td> 20 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> August </td>
                            <td> 29°/
                                23° </td>
                            <td> 24 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> September </td>
                            <td> 28°/
                                23° </td>
                            <td> 27 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> October </td>
                            <td> 30°/
                                20° </td>
                            <td> 3 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> November </td>
                            <td> 29°/
                                17° </td>
                            <td> 0 days </td>
                        </tr>

                        <tr scope="row" class="">
                            <td> December </td>
                            <td> 22°/
                                10° </td>
                            <td> 3 days </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class=" container-fluid row no-gutters mb-50 ">


        <h2 class="heading2 w-100"><i><b> What is the best time to visit Panna </b></i> </h2>
        <p> ovember to May is the best time to visit Panna. Summers in this town are excruciatingly hot, and the
            temperatures rise to about 45 degrees Celcius, which is not very favourable for a pleasant vacation. Winters
            are comparatively cooler and more pleasant. It is especially recommended to visit this place during March
            because that is when you would get to see the wildlife at Panna National Park. </p>
    </div>

    <div class="container" style="align-items: center; justify-content: center; background-color: rgb(170, 234, 248);">
        <div class="row no-gutters mt-4 mb-50 ">
            <div class="col-12">
                <h2 class="heading2 w-100"
                    style=" text-align: center; border-bottom: 2px solid black; padding-bottom: 5px;">
                    More about Best Time to Travel to Panna </h2>
            </div>
            <div class="accordion" id="accordionFlexibleParagraphs">

                <div class="card" style="background-color: rgb(240, 178, 240); margin: 10px;">
                    <div class="card-header collapsed" id="heading1" data-toggle="collapse" data-target="#collapse1"
                        aria-expanded="false">
                        <h2> Panna in Summer (March - June) </h2>
                    </div>
                    <div id="collapse1" class="accordion-item collapse"  >
                        <div class="card-body article"> Panna experiences scorching summers with temperatures ranging
                            between 15 to 40 degrees Celsius. Though sightseeing at this temperature is uncomfortable,
                            early summers are the best time for indulging in jungle safari, as many animals are seen
                            roaming around in the park during this season. The dry climate of Panna during summers is
                            primarily responsible for making the park very hot and dehydrated. Since summers dry up the
                            small water bodies inside the premises of the park, the animals and their cubs gather near
                            the Ken River every day to quench their thirst. <br>
                            <figure class="image align-center" contenteditable="false"><img
                                    src="https://www.holidify.com/images/cmsuploads/compressed/2339017315_55a353eae9_b_20190114141540.jpg"
                                    alt="Summer season, Panna" width="1250" height="467" caption="true">
                                <figcaption contenteditable="true"><a
                                        href="https://www.flickr.com/photos/karlobrien/2339017315/in/photolist-4yG5mK-sB81g-4r9w4a-AM4NxX-RgWCL-RgRSY-Rduei-Rca1R-Reizv-Rc9yH-RciWJ-RcULH-27bKBG-RcBYX-RaGX5-RbkB1-RcQgM-Rdhup-RehF8-RbVHL-RdFLg-RgNvo-Rb929-277isH-4HvCo9-4r9BTD-RdKsR-4y6uAB-277iMe-oSjJJd-9v7CaJ-RgY21-RhbuP-Rhizt-Remb2-rhict6-Rh2F5-4knfZp-Rei8T-AN47RT-RhSig-RhuVN-4r9uAD-RhGUM-9v7GKY-RhxFr-RirA6-RioKV-4rdVJY-RgwEU"
                                        rel="nofollow"
                                        data-mce-href="https://www.flickr.com/photos/karlobrien/2339017315/in/photolist-4yG5mK-sB81g-4r9w4a-AM4NxX-RgWCL-RgRSY-Rduei-Rca1R-Reizv-Rc9yH-RciWJ-RcULH-27bKBG-RcBYX-RaGX5-RbkB1-RcQgM-Rdhup-RehF8-RbVHL-RdFLg-RgNvo-Rb929-277isH-4HvCo9-4r9BTD-RdKsR-4y6uAB-277iMe-oSjJJd-9v7CaJ-RgY21-RhbuP-Rhizt-Remb2-rhict6-Rh2F5-4knfZp-Rei8T-AN47RT-RhSig-RhuVN-4r9uAD-RhGUM-9v7GKY-RhxFr-RirA6-RioKV-4rdVJY-RgwEU">Source</a>
                                </figcaption>
                            </figure>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="card" style="background-color: rgb(240, 178, 240); margin: 10px;">
                    <div class="card-header" id="heading2" data-toggle="collapse" data-target="#collapse2">
                        <h2> Panna in Monsoon (July - September) </h2>
                    </div>
                    <div id="collapse2" class="collapse accordion-item">
                        <div class="card-body article"> Panna receives heavy rainfall during monsoons and the season
                            brings relief to the scorching summer heat. The rainy season in Panna varies from year to
                            year. The terrain becomes sticky and muddy making your walking tours and bicycle tours
                            almost impossible. The pleasant atmosphere attracts a lot of tourists during this season,
                            but forest safaris are restricted as it is the breeding season for most animals living in
                            the forests. If you plan on visiting the national park, it is recommended to check with the
                            authorities before going.<br>
                            <figure class="image align-center" contenteditable="false"><img
                                    src="https://www.holidify.com/images/cmsuploads/compressed/9575722734_a16ae37539_b_20190114143128.jpg"
                                    alt="Monsoon season, Panna" width="1250" height="467" caption="true">
                                <figcaption contenteditable="true"><a
                                        href="https://www.flickr.com/photos/ajay_g/9575722734" rel="nofollow"
                                        data-mce-href="https://www.flickr.com/photos/ajay_g/9575722734">Source</a>
                                </figcaption>
                            </figure><br>
                        </div>
                    </div>
                </div>

                <div class="card" style="background-color: rgb(240, 178, 240); margin: 10px;">
                    <div class="card-header" id="heading3" data-toggle="collapse" data-target="#collapse3">
                        <h2> Panna in Winter (October - February) </h2>
                    </div>
                    <div id="collapse3" class="collapse accordion-item">
                        <div class="card-body article"> Winters are a good time for visiting Panna and indulging in all
                            kinds of adventure activities. Temperature varies from 27 degrees Celsius during the daytime
                            going all the way down to 8 degrees Celsius at night. Panna witnesses the maximum number of
                            tourists during this period, mainly because it is the perfect time for birdwatching as
                            hundreds and thousands of migratory birds flock the wildlife territories in the winter
                            months.<br>
                            <figure class="image align-center" contenteditable="false"><img
                                    src="https://www.holidify.com/images/cmsuploads/compressed/45659506365_08d5535207_b_20190114142148.jpg"
                                    alt="Winter afternoon, Panna" width="1250" height="467" caption="true">
                                <figcaption contenteditable="true"><a
                                        href="https://www.flickr.com/photos/kaushikimagines/45659506365/in/photolist-2cyLUun-Rd9yk-RcFDK-RcXBv-RdM48-Rc2re-9Gov8C-9GkDh4-aKmSMg-aKmNcK-aKMCCt-aKn1Sv-9v7FBf-4rdMuY-RerKH-9v7yHW-9v7Ers-9v7y87-Rh6y9-Rd9rm-4knh8K-RcAdk-RhLjB-Rhmxp-RdgFm-Rdgbi-RbP7d-Re8QR-RbQHS-RdxcK-RaWXo-RbwCd-Rcu3p-RbejG-RgEk3-Rgp87-sB81a-RikXX-4r9pYz-CEnMn-RenoV-RcGeE-RcxU2-4yG5mK-sB81g-4r9w4a-AM4NxX-RgWCL-RgRSY-Rduei"
                                        rel="nofollow"
                                        data-mce-href="https://www.flickr.com/photos/kaushikimagines/45659506365/in/photolist-2cyLUun-Rd9yk-RcFDK-RcXBv-RdM48-Rc2re-9Gov8C-9GkDh4-aKmSMg-aKmNcK-aKMCCt-aKn1Sv-9v7FBf-4rdMuY-RerKH-9v7yHW-9v7Ers-9v7y87-Rh6y9-Rd9rm-4knh8K-RcAdk-RhLjB-Rhmxp-RdgFm-Rdgbi-RbP7d-Re8QR-RbQHS-RdxcK-RaWXo-RbwCd-Rcu3p-RbejG-RgEk3-Rgp87-sB81a-RikXX-4r9pYz-CEnMn-RenoV-RcGeE-RcxU2-4yG5mK-sB81g-4r9w4a-AM4NxX-RgWCL-RgRSY-Rduei">Source</a>
                                </figcaption>
                            </figure><br>
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