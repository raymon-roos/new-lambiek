<div id="updatedArticlesContainer" 
    class="flex flex-col justify-center items-center w-1/2 my-2 mx-auto bg-modern_dark_blue text-modern_white_smoke shadow-xl">
    <h1>Recently updated articles:</h1>
    <div id="carouselContainer" class="flex flex-row justify-between items-center w-full">
        <svg id="chevronLeft" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" 
            stroke-width="2" viewBox="0 0 451.847 451.847" 
            class="w-10 h-30 py-[200px] mx-6 text-modern_light_blue hover:text-modern_white_smoke">
            <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"/>
        </svg>
        <div id="carousel" class="select-none bg-modern_white_smoke text-comic_blue w-[220px] h-fit] p-2 shadow-inner" >
            <?php $i = 1; 
            foreach ($updatedArticles as $article) { ?>
                <div id="carouselChild<?= $i++ ?>" class="[display:none]" >
                    <a href="artist_details.php?name=<?= $article['lastname'] ?>" 
                        class="flex flex-col items-center">
                            <?php if ($article['altpics'] == 'comicolopedia') {
                                $imgURI = str_replace(['.html', '.htm'], '/', $article['link']) . $article['imgofn']; ?>
                            <img src="https://lambiek.net/artists/image/<?= $imgURI ?>" alt=" something went wrong " width="80%" height="80%">
                            <?php } else { ?>
                            <img src="https://lambiek.net/artists/image/<?= $article['imgofn'] ?>" alt="" width="80%" height="80%">
                            <?php } ?>
                        <h4 class="flex-wrap break-inside-auto mt-6"><?= $article['name'] ?></h4>
                    </a>
                </div>
            <?php } ?> 
        </div>
        <svg id="chevronRight" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" 
            stroke-width="2" viewBox="0 0 185.343 185.343"
            class="w-10 h-30 py-[200px] mx-6 text-modern_light_blue hover:text-modern_white_smoke">
            <path d="M51.707,185.343c-2.741,0-5.493-1.044-7.593-3.149c-4.194-4.194-4.194-10.981,0-15.175
            l74.352-74.347L44.114,18.32c-4.194-4.194-4.194-10.987,0-15.175c4.194-4.194,10.987-4.194,15.18,0l81.934,81.934
            c4.194,4.194,4.194,10.987,0,15.175l-81.934,81.939C57.201,184.293,54.454,185.343,51.707,185.343z"/>
        </svg>
    </div>
</div>
<script src="../../js/comclopedia_carousel.js"></script>

