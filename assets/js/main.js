var loader;

function loadNow(opacity) {
  if (opacity <= 0) {
    displayContent();
  } else {
    loader.style.opacity = opacity;
    window.setTimeout(function () {
      loadNow(opacity - 1);
    }, 1500);
  }
}

function displayContent() {
  loader.style.display = 'none';
  document.getElementById('content').style.display = 'block';
}

document.addEventListener("DOMContentLoaded", function () {
  loader = document.getElementById('loader');
  loadNow(1);
});

// fitur search

function highlight(element, string, search, originalString) {
  if (search.length > 0) {
    let regex = new RegExp(search, "g");
    newString = string.replace(regex, "<span class='highlight'>" + search + "</span>")
    element.innerHTML = newString;
  } else {
    element.innerHTML = originalString;
  }
}

const content = document.getElementById("content");
const searchInput = document.getElementById("searchInput");
const seacrchBtn = document.getElementById("searchBtn");

// persiapan kalau tidak mencari apapun
let originalContent = content.innerText

// jalankan saat di klik
seacrchBtn.addEventListener("click", function () {
  highlight(content, content.innerText, searchInput.value, originalContent)
});