@extends('main')
@section('title', 'Create')
@section('pagename', 'Create')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/" class="btn btn-primary mb-2">Back</a>
                    <form action="/create" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name...">
                            @if (session('name'))
                                <span class="alert-danger">
                                    {{ session('name') }}
                                </span>
                            @endif
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
