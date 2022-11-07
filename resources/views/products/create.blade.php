@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/products/create" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input class="form-control"  placeholder="Name.." name="name">
        @error('name')
        <div class="invalid-feedback" style="display: block">
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" rows="2" name="description"></textarea>
        @error('description')
        <div class="invalid-feedback" style="display: block">
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>
        @enderror
    </div>

        <div class="mb-3">
            <p>Brand:</p>
            <input type="radio" checked name="brand">
            <label for="brand">Canon</label>
            <input class="form-check-input" type="radio" name="brand" >
            <label for="brand">Pentax</label>
            @error('brand')
            <div class="invalid-feedback" style="display: block">
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <select class="form-select" name="type">
                <option selected>Pill</option>
                <option>Camera</option>
                <option>Two</option>
                <option>Three</option>
            </select>
            @error('type')
            <div class="invalid-feedback" style="display: block">
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            </div>
            @enderror
        </div>

        <div class="mb-3">
        <label for="date">Date</label>
        <input type="date" name="place">
            @error('place')
            <div class="invalid-feedback" style="display: block">
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="status">
                <option selected>1</option>
                <option>0</option>
            </select>
            @error('status')
            <div class="invalid-feedback" style="display: block">
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">put pics</label>
            <input class="form-control" type="file" id="formFile" name="image">
            @error('image')
            <div class="invalid-feedback" style="display: block">
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            </div>
            @enderror
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Enter product</button>
        </div>
    </form>
</div>
@endsection
