	

	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="content-topbar flex-sb-m h-full container">
						<div class="left-top-bar">
							Chào mừng các bạn tới KEKULE SHOP
						</div>

						<div class="right-top-bar flex-w h-full">
							
							<a href="#" class="flex-c-m trans-04 p-lr-25">
								<i class="fa fa-instagram"></i>
							</a>

							<a href="#" class="flex-c-m trans-04 p-lr-25">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="flex-c-m trans-04 p-lr-25 cd-signup">
								Đăng kí
							</a>

							<a href="#" class="flex-c-m trans-04 p-lr-25 cd-signin">
								Đăng nhập
							</a>
						</div>


						<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
						<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
							<ul class="cd-switcher">
								<li><a href="#0">Sign in</a></li>
								<li><a href="#0">New account</a></li>
							</ul>

							<div id="cd-login"> <!-- log in form -->
								<form class="cd-form">
									<p class="fieldset">
										<label class="image-replace cd-email" for="signin-email">E-mail</label>
										<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
										<span class="cd-error-message">Error message here!</span>
									</p>

									<p class="fieldset">
										<label class="image-replace cd-password" for="signin-password">Password</label>
										<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
										<a href="#0" class="hide-password">Hide</a>
										<span class="cd-error-message">Error message here!</span>
									</p>

									<p class="fieldset">
										<input type="checkbox" id="remember-me" checked>
										<label for="remember-me">Remember me</label>
									</p>

									<p class="fieldset">
										<input class="full-width" type="submit" value="Login">
									</p>
								</form>
								
								<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
								<!-- <a href="#0" class="cd-close-form">Close</a> -->
							</div> <!-- cd-login -->

							<div id="cd-signup"> <!-- sign up form -->
								<form class="cd-form">
									<p class="fieldset">
										<label class="image-replace cd-username" for="signup-username">Username</label>
										<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
										<span class="cd-error-message">Error message here!</span>
									</p>

									<p class="fieldset">
										<label class="image-replace cd-email" for="signup-email">E-mail</label>
										<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
										<span class="cd-error-message">Error message here!</span>
									</p>

									<p class="fieldset">
										<label class="image-replace cd-password" for="signup-password">Password</label>
										<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
										<a href="#0" class="hide-password">Hide</a>
										<span class="cd-error-message">Error message here!</span>
									</p>

									<p class="fieldset">
										<input type="checkbox" id="accept-terms">
										<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
									</p>

									<p class="fieldset">
										<input class="full-width has-padding" type="submit" value="Create account">
									</p>
								</form>

								<!-- <a href="#0" class="cd-close-form">Close</a> -->
							</div> <!-- cd-signup -->

							<div id="cd-reset-password"> <!-- reset password form -->
								<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

								<form class="cd-form">
									<p class="fieldset">
										<label class="image-replace cd-email" for="reset-email">E-mail</label>
										<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
										<span class="cd-error-message">Error message here!</span>
									</p>

									<p class="fieldset">
										<input class="full-width has-padding" type="submit" value="Reset password">
									</p>
								</form>

									<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
								</div> <!-- cd-reset-password -->
								<a href="#0" class="cd-close-form">Close</a>
							</div> <!-- cd-user-modal-container -->
								</div> <!-- cd-user-modal -->
						</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="source/images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="{{route('Home-kekule')}}">Trang Chủ</a>
								
							</li>

							<li>
								<a href="{{route('Product-kekule')}}">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="{{route('Shopping-kekule')}}">Hàng mới</a>
							</li>

							<li>
								<a href="blog.html">Blog</a>
							</li>

							<li>
								<a href="about.html">Giới Thiệu</a>
							</li>

							<li>
								<a href="contact.html">Liên Hệ</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="0">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-favorite"  data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="source/images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="source/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>