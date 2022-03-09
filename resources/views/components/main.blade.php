<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <livewire:styles />
    <script src="https://kit.fontawesome.com/4bf9b46335.js" crossorigin="anonymous"></script>
    <title>Movie App</title>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-grey-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{route('home')}}"><span><i class="fa-solid fa-film mx-3"></i>Movie App</span></a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{route('home')}}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                @livewire('search-dropdown')
                <div class="md:ml-4 mt-3 md:mt-0">
                    <img src="/img/avatar.jpg" alt="avater" class="rounded-full w-8 h-8">
                </div>
            </div>
        </div>
    </nav>
    {{$slot}}
    <livewire:scripts />
</body>

</html>