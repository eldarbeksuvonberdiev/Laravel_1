@extends('main')

@section('title', 'AdminLTE 3 | Dashboard')
@section('pagename', 'Likes')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/like-create" class="btn btn-primary mb-2">Create</a>
                    @if (session('message') && session('status'))
                        <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Likes</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Post ID</th>
                                        <th>User ID</th>
                                        <th>Active or Inactive</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($likes as $like)
                                        <tr>
                                            <td>{{ $like->id }}</td>
                                            <td>{{ $like->post_id }}</td>
                                            <td>{{ $like->user_id }}</td>
                                            <td>{{ $like->is_active }}</td>
                                            <td><a href="/likes/{{ $like->id }}" class="btn btn-primary"><i
                                                        class="bi bi-eye"></i></a></td>
                                            <td>
                                                <form action="/likes/{{ $like->id }}" method="POST">
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
