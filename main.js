var firstIndex=0;
function automaticSlides(){
    setTimeout(automaticSlide,2000);
    }
    var pic;
    const images=query.selectorAll("images");
    for(pic=0;pic<images.length;pic++)
    img[pic].style.display="none";
firstIndex++;
if(firstIndex >img.length){
    firstIndex=1;
}
img[firstIndex -1].style.display="block";
automaticSlides();