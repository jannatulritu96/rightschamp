@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
                <form method="post" class="form-horizontal" action="{{ route('member.store') }}" enctype="multipart/form-data">
                    @csrf
                    @include('admin.layouts._messages')
                    @include('admin.membership._form')
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary" id="createUser">Create Information</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
