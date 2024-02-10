<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrowing Books app | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="main d-flex justify-content-between flex-column">
        <nav class="navbar sticky-top navbar-dark navbar-expand-lg" data-aos="fade-down" data-aos-duration="3000">
            <div class="container-fluid">
                <div class="type-effect">
                    <div class="domain my-1" >Borrowing Books app</div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#onclick"
                    aria-controls="onclick" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar container col-lg-2 collapse d-lg-block" id="onclick" data-aos="fade-right"
                    data-aos-duration="3000">
                    @if (Auth::user()->role_id == 1)
                        <a href="/dashboard" 
                            @if (request()->route()->uri == 'dashboard') class='active' 
                            @endif><i class="bi bi-bar-chart-line-fill"></i>Dashboard</a>
                        <a href="/book" 
                            @if (request()->route()->uri == 'book' ||
                                request()->route()->uri == 'book-add' ||
                                request()->route()->uri == 'book-edit/{slug}' ||
                                request()->route()->uri == 'book-delete/{slug}' ||
                                request()->route()->uri == 'book-deleted') class='active' 
                            @endif><i class="bi bi-journal-bookmark-fill"></i>Book
                        </a>

                        <a href="/category" 
                            @if (request()->route()->uri == 'category' ||
                                request()->route()->uri == 'category-add' ||
                                request()->route()->uri == 'category-edit/{slug}' ||
                                request()->route()->uri == 'category-delete/{slug}' ||
                                request()->route()->uri == 'category-deleted') class='active' 
                            @endif><i class="bi bi-collection-fill"></i>Categories
                        </a>

                        <a href="/user" 
                            @if (request()->route()->uri == 'user' ||
                                request()->route()->uri == 'registered-user' ||
                                request()->route()->uri == 'user-detail/{slug}' ||
                                request()->route()->uri == 'user-block/{slug}' ||
                                request()->route()->uri == 'user-block-view') class='active' 
                            @endif><i class="bi bi-people-fill"></i></i>User
                        </a>

                        <a href="/ren-log" @if (request()->route()->uri == 'ren-log') class='active' @endif><i
                                class="bi bi-bookmarks-fill"></i>Log book</a>
                        <a href="/logout" @if (request()->route()->uri == 'logout') class='active' @endif><i
                                class="bi bi-arrow-bar-left"></i>logout</a>
                    @else
                        <a href="/profile" @if (request()->route()->uri == 'profile') class='active' @endif><i
                                class="bi bi-file-person-fill">My. Profile</a>
                        <a href="/logout" @if (request()->route()->uri == 'logout') class='active' @endif><i
                                class="bi bi-arrow-bar-left"></i>logout</a>
                    @endif
                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
