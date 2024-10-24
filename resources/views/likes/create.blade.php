@extends('main')
@section('title', 'Create')
@section('pagename', 'Create')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/likes" class="btn btn-primary mb-2">Back</a>
                    <form action="/likes" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="post" class="form-label">Post id</label>
                            <select class="form-select mb-2" id="post" name="post_id"
                                aria-label="Default select example">
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
                        </div>
                        <div class="mb-3">
                            <label for="user" class="form-label">User id</label>
                            <select class="form-select mb-2" id="user" name="user_id"
                                aria-label="Default select example">
                                <option></option>
                                @foreach ($posts as $post)
                                    <option value="{{ $post->id }}">{{ $post->title }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="active" class="form-label">Active Or Inactive</label>
                            <select class="form-select mb-2" id="active" name="is_active"
                                aria-label="Default select example">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            @error('active')
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
