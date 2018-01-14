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
			  
			  $("#total-cart").html(' '+count+' item(s) in tu cartito - <span class="text-custom">S/ '+total+'</span>');
			 
		  }
		})
}