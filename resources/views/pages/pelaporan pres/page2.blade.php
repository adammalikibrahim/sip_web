@extends('layouts.side')

@section('content')

<div class="container mt-5">
    <div class="card ">
        <div class="card-header">DETAIL KOMPETISI</div>
        <div class="card-body ">
            <div class="container">
                <form>
                    <div class="form-group">
                        <label for="text">Jenis Kompetisi</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih jenis Kompetisi</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="text">Nama Kompetisi</label>
                        <input type="text" class="form-control" id="nama kompetisi" >
                    </div>
                    <div class="form-group mt-3">
                        <label for="text">Cabang Kompetisi</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Cabang Kompetisi</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="text">Penyelenggara Kompetisi</label>
                        <input type="text"  class="form-control" id="penyelenggara" placeholder="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="number">Tanggal Pelaksanaan Kompetisi</label>
                        <input type="number"  class="form-control" id="programstudi" placeholder="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="text">Tingkat Kompetisi</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Tingkat Kompetisi</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="number">Jumalah Prestasi</label>
                        <input type="number"  class="form-control" id="programstudi" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Kirim</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
