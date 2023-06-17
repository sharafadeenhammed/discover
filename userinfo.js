const elements = document.querySelectorAll(".input-border");
const elementArr = Array.from(elements);

// adding event listeners...

setTimeout(function () {
  elementArr.forEach((elem) => {
    elem.addEventListener("focus", focusContent);
    elem.addEventListener("blur", blurContent);
  });
  elementArr.forEach(function (element) {
    element.value = "";
    element.focus();
    element.blur();
    // console.log(elem);
  });
}, 600);

function focusContent(e) {
  e.target.classList.add("focus-elem");
}

function blurContent(e) {
  e.target.classList.remove("focus-elem");
  if (e.target.value != "") return;
}
