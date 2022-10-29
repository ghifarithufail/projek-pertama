@extends('layout.admin')

@section('content')

<div class="container">
  <div class="judul text-center">
    <h2>CALEG</h2>
  </div>
    <a href="/caleg-create" type="button" class="btn btn-success">Tambah +</a>
  
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
        <form action="/calegs" method="GET">
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
            <th scope="col">Partai</th>
            <th scope="col">Foto</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp
          @foreach ($data as $caleg => $row)
          <tr>
            <th scope="row">{{$caleg + $data->firstItem()}}</th>
            <td>{{$row->calon}}</td>
            <td>{{$row->partais->nama}}</td>
            <td>
              <img src="{{ asset('fotocalon/'.$row->image) }}" alt="" style="width: 60px;">
            </td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
            <td>
              <a href="/caleg-update/{{$row->id}}" class="btn btn-info">Edit</a>
              <a href="/delete/{{$row->id}}" class="btn btn-danger delete hapus" data-id="{{$row->id}}" data-calon="{{$row->calon}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$('.hapus').click( function({
  var caleg_id = $(this).attr('data-id');
  alert(caleg_id);
      swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
        });
      } else {
        swal("Your imaginary file is safe!");
      }
    });

});

</script>
{{$data->links()}}

@endsection