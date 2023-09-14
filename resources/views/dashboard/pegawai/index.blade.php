@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h3">Data Pegawai Stasiun Geofisika Balikpapan</h3>
    </div>
    <a href="/dashboard/pegawai/create" class="btn btn-primary mb-3">Tambah Data</a>

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $pegawai)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pegawai->name }}</td>
                        <td class="text-muted">{{ $pegawai->jabatan }}</td>
                        <td>
                            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
