@extends('layouts.app')

@auth
@if (Auth::user()->role=="admin")  
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header"><form action="{{url('/createblog')}}">
                    <input type="submit" class="btn btn-outline-primary" value="+Create Blog" />
                </form></div> --}}

                <div class="card-body">
<table class="table table-sm">
    <thead>
        <tr href="#">
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Title</th>
            <th scope="col">PostDate</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($post as $item)
        <tr class="table-tr" href="">
            <td>{{$item->user->name}}</td>
            <td>{{$item->user->email}}</td>
            <td><a href="/post/{{$item->id}}">{{$item->title}}</a></td>
            <td>{{$item->created_at}}</td>
            <td><a href="{{route("deleteblog",[$item->id])}}">
                        <button id="checkout" name="checkout" class="btn btn-primary">Delete</button>
            </a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection
@endif
@endauth