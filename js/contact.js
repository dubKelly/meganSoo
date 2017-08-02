(function formVerify() {

  var input = document.getElementsByClassName("input");
  var submit = document.getElementById("submit");

  submit.onclick = function(event) {
    for (var i = input.length - 1; i >= 0; i--) {
      if (input[i].value.length === 0) {
        event.preventDefault();
        input[i].style.border = "1px solid rgba(199, 0, 57, 1)";
      }
      else {
        input[i].style.border = "";
      }
    }
  }
})();