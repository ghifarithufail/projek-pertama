@extends('layout.admin')

@section('content')

<body>
    <h1 class="text-center mb-4">Update Hasil Suara</h1>
    <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <form action="/updateHS/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                    <input type="text" name="kelurahan" value="{{old('kelurahan', $data->kelurahan)}}" placeholder="Masukan No KK " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                    <input type="text" name="kecamatan" value="{{$data->kecamatan}}" placeholder="Masukan No NIK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kabupaten/Kota</label>
                    <input type="text" name="kabkota" value="{{$data->kabkota}}" placeholder="Masukan Tempat Lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Provinsi</label>
                    <input type="text" name="provinsi" value="{{$data->provinsi}}" placeholder="Masukan Nama Team" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Dapil</label>
                    <input type="text" name="dapil" value="{{$data->dapil}}" placeholder="Masukan Status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">TPS</label>
                    <input type="text" name="tps" value="{{$data->tps}}" placeholder="Masukan Jenis " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Suara</label>
                    <input type="text" name="suara" value="{{$data->suara}}" placeholder="Masukan Alamat Anda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Calon</label>
                    <select name="calon_id" class="form-select" aria-label="Default select example">
                      <option value="{{$data->calon_id}}">-- {{$data->calegs->calon}} --</option>
                      {{-- @foreach ($datacaleg as $data)
                      <option value="{{$data->id}}">{{$data->calon}}</option>
                       @endforeach --}}
                    </select>
                  </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Koordinator team</label>
                    <select name="codeteam_id" class="form-select" aria-label="Default select example">
                      <option value="{{$data->codeteam_id}}">-- {{$data->koord_teams->codeteam}} --</option>
                      @foreach ($dataKoord_team as $data)
                      <option value="{{$data->id}}">{{$data->codeteam}}</option>
                       @endforeach
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
</body>
        @endsection