@extends('dashboard.layouts.main')
@section('container')
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-8 text-start">
                <h5 class="mb-3">{{ $news->title }}</h5>
                <img src="https://source.unsplash.com/500x350?news,accident" class="img-fluid rounded-start mb-2"
                    alt="bg-card">
                <article class="my-2">
                    {!! $news->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
