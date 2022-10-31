@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row d-flex ms-auto">
    @foreach($products as $product)

    <div class="col-sm-6 mb-4">
        <div class="card " style="width:600px">
            <img class="card-img-top" src="{{$product->image}}" alt="image" style="width:100%;">
            <div class="card-body">
                <h4 class="card-title"> {{$product->name}}</h4>
                <p class="card-text">{{$product->description}}</p>



                <a href="#">{{$product->type}}</a>

                <a href="#">{{$product->brand}}</a>


                <time>{{$product->created_at->diffForHumans()}}</time><br>

            @if($product->status == '1')
                    <button class="btn btn-primary justify-content-center">Add</button>
                @else
                    <button class="btn btn-primary justify-content-center" disabled>Add</button>
                @endif
            </div>
        </div>
    </div>

        @endforeach
        </div>

        </div>
{{--     <div class="card">
        <header class="card-header">
            <p class="card-header-title">
              {{$product->name}}
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <figure class="is-pulled-left" >
                    <img src="{{$product->image}}" width="340" height="260" alt="Placeholder image">
                </figure>

                <div class="card-body">
                    <p>{{$product->description}}</p>


                    <a href="#">{{$product->type}}</a>

                    <a href="#">{{$product->brand}}</a>


                <time>{{$product->created_at->diffForHumans()}}</time>

                @if($product->status == '1')
                        <button class="button is-info">Add</button>
                @else
                        <button class="button is-info" disabled>Add</button>
                @endif

                </div>
            </div>
        </div>
    </div> --}}



@endsection
