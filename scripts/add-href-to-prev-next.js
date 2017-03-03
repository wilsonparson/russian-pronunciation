var URLFrags = (window.location.href).split("/");
var relativeURL = URLFrags[URLFrags.length-1];
var navs = document.getElementsByTagName('nav');
var navOL = navs[0].getElementsByTagName('ol')[0];
var nextPrev = navs[1];
var prev = nextPrev.firstElementChild;
var next = nextPrev.lastElementChild;
var curPageOlItem = document.querySelector("nav > ol > a[href*='"+relativeURL+"']");

// Remove < Prev link if on first page
if (curPageOlItem == null || curPageOlItem.getAttribute("href") == "index.php") {
    prev.style.display = "none";
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
