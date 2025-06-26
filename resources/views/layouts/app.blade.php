<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce App</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container">
        <nav class="bg-blue-800">
            <nav p class="p-4">
                <div class="container mx-auto flex justify-between">
                    <a href="/" class="text-white font-bold">Ecommerce App</a>
                    @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" type="submit" class="text-white">Logout</button>
                    </form>
                    @endif
                </div>
            </nav>
        </nav>
        <main class="container mx-auto mt-8">
            @yield('content')
        </main>
    </div>
</body>

</html>