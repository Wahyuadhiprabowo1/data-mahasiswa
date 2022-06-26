@extends('layout.master')

@section('content')
    
@if (session('sukses'))
<div class="alert alert-info" role="alert">
  {{ session('sukses') }}
</div> 
@endif

  <div class="row">
      <div class="col-6">
          <h1>Data Mahasiswa</h1>
      </div>
      <div class="col-6">
          
          <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Tambah Data Mahasiswa
              </button>

      </div>
      
      <table class="table table-hover table-bordered table-striped">
          <tr class="table-light">
              {{-- <th>No</th> --}}
              <th>NIM</th>
              <th>Nama Depan</th>
              <th>Nama Belakang</th>
              <th>Jenis Kelamin</th>
              <th>Agama</th>
              <th>Alamat</th>
              <th>Edit</th>
              <th>Hapus</th>
          </tr>
          @foreach ($data_mahasiswa as $mahasiswa)
              <tr class="">
                  {{-- <td>{{ $mahasiswa->id }}</td> --}}
                  <td>{{ $mahasiswa->nim }}</td>
                  <td>{{ $mahasiswa->nama_depan }}</td>
                  <td>{{ $mahasiswa->nama_belakang }}</td>
                  <td>{{ $mahasiswa->jenis_kelamin }}</td>
                  <td>{{ $mahasiswa->agama }}</td>
                  <td>{{ $mahasiswa->alamat }}</td>
                  <td><a href="{{ route('mahasiswa.edit',$mahasiswa->id) }}" class="btn btn-warning btn-sm mr-5">Edit</a></td>
                  <td>
                    <form action="{{ route('mahasiswa.destroy',$mahasiswa->id) }}" method="post">
                    {{ csrf_field() }}
                      <button class="btn btn-danger btn-sm mr-5" onclick="return confirm('Hapus data ini?')">Hapus</button>
                  </form>
                  </td>
                  
              </tr>
          @endforeach
      </table>
  </div>
</div>

<div class="tambah-data-mahasiswa">
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-content">

                      <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Tambahkan Mahasiswa</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                          
                          <form action="mahasiswa/create" method="POST">
                              {{ csrf_field() }}
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nim</label>
                                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                <div id="emailHelp" class="form-text"></div>
                              </div>
                              <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                                  <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                  <div id="emailHelp" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                                  <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                  <div id="emailHelp" class="form-text"></div>
                                </div>
                                <div class="mb-3">

                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Pilih Jenis Kelamin</label>
                                  <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                    <option selected>---</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                  </select>
                                </div>
                              
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Agama</label>
                                  <input type="text" name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                  <div id="emailHelp" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                  <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            
                            

                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                      </div>
                  </div>
                  </div>
              </div>




@endsection