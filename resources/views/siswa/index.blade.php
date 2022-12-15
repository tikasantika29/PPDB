@extends('templates.main')
@section('container')

<div class="bg-example">
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            <center>Pilih Salah Satu Jalur Masuk</center>
        </a>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            Login sebagai user!
        </div>
        <a href="{{ url('zonasi') }}" class="list-group-item list-group-item-action">Zonasi</a>
        <a href="{{ url('prestasi') }}" class="list-group-item list-group-item-action">Prestasi</a>
        <a href="{{ url('afirmasi') }}" class="list-group-item list-group-item-action">Afirmasi</a>
        <a href="{{ url('kepindahan') }}" class="list-group-item list-group-item-action">Kepindahan Orang Tua</a>
    </div>
</div>
@endsection