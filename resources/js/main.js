let navBar= document.querySelector("#mainNav");

window.addEventListener("scroll", ()=>{
    if (window.scrollY > 150) {
    navBar.style.top = "-150px";
  } else {
    navBar.style.top = "0";
  }
});