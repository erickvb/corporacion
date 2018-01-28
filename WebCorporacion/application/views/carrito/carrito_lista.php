 <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">

                            <div class="table-responsive">
                                <table class="table table-bordered cart-table">
                                    <thead>
                                        <tr>
                                            <th class="product-col"> Nombre de producto</th>
                                            <th class="code-col">Codigo</th>
                                            <th class="price-col">Precio unitario</th>
                                            <th class="quantity-col">Cantidad</th>
                                            <th class="subtotal-col">Subtotal</th>
                                            <th class="delete-col"><i class="icon delete-btn"></i></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    
                                    <?php foreach ($lista_cart as $items){?>
                                        <tr>
                                            <td class="product-col">
                                                <div class="product">
                                                    <div class="product-top">
                                                    
                                                    <!--     <span class="product-label discount">-25%</span> -->
                                                        <figure>
                                                            <a href="#">
                                                                <img src="<?=$items['options']['imagen']?>" alt="Product Image">
                                                            </a>
                                                        </figure>
                                                    </div><!-- End .product-top -->

                                                    <div class="product-content-wrapper">
                                                        <h3 class="product-title">
                                                            <a href="#"><?=$items['name']?></a>
                                                        </h3>
<!--                                                         <ul> -->
<!--                                                             <li><span>Color:</span> Black</li> -->
<!--                                                             <li><span>Size:</span> XS</li> -->
<!--                                                         </ul> -->
                                                    </div><!-- End .product-content-wrapper -->
                                                </div><!-- End .product -->
                                            </td>
                                            <td class="code-col"><?=$items['id']?></td>
                                            <td class="price-col">
                                                <div class="product-price-container">
                                                    <!--  <span class="product-old-price">$1500.00</span>-->
                                                    <span class="product-price">S/ <?=$this->cart->format_number($items['price']); ?></span>
                                                </div><!-- End .product-price-container -->
                                            </td>
                                            <td class="quantity-col">
                                                <input type="text" class="form-control text-cantidad-cart" value="<?=$items['qty']?>" id-item="<?=$items['id']?>"/>
                                            </td>
                                            <td class="subtotal-col">S/ <?=$this->cart->format_number($items['subtotal']); ?></td>
                                            <td class="delete-col"><a href="<?=site_url('/carrito/eliminar/'.$items['rowid'])?>" class="icon delete-btn lighter"></a></td>
                                        </tr>

                                   <?php }?>

                                        
                                    </tbody>
                                </table>
                            </div><!-- End .table-responsive -->
						<?php if(!empty($lista_cart)){?>
                            <div class="row">
                                <div class="col-xs-12 col-lg-8">
                                    

                                    <a href="<?=site_url('/producto')?>" class="btn btn-custom min-width">Continar comprando</a>
                                </div><!-- End .col-lg-8-->

                                <div class="mb50 clearfix hidden-lg"></div><!-- margin -->

                                <div class="col-xs-12 col-lg-4">
                                    <div class="table-responsive mb30">
                                        <table class="table table-bordered total-table">
                                            <tbody>
                                                <tr>
                                                    <td>SUBTOTAL:</td>
                                                    <td>S/<?=$this->cart->format_number($this->cart->total())?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Total</td>
                                                    <td>S/<?=$this->cart->format_number($this->cart->total())?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-right">
                                        <a href="<?=site_url('/carrito/checkout')?>" class="btn btn-custom min-width">Checkout</a>
                                    </div>
                                </div><!-- End .col-lg-4 -->
                            </div><!-- End .row -->
                            
                            <? } ?>

                            <div class="mb130 mb100-sm mb80-xs"></div><!-- mrgin -->

                            <div class="carousel-overflow-container row">
                                <div class="col-xs-12">
                                    <div class="swiper-container product-small-carousel">

                                        <div class="carousel-header">
                                            <h2 class="carousel-title text-center">RELATED PRODUCTS</h2>
                                            <div class="swiper-nav-wrapper">
                                                <div class="swiper-button-prev icon"></div><!-- End .button-prev -->
                                                <div class="swiper-button-next icon"></div><!-- End .button-next -->
                                            </div><!-- End .swiper-nav-wrapper -->
                                        </div><!-- End .carousel-header -->

                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product product1">
                                                    <div class="product-top">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="assets/images/products/product17.jpg" alt="Product Image">
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
                                                        <a href="#">40-inch Class 1080p Smart Slim <br> LED HDTV with Wi-fi</a>
                                                    </h3>

                                                    <div class="product-price-container">
                                                        <span class="product-old-price">$800.00</span>
                                                        <span class="product-price">$650.00</span>
                                                    </div><!-- End .product-price-container -->

                                                    <div class="product-colors">
                                                        <span style="background-color: #fff;"></span>
                                                        <span style="background-color: #c5c6c8;"></span>
                                                        <span style="background-color: #454545;"></span>
                                                    </div><!-- End .product-colors -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                        <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                        <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product -->
                                            </div><!-- End .swiper-slide -->

                                            <div class="swiper-slide">
                                                <div class="product product1">
                                                    <span class="product-label discount">-25%</span>
                                                    <div class="product-top">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="assets/images/products/product12.jpg" alt="Product Image">
                                                            </a>
                                                        </figure>
                                                        <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                    </div><!-- End .product-top -->
                                                    <div class="product-meta">
                                                        <div class="product-brand">
                                                            <a href="#">HP PAVILION</a>
                                                        </div><!-- End .product-brand -->
                                                        <div class="ratings-container">
                                                            <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .product-meta -->

                                                    <h3 class="product-title">
                                                        <a href="#">Touchscreen LED (BrightView)<br>Notebook </a>
                                                    </h3>

                                                    <div class="product-price-container">
                                                        <span class="product-old-price">$900.00</span>
                                                        <span class="product-price">$787.00</span>
                                                    </div><!-- End .product-price-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                        <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                        <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product -->
                                            </div><!-- End .swiper-slide -->

                                            <div class="swiper-slide">
                                                <div class="product product1">
                                                    <div class="product-top">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="assets/images/products/product19.jpg" alt="Product Image">
                                                            </a>
                                                        </figure>
                                                        <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                    </div><!-- End .product-top -->
                                                    <div class="product-meta">
                                                        <div class="product-brand">
                                                            <a href="#">Dell Latitude</a>
                                                        </div><!-- End .product-brand -->
                                                        <div class="ratings-container">
                                                            <div class="ratings" style="width: 0%;"></div><!-- End .ratings -->
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .product-meta -->

                                                    <h3 class="product-title">
                                                        <a href="#">Windows 8, Intel Quad Core<br>tablet, IPS Screen</a>
                                                    </h3>

                                                    <div class="product-price-container">
                                                        <span class="product-price">$870.00</span>
                                                    </div><!-- End .product-price-container -->

                                                    <div class="product-colors">
                                                        <span style="background-color: #eaeaea;"></span>
                                                        <span style="background-color: #d5d5d4;"></span>
                                                        <span style="background-color: #454545;"></span>
                                                    </div><!-- End .product-colors -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                        <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                        <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product -->
                                            </div><!-- End .swiper-slide -->

                                            <div class="swiper-slide">
                                                <div class="product product1">
                                                    <span class="product-label">NEW</span>
                                                    <div class="product-top">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="assets/images/products/product20.jpg" alt="Product Image">
                                                            </a>
                                                        </figure>
                                                        <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                    </div><!-- End .product-top -->
                                                    <div class="product-meta">
                                                        <div class="product-brand">
                                                            <a href="#">Envizen</a>
                                                        </div><!-- End .product-brand -->
                                                        <div class="ratings-container">
                                                            <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .product-meta -->

                                                    <h3 class="product-title">
                                                        <a href="#">Red Digital Camera with Bonus<br>Accessory Kit</a>
                                                    </h3>

                                                    <div class="product-price-container">
                                                        <span class="product-price">$290.00</span>
                                                    </div><!-- End .product-price-container -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                        <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                        <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product -->
                                            </div><!-- End .swiper-slide -->

                                            <div class="swiper-slide">
                                                <div class="product product1">
                                                    <div class="product-top">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="assets/images/products/product15.jpg" alt="Product Image">
                                                            </a>
                                                        </figure>
                                                        <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                    </div><!-- End .product-top -->
                                                    <div class="product-meta">
                                                        <div class="product-brand">
                                                            <a href="#">Whynter</a>
                                                        </div><!-- End .product-brand -->
                                                        <div class="ratings-container">
                                                            <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .product-meta -->

                                                    <h3 class="product-title">
                                                        <a href="#">Cyber-shot DSC Megapixel Compact <br>Camera - Black</a>
                                                    </h3>

                                                    <div class="product-price-container">
                                                        <span class="product-old-price">$900.00</span>
                                                        <span class="product-price">$750.00</span>
                                                    </div><!-- End .product-price-container -->

                                                    <div class="product-colors">
                                                        <span style="background-color: #ddd5d2;"></span>
                                                        <span style="background-color: #b1afb0;"></span>
                                                    </div><!-- End .product-colors -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                        <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                        <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product -->
                                            </div><!-- End .swiper-slide -->

                                        </div><!-- End .swiper-wrapper -->
                                    </div><!-- End .swiper-container -->
                                </div><!-- End .col-xs-12 -->
                            </div><!-- End .carousel-overflow-container -->

                            <div class="mb80 mb60-sm mb50-xs"></div><!-- margin -->
                        </div><!-- End .col-md-9 -->

                        <aside class="col-md-3 sidebar">

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
                </div>