<section class="w-5/12 h-1/3">
    <div id="carousel" class="carousel slide carousel-fade carousel-dark w-full h-full p-3 px-8 relative border-8 border-modern_white_smoke border-opacity-25 bg-modern_white_smoke bg-opacity-80" data-bs-ride="carousel">
        <h1 class="text-5xl font-bebas drop-shadow-xl artist_title text-center">Artists of the day</h1>
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4 ">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <?php for ($i = 1; $i < count($randArticles); $i++) { ?>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="<?= $i ?>" aria-label="Slide <?= $i ?>"></button>
            <?php } ?>
        </div>

        <div class="carousel-inner w-full h-full relative overflow-hidden object-contain object-center m-1">
        <?php foreach ($randArticles as $article) { ?>
            <div class="carousel-item relative float-left w-full min-h-fit h-full max-h-[700px] object-contain object-center">
                <img src="../../../image/<?= $article['imgofn'] ?>" class="object-contain object-center w-full h-full max-h-full" alt="" />
                <div class="carousel-caption hidden md:block absolute text-center ">
                    <a href="artist_details.php?artist=<?= $article['id'] ?>">
                        <p class="bg-modern_light_blue hover:bg-modern_blue text-modern_white_smoke font-bungee py-3 px-6 rounded-xl"><?= $article['name'] ?></p>
                    </a>
                </div>
            </div>
        <?php } ?>
        </div>

        <button class="carousel-control-prev absolute top-0 bottom-0 left-[-5%] flex items-center justify-center p-0 text-center border-0 outline-none no-underline"
        type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next absolute top-0 bottom-0 right-[-5%] flex items-center justify-center p-0 text-center border-0 outline-none no-underline"
        type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
<script>
    document.querySelector('.carousel-item').classList.toggle('active');
</script>
</section>