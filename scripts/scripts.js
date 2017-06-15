(function landFocus() {
	var landFocus = document.getElementsByClassName("landFocus");
	document.onmousemove = function mouseX(event) {
		for (var i = landFocus.length - 1; i >= 0; i--) {
			if (event.clientX < (window.innerWidth / 3)) {
				landFocus[0].classList.add("focus");
				landFocus[1].classList.add("focus");
				landFocus[2].classList.add("mFocus");
				landFocus[3].classList.add("outFocus");
			}
			else if (event.clientX > (window.innerWidth * 0.66)) {
				landFocus[0].classList.add("outFocus");
				landFocus[2].classList.add("sFocus");
				landFocus[3].classList.add("focus");
				landFocus[4].classList.add("focus");
			}
			else {
				landFocus[0].classList.remove("focus");
				landFocus[0].classList.remove("outFocus");
				landFocus[1].classList.remove("focus");
				landFocus[2].classList.remove("mFocus");
				landFocus[2].classList.remove("sFocus");
				landFocus[3].classList.remove("focus");
				landFocus[3].classList.remove("outFocus");
				landFocus[4].classList.remove("focus");
			}
		}
	}
})();