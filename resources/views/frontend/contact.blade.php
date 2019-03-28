@extends('frontend.layout.master')
@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mt-4">
                    <div class="card-body gold as2-bg">
                        <form action="{{ route('question.store') }}" method="POST">
                            @csrf
                            @include('frontend.layout._messages')
                            <div class="form-group">
                                <label class="fsize-16" for="name">Name </label>
                                <input name="user_name" type="text" class="form-control" id="name" aria-describedby="emailHelp" required="">
                            </div>
                            <div class="form-group">
                                <label class="fsize-16" for="email">Email</label>
                                <input name="user_email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required="">
                            </div>
                            <div class="form-group">
                                <label class="fsize-16" for="email">Subject</label>
                                <input name="subject" type="subject" class="form-control" id="#" required="">
                            </div>
                            <div class="form-group">
                                <label class="fsize-16" for="message">Text</label>
                                <textarea name="text" class="form-control" id="message" rows="6" required=""></textarea>
                            </div>
                            <input class="btn btn-primary" type="submit" value="send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card mt-4">
                    <div class="card-body fsize-16">
                        @foreach($contacts as $contact)
                            <div class="">
                                <p class="mb-0"><i class="icofont-building-alt pr-2"></i> {{ $contact->address }} </p>
                                <p class="mb-0"><i class="icofont-headphone-alt-2 pr-2"></i>{{ $contact->phone }} </p>
                                <p class="mb-0"><i class="icofont-fax pr-2"></i>{{ $contact->fax }}</p>
                                <p class="mb-0"> <i class="fa fa-envelope-o pr-2"></i>{{ $contact->email }} </p>
                            </div>
                        @endforeach
                        <hr>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d313.6345226777871!2d90.40980857466884!3d23.73508421791331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f44dc19e3d%3A0x5aba80b7c0383678!2sSaiham+Sky+View+Tower%2C+45+Bijoy+Nagar+Road%2C+Dhaka+1000!5e0!3m2!1sen!2sbd!4v1549546191864" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

