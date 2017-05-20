var URLFrags = (window.location.href).split("/");
var relativeURL = URLFrags[URLFrags.length-1];
var btnPrevPage = document.getElementById('btnPrevPage');
var btnNextPage = document.getElementById('btnNextPage');
var nav_curPage = document.querySelector("#mainNav a[href*='"+relativeURL+"']"); //Will be null on index, because no filename in url

// Remove < Prev link if on first page
if (nav_curPage == null || nav_curPage.getAttribute("href") == "index.php") {
    btnPrevPage.style.display = "none";
}

// remove Next > link if on last page
if (curPageOlItem && curPageOlItem.getAttribute("href") == "practice.php") {
    next.style.display = "none";
}

// Add correct hrefs to prev and next buttons
// Prev
if (prev.style.display != "none") {
    var prevPageOlItem = curPageOlItem.previousElementSibling;
    prev.href = prevPageOlItem.getAttribute("href");
}
// Next
if (next.style.display != "none") {
    var nextPageOlItem = curPageOlItem.nextElementSibling;
    next.href = nextPageOlItem.getAttribute("href");
}

// Find current page number using ol in nav
var curPageIndex = 1;
var curPage = curPageOlItem;
while (curPage.previousElementSibling) {
    curPage = curPage.previousElementSibling;
    curPageIndex += 1;
}
// Add curPageIndex to span at bottom of page
nextPrev.getElementsByTagName("span")[1].innerHTML = curPageIndex;
