@extends('main')

@section('title', 'AdminLTE 3 | Dashboard')
@section('pagename', 'Comments')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/comment-create" class="btn btn-primary mb-2">Create</a>
                    @if (session('message') && session('status'))
                        <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Comments</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">ID</th>
                                        <th style="width: 10px">POST ID</th>
                                        <th style="width: 500px">Comment</th>
                                        <th style="width: 50px">View</th>
                                        <th style="width: 50px">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            <td>{{ $comment->id }}</td>
                                            <td>{{ $comment->post_id }}</td>
                                            <td>{{ $comment->body }}</td>
                                            <td>
                                                <a href="/comments/{{ $comment->id }}" class="btn btn-primary"><i
                                                        class="bi bi-eye"></i></a>
                                            </td>
                                            <td>
                                                <form action="/comments/{{ $comment->id }}" method="POST">
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
