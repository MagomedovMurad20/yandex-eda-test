@extends('layouts.main')
@section('content')
    @foreach($orders as $order)

        <h1>{{$order->comment}}</h1>
    @endforeach

@endsection
