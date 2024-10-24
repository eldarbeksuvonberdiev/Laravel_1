@extends('main')
@section('title', 'Create')
@section('pagename', 'Create')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/orders" class="btn btn-primary mb-2">Back</a>
                    <form action="/post-create" method="POST">
                        @csrf
                        <select class="form-select" name="category_id" aria-label="Default select example">
                            <option></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select><br>
                        @error('category')
                            <span class="text-danger">+
                                {{ $message }}
                            </span>
                        @enderror
                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="name" placeholder="Title...">
                            @error('title')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                                <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            @error('body')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Likes</label>
                            <input type="number" name="likes" class="form-control" id="name" placeholder="10...">
                            @error('likes')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Dislikes</label>
                            <input type="number" name="dislikes" class="form-control" id="name" placeholder="0...">
                            @error('dislikes')
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
