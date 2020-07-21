(function(){
	// Objeto con propiedades de efecto scroll
var propScroll = {

	posicion: window.pageYOffset,
	scroll_suave: document.getElementsByClassName('scroll-suave'),
	volver_arriba: document.getElementsByClassName('volver-arriba'),
	destino: null,
	seccion_distancia: null,
	intervalo: null

}


// Objeto con métodos de efecto scroll
var metScroll = {

	inicio: function () {
		
		for (var i = 0; i < propScroll.scroll_suave.length; i++) {
			propScroll.scroll_suave[i].addEventListener('click', metScroll.moverse);
		}

		for (var i = 0; i < propScroll.volver_arriba.length; i++) {
			propScroll.volver_arriba[i].addEventListener('click', metScroll.subir);
		}

	},


	moverse: function (e) {
		//quita la accion por defecto
		e.preventDefault();
		clearInterval(propScroll.intervalo);
		//al dar clic al un elemento estoy accediendo al href
		propScroll.destino = this.getAttribute('href');
		//la distancia = offset(distancia entre el inicio y la seccion)
		propScroll.seccion_distancia = document.querySelector(propScroll.destino).offsetTop - 94;
		//vuelve a calcular la distancia enn ellugar que este
		propScroll.posicion = window.pageYOffset;
		//CREAR INTERVALO: setIntervalo a}hace la funcion cada cierto tiempo (15 ms)
		propScroll.intervalo = setInterval(function () {
			//pregunta distancia donde estoy < distancia donde quiero llegar
			if ( propScroll.posicion < propScroll.seccion_distancia) {
				//pixel de avance (se repite)
				propScroll.posicion += 30;

				if (propScroll.posicion >= propScroll.seccion_distancia) {
					//limipia el intervao(nombre_intervalo)
					clearInterval(propScroll.intervalo);
				}
			//caso contrario: para subir	
			} else{

				propScroll.posicion -= 30;

				if (propScroll.posicion <= propScroll.seccion_distancia) {
					clearInterval(propScroll.intervalo);
				}

			}
			//te lleva a la posicion que tú coloques x=0, y=posicion
			window.scrollTo(0, propScroll.posicion);

		}, 15);
	},

	subir: function (e) {
		//quitar funcion por defecto
		e.preventDefault();
		//LO MISMO DE ARRIBA
		clearInterval(propScroll.intervalo);
		propScroll.posicion = window.pageYOffset;
		propScroll.intervalo = setInterval(function(){
			//posicion actual es mayor que 0
			if ( propScroll.posicion > 0 ) {
				//cambia la posicion -30 (sube)
				propScroll.posicion -= 30;
				//limpia el intervalo si la posicion llega a ser <= 0
				if (propScroll.posicion <= 0) {
					clearInterval(propScroll.intervalo);
				}

			} else{
				return;
			}

			window.scrollTo(0, propScroll.posicion);

		}, 15);

	}

	
}

metScroll.inicio();
}())
