(function formVerify() {

  var input = document.getElementsByClassName("input");
  var submit = document.getElementsByClassName("submit")[0];
  var error = document.getElementsByClassName("error")[0];

  function emailVerify(email) {
    var regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regEx.test(email);
  }

  submit.onclick = function(event) {
    for (var i = input.length - 1; i >= 0; i--) {
      if (input[i].value.length === 0) {
        event.preventDefault();
        input[i].style.border = "2px solid rgba(199, 0, 57, 1)";
      }
      else if (input[1].value.length > 1 && emailVerify(input[1].value) === false) {
        event.preventDefault();
        input[i].style.border = "";
        input[1].style.border = "2px solid rgba(199, 0, 57, 1)";
        error.innerHTML = "* Invalid email address";
      }
      else {
        input[i].style.border = "";
      }
    }
  }
})();