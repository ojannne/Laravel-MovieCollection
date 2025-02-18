@extends('adminlte::page')
@section('title', 'Edit tiket')

@section('content_header')
<h1><i class="fas fa-solid fa-ticket-alt">&nbsp;</i><b>Edit tiket</b></h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('tiket.update', $tiket->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $tiket->name }}" required>
            </div>
            
            <div class="form-group">
            <label>Film</label>
            <select class="form-control" id="event" name="event" value="{{ $tiket->event }}" required>
                <option value="">-- Pilih Film --</option>
                <option value="Interstellar">Interstellar</option>
                <option value="Dua Hati Biru">Dua Hati Biru</option>
                <option value="The Wild Robot">The Wild Robot</option>
                <option value="Agak Laen">Agak Laen</option>
                <option value="Joker: Folie à Deux">Joker: Folie à Deux</option>
            </select>
        </div>
    
            <div class="form-group">
                <label for="event_date">Tanggal Tayang</label>
                <input type="date" class="form-control" id="event_date" name="event_date" value="{{ $tiket->event_date }}" required>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" step="1" class="form-control" id="quantity" name="quantity" value="{{ $tiket->quantity }}" required>
            </div>
        <label>harga</label> 
        <div class="input-group">
            <span class="input-group-text">Rp.</span>
            <input type="text"  class="form-control" name="price" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Contoh:10.000k">
        </div>
        <br><br>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('tiket.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop