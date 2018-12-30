// head bar
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("heading").style.top = "-100px";
    document.getElementsByClassName("next")[0].style.opacity="1";
    document.getElementsByClassName("prev")[0].style.opacity="1";
  } else {
    document.getElementById("heading").style.top = "0";
    document.getElementsByClassName("next")[0].style.opacity="0";
    document.getElementsByClassName("prev")[0].style.opacity="0";
    document.getElementById("loginpage").style.display="none";
  }
  prevScrollpos = currentScrollPos;
}
// gallery 
var slide = document.getElementById("header");
showSlide(1);
slide_index=1;
function showSlide(n){
    if(n==1)
    {   
    	slide_index=1;
    	slide.style.backgroundImage="url('ama_dablam_himalaya_mountains-wide.jpg')";
    	slide.style.backgroundSize="cover";
    }
    else if(n==2)
    {
    	slide_index=2;
    	slide.style.backgroundImage="url('atlantis_the_palm_dubai-1280x720.jpg')";
        slide.style.backgroundSize="cover";
    }
    else
    {
        slide_index=3;
    	slide.style.backgroundImage="url('saint_basils_cathedral-1920x1200.jpg')";
        slide.style.backgroundSize="cover";
    }
} 
function addslide(n)
{
   if(slide_index+n>=3)
   {
   	   showSlide(3);
   }
   else if(slide_index+n<=1)
   {
       showSlide(1);
   }
   else{
   	   showSlide(2);
   }
}
//login page 
function fun(){
	document.getElementById("im").style.display="block";
	document.getElementById("user-name").style.display="block";
}
function loginpage(){
  document.getElementById("loginpage").style.display="block";
}