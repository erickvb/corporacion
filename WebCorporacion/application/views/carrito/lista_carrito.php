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
				
                
                <!-- End .container-fluid -->
                
            </div><!-- End .main -->

          	<? $this->load->view("layout/footer");?>
        </div><!-- End #wrapper -->

        <!-- End -->



    </body>
</html>