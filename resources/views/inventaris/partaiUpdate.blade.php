@extends('layout.admin')

@section('content')

<body>
    <h1 class="text-center mb-4">Update Data Partai</h1>
    <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <form action="/updateP/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="nama" value="{{$data->nama}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                    <input name="image" type="file" class="form-control">
                    <img src="{{asset('fotopartai/'.$data->image)}}"  width="70px" height="70px" alt="image">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
</body>
        @endsection