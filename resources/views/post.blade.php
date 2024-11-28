@extends('layouts.app')

{{-- @auth
@if (Auth::user()->role=="member")   --}}
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            {{-- <div class="card-header"></div> --}}

            <div class="card-body">
                    <div class="form-group row">
                        {{-- @foreach ($post as $post) --}}
                        {{-- <a href="{{route("detail",[$items->id])}}" class="item"> --}}
                            <div class="col-md-12 col-form-label text-md">
                                <div class="item_subs">
                                    <h2 style="text-align: center">{{$post->title}}</h2>
                                    <div class="images" style="text-align: center">
                                        <img src="{{ URL::to('/assets/images/'.$post->image) }}" alt="shoe" width="300" height="300">
                                    </div>
                                    <p style="text-align: center">{{$post->description}}</p>
                                    {{-- <p><i>Category: </i><a href="/category/{{$post->category->id}}">{{$post->category->name}}</a></p> --}}
                                </div>
                            </div>
                            <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
                        {{-- </a> --}}
                    {{-- @endforeach --}}
                    </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
{{-- @endif
@endauth --}}