@extends('layout.admin')

@section('content')

<body>
    <h1 class="text-center mb-4">Tambah Data Partai</h1>
    <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <form action="/createP" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="nama" placeholder="Masukan Nama Partai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                    <input name="image" type="file" class="form-control">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
</body>
        @endsection