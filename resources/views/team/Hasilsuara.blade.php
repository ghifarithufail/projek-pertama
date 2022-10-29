@extends('layout.admin')

@section('content')

<div class="container">
  <div class="judul text-center">
    <h2>Hasil Suara</h2>
  </div>
    <a href="/hasilsuara-create" type="button" class="btn btn-success">Tambah +</a>
  
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
            <th scope="col">Calon</th>
            <th scope="col">Nama Koordinator Team</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">KabKota</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Dapil</th>
            <th scope="col">Tps</th>
            <th scope="col">Suara</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp
          @foreach ($data as $HasilSuara => $row)
          <tr>
            <th scope="row">{{$HasilSuara + $data->firstItem()}}</th>
            <td>{{$row->calegs->calon}}</td>
            <td>{{$row->koord_teams->codeteam}}</td>
            <td>{{$row->kelurahan}}</td>
            <td>{{$row->kecamatan}}</td>
            <td>{{$row->kabkota}}</td>
            <td>{{$row->provinsi}}</td>
            <td>{{$row->dapil}}</td>
            <td>{{$row->tps}}</td>
            <td>{{$row->suara}}</td>
            <td>{{$row->created_at->format ('D d-M-Y')}}</td>
            <td>
              <a href="/hasilsuara-update/{{$row->id}}" class="btn btn-info">Edit</a>
              <a href="/deleteKT/{{$row->id}}" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->codeteam}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
{{$data->links()}}

@endsection