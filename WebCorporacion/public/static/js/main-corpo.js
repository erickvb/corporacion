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
	

});
