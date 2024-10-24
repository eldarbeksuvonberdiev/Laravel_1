@extends('main')

@section('title', 'AdminLTE 3 | Dashboard')
@section('pagename', 'Posts')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/post-create" class="btn btn-primary mb-2">Create</a>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 5px">ID</th>
                                        <th style="width: 8px">Category ID</th>
                                        <th style="width: 50px">Title</th>
                                        <th style="width: 800px">Body</th>
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
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
