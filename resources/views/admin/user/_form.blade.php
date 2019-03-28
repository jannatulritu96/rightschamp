@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
                <form method="POST" class="form-horizontal" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{--                    {{ method_field('PUT') }}--}}
                    @include('admin.layouts._validation_messages')
                    <legend>Personal Information</legend>
                    <div class="form-group">
                        <label for="email" class="control-label col-md-2">User Name</label>
                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" placeholder="Name" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-md-2">Email</label>
                        <div class="col-md-10">
                            <input type="text" name="email" class="form-control" placeholder="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="control-label col-md-2">Mobile No.</label>
                        <div class="col-md-10">
                            <input type="text" name="phone_no" class="form-control" placeholder="mobile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="control-label col-md-2">Address</label>
                        <div class="col-md-10">
                            <input type="text" name="address" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Upload photo">Image</label>
                        <div class="col-md-4">
                            <input name="image" class="input-file" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-2">Password</label>
                        <div class="col-md-10">
                            <input type="password" name="password" class="form-control" placeholder="Password" >
                        </div>
                        <br>
                        <div class="m-t-20 text-center" style="padding-top: 10px">
                            <button class="btn btn-primary" id="createUser">Update User</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
