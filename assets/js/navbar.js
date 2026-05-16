document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("mobileToggle");
    const menu = document.getElementById("mobileMenu");

    if (btn && menu) {
        btn.addEventListener("click", () => {
            menu.classList.toggle("opacity-0");
            menu.classList.toggle("invisible");
            menu.classList.toggle("-translate-y-3");
            menu.classList.toggle("scale-95");
        });
    }
});
