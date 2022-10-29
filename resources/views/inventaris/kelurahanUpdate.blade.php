@extends('layout.admin')

@section('content')

<body>
    <h1 class="text-center mb-4">Update Data Kelurahan</h1>
    <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <form action="/updatek/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                    <input type="text" name="kelurahan" value="{{$data->kelurahan}}" placeholder="Masukan Nama Kelurahan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">kecamatan</label>
                    <input type="text" name="kecamatan" value="{{$data->kecamatan}}" placeholder="Masukan Nama Kecamatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kabupaten/Kota</label>
                    <input type="text" name="kabkota" value="{{$data->kabkota}}" placeholder="Masukan Nama Kabupaten/kota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Provisnsi</label>
                    <input type="text" name="provinsi" value="{{$data->provinsi}}" placeholder="Masukan Nama provinsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Dapil</label>
                    <input type="text" name="dapil" value="{{$data->dapil}}" placeholder="Masukan Dapil" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                  </div>
                  
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Zip Code</label>
                    <input type="text" name="zip_code" value="{{$data->zip_code}}" placeholder="Masukan Zip Code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                  </div>
                  

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
</body>
        @endsection