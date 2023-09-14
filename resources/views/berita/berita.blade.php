@extends('layouts.main')

@section('container')
    <section id="beritapublication">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h4 class="mb-3 text-center">{{ $title }} </h4>

                    <div class="row justify-content-center mb-3">
                        <div class="col-md-6">
                            <form action="/berita">
                                @if (request('author'))
                                    <input type="hidden" name="author" value="{{ request('author') }}">
                                @endif
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari" name="search"
                                        value="{{ request('search') }}">
                                    <button class="btn btn-outline-success" type="submit">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    @if ($newss->count())
                        <div class="card mb-3 text-center">
                            <img src="https://source.unsplash.com/1200x400?news,water" class="card-img-top" alt="bg-card">
                            <div class="card-body">
                                <a href="/berita/{{ $newss[0]->slug }}">
                                    <h5 class="card-title"> {{ $newss[0]->title }}</h5>
                                </a>
                                <p>
                                    Oleh : <a href="/berita?author={{ $newss[0]->author->username }}">
                                        {{ $newss[0]->author->name }}</a><br><small class="text-muted">
                                        {{ $newss[0]->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $newss[0]->excerpt }}</p>
                            </div>
                        </div>


                </div>
            </div>
            <div class="row">
                @foreach ($newss->skip(1) as $news)
                    <div id="foreach-berita" class="col-md-6">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col mt-2 my-auto">
                                    <img src="https://source.unsplash.com/400x400?news,water"
                                        class="img-fluid rounded-start" alt="bg-card">
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title"><a
                                                href="/berita/{{ $news->slug }}">{{ $news->title }}</a>
                                        </h5>
                                        <p>
                                            Oleh : <a href="/berita?author={{ $news->author->username }}">
                                                {{ $news->author->name }}</a><br><small class="text-muted">
                                                {{ $news->created_at->diffForHumans() }}
                                            </small>
                                        </p>
                                        <p>{{ $news->excerpt }}...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center fs-4">Berita belum ada</p>
            @endif
        </div>
        <div class="container d-flex justify-content-center">
            {{ $newss->onEachSide(0)->links() }}
        </div>
    </section>


@endsection
