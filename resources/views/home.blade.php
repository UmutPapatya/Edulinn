@extends('layouts/app')

@section('banner')
<div class="hero container page__container text-center text-md-left py-112pt">
    <h1 class="text-white text-shadow">Learning for anyone, anywhere</h1>
    <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-48pt">English, math, science and many other courses taught by industry experts. Explore a wide range of skills with our professional tutorials.</p>

    <a href="signup.php"
       class="btn btn-lg btn-white btn--raised mb-16pt">Browse Courses</a>

<!--            <p class="mb-0"><a href=""
           class="text-white text-shadow"><strong>Are you a teacher?</strong></a></p> -->

</div>
@endsection

@section('content')
    <div class="mdk-header-layout__content page-content ">

        <div class="border-bottom-2 py-16pt navbar-light bg-white border-bottom-2">
            <div class="container page__container">
                <div class="row align-items-center">
                    <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                        <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                            <i class="material-icons text-white">subscriptions</i>
                        </div>
                        <div class="flex">
                            <div class="card-title mb-4pt">8,000+ Courses</div>
                            <p class="card-subtitle text-70">Explore a wide range of skills.</p>
                        </div>
                    </div>
                    <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                        <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                            <i class="material-icons text-white">verified_user</i>
                        </div>
                        <div class="flex">
                            <div class="card-title mb-4pt">By Industry Experts</div>
                            <p class="card-subtitle text-70">Professional development from the best people.</p>
                        </div>
                    </div>
                    <div class="d-flex col-md align-items-center">
                        <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                            <i class="material-icons text-white">update</i>
                        </div>
                        <div class="flex">
                            <div class="card-title mb-4pt">Unlimited Access</div>
                            <p class="card-subtitle text-70">Unlock Library and learn any topic with one subscription.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section border-bottom-2">
            <div class="container page__container">
{{-- 
                {{-- <div class="page-separator">
                    <div class="page-separator__text">Welcome Home</div>
                </div> --}} 

                <div class="posts-cards">

                    <div class="card posts-card mb-0">
                        <div class="posts-card__content d-flex align-items-center flex-wrap">
                            <div class="avatar avatar-lg mr-3">
                                <a href="blog-post.html"><img src="{{ asset('/assets/images/paths/invision_200x168.png') }}"
                                    alt="avatar"
                                    class="avatar-img rounded">
                                </a>
                            </div>
                            <div class="posts-card__title flex d-flex flex-column">
                                <a href="blog-post.html"
                                class="card-title mr-3">Edulinn Education PAge</a>
                                <small class="text-50"></small>
                            </div>
                            <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">sfsd dfsdfs dfs</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>   
@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
