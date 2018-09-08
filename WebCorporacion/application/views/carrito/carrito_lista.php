 <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="table-responsive">
                                <table class="table table-bordered cart-table">
                                    <thead>
                                        <tr>
                                            <th class="product-col"> Nombre de producto</th>
                                            <th class="code-col">SKU</th>
                                            <th class="code-col">Codigo</th>
                                            <th class="price-col">Precio unitario</th>
                                            <th class="quantity-col">Cantidad</th>
                                            <th class="subtotal-col">Subtotal</th>
                                            <th class="delete-col"><i class="icon delete-btn"></i></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    
                                    <?php foreach ($lista_cart as $items){?>
                                        <tr >
                                            <td class="product-col">
                                                <div class="product">
                                                    <div class="product-top">
                                                    
                                                    <!--     <span class="product-label discount">-25%</span> -->
                                                        <figure>
                                                            <a href="#">
                                                                <img src="<?=$items['options']['imagen']?>" alt="<?=$items['name']?>">
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
                                            <td class="code-col"><?=$items['options']['sku']?></td>
                                            <td class="code-col"><?=$items['options']['value']?></td>
                                            <td class="price-col">
                                                <div class="product-price-container">
                                                    <!--  <span class="product-old-price">$1500.00</span>-->
                                                    <span class="product-price">S/<?=$this->cart->format_number($items['price']); ?></span>
                                                </div><!-- End .product-price-container -->
                                            </td>
                                            <td class="quantity-col">
                                                <input type="text" class="form-control text-cantidad-cart" 
                                               onkeypress="validate(event)"
                                                value="<?=$items['qty']?>" id-item="<?=$items['id']?>" id-item-row="<?=$items['rowid']?>"/>
                                            </td>
                                            <td class="subtotal-col" id-item-row="<?=$items['rowid']?>">S/<?=$this->cart->format_number($items['subtotal']); ?></td>
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
                                                    <td class="subtotal-calculado-cart">S/<?=$this->cart->format_number($this->cart->total())?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Total</td>
                                                    <td class="total-calculado-cart">S/<?=$this->cart->format_number($this->cart->total())?></td>
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

                            
                            <div class="mb80 mb60-sm mb50-xs"></div><!-- margin -->
                        </div><!-- End .col-md-9 -->

                        
                    </div><!-- End .row -->
                </div>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      	Producto agregado exitosamente
    </div>
  </div>
</div>

