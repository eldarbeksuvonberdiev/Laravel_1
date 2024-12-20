@extends('main')

@section('title', 'AdminLTE 3 | Dashboard')
@section('pagename', 'Companies')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/users" class="btn btn-primary mb-2">Back</a>
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
                                    <form action="/company" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Owner</label>
                                            <input type="text" name="user" class="form-control" id="name"
                                                aria-describedby="emailHelp" value="{{ $user->name }}" disabled>
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="name"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select" name="is_active"
                                                aria-label="Default select example">
                                                <option></option>
                                                <option value = "0">Inactive</option>
                                                <option value="1">Active</option>
                                            </select>
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
                                    <h3 class="card-title"><strong>Companies</strong></h3>
                                </div>
                                <div class="col-10">
                                    <form action="/company-search/{{ $user->id }}" method="GET" class="d-flex">
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
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companies as $company)
                                        <tr>
                                            <td>{{ $company->id }}</td>
                                            <td>{{ $company->name }}</td>
                                            <td>{{ $company->phone }}</td>
                                            <td>{{ $company->created_at }}</td>
                                            <td style="width: 160px">
                                                <a href="/companyproducts/{{ $company->id }}" class="btn btn-primary"><i
                                                        class="bi bi-eye"></i> Add product</a>
                                            </td>
                                            <td style="width: 200px">
                                                <form action="/company/{{ $company->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="bi bi-trash3"></i> Delete Company</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $companies->links() }}
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
