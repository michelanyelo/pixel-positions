<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#060606] text-white font-grotesk pb-20">
<div class="px-10">
    <nav class="flex justify-between items-center p-4 border-b border-white/10 relative">
        <!-- Logo -->
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo" class="h-10">
            </a>
        </div>

        <!-- Menú en pantallas grandes -->
        <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-6 font-bold">
            <a href="">Trabajos</a>
            <a href="">Carreras</a>
            <a href="">Salarios</a>
            <a href="">Empresas</a>
        </div>

        <!-- Botón Hamburguesa en móviles -->
        <button id="menu-btn" class="md:hidden text-white">
            ☰
        </button>

        <!-- Menú desplegable en móviles -->
        <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-[#060606] p-4 space-y-4 md:hidden">
            <a href="" class="block">Trabajos</a>
            <a href="" class="block">Carreras</a>
            <a href="" class="block">Salarios</a>
            <a href="" class="block">Empresas</a>
        </div>

        <!-- Elementos de autenticación -->
        <div class="hidden md:flex space-x-6 font-bold text-sm items-center">
            <a href="/jobs/create">Publica un trabajo</a>
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="p-2 border border-white rounded-md hover:bg-white hover:text-black transition duration-300">
                        Cerrar sesión
                    </button>
                </form>
            @endauth
            @guest
                <a href="/login">Iniciar sesión</a>
                <a href="/register"
                   class="p-2 border border-white rounded-md hover:bg-white hover:text-black transition duration-300">
                    Registrarse
                </a>
            @endguest
        </div>
    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</div>

<!-- Script para el menú hamburguesa -->
<script>
    document.getElementById('menu-btn').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
</body>
</html>

