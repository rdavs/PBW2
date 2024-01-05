@extends('layouts.main')

@section('container')
<div class="content d-flex">

    {{-- kiri --}}
    <div class="row align-items-center">
        <h1>Telyu Market</h1>
        <p>Aplikasi web yang di peruntukan untuk jual beli
            <br>barang bekas yang masih layak dipakai.aplikasi web
            <br>ini di gunakan oleh seluruh mahasiswa telkom university.
        </p>
        <a href="{{ route('postingan') }}">
            <button type="button" class="btn btn-danger rounded-pill" style="width: 30%; height: 40%">Get started</button>
        </a>


    </div>

    {{-- kanan --}}
    <div class="img">
        <img src="img/org.png" alt="">
    </div>

</div>

@endsection