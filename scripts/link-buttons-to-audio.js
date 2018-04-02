var buttons = document.getElementsByTagName("button");
for (i=0, ii=buttons.length; i<ii; i++) {
    var source = document.querySelector("source[src='audio/"+buttons[i].innerHTML+".wav']"); // Find corresponding source element with src attribute the same as innerHTML of button
    if (source) { // If there is a corresponding source, add an event listener for the button to play the corresponding audio
        buttons[i].addEventListener("click", function() {
            document.querySelector("source[src='audio/"+this.innerHTML+".wav']").parentElement.play();
        });
    }
    // document.querySelectorAll('button').forEach((el) => {
  //    el.setAttribute('data-audio', `${el.textContent}.wav`);
  //  });
}
