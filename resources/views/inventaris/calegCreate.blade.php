@extends('layout.admin')

@section('content')
<body>
    
    <h1 class="text-center mb-4">Tambah Data Caleg</h1>
    <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <form action="/createC" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="calon" placeholder="Masukan Nama Calon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Partai</label>
                    <select name="partai_id" class="form-select" aria-label="Default select example">
                      <option selected>Pilih Jenis Partai</option>
                      @foreach ($datacaleg as $data)
                      <option value="{{$data->id}}">{{$data->nama}}</option>
                      @endforeach
                    </select>
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