@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4" style="font-weight: bold;">Rincian Pengguna</h1>
    <!-- 6706223008 Riffqi Dava Sundara -->
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th class="text-start">Full Name</th>
                    <td>{{ $collection->namaKoleksi }}</td>
                </tr>
                @php
                $jenisKoleksi = '';
                switch ($collection->jenisKoleksi) {
                case 1:
                $jenisKoleksi = 'Buku';
                break;
                case 2:
                $jenisKoleksi = 'Majalah';
                break;
                case 3:
                $jenisKoleksi = 'Cakram Digital';
                break;
                }
                @endphp
                <tr>
                    <th class="text-start">Email</th>
                    <td>{{ $jenisKoleksi }}</td>
                </tr>
                <tr>
                    <th class="text-start">Phone Number</th>
                    <td>{{ $collection->jumlahKoleksi }}</td>
                </tr>
                <tr>
                    <th class="text-start">Address</th>
                    <td>{{ $collection->createdAt}}</td>
                </tr>
            </table>
            <a href="{{ route('koleksi') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection