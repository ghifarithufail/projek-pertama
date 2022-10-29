@extends('layout.admin')

@section('content')

<div class="container">
  <div class="judul text-center">
    <h2>Team Relawan</h2>
  </div>
    <a href="/teamRelawan-create" type="button" class="btn btn-success">Tambah +</a>
  
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
        <form action="/teamRelawan" method="GET">
          <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
      </div>
    </div>
  
    <table class="table">
      <div class="row">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Team</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp
          @foreach ($data as $team_relawan => $row)
          <tr>
            <th scope="row">{{$team_relawan + $data->firstItem()}}</th>
            <td>{{$row->namateam}}</td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
            <td>
              <a href="/teamRelawan-update/{{$row->id}}" class="btn btn-info">Edit</a>
              <a href="/deleteTR/{{$row->id}}" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->namateam}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
{{$data->links()}}

@endsection