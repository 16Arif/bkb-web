@extends('dashboard.layouts.main')
@section('container')
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col-lg-8 text-start">
                <a href="/dashboard/infografisgempa" class="btn btn-secondary mb-3"><span data-feather="chevron-left"></span>
                    Kembali</a>
                <h5 class="mb-3">{{ $infografisgempa->title }}</h5>
                <div class="body-infografis">
                    <img src="https://source.unsplash.com/500x350?news,accident" class="img-fluid rounded-start mb-2"
                        alt="bg-card">
                    <article class="my-2">
                        {!! $infografisgempa->body !!}
                    </article>
                    <form action="/dashboard/infografisgempa/{{ $infografisgempa->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                                data-feather="x-circle"></span> Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
