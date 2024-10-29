@extends('main')

@section('title', 'AdminLTE 3 | Dashboard')
@section('pagename', 'Posts')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Posts</h3>
                        </div>
                        <div class="card-body">
                            <h3>{{ $model->id }}</h3>
                            <h3>{{ $model->name }}</h3>
                            <h3>{{ $model->category_id }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
