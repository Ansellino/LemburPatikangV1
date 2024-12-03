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
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
        @if($item->role == "member")
        <tr class="table-tr" href="">
            <td><a href="{{route("informationuser",[$item->id])}}">{{$item->name}}</a></td>
            <td>{{$item->email}}</td>
            <td><a href="{{route("deleteduser",[$item->id])}}">
                        <button id="checkout" name="checkout" class="btn btn-primary">Delete</button>
            </a></td>
        </tr>
        @endif
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