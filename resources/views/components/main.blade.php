<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4bf9b46335.js" crossorigin="anonymous"></script>
    <title>Movie App</title>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-grey-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li>
                    <a href="#"><span><i class="fa-solid fa-film mx-3"></i>Movie App</span></a>
                </li>
                <li class="ml-16">
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">TV shows</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text"
                        class="bg-gray-800 rounded-full text-sm w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline"
                        placeholder="Search">
                    <div class="absolute top-0">
                        <span><i class="fa-solid fa-magnifying-glass w-4 text-gray-500 mt-1 ml-2"></i></span>
                    </div>
                </div>
                <div class="ml-4">
                    <img src="/img/avatar.jpg" alt="avater" class="rounded-full w-8 h-8">
                </div>
            </div>
        </div>
    </nav>
    {{$slot}}
</body>

</html>