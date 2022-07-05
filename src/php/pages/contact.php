<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../../../dist/output.css">
    <link rel="stylesheet" href="../../css/input.css">
</head>

<body>
    <div class="page_content">

    <?php require_once('../../components/header.html'); ?>

    <div class="h-full">
        <div class="mx-auto w-full max-w-lg">
            <h1 class="text-4xl font-medium">Neem contact op</h1>
            <p class="mt-3">Vragen of opmerkingen over de comiclopedia? Stuur ons een bericht:</p>

            <form action="" class="p-14 bg-modern_white_smoke bg-opacity-40 rounded-xl shadow-xl">
                <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />
                <div class="grid gap-6 sm:grid-cols-2">
                    <div class="relative z-0">
                        <input type="text" name="name" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                        <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Naam</label>
                    </div>
                    <div class="relative z-0">
                        <input type="text" name="email" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                        <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">E-mail</label>
                    </div>
                    <div class="relative z-0 col-span-2">
                        <textarea name="message" rows="5" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" "></textarea>
                        <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Bericht</label>
                    </div>
                </div>
                <button type="submit" class="mt-5 rounded-md bg-black px-10 py-2 text-white">Verstuur bericht</button>
            </form>
        </div>

    </div>
    <?php require_once('../../components/footer.html') ?>
</div>
</body>

</html>