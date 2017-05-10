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
                                                <span class="product-label discount">-25%</span>
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

                                            <div class="social-icons colored animated">
                                                <a href="#" class="social-icon icon share" title="Share"><span class="sr-only">Share</span></a>
                                                <a href="#" class="social-icon icon facebook" title="Facebook"><span class="sr-only">Facebook</span></a>
                                                <a href="#" class="social-icon icon twitter" title="Twitter"><span class="sr-only">Twitter</span></a>
                                                <a href="#" class="social-icon icon pinterest" title="Pinterest"><span class="sr-only">Pinterest</span></a>
                                                <a href="mailto:#" class="social-icon icon email" title="Email"><span class="sr-only">Email</span></a>
                                                <a href="#" class="social-icon icon googleplus" title="Google plus"><span class="sr-only">Google plus</span></a>
                                            </div><!-- End .social-icons -->
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
                                                    12 review(s)<span class="sep">|</span><a href="#">Write a review</a>
                                                </div><!-- End .product-ratings-desc -->
                                            </div><!-- End .product-ratings-wrapper -->

                                            <ul class="product-meta-list">
                                                <li><span>Availability: </span> <span class="text-custom">In Stock</span></li>
                                                <li><span>Product Code: </span> 483 512 569</li>
                                            </ul>

                                            <ul class="product-details-list">
                                                <li><?=$producto->description?></li>
                                                <li>Clear talk mic with Siri activation for hands-free talk</li>
                                                <li>Up to 10-hours battery life with Lithium-Ion battery</li>
                                                <li>Three large drivers (two 40mm stereo speakers and one 40mm sub) for superior sound</li>
                                            </ul>

                                            <div class="filter-size-container">
                                                <label>select Size</label>
                                                <div class="row">
                                                    <a href="#" class="filter-size-box">6</a>
                                                    <a href="#" class="filter-size-box">8</a>
                                                    <a href="#" class="filter-size-box">10</a>
                                                    <a href="#" class="filter-size-box">12</a>
                                                    <a href="#" class="filter-size-box">14</a>
                                                </div><!-- End .row -->
                                            </div><!-- End .filter-size-container -->

                                            <div class="filter-color-container">
                                                <label>select Color</label>
                                                <div class="row">
                                                    <a href="#" class="filter-color-box" style="background-color: #f1efef;"></a>
                                                    <a href="#" class="filter-color-box" style="background-color: #dbdbdb;"></a>
                                                    <a href="#" class="filter-color-box" style="background-color: #d7c5b0;"></a>
                                                    <a href="#" class="filter-color-box" style="background-color: #c1ccd1;"></a>
                                                </div><!-- End .row -->
                                            </div><!-- End .filter-color-container -->

                                            <div class="product-details-box">
                                                <div class="product-price-container">
                                                    <label>You Pay:</label>
                                                    <span class="product-old-price"><?=$producto->moneda." ".$producto->mayor?></span>
                                                    <span class="product-price"><?=$producto->moneda." ".$producto->menor?></span>
                                                </div><!-- End .product-price-container -->

                                                <div class="product-action-wrapper">
                                                    <div class="product-quantity">
                                                        <input type="text" class="form-control" value="1">
                                                    </div><!-- End .product-quantity -->
                                                    <div class="product-action">
                                                        <a href="#" class="btn-add-cart custom2" title="Add to Cart"><i class="icon icon-cart"></i> <span>Agregar a Carrito</span></a>
                                                        <a href="#" class="icon btn-product-wishlist" title="Wishlist"><span class="sr-only">Wishlist</span></a>
                                                        <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-action-wrapper -->

                                                <div class="product-countdown countdown-sep"></div><!-- End .product-countdown -->
                                            </div><!-- End .product-details-box -->
                                        </div><!-- End .product-details -->
                                    </div><!-- End .col-sm-5 -->
                                </div><!--End .row -->
                            </div><!-- End .product-single -->

                            <div class="mb40"></div><!-- margin -->

                            <div class="tab-carousel-container" role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified text-uppercase" role="tablist">
                                    <li role="presentation">
                                        <a href="#tab-description" aria-controls="tab-description" role="tab" data-toggle="tab">
                                            Description
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-details" aria-controls="tab-details" role="tab" data-toggle="tab">
                                            Details
                                        </a>
                                    </li>

                                    <li role="presentation" class="active">
                                        <a href="#tab-comments" aria-controls="tab-comments" role="tab" data-toggle="tab">
                                            Comments
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-access" aria-controls="tab-access" role="tab" data-toggle="tab">
                                            ACCESSORIES
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-video" aria-controls="tab-video" role="tab" data-toggle="tab">
                                            Video
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab-custom" aria-controls="tab-custom" role="tab" data-toggle="tab">
                                            Custom Tab
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab Panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane" id="tab-description">
                                        <div class="product-description-section">
                                            <p>Nam at condimentum diam, vitae suscipit leo. Aliquam vel erat a turpis faucibus dapibus. Donec rutrum congue metus, fringilla eleifend quam luctus vitae. Morbi mi mauris, ullamcorper quis erat id, rutrum tempor leo. Nunc sit amet erat nibh. Sed vel mauris felis. Nulla nulla magna, porta sit amet semper ut, molestie at mi. Sed venenatis volutpat lobortis. Donec mattis fringilla arcu, id rhoncus est pharetra a. Etiam ut euismod tellus. Proin sagittis mauris tortor, sit amet vulputate turpis tincidunt sed. Etiam a consectetur enim, tristique malesuada ipsum. Maecenas vel placerat sapien. Nam et ultricies orci. Ut bibendum accumsan laoreet. </p>
                                            <p>Maecenas in mattis justo. Nulla aliquam dictum erat, vitae maximus sem interdum ut. Sed sollicitudin tempus accumsan. Vivamus eget dui at ligula semper aliquam eu vel erat. Sed sed mi molestie, eleifend nunc eu, finibus lorem. Morbi <span class="text-custom">vulputate interdum</span> finibus. Vestibulum bibendum iaculis dui sed ornare. Proin nec finibus mi. Sed odio diam, pharetra at dapib nec, commodo quis risus. Cras et dui vitae lacus luctus maximus id sed erat. Maecenas dignissim malesuada elit, sit amet efficitur est suscipit nec. Sed quis rutrum libero. Nullam a lacus hendrerit, vestibulum nisi a, dictum quam.</p>
                                            <ul>
                                                <li>Portable Bluetooth stereo speaker for enabled smartphones, MP3, tablets and personal computers;</li>
                                                <li>Clear talk mic with Siri activation for hands-free talk;</li>
                                                <li>Up to 10-hours battery life with Lithium-Ion battery;</li>
                                                <li>Three large drivers (two 40mm stereo speakers and one 40mm sub) for superior sound;</li>
                                                <li>Color options: Black, white, red, orange, blue;</li>
                                                <li>Included items: Speaker with protective silicone cover, charging cord, 3.5mm aux cord;</li>
                                                <li>Dimensions: 6.5 inches high x 2 inches wide x 3 inches deep.</li>
                                            </ul>
                                        </div><!-- End .product-desc-section -->
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-details">
                                        <div class="product-details-section">
                                            <div class="row row-lg">
                                                <div class="col-md-6">
                                                    <h3>KEY FEATURES</h3>

                                                    <div class="table-responsive">
                                                        <table class="table table-bordered details-table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>1.  Digital TV or ATV</td>
                                                                    <td>ATSC/NTSC</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2.  Area</td>
                                                                    <td>North America</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3.  Display Technology </td>
                                                                    <td>ELED</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>4.  2D/3D</td>
                                                                    <td>2D</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5.  Refresh Rate</td>
                                                                    <td>EMR120</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6.  Aspect Ratio</td>
                                                                    <td>16:9</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7.  Resolution</td>
                                                                    <td>1920 x 1080</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8.  Energy Grade</td>
                                                                    <td>ENERGY STAR 6.1</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9.  ID Features</td>
                                                                    <td>Plastic frame, ultra-narrow</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10.  Main Function</td>
                                                                    <td>Multimedia play</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div><!-- End .table-responsive -->
                                                </div><!-- End .col-md-6 -->

                                                <div class="col-md-6">
                                                    <h3>PICTURE</h3>

                                                    <div class="table-responsive">
                                                        <table class="table table-bordered details-table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>1.  Category</td>
                                                                    <td>LED TV</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2.  Color Temperature</td>
                                                                    <td>Normal/Warm/Cool/User</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3.  Picture Effects</td>
                                                                    <td>7 picture effects preset</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>4.  Color</td>
                                                                    <td>16.7M (8-bit)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5.  Film Mode</td>
                                                                    <td>Yes</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6.  Resolution</td>
                                                                    <td>1920 x 1080 px</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7.  Brightness </td>
                                                                    <td>300 (cd/m²)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8.  Contrast Ratio</td>
                                                                    <td>1500:1</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9.  Response Time</td>
                                                                    <td>8.5ms</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10.  Life Time</td>
                                                                    <td>> 30,000 hours (min.)</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div><!-- End .table-responsive -->
                                                </div><!-- End .col-md-6 -->
                                            </div><!-- End .row-lg -->
                                        </div><!-- End .product-details-section -->
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane active" id="tab-comments">
                                        <div class="product-comments-section">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3 class="comments-section-title">
                                                        2 REVIEW FOR “Bass Effect Audio XV Portable”
                                                        <span class="ratings-container">
                                                            <span class="ratings" style="width: 60%;"></span><!-- End .ratings -->
                                                        </span><!-- End .ratings -->
                                                    </h3>
                                                    <div class="comments">
                                                        <ul class="comments-list media-list">
                                                            <li class="media">
                                                                <div class="comment">
                                                                    <div class="media-left">
                                                                        <img class="media-object" src="assets/images/blog/users/single/user1.png" alt="User name">
                                                                    </div><!-- End .media-left -->
                                                                    <div class="media-body">
                                                                        <div class="media-body-wrapper">
                                                                            <div class="ratings-container">
                                                                                <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                                            </div><!-- End .ratings -->
                                                                            <h4 class="media-heading">Nice Light Laptop for Daily Life</h4>

                                                                            <p>Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit vivamus tempor.  </p>

                                                                            <span class="comment-date">Rafael Green, march 10, 2016</span>
                                                                        </div><!-- End .media-body-wrapper -->
                                                                    </div><!-- End .media-body -->
                                                                </div><!-- End .comment -->
                                                            </li>
                                                            <li class="media">
                                                                <div class="comment">
                                                                    <div class="media-left">
                                                                        <img class="media-object" src="assets/images/blog/users/single/user2.png" alt="User name">
                                                                    </div><!-- End .media-left -->
                                                                    <div class="media-body">
                                                                        <div class="media-body-wrapper">
                                                                            <div class="ratings-container">
                                                                                <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                                            </div><!-- End .ratings -->
                                                                            <h4 class="media-heading">I love this little laptop</h4>

                                                                            <p>Duis aliquam et risus vitae tempus. Donec consecteturdiam vitae lobortis auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sagittis non sapien.</p>

                                                                            <span class="comment-date">Grade Hudson, August 25, 2016</span>
                                                                        </div><!-- End .media-body-wrapper -->
                                                                    </div><!-- End .media-body -->
                                                                </div><!-- End .comment -->
                                                            </li>
                                                        </ul>
                                                    </div><!-- End .comments -->
                                                </div><!-- End .col-md-6 -->

                                                <div class="col-md-6">
                                                    <h3>WRITE YOUR REVIEW</h3>

                                                    <form action="#">
                                                        <div class="form-group label-overlay">
                                                            <input type="text" class="form-control" required>
                                                            <label class="input-desc"><i class="icon input-icon input-user"></i>Enter your username <span class="input-required">*</span></label>
                                                        </div><!-- End .form-group -->
                                                        <div class="form-group label-overlay">
                                                            <input type="email" class="form-control" required>
                                                            <label class="input-desc"><i class="icon input-icon input-email"></i>Enter your e-mail <span class="input-required">*</span></label>
                                                        </div><!-- End .form-group -->

                                                        <div class="form-group textarea-group mb35 label-overlay">
                                                            <textarea cols="30" rows="5" class="form-control min-height" required></textarea>
                                                            <label class="input-desc"><i class="icon input-icon input-message"></i>Write your review <span class="input-required">*</span></label>
                                                        </div><!-- End .form-group -->

                                                        <button type="submit" class="btn btn-custom min-width">Submit Review</button>
                                                    </form>
                                                </div><!-- End .col-md-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .product-comments-section -->
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-access">
                                        <div class="carousel-overflow-container top-align row">
                                            <div class="col-xs-12">

                                                <div class="swiper-container product-small-carousel">

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
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-video">
                                        <iframe width="560" height="315" src="http://www.youtube.com/embed/N_2OmTZ08L0" allowfullscreen></iframe>
                                    </div><!-- End .tab-pane -->

                                    <div role="tabpanel" class="tab-pane" id="tab-custom">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptates, aut autem modi earum sunt fuga unde suscipit voluptatibus ducimus dignissimos quam alias animi quo culpa obcaecati provident odit omnis!</p>
                                        <p>Suscipit cumque veritatis iste tenetur, ab nisi placeat excepturi quas? Doloremque quam molestias, in nobis sed! Voluptas optio aspernatur repellendus eligendi sapiente modi suscipit, at, ipsum omnis animi pariatur, inventore.</p>
                                        <p>Magnam ad reprehenderit quis recusandae nobis harum consectetur a eveniet numquam! Quam alias illum, temporibus mollitia suscipit doloremque sint velit ipsum autem repellat! Quibusdam tenetur dolore laudantium, cumque maxime ipsam atibus magnam illum, iusto distinctio architecto ullam temporibus unde vero. Iste aliquid obcaecati, quia unde sint veniam vitae inventore voluptatem atque iusto ad quidem illum a quaerat.</p>
                                        <p>Corrupti ab, sed, necessitatibus magnam illum, iusto distinctio architecto ullam temporibus unde vero. Iste aliquid obcaecati, quia unde sint veniam vitae inventore voluptatem atque iusto ad quidem illum a quaerat.</p>
                                    </div><!-- End .tab-pane -->
                                </div><!-- End .tab-content -->
                            </div><!-- end role[tabpanel] -->

                            <div class="mb90 mb60-sm"></div><!-- margin -->
                            
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

                                                    <div class="product-colors">
                                                        <span style="background-color: #fff;"></span>
                                                        <span style="background-color: #c5c6c8;"></span>
                                                        <span style="background-color: #454545;"></span>
                                                    </div><!-- End .product-colors -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Agregar a carrito</span></a>
                                                        <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
                                                        <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product -->
                                            </div><!-- End .swiper-slide -->
                                            <?php }?>
                                            

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
        <script src="<?=base_url()?>public/assets/js/plugins.min.js"></script>
        <script src="<?=base_url()?>public/assets/js/jquery.elevateZoom.min.js"></script>
        <script src="<?=base_url()?>public/assets/js/main.js"></script>

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