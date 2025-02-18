@extends('adminlte::page')
@section('title', 'Edit lokasi Bisokop')

@section('content_header')
<h1><i class="fas fa-solid fa-lokasi">&nbsp;</i><b>Edit lokasi Bisokop</b></h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('lokasi.update', $lokasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Name Bisokop</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $lokasi->name }}" required>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <select class="form-control" id="address" name="address" value="{{ $lokasi->address }}" required>
                        <option value="">-- Pilih Daerah Provinsi--</option>
                        <option value="anime">DKI Jakarta</option>
                        <option value="action">Jawa Barat</option>
                        <option value="comedy">Jawa Timur</option>
                        <option value="sci-fi">Jawa Tengah</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="city">Kota</label>
                <select class="form-control" id="city" name="city" value="{{ $lokasi->city }}" required>
                    <option value="">-- Pilih Daerah Kota--</option>
                    <option value="action">Bekasi</option>
                    <option value="anime">Jakarta</option>
                    <option value="comedy">Jombang</option>
                    <option value="sci-fi">Surabaya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="state">Provinsi</label>
                <select class="form-control" id="state" name="state" value="{{ $lokasi->state }}" required>
                    <option value="">-- Pilih Daerah Kota--</option>
                    <option value="action">Bekasi</option>
                    <option value="anime">Jakarta</option>
                    <option value="comedy">Jombang</option>
                    <option value="sci-fi">Surabaya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="release_date">Link Maps</label>
                <input type="text" class="form-control" id="link_maps" name="link_maps" value="{{ $lokasi->link_maps }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('lokasi.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop