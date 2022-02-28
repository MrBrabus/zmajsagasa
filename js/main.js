const body = document.querySelector("body");
const navbar = document.querySelector(".navbar-main");
const menuBtn = document.querySelector(".menu-btn-main");
const cancelBtn = document.querySelector(".cancel-btn-main");
menuBtn.onclick = () => {
	navbar.classList.add("show");
	menuBtn.classList.add("hide");
	body.classList.add("disabled");
}
cancelBtn.onclick = () => {
	body.classList.remove("disabled");
	navbar.classList.remove("show");
	menuBtn.classList.remove("hide");
}
window.onscroll = () => {
	this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}

document.addEventListener("mousemove", parallax);

function parallax(e) {
	this.querySelectorAll('.layer').forEach(layer => {
		const speed = layer.getAttribute('data-speed')
		const x = (window.innerWidth - e.pageX * speed) / 100
		const y = (window.innerHeight - e.pageY * speed) / 100
		layer.style.transform = `translateX(${x}px) translateY(${y}px)`
	});
}
