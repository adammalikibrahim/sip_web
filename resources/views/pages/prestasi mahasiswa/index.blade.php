@extends('layouts.side')

@section('content')

<div class="container mt-5">
    <div class="card ">
        <div class="card-header">DATA DIRI MAHASISWA</div>
        <div class="card-body ">
            <div class="container">
                <form>
                    <div class="table-responsive ">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>Nama Komepetisi</th>

                                    <th>Aksi</th>
                                </tr>
                            </div>
                            </thead>
                            <tbody>

                                    <tr>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            Yanti
                                        </td>
                                        <td>
                                           Kompetisi tidur
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class='bx bx-edit-alt'></i>
                                                <form action="" method="post">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            02
                                        </td>
                                        <td>
                                            Lomba Tidur
                                        </td>
                                        <td>
                                            Tidak ada laporan kan lagi tidur
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class='bx bx-edit-alt'></i>
                                                <form action="" method="post">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            03
                                        </td>
                                        <td>
                                            Lomba Tidur
                                        </td>
                                        <td>
                                            Tidak ada laporan kan lagi tidur
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class='bx bx-edit-alt'></i>
                                                <form action="" method="post">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            04
                                        </td>
                                        <td>
                                            Lomba Tidur
                                        </td>
                                        <td>
                                            Tidak ada laporan kan lagi tidur
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class='bx bx-edit-alt'></i>
                                                <form action="" method="post">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                    <a href="#" class="btn btn-primary mt-5">Selanjunya</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
