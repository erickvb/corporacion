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
    	addItemCarrito(id, 1);
    	
    });
    
    $('body').on('click','.delete-btn',function(){
    	var id = $(this).attr('id-item');
    	console.log("id click :"+id);
    	
    });
    
    $('.text-cantidad-cart').click(function(){
    	var id = $(this).attr('id-item');
    	console.log("id click :"+id);
    })
    
    listarItems();
});
function addItemCarrito(id, cantidad){
	$.ajax({
		  method: "GET",
		  url: URL_SITE_WEB+"/carrito/addItem/"+id+"/"+cantidad,
		  success: function(data){
			  console.log(data)
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
				  $("#total-cart").html(' '+count+' item(s) in tu cartito - <span class="text-custom">S/'+total+'</span>');
				  $("#menu-total-cart").html("S/"+total);
				  $('.dcart-total-count').html(count);
			  }else{
				  $('.dcart-total-count').html('')
			  }
			 
			 
		  }
		})
}

function deleteItemCarrito(){
	
	
}
function updateItemCarrito(){
	
}