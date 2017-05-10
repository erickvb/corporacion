<header class="header header4">
	<div class="header-top">
		<div class="container-fluid">
			<div class="header-top-text">Now shipping to Canada.</div>
			<!-- End .header-top-text -->
			<ul class="top-dropdowns">
				<li><a href="#"> <span>My Support</span>
				</a></li>
				<li class="hidden-xs"><a href="#"> <span>My Favorites</span>
				</a></li>
				<li class="hidden-xs"><a href="#"> <span>Checkout</span>
				</a></li>

				<li class="hidden-xs"><a href="#"> <span>MY Wishlist</span>
				</a></li>
				<li><a href="#"> <i class="icon top-icon top-icon-creditcard"></i> <span>Currency</span>
				</a>
					<ul>
						<li><a href="#">Us Dollar</a></li>
						<li><a href="#">Euro</a></li>
						<li><a href="#">Pound St</a></li>
						<li><a href="#">Yuan</a></li>
					</ul></li>
				<li><a href="#"> <i class="icon top-icon top-icon-flag"></i> <span>Language</span>
				</a>
					<ul>
						<li><a href="#"> <img src="assets/images/flags/england.jpg"
								alt="England Flag"> <span>English</span>
						</a></li>
						<li><a href="#"> <img src="assets/images/flags/spain.jpg"
								alt="Spain Flag"> <span>Spanish</span>
						</a></li>
						<li><a href="#"> <img src="assets/images/flags/france.jpg"
								alt="France Flag"> <span>French</span>
						</a></li>
						<li><a href="#"> <img src="assets/images/flags/germany.jpg"
								alt="Germany Flag"> <span>German</span>
						</a></li>
						<li><a href="#"> <img src="assets/images/flags/italy.jpg"
								alt="Italy Flag"> <span>Italian</span>
						</a></li>
					</ul></li>
			</ul>
			<!-- End .top-dropdowns -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .header-top -->

	<div class="header-inner">
		<div class="container-fluid">
			<div class="logo">
				<a href="index.html" title="Sconto - Premium eCommerce Template"> <img
					src="assets/images/logo-index5.png" alt="Sconto">
				</a>
			</div>
			<!-- End .logo -->

			<div class="dropdowns-container">
				<div class="header-boxes-container">
					<div class="header-box">
						<i class="icon icon-truck"></i>
						<div class="header-box-title">Free Delivery</div>
						<p>on all orders</p>
					</div>
					<!-- End .header-box -->

					<div class="header-box">
						<i class="icon icon-phone"></i>
						<div class="header-box-title text-custom">(01) 242-4595</div>
						<p>Llamanos</p>
					</div>
					<!-- End .header-box -->
				</div>
				<!-- End .header-boxes-container -->

				<div class="header-search-container">
					<form action="#" class="header-search-form">
						<div class="dropdown search-dropdown">
							<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdown-categoria-select"
							 data-id-categoria="<?=empty($data_categoria)?'0':$data_categoria->m_product_category_id?>"> 
							 
							 <?=empty($data_categoria)?"Categorias":$data_categoria->name?> <i class="icon icon-search-arrow"></i>
							</a>

							<ul class="dropdown-menu">
							 <li><a href="javascript:;" class="dropdown-categoria">Todos</a></li>
							 <?php  foreach($data_menu as $categoria) {?>
								<li><a href="javascript:;" class="dropdown-categoria" data-id-categoria="<?=$categoria->m_product_category_id?>"><?=$categoria->name?></a></li>
								<?php }?>
							</ul>
							<!-- End .dropdown -->
						</div>
						<!-- End .dropdown -->
						<input type="search" class="form-control" required="required" id="txt-buscar-x-categoria" value="<?=isset($key_busqueda)?$key_busqueda:''?>" />
						<button type="button" class="btn" id="btn-buscar-x-categoria">
							<i class="icon icon-header-search"></i>
						</button>
					</form>
				</div>
				<!-- End .header-search-container -->
				<div class="alldropdowns-wrapper">
					<button type="button" class="navbar-toggle">
						<span class="toggle-wrapper"> <span class="toggle-text">Menu</span>
							<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
						</span>
					</button>
					<div class="dropdowns-wrapper">
						<div class="dropdown header-dropdown login-dropdown">
							<a href="#" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false"> <i class="icon icon-header icon-lock"></i>
							</a>

							<div class="dropdown-menu">
								<div class="dropdown-title">Register Form</div>
								<form action="#">
									<div class="form-group label-overlay">
										<input type="text" class="form-control" required> <label
											class="input-desc"><i class="icon input-icon input-user"></i>Enter
											your username <span class="input-required">*</span></label>
									</div>
									<!-- End .form-group -->
									<div class="form-group label-overlay">
										<input type="email" class="form-control" required> <label
											class="input-desc"><i class="icon input-icon input-email"></i>Enter
											your email <span class="input-required">*</span></label>
									</div>
									<!-- End .form-group -->
									<div class="form-group label-overlay">
										<input type="password" class="form-control" required> <label
											class="input-desc"><i class="icon input-icon input-password"></i>Enter
											your password <span class="input-required">*</span></label>
									</div>
									<!-- End .form-group -->
									<div class="form-group label-overlay">
										<input type="password" class="form-control" required> <label
											class="input-desc"><i class="icon input-icon input-password"></i>Repeat
											your password <span class="input-required">*</span></label>
									</div>
									<!-- End .form-group -->

									<button type="submit" class="btn btn-custom">Register Account</button>
								</form>
							</div>
							<!-- End .dropdown-menu -->
						</div>
						<!-- End .header-dropdown -->

						<ul class="header-dropdown account-dropdown">
							<li><a href="#" title="My Account"> <i
									class="icon icon-header icon-user"></i> <span>My Account</span>
							</a>

								<ul>
									<li><a href="#"> <i
											class="icon icon-dropdown icon-dropdown-user"></i> <span>My
												Account</span>
									</a></li>
									<li><a href="#"> <i
											class="icon icon-dropdown icon-dropdown-wishlist"></i> <span>My
												Wishlist</span>
									</a></li>
									<li><a href="#"> <i
											class="icon icon-dropdown icon-dropdown-heart"></i> <span>My
												Favorites</span>
									</a></li>
									<li><a href="#"> <i
											class="icon icon-dropdown icon-dropdown-check"></i> <span>Checkout</span>
									</a></li>
									<li><a href="#"> <i
											class="icon icon-dropdown icon-dropdown-lock"></i> <span>Login
												or Register</span>
									</a></li>
								</ul></li>
						</ul>

						<div class="dropdown header-dropdown cart-dropdown">
							<a href="#" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false"> <i class="icon icon-header icon-cart"></i>
								<span class="dcart-total-count">2</span>
							</a>

							<div class="dropdown-menu">
								<p>
									2 item(s) in your cart - <span class="text-custom">$665.00</span>
								</p>
								<div class="dcart-products">
									<div class="product product-sm">
										<figure>
											<a href="#"> <img
												src="assets/images/products/thumbs/product1.jpg"
												alt="Product">
											</a>
										</figure>
										<div class="product-meta">
											<h5 class="product-title">
												<a href="#">Draped sleeve detail shirt</a>
											</h5>
											<div class="product-price-container">
												<span class="product-price">$280.00</span>
											</div>
											<!-- End .product-price-container -->
										</div>
										<!-- End .product-meta -->
										<a href="#" class="icon delete-btn lighter"
											title="Delete Product"><span class="sr-only">Delete product</span></a>
									</div>
									<!-- End .product -->
									<div class="product product-sm">
										<figure>
											<a href="#"> <img
												src="assets/images/products/thumbs/product2.jpg"
												alt="Product">
											</a>
										</figure>
										<div class="product-meta">
											<h5 class="product-title">
												<a href="#">Draped wrap white blouse</a>
											</h5>
											<div class="product-price-container">
												<span class="product-old-price">$1500.00</span> <span
													class="product-price">$750.00</span>
											</div>
											<!-- End .product-price-container -->
										</div>
										<!-- End .product-meta -->
										<a href="#" class="icon delete-btn lighter"
											title="Delete Product"><span class="sr-only">Delete product</span></a>
									</div>
									<!-- End .product -->
								</div>
								<!-- End .dcart-products -->

								<div class="dcart-action-container">
									<div class="dcart-action-info">
										<p>
											Shipping: <span class="text-custom">$7.00</span>
										</p>
										<p>
											Tax: <span>Free</span>
										</p>
										<p>
											Total: <span class="text-custom">$665.00</span>
										</p>
									</div>
									<!-- End .dcart-action-info -->

									<div class="dcart-action">
										<a href="#" class="btn btn-custom4 btn-sm">View Cart</a> <a
											href="#" class="btn btn-custom btn-sm">Checkout</a>
									</div>
									<!-- End .dcart-action -->
								</div>
								<!-- End .dcart-action-container -->
							</div>
							<!-- End .dropdown-menu -->
						</div>
						<!-- End .header-dropdown -->
					</div>
					<!-- End .dropdowns-wrapper -->
				</div>
				<!-- End .all-dropdowns-wrapper -->

			</div>
			<!-- End .dropdowns-container -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .header-inner -->

	<nav class="menu-wrapper sticky-header">
		<div class="container-fluid">
			<ul class="menu">
				<li><a href="<?=site_url()?>">Inicio</a></li>
				<li><a href="<?=site_url('/nosotros')?>"><span>Nosotros</span></a></li>
				<li><a href="<?=site_url('/producto')?>">Productos</a></li>
				<li class="reverse"><a href="#">Eventos</a></li>
				<li><a href="<?=site_url('/contactenos')?>"><span>Contactenos</span></a></li>
			</ul>

			<ul class="mobile-menu">
				<li><a href="<?=site_url()?>">Inicio</a>
				</li>
				<li><a href="<?=site_url('/nosotros')?>">Nosotros</a>
				</li>
				<li><a href="<?=site_url('/producto')?>">Productos</a>
				</li>
				<li><a href="#">Eventos</a>
				</li>
				<li class="reverse"><a href="<?=site_url('/contactenos')?>">Contactenos</a>
				</li>
			</ul>
		</div>
		<!-- End .container-fluid -->
	</nav>
</header>
<!-- End .header -->
