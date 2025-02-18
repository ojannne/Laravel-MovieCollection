@extends('adminlte::page')
@section('title', 'Edit Film')

@section('content_header')
<h1><i class="fas fa-solid fa-film">&nbsp;</i><b>Edit Film</b></h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('film.update', $film->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Name Film</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $film->nama }}" required>
            </div>
            <div class="form-group">
                <label for="sutradara">Sutradara</label>
                <input type="text" class="form-control" id="sutradara" name="sutradara" value="{{ $film->sutradara }}" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select class="form-control" id="genre" name="genre" value="{{ $film->genre }}" required>
                <option value="">-- Pilih Genre --</option>
                <option value="action">action</option>
                <option value="anime">anime</option>
                <option value="romance">Romance</option>
                <option value="comedy">comedy</option>
                <option value="sci-fi">Sci-fi</option>
            </select>
            </div>          
            <div class="form-group">
                <label for="release_date">Release Date</label>
                <input type="date" class="form-control" id="release_date" name="release_date" value="{{ $film->release_date }}" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" step="0.1" class="form-control" id="rating" name="rating" value="{{ $film->rating }}" required>
            </div>
            <div class="form-group">
                <label for="foto">Image:</label>
                <input type="file" class="form-file" id="foto" name="foto">
                <br>
                @if(!empty($film->foto))
                    <img src="{{ asset('images/' . $film->foto) }}" width="10%" />
                @else
                    <img src="{{ asset('images/nophoto.jpg') }}" width="80%" />
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('film.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop