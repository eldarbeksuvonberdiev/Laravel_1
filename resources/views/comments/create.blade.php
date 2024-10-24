@extends('main')
@section('title', 'Create')
@section('pagename', 'Create')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/comments" class="btn btn-primary mb-2">Back</a>
                    <form action="/comment" method="POST">
                        @csrf
                        <label for="post" class="form-label">Post id</label>
                        <select class="form-select" id="post" name="post_id" aria-label="Default select example">
                            <option></option>
                            @foreach ($posts as $post)
                                <option value="{{ $post->id }}">{{ $post->title }}</option>
                            @endforeach
                        </select>
                        @error('post_id')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" name="body" id="comment" rows="3"></textarea>
                            @error('body')
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
