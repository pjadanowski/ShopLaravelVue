@extends('layouts.app')


@section('style')
@endsection


@section('content')

    <div class="container">
        <h1>Shopping Cart</h1>

        <h3>{{ Cart::count() }} item(s) in shopping cart</h3>

        @foreach(Cart::content() as $item)

            {{ $item->name }}

        @endforeach


    </div>

@endsection




@section('scripts')
@endsection