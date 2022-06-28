<?php
require_once('../common/pdo.php');
?>
<!-- Tailwind Elements -->
<script src="../../../node_modules/tw-elements/dist/js/index.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../img/index.ico">
    <title>Comiclopedia</title>
    <link rel="stylesheet" href="../../../dist/output.css">
</head>

<body>
    <div class="page_content">
        <?php require_once('../../components/header.html'); ?>
        <?php require_once('../../components/search_bar.html'); ?>

        <article class="">
            <section class="text-center">
                <h1 class="font-bold text-lg font-roboto">
                    Welcome to the Comiclopedia, an illustrated compendium of over 14,000 comic
                    artists from around the world. Find your favorite artists, or discover new
                    ones!
                </h1>
                <br>
                <h2 class="text-base font-roboto">
                    Online since 1 November 1999, the Comiclopedia is the world's largest overview
                    of comic artists, and the brainchild of comic shop Lambiek's founder Kees
                    Kousemaker (1942-2010). Kees was at the vanguard of promoting comics as art,
                    and both the Lambiek store and the website are continuing in his spirit. The
                    editors/writers of the Comiclopedia are Bas Schuddeboom and Kjell Knudde.
                    Please contact them for corrections or additions.

                    Also visit: Lambiek's overview of Dutch Comics History (in Dutch) The history
                    of Europe's oldest comics shop: The Story of Lambiek (in English and Dutch)
                </h2>
                <br>
                <h2 class="text-base font-roboto">Also visit:
                    Lambiek's overview of Dutch Comics History (in Dutch)
                    The history of Europe's oldest comics shop: The Story of Lambiek (in English and Dutch)</h2>
            </section>
        </article>

        <!-- Artists of the day tailwind caroussel-->
        <section id="carouselExampleCaptions" class="carousel slide relative carousel-fade" data-bs-ride="carousel">

            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4 ">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner relative w-full overflow-hidden">
                <!-- Artist 1 -->
                <div class="carousel-item active relative float-left w-full">
                    <!-- Image link komt later -->
                    <img src="https://www.lambiek.net/artists/image/l/lee_s/lee_s_ams97.jpg" class="block object-cover w-full h-5/6 max-h-full" alt="" />
                    <div class="carousel-caption hidden md:block absolute text-center ">
                        <!-- Placeholder name voor nu -->
                        <form action="#">
                            <input type="submit" value="Stan Lee" class=" bg-modern_light_blue hover:bg-modern_blue text-modern_white_smoke font-bungee py-3 px-6 rounded" />
                        </form>
                    </div>
                </div>
                <!-- Artist 2 -->
                <div class="carousel-item relative float-left w-full">
                    <!-- Image link komt later -->
                    <img src="https://www.lambiek.net/artists/image/a/adams_n/adams_batman_odyssey.jpg" class="block object-cover w-full h-5/6 max-h-full" alt="" />
                    <div class="carousel-caption hidden md:block absolute text-center ">
                        <!-- Placeholder name voor nu -->
                        <form action="#">
                            <input type="submit" value="Neal Adams" class=" bg-modern_light_blue hover:bg-modern_blue text-modern_white_smoke font-bungee py-3 px-6 rounded" />
                        </form>
                    </div>
                </div>
                <!-- Artist 3 -->
                <div class="carousel-item relative float-left w-full">
                    <!-- Image link komt later -->
                    <img src="https://www.lambiek.net/artists/image/h/herge/herge_tintin160147.jpg" class="block object-cover w-full h-5/6 max-h-full" alt="" />
                    <div class="carousel-caption hidden md:block absolute text-center ">
                        <!-- Placeholder name voor nu -->
                        <form action="#">
                            <input type="submit" value="Hergé" class=" bg-modern_light_blue hover:bg-modern_blue text-modern_white_smoke font-bungee py-3 px-6 rounded" />
                        </form>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </section>



        <?php require_once('../../components/alphabet_bar.php'); ?>
        <?php require_once('../../components/footer.html') ?>
    </div>
</body>

</html>