@extends('adminlte::page')
@section('tittle','𝖥𝗈𝗋𝗆 Film')

@section('content_header')

@stop

@section('content')
<h1>
    <h1><i class="fas fa-regular fa-align-left"></i>
        Form Film</h1>
    <a href="{{ route('film.index') }}" class="btn btn-primary btn-md" role="button"><i class="fas fa-arrow-left"></i>Back</a><br><br>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('film.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- cross-site request forgery (CSRF) = pencegahan serangan yang dilakukan oleh pengguna yang tidak terautentikasi --}}
        <div class="form-group">
            <label>Name Film</label><input type="text" name="nama" class="form-control" placeholder="Contoh: The Avengers">
        </div>       
        <div class="form-group">
            <label>Sutradara</label><input type="text" name="sutradara" class="form-control" placeholder="Contoh: Joss Whedon">
        </div>       
        <div class="form-group">
            <label>Genre</label>
            <select class="form-control" name="genre">
                <option value="">-- Pilih Genre --</option>
                <option value="action">action</option>
                <option value="comedy">comedy</option>
                <option value="romance">Romance</option>
                <option value="sci-fi">Sci-fi</option>
                <option value="anime">anime</option>
            </select>
        </div>
        <div class="form-group">
            <label>Release Date</label> <input type="date" name="release_date" class="form-control">
        </div>
        <div class="form-group">
            <label>Rating</label><input type="number" step="0.1" name="rating" class="form-control">
        </div>
        <div class="form-group">
            <label>Foto</label><br><input type="file" class="form-file" name="foto" />
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