@extends('layout.admin')

@section('content')
<body>
    
    <h1 class="text-center mb-4">Tambah Data Team</h1>
    <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <form action="/createR" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama" placeholder="Masukan Nama Team" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>
                    
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                    <select name="kelurahan_id" class="form-select" aria-label="Default select example">
                        <option selected>Pilih Jenis Kelurahan</option>
                        @foreach ($datakelurahan as $data)
                        <option value="{{$data->id}}">{{$data->kelurahan}}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">KK</label>
                        <input type="number" name="no_kk" placeholder="Masukan No KK " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIK</label>
                        <input type="number" name="nik" placeholder="Masukan No NIK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" placeholder="Masukan Nama Team" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Status</label>
                        <input type="text" name="status" placeholder="Masukan Status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis</label>
                        <input type="text" name="jenis" placeholder="Masukan Jenis " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" placeholder="Masukan Alamat Anda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">RT</label>
                        <input type="text" name="rt" placeholder="Masukan No RT" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">RW</label>
                        <input type="text" name="rw" placeholder="Masukan No RW" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telephone</label>
                        <input type="text" name="telephone" placeholder="Masukan No Telpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
</body>
@endsection