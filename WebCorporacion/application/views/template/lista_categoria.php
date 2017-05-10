<div class="widget widget-category">
			<h3 class="widget-title">
			Categorias<i class="icon cat-title-icon">
			
			</i>
			</h3>
			<ul class="category-list">
			   <?php 
			   foreach($data_menu as $categoria)
			   {?>
			   	<li><a href="<?=site_url('/producto/categoria/'.$categoria->m_product_category_id)?>"> <?=$categoria->name?> <i class="cat-icon icon icon-tshirt custom"></i>
			   	</a></li>
			   <?php }
			   ?>
				<!-- <li><a href="#"> Fashion <i class="cat-icon icon icon-tshirt custom"></i>
				</a></li>
				<li><a href="#"> Furniture <i class="cat-icon icon icon-sofa custom"></i>
				</a></li>
				<li><a href="#"> Electronics <i class="cat-icon icon icon-tv custom"></i>
				</a></li>
				<li><a href="#"> Gifts &amp; Flowers <i
						class="cat-icon icon icon-gift custom"></i>
				</a></li>
				<li><a href="#"> Books &amp; stationery <i
						class="cat-icon icon icon-openbook custom"></i>
				</a></li>
				<li><a href="#"> Music <i class="cat-icon icon icon-music custom"></i>
				</a></li>
				<li><a href="#"> Sport &amp; tourisim <i
						class="cat-icon icon icon-biking custom"></i>
				</a></li>
				<li><a href="#"> Games <i class="cat-icon icon icon-gamepad custom"></i>
				</a></li>
				<li><a href="#"> Home &amp; Kitchen <i
						class="cat-icon icon icon-plate custom"></i>
				</a></li>
				<li><a href="#"> Toys &amp; babycare <i
						class="cat-icon icon icon-stroller custom"></i>
				</a></li>
				<li><a href="#"> Everything Else <i
						class="cat-icon icon icon-candy custom"></i>
				</a></li>
				-->
			</ul>
		</div>
