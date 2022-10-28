@extends('layouts.app')

@section('content')

<div class="container text-center">

    @foreach($products as $product)

            <div class="card">
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
            </div>


    @endforeach
<div>

@endsection
