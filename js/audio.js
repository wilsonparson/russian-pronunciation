---
---

appendAudioElements();

function appendAudioElements() {
  let fragment = document.createDocumentFragment();
  document.querySelectorAll('[data-audio]').forEach((element) => {
    let audioSrc = '{{site.baseurl}}/audio/' + element.getAttribute('data-audio');
    element.addEventListener('click', () => {
      document.querySelector(`audio[src="${audioSrc}"]`).play();
    });

    let audio = document.createElement('audio');
    audio.setAttribute('src', audioSrc);
    audio.setAttribute('preload', 'auto');
    fragment.appendChild(audio);
  });
  document.body.appendChild(fragment);
}
