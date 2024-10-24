@extends('main')

@section('title', 'View')
@section('pagename', 'View')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/posts" class="btn btn-primary mb-2">Back</a>
                    <h1>ID: {{ $post->id }}</h1>
                    <h2>Name: {{ $post->category_id }}</h2>
                    <h2>Count: {{ $post->title }}</h2>
                    <h2>Sum: {{ $post->body }}</h2>
                    <h2>Sum: {{ $post->likes }}</h2>
                    <h2>Sum: {{ $post->dislikes }}</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
