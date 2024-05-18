@extends('layouts.app')

@section('page-title')
    Comics Details
@endsection

@section('page-main')
    <div class="bg-primary blue_coso">

    </div>
    <div class="container comic_image">
        <div class="my_img_size">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
    </div>
    <div class="container comic_main_info py-5">
        <div class="row">
            <div class="col-8">
                <h2>
                    {{ $comic['title'] }} : {{ $comic['series'] }}
                </h2>
                <div class="row">
                    <div class="col-9 price_avaiable d-flex justify-content-between">
                        <div class="price">
                            <span class="text-secondary ps-3">U.S. Price:</span>
                            <span class="text-white">{{ $comic['price'] }}</span>
                        </div>
                        <div class="avaiable">
                            <span class="text-secondary">
                                AVAIABLE
                            </span>
                        </div>
                    </div>
                    <div class="col-3 check_avaiable text-center text-white">
                        Check Avaiability
                    </div>
                    <p>
                        {{ $comic['description'] }}
                    </p>
                </div>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <strong class="text-secondary">
                        ADVERTISEMENT
                    </strong>
                </div>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="bg-light border-top">
        <div class="container comic_other_info py-5">
            <div class="row">
                <div class="col-6">
                    <h3>
                        <strong>
                            Talent
                        </strong>
                    </h3>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            Art by:
                        </div>
                        <div class="col-8">
                            Name 1,Name 2,Name 3,Name 4,Name 5,Name 6,Name 7
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            Written by:
                        </div>
                        <div class="col-8">
                            Name 1,Name 2,Name 3,Name 4,Name 5,Name 6,Name 7
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-6">
                    <h3>
                        <strong>
                            Specs
                        </strong>
                    </h3>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            Series:
                        </div>
                        <div class="col-8">
                            {{ $comic['series'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            U.S. Price:
                        </div>
                        <div class="col-8">
                            {{ $comic['price'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            On Sale Date:
                        </div>
                        <div class="col-8">
                            {{ $comic['sale_date'] }}
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection