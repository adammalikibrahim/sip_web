@extends('layouts.side')

@section('content')

<div class="container mt-5">
    <div class="card ">
        <div class="card-header">BUKTI KOMPETISI</div>
        <div class="card-body ">
            <div class="container">
                <form>
                    <div class="form-group">
                        <label for="fileUpload">Upload Surat Tugas Peserta</label>
                        <button type="button" class="btn btn-primary" onclick="addFileInput()">Add File</button>
                      </div>

                    <div class="form-group mt-3">
                        <label for="text">Bukti Mengikuti Kompetisi</label>
                        <input type="text" class="form-control" id="nama kompetisi" >
                    </div>
                    <div class="form-group mt-3">
                        <label for="text"> Foto Formal dan Non Formal</label>
                        <input type="number"  class="form-control" id="cabang" placeholder="cabang kompetisi">

                    <button type="submit" class="btn btn-primary mt-4">Kirim</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
