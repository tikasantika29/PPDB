@extends('templates.main_sd')
@section('container')

<div class="bg-example">
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            <center>Pilih Salah Satu Jalur Masuk</center>
        </a>
        <a href="{{ url('zonasi2') }}" class="list-group-item list-group-item-action">Zonasi</a>
        <a href="{{ url('prestasi2') }}" class="list-group-item list-group-item-action">Prestasi</a>
        <a href="{{ url('afirmasi2') }}" class="list-group-item list-group-item-action">Afirmasi</a>
        <a href="{{ url('kepindahan2') }}" class="list-group-item list-group-item-action">Kepindahan Orang Tua</a>
    </div>
</div>
@endsection