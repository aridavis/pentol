@extends('master')

@section('content')
<section class="concert-collections">
    <div class="container">
        <div class="featured-event">
            <h2 class="mb-3">Featured Event</h2>
            <div class="row">
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
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/concert/concert2.jpg') }}" alt="">
                        </div>
                        <div class="card-word">
                            <a class="concert-title" href="{{ url('concert-detail') }}">
                                Night Party
                            </a>
                            <div class="concert-date">
                                <i class="fa fa-calendar"></i>
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/concert/concert3.jpg') }}" alt="">
                        </div>
                        <div class="card-word">
                            <a class="concert-title" href="{{ url('concert-detail') }}">
                                Super Junior: Super Show 6
                            </a>
                            <div class="concert-date">
                                <i class="fa fa-calendar"></i>
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/concert/concert4.jpg') }}" alt="">
                        </div>
                        <div class="card-word">
                            <a class="concert-title" href="{{ url('concert-detail') }}">
                                Twice Land: The Opening Core
                            </a>
                            <div class="concert-date">
                                <i class="fa fa-calendar"></i>
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/concert/concert5.jpg') }}" alt="">
                        </div>
                        <div class="card-word">
                            <a class="concert-title" href="{{ url('concert-detail') }}">
                                Blackpink In Your Area
                            </a>
                            <div class="concert-date">
                                <i class="fa fa-calendar"></i>
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/concert/concert6.jpg') }}" alt="">
                        </div>
                        <div class="card-word">
                            <a class="concert-title" href="{{ url('concert-detail') }}">
                                Exo Planet Exodium
                            </a>
                            <div class="concert-date">
                                <i class="fa fa-calendar"></i>
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="upcoming-event">
            <h2 class="mb-3">Upcoming Event</h2>
            <div class="row">
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
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/concert/concert2.jpg') }}" alt="">
                        </div>
                        <div class="card-word">
                            <a class="concert-title" href="{{ url('concert-detail') }}">
                                Night Party
                            </a>
                            <div class="concert-date">
                                <i class="fa fa-calendar"></i>
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/concert/concert3.jpg') }}" alt="">
                        </div>
                        <div class="card-word">
                            <a class="concert-title" href="{{ url('concert-detail') }}">
                                Super Junior: Super Show 6
                            </a>
                            <div class="concert-date">
                                <i class="fa fa-calendar"></i>
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/concert/concert4.jpg') }}" alt="">
                        </div>
                        <div class="card-word">
                            <a class="concert-title" href="{{ url('concert-detail') }}">
                                Twice Land: The Opening Core
                            </a>
                            <div class="concert-date">
                                <i class="fa fa-calendar"></i>
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/concert/concert5.jpg') }}" alt="">
                        </div>
                        <div class="card-word">
                            <a class="concert-title" href="{{ url('concert-detail') }}">
                                Blackpink In Your Area
                            </a>
                            <div class="concert-date">
                                <i class="fa fa-calendar"></i>
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/concert/concert6.jpg') }}" alt="">
                        </div>
                        <div class="card-word">
                            <a class="concert-title" href="{{ url('concert-detail') }}">
                                Exo Planet Exodium
                            </a>
                            <div class="concert-date">
                                <i class="fa fa-calendar"></i>
                                26 Feb 2021
                            </div>
                            <div class="concert-price">
                                <div class="text-danger">$300</div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
