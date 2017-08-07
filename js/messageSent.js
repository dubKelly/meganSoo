(function yesJS() {
  var noJS = document.getElementsByClassName("noJS");
  for (var i = noJS.length - 1; i >= 0; i--) {
	  noJS[i].style.display = "none";
  }
})();

(function burgerMenu() {
	var burger = document.getElementById("burger");
	var toggle = document.getElementsByClassName("toggle");
	burger.onclick = function menuToggle() {
		for (var i = toggle.length - 1; i >= 0; i--) {
			toggle[i].classList.toggle("open");
		}
	}
})();

(function menuHover() {
	var portHead = $(".portHead");
	$(portHead).hover(function() {
		if (portHead[0].classList.contains("open") == true) {
			$(portHead).not(this).toggleClass("fade");
		}
	})
})();