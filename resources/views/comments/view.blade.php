@extends('main')

@section('title', 'View')
@section('pagename', 'View')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/comments" class="btn btn-primary mb-2">Back</a>
                    <h1>ID: {{ $model->id }}</h1>
                    <h2>Name: {{ $model->post_id }}</h2>
                    <h2>Name: {{ $model->body }}</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
