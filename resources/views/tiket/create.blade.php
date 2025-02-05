@extends('adminlte::page')
@section('tittle','Tambah Tiket')

@section('content_header')

@stop

@section('content')
<h1>
    <h1><i class="fas fa-regular fa-align-left"></i>
        Tambah tiket</h1>
    <a href="{{ route('tiket.index') }}" class="btn btn-primary btn-md" role="button"><i class="fas fa-arrow-left"></i>&nbsp;<b>Back</b></a><br><br>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('tiket.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- cross-site request forgery (CSRF) = pencegahan serangan yang dilakukan oleh pengguna yang tidak terautentikasi --}}
        <div class="form-group">
            <label>Nama</label><input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Film</label>
            <select class="form-control" name="event">
                <option value="">-- Pilih Film --</option>
                <option value="Interstellar">Interstellar</option>
                <option value="Dua Hati Biru">Dua Hati Biru</option>
                <option value="The Wild Robot">The Wild Robot</option>
                <option value="Agak Laen">Agak Laen</option> 
                <option value="Joker: Folie à Deux">Joker: Folie à Deux</option> 
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal Tayang</label> <input type="date" name="event_date" class="form-control">
        </div>
        <div class="form-group">
            <label>Jumlah</label><input type="number" step="1" name="quantity" class="form-control">
        </div>
        <label>Harga</label> 
        <div class="input-group">
            <input type="text"  class="form-control" name="price" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Contoh:10.000k">
            <span class="input-group-text">k</span>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
    <script>
        console.log('Hi!');
    </script>
    @stop