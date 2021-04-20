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
	 <title><?php echo $__env->yieldContent('title'); ?></title>
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
									<?php if(Route::has('login')): ?>
									
									<?php if(auth()->guard()->check()): ?>
									<div class="sj-userloginarea">
							
										<a href="javascript:void(0);">
											<i class="fa fa-angle-down"></i>
											<img src="/public/images/person-icon.png" alt="image description">
											<div class="sj-loginusername">
												<h3><?php echo e(auth()->user()->name); ?> </h3>
											
											</div>
										</a>
										<nav class="sj-usernav">
											<ul>
												<li><a href="<?php echo e(route('profi')); ?>"><i class="lnr lnr-users"></i><span>Профиль </span></a></li>
												<li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">><i class="lnr lnr-exit"></i><span>Выйти </span></a></li>
												<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
														<?php echo csrf_field(); ?>
													</form>
												</ul>
										</nav>
									</div>
									<?php else: ?>
									<div class="sj-loginarea" style="display: block">
										<ul class="sj-loging">
											<li><a href="<?php echo e(route('login')); ?>"> Логин </a></li>
											<?php if(Route::has('register')): ?>
											<li><a href="<?php echo e(route('register')); ?>"> Регистрация </a></li>
											<?php endif; ?>
										</ul>
									</div>
										  <?php endif; ?>
										  <?php endif; ?>
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
							<?php
							$categories=\App\Models\Category::get()->toTree();	
							?>
							<div class="sj-navigationarea">x
								<strong class="sj-logo"><a href="<?php echo e(route('home')); ?>"><img src="/public/images/logo.png" alt="company logo here" /></a></strong>
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
														<li><a href="<?php echo e(route('home')); ?>"> Главная страница </a></li>
													</ul>
												</li>
												<?php if(auth()->guard()->check()): ?>
												<li class="current-menu-item menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);"><i class="lnr lnr-list"> Админ панель</i></a>
													<ul class="sub-menu">
														<li><a href="<?php echo e(route('book.index')); ?>"> Новости </a></li>
													</ul>
											
												</li>
												<?php endif; ?>
												<li>
													<a href="<?php echo e(route('about')); ?>"> О нас </a>
												</li>
												<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li class="menu-item-has-children page_item_has_children">
													
													<a href="<?php echo e(route('post')); ?>"><?php echo e($category->name); ?> </a>
													
													<ul class="sub-menu">
													 <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													
														<li class="menu-item-has-children page_item_has_children">
															
															<a href="<?php echo e(route('post')); ?>" style="font-size: 14px;"><?php echo e($g->name); ?></a>
															<?php $__currentLoopData = $g->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<ul class="sub-menu">
																<li><a href="<?php echo e(route('article')); ?>" style="font-size: 14px;"><?php echo e($h->name); ?> </a></li>
															</ul>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
															
														</li>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</ul>
													
												</li>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


													
												</li>
											
												<li>
													
													<a href="<?php echo e(route('message')); ?>">Обратная связь </a>
													
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
          
		      <?php echo $__env->yieldContent('home-banner'); ?>
			 <!--************************************
					Main Start
			*************************************-->
		
			
		      <?php echo $__env->yieldContent('main'); ?>
			
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
	 <script type="text/javascript" src="<?php echo e(asset('/public/js/ckeditor/ckeditor.js')); ?>"></script>
	 <script src="/public/js/chartist.min.js"></script>
	 
	 <script src="/public/js/appear.js"></script>
	 <script src="/public/js/main.js"></script> 
 </body>
 </html><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\practice\resources\views/layouts/main.blade.php ENDPATH**/ ?>