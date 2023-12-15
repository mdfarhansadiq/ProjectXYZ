<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang>
<!--<![endif]-->

<!-- Mirrored from colorlib.com/polygon/sufee/forms-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jul 2023 11:20:53 GMT -->

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

	<meta name="robots" content="noindex, nofollow">
	<script
		nonce="85338f59-cc3f-4edb-8ce5-a2932d3ce7c6">(function (w, d) {!function (a, b, c, d) {a[c] = a[c] || {}; a[c].executed = []; a.zaraz = {deferred: [], listeners: []}; a.zaraz.q = []; a.zaraz._f = function (e) {return function () {var f = Array.prototype.slice.call(arguments); a.zaraz.q.push({m: e, a: f})}}; for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g); a.zaraz.init = () => {var h = b.getElementsByTagName(d)[0], i = b.createElement(d), j = b.getElementsByTagName("title")[0]; j && (a[c].t = b.getElementsByTagName("title")[0].text); a[c].x = Math.random(); a[c].w = a.screen.width; a[c].h = a.screen.height; a[c].j = a.innerHeight; a[c].e = a.innerWidth; a[c].l = a.location.href; a[c].r = b.referrer; a[c].k = a.screen.colorDepth; a[c].n = b.characterSet; a[c].o = (new Date).getTimezoneOffset(); if (a.dataLayer) for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({...o[1], ...p[1]})), {}))) zaraz.set(n[0], n[1], {scope: "page"}); a[c].q = []; for (; a.zaraz.q.length;) {const q = a.zaraz.q.shift(); a[c].q.push(q)} i.defer = !0; for (const r of [localStorage, sessionStorage]) Object.keys(r || {}).filter((t => t.startsWith("_zaraz_"))).forEach((s => {try {a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))} catch {a[c]["z_" + s.slice(7)] = r.getItem(s)} })); i.referrerPolicy = "origin"; i.src = "https://colorlib.com/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c]))); h.parentNode.insertBefore(i, h)};["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)}(w, d, "zarazData", "script");})(window, document);</script>
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
                    <li></i><a href="{{ url('/admin/category-form') }}">Category
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
							{{-- <form class="search-form">
								<input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
								<button class="search-close" type="submit"><i class="fa fa-close"></i></button>
							</form> --}}
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
						<h1>Blog Form</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="#">Dashboard</a></li>
							<li><a href="#">Forms</a></li>
							<li class="active">Basic</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div class="content mt-3">
			<div class="animated fadeIn">
				<div class="row">
					<div class="col-lg-6">
                        <div class="card">
							<div class="card-header">
								<strong>Blog Form - Edit</strong>
							</div>
							<div class="card-body card-block">
								<form action="{{ url('/admin/blog-update/'.$blogData->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        <label for="">Blog Category</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="blog_categ_id">
                                            <option selected value="">Select Category</option>

                                            @foreach ($categs as $categ)
                                                <option value="{{ $categ->id }}" @if ($categ->id == $blogData->blog_categ_id) selected @endif>{{ $categ->category_name }}
                                                </option>
                                            @endforeach

                                            {{-- @foreach ($categs as $categ)
                                                <option value="{{ $categ->id }}">{{ $categ->category_name }}
                                                </option>
                                            @endforeach --}}
                                        </select>
                                    </div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Title</label>
										</div>
										<div class="col-12 col-md-9"><input type="text" id="text-input" name="blog_title" placeholder="Insert category name"
												class="form-control" value="{{ $blogData->blog_title }}"></div>
									</div>
                                    <div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Image</label>
										</div>
										<div class="col-12 col-md-9"><input type="file" id="text-input" name="blog_image" placeholder="Insert category name"
												class="form-control"></div>
									</div>
                                    <div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Description</label>
										</div>
										<div class="col-12 col-md-9"><textarea type="text" class="ckeditor form-control" id="overview" placeholder="Write course overview"
                                            name="blog_description" rows="30" cols="10" required>{{ $blogData->blog_description }}</textarea></div>
									</div>

                                    <div>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
            {{-- <div class="col-lg-6">
                <h2>Blog Table</h2>
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Blog Category</th>
                                    <th>Blog Title</th>
                                    <th>Blog Image</th>
                                    <th>Blog Description</th>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sl = 0
                                @endphp
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ ++$sl }}</td>
                                        <td>{{ $blog->adminCategory->category_name }}</td>
                                        <td>{{ $blog->blog_title }}</td>
                                        <td><img src="{{ asset($blog->blog_image) }}" class="img-fluid"></td>
                                        <td>{!! $blog->blog_description !!}</td>
                                        <td><button class="btn btn-primary"><a href="{{ url('/admin/blog-edit/'.$blog->id) }}" style="color: white">Edit</a></button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
            </div> --}}
            {{-- <div class="col-lg-6">
                <h2>Category Table</h2>
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Category Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sl = 0
                                @endphp
                                @foreach ($categs as $categ)
                                    <tr>
                                        <td>{{ ++$sl }}</td>
                                        <td>{{ $categ->category_name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
            </div> --}}
		</div>
	</div>

	<script src="https://colorlib.com/polygon/sufee/assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/popper.min.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/plugins.js"></script>
	<script src="https://colorlib.com/polygon/sufee/assets/js/main.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2cb3a2ab87c5498db5ce7e6608cf55231689030342039"
		integrity="sha512-DI3rPuZDcpH/mSGyN22erN5QFnhl760f50/te7FTIYxodEF8jJnSFnfnmG/c+osmIQemvUrnBtxnMpNdzvx1/g=="
		data-cf-beacon='{"rayId":"7ebbc6c7984778c7","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
		crossorigin="anonymous"></script>

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
</body>

<!-- Mirrored from colorlib.com/polygon/sufee/forms-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jul 2023 11:20:57 GMT -->

</html>
