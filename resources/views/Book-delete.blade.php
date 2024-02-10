@extends('layouts.mainTemplate')
@section('title', 'Delete Books')
@section('content')
<div class="dash-content">
    <div class="title">
        <i class="bi bi-journal-text"></i>
        <span class="text animate__animated animate__rotateInUpLeft animate__delay-1s">Hapus Buku</span>
    </div>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                swal("success", "{{ $error }}", 'success', {
                    buttons: true,
                    buttons: false,
                    buttons: "OK",
                });
            </script>
        @endforeach
    @endif

    <div class="d-flex justify-content-end mt-4">
        <a href="/book" class="bg-blue-600 rounded-tl-full rounded-br-full text-white text-xl font-semibold text-center self-center px-4 py-2 m-2 hover:bg-blue-500 shadow-sm
        animate__animated animate__lightSpeedInLeft">
        <i class="bi bi-x-lg"></i></a>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="/book-edit/{{ $book->slug }}" method="post" class="card mt-5 pb-5" data-aos="flip-right"
            data-aos-duration="3000">
            @csrf
            @method('put')
            <div class="p-2 mt-5 text-center body-card-validation">
                <p class=" text-md font-medium">Apakah Anda Ingin Menghapus Buku Ini ?</p>
                <h6 class="text-xl font-semibold italic mt-4">"{{ $book->title }}"</h6>
                <div class="mt-4">
                    <a href="/book-destroy/{{ $book->slug }}"
                        class="view-btn btn btn-danger btn-block"><span>YA</span>
                    </a>
                </div>
                <p class="mt-5 text-gray-400">© 2023 Copyright | Mybook.com</p>
            </div>
        </form>
    </div>
</div>
@endsection
