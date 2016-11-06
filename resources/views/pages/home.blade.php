@extends('layouts.app')

@section('content')



<section>
    <div class="container">
        <div class="section-header">
            <h2>Posts</h2>
        </div>

        {{-- POSTS WILL GO HERE --}}
        <div class="row">

            @foreach ($posts as $post)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    @include('partials.post-card', ['post' => $post])
                </div>
            @endforeach

        </div>
    </div>
</section>

@endsection