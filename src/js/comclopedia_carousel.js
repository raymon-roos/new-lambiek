let carouselChildren = document.querySelectorAll("#carousel div");

filterLabels.forEach(carouselChildren => {
    clickableFilter.addEventListener("click", function () {
        clickableFilter.classList.toggle("bg-modern_light_blue");
        clickableFilter.classList.toggle("text-modern_white_smoke");
        clickableFilter.classList.toggle("font-bold");
        filterToggleID = clickableFilter.getAttribute("for");
    });
});
