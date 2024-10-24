@extends('main')

@section('title', 'AdminLTE 3 | Dashboard')
@section('pagename', 'Products')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/product-create" class="btn btn-primary mb-2">Create</a>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>Category ID</th>
                                        <th>Created at</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category_id }}</td>
                                            <td>{{ $product->created_at }}</td>
                                            <td><a href="/products/{{ $product->id }}" class="btn btn-primary"><i
                                                        class="bi bi-eye"></i></a>
                                            </td>
                                            <td>
                                                <form action="/products/{{ $product->id }}" method="POST">
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
