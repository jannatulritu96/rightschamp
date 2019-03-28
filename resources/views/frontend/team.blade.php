@extends('frontend.layout.master')
@section('contents')
    <div class="container">
        <div class="row">
            @foreach($teams as $team)
            <div class="col-lg-6 text-center">
                <img class="avatar rounded-circle td-img mt-4" src="{{ asset($team->image) }}" alt="">
                <hr>
                <h5 class="font-weight-bold mb-1 pt-4">{{ $team->name }}</h5>
                <ul class="list-unstyled mb-0">
                    <!-- Facebook -->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="icofont-linkedin"></i>
                    </a>
                    <!-- Twitter -->
                    <a class="p-2 fa-lg tw-ic">
                        <i class="icofont-facebook-messenger"></i>
                    </a>
                    <!-- Instagram -->
                    <a class="p-2 fa-lg ins-ic">
                        <i class="icofont-twitter"></i>
                    </a>
                </ul>
            </div>

            <div class="col-lg-6">
                <h2 class="updt pt-4 text-dark">{{ $team->title }}</h2>
                <p class="td-txt common-text">
                    {{ $team->details }}
                    </p>
            </div>
            @endforeach
        </div>
    </div>
@endsection
