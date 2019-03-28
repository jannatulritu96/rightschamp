@extends('admin.layouts.master')
@section('content')
    <div class="row gutter-20">
        <div class="col-md-8 mx-auto">
            <form method="POST" class="form-horizontal" action="{{ route('update_contact_settings') }}" >
            @csrf
                @include('admin.layouts._messages')

                <div class="panel-heading p-sm-4">
                    <h3 class="panel-title text-primary" style="font-size: 25px;">Contact Create Form</h3>
                </div>

                <div class="form-group">
                    <label for="text" class="control-label col-md-2">Address</label>
                    <div class="col-md-10">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-2">Phone</label>
                    <div class="col-md-10">
                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Fax" class="control-label col-md-2">Fax</label>
                    <div class="col-md-10">
                        <input type="text" name="fax" class="form-control" placeholder="Fax">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-md-2">Email</label>
                    <div class="col-md-10">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
