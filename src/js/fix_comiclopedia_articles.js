onload;

var images = document.querySelectorAll("#comiclopedia_article img");
for (const image of images) {
    image.src = image.src.replace("http://localhost", "https://lambiek.net");
}

var links = document.querySelectorAll("#comiclopedia_article a");
for (const link of links) {
    link.src = link.src.replace("http://localhost", "https://lambiek.net");
}
