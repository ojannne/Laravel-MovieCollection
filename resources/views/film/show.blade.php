@extends('adminlte::page')
@section('title', 'Show Film')

@section('content_header')
<h1><i class="fas fa-solid fa-film">&nbsp;</i><b>Show Film</b></h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="media">
            @if(!empty($film->foto))
                <img src="{{ asset('images/' . $film->foto) }}" width="30%" class="mr-3" />
            @else
                <img src="{{ asset('images/nophoto.jpg') }}" width="30%" class="mr-3" />
            @endif
            <div class="media-body">
                <h3><u>{{ $film->nama }}</u></h3>
                <p>
                    Sutradara: {{ $film->sutradara }}<br />
                    Genre: {{ $film->genre }}<br />
                    Release Date: {{ $film->release_date }}<br />
                    Rating: {{ $film->rating }}<br />
                </p>
                <hr />
                <a href="{{ url('/film') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop