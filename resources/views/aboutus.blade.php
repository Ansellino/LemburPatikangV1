@extends('layouts.app')
{{-- @auth
@if (Auth::user()->role=="member")   --}}
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Information') }}</div>

            <div class="card-body-center">
                    <div class="form-group row">
                        <label for="category" class="col-md-7 col-form-label text-md-right">Project UMNGrove </label>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-md-12 col-form-label text-md-center">28/11/2024</label>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-md-12 col-form-label text-md-center">Ansel, Edward</label>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
{{-- @endif
@endauth --}}
