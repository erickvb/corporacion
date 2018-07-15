<!DOCTYPE html>
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if !IE]><!--><html><!--<![endif]-->
    <head>
       <? $this->load->view("layout/header");?>

    </head>
    <body>
        <div id="wrapper">
             <? $this->load->view("layout/menu");?>
            <div class="main">
                <div class="page-header">
                    <div class="container-fluid">
                        <ol class="breadcrumb">
                            <li><a href="<?=site_url()?>">Inicio</a></li>
                            <?php if(!empty($data_categoria)){ ?>
                            <li><a href="<?=site_url('/producto/categoria/'.$data_categoria->m_product_category_id)?>"><?=$data_categoria->name?></a></li>
                            <li class="active"> <?php if(isset($key_busqueda) && !empty($key_busqueda)){
                            	echo $key_busqueda;
                            }else{
                            	echo "Listado";
                            	}?>
                            </li>
                            <?php }
                            else{
                            ?> <li class="active">Productos</li>
                            <?php 
                            }
                            ?>
                        </ol>
                    </div><!-- End .container-fluid -->
                </div><!-- End .page-header -->
                
               
				<div class="mb30"></div>
                 <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3 ">
                            <div class="top-filter-container clearfix">
                                <div class="filter-left clearfix">
<!--                                     <a href="#" class="btn btn-gray btn-border">Compare</a> -->
                                   <!--  <div class="page-sort-filter">
                                        <select class="custom-select form-control">
                                            <option>Sort By: Default</option>
                                            <option>Sort By: Size</option>
                                            <option>Sort By: Sales</option>
                                            <option>Sort By: Popularity</option>
                                        </select>
                                    </div>End .page-sort-filter -->

                                  <!--  <div class="layout-btns-container ">
                                        <a href="#" class="icon layout-btn btn-list"></a>
                                        <a href="#" class="icon layout-btn btn-grid active"></a>
                                    </div> End .layout-btns-container -->
                                    
                                </div><!-- End .filter-left -->
                                <nav class="filter-right pagination-container clearfix">
                                   <ul class="pagination">
                                     <?=$paginate_link?>
                                    </ul>
                                </nav>
                                
                            </div><!-- End .top-filter -->

                            <div class="row product-container-row">
                                <div class="products-container max-col-4" data-layoutmode="fitRows">
                                <?php  foreach ($data_productos as $producto){?>
                                    <div class="product-column">
                                        <div class="product product1">
                                           <!--  <span class="product-label discount">-25%</span> -->
                                            <div class="product-top">
                                                <figure>
                                                    <a href="<?=site_url('producto/detalle/'.$producto->m_product_id.'')?>">
                                                        <img src="<?=$producto->url_image?>" alt="<?=$producto->name?>">
                                                    </a>
                                                </figure>
                                                <a href="<?=site_url('producto/detalle/'.$producto->m_product_id.'')?>" class="btn-quickview icon" title="View"><span class="sr-only">Ver</span></a>
                                            </div><!-- End .product-top -->
                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#"><?=$producto->marca_producto?></a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 0%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#"><?=$producto->name?></a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-old-price"><?=$producto->moneda." ".$producto->mayor?></span>
                                                <span class="product-price"><?=$producto->moneda." ".$producto->menor?></span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="javascript:;" class="btn-add-cart" title="Agregar a carrito" id-item="<?=$producto->m_product_id?>"><i class="icon icon-cart"></i> <span>Agregar a carrito</span></a>
                                               
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-col -->
<?php }?>
                                    
                                </div><!-- End .products-container -->
                            </div><!-- End .product-container-row -->

                            <nav class="pagination-container">
                              <!--   <label>Showing: 1-4 of 16</label> -->
                                <ul class="pagination">
                                     <?=$paginate_link?>
                                </ul>
                                
                            </nav>
                        </div><!-- End .col-md-9 -->

                        <aside class="col-md-3 col-md-pull-9 sidebar">
                            <?php $this->load->view("template/lista_categoria"); ?>
                            <div class="widget">
                                <h3 class="widget-title">Nuestras marcas</h3>
                                <div class="swiper-container bestsellers-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product product-sm">
                                                <figure>
                                                    <a href="#">
                                                        <img src="assets/images/products/thumbs/product1.jpg" alt="Product">
                                                    </a>
                                                    <span class="product-label discount">-25%</span>
                                                </figure>
                                                <div class="product-meta">
                                                    <h5 class="product-title">
                                                        <a href="#">Navy blue silk pleated dress</a>
                                                    </h5>
                                                    <div class="product-price-container">
                                                        <span class="product-price">$250.00</span>
                                                        <span class="product-old-price">$350.00</span>
                                                    </div><!-- End .product-price-container -->
                                                </div><!-- End .product-meta -->
                                            </div><!-- End .product -->
                                            <div class="product product-sm">
                                                <figure>
                                                    <a href="#">
                                                        <img src="assets/images/products/thumbs/product2.jpg" alt="Product">
                                                    </a>
                                                </figure>
                                                <div class="product-meta">
                                                    <h5 class="product-title">
                                                        <a href="#">Mustard yellow ruffle dress</a>
                                                    </h5>
                                                    <div class="product-price-container">
                                                        <span class="product-price">$214.00</span>
                                                    </div><!-- End .product-price-container -->
                                                </div><!-- End .product-meta -->
                                            </div><!-- End .product -->
                                            <div class="product product-sm">
                                                <figure>
                                                    <a href="#">
                                                        <img src="assets/images/products/thumbs/product3.jpg" alt="Product">
                                                    </a>
                                                </figure>
                                                <div class="product-meta">
                                                    <h5 class="product-title">
                                                        <a href="#">Asymmetric crew neck sweater</a>
                                                    </h5>
                                                    <div class="product-price-container">
                                                        <span class="product-price">$1450.00</span>
                                                    </div><!-- End .product-price-container -->
                                                </div><!-- End .product-meta -->
                                            </div><!-- End .product -->
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="product product-sm">
                                                <figure>
                                                    <a href="#">
                                                        <img src="assets/images/products/thumbs/product4.jpg" alt="Product">
                                                    </a>
                                                </figure>
                                                <div class="product-meta">
                                                    <h5 class="product-title">
                                                        <a href="#">Mustard yellow ruffle dress</a>
                                                    </h5>
                                                    <div class="product-price-container">
                                                        <span class="product-price">$180.00</span>
                                                    </div><!-- End .product-price-container -->
                                                </div><!-- End .product-meta -->
                                            </div><!-- End .product -->
                                            <div class="product product-sm">
                                                <figure>
                                                    <a href="#">
                                                        <img src="assets/images/products/thumbs/product5.jpg" alt="Product">
                                                    </a>
                                                    <span class="product-label new">NEW</span>
                                                </figure>
                                                <div class="product-meta">
                                                    <h5 class="product-title">
                                                        <a href="#">Asymmetric crew neck sweater</a>
                                                    </h5>
                                                    <div class="product-price-container">
                                                        <span class="product-price">$160</span>
                                                        <span class="product-old-price">$280.00</span>
                                                    </div><!-- End .product-price-container -->
                                                </div><!-- End .product-meta -->
                                            </div><!-- End .product -->
                                            <div class="product product-sm">
                                                <figure>
                                                    <a href="#">
                                                        <img src="assets/images/products/thumbs/product6.jpg" alt="Product">
                                                    </a>
                                                </figure>
                                                <div class="product-meta">
                                                    <h5 class="product-title">
                                                        <a href="#">Navy blue silk pleated dress</a>
                                                    </h5>
                                                    <div class="product-price-container">
                                                        <span class="product-price">$21.00</span>
                                                        <span class="product-old-price">$300.00</span>
                                                    </div><!-- End .product-price-container -->
                                                </div><!-- End .product-meta -->
                                            </div><!-- End .product -->
                                        </div><!-- End .swiper-slide -->
                                    </div><!-- End .swiper-wrapper -->

                                    <div class="swiper-button-next icon"></div>
                                    <div class="swiper-button-prev icon"></div>
                                </div><!-- end .swiper-container -->
                            </div><!-- End .widget -->
                        </aside>
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .main -->
		<? $this->load->view("layout/footer");?>
		</div><!-- End #wrapper -->

        <!-- End -->
      
        <script>
      
            (function($) {
                "use strict";
                
                $(function() {
                    // Index5 Slider with background check
                    new Swiper('.banners-slider', {
                        pagination: '.swiper-pagination',
                        paginationClickable: true,
                        nextButton: '.swiper-button-next',
                        prevButton: '.swiper-button-prev',
                        spaceBetween: 0,
                        speed: 600,
                        loop: true,
                        preventClicks: false,
                        onSlideChangeEnd: function () {
                            BackgroundCheck.refresh();
                        }
                    });

                    BackgroundCheck.init({
                        targets: '.swiper-pagination, .banner-contentbg',
                        images: '.banner-bg'
                    });

                });
            })(jQuery);
        </script>
    </body>
</html>
