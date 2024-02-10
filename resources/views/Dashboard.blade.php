@extends('layouts.mainTemplate')
@section('title','Dashboard')
@section('content')
    {{-- <div class="page-welcome" data-aos="flip-up" data-aos-duration="3000">
        <h3>Welcome, "{{Auth::user()->username}}"</h3>
    </div> --}}
    {{-- <div class="row my-5">
        <div class="col-lg-4" data-aos="flip-right" data-aos-duration="2000">
            <div class="card-data book">
                <div class="row">
                    <div class="col-6 flex-column justify-conten-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license 
                        (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fff}</style>
                        <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 
                        32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 
                        16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 
                        0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                    </div>
                    <div class="col-6 d-flex flex-column justify-conten-center align-items-end">
                        <div class="title-book">Books</div>
                        <div class="data-book">{{$book_count}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4" data-aos="flip-right" data-aos-duration="3000">
            <div class="card-data category">
                <div class="row">
                    <div class="col-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - 
                        https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>svg{fill:#ffffff}</style><path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 
                        28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 
                        64 32 32 0 1 1 0-64zM72 272a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm104-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 
                        0-16-7.2-16-16s7.2-16 16-16zM72 368a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm88 0c0-8.8 7.2-16 16-16H304c8.8 0 16 7.2 16 
                        16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16z"/></svg>
                    </div>
                    <div class="col-6 d-flex flex-column justify-conten-center align-items-end">
                        <div class="title-book">Category</div>
                        <div class="data-book">{{$category_count}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4" data-aos="flip-right" data-aos-duration="2000">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - 
                        https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>svg{fill:#ffffff}</style><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 
                        80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 
                        7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 
                        320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 
                        192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 
                        485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 
                        0-26.7-11.9-26.7-26.7z"/></svg>
                    </div>
                    <div class="col-6 d-flex flex-column justify-conten-center align-items-end">
                        <div class="title-book">User</div>
                        <div class="data-book">{{$user_count}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="dash-content">

        <div class="title">
            <i class="uil uil-tachometer-fast-alt"></i>
            <span class="text animate__animated animate__rotateInUpLeft animate__delay-0.5s">Dashboard</span>
        </div>
        <div class="grid grid-cols-1 gap-3 px-4 mt-10 sm:grid-cols-3 sm:px-8">
            <div class="stat flex items-center bg-white border rounded-md overflow-hidden shadow" data-aos="flip-left" data-aos-duration="3000">
                <div class="p-4 bg-gradient-to-t from-green-500 to-green-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-md font-semibold tracking-wider">Jumlah Pengguna </h3>
                    <p class="text-3xl mt-2">{{$user_count}}</p>
                </div>
            </div>
            <div class="stat flex items-center bg-white border rounded-md overflow-hidden shadow" data-aos="flip-left" data-aos-duration="3000">
                <div class="p-4 bg-gradient-to-t from-red-500 to-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text w-12 h-12 text-white" viewBox="0 0 16 16">
                        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                </div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-md font-semibold tracking-wider">Jumlah Buku</h3>
                    <p class="text-3xl mt-2">{{$book_count}}</p>
                </div>
            </div>
            <div class="stat flex items-center bg-white border rounded-md overflow-hidden shadow" data-aos="flip-left" data-aos-duration="3000">
                <div class="p-4 bg-gradient-to-t from-purple-500 to-purple-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks w-12 h-12 text-white" viewBox="0 0 16 16">
                        <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                        <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                    </svg>
                </div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-md font-semibold tracking-wider">Jumlah Kategori</h3>
                    <p class="text-3xl mt-2">{{$category_count}}</p>
                </div>
            </div>
        </div>


        <div class="activity">
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text animate__animated animate__rotateInUpLeft animate__delay-0.5s">
                    Total Pinjaman</span>
            </div>
        </div>
    </div>
        <div class="table-responsive-xl" >
        <table class="table table-hover table-striped text-center">
            <thead>
                <tr>
                    <th class="bg-primary text-white">No.</th>
                    <th class="bg-primary text-white">Nama</th>
                    <th class="bg-primary text-white">Judul</th>
                    <th class="bg-primary text-white">Tgl Peminjaman</th>
                    <th class="bg-primary text-white">Harus Di kembalikan</th>
                    <th class="bg-primary text-white">Tgl Pengembalian</th>
                    <th class="bg-primary text-white">Status</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td colspan="7" style="text-align: center"> No data</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
@endsection