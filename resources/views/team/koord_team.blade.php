@extends('layout.admin')

@section('content')

<div class="container">
  <div class="judul text-center">
    <h2>Koordinator Team</h2>
  </div>
    <a href="/koordinatorTeam-create" type="button" class="btn btn-success">Tambah +</a>
  
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
        <form action="/koordinatorTeam" method="GET">
          <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
      </div>
    </div>
  
    <table class="table">
      <div class="row">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Koordinator Team</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp
          @foreach ($data as $koord_team => $row)
          <tr>
            <th scope="row">{{$koord_team + $data->firstItem()}}</th>
            <td>{{$row->codeteam}}</td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
            <td>
              <a href="/koordinatorTeam-update/{{$row->id}}" class="btn btn-info">Edit</a>
              <a href="/deleteKT/{{$row->id}}" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->codeteam}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
{{$data->links()}}

@endsection