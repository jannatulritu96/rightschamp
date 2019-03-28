@extends('admin.layouts.master')
@section('content')

    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">{{ $title }}</h4>
        </div>
        <div class="col-sm-4 text-right m-b-30">
            <a href="{{ route('about.create') }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Add New Information</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div>
                <table class="table table-striped custom-table m-b-0 datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Short description</th>
                        <th>Description</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($abouts as $about)

                        <tr>
                            <td>{{ $about->id }}</td>
                            <td>{{ $about->title }}</td>
                            <td>{{ $about->short_description }}</td>
                            <td>{{ $about->description }}</td>

                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('about.edit',$about->id) }}" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                        <li>
                                            <form method="POST" class="form-horizontal" action="{{ route('about.destroy',$about->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                <button type="submit" title="Delete" style="margin-left: 19px;"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection