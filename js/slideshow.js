var slideIndex = 0;
showSlide(slideIndex);


function slideFlick(n) {
  showSlide(slideIndex += n);
}

function currentSlide(n) {
  showSlide(slideIndex = n);
}

function resetSlides(s){
  for (i = 0; i < s.length; i++) {
    s[i].style.display = "none";
  }
}

function showSlide(n) { //Shows slide n and hides all the others
  var i;
  var slides = document.getElementsByClassName("slides");


  if (n > slides.length-1){
    slideIndex = 0 //Go from index 2 to 0
  } else if (n < 0){
    slideIndex = slides.length-1 //Go from index 0 to 2
  }

  resetSlides(slides); //Resets all slides to display: none so that they are hidden

  slides[slideIndex].style.display = "block";// Sets the selected slide to be visible
}

function learnMore(){ //Scrolls the page down just enough to scroll past the cover slideshow.
  var ss = document.getElementsByClassName('slideshow'); //Get the html element
  var scrollDist = ss[0].offsetHeight + 200; //Get the html elements height
  console.log(scrollDist);
  document.documentElement.scrollTop = scrollDist;
}
