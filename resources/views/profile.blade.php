@extends('master')

@section('content')
    <div class="profile-wrapper">
        <div class="container">
            <ul class="profile-tab">
               <li class="active">
                   <a>
                       <i class="fa fa-user"></i>Profile
                   </a>
               </li>
               <li>
                   <a href="{{ url('my-ticket') }}">
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
                <div class="text-center d-flex align-items-center flex-column">
                    <div class="user-picture">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="username">Luki Centuri</div>
                    <div class="email">lukicenturi@gmail.com</div>
                    <a class="text-orange">Change Password</a>
                </div>
            </div>
        </div>
    </div>
@endsection
