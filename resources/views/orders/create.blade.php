@extends('main')
@section('title', 'Create')
@section('pagename', 'Create')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/orders" class="btn btn-primary mb-2">Back</a>
                    <form action="/order-create" method="POST">
                        @csrf
                        <select class="form-select" name="product_id" aria-label="Default select example">
                            <option></option>
                            @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select><br>
                        @error('category')
                        <span class="text-danger">+
                            {{ $message }}
                        </span>
                        @enderror
                        <div class="mb-3">
                            <label for="name" class="form-label">Count</label>
                            <input type="number" name="count" class="form-control" id="name" placeholder="10...">
                            @error('count')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Summ</label>
                            <input type="number" name="summ" class="form-control" id="name" placeholder="15000...">
                            @error('summ')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
