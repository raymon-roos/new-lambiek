onload;

var images = document.querySelectorAll("#comiclopedia_article img");
for (const image of images) {
    image.src = image.src.replace("http://lam.bit", "https://lambiek.net");
}
