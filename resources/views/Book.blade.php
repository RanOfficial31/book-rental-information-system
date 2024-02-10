@extends('layouts.mainTemplate')
@section('title', 'Book')
@section('content')
    <div class="dash-content">
        <div class="title">
            <i class="bi bi-journal-text"></i>
            <span class="text animate__animated animate__rotateInUpLeft animate__delay-0.5s">Daftar Semua Buku</span>
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
                <a href="/book-deleted" class="px-4 py-2 text-white uppercase tracking-wide no-underline text-sm font-semibold rounded shadow-[4px_4px_4px_#b1b1b1] inline-block bg-red-600 hover:bg-red-500
                transition ease-in-out delay-0 hover:-translate-1 hover:scale-105 duration-300">Buku Terhapus
                </a>
            </span>
            <span class="inline-block mr-2 mb-2 animate__animated animate__bounceInDown animate__delay-1s">
                <a href="/book-add" class="px-4 py-2 text-white uppercase tracking-wide no-underline text-sm font-semibold rounded shadow-[4px_4px_4px_#b1b1b1] inline-block bg-blue-600 hover:bg-blue-500
                transition ease-in-out delay-0 hover:-translate-1 hover:scale-105 duration-300">Tambah Buku
                </a>
            </span>
        </div>



        <div class="my-4 table-responsive-xl">
            <table class="table table-hover table-striped text-center">
                <thead>
                    <tr>
                        <th class="bg-primary text-white">No.</th>
                        <th class="bg-primary text-white">kode</th>
                        <th class="bg-primary text-white">Judul</th>
                        <th class="bg-primary text-white">Kategory</th>
                        <th class="bg-primary text-white">Status</th>
                        <th class="bg-primary text-white">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->book_kode }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                @foreach ($item->categories as $category)
                                    {{ $category->name }}
                                @endforeach
                            </td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a class="btn text-white bg-green-600 hover:bg-green-400 shadow-[3px_3px_3px_#b1b1b1] m-1 transition ease-in-out delay-0 hover:-translate-1 hover:scale-110 duration-300" href="/book-edit/{{ $item->slug }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn text-white bg-red-600 hover:bg-red-400 shadow-[3px_3px_3px_#b1b1b1] m-1 transition ease-in-out delay-0 hover:-translate-1 hover:scale-110 duration-300" href="/book-delete/{{ $item->slug }}">
                                    <i class="bi bi-trash3"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
