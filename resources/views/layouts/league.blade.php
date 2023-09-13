<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liga de Fútbol</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <header class="bg-blue-600 text-white p-6">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold">Football League</h1>
                <a href="{{route('teams.index')}}" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 9.293a1 1 0 011.414 0L12 12.586V3a1 1 0 112 0v9.586l3.293-3.293a1 1 0 011.414 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    Come back
                </a>
                <div class="text-center">
        <a href="{{route('teams.create')}}" 
            class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-300">
            Create Team
        </a>
    </div>
            </div>
        </div>
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
