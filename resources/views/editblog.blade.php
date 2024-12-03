@extends('layouts.app')

@auth
@if (Auth::user()->role=="member")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Blog') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('editedblog',[$articles->id]) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$articles->title}}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>
                            <div class="col-md-6">

                                <select name="myselect">
                                    @foreach ($category as $key => $value)
                                        <option value="{{ $articles->category_id-1 }}"
                                        @if ($key == $articles->category_id-1)
                                            selected="selected"
                                        @endif
                                        >{{ $value->name }}</option>
                                    @endforeach
                                    </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="file"></label>
                            <div class="col-md-4 col-sm-6">
                                <input id="image" name="image" class="input-file" type="file" value="{{$articles->image}}">
                            </div>
                            @error('image')
                                <label class="col-md-4 col-sm-5 control-label" for="image"></label>
                                <span class="col-md-5 col-sm-6 invalid-feedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="description">Description</label>
                            <div class="col-md-5 col-sm-6">
                                <textarea id="textarea" name="textarea" type="text" placeholder="Description" class="form-control input-md">{{$articles->description}}</textarea>
                            </div>
                            @error('textarea')
                                <label class="col-md-4 col-sm-5 control-label" for="textarea"></label>
                                <span class="col-md-5 col-sm-6 invalid-feedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="tags">Tags</label>
                            <div class="col-md-5 col-sm-6">
                                <textarea id="textarea1" name="textarea1" type="text" placeholder="Tags" class="form-control input-md">{{$articles->tags}}</textarea>
                            </div>
                            @error('tags')
                                <label class="col-md-4 col-sm-5 control-label" for="tags"></label>
                                <span class="col-md-5 col-sm-6 invalid-feedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@endif
@endauth
