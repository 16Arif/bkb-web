@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Infografis Terbit Terbenam Matahari</h1>
    </div>
    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($infografisttm as $info)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $info->title }}</td>
                        <td>
                            <a href="/dashboard/infografisttm/{{ $info->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
