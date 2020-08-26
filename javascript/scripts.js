

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function menuHamb() {
	document.getElementById("dropHamb").classList.toggle("show");
}

function menuTopBtns() {
	document.getElementById("dropBtnTop").classList.toggle("show-btn-top");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
	if (!event.target.matches('.menu-hamb')) {
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
	
	
	if (!event.target.matches('.menu-drop-btn-top')) {
		var dropdowns = document.getElementsByClassName("dropdown-content-btn-top");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show-btn-top')) {
				openDropdown.classList.remove('show-btn-top');
			}
		}
	}
	
}