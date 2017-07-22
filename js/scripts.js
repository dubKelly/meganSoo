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
	$(".portHead").hover(function() {
		$(".portHead").not(this).toggleClass("fade");
	})
})();

// (function focus() {
// 	var focus = document.getElementsByClassName("focus");
// 	document.onmousemove = function mouseX(event) {
// 		for (var i = focus.length - 1; i >= 0; i--) {
// 			if (event.clientX < (window.innerWidth / 3)) {
// 				focus[i].classList.add("mFocus");
// 			}
// 			else if (event.clientX > (window.innerWidth * 0.66)) {
// 				focus[i].classList.add("sFocus");
// 			}
// 			else {
// 				focus[i].classList.remove("mFocus", "sFocus");
// 			}
// 		}
// 	}
// })();