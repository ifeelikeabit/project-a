<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel App')</title>

    <link href="@yield('style')" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset("js/clock.js") }}"></script>
</head>

<body>


    <div class="flex flex-row h-screen">

        <div class="flex flex-col w-52 bg-[#121212] text-[#49c5b6] items-center border-r-[#49c5b6] border-r-4" >
            <p class="text-[#49c5b6] h-12 flex items-center" id="clock"></p>
            <div class="border-b-4 w-full mb-5 border-b-[#49c5b6]"></div>
            <div class="flex flex-col items-center gap-5">
                @if(Auth::check())
                <a class="" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
                <a class="welcome" href="{{ route('pages') }}"><i class="fas fa-user"></i> Pages</a>
                <a class="welcome" href="#"><i class="fas fa-cogs"></i> Settings</a>
                <a class="welcome" href="#"><i class="fas fa-envelope"></i> Messages</a>
                <a class="welcome" href="#"><i class="fas fa-comments"></i> Chat</a>
                @endif
            </div>
        </div>

        <!-- Üst Navbar (Header) -->
        <div class="flex flex-col w-full">
            <div class="topbar bg-[#121212] flex flex-row w-full justify-between items-center h-[57.3px] border-b-4 border-b-[#49c5b6]">
                <div></div>
                <div class="text-2xl text-[#49c5b6] font-extrabold">@yield('Page')</div>
                <div class="mr-5">
                    @if (Auth::user())
                    <form  action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <button type="submit" class="text-[#49c5b6] font-bold"><i>Exit </i><i
                            class="fa-solid fa-door-open"></i></button>
                    </form>
                        
                    @else
                        <a href="#" class="text-[#49c5b6]"><i class="fa-solid fa-info"></i></a>
                    @endif
                </div>
            </div>
            <div class="bg-[#1a1a1a]  flex flex-col items-center w-full h-full justify-center">
                @yield('content')
            </div>
        </div>

    </div>
</body>

</html>
