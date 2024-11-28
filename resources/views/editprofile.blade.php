@extends('layouts.app')

@auth
@if (Auth::user()->role=="member")  
@section('content')
{{-- MULAI DARI SINI --}}
<div class="card-body">
    <form method="POST" action="{{ route('editedprofil') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

            <div class="col-md-6">
                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$user->phone}}" required autocomplete="phone">

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
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
{{-- SELESAI DI SINI --}}
@endsection
@endif
@endauth