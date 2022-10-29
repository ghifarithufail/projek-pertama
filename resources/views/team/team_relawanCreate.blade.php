@extends('layout.admin')

@section('content')
<body>
    
    <h1 class="text-center mb-4">Tambah Data Team</h1>
    <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <form action="/createTR" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="namateam" placeholder="Masukan Nama Team" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                  </div>

                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
</body>
@endsection