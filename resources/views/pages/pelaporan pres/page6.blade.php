@extends('layouts.side')

@section('content')

<div class="container mt-5">
    <div class="card ">
        <div class="card-header">Detail Dosen Pembimbing</div>
        <div class="card-body ">
            <div class="container">
                <form>
                    <div class="form-group mt-2">
                        <label for="nidn">NIDN</label>
                        <input type="number" class="form-control" id="nama" placeholder="Masukkan NIDN">
                    </div>
                    <div class="form-group mt-3">
                        <label for="number">NIP</label>
                        <input type="number" class="form-control" id="email" placeholder="Masukkan NIP">
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mt-3">
                        <label for="studi">Program Study</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Program Studi</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="fakultas">Fakultas:</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Fakultas</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="fileUpload">Upload Surat Tugas Peserta</label>
                        <button type="button" class="btn btn-primary" onclick="addFileInput()">Add File</button>
                      </div>
                    <a href="#" class="btn btn-primary mt-5">Selanjunya</a>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection

<button></button>
