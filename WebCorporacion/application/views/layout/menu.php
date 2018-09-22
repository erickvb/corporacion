<header class="header header4">
	<div class="header-top">
		<div class="container-fluid">
			<div class="header-top-text">Ahora Enviamos a Provincia</div>
			<!-- End .header-top-text -->
			<ul class="top-dropdowns">
				<li><a href="#"> <span>Registrese</span>
				</a></li>
				<li class="hidden-xs"><a href="#"> <span>Mi cuenta</span>
				</a></li>
				<li class="hidden-xs"><a href="#"> <span>Mis favoritos</span>
				</a></li>

				<li class="hidden-xs"><a href="<?=site_url('carrito/lista')?>"> <span>Mi carrito</span>
				</a></li>
			</ul>
			<!-- End .top-dropdowns -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .header-top -->

	<div class="header-inner">
		<div class="container-fluid">
			<div class="logo">
				<a href="<?=site_url()?>" title="Corporacion de repuestos"> <img
					src="<?=base_url()?>public/assets/images/logo-index5.png" alt="Sconto">
				</a>
			</div>
			<!-- End .logo -->

			<div class="dropdowns-container">
				<div class="header-boxes-container">
					<div class="header-box">
						<i class="icon icon-truck"></i>
						<div class="header-box-title">Envio de Paquete</div>
						<p>a todo distrito</p>
					</div>
					<!-- End .header-box -->

					<div class="header-box">
						<i class="icon icon-phone"></i>
						<div class="header-box-title text-custom">(01)242-4595</div>
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
							 <li><a href="javascript:;" class="dropdown-categoria" data-id-categoria="todos">Todos</a></li>
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
						
<!-- 
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
 -->
						<div class="dropdown header-dropdown cart-dropdown">
							<a href="#" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false"> <i class="icon icon-header icon-cart"></i>
								<span class="dcart-total-count"></span>
							</a>

							<div class="dropdown-menu" id="show-menu-cart">
								<p id="total-cart">
								
								</p>
								<div class="dcart-products" id="menu-resumen-carrito">
								</div>
								<!-- End .dcart-products -->

								<div class="dcart-action-container">
									<div class="dcart-action-info">
										
										<p>
											Total: <span class="text-custom" id="menu-total-cart"></span>
										</p>
									</div>
									<!-- End .dcart-action-info -->

									<div class="dcart-action">
										<a href="<?=site_url('carrito/lista')?>" class="btn btn-custom4 btn-sm">Ver carrito</a> 
										<a href="<?=site_url('/carrito/checkout')?>" class="btn btn-custom btn-sm">Checkout</a>
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



<script id="cart-resumen" type="text/x-handlebars-template">
<div class="product product-sm">
										<figure>
											<a href="#"> 
                                               <img 
												src="{{options.imagen}}"
												alt="Product">
											</a>
										</figure>
										<div class="product-meta">
											<h5 class="product-title">
												<a href="#">({{qty}}) {{name}}</a>
											</h5>
											<div class="product-price-container">
												<span class="product-price">S/{{subtotal}}</span>
											</div>
											<!-- End .product-price-container -->
										</div>
										<!-- End .product-meta -->
										<a href="javascript:;" class="icon delete-btn lighter"
											title="Quitar" id-item="{{rowid}}"><span class="sr-only">Quitar</span></a>
									</div>
</script>