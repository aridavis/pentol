@extends('master')

@section('content')
<section class="concert-collections">
    <div class="container">
        <div class="featured-event">
            <h2 class="mb-3">Featured Event</h2>
            <div class="row">
                @for($i = 0; $i < 6; $i++)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset('images/concert/concert1.jpg') }}" alt="">
                            </div>
                            <div class="card-word">
                                <a class="concert-title" href="{{ url('concert-detail') }}">
                                    BTS World Tour: Love Yourself
                                </a>
                                <div class="concert-date">
                                    <i class="fa fa-calendar"></i>
                                    26 Feb 2019
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
@endsection
