@extends('layouts.app')

@section('page-title')
    Comics
@endsection

@section('page-main')
    <section class="comics py-5 bg-dark">
        <div class="container py-5">
            <button type="button" class="btn btn-primary rounded-0">
                <strong>
                    CURRENT SERIES
                </strong>
            </button>
        </div>
        <div class="container">
            <div class="row g-4">
                @foreach ($comics as $index => $comic)
                    <div class="col-2">
                        <a class="comic_link" href="{{route('comic', ['id' => $index])}}">
                            <div class="card h-100 border-0 rounded-bottom-0">
                                <img class="card-img-top h-75" src="{{ $comic['thumb'] }}" alt="">
                                <div class="card-body bg-dark text-white">
                                    {{ $comic['series'] }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex py-5 justify-content-center">
                <button type="button" class="btn btn-primary rounded-0 px-5">
                    <strong>
                        LOAD MORE
                    </strong>
                </button>
            </div>
        </div>
    </section>
@endsection