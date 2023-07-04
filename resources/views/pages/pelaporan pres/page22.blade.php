@extends('layouts.side')

@section('content')

<div class="container mt-5">
    <div class="card ">
        <div class="card-header">DATA DIRI MAHASISWA</div>
        <div class="card-body ">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Individu
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Kelompok
                </label>
              </div>
            <div class="container">
                <form>
                    <div class="form-group mt-2">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">No HP</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan no hp">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                    </div>
                    <div class="form-group mt-3">
                        <label for="study">Program Studi</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Program Studi</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="stock">Fakultas</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Fakultas</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                    </div>
                </form>
            </div>
        <div class="card-body ">
          <div class="">
            <div class="container">
                <form>
                    <div class="form-group mt-5">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">No HP</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan no hp">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                    </div>
                    <div class="form-group mt-3">
                        <label for="study">Program Studi</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Program Studi</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="stock">Fakultas</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Fakultas</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                    </div>
                    <a href="{{url('page2.blade.php')}}" class="btn btn-primary mt-5">Selanjunya</a>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection
