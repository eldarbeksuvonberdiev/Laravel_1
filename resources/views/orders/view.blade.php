@extends('main')

@section('title', 'View')
@section('pagename', 'View')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/orders" class="btn btn-primary mb-2">Back</a>
                    <h1>ID: {{ $order->id }}</h1>
                    <h2>Name: {{ $order->product_id }}</h2>
                    <h2>Count: {{ $order->count }}</h2>
                    <h2>Sum: {{ $order->summ }}</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
