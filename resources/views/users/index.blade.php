@extends('main')

@section('title', 'AdminLTE 3 | Dashboard')
@section('pagename', 'Products')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/user-create" class="btn btn-primary mb-2">Create</a>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><strong>Products</strong></h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>Email</th>
                                        <th>Created at</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <a href="/users/{{ $user->id }}" class="btn btn-primary"><i
                                                        class="bi bi-eye"></i></a>
                                            </td>
                                            <td>
                                                <form action="/users/{{ $user->id }}" method="POST">
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
