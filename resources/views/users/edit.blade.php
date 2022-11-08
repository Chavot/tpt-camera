@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('users.update', ['user' => $user->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-check mb-3">

                <input type="checkbox" class="form-check-input" id="adminCheck" name="admin" value="true" {{$user->hasRole('admin') ? 'selected' : ''}}>
                <label for="adminCheck" class="form-check-label">Is admin</label>
                @error('admin')
                <div class="invalid-feedback" style="display: block">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
@endsection
