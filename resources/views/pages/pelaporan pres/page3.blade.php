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
                    <button type="submit" class="btn btn-primary mt-4">Kirim</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
