@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <div class="card">
            <img src="{{$product->image}}" class="card-img-top" alt="">
            <div class="card-header">
                {{$product->name}}
            </div>
            {{$product->description}}
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Brand:</b> {{$product->brand}}</li>
                <li class="list-group-item"><b>Item type:</b> {{$product->type}}</li>
                <li class="list-group-item"><b>Status: </b>{{$product->status}}</li>
            </ul>
            <div class="card-body">
                @if($product->status == '0')
                    <a href="#" class="btn btn-primary disabled">Add</a>
                @else
                    <a href="#" class="btn btn-primary">Add</a>
                @endif
            </div>
        </div>

    </div>
@endsection
