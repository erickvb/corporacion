 <article class="entry single">
                                <figure id="blog-slider-1" class="entry-media carousel slide" data-ride="carousel" data-interval="7000">
                                    <div class="carousel-inner">
                                         <?php 
                                          $counter_total= 0;
                                            foreach($data_slider as $item_banner){
                                            	
                                            ?>
                                            
                                        <div class="item <?=$counter_total==0?'active':'' ?>">
                                            <!--<img src="<?=base_url()."public/".$item_banner->url_bannerh?>" alt="Entry"> -->
                                            <img src="<?=base_url()?>public/assets/images/blog/single/image1.jpg" alt="Entry">
                                        </div><!-- End .item -->
<?php 
$counter_total++;
                                            }?>
                                        <div class="item">
                                            <img src="<?=base_url()?>public/assets/images/blog/single/image2.jpg" alt="Entry">
                                        </div><!-- End .item -->

                                        <div class="item">
                                            <img src="<?=base_url()?>public/assets/images/blog/single/image3.jpg" alt="Entry">
                                        </div><!-- End .item -->
                                    </div><!-- End .carousel-inner -->

                                    <a class="left carousel-control light big icon" href="#blog-slider-1" role="button" data-slide="prev"></a>
                                    <a class="right carousel-control light big icon" href="#blog-slider-1" role="button" data-slide="next"></a>
                                </figure><!-- End .carousel -->
                                </article>