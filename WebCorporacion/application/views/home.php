<!DOCTYPE html>
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if !IE]><!--><html><!--<![endif]-->
    <head>
    <? $this->load->view("layout/header");?>
    </head>
 	<body>
 	<div id="wrapper">
 	<? $this->load->view("layout/menu");?>
 	 <div class="mb30"></div><!-- margin -->
 	  
 	  <div class="main">
 	  	<div class="container-fluid">
 	  		<div class="row">
 	  		
 	  		<div class="col-md-9 col-md-push-3">
             	<? $this->load->view("layout/banner-top");?>
                
                	<? $this->load->view("template/productos");?>

                            <div class="mb45 visible-lg"></div><!-- margin -->

                            <? $this->load->view("layout/banner2");?>

                            <div class="mb90 mb60-sm mb40-xs"></div><!-- margin -->
							
							<? $this->load->view("layout/especial-productos");?>
                            
                            <div class="mb100 mb70-sm mb30-xs"></div><!-- margin -->

                            <? $this->load->view("layout/fans-page");?>

                           <? $this->load->view("layout/top-rating");?>

                            <div class="mb70 mb35-sm"></div><!-- margin -->
							<? $this->load->view("layout/the-blog");?>
                            <div class="mb20 mb0-xs"></div><!-- margin -->
							<? $this->load->view("layout/manufacturer");?>
                            

                            <div class="mb90-sm mb70-xs visible-sm visible-xs"></div><!-- margin -->
                            
                        </div><!-- End .col-md-9 -->
 	  		
 	  		<div class="mb30 visible-sm visible-xs clearfix"></div><!-- margin -->
 	  		
 	  	 	<? $this->load->view("layout/sidebar");?>
 	  		
 	  		</div><!-- End .row -->
 	  	 </div><!-- End .container-fluid -->
 	  	<div class="mb170 mb50-sm"></div><!-- margin -->
 	  </div><!-- End .main -->
 	<? $this->load->view("layout/footer");?>
 	</div><!-- End #wrapper -->
 	
	<script>
   
	
         (function($) {
                "use strict";
                $(function() {
                    // Index5 Slider with background check
                    new Swiper('.banner-top-slider', {
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