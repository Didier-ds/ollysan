let menuButton = document.getElementById('menu');
let navBar = document.getElementById('responsive-navbar');

function display(){
    if (navBar.style.opacity == 0){
        
        navBar.style.opacity = 1;
        navBar.style.visibility = 'visible';
      
    }
    else {
        navBar.style.opacity = 0
        navBar.style.visibility = 'hidden';
    }
}
/*
function display(){
    if (navBar.style.display === 'none'){
        
        navBar.style.display = 'block';
        
    }
    else (
        
        navBar.style.display = 'none'
    )
}*/
let modal = document.getElementById("myModal");
let imgArr = document.getElementsByTagName('img');
let modalImg = document.getElementById('modalImg');
let span = document.getElementsByClassName("close")[0];
for (let i = 0; i<imgArr.length; i++){
    imgArr[i].onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
    }
}
span.onclick = function() {
    modal.style.display = "none";
  }