/**
 * 
 */
function User(){
	
	
}

User.prototype.init = function(){
	
}

User.prototype.loadCountries = function(){
	$.get(URL_WEB+ "/Ubigeo/countries", function( data ) {
		  $( ".result" ).html( data );
		  //alert( "Load was performed." );
	});
}

User.prototype.loadRegions = function(){
	
}
User.prototype.loadCities = function(){
	
}
User.prototype.loadZones = function(){
	
}

User.prototype.listUser = function(){
	$.get(URL_WEB+ "/user/show", function( data ) {
		  $( ".result" ).html( data );
		  //alert( "Load was performed." );
	});
	
}
