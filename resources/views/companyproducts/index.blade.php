@extends('main')

@section('title', 'AdminLTE 3 | Dashboard')
@section('pagename', 'Products')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/company/{{ $company->user_id }}" class="btn btn-primary mb-2">Back</a>
                    <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#create">
                        Create new
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/companyproduct/{{ $company->id }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="company" class="form-label">Company</label>
                                            <input type="text" name="company_id" class="form-control" id="company"
                                                aria-describedby="emailHelp" value="{{ $company->name }}" disabled>
                                            <input type="hidden" name="company_id" value="{{ $company->id }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="number" name="price" class="form-control" id="price"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $error }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2 mt-1">
                                    <h3 class="card-title"><strong>Products</strong></h3>
                                </div>
                                <div class="col-10">
                                    <form action="/product-search/{{ $company->id }}" method="GET" class="d-flex">
                                        @csrf
                                        <input class="form-control me-2" type="text" name="search" placeholder="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Is Active</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        @if ($company->id == $product->company_id)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->created_at }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#edit{{ $product->id }}">
                                                        Edit
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="edit{{ $product->id }}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                        Modal title</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="/companyproduct/{{ $product->id }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="company"
                                                                                class="form-label">Company</label>
                                                                            <input type="text" name="company_id"
                                                                                class="form-control" id="company"
                                                                                aria-describedby="emailHelp"
                                                                                value="{{ $company->name }}" disabled>
                                                                            <input type="hidden" name="company_id"
                                                                                value="{{ $company->id }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="name"
                                                                                class="form-label">Name</label>
                                                                            <input type="text" name="name"
                                                                                class="form-control" id="name"
                                                                                value="{{ $product->name }}"
                                                                                aria-describedby="emailHelp">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="price"
                                                                                class="form-label">Price</label>
                                                                            <input type="number" name="price"
                                                                                class="form-control" id="price"
                                                                                value="{{ $product->price }}"
                                                                                aria-describedby="emailHelp">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 200px">
                                                    <form action="/companyproducts/{{ $product->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="bi bi-trash3"></i> Delete product</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
