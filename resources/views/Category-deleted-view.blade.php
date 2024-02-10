@extends('layouts.mainTemplate')
@section('title', 'Delete Category View')
@section('content')
<div class="dash-content">
    <div class="title">
        <i class="bi bi-eye-slash-fill"></i>
        <span class="text animate__animated animate__rotateInUpLeft animate__delay-1s">Kategori Yang Terhapus</span>
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

    <div class="d-flex justify-content-end">
        <a href="/category" class="bg-blue-600 rounded-tl-full rounded-br-full text-white text-sm text-center self-center px-4 py-2 m-2 hover:bg-blue-500 shadow-[4px_4px_4px_#b1b1b1]
        animate__animated animate__lightSpeedInLeft">
            Kembali<i class="bi bi-arrow-bar-right p-1"></i></a>
    </div>

    <div class="my-4 table-responsive-sm">
        <table class="table table-hover table-striped text-center">
            <thead>
                <tr>
                    <th class="bg-primary text-white w-[100px]">No.</th>
                    <th class="bg-primary text-white">Nama Kategori</th>
                    <th class="w-25 bg-primary text-white">Kembalikan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedCategories as $item)
                <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a class="btn text-lg font-medium text-white bg-green-600 hover:bg-green-400 shadow-[3px_3px_3px_#b1b1b1] transition ease-in-out delay-0 hover:-translate-1 hover:scale-110 duration-300" 
                            href="category-restore/{{ $item->slug }}"><i class="bi bi-box-arrow-in-up-left"></i></a>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
