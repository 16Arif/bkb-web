@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h3">Infografis Gempabumi</h3>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <div class="create mb-2">
            <a href="/dashboard/infografisgempa/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($infografisgempa as $info)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $info->title }}</td>
                        <td>
                            <a href="/dashboard/infografisgempa/{{ $info->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/infografisgempa/{{ $info->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/infografisgempa/{{ $info->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
