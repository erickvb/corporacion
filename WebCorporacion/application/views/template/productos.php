<div class="products-tab-container smaller" role="tabpanel">

<!-- 
                                <ul class="nav nav-icons nav-justified text-center text-uppercase" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab-cat-1" aria-controls="tab-cat-1" role="tab" data-toggle="tab" title="Category Name">
                                            <i class="icon tab-icon icon-camera"></i>
                                            <span class="sr-only">Category Name</span>
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-cat-2" aria-controls="tab-cat-2" role="tab" data-toggle="tab" title="Category Name">
                                            <i class="icon tab-icon icon-monitor"></i>
                                            <span class="sr-only">Category Name</span>
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-cat-3" aria-controls="tab-cat-3" role="tab" data-toggle="tab" title="Category Name">
                                            <i class="icon tab-icon icon-phone"></i>
                                            <span class="sr-only">Category Name</span>
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-cat-4" aria-controls="tab-cat-4" role="tab" data-toggle="tab" title="Category Name">
                                            <i class="icon tab-icon icon-headphone"></i>
                                            <span class="sr-only">Category Name</span>
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-cat-5" aria-controls="tab-cat-5" role="tab" data-toggle="tab" title="Category Name">
                                            <i class="icon tab-icon icon-speaker"></i>
                                            <span class="sr-only">Category Name</span>
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-cat-6" aria-controls="tab-cat-6" role="tab" data-toggle="tab" title="Category Name">
                                            <i class="icon tab-icon icon-owen"></i>
                                            <span class="sr-only">Category Name</span>
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-cat-7" aria-controls="tab-cat-7" role="tab" data-toggle="tab" title="Category Name">
                                            <i class="icon tab-icon icon-forma"></i>
                                            <span class="sr-only">Category Name</span>
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-cat-8" aria-controls="tab-cat-8" role="tab" data-toggle="tab" title="Category Name">
                                            <i class="icon tab-icon icon-projector"></i>
                                            <span class="sr-only">Category Name</span>
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-cat-9" aria-controls="tab-cat-9" role="tab" data-toggle="tab" title="Category Name">
                                            <i class="icon tab-icon icon-fridge"></i>
                                            <span class="sr-only">Category Name</span>
                                        </a>
                                    </li>
                                </ul>
 -->
                                <!-- Tab Panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="tab-cat-1">
                                        <div class="row product-container-row">
                                            <div class="products-container max-col-4" data-layoutmode="fitRows">
                                          <?php   foreach($data_productos as $producto) {
                                            ?>
                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="<?=site_url('producto/detalle/'.$producto->m_product_id.'')?>">
                                                                    <img src="<?=$producto->url_image;?>" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="<?=site_url('producto/detalle/'.$producto->m_product_id.'')?>" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#"><?=$producto->marca_producto?></a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#"><?=$producto->name;?></a>
                                                              
                                                        </h3>
                                                         
                                                        

                                                        <div class="product-price-container">
                                                          
                                                         	<span class="product-old-price"><?=$producto->moneda." ".$producto->mayor?></span>
                                                            <span class="product-price"><?=$producto->moneda." ".$producto->menor?></span>
                                                            
                                                        	</div><!-- End .product-price-container -->
                                                          
                                                       <!-- <div class="product-colors">
                                                           
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #949494;"></span>
                                                            <span style="background-color: #548ec4;"></span>
                                                        </div>  product-colors -->
														<div class="description-detail-codes">
                                                          <span> sku: <?=$producto->sku?></span>
                                                           <span> codigo: <?=$producto->value?></span>
                                                        </div>	
                                                        <div class="product-action">
                                                            <a href="javascript:;" class="btn-add-cart" title="Agregar a carrito"  id-item="<?=$producto->m_product_id?>"><i class="icon icon-cart"></i> <span>Agregar a carrito</span></a>
                                            

                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

<?php }?>

                                            </div><!-- End .product-container-->
                                        </div><!-- End .row -->
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-cat-2">
                                        <div class="row product-container-row">
                                            <div class="products-container max-col-4" data-layoutmode="fitRows">
                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product4.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Bass Effect Audio  Portable Wireless Bluetooth Speaker</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$1050.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #949494;"></span>
                                                            <span style="background-color: #548ec4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product3.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$900.00</span>
                                                            <span class="product-price">$750.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #d8b67a;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product1.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Huawei</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">MediaPad White Unlocked GSM Tablet</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$820.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product2.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">MediaPad</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$600.00</span>
                                                            <span class="product-price">$450.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #515b78;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product8.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Cyber Power</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HP Business Desktop Pro Desktop Computer Intel Pentium </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$457.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product6.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">AlienWare</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HDell OptiPlex Win 7 Mini Tower Computer</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$540.00</span>
                                                            <span class="product-price">$380.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #02a7d2;"></span>
                                                            <span style="background-color: #e96ea4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product5.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 40%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Apple iPhone 5 Unlocked GSM Smartphone </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$435.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #947ab1;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product7.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Lenovo</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">ThinkCentre Core 2 Duo Win 7 Professional Computer </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$400.00</span>
                                                            <span class="product-price">$360.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #f89278;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                            </div><!-- End .product-container-->
                                        </div><!-- End .row -->
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-cat-3">
                                        <div class="row product-container-row">
                                            <div class="products-container max-col-4" data-layoutmode="fitRows">
                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product5.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Bass Effect Audio  Portable Wireless Bluetooth Speaker</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$1050.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #949494;"></span>
                                                            <span style="background-color: #548ec4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product2.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$900.00</span>
                                                            <span class="product-price">$750.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #d8b67a;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label outofstock">out of<br>stock</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product3.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Huawei</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">MediaPad White Unlocked GSM Tablet</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$820.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-wishlist" title="Add to Cart"><i class="icon icon-wishlist"></i> <span>Add To Wishlist</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product1.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">MediaPad</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$600.00</span>
                                                            <span class="product-price">$450.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #515b78;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label discount">-25%</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product6.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Cyber Power</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HP Business Desktop Pro Desktop Computer Intel Pentium </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$457.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product7.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">AlienWare</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HDell OptiPlex Win 7 Mini Tower Computer</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$540.00</span>
                                                            <span class="product-price">$380.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #02a7d2;"></span>
                                                            <span style="background-color: #e96ea4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product8.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 40%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Apple iPhone 5 Unlocked GSM Smartphone </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$435.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #947ab1;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product6.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Lenovo</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">ThinkCentre Core 2 Duo Win 7 Professional Computer </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$400.00</span>
                                                            <span class="product-price">$360.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #f89278;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                            </div><!-- End .product-container-->
                                        </div><!-- End .row -->
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-cat-4">
                                        <div class="row product-container-row">
                                            <div class="products-container max-col-4" data-layoutmode="fitRows">
                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product8.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Bass Effect Audio  Portable Wireless Bluetooth Speaker</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$1050.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #949494;"></span>
                                                            <span style="background-color: #548ec4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product7.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$900.00</span>
                                                            <span class="product-price">$750.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #d8b67a;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product4.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Huawei</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">MediaPad White Unlocked GSM Tablet</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$820.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product5.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">MediaPad</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$600.00</span>
                                                            <span class="product-price">$450.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #515b78;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label discount">-25%</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product2.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Cyber Power</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HP Business Desktop Pro Desktop Computer Intel Pentium </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$457.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product1.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">AlienWare</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HDell OptiPlex Win 7 Mini Tower Computer</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$540.00</span>
                                                            <span class="product-price">$380.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #02a7d2;"></span>
                                                            <span style="background-color: #e96ea4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product3.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 40%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Apple iPhone 5 Unlocked GSM Smartphone </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$435.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #947ab1;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product4.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Lenovo</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">ThinkCentre Core 2 Duo Win 7 Professional Computer </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$400.00</span>
                                                            <span class="product-price">$360.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #f89278;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                            </div><!-- End .product-container-->
                                        </div><!-- End .row -->
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-cat-5">
                                        <div class="row product-container-row">
                                            <div class="products-container max-col-4" data-layoutmode="fitRows">
                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product6.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Bass Effect Audio  Portable Wireless Bluetooth Speaker</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$1050.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #949494;"></span>
                                                            <span style="background-color: #548ec4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product5.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$900.00</span>
                                                            <span class="product-price">$750.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #d8b67a;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label outofstock">out of<br>stock</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product4.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Huawei</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">MediaPad White Unlocked GSM Tablet</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$820.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-wishlist" title="Add to Cart"><i class="icon icon-wishlist"></i> <span>Add To Wishlist</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product3.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">MediaPad</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$600.00</span>
                                                            <span class="product-price">$450.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #515b78;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label discount">-25%</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product7.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Cyber Power</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HP Business Desktop Pro Desktop Computer Intel Pentium </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$457.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product5.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">AlienWare</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HDell OptiPlex Win 7 Mini Tower Computer</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$540.00</span>
                                                            <span class="product-price">$380.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #02a7d2;"></span>
                                                            <span style="background-color: #e96ea4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product6.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 40%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Apple iPhone 5 Unlocked GSM Smartphone </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$435.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #947ab1;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product8.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Lenovo</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">ThinkCentre Core 2 Duo Win 7 Professional Computer </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$400.00</span>
                                                            <span class="product-price">$360.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #f89278;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                            </div><!-- End .product-container-->
                                        </div><!-- End .row -->
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-cat-6">
                                        <div class="row product-container-row">
                                            <div class="products-container max-col-4" data-layoutmode="fitRows">
                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product3.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Bass Effect Audio  Portable Wireless Bluetooth Speaker</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$1050.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #949494;"></span>
                                                            <span style="background-color: #548ec4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label discount">-10%</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product4.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$900.00</span>
                                                            <span class="product-price">$750.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #d8b67a;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product8.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Huawei</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">MediaPad White Unlocked GSM Tablet</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$820.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product7.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">MediaPad</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$600.00</span>
                                                            <span class="product-price">$450.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #515b78;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label discount">-25%</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product2.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Cyber Power</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HP Business Desktop Pro Desktop Computer Intel Pentium </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$457.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product1.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">AlienWare</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HDell OptiPlex Win 7 Mini Tower Computer</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$540.00</span>
                                                            <span class="product-price">$380.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #02a7d2;"></span>
                                                            <span style="background-color: #e96ea4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product6.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 40%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Apple iPhone 5 Unlocked GSM Smartphone </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$435.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #947ab1;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product5.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Lenovo</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">ThinkCentre Core 2 Duo Win 7 Professional Computer </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$400.00</span>
                                                            <span class="product-price">$360.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #f89278;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                            </div><!-- End .product-container-->
                                        </div><!-- End .row -->
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-cat-7">
                                        <div class="row product-container-row">
                                            <div class="products-container max-col-4" data-layoutmode="fitRows">
                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product4.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Bass Effect Audio  Portable Wireless Bluetooth Speaker</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$1050.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #949494;"></span>
                                                            <span style="background-color: #548ec4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product1.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$900.00</span>
                                                            <span class="product-price">$750.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #d8b67a;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label outofstock">out of<br>stock</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product5.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Huawei</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">MediaPad White Unlocked GSM Tablet</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$820.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-wishlist" title="Add to Cart"><i class="icon icon-wishlist"></i> <span>Add To Wishlist</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product3.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">MediaPad</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$600.00</span>
                                                            <span class="product-price">$450.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #515b78;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label discount">-25%</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product8.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Cyber Power</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HP Business Desktop Pro Desktop Computer Intel Pentium </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$457.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product7.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">AlienWare</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HDell OptiPlex Win 7 Mini Tower Computer</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$540.00</span>
                                                            <span class="product-price">$380.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #02a7d2;"></span>
                                                            <span style="background-color: #e96ea4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product6.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 40%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Apple iPhone 5 Unlocked GSM Smartphone </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$435.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #947ab1;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product2.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Lenovo</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">ThinkCentre Core 2 Duo Win 7 Professional Computer </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$400.00</span>
                                                            <span class="product-price">$360.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #f89278;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                            </div><!-- End .product-container-->
                                        </div><!-- End .row -->
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-cat-8">
                                        <div class="row product-container-row">
                                            <div class="products-container max-col-4" data-layoutmode="fitRows">
                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product8.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Bass Effect Audio  Portable Wireless Bluetooth Speaker</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$1050.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #949494;"></span>
                                                            <span style="background-color: #548ec4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product6.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$900.00</span>
                                                            <span class="product-price">$750.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #d8b67a;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product7.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Huawei</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">MediaPad White Unlocked GSM Tablet</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$820.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-wishlist" title="Add to Cart"><i class="icon icon-wishlist"></i> <span>Add To Wishlist</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product2.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">MediaPad</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$600.00</span>
                                                            <span class="product-price">$450.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #515b78;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label discount">-25%</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product4.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Cyber Power</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HP Business Desktop Pro Desktop Computer Intel Pentium </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$457.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product3.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">AlienWare</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HDell OptiPlex Win 7 Mini Tower Computer</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$540.00</span>
                                                            <span class="product-price">$380.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #02a7d2;"></span>
                                                            <span style="background-color: #e96ea4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product1.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 40%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Apple iPhone 5 Unlocked GSM Smartphone </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$435.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #947ab1;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product2.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Lenovo</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">ThinkCentre Core 2 Duo Win 7 Professional Computer </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$400.00</span>
                                                            <span class="product-price">$360.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #f89278;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                            </div><!-- End .product-container-->
                                        </div><!-- End .row -->
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-cat-9">
                                        <div class="row product-container-row">
                                            <div class="products-container max-col-4" data-layoutmode="fitRows">
                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product5.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Bass Effect Audio  Portable Wireless Bluetooth Speaker</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$1050.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #949494;"></span>
                                                            <span style="background-color: #548ec4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product3.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$900.00</span>
                                                            <span class="product-price">$750.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #d8b67a;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product1.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Huawei</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">MediaPad White Unlocked GSM Tablet</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$820.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product7.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">MediaPad</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Encore 32 GB Net-tablet PC Clear SuperView</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$600.00</span>
                                                            <span class="product-price">$450.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #515b78;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label discount">-25%</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product2.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Cyber Power</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HP Business Desktop Pro Desktop Computer Intel Pentium </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$457.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product4.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">AlienWare</a>
                                                            </div><!-- End .product-brand -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">HDell OptiPlex Win 7 Mini Tower Computer</a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-old-price">$540.00</span>
                                                            <span class="product-price">$380.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fff;"></span>
                                                            <span style="background-color: #02a7d2;"></span>
                                                            <span style="background-color: #e96ea4;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product6.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Toshiba</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 40%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">Apple iPhone 5 Unlocked GSM Smartphone </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$435.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #fafafa;"></span>
                                                            <span style="background-color: #947ab1;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                                <div class="product-column">
                                                    <div class="product product5">
                                                        <span class="product-label">new</span>
                                                        <div class="product-top">
                                                            <figure>
                                                                <a href="#">
                                                                    <img src="assets/images/products/index5/product8.jpg" alt="Product Image">
                                                                </a>
                                                            </figure>
                                                            <a href="#" class="btn-quickview icon" title="View"><span class="sr-only">View</span></a>
                                                        </div><!-- End .product-top -->
                                                        <div class="product-meta">
                                                            <div class="product-brand">
                                                                <a href="#">Lenovo</a>
                                                            </div><!-- End .product-brand -->
                                                            <div class="ratings-container">
                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .product-meta -->

                                                        <h3 class="product-title">
                                                            <a href="#">ThinkCentre Core 2 Duo Win 7 Professional Computer </a>
                                                        </h3>

                                                        <div class="product-price-container">
                                                            <span class="product-price">$400.00</span>
                                                            <span class="product-price">$360.00</span>
                                                        </div><!-- End .product-price-container -->

                                                        <div class="product-colors">
                                                            <span style="background-color: #dfe0e2;"></span>
                                                            <span style="background-color: #525257;"></span>
                                                            <span style="background-color: #f89278;"></span>
                                                        </div><!-- End .product-colors -->

                                                        <div class="product-action">
                                                            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
                                                            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                        </div><!-- End .product-action -->
                                                    </div><!-- End .product -->
                                                </div><!-- End .product-column -->

                                            </div><!-- End .product-container-->
                                        </div><!-- End .row -->
                                    </div><!-- End .tab-pane -->

                                </div><!-- End .tab-content -->
                            </div><!-- End role="tabpanel" -->