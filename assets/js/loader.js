document.addEventListener("DOMContentLoaded", () => {
    const bar = document.getElementById("loaderBar");
    const percent = document.getElementById("loaderPercent");
    const step1 = document.getElementById("step1");
    const step2 = document.getElementById("step2");
    const step3 = document.getElementById("step3");
    const loader = document.getElementById("siteLoader");

    if (!loader) return;

    let i = 0;
    if (bar) bar.style.width = "100%";

    const interval = setInterval(() => {
        i++;
        if (percent) percent.textContent = i + "%";

        if (i === 30 && step1) step1.classList.remove("opacity-0");
        if (i === 65 && step2) step2.classList.remove("opacity-0");

        if (i === 100) {
            if (step3) step3.classList.remove("opacity-0");
            clearInterval(interval);

            setTimeout(() => {
                if (loader) loader.classList.add("opacity-0", "transition-opacity", "duration-700");
                setTimeout(() => { if (loader) loader.remove(); }, 700);
            }, 1000);
        }
    }, 35);
});
