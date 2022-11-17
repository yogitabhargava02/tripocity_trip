<?php
if (isset($_GET['cityDestinationId']) && $_GET['cityDestinationId'] != NULL) {
    // echo $_GET['placeDestinationId'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style_tripocity.css">
      <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    
    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        .form-search {
            max-width: 510px;
            padding: 0 15px;
            margin: 30px auto 0;
            position: relative;
        }

        .form-search .form-control-search {
            background-color: rgba(121, 121, 121, .55);
            border: none;
            border-radius: 30px;
            box-shadow: 0 0 0;
            color: #FFF;
            display: block;
            font-size: 20px;
            font-weight: 300;
            height: 50px;
            line-height: 1.42857;
            padding: 6px 20px;
            vertical-align: middle;
            transition: background-color .2s;
        }

        .form-search .btn-submit {
            position: absolute;
            right: 18px;
            border: none;
            padding: 10px 12px;
            height: 44px;
            line-height: 30px;
            width: 44px;
            display: block;
            top: 3px;
            opacity: .7;
            background: #FFF;
            color: #666;
            transition: all .2s;
        }

        .icon-2x {
            font-size: 1.8em;
        }

        .btn-round {
            border-width: 1px;
            border-radius: 30px !important;
            opacity: .79;
            padding: 9px 18px;
        }

        #lists {
            max-width: 900px;
            padding: 0 15px;
            margin: 30px auto 0;
            position: relative;
            height: auto;
            display: flex;
            flex-direction: column;
        }

        #lists a {
            text-decoration: none;
            color: black;
            border: none;
            border: 3px solid black;
            padding: 10px 3px;
            border-radius: 11px;
            margin-bottom: 5px;
            font-weight: 400;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
            width: 100%;

        }
        #lists a:hover{
            background-color:lightgrey;
        }
        #lists a .left {
            width: 35%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
        }

        #lists a .left .img_container {
            position: relative;
            width: 100%;
            height: 170px;
            overflow: hidden;
            border-radius: 8px;
        }

        #lists a .left .img_container img {
            position: absolute;
            top: 0;
            left: 0;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        #lists a .medium {
            width: 41%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
        }

        #lists a .medium .medium_top {
            width: 100%;
        }

        #lists a .medium .medium_top .medium_top_head {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        #lists a .medium .medium_top .medium_top_head h4 {
            font-size: 18px;
            margin-right: 10px;
            margin-bottom: 0px;
            font-weight: 501;
        }

        #lists a .medium .medium_top .medium_top_head span {
            font-size: 14px;
            color: #D33943;
        }

        #lists a .medium .medium_top .medium_top_body {
            margin-bottom: 5px;
        }

        #lists a .medium .medium_top .medium_top_body span {
            font-size: 12px;
        }

        #lists a .medium .medium_center {
            width: 100%;
        }

        #lists a .medium .medium_center p {
            font-weight: 501;
            margin-bottom: 0px;
        }

        #lists a .medium .medium_center ul {
            margin-left: 0px;
            /* line-height: ; */
            font-size: 12px;
            padding-left: 15px;
        }

        #lists a .medium .medium_bottom {
            width: 100%;
        }

        #lists a .medium .medium_bottom ul {
            list-style: none;
            display: inline-flex;
            padding-left: 15px;
            font-size: 14px;
            font-weight: 501;
        }

        #lists a .medium .medium_bottom ul li {
            margin-right: 8px;
        }

        #lists a .right {
            width: 20%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-end;
        }

        #lists a .right .right_top {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-end;
        }

        #lists a .right .right_top h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 0px;
        }

        #lists a .right .right_top p {
            font-size: 12px;
            color: gray;
        }

        #lists a .right .right_medium button {
            width: 115px;
            height: 50px;
            background-color: #156BC1;
            border-radius: 30px;
            padding: 0px 15px;
            color: white;
            font-weight: 700;
            margin-bottom: 10px;
        }

        #lists a .right .right_bottom {
            font-size: 12px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-end;
            color: #218242;
        }
    </style>
</head>

<body>
    
    <header class="p-3" style="color: black">
      <div
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start" >
        <div id="headerpage" class="header">
          <table style="width: 100%; margin-bottom: 5px">
            <tbody>
              <tr>
                <td>
                  <div
                    style="
                      clear: both;
                      float: left;
                      width: 230px;
                      margin-top: 15px;
                      margin-left: 20px;
                    " >
                    <a
                      ><img
                        src="https://img.icons8.com/bubbles/50/000000/airport.png"
                        alt="Tripocity Logo"
                    /></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <ul class="nav col-12 col-lg-auto me-lg-auto ms-a">
          <a class="navbar-brand text-primary ms-auto" href="#">Tripocity</a>
          <li>
            <a
              href="index.php"
              class="nav-link px-2 text-black"
              >Home</a
            >
          </li>
          <li>
            <a
              href="hotels.php"
              class="nav-link px-2 text-black"
              >Hotels</a
            >
          </li>
          <!-- <li><a href="" class="nav-link px-2 text-black">Restaurants</a></li> -->
          <!-- <li>
            <a
              href="file:///D:/images/TripocityTranportation.html"
              class="nav-link px-2 text-black"
              >Transportation</a
            >
          </li> -->
          <li>
            <a
              href="http://127.0.0.1:5500/Reviews.html"
              class="nav-link px-2 text-black"
              >Reviews</a
            >
          </li>
        </ul>

       <div class="text-end">
          <button class = "login_signup"><a style="color: inherit; text-decoration: inherit;" href="login">Login / Sign-up</a></button>
       
        </div>
  </header>
  
<section class = "hero">
  <div class="container-fluid hero_container">
      <div class="main_form" >

      <!-- <form action="hotels-api.php" method="post">            
        <div class="form_content" > -->
            
              <!-- <p class = "or_btn">OR</p>
              <button class="search_btn_season" type="button2" >Search by season<a href="http://127.0.0.1:5500/Season.html"></a></button>
               <button class="search-btn bg-light" type="button3">Trending<a href="http://127.0.0.1:5500/letsTrip.html"></a></button>
              <button class="search-btn bg-light active" type="button4">Lets Trip<a href="C:\Users\asus\OneDrive\Desktop\tripocity\images\letsTrip.html"></a></button> --> 
        <!-- </div>
        </form>
    </div>
  </div>
</section> -->

    <div class="container">
        <div itemscope="" itemtype="http://schema.org/WebSite">
            <form action="" itemprop="potentialAction" accept-charset="utf-8" id="SearchHomeForm" method="get">
                <div class="form-group form-search">
                    <input id="searchField" type="text" onkeyup = "mySearch()" value="" name="q" id="q" class="form-control form-control-search" placeholder="Search" itemprop="query-input" />
                    <!-- <input id="searchField" type="text" value="" name="q" id="q" class="form-control form-control-search" placeholder="Search" itemprop="query-input" />
                    <input id="searchField" type="text" value="" name="q" id="q" class="form-control form-control-search" placeholder="Search" itemprop="query-input" /> -->
                    <button type="submit" class="btn btn-default btn-round btn-submit" id="searchSubmit">
                        <i class="fa fa-search" style="font-size:20px;"></i>
                    </button>
                </div>
            </form>
            <div id="lists">
                <a href="">
                    <div class="left">
                        <div class="img_container">
                            <img src="hotel1.webp" width="300" height="150" alt="">
                        </div>
                    </div>
                    <div class="medium">
                        <div class="medium_top">
                            <div class="medium_top_head">
                                <h4>Courtyard by Marriott Bhopal</h4>
                                <span>3-star</span>
                            </div>
                            <div class="medium_top_body">
                                <span>Plot No. 91 Chetak Bridge, Bhopal, 462024, MP</span>
                            </div>
                        </div>
                        <div class="medium_center">
                            <p>Bhopal</p>
                            <ul>
                                <li>18 km to city centre</li>
                                <li>1.1 km to Habibganj Railway Station</li>
                            </ul>
                        </div>
                        <div class="medium_bottom">
                            <ul>
                                <li>Free parking</li>
                                <li>Restaurant</li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <div class="right_top">
                            <h3>Rs3,000</h3>
                            <p>excluding all taxes & fees</p>
                        </div>
                        <div class="right_medium">
                            <button>book now</button>
                        </div>
                        <div class="right_bottom">
                            <span>Free cancellation</span>
                            <span>Pay at property available</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>



    </div>
  </div>
</section>





    <script>
        var lists = document.getElementById("lists");
        lists.innerHTML = "";
        var pageNumber = 1;
        function loadHotels(pageNumber) {
            console.log(pageNumber);
            var data = fetch("https://hotels-com-provider.p.rapidapi.com/v1/hotels/search?currency=INR&locale=en_US&adults_number=1&destination_id=" + <?php echo $_GET['cityDestinationId']; ?> + "&page_number="+pageNumber+"&sort_order=PRICE_HIGHEST_FIRST&checkout_date=2022-03-27&checkin_date=2022-03-26", {
                "method": "GET",
                "headers": {
                    "x-rapidapi-host": "hotels-com-provider.p.rapidapi.com",
                    "x-rapidapi-key": "542f669069msh73aaa0afdf4ce92p1237e8jsnaee89aeb1baa"
                }
            }).then(response => response.json());
            data.then(name => {
                var hotels = name.searchResults.results;
                console.log(hotels);
                hotels.forEach(hotel => {
                    lists.innerHTML += `<a href="showHotelDetails.php?hotelDestinationId=${hotel.id}">
                                        <div class="left">
                                            <div class="img_container">
                                                <img src="${hotel.optimizedThumbUrls.srpDesktop}" width = "300" height = "150" alt="">
                                            </div>
                                        </div>
                                        <div class="medium">
                                            <div class="medium_top">
                                                <div class="medium_top_head">
                                                    <h4>${hotel.name}</h4>
                                                    <span>${hotel.starRating}-star</span>
                                                </div>
                                                <div class="medium_top_body">
                                                    <span>${hotel.address.streetAddress}, ${hotel.address.locality}, ${hotel.address.postalCode}, ${hotel.address.region}</span>
                                                </div>
                                            </div>
                                            <div class="medium_center">
                                                <p>${hotel.neighbourhood}</p>
                                                <ul>
                                                    <li>${hotel.landmarks[0].distance} to ${hotel.landmarks[0].label}</li>
                                                    <li>${hotel.landmarks[1].distance} to ${hotel.landmarks[1].label}</li>
                                                </ul>
                                            </div>
                                            <div class="medium_bottom">
                                                <ul>
                                                    <li>Free parking</li>
                                                    <li>Restaurant</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="right_top">
                                                <h3>${hotel.ratePlan.price.current}</h3>
                                                <p>excluding all taxes & fees</p>
                                            </div>
                                            <div class="right_medium">
                                                <button>book now</button>
                                            </div>
                                            <div class="right_bottom">
                                                <span>${hotel.ratePlan.features.freeCancellation ? "Free cancellation" : "" }</span>
                                                <span>${hotel.ratePlan.features.paymentPreference ? "Pay at property available" : "" }</span>
                                            </div>
                                        </div>
                                    </a>`;
                })
            })
        }
        loadHotels(pageNumber);
        window.addEventListener('scroll', () => {
            const {
                scrollTop,
                scrollHeight,
                clientHeight
            } = document.documentElement;
            
            if (scrollTop + clientHeight == scrollHeight) {
                console.log(scrollTop,scrollHeight,clientHeight);    
                pageNumber++;
                loadHotels(pageNumber);
            }
        }, {
            passive: true
        });
        function mySearch(){
            var input, filter, lists, a, h4, i, txtValue;
            input = document.getElementById("searchField");
            filter = input.value.toUpperCase();
            lists = document.getElementById("lists");
            a = lists.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                h4 = a[i].getElementsByTagName("h4")[0];
                txtValue = h4.textContent || h4.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>
    <script>

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>