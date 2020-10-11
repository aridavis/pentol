@extends('master')

@section('content')
    <section class="concert-detail py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-image full">
                            <img src="{{ asset('images/concert/concert1.jpg') }}" alt="">
                        </div>
                        <div class="card-word">
                            <a class="concert-title" href="{{ url('concert-detail') }}">
                                BTS World Tour: Love Yourself
                            </a>
                            <div class="concert-info">
                                <i class="fa fa-calendar"></i>
                                26 Feb 2019
                            </div>
                            <div class="concert-info">
                                <i class="fa fa-clock-o"></i>
                                09.30 - 10.30
                            </div>
                            <div class="concert-price">
                                <div class="mr-2">Ticket Price: </div>
                                <div class="text-success">$249</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4 pb-5">
                    <h3 class="mb-3">EVENT DESCRIPTION</h3>
                    <div class="description-tab pb-5">
                        <p>
                            BTS World Tour : Love Yourself is the third worldwide concert tour headlined by the South Korean boy band BTS to promote their Love Yourself series, Love Yourself 'Her', Love Yourself 'Tear' and Love Yourself 'Answer'. The tour will begin on August 25, 2018 in South Korea and is set to visit 12 countries thus far, including Japan, United States, Canada, United Kingdom, France, Netherlands, Germany, Taiwan, Hong Kong, Singapore, Brazil, and Thailand.

                            On February 20, 2019, BTS announced new stadium tour dates under the name "BTS World Tour 'Love Yourself: Speak Yourself'" starting on May 4, 2019 at Rosebowl Stadium in Los Angeles.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bottom-bar">
        <div class="container">
            <div class="concert-buy-title">
                <i class="fa fa-ticket"></i>
                BTS World Tour: Love Yourself
            </div>
            <div>
                <a class="btn btn-orange btn-lg" href="{{ url('my-ticket') }}">Buy Ticket $249</a>
            </div>
        </div>
    </div>
@endsection
