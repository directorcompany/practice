<!doctype html>
 <!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> </html><![endif]-->
 <!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> </html><![endif]-->
 <!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> </html><![endif]-->
 <!--[if gt IE 8]><!-->	 <html class="no-js" lang="zxx">  <!--<![endif]-->
 <head>
<!--  index.html
 8:50 !-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <meta charset="utf-8" />
	 <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	 <title>@yield('title')</title>
	 <meta name="description" content="" />
	 <meta name="viewport" content="width=device-width, initial-scale=1" />
	 <link rel="apple-touch-icon" href="apple-touch-icon.png" />
	 <link rel="icon" href="/public/images/favicon.png" type="image/x-icon" />
	 <link rel="stylesheet" href="/public/css/bootstrap.min.css" />
	 <link rel="stylesheet" href="/public/css/normalize.css" />
	 <link rel="stylesheet" href="/public/css/fontawesome/fontawesome-all.css" />
	 <link rel="stylesheet" href="/public/css/font-awesome.min.css" />
	 <link rel="stylesheet" href="/public/css/linearicons.css" />
	 <link rel="stylesheet" href="/public/css/themify-icons.css" />
	 <link rel="stylesheet" href="/public/css/scrollbar.css" />
	 <link rel="stylesheet" href="/public/css/owl.carousel.css" />
	 <link rel="stylesheet" href="/public/css/chartist.css" />
	 <link rel="stylesheet" href="/public/css/main.css" />
	 <link rel="stylesheet" href="/public/css/dashboard.css" />
	 <link rel="stylesheet" href="/public/css/color.css" />
	 <link rel="stylesheet" href="/public/css/transitions.css" />
	 <link rel="stylesheet" href="/public/css/responsive.css" />
	 {{-- <script src="/public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script> --}}
 </head>
 <body class="sj-userlogin"> 
	 <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	 <!--************************************
				Preloader Start
	*************************************-->
	<div class="preloader-outer">
		<div class='loader'>
			<div class='loader--dot'></div>
			<div class='loader--dot'></div>
			<div class='loader--dot'></div>
			<div class='loader--dot'></div>
		</div>
	</div>
	<!--************************************
			   Preloader End
   *************************************-->
	 <!--************************************
			Wrapper Start
	*************************************-->
	 <div id="sj-wrapper" class="sj-wrapper">
		 <!--************************************
				Content Wrapper Start
		*************************************-->
		 <div class="sj-contentwrapper">
			 <!--************************************
					Header Start
			*************************************-->
			<header id="sj-header" class="sj-header sj-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="sj-topbar">
								<ul class="sj-socialicons sj-socialiconssimple">
									<li class="sj-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
									<li class="sj-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
									<li class="sj-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="sj-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
								</ul>
								<div class="sj-languagelogin">
									@if (Route::has('login'))
									
									@auth
									<div class="sj-userloginarea">
							
										<a href="javascript:void(0);">
											<i class="fa fa-angle-down"></i>
											<img src="/public/images/person-icon.png" alt="image description">
											<div class="sj-loginusername">
												<h3>{{auth()->user()->name}} </h3>
											
											</div>
										</a>
										<nav class="sj-usernav">
											<ul>
												<li><a href="{{route('profi')}}"><i class="lnr lnr-users"></i><span>Профиль </span></a></li>
												<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">><i class="lnr lnr-exit"></i><span>Выйти </span></a></li>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
														@csrf
													</form>
												</ul>
										</nav>
									</div>
									@else
									<div class="sj-loginarea" style="display: block">
										<ul class="sj-loging">
											<li><a href="{{route('login')}}"> Логин </a></li>
											@if (Route::has('register'))
											<li><a href="{{route('register')}}"> Регистрация </a></li>
											@endif
										</ul>
									</div>
										  @endauth
										  @endif
									<div class="sj-languages">
										<a id="sj-languages-button" href="javascript:void(0);">
											<img src="/public/images/flags/flag-02.jpg" alt="image description">
											<span>Eng </span>
											<i class="fa fa-angle-down"></i>
										</a>
										<ul>
											<li>
												<a href="javascript:void(0);">
													<img src="/public/images/flags/flag-01.jpg" alt="image description">
													<span>Ara </span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<img src="/public/images/flags/flag-02.jpg" alt="image description">
													<span>Eng </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							@php
							$categories=\App\Models\Category::get()->toTree();	
							@endphp
							<div class="sj-navigationarea">x
								<strong class="sj-logo"><a href="{{route('home')}}"><img src="/public/images/logo.png" alt="company logo here" /></a></strong>
								<div class="sj-rightarea">
									<nav id="sj-nav" class="sj-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse sj-navigation" id="navbarNav">
											<ul>
												<li class="current-menu-item mr-2	 menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);"><i class="lnr lnr-home"></i></a>
													<ul class="sub-menu">
														<li><a href="{{route('home')}}"> Главная страница </a></li>
													</ul>
												</li>
												@auth
												<li class="current-menu-item menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);"><i class="lnr lnr-list"> Админ панель</i></a>
													<ul class="sub-menu">
														<li><a href="{{route('book.index')}}"> Новости </a></li>
													</ul>
											
												</li>
												@endauth
												<li>
													<a href="{{route('about')}}"> О нас </a>
												</li>
												@foreach($categories as $category)
												<li class="menu-item-has-children page_item_has_children">
													
													<a href="{{route('post')}}">{{$category->name}} </a>
													
													<ul class="sub-menu">
													 @foreach($category->children as $g)
													
														<li class="menu-item-has-children page_item_has_children">
															
															<a href="{{route('post')}}" style="font-size: 14px;">{{$g->name}}</a>
															@foreach($g->children as $h)
															<ul class="sub-menu">
																<li><a href="{{route('article')}}" style="font-size: 14px;">{{$h->name}} </a></li>
															</ul>
															@endforeach	
															
														</li>
														@endforeach
													</ul>
													
												</li>
												@endforeach


													
												</li>
											
												<li>
													{{-- <span class="sj-tagnew">New </span> --}}
													<a href="{{route('message')}}">Обратная связь </a>
													
												</li>
									
											</ul>
										</div>
									</nav>
									</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--************************************
				   Header End
		   *************************************-->
          
		      @yield('home-banner')
			 <!--************************************
					Main Start
			*************************************-->
		
			
		      @yield('main')
			
			 <!--************************************
					Main End
			*************************************-->
		 <!--************************************
					Footer Start
			*************************************-->
			<footer id="sj-footer" class="sj-footer sj-haslayout">
				<div class="container">
					<div class="row">
						<a class="sj-btnscrolltotop" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
						<div class="sj-footercolumns">
							<div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
								<div class="sj-fcol sj-footeraboutus">
									<strong class="sj-logo">
										<a href="index.html"><img src="/public/images/logo.png" alt="image description" /></a>
									</strong>
								
									<ul class="sj-socialicons sj-socialiconssimple">
										<li class="sj-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
										<li class="sj-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
										<li class="sj-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
										<li class="sj-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
										<li class="sj-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
						
							<div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
								<div class="sj-fcol sj-widget sj-widgetcontactus">
									<div class="sj-widgetheading">
										<h3>Get In Touch </h3>
									</div>
									<div class="sj-widgetcontent">
										<ul>
											<li><i class="lnr lnr-home"></i><address>123 Office St, ABC ________, Melbourne, Australia.  </address></li>
											<li><a href="tel:(+4)123456789101"><i class="lnr lnr-phone"></i><span>(+4) 1234 5678 9101 </span></a></li>
											<li><a href="tel:(+4)123456789101"><i class="lnr lnr-screen"></i><span>(+4) 4321 8765 1019 </span></a></li>
											<li><a href="mailto:info@yourdomain.com"><i class="lnr lnr-envelope"></i><span>info@yourdomain.com </span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="sj-footerbottom">
							<p class="sj-copyrights">© 2019  <span>Amentojourn </span>. All Rights Reserved </p>
						</div>
					</div>
				</div>
			</footer>
			<!--************************************
				   Footer End
		   *************************************-->
		 </div>
		 <!--************************************
				Content Wrapper End
		*************************************-->
	 </div>
	 <!--************************************
			Wrapper End
	*************************************-->
	 <!--************************************
			Search Start
	*************************************-->
	 <div id="sj-searcharea" class="sj-searcharea">
		 <button type="button" class="close">× </button>
		 <form class="sj-formtheme sj-formsearcmain">
			 <input type="search" value="" placeholder="Search Here..." />
			 <button type="submit" class="sj-btn sj-btnactive"><span>Search </span></button>
		 </form>
	 </div>
	 <!--************************************
			Search End
	*************************************-->
	 <script src="/public/js/vendor/jquery-3.3.1.js"></script>
	 <script src="/public/js/vendor/jquery-library.js"></script>
	 <script src="/public/js/vendor/bootstrap.min.js"></script>
	 <script src="/public/js/owl.carousel.min.js"></script>
	 <script src="/public/js/circle-progress.js"></script>
	 <script src="/public/js/scrollbar.min.js"></script>
	 <script type="text/javascript" src="{{asset('/public/js/ckeditor/ckeditor.js')}}"></script>
	 <script src="/public/js/chartist.min.js"></script>
	 {{-- <script src="/public/js/countdown.js"></script> --}}
	 <script src="/public/js/appear.js"></script>
	 <script src="/public/js/main.js"></script> 
 </body>
 </html>