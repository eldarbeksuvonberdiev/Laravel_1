@extends('main')

@section('title', 'AdminLTE 3 | Dashboard')
@section('pagename', 'Likes')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Post ID</th>
                                        <th>User ID</th>
                                        <th>Active or Inactive</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($likes as $like)
                                    <tr>
                                        <td>{{ $like->id }}</td>
                                        <td>{{ $like->post_id }}</td>
                                        <td>{{ $like->user_id }}</td>
                                        <td>{{ $like->is_active }}</td>
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
