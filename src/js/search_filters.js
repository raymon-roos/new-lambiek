let filterCheckboxes = document.querySelectorAll("#search_filter_buttons_container input[type=checkbox]");
let filterLabels = document.querySelectorAll("#search_filter_buttons_container label");

filterLabels.forEach(clickableFilter => {
    clickableFilter.addEventListener("click", clickFilter);
});

function clickFilter(clicked) {
    console.log("clicked on a filter");
    clicked.style.border = "1px solid blue";
}
