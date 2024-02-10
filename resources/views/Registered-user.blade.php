@extends('layouts.mainTemplate')
@section('title','User')
@section('content')
<div class="dash-content">
    <div class="title">
        <i class="bi bi-people"></i>
        <span class="text animate__animated animate__rotateInUpLeft animate__delay-1s">Pengguna Belum Aktif</span>
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
        <a href="/user" class="bg-blue-600 rounded-tl-full rounded-br-full text-white text-sm text-center self-center px-4 py-2 m-2 hover:bg-blue-500 shadow-[4px_4px_4px_#b1b1b1]
        animate__animated animate__lightSpeedInLeft">
            Kembali<i class="bi bi-arrow-bar-right p-1"></i></a>
    </div>
    <div class="my-4 table-responsive-xl">
        <table class="table table-hover table-striped text-center">
            <thead>
                <tr>
                    <th class="bg-primary text-white">No.</th>
                    <th class="bg-primary text-white">Nama</th>
                    <th class="bg-primary text-white">Telepon</th>
                    <th class="bg-primary text-white">Setujui</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registeredUsers as $item)
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
                        <td>
                            <a class="btn  text-white bg-green-600 hover:bg-green-400 shadow-[3px_3px_3px_#b1b1b1] m-1 transition ease-in-out delay-0 hover:-translate-1 hover:scale-110 duration-300 text-xl" href="/user-detail/{{$item->slug}}">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection