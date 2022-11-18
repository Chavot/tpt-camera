@extends('layouts.app')

@section('content')

<div class="container">
    <form>
        <div class="input-group mb-3 p-3">
            <input type="search" class="form-control" name="search" placeholder="Search...">
            <input type="submit" class="btn btn-primary">
            <a href="{{route('public.qrscan')}}" class="btn btn-outline-primary">Scan</a>
        </div>
    </form>
    {{$products->links()}}
    <div class="row">
    @foreach($products as $product)

    <div class="col-md-4 ">
        <div class="card text-center" style="width: 400px">
            <img class="card-img-top" src="{{$product->image}}" alt="product" style="width:100%; height: 300px">
            <h5 class="card-header"> {{$product->name}}</h5>
            <div class="card-body">
                <p class="card-text">{{$product->description}}</p>


                <a href="#" class="card-link">{{$product->type}}</a>
                <a href="{{route('public.brand', ['brand'=> $product->brand])}}" class="card-link">{{$product->brand}}</a>

                <div class="card-footer">

            @if($product->status == '1')
                    <button href="{{route('cart.add', ['product'=> $product->id])}}" class="btn btn-primary">Add item</button>
                @else
                    <button class="btn btn-primary" disabled>Add item</button>
                @endif
                <a href="{{route('public.show', ['product'=> $product->id])}}" class="btn btn-outline-dark">Read more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

        @endforeach
        </div>
    {{$products->links()}}
    </div>
@endsection
