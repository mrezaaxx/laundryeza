@extends('templates/header')
@section('content')
<section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#formInputMember">
          <i class="fas fa-pen-square"></i> Tambah Member
        </button>
        <hr>  
        <h3 class="card-title">Data Member</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              </div>
              <!-- /.card-header -->
          <div class="card-body">
          <table id="T_member" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>
          @foreach ($member as $item)
          <tbody>
            <tr>
              <td>{{ $i = (!isset($i)?1: ++$i) }}</td>
              <td>{{ $item->nama }}
              </td>
              <td>{{ $item->jenis_kelamin }}</td>
              <td>{{ $item->tlp }}</td>
              <td><form action="member/{{ $item->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="border-0" onclick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-eraser"></i></button>
                </form> |
                <button type="button" data-bs-toggle="modal" data-bs-target="#formUpdateMember{{ $item->id }}" class="border-0"><i class="fas fa-edit"></i></button> </td>
            </tr>
            @include('member.update')
          @endforeach
          </tbody>
          </table>
          </div>
    </div>
</section>
@include('member.form')
@endsection