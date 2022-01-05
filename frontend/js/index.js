var SlideIndex = 0;
showSlides();

function showSlides(){
    var i;
    var slides = document.getElementsByClassName("slide");
    for (i=0 ; i<slides.length ; i++){
        slides[i].style.display = "none";
    }
    SlideIndex++;
    if (SlideIndex > slides.length){
        SlideIndex = 1
    }
    slides[SlideIndex-1].style.display = "flex";
    setTimeout(showSlides, 6000);
}