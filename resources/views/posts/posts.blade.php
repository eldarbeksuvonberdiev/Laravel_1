@extends('main')

@section('title', 'AdminLTE 3 | Dashboard')
@section('pagename', 'Posts')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/post-create" class="btn btn-primary mb-2">Create</a>
                    @if (session('message') && session('status'))
                        <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Posts</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 5px">ID</th>
                                        <th style="width: 8px">Category ID</th>
                                        <th style="width: 50px">Title</th>
                                        <th style="width: 800px">Body</th>
                                        <th>Image</th>
                                        <th style="width: 8px">Likes</th>
                                        <th style="width: 8px">Dislikes</th>
                                        <th style="width: 8px">View</th>
                                        <th style="width: 8px">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->category_id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->body }}</td>
                                            <td><img src="{{ $post->image }}" alt="" width="100px"></td>
                                            <td>{{ $post->likes }}</td>
                                            <td>{{ $post->dislikes }}</td>
                                            <td>
                                                <a href="/posts/{{ $post->id }}" class="btn btn-primary"><i
                                                        class="bi bi-eye"></i></a>
                                            </td>
                                            <td>
                                                <form action="/posts/{{ $post->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="bi bi-trash3"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
