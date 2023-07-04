@extends('layouts.side')

@section('content')
<div class="container mt-5 ">

    <h3>Hai {{Auth::user()->name}} !</h3>
</div>
<div class="container mt-5 ms-5">
            <div class="card ms-5" style="width: 90%; height: 1000%">
                <div class="card-body d-flex">
                    <div class="col-4">
                        <img src="{{url('assets/img/p.png')}}" class="w-100 h-100   " alt="">
                    </div>
                    <div class="col-8 mt-5">
                        <h3 class="text-center mb-5">Selamat Datang di SIP</h3>
                        <span class="text-secondary text-center">SIP adalah sistem informasi pengolahan
                            data prestasi kompetisi mahasiswa
                            Fakultas Rekayasa Industri Univesitas Telkom.</span>
                    </div>
            </div>
        </div>
</div>
@endsection
