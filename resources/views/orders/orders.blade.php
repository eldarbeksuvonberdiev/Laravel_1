@extends('main')

@section('title', 'AdminLTE 3 | Dashboard')
@section('pagename', 'Orders')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/order-create" class="btn btn-primary mb-2">Create</a>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Orders</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product ID</th>
                                        <th>Count</th>
                                        <th>Sum</th>
                                        <th>Created at</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->product_id }}</td>
                                        <td>{{ $order->count }}</td>
                                        <td>{{ $order->summ }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>
                                            <a href="/orders/{{ $order->id }}" class="btn btn-primary"><i
                                                class="bi bi-eye"></i></a>
                                        </td>
                                        <td>
                                            <form action="/orders/{{ $order->id }}" method="POST">
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
