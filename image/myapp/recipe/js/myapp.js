(function() {
 'use strict';

var picture = [
  'img/images (2).jpeg',
  'img/images.jpeg',
  'img/images1.jpeg',
  'img/images (1).jpeg',
];

var currentNum = 0;
var prev = document.getElementById('prev');
var next = document.getElementById('next');
var target = document.getElementById('target');
var thumbnail = document.getElementById('thumbnail');
var saisei = document.getElementById('saisei');
var pause = document.getElementById('pause');
var timer;

function createThumbnail() {
  var i;
  var li;
  var img;
  for (i = 0; i < picture.length; i++) {
    li = document.createElement('li');
    li.setAttribute('data-index', i);
    li.addEventListener('click',function() {
      target.src = this.children[0].src;
      thumbnail.children[currentNum].className = '';
      currentNum = this.dataset.index;
      this.className = 'current';
    });

    img = document.createElement('img');
    img.src = picture[i];
    li.appendChild(img);
    thumbnail.appendChild(li);
  }
}

  function saiseiSlideshow() {
    timer = setTimeout(function() {
      next.click();
      saiseiSlideshow();
    }, 3000);
 }

createThumbnail();
thumbnail.children[currentNum].className = 'current';



prev.addEventListener('click',function() {
  thumbnail.children[currentNum].className = '';
  currentNum--;
  if (currentNum < 0){
    currentNum = picture.length - 1;
  }
  target.src = picture[currentNum];
  thumbnail.children[currentNum].className = 'current';

});


next.addEventListener('click', function() {
  thumbnail.children[currentNum].className = '';
  currentNum++;
  if (currentNum > picture.length - 1) {
    currentNum = 0;
  }
  target.src = picture[currentNum];
  thumbnail.children[currentNum].className = 'current';
});

saisei.addEventListener('click',function() {
  saiseiSlideshow()
  this.className = 'hidden';
  pause.className = '';
  });

  pause.addEventListener('click',function() {
    clearTimeout(timer);
    this.className = 'hidden';
    pause.className = '';
  });
})();
