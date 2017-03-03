function callColorizeText(e) {
    console.log("function was called.");
    var editableDiv = e.target;
    var xmlhttp = new XMLHttpRequest();
    var data = new FormData();
    data.append("textToColorize", editableDiv.innerHTML);

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            editableDiv.innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST", "scripts/colorize-text.php");
    xmlhttp.send(data);
}

var editableDiv = document.querySelector("div[contenteditable]");
editableDiv.addEventListener("keyup", callColorizeText);
