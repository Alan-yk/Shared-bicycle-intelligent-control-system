<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>共享单车智能管家系统</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	

  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="/Public/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/Public/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/Public/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="/Public/css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/Public/css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="/Public/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="/Public/css/cs-select.css">
	<link rel="stylesheet" href="/Public/css/cs-skin-border.css">
	
	<link rel="stylesheet" href="/Public/css/style.css">


	<!-- Modernizr JS -->
	<script src="/Public/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
<!-- 	<style>
    .icon-airplane{background:url(校徽.png) center left no-repeat; width:15px; height:15px}
</style> -->

	</head>
	<body>

		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>Sharing-Bicycles</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<!-- <ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.html">Home</a></li>
							<li>
								<a href="vacation.html" class="fh5co-sub-ddown">Vacations</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li>
							<li><a href="flight.html">Flights</a></li>
							<li><a href="hotel.html">Hotel</a></li>
							<li><a href="car.html">Car</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul> -->
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(/Public/images/cover_bg_1.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								 
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">个人登录</a>
								      </li>
								      <!-- <li role="presentation">
								    	   <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">用户信息</a>
								      </li> -->
								    <!--   <li role="presentation">
								    	   <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">管理员</a>
								      </li> -->
								   </ul>

								   <!-- Tab panes -->
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
									 	<form action="<?php echo U('Home/index/index');?>" method="post">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">用户名</label>
													<input type="text" class="form-control"  name="username" id="from-place" placeholder="请输入用户名"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">密码</label>
													<input type="text" class="form-control" name="password" id="to-place" placeholder="请输入密码"/>
												</div>
											</div>
											<!-- <div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Check In:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Check Out:</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div> -->
											<!-- <div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">确认密码</label>
													<input type="text" class="form-control" id="to-place" placeholder="请再输入密码"/>
												</div>
											</div> -->
											<!-- <div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div> -->
										<!-- 	<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div> -->
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="登录">
											</div>
										</div>
										</form>
									 </div>

			<img src="C:/Users/10202/Desktop/校徽.png" alt="错误">
<!-- 
									 <div role="tabpanel" class="tab-pane" id="hotels">
									 	<div class="row">
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">用户名</label>
													<input type="text" class="form-control" id="from-place" placeholder="Just"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">上一次使用日期</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">今天的日期</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">零部件损毁提交</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>车链</option>
														<option value="economy">车链</option>
														<option value="first">车锁</option>
														<option value="business">刹车</option>
														<option value="business">夜灯</option>
														<option value="business">车筐</option>
														<option value="business">轮胎</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">骑行体验,数值越大越满意!</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div> -->
											<!-- <div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div> -->
<!-- 											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="确认">
											</div>
										</div>
									 </div> -->

<!-- 									 <div role="tabpanel" class="tab-pane" id="packages">
									 	<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">City:</label>
													<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Destination:</label>
													<input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Departs:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Return:</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Rooms:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="economy">1</option>
														<option value="first">2</option>
														<option value="business">3</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Search Packages">
											</div>
										</div>
									 </div> -->
									</div>
		<img src="C:/Users/10202/Desktop/校徽.jpg" alt="错误">
								</div>
									
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
								
									<h2>欢迎使用共享单车智能管家系统~</h2>
									
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
      
		
		<!-- fh5co-blog-section -->
		<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>用户建议栏</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>夜灯功能非常实用</p>
						</blockquote>
						<p class="author">陈韬 <a href="#" target="_blank">江苏科技大学</a> <span class="subtext">计算机专业</span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>我认为“失联车找回”功能真的很大程度上帮助市面上的共享单车公司降低亮单车损耗率。</p>
						</blockquote>
						<p class="author">张栢豪<a href="#" target="_blank">江苏科技大学</a> <span class="subtext">计算机专业</span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;用户界面做的很好看，为美工点个👍！同时提一个小建议，可否在对应的app里增加一个预约功能，这样的话就可以充分避免我冲着一辆单车走过去，走到目的地后发现单车并不在那边的尴尬现象的发生！期待你们进行完善~&rdquo;</p>
						</blockquote>
						<p class="author">云之遥<a href="#">镇江市</a> <span class="subtext">网友</span></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
		
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="/Public/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/Public/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/Public/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/Public/js/jquery.waypoints.min.js"></script>
	<script src="/Public/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="/Public/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="/Public/js/hoverIntent.js"></script>
	<script src="/Public/js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="/Public/js/jquery.magnific-popup.min.js"></script>
	<script src="/Public/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="/Public/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="/Public/js/classie.js"></script>
	<script src="/Public/js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="/Public/js/main.js"></script>

	</body>
</html>