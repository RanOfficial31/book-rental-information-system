@extends('layouts.mainTemplate')
@section('title', 'User Block')
@section('content')
<div class="dash-content">
    <div class="title">
        <i class="bi bi-people"></i>
        <span class="text animate__animated animate__rotateInUpLeft animate__delay-1s">Blokir Pengguna</span>
    </div>

@if (session('status'))
<script>
    swal("success", "{{ session('status') }}", 'success', {
        buttons: true,
        buttons: false,
        buttons: "OK",
    });
</script>
@endif
    <div class="d-flex justify-content-end mt-4">
        <a href="/user" class="bg-blue-600 rounded-tl-full rounded-br-full text-white text-xl font-semibold text-center self-center px-4 py-2 m-2 hover:bg-blue-500 shadow-sm
        animate__animated animate__lightSpeedInLeft">
        <i class="bi bi-x-lg"></i></a>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="/user-delete/{{$user->slug}}" class="card mt-5 pb-5" data-aos="flip-right" data-aos-duration="3000">
            {{-- @csrf --}}
            {{-- @method('put') --}}
            <div class="mt-4 p-4 text-center body-card-validation">
                <p class="text-md font-medium">Yakin Ingin Memblokir Pengguna Ini ?</p>
                <h6 class="text-xl font-semibold italic mt-4">"{{$user->username}}"</h6>
                <div class="mt-4">
                    <a href="/user-destroy/{{$user->slug}}" class="view-btn btn btn-danger btn-block"><span>YA</span></a>
                </div>
                <p class="mt-5 text-gray-400">© 2023 Copyright | MyBook's.com</p>
            </div>
        </form>
    </div>
</div>
@endsection