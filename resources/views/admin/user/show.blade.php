@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            @if(auth()->user()->type=='Admin')
            <h4 class="page-title">{{ $user->name }} Profile</h4>
            @endif
        </div>

        <div class="col-sm-4 text-right m-b-30">
            <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Edit Profile</a>
        </div>
    </div>
    <div class="card-box">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-view">
                    <div class="profile-img-wrap">
                        <div class="profile-img">
                            <a href="#"><img class="avatar" src="{{ asset('user_images/'.$user->id.'.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 m-b-0">{{ $user->name }}</h3>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">Phone:</span>
                                        <span class="text">{{ $user->phone_no }}</span>
                                    </li>
                                    <li>
                                        <span class="title">Email:</span>
                                        <span class="text">{{ $user->email }}</span>
                                    </li>
                                    <li>
                                        <span class="title">Address:</span>
                                        <span class="text">{{ $user->address }}</span>
                                    </li>
                                    <li>
                                        <span class="title">Status:</span>
                                        <span class="text">{{ $user->status }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection