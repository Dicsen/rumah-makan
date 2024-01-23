// Toggle class active
const navbarNav = document.querySelector(".navbar-nav");
// Ketika RMBE di klik
document.querySelector("RMBE").onclick = () => {
    navbarNav.classList.toggle("active");
};

// Klik di luar sidebar untuk menghilangkan nav
const sabi = document.querySelector("RMBE");

document.addEventListener("click", function (e) {
    if (!sabi.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove("active");
    }
});
