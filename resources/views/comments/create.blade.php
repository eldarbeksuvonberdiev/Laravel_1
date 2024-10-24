@extends('main')
@section('title', 'Create')
@section('pagename', 'Create')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/comments" class="btn btn-primary mb-2">Back</a>
                    <form action="/comment-create" method="POST">
                        @csrf
                        <label for="post" class="form-label">Post id</label>
                        <select class="form-select" id="post" name="post_id" aria-label="Default select example">
                            <option></option>
                            @foreach ($posts as $post)
                                <option value="{{ $post->id }}">{{ $post->title }}</option>
                            @endforeach
                        </select><br>
                        @error('post_id')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                        <div class="mb-3">
                            <label for="name" class="form-label">Comment</label>
                            <input type="text" name="comment" class="form-control" id="name" placeholder="Name...">
                            @error('comment')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
