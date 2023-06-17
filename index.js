const id = document.getElementById("id");
const pass = document.getElementById("password");

// adding event listeners...
id.addEventListener("focus", focusContent);
id.addEventListener("blur", blurContent);
pass.addEventListener("focus", focusContent);
pass.addEventListener("blur", blurContent);
const elementArr = [id, pass];
setTimeout(function () {
  elementArr.forEach(function (element) {
    element.value = "";
    element.focus();
    element.blur();
  });
}, 600);

function focusContent(e) {
  e.target.previousElementSibling.classList.add("input-focus");
  e.target.parentElement.classList.add("focus-elem");
}

function blurContent(e) {
  e.target.parentElement.classList.remove("focus-elem");
  if (e.target.value != "") return;
  e.target.previousElementSibling.classList.remove("input-focus");
}
