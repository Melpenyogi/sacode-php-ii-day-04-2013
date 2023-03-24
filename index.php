<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran SaCode</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

    <!-- HEADER STAR -->
    <header class="border-2 m-5 p-5 shadow-md bg-white">
        <h1 class="text-3xl font-bold">Pendaftaran kursus SaCode</h1>
        <P class="text-xs text-gray-500">Silakan lengkapi folmulir dengan baik dan benar</P>
    </header>
    <!-- HEADER END -->

    <!-- MAIN CONTEN START -->
    <section class="border-2 m-5 p-5 shadow-md bg-white">

        <?php
        // integrasi form tambah
        include('form-tambah.php')
        ?>

    </section>
    <!-- MAIN CONTEN END -->
    <footer class="border-2 m-5 p-5 shadow-md bg-white">
        <p class="text-gray-500 text-xt">Copyright &copy 2023, desaing by <b>Melpen Penyo Yogi</b></p>
    </footer>
    <!-- FOOTER START -->

    <!-- FOOTER END -->

</body>

</html>