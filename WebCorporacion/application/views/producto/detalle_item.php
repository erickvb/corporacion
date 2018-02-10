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
                            <li><a href="<?=site_url('/producto/categoria/'.$data_categoria->m_product_category_id)?>"><?=$data_categoria->name?></a></li>
                            <li class="active"><?=$producto->name ?></li>
                        </ol>
                    </div><!-- End .container-fluid -->
                </div><!-- End .page-header -->

                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9">

                            <div class="product-single">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="product-gallery-container">
                                            <div class="product-zoom-wrapper">
                                                <!-- <span class="product-label discount">-25%</span>-->
                                                <div class="product-zoom-container">
                                                    <img id="product-zoom" src="<?=$producto->url_image?>" data-zoom-image="assets/images/products/single/big/product1.jpg" alt="Product image big">
                                                </div><!-- End .product-zoom-container -->
                                                <i class="btn-quickview zoom-icon icon"></i>
                                            </div><!-- End .product-zoom-wrapper -->

                                            <div class="swiper-container product-gallery-carousel vertical-center-nav">

                                                <!-- Add Navigation -->
                                                <div class="swiper-button-prev icon dark"></div><!-- End .button-prev -->
                                                <div class="swiper-button-next icon dark"></div><!-- End .button-next -->

                                                <div class="swiper-wrapper">

                                                    <div class="swiper-slide">
                                                        <a href="#" data-image="assets/images/products/single/product1.jpg" data-zoom-image="assets/images/products/single/big/product1.jpg" class="product-gallery-item">
                                                            <img src="assets/images/products/single/thumbs/product1.jpg" alt="product-small-1">
                                                        </a>
                                                    </div><!-- End .swiper-slide -->

                                                    <div class="swiper-slide">
                                                        <a href="#" data-image="assets/images/products/single/product2.jpg" data-zoom-image="assets/images/products/single/big/product2.jpg" class="product-gallery-item">
                                                            <img src="assets/images/products/single/thumbs/product2.jpg" alt="product-small-1">
                                                        </a>
                                                    </div><!-- End .swiper-slide -->

                                                    <div class="swiper-slide">
                                                        <a href="#" data-image="assets/images/products/single/product3.jpg" data-zoom-image="assets/images/products/single/big/product3.jpg" class="product-gallery-item">
                                                            <img src="assets/images/products/single/thumbs/product3.jpg" alt="product-small-1">
                                                        </a>
                                                    </div><!-- End .swiper-slide -->

                                                    <div class="swiper-slide">
                                                        <a href="#" data-image="assets/images/products/single/product4.jpg" data-zoom-image="assets/images/products/single/big/product4.jpg" class="product-gallery-item">
                                                            <img src="assets/images/products/single/thumbs/product4.jpg" alt="product-small-1">
                                                        </a>
                                                    </div><!-- End .swiper-slide -->

                                                    <div class="swiper-slide">
                                                        <a href="#" data-image="assets/images/products/single/product5.jpg" data-zoom-image="assets/images/products/single/big/product5.jpg" class="product-gallery-item">
                                                            <img src="assets/images/products/single/thumbs/product5.jpg" alt="product-small-1">
                                                        </a>
                                                    </div><!-- End .swiper-slide -->

                                                </div><!-- End .swiper-wrapper -->
                                            </div><!-- End .swiper-container -->

                                     
                                        </div><!-- End .product-gallery-container -->

                                    </div><!-- End .col-sm-7 -->

                                    <div class="col-sm-5">
                                        <div class="product-details">
                                            <div class="product-brand">
                                                <a href="#"> <?=$producto->marca_producto?></a>
                                            </div><!-- End .product-brand -->

                                            <h2 class="product-title">
                                                <?=$producto->name ?>
                                            </h2>

                                            <div class="product-ratings-wrapper">
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->

                                                <div class="product-ratings-desc">
                                                   <!--  12 review(s)<span class="sep">|</span><a href="#">Write a review</a> -->
                                                </div><!-- End .product-ratings-desc -->
                                            </div><!-- End .product-ratings-wrapper -->

                                            <ul class="product-meta-list">
                                                <li><span>Disponibilidad: </span> <span class="text-custom">In Stock</span></li>
                                                <li><span>Producto Codigo: </span> <?=$producto->m_product_id?></li>
                                            </ul>

                                            <ul class="product-details-list">
                                                <li><?=$producto->description?></li>
                                               
                                            </ul>

                                            <div class="product-details-box">
                                                <div class="product-price-container">
                                                    
                                                    <span class="product-old-price">S/ <?=$producto->mayor?></span>
                                                    <span class="product-price">S/ <?=$producto->menor?></span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action-wrapper">
                                                    <div class="product-quantity">
                                                        <input type="text" class="form-control" value="1" name="txtCantidad" id="txtCantidadCartPut" />
                                                    </div><!-- End .product-quantity -->
                                                    <div class="product-action">
                                                        <a href="javascript:;" class="btn-add-cart custom2" title="Add to Cart" id-item="<?=$producto->m_product_id?>"><i class="icon icon-cart"></i> <span>Agregar a Carrito</span></a>
                                                        
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-action-wrapper -->

                                               
                                            </div><!-- End .product-details-box -->
                                        </div><!-- End .product-details -->
                                    </div><!-- End .col-sm-5 -->
                                </div><!--End .row -->
                            </div><!-- End .product-single -->

                            <div class="mb40"></div><!-- margin -->
                            <div class="carousel-overflow-container row">
                                <div class="col-xs-12">
                                    <div class="swiper-container product-small-carousel">

                                        <div class="carousel-header">
                                            <h2 class="carousel-title text-center">PRODUCTOS RELACIONADOS</h2>
                                            <div class="swiper-nav-wrapper">
                                                <div class="swiper-button-prev icon"></div><!-- End .button-prev -->
                                                <div class="swiper-button-next icon"></div><!-- End .button-next -->
                                            </div><!-- End .swiper-nav-wrapper -->
                                        </div><!-- End .carousel-header -->

                                        <div class="swiper-wrapper">
                                        <?php foreach($productosXCategoria as $item){?>
                                            <div class="swiper-slide">
                                                <div class="product product1">
                                                    <div class="product-top">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="<?=$item->url_image?>" alt="<?=$item->name?>">
                                                            </a>
                                                        </figure>
                                                        <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                    </div><!-- End .product-top -->
                                                    <div class="product-meta">
                                                        <div class="product-brand">
                                                            <a href="#">Samsung</a>
                                                        </div><!-- End .product-brand -->
                                                        <div class="ratings-container">
                                                            <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .product-meta -->

                                                    <h3 class="product-title">
                                                        <a href="#"><?=$item->name?></a>
                                                    </h3>

                                                    <div class="product-price-container">
                                                        <span class="product-old-price"><?=$item->moneda." ".$item->mayor?></span>
                                                        <span class="product-price"><?=$item->moneda." ".$item->menor?></span>
                                                    </div><!-- End .product-price-container -->
                                                    <div class="product-action">
                                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Agregar a carrito</span></a>
                                                      

                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product -->
                                            </div><!-- End .swiper-slide -->
                                            <?php }?>
                                          
                                        </div><!-- End .swiper-wrapper -->
                                    </div><!-- End .swiper-container -->
                                </div><!-- End .col-xs-12 -->
                            </div><!-- End .carousel-overflow-container -->

                            <div class="mb50 mb30-sm mb20-xs"></div><!-- margin -->

                                                      
                        </div><!-- End .col-md-9 -->

                        <aside class="col-lg-3 sidebar">

                            <div class="widget">
                                <h3 class="widget-title">Bestsellers</h3>
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
        <script src="<?=base_url()?>public/assets/js/jquery.elevateZoom.min.js"></script>
       
         <script>
            (function($) {
                "use strict";

                // Product Gallery Carousel - product.html
                var productGalleryCarousel = new Swiper('.product-gallery-carousel', {
                    pagination: '',
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    slidesPerView: 4,
                    spaceBetween: 22,
                    breakpoints: {
                        1200: {
                            spaceBetween: 14
                        },
                        992: {
                            slidesPerView: 3,
                            spaceBetween: 14
                        },
                        580: {
                            slidesPerView: 3,
                            spaceBetween: 14
                        },
                        320: {
                            slidesPerView: 2,
                            spaceBetween: 14
                        }
                    }
                });

                if ($.fn.elevateZoom) {
                    $('#product-zoom').elevateZoom({
                        responsive: true, // simple solution for zoom plugin down here // it can cause bugs at resize
                        zoomType: 'inner', // you can use 'inner' or 'window' // change inner and go to product.html page and see zoom plugin differances
                        cursor: "crosshair",
                        borderSize: 1,
                        borderColour: '#e7e7e7',
                        lensSize : 180,
                        lensBorder: 4,
                        lensOpacity: 1,
                        lensColour: 'rgba(255, 255, 255, 0.18)'
                    });

                    /* swap images for zoom on click event */
                    $('.product-gallery-carousel').find('a').on('click', function (e) {
                        var ez = $('#product-zoom').data('elevateZoom'),
                            smallImg = $(this).data('image'),
                            bigImg = $(this).data('zoom-image');

                            ez.swaptheimage(smallImg, bigImg);
                        e.preventDefault();
                    });
                }
                
            })( jQuery)
        </script>

    </body>
</html>