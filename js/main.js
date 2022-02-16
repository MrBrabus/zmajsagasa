const body = document.querySelector("body");
const navbar = document.querySelector(".navbar-main");
const menuBtn = document.querySelector(".menu-btn-main");
const cancelBtn = document.querySelector(".cancel-btn-main");

menuBtn.onclick = ()=>{
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
  body.classList.add("disabled");
}

cancelBtn.onclick = ()=>{
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}

window.onscroll = ()=>{
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}