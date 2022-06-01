let filterLabels = document.querySelectorAll("#search_filter_buttons_container label");

filterLabels.forEach(clickableFilter => {
    clickableFilter.addEventListener("click", function () {
        clickableFilter.style.border = "1px solid blue";
        filterToggleID = clickableFilter.getAttribute("for");
        document.querySelector(`[id="${filterToggleID}"]`).value = "checked";
    });
});
