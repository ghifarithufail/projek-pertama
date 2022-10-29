@extends('layout.admin')

@section('content')

<div class="container">
  <div class="judul text-center">
    <h2>KELURAHAN</h2>
  </div>
    <a href="/kelurahan-create" type="button" class="btn btn-success">Tambah +</a>
  
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
        <form action="/kelurahan" method="GET">
          <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
      </div>
    </div>
  
    <table class="table">
      <div class="row">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Kab/Kota</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Dapil</th>
            <th scope="col">Zip Code</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp
          @foreach ($data as $kelurahan => $row)
          <tr>
            <th scope="row">{{$kelurahan + $data->firstItem()}}</th>
            <td>{{$row->kelurahan}}</td>
            <td>{{$row->kecamatan}}</td>
            <td>{{$row->kabkota}}</td>
            <td>{{$row->provinsi}}</td>
            <td>{{$row->dapil}}</td>
            <td>{{$row->zip_code}}</td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
            <td>
              <a href="/kelurahan-update/{{$row->id}}" class="btn btn-info">Edit</a>
              <a href="/deleteK/{{$row->id}}" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
{{$data->links()}}

@endsection