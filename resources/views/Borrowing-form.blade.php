@extends('layouts.mainTemplate')
@section('title', 'Borrowing Form')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <div class="dash-content">
        <div class="title">
            <i class="bi bi-pencil-square"></i>
            <span class="text animate__animated animate__rotateInUpLeft animate__delay-0.5s">Formulir Peminjaman</span>
        </div>

    @if (session('status'))
        <script>
        swal("{{ session('title') }}","{{ session('massage') }}", "{{ session('icon') }}",{
            buttons:true,
            buttons:false,
            buttons:"OK",
        });
        </script>
    @endif
        <form action="borrowing-form" method="post">
            @csrf
            <div class="max-w-2xl mx-auto mt-5">
                <label for="user" class="block mb-2 text-sm font-semibold text-gray-700 text-center"
                    data-aos="zoom-in-down" data-aos-duration="3000">Nama Pengguna </label>
                <div class="border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow-[3px_3px_4px_#b1b1b1]"
                    data-aos="flip-left" data-aos-duration="3000">
                    <select name="user_id" id="user" class="inputBox" style="width: 100%; hight:100%" required> 
                        <option selected>Pilih Pengguna</option>
                        @foreach ($users as $item)
                            <option value="{{ $item->id }}">{{ $item->username }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="max-w-2xl mx-auto mt-12">
                <label for="book" class="block mb-2 text-sm font-semibold text-gray-700 text-center" data-aos="zoom-in"
                    data-aos-duration="3000">Judul Buku </label>
                <div class="border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow-[3px_3px_4px_#b1b1b1]"
                    data-aos="flip-right" data-aos-duration="3000">
                    <select name="book_id" id="book" class="inputBox" style="width: 100%; hight:100%" required>
                        <option selected>Pilih Buku</option>
                        @foreach ($books as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>
                <main class="flex w-full items-center justify-center mt-8">
                    <button type="submit"
                        class="group relative h-9 w-48 overflow-hidden rounded-lg bg-blue-700 text-lg font-bold text-white shadow-[5px_5px_5px_#b1b1b1]"
                        data-aos="zoom-in-up" data-aos-duration="3000">
                        Submit
                        <div
                            class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30">
                        </div>
                    </button>
                </main>
            </div>
        </form>

        <script>
            // In your Javascript (external .js resource or <script> tag)
            $(document).ready(function() {
                $('.inputBox').select2({
                    theme: "classic"
                });
            });
        </script>
    @endsection
