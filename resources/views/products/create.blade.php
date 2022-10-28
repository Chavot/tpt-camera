@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/products/create" enctype="multipart/form-data">
        @csrf

    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input class="form-control"  placeholder="Name.." name="name">
        @error('name')
        <div class="invalid-feedback" style="display: block">
            @foreach($errors->all() as $error)
                {{$error}}

        </div>
        @enderror
    </div>
</div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <textarea class="form-control" rows="2" name="description"></textarea>
        @error('name')
        <div class="invalid-feedback" style="display: block">
            @foreach($errors->all() as $error)
                {{$error}}

        </div>
        @enderror
    </div>

        <div class="mb-3">
            <label  class="form-label">Brand:</label><br>
            <input type="radio" checked name="brand">
            <label>Canon</label>
            <input class="form-check-input" type="radio" name="brand" >
            <label class="form-check-label">Pentax</label>
            @error('brand')
            <div class="invalid-feedback" style="display: block">
                @foreach($errors->all() as $error)
                    {{$error}}

            </div>
            @enderror

        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="type">
                <option selected>Type</option>
                <option>Camera</option>
                <option>Two</option>
                <option>Three</option>
                <option>Two</option>
                <option>Three</option>
            </select>
            @error
            <div class="invalid-feedback" style="display: block">
                @foreach($errors->all() as $error)
                    {{$error}}
            </div>
            @enderror
        </div>
        </div>
        <div class="mb-3">
        <label>Date</label>
        <input type="date" name="place">
            @error
            <div class="invalid-feedback" style="display: block">
                @foreach($errors->all() as $error)
                    {{$error}}

            </div>
            @enderror
        </div>
        </div>

        <div class="mb-3">
            <label  class="form-label">Brand:</label><br>
            <input type="radio" checked name="1">
            <label>Available</label>
            <input class="form-check-input" type="radio" name="0" >
            <label class="form-check-label">Unavailable</label>
            @error
            <div class="invalid-feedback" style="display: block">
                @foreach($errors->all() as $error)
                    {{$error}}
            </div>

            @enderror
        </div>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">put pics</label>
            <input class="form-control" type="file" id="formFile" name="image">
            @error('image')
            <div class="invalid-feedback" style="display: block">
                @foreach($errors->all() as $error)
                {{$error}}
            </div>
            @enderror
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Enter product</button>
        </div>
    </form>
</div>
@endsection
