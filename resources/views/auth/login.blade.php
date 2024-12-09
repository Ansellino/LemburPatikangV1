@extends('layouts.app')

@section('content')
<style>
    body{
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main{
        flex: 1;
    }

    .py-4 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 95.3%;
    }

    .navbar-nav .nav-link {
        font-size: 1rem;
        font-weight: 600;
        margin: 0 15px;
        text-transform: uppercase;
    }

    .container {
        max-width: 1320px;
    }

    .card {
  border: none;
  border-radius: 15px; /* More pronounced rounded corners */
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* More pronounced shadow */
  overflow: hidden; /* Ensures the background gradient stays within the card */
  color: white; /* White text color */
  background: linear-gradient(to right, #28a745, #28a745);
  margin-top: 55px;
}

.card-header {
  background-color: rgba(0, 0, 0, 0.3); /* Slightly darker header background */
  border-bottom: none;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  padding: 20px; /* Increased padding */
  text-align: center;
}

.card-header h2 {
  font-size: 1.8em;
  margin: 0;
}

.card-body {
  padding: 30px 40px; /* Increased padding */
}

.form-group label {
  font-weight: 600;
}

.form-control {
  border-radius: 8px; /* More rounded input fields */
  border: 2px solid rgba(255, 255, 255, 0.3); /* Less prominent white border */
  background-color: rgba(255, 255, 255, 0.1); /* More transparent background */
  color: white; /* White text color */
}

.form-control:focus {
  border-color: #ffffff; /* White border on focus */
  box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); /* White outline on focus */
}

.form-control::placeholder { /* Placeholder text color */
  color: rgba(255, 255, 255, 0.7);
}

.custom-select { /* Style the select element */
  border-radius: 8px;
  border: 2px solid rgba(255, 255, 255, 0.3);
  background-color: rgba(228, 209, 209, 0.136);
  color:black;
}

.btn-primary {
    background-color: #ffc107; /* Gold/yellow button color */
    border-color: #ffc107;
  border-radius: 8px;
  padding: 12px 24px;
  font-weight: 600;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add a subtle shadow to the button */
  transition: all 0.2s ease; /* Smooth transition for hover effect */
}

.btn-primary:hover {
    background-color: #d39e00; /* Darker gold/yellow on hover */
    border-color: #d39e00;
  transform: translateY(-2px); /* Slightly move the button up on hover */
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Increase shadow on hover */
}

.btn-link {
  color: #ffffff; /* White link color */
  font-weight: 600;
}

.btn-link:hover {
  color: #e0e0e0; /* Lighter white on hover */
  text-decoration: none;
}

.form-check-input:checked {
  background-color: #4CAF50; /* Green checkbox when checked */
  border-color: #4CAF50;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                        <label for="login" class="col-md-4 col-form-label text-md-right">Login As</label>
                        <div class="col-md-6">
                        <select class="custom-select" id="inputGroupSelect02">
                            <option selected></option>
                            <option value="1">Admin</option>
                            <option value="2">Member</option>
                          </select>
                        </div>
                    </div>

                        <div class="form-group row">



                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
