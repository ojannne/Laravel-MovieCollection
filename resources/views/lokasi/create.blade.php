@extends('adminlte::page')
@section('tittle','𝖥𝗈𝗋𝗆 Lokasi')

@section('content_header')

@stop

@section('content')
<h1>
    <h1><i class="fas fa-regular fa-align-left"></i>
        Form Lokasi</h1>
    <a href="{{ route('lokasi.index') }}" class="btn btn-primary btn-md" role="button"><i class="fas fa-arrow-left"></i>&nbsp;<b>Back</b></a><br><br>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('lokasi.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- cross-site request forgery (CSRF) = pencegahan serangan yang dilakukan oleh pengguna yang tidak terautentikasi --}}
        <div class="form-group">
            <label>Nama Bioskop</label><input type="text" name="name" class="form-control" placeholder="Contoh: XXI Bekasi Cyber Park">
        </div>
        <div class="form-group">
            <label>Alamat</label><input type="text" name="address" class="form-control" placeholder="Contoh: Jl. Cyber Park No. 1">
        </div>
        <div class="form-group">
            <label>Kota</label>
            <select class="form-control" name="city">
                <option value="">-- Pilih Daerah Kota--</option>
                <option value="action">Bekasi</option>
                <option value="anime">Jakarta</option>
                <option value="comedy">Jombang</option>
                <option value="sci-fi">Surabaya</option>
            </select>
        </div>
        <div class="form-group">
            <label>Provinsi</label>
            <select class="form-control" name="state">
                <option value="">-- Pilih Daerah Provinsi--</option>
                <option value="anime">DKI Jakarta</option>
                <option value="action">Jawa Barat</option>
                <option value="comedy">Jawa Timur</option>
                <option value="sci-fi">Jawa Tengah</option>
            </select>
        </div>
        <div class="form-group">
            <label>Link Maps</label><input type="text" name="link_maps" class="form-control" placeholder="Contoh: https://maps.app.goo.gl/kfRTthnn8Gp95SSp8">
        </div>
        <div class="form-group">
            <label>Kode Pos</label><input type="text" name="zip_code" class="form-control" placeholder="Contoh: 17148">
        </div>
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