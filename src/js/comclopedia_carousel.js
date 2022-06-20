document.onload;

document.querySelector("#carouselChild1").classList.replace("[display:none]", "selected");

let classes = ["[display:none]", "selected"];

document.querySelector("#chevronRight").addEventListener("click", function () {
    let currentChild = document.querySelector(".selected");
    if (currentChild.nextElementSibling) {
        classes.forEach(className => {
            currentChild.classList.toggle(className);
            currentChild.nextElementSibling.classList.toggle(className);
        });
    }
});

document.querySelector("#chevronLeft").addEventListener("click", function () {
    let currentChild = document.querySelector(".selected");
    if (currentChild.previousElementSibling) {
        classes.forEach(className => {
            currentChild.classList.toggle(className);
            currentChild.previousElementSibling.classList.toggle(className);
        });
    }
});
