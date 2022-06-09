let filterLabels = document.querySelectorAll("#search_filter_buttons_container label");

filterLabels.forEach(clickableFilter => {
    clickableFilter.addEventListener("click", function () {
        clickableFilter.classList.toggle("bg-modern_light_blue");
        // clickableFilter.classList.toggle("text-modern_white_smoke");
        // clickableFilter.classList.toggle("font-bold");
        filterToggleID = clickableFilter.getAttribute("for");
    });
});
