@extends('layouts.mainTemplate')
@section('title','User')
@section('content')
<div class="dash-content">
    <div class="title">
        <i class="bi bi-people"></i>
        <span class="text animate__animated animate__rotateInUpLeft animate__delay-0.5s">Daftar Pengguna</span>
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
            <a href="/user-block-view" class="px-4 py-2 text-white uppercase tracking-wide no-underline text-sm font-semibold rounded shadow inline-block bg-red-600 hover:bg-red-500
            transition ease-in-out delay-0 hover:-translate-1 hover:scale-105 duration-300">Blokir Pengguna
            </a>
        </span>
        <span class="inline-block mr-2 mb-2 animate__animated animate__bounceInDown animate__delay-1s">
            <a href="/registered-user" class="px-4 py-2 text-white uppercase tracking-wide no-underline text-sm font-semibold rounded shadow inline-block bg-green-600 hover:bg-green-500
            transition ease-in-out delay-0 hover:-translate-1 hover:scale-105 duration-300">Pengguna Tidak Aktif 
            </a>
        </span>
    </div>

    <div class="my-5 table-responsive-xl">
        <table class="table table-hover table-striped text-center">
            <thead>
                <tr>
                    <th class="bg-primary text-white">No.</th>
                    <th class="bg-primary text-white">Nama</th>
                    <th class="bg-primary text-white">Telepon</th>
                    <th class="bg-primary text-white">Status</th>
                    <th class="w-25 bg-primary text-white">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->username}}</td>
                        <td>
                            @if ($item->phone)
                                {{ $item->phone}}
                            @else
                                no data
                            @endif
                        </td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a class="btn text-white bg-blue-600 hover:bg-blue-400 shadow-[3px_3px_3px_#b1b1b1] m-1 transition ease-in-out delay-0 hover:-translate-1 hover:scale-110 duration-300 text-xl" href="/user-detail/{{$item->slug}}">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a class="btn text-white bg-red-600 hover:bg-red-400 shadow-[3px_3px_3px_#b1b1b1] m-1 transition ease-in-out delay-0 hover:-translate-1 hover:scale-110 duration-300 text-xl" href="/user-block/{{$item->slug}}">
                                <i class="bi bi-person-x-fill"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection