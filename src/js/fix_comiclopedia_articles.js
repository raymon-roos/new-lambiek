onload;

var images = document.getElementsByTagName("img");
for (const image of images) {
    image.src = image.src.replace("http://lam.bit", "https://lambiek.net");
    image.classList.add("inline", "mx-auto", "p-6", "bg-modern_dark_blue", "shadow-xl");
}

var anchors = document.getElementsByTagName("a");
for (const anchor of anchors) {
    anchor.classList.add("text-blue-800", "mx-auto", "w-fit", "inline");
}

var imageContainers = document.querySelectorAll(".cmc-img");
for (const container of imageContainers) {
    container.classList.add("w-fit", "mx-auto", "break-words-auto");
}

// var ems = document.getElementsByTagName("em");
// for (const container of ems) {
//     container.classList.add("w-inherit", "mx-auto", "word-wrap");
// }

var textContainers = document.querySelectorAll(".bodytext");
for (const container of textContainers) {
    container.classList.add("my-8");
}
