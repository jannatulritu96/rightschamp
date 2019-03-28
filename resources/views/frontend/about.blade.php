@extends('frontend.layout.master')
@section('contents')
<div class="container">
        <div class="row">
        @foreach($abouts as $about)
            <div class="col-lg-6 text-center">
                <img class="mt-4" src="{{ asset($about->image) }}" alt="">
            </div>
            <div class="col-lg-6">
                <h2 class="updt pt-4 text-dark">About us</h2>
                <p class="td-txt common-text">
                    {{ $about->description }}
                </p>
            </div>
            @endforeach
        </div>
</div>
@endsection
