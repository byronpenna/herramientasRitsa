$(document).ready(function(){
	$(document).on("change",".cbBanda",function(){
		var serializar = new Serializar();
		var frm = serializar.sectionToJson($(this).parents(".divCalculadora"));
		var valor = String(frm.cbBanda1 *= 1);
		valor += String(frm.cbBanda2 *= 1);
		valor += String(frm.cbBanda3 *= 1);
		var multiplicador = "1";
		for (var i = 0 ; i < frm.cbBanda4; i++) {
			multiplicador += "0";
		}
		console.log("Valor es: ",valor);
		console.log("multiplicador es: ",multiplicador);
		var total = parseInt(valor) * parseInt(multiplicador)
		$(".spanNumeroResultado").empty().append(total);
		
	});
})