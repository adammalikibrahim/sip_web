@extends('layouts.side')

@section('content')

<div class="container mt-5">
    <div class="card ">
        <div class="card-header">PELAPORAN PRESTASI</div>
        <div class="card-body ">
            <div class="container">
                <form>
                    <div class="form-group">
                        <label for="nama">TIPE LAPORAN </label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                </form>
            </div>

        </div>

        <div class="card-header">DETAIL PRESTASI</div>
        <div class="card-body ">
            <div class="container">
                <form>
                    <div class="form-group">
                        <label for="nama">JUARA </label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <div class="form-group mt-2">
                            <label for="nama">Nomor Rekening</label>
                            <input type="number" class="form-control" id="nama" placeholder="">
                        </div>
                        <div class="form-group mt-3">
                            <label for="text">Nama Bank</label>
                            <input type="text" class="form-control" id="email" placeholder="">
                        </div>
                        <div class="form-group mt-3">
                            <label for="text">Nama Pemilik Bank</label>
                            <input type="text" class="form-control" id="email" placeholder="">
                        </div>
                        </div>
                    <button type="submit" class="btn btn-primary mt-4">Kirim</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
