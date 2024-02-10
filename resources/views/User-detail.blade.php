@extends('layouts.mainTemplate')
@section('title', 'Detail Users')
@section('content')
<div class="dash-content">
    <div class="title">
        <i class="bi bi-people"></i>
        <span class="text animate__animated animate__rotateInUpLeft animate__delay-1s">Pengguna {{$user->status}}</span>
    </div>
    <div class="d-flex justify-content-end mb-3">
        <a href="/user" class="bg-blue-600 rounded-tl-full rounded-br-full text-white text-sm text-center self-center px-4 py-2 m-2 hover:bg-blue-500 shadow-md
        animate__animated animate__lightSpeedInLeft">
        <i class="bi bi-x-lg"></i></a>
    </div>

    <style>
        body {
            background-color: #dddcdc;
        }

        .card {
            width: 380px;
            border: none;
            background: #ecf0f3;
        }

        .dots {
            height: 20px;
            width: 20px;
            margin-top: 4px;
            margin-left: 4px;
            background-color: #dc3545;
            border-radius: 50%;
            border: 2px solid #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 10px;
        }

        .list li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 13px;
            border-top: 1px solid #eee;
            cursor: pointer;
        }

        .btn {
            background: #0138ff;
            color: #fff;
            box-shadow: 4px 4px 4px #b1b1b1,
            -3px -3px 3px #fff;
        }
        .btn:hover {
            background: #0064cf;
            color:#fff;
        }
    </style>
    
    @if (session('status'))
        <script>
            swal("success", "{{ session('status') }}", 'success', {
                buttons: true,
                buttons: false,
                buttons: "OK",
            });
        </script>
    @endif

    <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="card text-center" data-aos="flip-right" data-aos-duration="3000">
            <div class="py-4 p-2">
                <div>
                    <i class="bi bi-person-circle " style="font-size: 80px;"></i>
                    {{-- <img src="https://th.bing.com/th/id/OIP.HHVUf3TYqncgpJXyCMmxyAHaHa?pid=ImgDet&rs=1" class="rounded" width="100"> --}}
                </div>
                <div class="d-flex flex-row justify-content-center">
                    <h5>{{$user->username}}</h5>
                </div>
                <span>Tgl Pendaftaran : 
                    @if ($user->created_at)
                        {{$user->created_at}}
                    @else
                        not found
                @endif</span>
            </div>

            <div>
                <ul class="list-unstyled list">
                    <li>
                        <span class="font-weight-bold">Telepon  :</span>
                        <div>
                            <span class="mr-1">@if ($user->phone)
                                {{$user->phone}}
                            @else
                                ! Number Not Found !
                            @endif</span>
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </li>

                    <li>
                        <span class="font-weight-bold">Status :</span>
                        <div>
                            <span class="mr-1">{{$user->status}}</span>
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </li>

                    <li>
                        <span class="font-weight-bold">Alamat :</span>
                        <div>
                            <span class="mr-1">@if ($user->addres)
                                {{$user->addres}}
                            @else
                                No Address
                            @endif</span>
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </li>
                    <div style="padding: 10px">
                        @if ($user->status == 'inactive')
                            <a href="/user-approve/{{$user->slug}}" class="btn w-100">Setujui Pengguna</a>
                        @endif
                    </div>
                </ul>
            </div>
        </div>
    </div>


    <div class="title">
        <i class="bi bi-tags"></i>
        <span class="text animate__animated animate__rotateInUpLeft animate__delay-1s">Daftar Pinjaman {{ $user->username }}</span>
    </div>
    <div class="mt-5">
        <div class="table-responsive-xl mt-8" >
            <table class="table table-borderless table-hover table-striped text-center">
                <thead class="border-bottom">
                    <tr>
                        <th class="bg-primary text-white">No.</th>
                        <th class="bg-primary text-white">Nama</th>
                        <th class="bg-primary text-white">Judul Buku</th>
                        <th class="bg-primary text-white">Tgl Peminjaman</th>
                        <th class="bg-primary text-white">Harus Di Kembalikan</th>
                        <th class="bg-primary text-white">Tgl Pengembalian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rent_logs as $item)
                    <tr>
                        <td class="{{ $item->actual_return_date == null ? '' : ($item->return_date < 
                            $item->actual_return_date ? 'bg-danger text-white' : 'bg-success text-white') }}">
                            {{ $loop->iteration }}
                        </td>
                        <td class="{{ $item->actual_return_date == null ? '' : ($item->return_date < 
                            $item->actual_return_date ? 'bg-danger text-white' : 'bg-success text-white') }}">
                            {{ $item->user->username }}
                        </td>
                        <td class="{{ $item->actual_return_date == null ? '' : ($item->return_date < 
                            $item->actual_return_date ? 'bg-danger text-white' : 'bg-success text-white') }}">
                            {{ $item->book->title }}
                        </td>
                        <td class="{{ $item->actual_return_date == null ? '' : ($item->return_date < 
                            $item->actual_return_date ? 'bg-danger text-white' : 'bg-success text-white') }}">
                            {{ $item->rent_date }}
                        </td>
                        <td class="{{ $item->actual_return_date == null ? '' : ($item->return_date < 
                            $item->actual_return_date ? 'bg-danger text-white' : 'bg-success text-white') }}">
                            {{ $item->return_date }}
                        </td>
                        <td class="{{ $item->actual_return_date == null ? '' : ($item->return_date < 
                            $item->actual_return_date ? 'bg-danger text-white' : 'bg-success text-white') }}"> 
                                @if ($item->actual_return_date)
                                    {{ $item->actual_return_date }}
                                @else
                                    no data
                                @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
