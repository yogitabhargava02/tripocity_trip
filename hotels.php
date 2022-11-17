<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/nav.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style_tripocity.css">
	<title>Tripocity</title>
	<style>
		h1 {
			text-align: center;
		}

		.imageContainer {
			margin-left: 30%;
			display: inline-block;
			position: relative;
			text-align: center;
			color: rgb(18, 6, 31);
		}

		.center {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		.search-form {
			border-radius: 30px 0 0 30px;
		}

		.input-group {
			width: 100%;
		}

		input-group-btn {
			max-width: 50px;

		}

		#search {
			border: 2px;
		}

		.search-btn {
			cursor: pointer;
			border-radius: 30px 30px 30px 30px;
			color: rgb(29, 29, 109);
			width: 100px;

		}

		.parent1 {
			width: 100%;
			height: 80%;


		}

		.child1 {
			display: inline-block;
			width: 60px;
			height: 60px;


		}

		.child2 {
			display: inline-block;
			width: 60px;
			height: 60px;


		}

		.input-sm {
			width: 130px;
			height: 50px;
		}

		.search-btn {
			width: 70px;
			height: 50px;
		}

		.Rooms {
			width: 150px;
			height: 50px;

		}

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
			/* background-color: rgba(121, 121, 121, .55); */
			background-color: black;
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














</head>

<body>





<header class="p-3" style="color: black">
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
                  <a><img src="https://img.icons8.com/bubbles/50/000000/airport.png" alt="Tripocity Logo" /></a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <ul class="nav col-12 col-lg-auto me-lg-auto ms-a">
        <a class="navbar-brand text-primary ms-auto" href="#">Tripocity</a>
        <li>
          <a href="index.php" class="nav-link px-2 text-black">Home</a>
        </li>
        <li>
          <a href="about.php" class="nav-link px-2 text-black">About us</a>
        </li>

        <li>
          <a href="hotels.php" class="nav-link px-2 text-black">Hotels</a>
        </li>
        <li>
          <a href="TripocityReviews.php" class="nav-link px-2 text-black">Reviews</a>
        </li>
      </ul>


	<!-- <header class="p-3" style="color: black">
		<div class="container">
           <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
				<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
					<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
						<use xlink:href="#bootstrap"></use>
					</svg></a>

				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
					<a class="navbar-brand text-primary mx-0" href="#">Tripocity</a>
					<li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
					<li><a href="Hotels.php" class="nav-link px-2 text-white">Hotels</a></li>
					<li><a href="about.php" class="nav-link px-2 text-white">About</a></li>

					<li><a href="TripocityReviews.php" class="nav-link px-2 text-white"> Reviews </a></li>
				</ul> -->

<!-- login -->
<div class="text-end">
					<button class="login_signup"><a style="color: inherit; text-decoration: inherit;" href="login">Login / Sign-up</a></button>
				</div>
	</header>
	</header>

	<section>
		<div class="container-fluid ">
			<div class="image">
				<img src="https://www.insidehook.com/wp-content/uploads/2021/09/Novotel-Ahmedabad-Hotel.png?fit=1200%2C800" width="100%" height="700">

				<div class="header center">



					<div class="container">
						<div itemscope="" itemtype="http://schema.org/WebSite">
							<form action="" itemprop="potentialAction" accept-charset="utf-8" id="SearchHomeForm" method="get">
								<div class="form-group form-search">
									<meta itemprop="target" content="https://www.bootdey.com/bootstrap-snippets?q=" /> <input id="searchField" type="text" value="" name="q" id="q" class="form-control form-control-search" placeholder="Search" itemprop="query-input" />
									<button type="submit" class="btn btn-default btn-round btn-submit" id="searchSubmit"><i class="fa fa-search" style="font-size:20px;"></i></button>
								</div>
							</form>
							<div id="lists">

							</div>
						</div>

					</div>

					<script>
						var searchButton = document.getElementById("searchSubmit");
						searchButton.addEventListener("click", e => {
							e.preventDefault();
							var lists = document.getElementById("lists");
							lists.innerHTML = "";
							var searchQuery = document.getElementById("searchField").value;
							var data = fetch("https://hotels-com-provider.p.rapidapi.com/v1/destinations/search?query=" +
								searchQuery + "&currency=INR&locale=en_US", {
									"method": "GET",
									"headers": {
										"x-rapidapi-host": "hotels-com-provider.p.rapidapi.com",
										"x-rapidapi-key": "4ffb1fb805msh98321761e1a2e5dp192aeejsn953647193ee4"
									}
								}).then(response => response.json());
							data.then(name => {
								console.log(name);
								var suggestions = name.suggestions;
								var page = "";
								suggestions.forEach(suggestion => {
									if (suggestion.group == "CITY_GROUP") {
										page = "showCityDetails.php";
										group = "city";
									} else if (suggestion.group == "LANDMARK_GROUP") {
										page = "showLandmarkDetails.php";
										group = "landmark";
									} else if (suggestion.group == "HOTEL_GROUP") {
										// page = "showHotelDetails.php";
										// group = "hotel";
										return;
									} else {
										// page = "showTransportDetails.php";
										// group = "transport";
										return;
									}
									if (suggestion.length != 0) {
										var totalEntities = suggestion.entities;
										totalEntities.forEach(entity => {
											lists.innerHTML += `<a href = ${page}?${group}DestinationId=${entity.destinationId} >${entity.caption}</a><br>`;
										});
									}
								})

							})
						})
					</script>
					<script>

					</script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


				</div>
			</div>
		</div>
	</section>
	</div>

	<!-- </div>
  </div> -->
	<!-- <div class="container my-3 ">
		<div class="card border-light text-center">
			<div class="card-header bg-secondary border-dark" style="border:1px solid black;">
				<h3>Why Tripocity...?</h3>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="card border-dark my-5 text-center mx-4">
			<div class="card-header bg-light ">Contact Us</div>
			<div class="box bg-light">

				<a href="https://www.facebook.com/">Facebook</a>
				<a href="https://www.instagram.com/">Instagram</a>
				<a href="https://twitter.com/?lang=en">Twitter</a>
				<a href="https://in.linkedin.com/">Linkedin</a>
			</div>
		</div>
	</div>
	</div>

	<footer class="blog-footer text-center">
		<p>A Trip Planner<a href="https://getbootstrap.com/">Tripocity</a> by <a href="https://twitter.com/mdo">@Yav</a>.</p>
		<p>
			<a href="#">Back to top</a>
		</p>
	</footer>
</body>

</html> -->
<div class="container-fluid contact_container">
    <div class="row">
      <div class="col-md-12">
        <div class="card border-dark my-3 text-center ">
<br>
          <div class="box bg-light">

            <a href="https://www.facebook.com/"><img src="https://img.icons8.com/cute-clipart/64/000000/facebook-new.png" /></a>
            <span style="width:30px;display:inline-block"></span>
            <a href="https://www.instagram.com/"><img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png" /></a>
            <span style="width:30px;display:inline-block"></span>
            <a href="https://twitter.com/?lang=en"><img src="https://img.icons8.com/cute-clipart/64/000000/twitter.png" /></a>
            <span style="width:30px;display:inline-block"></span>
            <a href="https://in.linkedin.com/"><img src="https://img.icons8.com/cute-clipart/64/000000/linkedin.png" /></a>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>

  <footer class="blog-footer text-center">
    <p>A Trip Planner<a href="..">Tripocity</a> by <a href="...">@Yav</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>

    <div class="row">
      <div class="col-sm-7">
        <div class="footer-item">
          <div class="col-sm-12">
            <p class="copyright">
              <i class="fa fa-copyright" aria-hidden="true"></i> Copyright
              2021 YAV All Right Reserved. |
              <a href="disclaimer.php" style="text-decoration: none">Disclaimer |
              </a>
              <a href="privacy-policy.php" style="text-decoration: none">Privacy Policy</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>