
var variable;
var opt=document.querySelector('.options');
var optionsList = document.querySelectorAll('.buttons');

optionsList.forEach(function(option){
option.addEventListener('click', function(e){
//class name of the clicked element;

if(variable!=null){
   variable.target.style="null";
}
   opt.classList.remove("activeButton");
   variable = e;
   e.target.style.width="120%";
   e.target.style.background="url(picture1.png) no-repeat";
   e.target.style.color="white";
   e.target.style.backgroundSize="contain";
});
});



document.getElementById('sign-up').addEventListener('click', function(e){
  document.getElementById('register').style.display='block';
  document.getElementById('signup').style.display='block';
  document.getElementById('signin').style.display='none';
    document.getElementById('contact-us').style.display='none';
});

document.getElementById('log-in').addEventListener('click', function(e){
  document.getElementById('register').style.display='block';
   document.getElementById('signup').style.display='none';
  document.getElementById('signin').style.display='block';
    document.getElementById('contact-us').style.display='none';
});


document.getElementById('contact').addEventListener('click', function(e){
  document.getElementById('register').style.display='block';
   document.getElementById('signup').style.display='none';
   document.getElementById('signin').style.display='none';
  document.getElementById('contact-us').style.display='block';
});



//---------------------------------------- [ SLIDER KA CODE] ----------------------------------------------------------//

var index=2;        //image number
function move(n)      //button click hone pe increment or decrement karega
{
  index = index + n;
  showimage(index);

}


// pehle sari images ko remove karega phir node list me se 1 nikal k usko display karega ye function
// ----------------------------------------------------------------------------------------------

function showimage(n)
{ 

   var sliders = document.querySelectorAll(".slides");
   if(n>sliders.length){ index = 1 ; }
   if(n < 1 ) { index = sliders.length;}
   for(var i=0;i< sliders.length;i++)
   {
    sliders[i].style.display = "none"
   }

   sliders[index-1].style.display= "block";


}

// Settimeout wala function use kara hai jo 1 function call karta rehta hui time interval k bad


autoslide();

function autoslide()
{
  var sliders = document.querySelectorAll(".slides");

  for(var i=0;i< sliders.length;i++)
  {
     sliders[i].style.display = "none"
  }

  if(index>sliders.length){ index = 1 ; }

  sliders[index-1].style.display= "block";
  index++;
  setTimeout(autoslide,2000);
}

//----------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------


var slideIndex = 1;
showDivs(slideIndex);

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("packageinfo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
