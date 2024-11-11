{{-- <!DOCTYPE html> --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5">
            <div class="flex justify-between items-center">
                <a href="{{ route('articles.index') }}" class="flex items-center">
                    <img src="{{ asset('images/book-logo.svg') }}" class="h-6 sm:h-9" alt="Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap">UReview</span>
                </a>

                <div>
                    @if (Auth::check())
                        <div class="flex gap-4 items-center">
                            <span class="self-center">{{ Auth::user()->name }}</span>

                            <form action="{{ route('auth.logout') }}" method="post" class="self-center">
                                @csrf
                                <button type="submit" class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                    Logout
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>