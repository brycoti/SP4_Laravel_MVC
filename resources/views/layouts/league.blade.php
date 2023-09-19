<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('ball.png') }}" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white">

    <header class="bg-blue-600 text-white p-6 ">
        <div class="container mx-auto">
            <div class="flex justify-between items-center space-x-4">
            <a href="{{route('home')}}" class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300 text-center">
            <h1 class="text-3xl font-semibold">Football League</h1>
                    </a>    
            
            
                <nav class="space-x-4">
                    
                    <a href="{{route('teams.index')}}" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300 text-center">
                        Teams
                     </a>
                    <a href="{{route('teams.create')}}" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300 text-center">
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
        <p>Your football league &copy; IT Academy project 2023</p>
    </footer>

</body>

</html>

