<aside class="col-md-3 col-md-pull-9 sidebar v2">
	<div class="sidebar-wrapper">
		
		 <?php $this->load->view("template/lista_categoria"); ?>

		<div class="widget product-count-widget">
			<h3 class="widget-title">MAS VENDIDOS</h3>
			<div class="swiper-container bestsellers-slider">
				<div class="swiper-wrapper">
				
					<div class="swiper-slide">
				     <?php $conter = 0;
				     foreach($data_mas_vendidos as $producto)  {
				         $conter++;
				         ?>
				    
						<div class="product product-sm">
							<span class="product-count-number"><?=$conter?></span>
							<figure>
								<a href="<?=site_url('producto/detalle/'.$producto->m_product_id.'')?>"> <img
									src="<?=$producto->url_image?>" alt="">
								</a>
							</figure>
							<div class="product-meta">
								<h5 class="product-title">
									<a href="<?=site_url('producto/detalle/'.$producto->m_product_id.'')?>"><?=$producto->name?></a>
								</h5>
								<div class="product-price-container">
									<span class="product-old-price"><?=$producto->moneda." ".$producto->mayor?></span> 
									<span class="product-price"><?=$producto->moneda." ".$producto->menor?></span>
								</div>
								<!-- End .product-price-container -->

							</div>
							<!-- End .product-meta -->
						</div>
						
						
						<?php 
						
						if($conter%4==0){
				           echo '</div><div class="swiper-slide">';
				       }
				     }?>
					</div>
					<!-- End .swiper-slide -->
				</div>
				<!-- End .swiper-wrapper -->

				<div class="swiper-button-next icon"></div>
				<div class="swiper-button-prev icon"></div>
			</div>
			<!-- end .swiper-container -->
		</div>
		<!-- End .widget -->

		
		
		<div class="widget">
			<div class="widget-body">
				<div id="banner-widget-slider" class="carousel slide"
					data-ride="carousel" data-interval="10000">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#banner-widget-slider" data-slide-to="0"
							class="active"></li>
						<li data-target="#banner-widget-slider" data-slide-to="1"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="<?=base_url()?>public/assets/images/banners/index5/banner6.jpg"
								alt="Banner 1">
						</div>
						<!-- End .item -->

						<div class="item">
							<img src="<?=base_url()?>public/assets/images/banners/index5/banner7.jpg"
								alt="Banner 2">
						</div>
						<!-- End .item -->
					</div>
					<!-- End .carousel-inner -->
				</div>
				<!-- End .carousel -->
			</div>
			<!-- End .widget-body -->
		</div>
		<!-- End .widget -->

		<div class="widget">
			<div class="widget-body">
				<div class="banner">
					<a href="#"> <img src="<?=base_url()?>public/assets/images/banners/index5/banner8.jpg"
						alt="Banner">
					</a>
				</div>
			</div>
			<!-- End .widget-body -->
		</div>
		<!-- End .widget -->
	</div>
	<!-- End .sidebar-wrapper -->
                        </aside>