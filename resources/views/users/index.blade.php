@extends('main')

@section('title', 'Users')
@section('pagename', 'Users')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#create">
                        Create
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
                                    <form action="/users" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="c_password" class="form-label">Confirm Password</label>
                                            <input type="password" name="c_password" class="form-control" id="c_password">
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
                                    <h3 class="card-title"><strong>Users</strong></h3>
                                </div>
                                <div class="col-10">
                                    <form action="/users-search" method="GET" class="d-flex">
                                        @csrf
                                        <input class="form-control me-2" id="searchInput" type="text" name="search"
                                            placeholder="Search">
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
                                        <th>Email</th>
                                        <th>Created at</th>
                                        <th>Edit</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="userTableBody">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit{{ $user->id }}">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="edit{{ $user->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal
                                                                    title</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/user" method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="mb-3">
                                                                        <label for="name"
                                                                            class="form-label">Name</label>
                                                                        <input type="text" name="name"
                                                                            class="form-control" id="name"
                                                                            value="{{ $user->name }}"
                                                                            aria-describedby="emailHelp">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1"
                                                                            class="form-label">Email</label>
                                                                        <input type="email" name="email"
                                                                            class="form-control" id="exampleInputEmail1"
                                                                            value="{{ $user->email }}"
                                                                            aria-describedby="emailHelp">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="password"
                                                                            class="form-label">Password</label>
                                                                        <input type="password" name="password"
                                                                            class="form-control" id="password">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="c_password" class="form-label">Confirm
                                                                            Password</label>
                                                                        <input type="password" name="c_password"
                                                                            class="form-control" id="c_password">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
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
                                            <td style="width: 150px">
                                                <a href="/company/{{ $user->id }}" class="btn btn-primary"><i
                                                        class="bi bi-eye"></i> Companies</a>
                                            </td>
                                            <td style="width: 150px">
                                                <form action="/users/{{ $user->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="bi bi-trash3"></i> Delete user</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            let query = $(this).val();

            $.ajax({
                url: "{{ route('user.search') }}",
                type: "GET",
                data: {
                    search: query
                },

                success: function(data) {
                    let rows = '';
                    // console.log(data.data);

                    data.data.forEach(model => {
                        rows += `
                        <tr>
                            <td>${ model.id }</td>
                            <td>${ model.name }</td>
                            <td>${ model.email }</td>
                            <td>${ model.created_at }</td>
                            <td>
                                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                    data-bs-target="#edit${ model.id }">
                                    <i class="bi bi-pencil"></i> Edit
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="edit${ model.id }" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal
                                                    title</h1>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/user" method="POST">
                                                    <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
                                                    <input type="hidden" name="_method" value="PUT">                                                   
                                                    <div class="mb-3">
                                                        <label for="name"
                                                            class="form-label">Name</label>
                                                        <input type="text" name="name"
                                                            class="form-control" id="name" value="${ model.name }"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1"
                                                            class="form-label">Email</label>
                                                        <input type="email" name="email"
                                                            class="form-control" id="exampleInputEmail1" value="${ model.email }"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password"
                                                            class="form-label">Password</label>
                                                        <input type="password" name="password"
                                                            class="form-control" id="password">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="c_password" class="form-label">Confirm
                                                            Password</label>
                                                        <input type="password" name="c_password"
                                                            class="form-control" id="c_password">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
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
                            <td style="width: 150px">
                                <a href="/company/${ model.id }" class="btn btn-primary"><i
                                        class="bi bi-eye"></i> Companies</a>
                            </td>
                            <td style="width: 150px">
                                <form action="/users/${ model.id }" method="POST">
                                    <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
                                    <input type="hidden" name="_method" value="DELETE"> 
                                    <button type="submit" class="btn btn-danger"><i
                                            class="bi bi-trash3"></i> Delete user</button>
                                </form>
                            </td>
                        </tr>
                        `;
                    });
                    $('#userTableBody').html(rows);
                },
                erorr: function() {
                    alert('an error occured while performing the search');
                }
            });
        });
    });
</script>
