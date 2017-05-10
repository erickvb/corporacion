<section id="jm-top1" class=""><div
class="container-fluid"><div
class="row-fluid jm-flexiblock jm-top1"><div
class="span12"  data-default="span12" data-wide="span12" data-normal="span12" data-xtablet="span12" data-tablet="span100" data-mobile="span100"><div
class="row-fluid"><div
class="span0"><div
class="jm-module  search1-ms category-ms advanced-ms"><div
class="jm-module-in"><div
class="jm-module-content clearfix notitle"><div
id="mod_djcf_search252" class="dj_cf_search dj_cf_search_horizontal"><form
action="/joomla30/jm-dating/meet?se=1" method="get" name="form-search252" id="form-search252">
<input
type="hidden" name="se" value="1" />
<input
type="hidden" name="task" value="parsesearch" />
<input
type="hidden" name="layout" value="blog" /><div
class="search_word djcf_se_row">
<input
type="text" size="12" name="search" class="inputbox first_input" value="Search for singles..." onfocus="if(this.value=='Search for singles...') this.value='';" onblur="if (this.value=='') this.value='Search for singles...';" /></div><div
class="search_regions djcf_se_row">
<select
class="inputbox" id="se252_reg_0" name="se_regs[]" onchange="se252_new_reg(0,this.value,new Array());"><option
value="0">Location</option><option
value="1">North America</option></select><div
id="se252_after_reg_0"></div> <script type="text/javascript">var se252_regs=new Array();
					
					
				var se252_current=0;
				
				function se252_new_reg(parent,a_parent,r_path){

				  	var myRequest = new Request({
					    url: 'http://templates.joomla-monster.com/joomla30/jm-dating/index.php',
					    method: 'post',
						data: {
					      'option': 'com_djclassifieds',
					      'view': 'item',
					      'task': 'getRegionSelect',
						  'reg_id': a_parent,
						  'mod_id': 252				  
						  },
					    onRequest: function(){
					    	document.id('se252_after_reg_'+parent).innerHTML = '<div style="text-align:center;"><img src="/joomla30/jm-dating/components/com_djclassifieds/assets/images/loading.gif" alt="..." /></div>';
					    	},
					    onSuccess: function(responseText){																
					    	if(responseText){	
								document.id('se252_after_reg_'+parent).innerHTML = responseText; 
								document.id('se252_reg_'+parent).value=a_parent;
							}else{
								document.id('se252_after_reg_'+parent).innerHTML = '';
								document.id('se252_reg_'+parent).value=a_parent;		
							}	
							if(r_path != 'null'){
								if(r_path.length>0){
									var first_path = r_path[0].split(',');												
									r_path.shift();
									se252_new_reg(first_path[0],first_path[1],r_path);												
								}
							}
					    },
					    onFailure: function(){}
					});
					myRequest.send();	

					
					/*if(se252_regs[a_parent]){
						//alert(cats[v]);
						if(parent==a_parent){
							document.id('se252_after_reg_'+parent).innerHTML = '';
						}else{
							document.id('se252_after_reg_'+parent).innerHTML = se252_regs[a_parent];
						}													 
						document.id('se252_reg_'+parent).value=a_parent;
					}else{
						document.id('se252_after_reg_'+parent).innerHTML = '';
						document.id('se252_reg_'+parent).value=a_parent;		
					}*/
					
				}</script> </div><div
class="search_cats djcf_se_row">
<select
class="inputbox" id="se252_cat_0" name="se_cats[]" onchange="se252_new_cat(0,this.value,new Array());se252_getFields(this.value);"><option
value="">Choose gender</option><option
value="9">He&apos;s looking for Her</option><option
value="15">She&apos;s looking for Him</option><option
value="25">She&apos;s looking for Her - Adults only</option><option
value="26">He&apos;s looking for Him</option></select><div
id="se252_after_cat_0"></div> <script type="text/javascript">var se252_cats=new Array();
					
					
				var se_current=0;
				
				function se252_new_cat(parent,a_parent,c_path){


				  	var myRequest = new Request({
					    url: 'http://templates.joomla-monster.com/joomla30/jm-dating/index.php',
					    method: 'post',
						data: {
					      'option': 'com_djclassifieds',
					      'view': 'item',
					      'task': 'getCategorySelect',
						  'cat_id': a_parent,
						  'mod_id': 252				  
						  },
					    onRequest: function(){
					    	document.id('se252_after_cat_'+parent).innerHTML = '<div style="text-align:center;"><img src="/joomla30/jm-dating/components/com_djclassifieds/assets/images/loading.gif" alt="..." /></div>';					    	
					    	},
					    onSuccess: function(responseText){																
					    	if(responseText){	
								document.id('se252_after_cat_'+parent).innerHTML = responseText; 
								document.id('se252_cat_'+parent).value=a_parent;
							}else{
								document.id('se252_after_cat_'+parent).innerHTML = '';
								document.id('se252_cat_'+parent).value=a_parent;		
							}	
							if(c_path != 'null'){
								if(c_path.length>0){
									var first_path = c_path[0].split(',');												
									c_path.shift();
									se252_new_cat(first_path[0],first_path[1],c_path);												
								}
							}
					    },
					    onFailure: function(){}
					});
					myRequest.send();	
				

					
					/*if(se252_cats[a_parent]){
						//alert(se_cats[v]);	
						document.id('se252_after_cat_'+parent).innerHTML = se252_cats[a_parent]; 
						document.id('se252_cat_'+parent).value=a_parent;
					}else{
						document.id('se252_after_cat_'+parent).innerHTML = '';
						document.id('se252_cat_'+parent).value=a_parent;		
					}*/
					
				}
				
			function se252_getFields(cat_id){
					
				var el = document.getElementById("search252_ex_fields");
				var before = document.getElementById("search252_ex_fields").innerHTML.trim();	
				
				if(cat_id!=0){	
					el.innerHTML = '<div style="text-align:center"><img src="http://templates.joomla-monster.com/joomla30/jm-dating/components/com_djclassifieds/assets/images/loading.gif" /></div>';
					var url = 'http://templates.joomla-monster.com/joomla30/jm-dating/index.php?option=com_djclassifieds&view=item&task=getSearchFields&cat_id=' + cat_id;
								 var myRequest = new Request({							    
								    
								url: 'http://templates.joomla-monster.com/joomla30/jm-dating/index.php',
							    method: 'post',
								data: {
							      'option': 'com_djclassifieds',
							      'view': 'item',
							      'task': 'getSearchFields',
								  'cat_id': cat_id			  
								  },
							    onRequest: function(){
							        //myElement.set('html', '<div style="text-align:center;"><img style="margin-top:10px;" src="http://templates.joomla-monster.com/joomla30/jm-dating/components/com_content/images/long_loader.gif" /><br />loading...</div>');
							    },
							    onSuccess: function(responseText){																
									el.innerHTML = responseText;
									if(responseText){
										el.removeClass('no_fields');
									}else{
										el.addClass('no_fields');
									}
									var djcals = document.getElements('.djsecal');
									if(djcals){
										var startDate = new Date(2008, 8, 7);
										djcals.each(function(djcla,index){
											Calendar.setup({
									            inputField  : djcla.id,
									            ifFormat    : "%Y-%m-%d",                  
									            button      : djcla.id+"button",
									            date      : startDate
									         });
										});
									}
									var djfields_accordion_o = document.getElements('#search252_ex_fields .djfields_accordion_o');
									if(djfields_accordion_o){										
										djfields_accordion_o.each(function(djfields_acc_o,index){
											 new Fx.Accordion(djfields_acc_o.getElements('.label'),
													 djfields_acc_o.getElements('.se_checkbox'), {
													alwaysHide : true,
													display : 0,
													duration : 100,
													onActive : function(toggler, element) {
														toggler.addClass('active');
														element.addClass('in');
													},
													onBackground : function(toggler, element) {
														toggler.removeClass('active');
														element.removeClass('in');
													}
												});
										})										
									}
									
									var djfields_accordion_c = document.getElements('#search252_ex_fields .djfields_accordion_c');
									if(djfields_accordion_c){										
										djfields_accordion_c.each(function(djfields_acc_c,index){
											 new Fx.Accordion(djfields_acc_c.getElements('.label'),
													djfields_acc_c.getElements('.se_checkbox'), {
													alwaysHide : true,
													display : -1,
													duration : 100,
													onActive : function(toggler, element) {
														toggler.addClass('active');
														element.addClass('in');
													},
													onBackground : function(toggler, element) {
														toggler.removeClass('active');
														element.removeClass('in');
													}
												});
										})										
									}	
														 	
							    },
							    onFailure: function(){
							       // myElement.set('html', 'Sorry, your request failed, please contact to ');
							    }
							});
							myRequest.send();	
				}else{
					el.innerHTML = '';
					//el.innerHTML='Choose gender';
				}
					
			}</script> </div><div
style="clear:both"></div><div
id="search252_ex_fields" class="search_ex_fields no_fields"></div><div
style="clear:both"></div><div
class="search_buttons">
<button
type="submit" class="button btn">Search</button></div></form><div
style="clear:both"></div></div> <script type="text/javascript">window.addEvent("load", function(){
				var cat_path = new Array();se252_new_cat(0,9,cat_path);

					se252_getFields(9);
					
				

			});</script> </div></div></div></div></div></div></div></div>
</section>
