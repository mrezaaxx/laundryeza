@extends('templates.header')
@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-dark outline" data-bs-toggle="modal" data-bs-target="#formInputPaket">
            <i class="fas fa-pen-square" ></i> Tambah Data
          </button> 
          <hr>
          <h3 class="card-title">Data Paket</h3>
          
        </div>
    <div class="container-fluid">
      <div class="row">
        <div class="card-body">
        <table id="T_paket" class="table table-bordered table-hover">
        <thead>
        <tr>
        <th>No</th>
        <th>Nama Outlet</th>
        <th>Jenis</th>
        <th>Nama Paket</th>
        <th>Harga</th>
        <th>Aksi</th>
        </tr>
        </thead>
        @foreach ($paket as $item)
        <tbody>
        <tr>
        <td>{{ $i = (!isset($i)?1: ++$i) }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->jenis  }}</td>
        <td>{{ $item->nama_paket  }}</td>
        <td>{{ $item->harga  }}</td>
        <td><form action="paket/{{ $item->id }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button class="border-0" onclick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-eraser"></i></button>
          </form> |
          <button type="button" data-bs-toggle="modal" data-bs-target="#formUpdatePaket{{ $item->id }}" class="border-0"><i class="fas fa-edit"></i></button> </td>
        </tr>
          @include('paket.update')
        @endforeach
        </tbody>
        </table>
        </div>
        <!-- /.card-body -->
        </div>
    </div>
</section>
@include('paket.form')
@endsection