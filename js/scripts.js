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

(function smoothScroll() {
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
            // console.log(this);
            // console.log(thisPath);
            // console.log(hash);
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
})();

(function categoryFilter() {
  
  var categories = document.getElementsByClassName("categories");
  var galleryCont = document.getElementsByClassName("galleryCont")[0];
  var gallery = document.getElementsByClassName("gallery");
  var line = document.getElementsByClassName("underline")[0];
  var current = ["add"];
  // var selected = [];
  // var posBefore;
  // var posAfter = [];

  function hasClass(element, cls) {
    return ('' + element.className + '').indexOf('' + cls + '') > -1; 
  }

  for (var i = categories.length - 1; i >= 0; i--) {
    categories[i].onclick = function() {
      line.classList.remove(current.pop());
      next = this.getAttribute("data-type");
      current = [next];
      line.classList.add(next);
      for (var i = gallery.length - 1; i >= 0; i--) {
        if (hasClass(gallery[i], next) === false) {
          gallery[i].classList.add("hide");
          // posBefore = gallery[i].getBoundingClientRect();
        }
        else {
          gallery[i].classList.remove("hide");
        }
      }
      // for (var i = gallery.length - 1; i >= 0; i--) {      
      //   if (hasClass(gallery[i], "hide") === false) {
      //     posAfter.push(this.getBoundingClientRect());
      //     console.log(posAfter);
      //     selected.push(gallery[i])
      //     gallery[i].parentNode.parentNode.appendChild(gallery[i]);
      //   }
      //   else {
      //     gallery[i].classList.remove("hide");
        // }
      // }
    }
  }
})();

(function galleryEnlarge() {

  var gallery = document.getElementsByClassName("gallery");
  var enlarge = document.getElementsByClassName("enlarge")[0];
  var fullScreen = document.getElementsByClassName("fullScreen");
  // var exit = document.getElementsByClassName("exitFullScreen")[0];

  for (var i = gallery.length - 1; i >= 0; i--) {
    gallery[i].onclick = function() {
      enlarge.style.backgroundImage = "url('" + this.getAttribute("src") + "')";
      for (var i = fullScreen.length - 1; i >= 0; i--) {
        fullScreen[i].classList.add("open");
        fullScreen[2].onclick = function() {
          for (var i = fullScreen.length - 1; i >= 0; i--) {
            fullScreen[i].classList.remove("open");
          }
        }
      }
    }
  }
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