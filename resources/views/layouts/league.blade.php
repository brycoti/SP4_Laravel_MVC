<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liga de Fútbol</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <!-- Header o Cabecera -->
    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-center text-2xl">Liga de Fútbol</h1>
    </header>

    <!-- Contenido Principal -->
    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <!-- Footer o Pie de página -->
    <footer class="bg-blue-600 text-white p-4 text-center mt-4">
        <p>Liga de Fútbol &copy; 2023</p>
    </footer>

</body>

</html>
