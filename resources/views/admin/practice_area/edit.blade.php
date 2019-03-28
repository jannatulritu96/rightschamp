@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
                    <form method="post" class="form-horizontal" action="{{ route('practice.update',$practice_area) }}" enctype="multipart/form-data">
                    @csrf
{{--                        {{ method_field('PUT') }}--}}
                        @include('admin.layouts._messages')
                        <div class="panel-heading p-sm-4">
                            <h3 class="panel-title text-primary" style="font-size: 25px;">Practice area Form edit</h3>
                        </div>

                        <div class="form-group">
                            <label for="text" class="control-label col-md-2">Title</label>
                            <div class="col-md-10">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $practice_area->title }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label col-md-2">Description</label>
                            <div class="col-md-10">
                                <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $practice_area->description }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Upload photo">Image</label>
                            <div class="col-md-4">
                                <input name="image" class="input-file" type="file">
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary" id="createUser">Update form</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection