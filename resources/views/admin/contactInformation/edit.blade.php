@extends('admin.layouts.master')
@section('content')
    <div class="row gutter-20">
        <div class="col-md-8 mx-auto">
            <form method="post" class="form-horizontal" action="{{ route('contact.update',$contact->id) }}" >
            @csrf
{{--            {{ method_field('PUT') }}--}}
            <!-- Panel Start -->
                @include('admin.layouts._messages')

                <div class="panel-heading p-sm-4">
                    <h3 class="panel-title text-primary" style="font-size: 25px;">Contact Update Form</h3>
                </div>

                <div class="form-group">
                    <label for="text" class="control-label col-md-2">Address</label>
                    <div class="col-md-10">
                        <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $contact->address }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-2">Phone</label>
                    <div class="col-md-10">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $contact->phone }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Fax" class="control-label col-md-2">Fax</label>
                    <div class="col-md-10">
                        <input type="text" name="fax" class="form-control" placeholder="Fax" value="{{ $contact->fax }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-md-2">Email</label>
                    <div class="col-md-10">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $contact->email }}">
                    </div>
                </div>
                <div style="padding-left: 300px">
                    <input type="submit" name="submit" value="submit" id="createUser" class="btn btn-sm btn-rounded btn-success"/>
                    <input type="reset" name="reset" value="Reset" class="btn btn-sm btn-rounded btn-danger" />

                </div>
            </form>

            <!-- Panel End -->
        </div>
    </div>
@endsection
@section('scripts')
    @include('admin.layouts._scripts')
@endsection