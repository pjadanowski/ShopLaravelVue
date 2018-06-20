@extends('layouts.app')


@section('style')
@endsection


@section('content')


    <h1>{{ $product }}</h1>




<form action="{{ route('cart.store') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $product->id }}">
    <input type="hidden" name="name" value="{{ $product->name }}">
    <input type="hidden" name="price" value="{{ $product->price }}">
    <button type="submit" class="button button-plain">Add to Cart</button>
</form>





@endsection




@section('scripts')
@endsection