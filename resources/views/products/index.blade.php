@extends('layouts.main')
@section('content')
    @foreach($products as $product)

        <h1>{{$product->title}}</h1>
    @endforeach

@endsection
