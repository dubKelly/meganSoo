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
function filterPath(string) {
  return string
    .replace(/^\//, '')
    .replace(/(index|default).[a-zA-Z]{3,4}$/, '')
    .replace(/\/$/, '');
}

var locationPath = filterPath(location.pathname);
$('a[href*="#"]').each(function () {
  var thisPath = filterPath(this.pathname) || locationPath;
  var hash = this.hash;
  if ($("#" + hash.replace(/#/, '')).length) {
    if (locationPath == thisPath && (location.hostname == this.hostname || !this.hostname) && this.hash.replace(/#/, '')) {
      var $target = $(hash), target = this.hash;
      if (target) {
        $(this).click(function (event) {
          console.log(this);
          console.log(thisPath);
          console.log(hash);
          event.preventDefault();
          $('html, body').animate({scrollTop: $target.offset().top}, 1000, function () {
            location.hash = target; 
            $target.focus();
            if ($target.is(":focus")){ //checking if the target was focused
              return false;
            }else{
              $target.attr('tabindex','-1'); //Adding tabindex for elements not focusable
              $target.focus(); //Setting focus
            };
          });       
        });
      }
    }
  }
});
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