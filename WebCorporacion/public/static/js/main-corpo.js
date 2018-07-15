/**
 * 
 */

$(document).ready(function(){
	var filtro_id_cat_select=0;
	$("#btn-buscar-x-categoria").click(function(event) {
		
		
		var palabra = $("#txt-buscar-x-categoria").val();
		var text = palabra.split(" ").join("-"); 
		if(filtro_id_cat_select==0){
			filtro_id_cat_select = $("#dropdown-categoria-select").attr("data-id-categoria");
		}
		
		if(filtro_id_cat_select==""){
			filtro_id_cat_select=0;
		}
		
		var cadena ="/producto/buscar/"+filtro_id_cat_select+"/"+text;
		
		
		location.href= URL_SITE_WEB+cadena;
		//alert("click en buscar:"+cadena);
		
	});
	
	$(".dropdown-categoria").click(function(event) {
		$("#dropdown-categoria-select").text($(this).text());
		filtro_id_cat_select = $(this).attr("data-id-categoria");
		
	});
	
	/*Paginacion*/
	$(".pagination").find("[rel='next']").addClass("icon next-icon").attr("aria-label","Next");
	
    $(".btn-add-cart").click(function(){
    	console.log("click")
    	var id = $(this).attr("id-item");
    	var valInput = $("#txtCantidadCartPut").val();
    	var cantidad =1;
    	if(valInput!=undefined &&  valInput > 0){
    		cantidad = valInput; 
    	}
    	addItemCarrito(id, cantidad);
    	
    });
    
    $('body').on('click','.delete-btn',function(){
    	var id = $(this).attr('id-item');
    	console.log("id click :"+id);
    	deleteItemCarrito(id);
    });
    
    $('.text-cantidad-cart').change(function(){
    	var id = $(this).attr('id-item-row');
    	var cantidad =  $(this).val();
    	console.log("change item :"+id);
    	updateItemCarrito(id,cantidad);
    })
    
    $('.popup-cerrar').click(function(){
		  $("#popup").removeAttr("style","visibility");
			
    })
    listarItems();
});
function addItemCarrito(id, cantidad){
	$.ajax({
		  method: "GET",
		  url: URL_SITE_WEB+"/carrito/addItem/"+id+"/"+cantidad,
		  success: function(data){
			  console.log(data)
			  $(".mensage-add-item").text(data.mensaje);
			  $("#popup").attr("style","visibility:visible");
				
			  if(data.estado==0){
				  
			  }else{
			  }
			  listarItems();
		  }
		})
		
}

function listarItems(){
	$('#show-menu-cart').hide();
	 $("#menu-resumen-carrito").html("");
	var source   = $("#cart-resumen").html();
	var template = Handlebars.compile(source);
	$.ajax({
		  method: "GET",
		  url: URL_SITE_WEB+"/carrito/listarItems",
		  dataType: "json",
		  success: function(data){
			  console.log(data)
			  var total = 0;
			  var count = 0;
			  $.each(data, function( index, value ) {
				  //alert( index + ": " + value );
				  console.log( index + ": " + value );
				  $("#menu-resumen-carrito").append(template(value));
				  total+= value.subtotal;
				  count+= value.qty;
				});
			  if(total> 0){
				  $('#show-menu-cart').show();
				  $("#total-cart").html(' '+count+' item(s) in tu cartito - <span class="text-custom">S/'+formatMoneda(total)+'</span>');
				  $("#menu-total-cart").html("S/"+formatMoneda(total));
				  $('.dcart-total-count').html(count);
			  }else{
				  $('.dcart-total-count').html('')
			  }
			 
			 
		  }
		})
}

function deleteItemCarrito(id){
	console.log("eliminado item:"+id);
	$.ajax({
		  method: "GET",
		  url: URL_SITE_WEB+"/carrito/deleteItem/"+id,
		  dataType: "json",
		  success: function(data){
			  console.log(data)
			  if(data.estado  == 0){
				  
				  listarItems();
			  }
		  }
		});
}
function updateItemCarrito(id, cantidad){
	console.log("actualizando cantidad item:"+id);
	$.ajax({
		  method: "GET",
		  url: URL_SITE_WEB+"/carrito/updateCantidad/"+id+"/"+cantidad,
		  dataType: "json",
		  success: function(data){
			  console.log(data)
			  listarItems();
			  var total = 0;
			  $.each(data, function( index, value ) {
				  //alert( index + ": " + value );
				  total+= value.subtotal;
				  //count+= value.qty;
				  $(".subtotal-col[id-item-row='"+value.rowid+"']").text("S/"+formatMoneda(value.subtotal));
				});
			  $(".subtotal-calculado-cart").text("S/"+formatMoneda(total));
			  $(".total-calculado-cart").text("S/"+formatMoneda(total));
			
		  }
		});
	
}

function validate(evt) {
	  var theEvent = evt || window.event;

	  // Handle paste
	  if (theEvent.type === 'paste') {
	      key = event.clipboardData.getData('text/plain');
	  } else {
	  // Handle key press
	      var key = theEvent.keyCode || theEvent.which;
	      key = String.fromCharCode(key);
	  }
	  var regex = /[0-9]|\./;
	  if( !regex.test(key) ) {
	    theEvent.returnValue = false;
	    if(theEvent.preventDefault) theEvent.preventDefault();
	  }
	}

function formatMoneda(numero){
   return (numero).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
}