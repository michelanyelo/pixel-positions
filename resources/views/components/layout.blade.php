<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#060606] text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center p-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Trabajos</a>
                <a href="">Carreras</a>
                <a href="">Salarios</a>
                <a href="">Empresas</a>
            </div>
            <div>
                <a href="">Publica un trabajo</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
