@extends('layouts/app')

@section('banner')
    <div class="hero container page__container text-center text-md-left py-112pt">
        <h1 class="text-white text-shadow">Learn to Code</h1>
        <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-48pt">Business, Technology and Creative Skills taught by industry experts. Explore a wide range of skills with our professional tutorials.</p>

        <a href="courses.html"
            class="btn btn-lg btn-white btn--raised mb-16pt">Browse Courses</a>

        <p class="mb-0"><a href=""
                class="text-white text-shadow"><strong>Are you a teacher?</strong></a></p>

    </div>
@endsection

@section('content')
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
@endsection

