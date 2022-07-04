<section class="w-full">
    <div id="carousel" class="padding_element carousel slide carousel-fade carousel-dark relative border-8 border-modern_white_smoke border-opacity-25 bg-modern_white_smoke bg-opacity-80" data-bs-ride="carousel">
        <h1 class="text-5xl font-bebas drop-shadow-xl artist_title text-center">Artists of the day</h1>
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4 ">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>

        <div class="carousel-inner relative w-full overflow-hidden">
        <?php foreach ($randArticles as $article) { ?>
            <div class="carousel-item relative float-left w-full">
                <img src="https://www.lambiek.net/artists/image/<?= $article['imgofn'] ?>" class="object-cover w-96 h-96" alt="" />
                <div class="carousel-caption hidden md:block absolute text-center ">
                    <a href="artist_details.php?artist=<?= $article['id'] ?>">
                        <p class="bg-modern_light_blue hover:bg-modern_blue text-modern_white_smoke font-bungee py-3 px-6 rounded-xl"><?= $article['name'] ?></p>
                    </a>
                </div>
            </div>
        <?php } ?>
        </div>

        <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
<script>
    document.querySelector('.carousel-item').classList.toggle('active');
</script>
</section>