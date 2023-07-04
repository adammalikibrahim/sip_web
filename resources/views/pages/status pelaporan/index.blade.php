@extends('layouts.side')

@section('content')

<div class="table-responsive mt-5">
    <table class="table table-striped table-hover">
        <thead>
            <div class="card-header">
            <tr>
                <th>No</th>
                <th>Nama Komepetisi</th>
                <th>Tipe Laporan </th>
                <th>Status Laporan </th>
                <th>Keterangan</th>
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
                        Lomba Tidur
                    </td>
                    <td>
                        Tidak ada laporan kan lagi tidur
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary">Menunggu Verifikasi</button>
                    </td>
                    <td>
                        Sangat Nyenyak
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
                        <button type="button" class="btn btn-success">Success</button>
                    </td>
                    <td>
                        Sangat Nyenyak
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
                        <button type="button" class="btn btn-warning">Diverifikasi</button>
                    </td>
                    <td>
                        Sangat Nyenyak
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
                        <button type="button" class="btn btn-danger">Ditolak</button>
                    </td>
                    <td>
                        Sangat Nyenyak
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

@endsection
