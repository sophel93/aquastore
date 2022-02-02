var btn = document.querySelector(".display-more");
var hidden = document.querySelector(".additional-content");

function isHidden(element) {
  return window.getComputedStyle(element).display === "none";
}

btn.addEventListener("click", function() {
    console.log("eventlistener toimii");
  if (isHidden(hidden)) {
    hidden.style.display = "block";
    btn.innerHTML = "Lisätiedot -";
  } else {
    hidden.style.display = "none";
    btn.innerHTML = "Lisätiedot +";
  }
}
);
