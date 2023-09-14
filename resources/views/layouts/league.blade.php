<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liga de Fútbol</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

</head>

<body class="bg-gray-100">

    <header class="bg-blue-600 text-white p-6">
        <div class="container mx-auto">
            <div class="flex justify-between items-center space-x-4">
                <h1 class="text-3xl font-semibold">Football League</h1>
                <nav class="space-x-4">
                    <a href="{{route('home')}}" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">...</svg>
                        Home
                    </a>
                    <a href="{{route('teams.index')}}" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">...</svg>
                        Teams
                    </a>
                    <a href="{{route('teams.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                        Create Team
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="container mx-auto p-4 my-6">
        @yield('content')
    </main>

    <!-- Footer o Pie de página -->
    <footer class="bg-blue-600 text-white p-4 text-center">
        <p>your football &copy; 2023</p>
    </footer>

</body>

</html>

