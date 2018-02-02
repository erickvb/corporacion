	<!--inicio formulario contacto-->
			<div class="page-header">
                    <div class="container-fluid">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ol>
                    </div><!-- End .container-fluid -->
                </div><!-- End .page-header -->

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div id="map"> 
                         <iframe src="https://www.google.com/maps/d/u/2/embed?mid=1u0wuZ-h9Z-8xZJolFiKgyoOOdPE" width="950" height="500"></iframe>
                            </div><!-- End #map -->


                            <h2>Escriba su Consulta</h2>
                            <div class="row row-lg">
                                <form action="#">
                                    <div class="col-sm-6">
                                        <div class="form-group mb30 label-overlay">
                                            <input type="text" class="form-control" required>
                                            <label class="input-desc"><i class="icon input-icon input-user"></i>Ingrese su nombre <span class="input-required">*</span></label>
                                        </div><!-- End .form-group -->
                                        <div class="form-group mb30 label-overlay">
                                            <input type="email" class="form-control" required>
                                            <label class="input-desc"><i class="icon input-icon input-email"></i>Ingrese su correo <span class="input-required">*</span></label>
                                        </div><!-- End .form-group -->
                                        <div class="form-group mb30 label-overlay">
                                            <input type="text" class="form-control">
                                            <label class="input-desc"><i class="icon input-icon input-subject"></i>Ingrese el asunto</label>
                                        </div><!-- End .form-group -->
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <div class="form-group textarea-group mb30 label-overlay">
                                            <textarea cols="30" rows="5" class="form-control min-height" required></textarea>
                                            <label class="input-desc"><i class="icon input-icon input-message"></i>Escriba su mensaje<span class="input-required">*</span></label>
                                        </div><!-- End .form-group -->

                                        <button type="submit" class="btn btn-custom">Enviar</button>
                                    </div><!-- End .col-sm-6 -->
                                </form>
                            </div><!-- End .row -->

                            <div class="mb100 mb80-sm"></div><!-- margin -->

                            <div class="contact-infos-wrapper">
                                <div class="row">
                                    <div class="col-sm-4 contact-info-container">
                                        <div class="contact-info">
                                            <i class="icon contact-icon contact-pin"></i>
                                            <div class="contact-info-meta">
                                                <h3>Nuestra Ubicación</h3>
                                                <address>
                                                    Jr. San Diego 171- Surquillo (Alt. Puente Ricardo Palma c/ Vía Expresa)
                                                </address>
                                                <a href="#" class="more-link">Leer más</a>
                                            </div><!-- end .contact-info-meta -->
                                        </div><!-- End .contact-info -->
                                    </div><!-- End .col-sm-4 -->
                                    <div class="col-sm-4 contact-info-container">
                                        <div class="contact-info">
                                            <i class="icon contact-icon contact-email"></i>
                                            <div class="contact-info-meta">
                                                <h3>Detalles de Contacto</h3>
                                                <ul>
                                                    <li><span>Correo:</span> <a href="mailto:#">ventas@corporacionderepuestos.com</a></li>
                                                    <li><span>Skype:</span> cr_servicios</li>
                                                </ul>
                                                <a href="#" class="more-link">Leer más</a>
                                            </div><!-- end .contact-info-meta -->
                                        </div><!-- End .contact-info -->
                                    </div><!-- End .col-sm-4 -->
                                    <div class="col-sm-4 contact-info-container">
                                        <div class="contact-info">
                                            <i class="icon contact-icon contact-phone"></i>
                                            <div class="contact-info-meta">
                                                <h3>Contáctenos</h3>
                                                <ul>
                                                    <li><span>Teléfono:</span>51 01 242-4595</li>
                                                    <li><span>Celular:</span>968 990 826</li>
                                                </ul>
                                                <a href="#" class="more-link">LEER MÁS</a>
                                            </div><!-- end .contact-info-meta -->
                                        </div><!-- End .contact-info -->
                                    </div><!-- End .col-sm-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .contact-infos-wrapper -->
                        </div><!-- End .col-md-9 -->

                        <div class="mb80 mb70-xs visible-sm visible-xs"></div><!-- margin -->

                        <aside class="col-md-3 sidebar">

                            <div class="widget">
                                <h3 class="widget-title">Bestsellers</h3>
                                <div class="swiper-container bestsellers-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product product-sm">
                                                <figure>
                                                    <a href="#">
                                                        <img src="<?=base_url()?>public/static/recursos/LG-logo.jpg" alt="Product">
														
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

                            <div class="widget">
                                <h3 class="widget-title">Testimonials</h3>
                                <div class="widget-body">
                                    <div class="swiper-container testimonials-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide testimonial">
                                                <blockquote>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posu ere cubilia curae. Quisque sceler isque mollis nisl vel volutpat. Aenean vitae eros magna. Henean eleifend ligula at lacus. Mauris magna lectus, porta eget faucibus in, suscipit sed nunc. Cras feugiat diam a tortor.</p>
                                                </blockquote>
                                                <div class="testimonial-owner">
                                                    <figure>
                                                        <img src="assets/images/blog/users/mark.png" alt="Mark">
                                                    </figure>
                                                    <div class="owner-meta">
                                                        Mark Lewis,<br>
                                                        06.04.2016
                                                    </div>
                                                </div><!-- End .testimonial-owner -->
                                            </div><!-- End .testimonial -->
                                            <div class="swiper-slide testimonial">
                                                <blockquote>
                                                    <p>hasellus pharetra pretium sapien dignissim eleifend. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit minima inventore eveniet, quam repellendus. Quidem unde, est nemo ducimus. Amet molestias sed aspernatur quo, molestiae deleniti cumque itaque praesentium consectetur!</p>
                                                </blockquote>
                                                <div class="testimonial-owner">
                                                    <figure>
                                                        <img src="assets/images/blog/users/grace.png" alt="Grace">
                                                    </figure>
                                                    <div class="owner-meta">
                                                        Grace Lewis,<br>
                                                        03.04.2016
                                                    </div>
                                                </div><!-- End .testimonial-owner -->
                                            </div><!-- End .testimonial -->
                                        </div><!-- End .swiper-wrapper -->

                                        <div class="swiper-button-next icon"></div>
                                        <div class="swiper-button-prev icon"></div>
                                    </div><!-- end .swiper-container -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .widget -->
                        </aside>
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
                <div class="mb90 visible-md visible-lg"></div><!-- margin -->
			<!--FIN FORMULARIO COMENNTARIO-->