const btn = document.querySelector(".btn");
const elements = document.querySelectorAll(".body_light");
let bool = true;

btn.addEventListener('click', function() {
  for (var i = 0; i < elements.length; i++) {	
			 elements[i].classList.toggle("body_dark");
  }
  if(bool == true){
     btn.innerHTML = "Dark/Light";
     bool = false;
  }else{
     btn.innerHTML = "Light/Dark";
     bool = true;  
  }
});