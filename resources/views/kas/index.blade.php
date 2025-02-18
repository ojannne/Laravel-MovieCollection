@extends('adminlte::page')
@section('title','kas')

@section('content_header')
<h1><i class="fas fa-solid fa-kas">&nbsp;</i><b>Data Movie Collection</b></h1>
@stop

@section('content')
@if(session('success'))
<div class="alert alert-info">
    {{ session('success') }}
</div>
@endif

@php
$ar_judul = ['No', 'Name', 'Money', 'Jumlah','Image', 'Action'];
$no = 1;
@endphp

<a class="btn btn-primary" href="#" role="button">
    <i class="fas fa-plus">&nbsp;</i>Add Movie
</a>
<a href="{{ url('kaspdf') }}" class="btn btn-danger">
    <i class="fas fa-file-pdf"></i> Export
</a>

<br><br>
<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    @foreach($ar_judul as $jdl)
                    <th>{{ $jdl }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($ar_kas as $fm)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $fm->name }}</td>
                    <td>{{ $fm->money }}</td>
                    <td>{{ $fm->jumlah }}</td>
                    <td width="20%">
                        @if(!empty($fm->foto))
                        <img src="{{ asset('images/' . $fm->foto) }}" width="80%" />
                        @else
                        <img src="{{ asset('images/nophoto.jpg') }}" width="80%" />
                        @endif
                    </td>
                    <td>
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Anda yakin data di hapus?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr> 
                
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
@section('footer')
<div class="float-right d-none d-sm-block">
    <a href="https://www.instagram.com/ojann.ae/" target="_blank" rel="noopener noreferrer"></i>ojann.ae</a>
</div>
<strong>&copy; {{ date('Y') }} <a href="https://www.instagram.com/ojann.ae/">Software Development</a>.</strong> All rights reserved.
@stop
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/admin_custom.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    console.log('Hi!');
</script>

<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
@stop