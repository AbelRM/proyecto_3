
(function(){
	// Propiedades de menu movil

var propMenu = {
	//selecciona el elemento con el ID burger_menu
	burger_menu: document.getElementById('burger_menu'),
	//seleccionar el elemento con el ID slideMenu
	slideMenu: document.getElementById('slideMenu'),
	menu_activo: false,
	//seleccionar el slideMenu . clase > A
	elem_menu: document.querySelectorAll('#slideMenu .menu-principal a')

}

// Métodos de menu movil

var metMenu = {
	
	inicio: function () {
		//Añadir evento "click"
		propMenu.burger_menu.addEventListener('click', metMenu.toggleMenu);

		for (var i = 0; i < propMenu.elem_menu.length; i++) {
			//agreagr evento "click" y se haga la fuincion ociltarMenu
			propMenu.elem_menu[i].addEventListener('click', metMenu.ocultarMenu);
		}

	},
	//de la funcionc "click"
	toggleMenu: function () {
		if ( propMenu.menu_activo == false ) {
			//cambia a menu_activo =VERDADERO
			propMenu.menu_activo = true;
			//en la clase = clase actualmente + clase "active
			propMenu.slideMenu.className = propMenu.slideMenu.className + ' active';

		} else{
			//PARA OCULTAR EL MENU
			//cambiar a menu_activo FALSO
			propMenu.menu_activo = false;
			//reemplaza la clase "active", sea blanco
			propMenu.slideMenu.className = propMenu.slideMenu.className.replace('active', '');

		}
	},
	//OCULTA MENU cuando se baje por las secciones
	ocultarMenu: function () {
		propMenu.menu_activo = false;
		propMenu.slideMenu.className = propMenu.slideMenu.className.replace('active', '');
	}

}

metMenu.inicio();

}())
