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
    <link rel="stylesheet" href="assets/css/style_tripocityhotel.css">
    <title>Title</title>
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
            max-width: 510px;
            padding: 0 15px;
            margin: 30px auto 0;
            position: relative;
            height: auto;
            display: flex;
            flex-direction: column;
        }

        #lists a {
            text-decoration: none;
            border: none;
            border: 3px solid black;
            padding: 3px;
            border-radius: 11px;
            margin-bottom: 5px;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <div class="container">
        <div itemscope="" itemtype="http://schema.org/WebSite">
            <form action="" itemprop="potentialAction" accept-charset="utf-8" id="SearchHomeForm" method="get">
                <div class="form-group form-search">
                    <input id="searchField" type="text" value="" name="q" id="q" class="form-control form-control-search" placeholder="Search" itemprop="query-input" />
                    <!-- <input id="searchField" type="text" value="" name="q" id="q" class="form-control form-control-search" placeholder="Search" itemprop="query-input" />
                    <input id="searchField" type="text" value="" name="q" id="q" class="form-control form-control-search" placeholder="Search" itemprop="query-input" /> -->
                    <button type="submit" class="btn btn-default btn-round btn-submit" id="searchSubmit">
                        <i class="fa fa-search" style="font-size:20px;"></i>
                    </button>
                </div>
            </form>
            <div id="lists">

            </div>
        </div>

    </div>

    <script>
        fetch("https://hotels-com-provider.p.rapidapi.com/v1/hotels/photos?hotel_id=<?php echo $_GET['hotelDestinationId']; ?>", {
            "method": "GET",
            "headers": {
                "x-rapidapi-host": "hotels-com-provider.p.rapidapi.com",
                "x-rapidapi-key": "542f669069msh73aaa0afdf4ce92p1237e8jsnaee89aeb1baa"
            }
        }).then(response => response.json()).then(hello => console.log(hello));
        // var searchButton = document.getElementById("searchSubmit");
        // searchButton.addEventListener("click", e => {			
        // 	e.preventDefault();
        var lists = document.getElementById("lists");
        lists.innerHTML = "";
        // var searchQuery = document.getElementById("searchField").value;
        // // var data = fetch("https://hotels-com-provider.p.rapidapi.com/v1/hotels/search?currency=INR&locale=en_US&adults_number=1&destination_id="+<?php 
        // echo $_GET['cityDestinationId']; 
        ?>+"&sort_order=STAR_RATING_HIGHEST_FIRST&checkout_date=2022-03-27&checkin_date=2022-03-26", {
        //     "method": "GET",
        //     "headers": {
        //         "x-rapidapi-host": "hotels-com-provider.p.rapidapi.com",
        //         "x-rapidapi-key": "b0c2038476msh5eafbb3d1ee5b77p1accc4jsn6d571ee650a7"
        //     }
        // }).then(response => response.json());
        // data.then(name => {
        //     console.log(name);
        // })
    </script>
    <script>

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>