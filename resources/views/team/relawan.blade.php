@extends('layout.admin')

@section('content')

<div class="container">
  <div class="judul text-center">
    <h2>Relawan</h2>
  </div>
    <a href="/relawan-create" type="button" class="btn btn-success">Tambah +</a>
  
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
        <form action="/relawan" method="GET">
          <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
      </div>
    </div>
  
    <table class="table">
      <div class="row">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">KK</th>
            <th scope="col">NIK</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Status</th>
            <th scope="col">Jenis</th>
            <th scope="col">Alamat</th>
            <th scope="col">RT</th>
            <th scope="col">RW</th>
            <th scope="col">Telephone</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp
          @foreach ($data as $relawan => $row)
          <tr>
            <th scope="row">{{$relawan + $data->firstItem()}}</th>
            <td>{{$row->nama}}</td>
            <td>{{$row->kelurahans->kelurahan}}</td>
            <td>{{$row->no_kk}}</td>
            <td>{{$row->nik}}</td>
            <td>{{$row->tempat_lahir}}</td>
            <td>{{$row->tgl_lahir}}</td>
            <td>{{$row->status}}</td>
            <td>{{$row->jenis}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{$row->rt}}</td>
            <td>{{$row->rw}}</td>
            <td>{{$row->telephone}}</td>
            <td>{{$row->created_at->format ('D d-M-Y')}}</td>
            <td>
              <a href="/relawan-update/{{$row->id}}" class="btn btn-info">Edit</a>
              <a href="/deleteR/{{$row->id}}" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
{{$data->links()}}

@endsection