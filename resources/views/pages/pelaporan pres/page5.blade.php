@extends('layouts.side')

@section('content')

<div class="container mt-5">
    <div class="card ">
        <div class="card-header">EVALUASI KOMPETISI</div>
        <div class="card-body ">
            <div class="container">
                <form>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Sebelum Kompetisi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div><div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Saat Kompetisi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Hasil Kompetisi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary mt-4">Kirim</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection

