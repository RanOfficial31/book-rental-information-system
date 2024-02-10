<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My book's @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('MyBooks.ico')}}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>


<body>
    {{-- DESKTOP VIEW --}}
    <nav class="relative px-4 py-4 flex justify-between items-center bg-white shadow-lg sticky top-0 z-10"
        data-aos="fade-down" data-aos-duration="2000">
        <a class="text-3xl font-bold leading-none" href="#">
            MyBook's<span class="text-blue-500">.com</span>
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul
            class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
            <li class="{{ request()->is('home') ? 'underline underline-offset-8 decoration-4 decoration-blue-500' : '' }}">
                <a href="/home"
                    class="text-sm text-gray-400 font-bold hover:underline hover:underline-offset-8 decoration-4 decoration-blue-500">
                    Home</a>
            </li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li
                class="{{ request()->is('books') ? 'underline underline-offset-8 decoration-4 decoration-blue-500 bg-red' : '' }}">
                <a class="text-sm text-gray-400 font-bold hover:underline hover:underline-offset-8 decoration-4 decoration-blue-500"
                    href="/books">
                    Daftar Buku</a>
            </li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li class="{{ request()->is('about') ? 'underline underline-offset-8 decoration-4 decoration-blue-500 bg-red' : '' }}">
                <a class="text-sm text-gray-400 font-bold hover:underline hover:underline-offset-8 decoration-4 decoration-blue-500"
                    href="/about">
                    Tentang Kami</a>
            </li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li class="{{ request()->is('contact') ? 'underline underline-offset-8 decoration-4 decoration-blue-500 bg-red' : '' }}">
                <a class="text-sm text-gray-400 font-bold hover:underline hover:underline-offset-8 decoration-4 decoration-blue-500"
                    href="/contact">
                    Hubungi</a>
            </li>
        </ul>
        <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-blue-600 font-bold  rounded-xl transition duration-200 border-2 border-blue-500 shadow-[3px_3px_6px_#b1b1b1]"
            href="/login">Login</a>
        <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200 shadow-[3px_3px_6px_#b1b1b1]"
            href="/register">Buat Akun</a>
    </nav>

    {{-- MOBILE VIEW --}}
    <div class="navbar-menu relative z-50 hidden sticky top-0 z-10">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav
            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="#">
                    MyBook's<span class="text-blue-500">.com</span>
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1 {{ request()->is('home') ? 'bg-blue-200' : '' }}">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-200 rounded"
                            href="/home">Home</a>
                    </li>
                    <li class="mb-1 {{ request()->is('books') ? 'bg-blue-200' : '' }}">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-200 rounded"
                            href="/books">Daftar Buku</a>
                    </li>
                    <li class="mb-1 {{ request()->is('about') ? 'bg-blue-200' : '' }}">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-200 rounded"
                            href="/about">Tentang Kami</a>
                    </li>
                    <li class="mb-1 {{ request()->is('contact') ? 'bg-blue-200' : '' }}"">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-200 rounded"
                            href="/contact">Hubungi</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <div class="pt-6">
                    <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold text-blue-600 leading-none bg-gray-50 hover:bg-gray-100 rounded-xl border-2 border-blue-500 shadow-[4px_4px_4px_#b1b1b1]"
                        href="/login">Login</a>
                    <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl shadow-[4px_4px_4px_#b1b1b1]"
                        href="/register">Buat Akun</a>
                </div>
                <p class="my-4 text-xs text-center text-gray-400">
                    <span>© 2023 Copyright | Mybook.com</span>
                </p>
            </div>
        </nav>
    </div>

    @yield('content')



    <script>
        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>