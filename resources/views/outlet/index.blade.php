@extends('templates/header')
@section('content')
<section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#formInputOutlet">
          <i class="fas fa-pen-square"></i> Tambah Outlet
      </button>  
      <hr>
      <h3 class="card-title">Data Outlet</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
          <div class="card-body">
          <table id="T_outlet" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th class="d-none">Id</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>
          @foreach ($outlet as $item)
          <tbody>
            <tr>
              <td>{{ $i = (!isset($i)?1: ++$i) }}</td>
              <td class="d-none">{{ $item->id }}</td>
              <td>{{ $item->nama }}
              </td>
              <td>{{ $item->alamat }}</td>
              <td>{{ $item->tlp }}</td>
              <td><form action="outlet/{{ $item->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="border-0" onclick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-eraser"></i></button>
                </form> |
                <button type="button" data-bs-toggle="modal" data-bs-target="#formUpdateOutlet{{ $item->id }}" class="border-0"><i class="fas fa-edit"></i></button> 
              </td>
            </tr>
          @include('outlet.update')
          @endforeach
          </tbody>
          </table>
          </div>
    </div>
</section>
@include('outlet.form')
@endsection