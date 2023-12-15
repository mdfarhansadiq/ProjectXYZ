<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang>
<!--<![endif]-->

<!-- Mirrored from colorlib.com/polygon/sufee/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 08:10:46 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sufee Admin - HTML5 Admin Template</title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-icon.html">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="{{ asset('assets/adminDashboardAsset/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/adminDashboardAsset/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/adminDashboardAsset/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/adminDashboardAsset/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/adminDashboardAsset/css/flag-icon.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/adminDashboardAsset/css/cs-skin-elastic.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/adminDashboardAsset/scss/style.css') }}">
	<link href="{{ asset('assets/adminDashboardAsset/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">
	<style id="" media="all">
		@font-face {
			font-family: 'Open Sans';
			font-style: normal;
			font-weight: 400;
			font-stretch: normal;
			font-display: swap;
			src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v35/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4gaVc.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Open Sans';
			font-style: normal;
			font-weight: 600;
			font-stretch: normal;
			font-display: swap;
			src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v35/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsgH1x4gaVc.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Open Sans';
			font-style: normal;
			font-weight: 700;
			font-stretch: normal;
			font-display: swap;
			src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v35/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1x4gaVc.ttf) format('truetype');
		}

		@font-face {
			font-family: 'Open Sans';
			font-style: normal;
			font-weight: 800;
			font-stretch: normal;
			font-display: swap;
			src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v35/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgshZ1x4gaVc.ttf) format('truetype');
		}
	</style>

	<meta name="robots" content="index, nofollow">
	<script
		nonce="85eb514b-738a-4571-9517-8bb69cd355f0">(function (w, d) {!function (a, b, c, d) {a[c] = a[c] || {}; a[c].executed = []; a.zaraz = {deferred: [], listeners: []}; a.zaraz.q = []; a.zaraz._f = function (e) {return function () {var f = Array.prototype.slice.call(arguments); a.zaraz.q.push({m: e, a: f})}}; for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g); a.zaraz.init = () => {var h = b.getElementsByTagName(d)[0], i = b.createElement(d), j = b.getElementsByTagName("title")[0]; j && (a[c].t = b.getElementsByTagName("title")[0].text); a[c].x = Math.random(); a[c].w = a.screen.width; a[c].h = a.screen.height; a[c].j = a.innerHeight; a[c].e = a.innerWidth; a[c].l = a.location.href; a[c].r = b.referrer; a[c].k = a.screen.colorDepth; a[c].n = b.characterSet; a[c].o = (new Date).getTimezoneOffset(); if (a.dataLayer) for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({...o[1], ...p[1]})), {}))) zaraz.set(n[0], n[1], {scope: "page"}); a[c].q = []; for (; a.zaraz.q.length;) {const q = a.zaraz.q.shift(); a[c].q.push(q)} i.defer = !0; for (const r of [localStorage, sessionStorage]) Object.keys(r || {}).filter((t => t.startsWith("_zaraz_"))).forEach((s => {try {a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))} catch {a[c]["z_" + s.slice(7)] = r.getItem(s)} })); i.referrerPolicy = "origin"; i.src = "https://colorlib.com/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c]))); h.parentNode.insertBefore(i, h)};["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)}(w, d, "zarazData", "script");})(window, document);</script>
</head>

<body>

	<aside id="left-panel" class="left-panel">
		<nav class="navbar navbar-expand-sm navbar-default">
			<div class="navbar-header">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
					aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="https://colorlib.com/polygon/sufee/"><img
						src="https://colorlib.com/polygon/sufee/images/logo.png" alt="Logo"></a>
				<a class="navbar-brand hidden" href="https://colorlib.com/polygon/sufee/"><img
						src="https://colorlib.com/polygon/sufee/images/logo2.png" alt="Logo"></a>
			</div>
			<div id="main-menu" class="main-menu collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="{{ url('/admin') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard
						</a>
					</li>
                    <li><a href="{{ url('/admin/category-form') }}">Category
                        Form</a></li>
                    <li><a href="{{ url('/admin/blog-form') }}">Blog
                        Form</a></li>

				</ul>
			</div>
		</nav>
	</aside>


	<div id="right-panel" class="right-panel">

		<header id="header" class="header">
			<div class="header-menu">
				<div class="col-sm-7">
					<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
					<div class="header-left">
						<button class="search-trigger"><i class="fa fa-search"></i></button>
						<div class="form-inline">
							<form class="search-form">
								<input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
								<button class="search-close" type="submit"><i class="fa fa-close"></i></button>
							</form>
						</div>
						<div class="dropdown for-notification">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="count bg-danger">5</span>
							</button>
							<div class="dropdown-menu" aria-labelledby="notification">
								<p class="red">You have 3 Notification</p>
								<a class="dropdown-item media bg-flat-color-1" href="#">
									<i class="fa fa-check"></i>
									<p>Server #1 overloaded.</p>
								</a>
								<a class="dropdown-item media bg-flat-color-4" href="#">
									<i class="fa fa-info"></i>
									<p>Server #2 overloaded.</p>
								</a>
								<a class="dropdown-item media bg-flat-color-5" href="#">
									<i class="fa fa-warning"></i>
									<p>Server #3 overloaded.</p>
								</a>
							</div>
						</div>
						<div class="dropdown for-message">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="ti-email"></i>
								<span class="count bg-primary">9</span>
							</button>
							<div class="dropdown-menu" aria-labelledby="message">
								<p class="red">You have 4 Mails</p>
								<a class="dropdown-item media bg-flat-color-1" href="#">
									<span class="photo media-left"><img alt="avatar"
											src="https://colorlib.com/polygon/sufee/images/avatar/1.jpg"></span>
									<span class="message media-body">
										<span class="name float-left">Jonathan Smith</span>
										<span class="time float-right">Just now</span>
										<p>Hello, this is an example msg</p>
									</span>
								</a>
								<a class="dropdown-item media bg-flat-color-4" href="#">
									<span class="photo media-left"><img alt="avatar"
											src="https://colorlib.com/polygon/sufee/images/avatar/2.jpg"></span>
									<span class="message media-body">
										<span class="name float-left">Jack Sanders</span>
										<span class="time float-right">5 minutes ago</span>
										<p>Lorem ipsum dolor sit amet, consectetur</p>
									</span>
								</a>
								<a class="dropdown-item media bg-flat-color-5" href="#">
									<span class="photo media-left"><img alt="avatar"
											src="https://colorlib.com/polygon/sufee/images/avatar/3.jpg"></span>
									<span class="message media-body">
										<span class="name float-left">Cheryl Wheeler</span>
										<span class="time float-right">10 minutes ago</span>
										<p>Hello, this is an example msg</p>
									</span>
								</a>
								<a class="dropdown-item media bg-flat-color-3" href="#">
									<span class="photo media-left"><img alt="avatar"
											src="https://colorlib.com/polygon/sufee/images/avatar/4.jpg"></span>
									<span class="message media-body">
										<span class="name float-left">Rachel Santos</span>
										<span class="time float-right">15 minutes ago</span>
										<p>Lorem ipsum dolor sit amet, consectetur</p>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="user-area dropdown float-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="user-avatar rounded-circle" src="https://colorlib.com/polygon/sufee/images/admin.jpg"
								alt="User Avatar">
						</a>
						<div class="user-menu dropdown-menu">
							<a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
							<a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>
							<a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
							<form method="POST" action="{{ Route('Logout') }}">
                                @csrf
                                <button class="btn btn-danger" type="submit"><i class="fa fa-power -off"></i>Logout</button></form>
						</div>
					</div>
					<div class="language-select dropdown" id="language-select">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true"
							aria-expanded="true">
							<i class="flag-icon flag-icon-us"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="language">
							<div class="dropdown-item">
								<span class="flag-icon flag-icon-fr"></span>
							</div>
							<div class="dropdown-item">
								<i class="flag-icon flag-icon-es"></i>
							</div>
							<div class="dropdown-item">
								<i class="flag-icon flag-icon-us"></i>
							</div>
							<div class="dropdown-item">
								<i class="flag-icon flag-icon-it"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="breadcrumbs">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Dashboard</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li class="active">Dashboard</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div class="content mt-3">
			<div class="col-sm-12">
				<div class="alert  alert-success alert-dismissible fade show" role="alert">
					<span class="badge badge-pill badge-success">Success</span> You successfully read this important alert
					message.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card text-white bg-flat-color-1">
					<div class="card-body pb-0">
						<div class="dropdown float-right">
							<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button"
								id="dropdownMenuButton" data-toggle="dropdown">
								<i class="fa fa-cog"></i>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<div class="dropdown-menu-content">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</div>
						</div>
						<h4 class="mb-0">
							<span class="count">10468</span>
						</h4>
						<p class="text-light">Members online</p>
						<div class="chart-wrapper px-0" style="height:70px;" height="70" />
						<canvas id="widgetChart1"></canvas>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-lg-3">
			<div class="card text-white bg-flat-color-2">
				<div class="card-body pb-0">
					<div class="dropdown float-right">
						<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button"
							id="dropdownMenuButton" data-toggle="dropdown">
							<i class="fa fa-cog"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<div class="dropdown-menu-content">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</div>
					</div>
					<h4 class="mb-0">
						<span class="count">10468</span>
					</h4>
					<p class="text-light">Members online</p>
					<div class="chart-wrapper px-0" style="height:70px;" height="70" />
					<canvas id="widgetChart2"></canvas>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-flat-color-3">
			<div class="card-body pb-0">
				<div class="dropdown float-right">
					<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button"
						id="dropdownMenuButton" data-toggle="dropdown">
						<i class="fa fa-cog"></i>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<div class="dropdown-menu-content">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<h4 class="mb-0">
					<span class="count">10468</span>
				</h4>
				<p class="text-light">Members online</p>
			</div>
			<div class="chart-wrapper px-0" style="height:70px;" height="70" />
			<canvas id="widgetChart3"></canvas>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-flat-color-4">
			<div class="card-body pb-0">
				<div class="dropdown float-right">
					<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button"
						id="dropdownMenuButton" data-toggle="dropdown">
						<i class="fa fa-cog"></i>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<div class="dropdown-menu-content">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<h4 class="mb-0">
					<span class="count">10468</span>
				</h4>
				<p class="text-light">Members online</p>
				<div class="chart-wrapper px-3" style="height:70px;" height="70" />
				<canvas id="widgetChart4"></canvas>
			</div>
		</div>
	</div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="social-box facebook">
			<i class="fa fa-facebook"></i>
			<ul>
				<li>
					<sctrong><span class="count">40</span> k</strong>
						<span>friends</span>
				</li>
				<li>
					<sctrong><span class="count">450</span></strong>
						<span>feeds</span>
				</li>
			</ul>
		</div>

	</div>
	<div class="col-lg-3 col-md-6">
		<div class="social-box twitter">
			<i class="fa fa-twitter"></i>
			<ul>
				<li>
					<sctrong><span class="count">30</span> k</strong>
						<span>friends</span>
				</li>
				<li>
					<sctrong><span class="count">450</span></strong>
						<span>tweets</span>
				</li>
			</ul>
		</div>

	</div>
	<div class="col-lg-3 col-md-6">
		<div class="social-box linkedin">
			<i class="fa fa-linkedin"></i>
			<ul>
				<li>
					<sctrong><span class="count">40</span> +</strong>
						<span>contacts</span>
				</li>
				<li>
					<sctrong><span class="count">250</span></strong>
						<span>feeds</span>
				</li>
			</ul>
		</div>

	</div>
	<div class="col-lg-3 col-md-6">
		<div class="social-box google-plus">
			<i class="fa fa-google-plus"></i>
			<ul>
				<li>
					<sctrong><span class="count">94</span> k</strong>
						<span>followers</span>
				</li>
				<li>
					<sctrong><span class="count">92</span></strong>
						<span>circles</span>
				</li>
			</ul>
		</div>

	</div>
	<div class="col-xl-6">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-4">
						<h4 class="card-title mb-0">Traffic</h4>
						<div class="small text-muted">October 2017</div>
					</div>

					<div class="col-sm-8 hidden-sm-down">
						<button type="button" class="btn btn-primary float-right bg-flat-color-1"><i
								class="fa fa-cloud-download"></i></button>
						<div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
							<div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
								<label class="btn btn-outline-secondary">
									<input type="radio" name="options" id="option1"> Day
								</label>
								<label class="btn btn-outline-secondary active">
									<input type="radio" name="options" id="option2" checked> Month
								</label>
								<label class="btn btn-outline-secondary">
									<input type="radio" name="options" id="option3"> Year
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="chart-wrapper mt-4" />
				<canvas id="trafficChart" style="height:200px;" height="200"></canvas>
			</div>
		</div>
		<div class="card-footer">
			<ul>
				<li>
					<div class="text-muted">Visits</div>
					<strong>29.703 Users (40%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40"
							aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
				<li class="hidden-sm-down">
					<div class="text-muted">Unique</div>
					<strong>24.093 Users (20%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20"
							aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
				<li>
					<div class="text-muted">Pageviews</div>
					<strong>78.706 Views (60%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60"
							aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
				<li class="hidden-sm-down">
					<div class="text-muted">New Users</div>
					<strong>22.123 Users (80%)</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80"
							aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</li>
				<li class="hidden-sm-down">
					<div class="text-muted">Bounce Rate</div>
					<strong>40.15%</strong>
					<div class="progress progress-xs mt-2" style="height: 5px;">
						<div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0"
							aria-valuemax="100"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	</div>
	<div class="col-xl-3 col-lg-6">
		<section class="card">
			<div class="twt-feed blue-bg">
				<div class="corner-ribon black-ribon">
					<i class="fa fa-twitter"></i>
				</div>
				<div class="fa fa-twitter wtt-mark"></div>
				<div class="media">
					<a href="#">
						<img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt
							src="https://colorlib.com/polygon/sufee/images/admin.jpg">
					</a>
					<div class="media-body">
						<h2 class="text-white display-6">Jim Doe</h2>
						<p class="text-light">Project Manager</p>
					</div>
				</div>
			</div>
			<div class="weather-category twt-category">
				<ul>
					<li class="active">
						<h5>750</h5>
						Tweets
					</li>
					<li>
						<h5>865</h5>
						Following
					</li>
					<li>
						<h5>3645</h5>
						Followers
					</li>
				</ul>
			</div>
			<div class="twt-write col-sm-12">
				<textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
			</div>
			<footer class="twt-footer">
				<a href="#"><i class="fa fa-camera"></i></a>
				<a href="#"><i class="fa fa-map-marker"></i></a>
				New Castle, UK
				<span class="pull-right">
					32
				</span>
			</footer>
		</section>
	</div>
	<div class="col-xl-3 col-lg-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-one">
					<div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
					<div class="stat-content dib">
						<div class="stat-text">Total Profit</div>
						<div class="stat-digit">1,012</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-one">
					<div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
					<div class="stat-content dib">
						<div class="stat-text">New Customer</div>
						<div class="stat-digit">961</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-one">
					<div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
					<div class="stat-content dib">
						<div class="stat-text">Active Projects</div>
						<div class="stat-digit">770</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-6">
		<div class="card">
			<div class="card-header">
				<h4>World</h4>
			</div>
			<div class="Vector-map-js">
				<div id="vmap" class="vmap" style="height: 265px;"></div>
			</div>
		</div>

	</div>
	</div>
	</div>

	<script src="https://colorlib.com/polygon/sufee/assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/plugins.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/main.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/lib/chart-js/Chart.bundle.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/dashboard.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/widgets.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/lib/vector-map/jquery.vmap.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
	<script>
		(function ($) {
			"use strict";

			jQuery('#vmap').vectorMap({
				map: 'world_en',
				backgroundColor: null,
				color: '#ffffff',
				hoverOpacity: 0.7,
				selectedColor: '#1de9b6',
				enableZoom: true,
				showTooltip: true,
				values: sample_data,
				scaleColors: ['#1de9b6', '#03a9f5'],
				normalizeFunction: 'polynomial'
			});
		})(jQuery);
	</script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2cb3a2ab87c5498db5ce7e6608cf55231689030342039"
		integrity="sha512-DI3rPuZDcpH/mSGyN22erN5QFnhl760f50/te7FTIYxodEF8jJnSFnfnmG/c+osmIQemvUrnBtxnMpNdzvx1/g=="
		data-cf-beacon='{"rayId":"7eb272ed0f9e78bd","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
		crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/polygon/sufee/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 08:10:49 GMT -->

</html>