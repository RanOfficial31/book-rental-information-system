@extends('layouts.mainTemplate')
@section('title','Log')
@section('content')
<div class="dash-content">
    <div class="overview mb-5">
        <div class="title">
            <i class="bi bi-tags"></i>
            <span class="text animate__animated animate__rotateInUpLeft animate__delay-1s">Semua Pinjaman</span>
        </div>
    </div>

    <div class="table-responsive-lg mt-8" >
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
@endsection