@extends('main')

@section('title', 'View')
@section('pagename', 'View')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/products" class="btn btn-primary mb-2">Back</a>
                    <h1>ID: {{ $model->id }}</h1>
                    <h2>Name: {{ $model->name }}</h2>
                    <h2>Category id: {{ $model->category_id }}</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
