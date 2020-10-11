@extends('master')

@section('content')
    <div class="profile-wrapper">
        <div class="container">
            <ul class="profile-tab">
                <li>
                    <a href="{{ url('profile') }}">
                        <i class="fa fa-user"></i>Profile
                    </a>
                </li>
                <li class="active">
                    <a>
                        <i class="fa fa-ticket"></i>My Ticket
                    </a>
                </li>
                <li>
                    <a href="{{ url('logout') }}" class="text-danger">
                        <i class="fa fa-sign-out"></i>Logout
                    </a>
                </li>
            </ul>
            <div class="tab-wrapper">
                <div class="row">
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
                                    12 Feb 2021
                                </div>
                                <small class="text-muted">
                                    Event not started yet
                                </small>
                            </div>
                        </div>
                    </div>
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
                                    12 Oct 2019
                                </div>
                                <a class="btn btn-orange mt-3" href="{{ url('/watch') }}">Watch Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
