@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($posts as $post)
            <div class="col-12 col-lg-4 col-md-6  rounded p-3 my-5">
                <x-post-card
                    :post="$post"
                ></x-post-card>
            </div>
            @endforeach
            <div class="col-12">{{ $posts->links() }}</div>
        </div>
    </div>
@endsection
