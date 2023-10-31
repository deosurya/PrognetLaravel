<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Claudio Surya - ProgNet</title>
    <link rel="icon" href="{{ asset('img/mdb-favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" integrity="sha512-x7JROg1bfo6rXdDIz+IcAR4/bI/DQZOwuIlLFE3fHcDKBhwrMhZv8XrccrmI6OBTxRX/kwDZ0PIUUbP2lNc5Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body>
	<!-- Start your project here-->
	<!--Main Navigation-->
	<header class="mb-10">

		<!-- Navbar -->
		<nav id="main-navbar" class="navbar navbar-expand-md navbar-before-scroll fixed-top shadow-0">

			<!-- Container wrapper -->
			<div class="container-fluid">
				<!-- Toggle button -->
				<button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
					data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars"></i>
				</button>

				<!-- Collapsible wrapper -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<!-- Logo -->
						<a class="navbar-brand me-1" href="#"><img src="{{ asset('images\logo.png') }}" height="20px" alt="Logo"
								loading="lazy" /></a>
						<li class="nav-item">
							<a class="nav-link" href="#projects">Projects</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#aboutme">About me</a>
						</li>
					</ul>

					<ul class="navbar-nav flex-row">
						<!-- Icons -->
						<li class="nav-item">
							<a class="nav-link px-2 text-dark" href="https://www.facebook.com/Deo.sury" target="_blank">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ps-2 text-dark" href="https://www.instagram.com/deotm_/" target="_blank">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
					</ul>

				</div>
				<!-- Collapsible wrapper -->

			</div>
			<!-- Container wrapper -->
		</nav>
		<!-- Navbar -->
		<!-- Section: Split screen -->
		<section class="">

			<div class="container-fluid px-0">
				<div class="row g-0">

					<!-- First column -->
					<div class="col-lg-6 vh-100 d-lg-inline-block">
						<!-- Carousel wrapper -->
						<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
							<!-- Indicators -->
							<div class="carousel-indicators">
								<button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0"
									class="active rounded-circle" style="width: 7px; height: 7px" aria-current="true"
									aria-label="Slide 1"></button>
								<button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
									aria-label="Slide 2" class="rounded-circle"
									style="width: 7px; height: 7px"></button>
								<button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
									aria-label="Slide 3" class="rounded-circle"
									style="width: 7px; height: 7px"></button>
							</div>

							<!-- Inner -->
							<div class="carousel-inner shadow-5-strong" style="border-bottom-right-radius: 4rem">
								<!-- Single item -->
								<div class="carousel-item active">
									<img src="https://images.pexels.com/photos/2330137/pexels-photo-2330137.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
										class="d-block vh-100 vw-100 object-cover" alt="Sunset Over the City" />
									<div class="carousel-caption d-none d-md-block">
										<h5>Information Technology Undergraduate</h5>
										<p>Enrolling in Information Technology of Engineering Faculty at Udayana University</p>
									</div>
								</div>

								<!-- Single item -->
								<div class="carousel-item">
									<img src="https://images.pexels.com/photos/129208/pexels-photo-129208.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
										class="d-block vh-100 vw-100 object-cover" alt="Canyon at Nigh" />
									<div class="carousel-caption d-none d-md-block">
										<h5>Problem Solving</h5>
										<p>Loves problem solving such as programming and puzzle games.</p>
									</div>
								</div>

								<!-- Single item -->
								<div class="carousel-item">
									<img src="https://images.pexels.com/photos/428429/pexels-photo-428429.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
										class="d-block vh-100 vw-100 object-cover" alt="Cliff Above a Stormy Sea" />
									<div class="carousel-caption d-none d-md-block">
										<h5>Nature Enthusiast</h5>
										<p>Likes nature and travelling around Bali.</p>
									</div>
								</div>
							</div>
							<!-- Inner -->

							<!-- Controls -->
							<button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
								data-mdb-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
								data-mdb-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
						<!-- Carousel wrapper -->
					</div>
					<!-- First column -->

					<!-- Second column -->
					<!-- Headings -->
					<div class="col-lg-6 vh-100 d-flex flex-column justify-content-center align-items-center">
						<div class="h-100 d-flex justify-content-center align-items-center px-5">
							<div class="">
								<h2 class="display-4">Claudio Surya</h2>
								<h1 class="display-2 fw-bold text-uppercase">IT Student</h1>
							</div>
						</div>
						<!-- CTA elements -->
						<div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5">
							<a class="btn btn-dark btn-lg btn-rounded" href="#projects" role="button">See my projects<i
									class="fas fa-angle-down ms-2"></i></a>
							<hr class="hr d-none d-xl-flex" style="height: 2px; width: 200px;">
							<a href="https://github.com/deosurya" target="_blank" class="text-dark"><i
									class="fab fa-github fa-xl"></i></a>
						</div>
					</div>

					<!-- Second column -->
				</div>
			</div>

		</section>
		<!-- Section: Split screen -->
	</header>
	<!--Main layout-->
	<main>
		<div class="mb-5" id="projects"></div>
		<div class="container">
			<!-- Section: My projects -->
			<section class="mb-10 text-center">
				<h2 class="fw-bold mb-7 text-center">My projects</h2>

				<div class="row gx-lg-5">

					<!-- First column -->
					<div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
						<div class="card rounded-6 h-100">
							<div class="mt-n3 bg-image hover-overlay ripple mx-3 shadow-4-strong rounded-6"
								data-mdb-ripple-color="light">
								<img src="https://images.pexels.com/photos/5474300/pexels-photo-5474300.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
									class="w-100 h-100" />
								<a href="/form">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
								</a>
							</div>
							<div class="card-body">
								<h5 class="card-title">Tugas Javascript</h5>
								<p class="text-muted">
									<small>Finished <u>02.10.2023</u></small>
								</p>
								<a href="/form" class="mt-3 btn btn-secondary btn-rounded">See more</a>
							</div>
						</div>
					</div>
					<!-- First column -->

					<!-- Second column -->
					<div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
						<div class="card rounded-6 h-100">
							<div class="mt-n3 bg-image hover-overlay ripple mx-3 shadow-4-strong rounded-6"
								data-mdb-ripple-color="light">
								<img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2574&q=80"
									class="w-100 h-100" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
								</a>
							</div>
							<div class="card-body">
								<h5 class="card-title">Coming Soon</h5>
								<p class="text-muted">
									<small>Not Finished <u> </u></small>
								</p>
								<a href="#!" class="mt-3 btn btn-secondary btn-rounded">See more</a>
							</div>
						</div>
					</div>
					<!-- Second column -->

					<!-- Third column -->
					<div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
						<div class="card rounded-6 h-100">
							<div class="mt-n3 bg-image hover-overlay ripple mx-3 shadow-4-strong rounded-6"
								data-mdb-ripple-color="light">
								<img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2574&q=80"
									class="w-100 h-100" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
								</a>
							</div>
							<div class="card-body">
								<h5 class="card-title">Coming Soon</h5>
								<p class="text-muted">
									<small>Not Finished <u></u></small>
								</p>
								<a href="#!" class="mt-3 btn btn-secondary btn-rounded">See more</a>
							</div>
						</div>
					</div>
					<!-- Third column -->

				</div>

			</section>
			<!-- Section: My projects -->

		</div>
		<!-- Section: About me -->
		<section class="mb-10">
			<div class="container" id="aboutme">
				<div class="row gx-0 align-items-center">
					<!-- First column -->
					<div class="col-lg-6 mb-5 mb-lg-0">
						<div style="background: hsla(0, 0%, 100%, 0.55); 
						backdrop-filter: blur(25px);
						z-index: 1;" 
						class="card rounded-7 me-lg-n5">
							<div class="card-body p-lg-5 shadow-5">
								<h2 class="fw-bold">
									<span class="text-primary">Claudio Surya</span>
								</h2>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">NIM</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0">2205551008</p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Birthdate</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0">May 17th, 2004</p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Age</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0">19</p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Status</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0">College Student</p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Degree</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0">S1 Teknologi Informasi</p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Faculty</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0">Engineering</p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Email</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0">deo.surya123@yahoo.com</p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Phone</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0">(+62) 812-3775-4304</p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Address</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0">Jln. Imam Bonjol, Denpasar, Bali.</p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Hobby</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0">Coding, Gaming, Read Novels</p>
									</div>
								</div>

							</div>
						</div>

					</div>
					<!-- First column -->

					<!-- Second column -->
					<div class="col-lg-6 mb-5 mb-lg-0">
						<div class="bg-image hover-overlay rounded-7 shadow-4 rotate-lg">
							<img src="{{ asset('images\face.jpg') }}" class="w-100 " alt="Claudio Surya" />
							<div class="mask"
							style="background: linear-gradient(
								45deg,
								hsla(169, 84.5%, 52%, 0.3),
								hsla(263, 87.7%, 44.7%, 0.3) 100%
							)">
							</div>
						</div>
					</div>
					<!-- Second column -->

				</div>

			</div>

		</section>
		<!-- Section: About me -->
	</main>
	<!--Main layout-->
	<!-- End your project here-->

	<!-- MDB -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js" integrity="sha512-kZKnID21//xaFiEISBXk6V1AdFCPOIpHhuEdBMprlAHdb0ICnvgSLsb89DAixlLJDuPyvNR+hN3lPvsFNn5XLg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Custom scripts -->
	<script type="text/javascript">

		const navbar = document.getElementById("main-navbar")

		window.addEventListener('scroll', function () {
			if (window.pageYOffset > 0) {
				navbar.classList.add("navbar-after-scroll")
			} else {
				navbar.classList.remove("navbar-after-scroll")
			}
		})

	</script>
</body>

</html>