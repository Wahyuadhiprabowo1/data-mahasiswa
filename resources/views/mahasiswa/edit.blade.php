@extends('layout.master')

@section('content')
      @if (session('sukses'))
      <div class="alert alert-info" role="alert">
        {{ session('sukses') }}
      </div> 
      @endif
     <header>
       <h3>Edit Data Mahasiswa</h3>
     </header>
      <div class="update-data-mahasiswa">
                  <form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST">
                      {{ csrf_field() }}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nim</label>
                        <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{ $mahasiswa->nim }}">
                        <div id="emailHelp" class="form-text"></div>
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                          <input type="text" value="{{ $mahasiswa->nama_depan }}" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                          <div id="emailHelp" class="form-text" "></div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                          <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $mahasiswa->nama_belakang }}" placeholder="">
                          <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">

                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Pilih Jenis Kelamin</label>
                          <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option selected>---</option>
                            <option value="L" @if ($mahasiswa->jenis_kelamin == 'L')selected @endif
                            >Laki-Laki</option>
                            <option value="P" @if ($mahasiswa->jenis_kelamin == 'P')selected @endif>Perempuan</option>
                          </select>
                        </div>
                      
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Agama</label>
                          <input type="text" name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $mahasiswa->agama }}" placeholder="">
                          <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                          <textarea class="form-control" name="alamat" value=" id="exampleFormControlTextarea1" rows="3">{{ $mahasiswa->alamat }}</textarea>
                        </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
      
@endsection
