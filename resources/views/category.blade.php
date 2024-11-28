@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" style="text-align: center">{{$category->name}}</div>

            <div class="card-body">
                    <div class="form-group row">
                        @foreach ($post as $post)
                        {{-- <a href="{{route("detail",[$items->id])}}" class="item"> --}}
                            <div class="col-md-4 col-form-label text-md">
                                <div class="item_subs">
                                    <h2><a href="/post/{{$post->id}}" style="color: black">{{$post->title}}</a></h2>

                                    {{-- <p>{{$post->description}}</p> --}}
                                    <p>
                                        {{\Illuminate\Support\Str::limit($post->description, 85, '') }}
                                        @if (strlen($post->description) > 85)
                                            <span id="dots">...<a href="/post/{{$post->id}}">full story</a></span>
                                            <span id="more">{{\Illuminate\Support\Str::substr($post->description, 85) }}</span>
                                        @endif
                                    </p>
                                    <p><i>Category: </i><a href="/category/{{$post->category->id}}">{{$post->category->name}}</a></p>
                                </div>
                            </div>
                        {{-- </a> --}}
                    @endforeach
                    </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection