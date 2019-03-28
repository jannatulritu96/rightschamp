@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">{{ $title }}</h4>
        </div>
        <div class="col-sm-4 text-right m-b-30">
            <a href="{{ route('contact_settings') }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Add New contact</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div>
                <table class="table table-striped custom-table m-b-0 datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Phone</th>
                        <th>Fax</th>
                        <th>Email</th>
                        <th>Address</th>

                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)

                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->fax }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->address }}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('contact.edit',$contact->id) }}" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                        <li>
                                            <form method="POST" class="form-horizontal" action="{{ route('contact.destroy',$contact->id) }}" enctype="multipart/form-data">
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