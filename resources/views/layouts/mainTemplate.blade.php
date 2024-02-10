<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>

    <title>My Book's | @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('MyBooks.ico')}}" type="image/x-icon">
</head>

<body>

    <nav>
        <div class="logo-name" data-aos="fade-right" data-aos-duration="3000">
            <div class="logo-image">
                <img src="https://thumbs.dreamstime.com/b/got-idea-book-mascot-character-cartoon-design-perfect-logo-web-print-illustration-103948676.jpg" alt="">
            </div>
            <span class="logo_name">MyBook's<span class="text-blue-600">.com</span></span>
        </div>
        <div class="menu-items" data-aos="fade-right" data-aos-duration="3000">
            
                <ul class="nav-links">
                    @if (Auth::user()->role_id == 1)
                    <li><a href="/dashboard" 
                        @if (request()->route()->uri == 'dashboard') class='active' 
                        @endif>
                            <i class="bi bi-speedometer2"></i>
                            <span class="link-name">Dahsboard</span>
                        </a></li>
                    <li><a href="/book" 
                        @if (request()->route()->uri == 'book' ||
                            request()->route()->uri == 'book-add' ||
                            request()->route()->uri == 'book-edit/{slug}' ||
                            request()->route()->uri == 'book-delete/{slug}' ||
                            request()->route()->uri == 'book-deleted') class='active' 
                        @endif>
                            <i class="bi bi-journal-text"></i>
                            <span class="link-name">Daftar Buku</span>
                        </a></li>
                    <li><a href="/category" 
                        @if (request()->route()->uri == 'category' ||
                            request()->route()->uri == 'category-add' ||
                            request()->route()->uri == 'category-edit/{slug}' ||
                            request()->route()->uri == 'category-delete/{slug}' ||
                            request()->route()->uri == 'category-deleted') class='active' 
                        @endif>
                            <i class="bi bi-bookmarks"></i>
                            <span class="link-name">Daftar Categori</span>
                        </a></li>
                    <li><a href="/user" 
                        @if (request()->route()->uri == 'user' ||
                            request()->route()->uri == 'registered-user' ||
                            request()->route()->uri == 'user-detail/{slug}' ||
                            request()->route()->uri == 'user-block/{slug}' ||
                            request()->route()->uri == 'user-block-view') class='active' 
                        @endif>
                            <i class="bi bi-people"></i>
                            <span class="link-name">Pengguna</span>
                        </a></li>
                    <li><a href="/borrowing-log" @if (request()->route()->uri == 'borrowing-log') class='active' @endif>
                            <i class="bi bi-tags"></i>
                            <span class="link-name">Daftar pinjaman</span>
                        </a></li>
                        <li><a href="/borrowing-form" @if (request()->route()->uri == 'borrowing-form') class='active' @endif>
                            <i class="bi bi-pencil-square"></i>
                            <span class="link-name">Buat pinjaman</span>
                        </a></li>
                        <li><a href="/return-book" @if (request()->route()->uri == 'return-book') class='active' @endif>
                            <i class="bi bi-box-arrow-in-down-right"></i>
                            <span class="link-name">Pengembalian</span>
                        </a></li>
                    @endif
                </ul>
            

            <ul class="logout-mode">
                <li><a href="/logout">
                        <i class="bi bi-box-arrow-left"></i>
                        <span class="link-name">Logout</span>
                    </a></li>
                <li class="mode">
                    <a href="#" class="hidden">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>
                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top" data-aos="fade-down" data-aos-duration="2000">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            {{-- <img src="https://khcumis.azurewebsites.net/img/user.png" alt=""> --}}
            <h3 class="text-md font-semibold mr-9 text-gray-400">Welcome {{Auth::user()->username}}</h3>
        </div>
        @yield('content')
    </section>

    <script>
        const body = document.querySelector("body"),
            modeToggle = body.querySelector(".mode-toggle");
        sidebar = body.querySelector("nav");
        sidebarToggle = body.querySelector(".sidebar-toggle");

        let getMode = localStorage.getItem("mode");
        if (getMode && getMode === "dark") {
            body.classList.toggle("dark");
        }

        let getStatus = localStorage.getItem("status");
        if (getStatus && getStatus === "close") {
            sidebar.classList.toggle("close");
        }

        modeToggle.addEventListener("click", () => {
            body.classList.toggle("dark");
            if (body.classList.contains("dark")) {
                localStorage.setItem("mode", "dark");
            } else {
                localStorage.setItem("mode", "light");
            }
        });

        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            if (sidebar.classList.contains("close")) {
                localStorage.setItem("status", "close");
            } else {
                localStorage.setItem("status", "open");
            }
        })
    </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</body>

</html>
