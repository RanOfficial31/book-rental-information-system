@extends('layouts.mainUser')
@section('title', 'Borrowing Logs')
@section('content')
<div class="dash-content justfy-center item-center">
    <div class="title mb-8">
        <i class="bi bi-pencil-square"></i>
        <span class="text">Daftar Pinjaman {{Auth::user()->username}}</span>
    </div>

    <div class="table-responsive-xl mt-8" >
        <table class="table table-hover table-striped text-center">
            <thead>
                <tr>
                    <th class="bg-primary text-white">No.</th>
                    <th class="bg-primary text-white">Nama</th>
                    <th class="bg-primary text-white">Judul Buku</th>
                    <th class="bg-primary text-white">Tgl Peminjaman</th>
                    <th class="bg-primary text-white">Harus Di kembalikan</th>
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
                                Belum Di kembalikan
                            @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection