@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row px-2 flex-lg-row flex-column-reverse">

            <div class="col-lg-4 col-12 bg-light p-2 rounded shadow">
                <h4 class="text-center bg-orange p-2 rounded shadow mb-3">مطالب دیگر</h4>

                <div class="container">
                    @foreach($posts as $post)
                        <x-post-card :post="$post" style="margin-top: 10px;"></x-post-card>
                    @endforeach
                </div>

            </div>

            <div class="col-lg-8 col-12">
                <div class="row mb-3 flex justify-content-center">
                    <div
                        class="col-12 col-lg-11 d-flex shadow px-4 rounded p-2 bg-light mx-auto justify-content-center">
                        {{ $post->title }}
                    </div>
                    @if ($post->pic)
                        <div class="col-12 col-lg-11  mt-4">
                            <img src="{{ asset($post->pic) }}"
                                 alt="pic"
                                 class=" rounded bg-light shadow img-fluid">
                        </div>
                    @endif
                    <div class="col-12 post col-lg-11 mt-4 rounded shadow p-4 bg-light ">
                        {!! $post->body !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
