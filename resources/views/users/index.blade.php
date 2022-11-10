@extends('layouts.app')

@section('content')
    <h2>Users</h2>
    <a href="{{route('products.index')}}" class="btn btn-info text-bg-light">Products panel</a>
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td class="table-dark">
                        <div class="btn-group align-content-center">
                            <a href="{{route('users.show', ['user' => $user->id])}}" class="btn btn-success">show</a>
                            <a href="{{route('users.edit', ['user' => $user->id])}}" class="btn btn-warning">edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
@endsection
