<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                             <form action="<?=site_url('/carrito/registrarPedido')?>" method="post" name="frmCliente">
                                               
                            <div class="checkout-section">
                                <div class="panel-group" role="tablist" aria-multiselectable="true">
                                  
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h2 class="panel-title">
                                                <a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                1.Informaci&oacute;n cliente
                                                </a>
                                            </h2>
                                        </div><!-- End .panel-heading -->
                                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <div class="row row-lg">
                                                    <div class="col-sm-6">
                                                        <h3>DATOS PERSONALES</h3>
                                                        <div class="form-group label-overlay">
                                                            <input type="text" class="form-control" required name="nombres" >
                                                            <label class="input-desc"><i class="icon input-icon input-user"></i>Ingresa tus nombres <span class="input-required">*</span></label>
                                                        </div><!-- End .form-group -->
                                                        <div class="form-group label-overlay">
                                                            <input type="email" class="form-control" required name="email">
                                                            <label class="input-desc"><i class="icon input-icon input-email"></i>Ingresa tu email <span class="input-required">*</span></label>
                                                        </div><!-- End .form-group -->
                                                        <div class="form-group label-overlay">
                                                            <input type="text" class="form-control" required name="nroTelefono">
                                                            <label class="input-desc"><i class="icon input-icon input-phone"></i>Ingresa tu nro. telefono <span class="input-required">*</span></label>
                                                        </div><!-- End .form-group -->
                                                       
                                                         <div class="mb15"></div><!-- margin -->

                                                       
													</div><!-- End .col-sm-6 -->

                                                    <div class="mb40 visible-xs"></div><!-- margin -->
												</div><!-- End .row -->
                                                
                                            </div><!-- End .panel-body -->
                                        </div><!-- End .panel-collapse -->
                                    </div><!-- End .panel -->

                                  

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingSix">
                                            <h2 class="panel-title">
                                                <a data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    2. Confirmar Pedido
                                                </a>
                                            </h2>
                                        </div><!-- End .panel-heading -->
                                        <div id="collapseSix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSix">
                                            <div class="panel-body last">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered cart-table checkout-table">
                                                        <thead>
                                                            <tr>
                                                               
                                                                <th class="product-col"> Nombre de producto</th>
                                                                <th class="code-col">Codigo</th>
                                                                <th class="price-col">Precio unitario</th>
                                                                <th class="quantity-col">Cantidad</th>
                                                                <th class="subtotal-col">Subtotal</th>
                                                                <th class="delete-col"><i class="icon delete-btn white"></i></th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                         <?php foreach ($lista_cart as $items){?>
                                                            <tr>
                                                                <td class="product-col">
                                                                    <div class="product">
                                                                        <div class="product-top">
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
                                                                           
                                                                        </div><!-- End .product-content-wrapper -->
                                                                    </div><!-- End .product -->
                                                                </td>
                                                                <td class="code-col"><?=$items['id']?></td>
                                                                <td class="price-col">
                                                                    <div class="product-price-container">
                                                                        
                                                                        <span class="product-price">S/<?=$this->cart->format_number($items['price'])?></span>
                                                                    </div><!-- End .product-price-container -->
                                                                </td>
                                                                <td class="quantity-col"><?=$items['qty']?>
                                                                </td>
                                                                <td class="subtotal-col">S/<?=$this->cart->format_number($items['subtotal'])?></td>
                                                                <td class="delete-col"><a href="<?=site_url('/carrito/eliminar/'.$items['rowid']).'/2'?>" class="icon delete-btn lighter"></a></td>
                                                            </tr>

                                                             <? }?>

                                                            <tr class="total-row">
                                                                <td colspan="4"><span>Subtotal:</span> </td>
                                                                <td colspan="2">S/<?=$this->cart->format_number($this->cart->total())?></td>
                                                            </tr>
                                                            
                                                            <tr class="total-row">
                                                                <td colspan="4"><span>total:</span> </td>
                                                                <td colspan="2">S/<?=$this->cart->format_number($this->cart->total())?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- End .table-responsive -->
                                                <div class="text-right">
                                                    <input type="submit" class="btn btn-custom min-width-md" value="Confirmar Orden" name="grabar"/>
                                                </div>
                                            </div><!-- End .panel-body -->
                                        </div><!-- End .panel-collapse -->
                                    </div><!-- End .panel -->
                                </div><!-- End .panel-group -->
                            </div><!-- End .checkout-section -->
	</form>
                            <div class="mb140 mb100-sm mb80-xs"></div><!-- margin -->
                        </div><!-- End .col-md-9 -->

                        <aside class="col-md-3 sidebar">
                        </aside>
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->