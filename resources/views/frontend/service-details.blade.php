@extends('frontend.layout.master')
@section('contents')

    <div class="container">
        <div class="row">
            @foreach($practice_areas as $practice_area)
            <div class="col-lg-6 text-center">
                <img class="mt-4" src="{{ asset($practice_area->image) }}" alt="">
            </div>
            <div class="col-lg-6">
                <h2 class="updt pt-4 text-dark">{{ $practice_area->title }}</h2>
                <p class="td-txt common-text">
                    {{ $practice_area->description }}
                </p>
            </div>
            @endforeach
        </div>
    </div>

@endsection