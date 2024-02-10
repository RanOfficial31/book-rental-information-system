@extends('layouts.mainTemplate')
@section('title', 'Category')
@section('content')


<div class="dash-content">
    <div class="title">
        <i class="bi bi-bookmarks"></i>
        <span class="text animate__animated animate__rotateInUpLeft animate__delay-0.5s">Daftar Kategori</span>
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

    <div class="flex h-12 justify-end gap-x-4">
        <span class="inline-block mr-2 mb-2 animate__animated animate__bounceInDown animate__delay-1s">
            <a href="/category-deleted" class="px-4 py-2 text-white uppercase tracking-wide no-underline text-sm font-semibold rounded inline-block bg-red-600 hover:bg-red-500 shadow-[4px_4px_4px_#b1b1b1]
            transition ease-in-out delay-0 hover:-translate-1 hover:scale-105 duration-300">Lihat Yang Dihapus
            </a>
        </span>
        <span class="inline-block mr-2 mb-2 animate__animated animate__bounceInDown animate__delay-1s">
            <a href="/category-add" class="px-4 py-2 text-white uppercase tracking-wide no-underline text-sm font-semibold rounded inline-block bg-blue-600 hover:bg-blue-500 shadow-[4px_4px_4px_#b1b1b1]
            transition ease-in-out delay-0 hover:-translate-1 hover:scale-105 duration-300">Tambah Kategori
            </a>
        </span>
    </div>


    <div class="my-4 table-responsive-xl">
        <table class="table table-hover table-striped text-center">
            <thead>
                <tr>
                    <th class="bg-primary text-white w-[100px]">No.</th>
                    <th class="bg-primary text-white">Nama Kategori</th>
                    <th class="bg-primary text-white w-25">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td style="w-25">
                            <a class="btn text-white bg-green-600 hover:bg-green-400 shadow-[3px_3px_3px_#b1b1b1] m-1 transition ease-in-out delay-0 hover:-translate-1 hover:scale-110 duration-300" href="category-edit/{{ $item->slug }}">
                                <i class="bi bi-pencil-square"></i></a>
                            <a class="btn text-white bg-red-600 hover:bg-red-400 shadow-[3px_3px_3px_#b1b1b1] m-1 transition ease-in-out delay-0 hover:-translate-1 hover:scale-110 duration-300" href="category-delete/{{ $item->slug }}">
                                <i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
