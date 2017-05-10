/**
 * funciones home
 *  
 */
function DJCatMatchModules(className){
		var maxHeight = 0;
		var divs = null;
		if (typeof(className) == 'string') {
			divs = document.id(document.body).getElements(className);
		} else {
			divs = className;
		}

		divs.setStyle('height', 'auto');
		
		if (divs.length > 1) {						
			divs.each(function(element) {
				//maxHeight = Math.max(maxHeight, parseInt(element.getStyle('height')));
				maxHeight = Math.max(maxHeight, parseInt(element.getSize().y));
			});
			
			divs.setStyle('height', maxHeight);
			
		}
}

window.addEvent('load', function(){
	DJCatMatchModules('.item_box_in2');
});

window.addEvent('resize', function(){
	DJCatMatchModules('.item_box_in2');
});


var se206_regs=new Array();


var se206_current=0;

function se206_new_reg(parent,a_parent,r_path){

  	var myRequest = new Request({
	    url: 'http://templates.joomla-monster.comjm-dating/index.php',
	    method: 'post',
		data: {
	      'option': 'com_djclassifieds',
	      'view': 'item',
	      'task': 'getRegionSelect',
		  'reg_id': a_parent,
		  'mod_id': 206				  
		  },
	    onRequest: function(){
	    	document.id('se206_after_reg_'+parent).innerHTML = '<div style="text-align:center;"><img src="jm-dating/components/com_djclassifieds/assets/images/loading.gif" alt="..." /></div>';
	    	},
	    onSuccess: function(responseText){																
	    	if(responseText){	
				document.id('se206_after_reg_'+parent).innerHTML = responseText; 
				document.id('se206_reg_'+parent).value=a_parent;
			}else{
				document.id('se206_after_reg_'+parent).innerHTML = '';
				document.id('se206_reg_'+parent).value=a_parent;		
			}	
			if(r_path != 'null'){
				if(r_path.length>0){
					var first_path = r_path[0].split(',');												
					r_path.shift();
					se206_new_reg(first_path[0],first_path[1],r_path);												
				}
			}
	    },
	    onFailure: function(){}
	});
	myRequest.send();	

	
	/*if(se206_regs[a_parent]){
		//alert(cats[v]);
		if(parent==a_parent){
			document.id('se206_after_reg_'+parent).innerHTML = '';
		}else{
			document.id('se206_after_reg_'+parent).innerHTML = se206_regs[a_parent];
		}													 
		document.id('se206_reg_'+parent).value=a_parent;
	}else{
		document.id('se206_after_reg_'+parent).innerHTML = '';
		document.id('se206_reg_'+parent).value=a_parent;		
	}*/
	
}


var se206_cats=new Array();


var se_current=0;

function se206_new_cat(parent,a_parent,c_path){


  	var myRequest = new Request({
	    url: 'http://templates.joomla-monster.comjm-dating/index.php',
	    method: 'post',
		data: {
	      'option': 'com_djclassifieds',
	      'view': 'item',
	      'task': 'getCategorySelect',
		  'cat_id': a_parent,
		  'mod_id': 206				  
		  },
	    onRequest: function(){
	    	document.id('se206_after_cat_'+parent).innerHTML = '<div style="text-align:center;"><img src="jm-dating/components/com_djclassifieds/assets/images/loading.gif" alt="..." /></div>';					    	
	    	},
	    onSuccess: function(responseText){																
	    	if(responseText){	
				document.id('se206_after_cat_'+parent).innerHTML = responseText; 
				document.id('se206_cat_'+parent).value=a_parent;
			}else{
				document.id('se206_after_cat_'+parent).innerHTML = '';
				document.id('se206_cat_'+parent).value=a_parent;		
			}	
			if(c_path != 'null'){
				if(c_path.length>0){
					var first_path = c_path[0].split(',');												
					c_path.shift();
					se206_new_cat(first_path[0],first_path[1],c_path);												
				}
			}
	    },
	    onFailure: function(){}
	});
	myRequest.send();	


	
	/*if(se206_cats[a_parent]){
		//alert(se_cats[v]);	
		document.id('se206_after_cat_'+parent).innerHTML = se206_cats[a_parent]; 
		document.id('se206_cat_'+parent).value=a_parent;
	}else{
		document.id('se206_after_cat_'+parent).innerHTML = '';
		document.id('se206_cat_'+parent).value=a_parent;		
	}*/
	
}

function se206_getFields(cat_id){
	
var el = document.getElementById("search206_ex_fields");
var before = document.getElementById("search206_ex_fields").innerHTML.trim();	

if(cat_id!=0){	
	el.innerHTML = '<div style="text-align:center"><img src="http://templates.joomla-monster.comjm-dating/components/com_djclassifieds/assets/images/loading.gif" /></div>';
	var url = 'http://templates.joomla-monster.comjm-dating/index.php?option=com_djclassifieds&view=item&task=getSearchFields&cat_id=' + cat_id;
				 var myRequest = new Request({							    
				    
				url: 'http://templates.joomla-monster.comjm-dating/index.php',
			    method: 'post',
				data: {
			      'option': 'com_djclassifieds',
			      'view': 'item',
			      'task': 'getSearchFields',
				  'cat_id': cat_id			  
				  },
			    onRequest: function(){
			        //myElement.set('html', '<div style="text-align:center;"><img style="margin-top:10px;" src="http://templates.joomla-monster.comjm-dating/components/com_djclassifieds/images/long_loader.gif" /><br />loading...</div>');
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
					var djfields_accordion_o = document.getElements('#search206_ex_fields .djfields_accordion_o');
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
					
					var djfields_accordion_c = document.getElements('#search206_ex_fields .djfields_accordion_c');
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
	
}



window.addEvent('domready', function(){
	djmodMapaClusterStart201();
	});

     var djmod_map201;
     var djmod_map_marker201 = new google.maps.InfoWindow();
     var djmod_geokoder201 = new google.maps.Geocoder();
	 var djmarkers201 = new Array();		
	    	
	function djmodMarker(position,txt,icon)
	{			
	    var MarkerOptions =  
	    { 
	        position: position, 
	        icon: icon
	    } 
	    var marker = new google.maps.Marker(MarkerOptions);
	    marker.txt=txt;
	     
	    google.maps.event.addListener(marker,"click",function()
	    {
	        djmod_map_marker201.setContent(marker.txt);
	        djmod_map_marker201.open(djmod_map201,marker);
	    });
	    return marker;
	}   	
	    	
	 function djmodMapaClusterStart201()    
	 {   		 

		djmod_geokoder201.geocode({address: 'USA, New York, Manhattan'}, function (results, status)
		{
		    if(status == google.maps.GeocoderStatus.OK)
		    {			    
			 document.getElementById("djmod_map_box201").style.display='block';
			 							var map_center = results[0].geometry.location;
							 	 
			    var opcjeMapy = {
			        zoom: 12,
			        center: map_center,
			  		mapTypeId: google.maps.MapTypeId.ROADMAP,
			  		navigationControl: true,
			  		scrollwheel: true,
			  		styles:[{
				        featureType:"poi",
				        elementType:"labels",
				        stylers:[{
				            visibility:"off"
				        }]
				    }]
			    };
			    djmod_map201 = new google.maps.Map(document.getElementById("djmod_map201"), opcjeMapy); 				    				    
				 var size = new google.maps.Size(32,32);
                 var start_point = new google.maps.Point(0,0);
                 var anchor_point = new google.maps.Point(0,16);	            			 
											var icon = '';
																																		
																var adLatlng = new google.maps.LatLng(40.745280500000000,-73.991422200000000);
									djmarkers201.push(djmodMarker(adLatlng,'<div style="width:200px;margin-bottom:0px"><div style="margin-bottom:5px;"><a style="text-decoration:none !important;" href="jm-dating/single-ad-view-with-bids "><img style="float:left;margin:5px 10px 0 0;"  width="60px" src="http://templates.joomla-monster.comjm-dating//components/com_djclassifieds/images/item/78_i14_ths.jpg" /> <strong>Vivian White</strong><br /><span style="color:#333333">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</span></a></div></div>',icon));
			    											
			    								var icon = '';
																																		
																var adLatlng = new google.maps.LatLng(41.894443200000000,-87.641243100000000);
									djmarkers201.push(djmodMarker(adLatlng,'<div style="width:200px;margin-bottom:0px"><div style="margin-bottom:5px;"><a style="text-decoration:none !important;" href="jm-dating/meet-somebody/she-s-looking-for-him/ad/felicia-owen,76 "><img style="float:left;margin:5px 10px 0 0;"  width="60px" src="http://templates.joomla-monster.comjm-dating//components/com_djclassifieds/images/item/76_i8_ths.jpg" /> <strong>Felicia Owen </strong><br /><span style="color:#333333">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</span></a></div></div>',icon));
			    											
			    								var icon = '';
																																		
																var adLatlng = new google.maps.LatLng(40.754709900000000,-73.992006800000000);
									djmarkers201.push(djmodMarker(adLatlng,'<div style="width:200px;margin-bottom:0px"><div style="margin-bottom:5px;"><a style="text-decoration:none !important;" href="jm-dating/single-ad-view-with-horizontal-search "><img style="float:left;margin:5px 10px 0 0;"  width="60px" src="http://templates.joomla-monster.comjm-dating//components/com_djclassifieds/images/item/75_i6_ths.jpg" /> <strong>Angel Brown</strong><br /><span style="color:#333333">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</span></a></div></div>',icon));
			    											
			    								var icon = '';
																																		
																var adLatlng = new google.maps.LatLng(34.104971900000000,-118.334360000000000);
									djmarkers201.push(djmodMarker(adLatlng,'<div style="width:200px;margin-bottom:0px"><div style="margin-bottom:5px;"><a style="text-decoration:none !important;" href="jm-dating/meet-somebody/she-s-looking-for-him/ad/cathy-hale,69 "><img style="float:left;margin:5px 10px 0 0;"  width="60px" src="http://templates.joomla-monster.comjm-dating//components/com_djclassifieds/images/item/69_i20_ths.jpg" /> <strong>Cathy Hale </strong><br /><span style="color:#333333">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</span></a></div></div>',icon));
			    											
			    								var icon = '';
																																		
																var adLatlng = new google.maps.LatLng(41.981924700000000,-87.660022700000000);
									djmarkers201.push(djmodMarker(adLatlng,'<div style="width:200px;margin-bottom:0px"><div style="margin-bottom:5px;"><a style="text-decoration:none !important;" href="jm-dating/meet-somebody/she-s-looking-for-him/ad/jane-cobb,68 "><img style="float:left;margin:5px 10px 0 0;"  width="60px" src="http://templates.joomla-monster.comjm-dating//components/com_djclassifieds/images/item/68_i16_ths.jpg" /> <strong>Jane Cobb </strong><br /><span style="color:#333333">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</span></a></div></div>',icon));
			    											
			    								var icon = '';
																																		
																var adLatlng = new google.maps.LatLng(40.761862800000000,-73.983333200000000);
									djmarkers201.push(djmodMarker(adLatlng,'<div style="width:200px;margin-bottom:0px"><div style="margin-bottom:5px;"><a style="text-decoration:none !important;" href="jm-dating/meet-somebody/she-s-looking-for-him/ad/julie-ortega,64 "><img style="float:left;margin:5px 10px 0 0;"  width="60px" src="http://templates.joomla-monster.comjm-dating//components/com_djclassifieds/images/item/64_i10_ths.jpg" /> <strong>Julie Ortega</strong><br /><span style="color:#333333">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</span></a></div></div>',icon));
			    											
			    								var icon = '';
																																		
																var adLatlng = new google.maps.LatLng(40.740710800000000,-73.927745300000000);
									djmarkers201.push(djmodMarker(adLatlng,'<div style="width:200px;margin-bottom:0px"><div style="margin-bottom:5px;"><a style="text-decoration:none !important;" href="jm-dating/meet-somebody/she-s-looking-for-him/ad/anne-james,59 "><img style="float:left;margin:5px 10px 0 0;"  width="60px" src="http://templates.joomla-monster.comjm-dating//components/com_djclassifieds/images/item/59_i4_ths.jpg" /> <strong>Anne James</strong><br /><span style="color:#333333">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</span></a></div></div>',icon));
			    											
			    								var icon = '';
																																		
																var adLatlng = new google.maps.LatLng(34.077389000000000,-118.429301700000000);
									djmarkers201.push(djmodMarker(adLatlng,'<div style="width:200px;margin-bottom:0px"><div style="margin-bottom:5px;"><a style="text-decoration:none !important;" href="jm-dating/meet-somebody/she-s-looking-for-him/ad/angie-briggs,58 "><img style="float:left;margin:5px 10px 0 0;"  width="60px" src="http://templates.joomla-monster.comjm-dating//components/com_djclassifieds/images/item/58_i2_ths.jpg" /> <strong>Angie Briggs</strong><br /><span style="color:#333333">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</span></a></div></div>',icon));
			    											
			    		
			    	var mcOptions = {gridSize: 50, maxZoom: 14,styles: [{
					height: 53,url: "http://templates.joomla-monster.com/joomla30/jm-dating/components/com_djclassifieds/assets/mapclustering/images/m1.png",width: 53},
					{height: 56,url: "http://templates.joomla-monster.com/joomla30/jm-dating/components/com_djclassifieds/assets/mapclustering/images/m2.png",width: 56},
					{height: 66,url: "http://templates.joomla-monster.com/joomla30/jm-dating/components/com_djclassifieds/assets/mapclustering/images/m3.png",width: 66},
					{height: 78,url: "http://templates.joomla-monster.com/joomla30/jm-dating/components/com_djclassifieds/assets/mapclustering/images/m4.png",width: 78},
					{height: 90,url: "http://templates.joomla-monster.com/joomla30/jm-dating/components/com_djclassifieds/assets/mapclustering/images/m5.png",width: 90}]};
			    	var markerCluster = new MarkerClusterer(djmod_map201, djmarkers201,mcOptions);																																									    
		    	}
			});					    
	    }

