@extends('layouts.app')

@auth
@if (Auth::user()->role=="member")
@section('content')
<style>
#additionalFields .col-md-4 {
  margin-bottom: 10px; /* Adjust spacing as needed */
}

#additionalFields .col-md-6 {
  margin-bottom: 10px; /* Adjust spacing as needed */
}
</style>
<div class="create-blog">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Blog') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('createdblog') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

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
                                <select name="myselect" id="categorySelect">
                                    @foreach ($category as $key => $value)
                                        <option value="{{ $key }}"
                                            @if ($key == old('myselect','okay'))
                                                selected="selected"
                                            @endif
                                        >{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row" id="additionalFields">
                            </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="file">Input Image</label>
                            <div class="col-md-4 col-sm-6">
                                <input id="image" name="image" class="input-file" type="file" value="{{ old('file') }}">
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
                                <textarea id="textarea" name="textarea" type="text" placeholder="Description" class="form-control input-md">{{ old('textarea') }}</textarea>
                            </div>
                            @error('textarea')
                                <label class="col-md-4 col-sm-5 control-label" for="textarea"></label>
                                <span class="col-md-5 col-sm-6 invalid-feedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="tags" class="col-md-4 col-form-label text-md-right">{{ __('tags') }}</label>

                            <div class="col-md-6">
                                <input id="tags" type="text" class="form-control @error('tags') is-invalid @enderror" name="tags" value="{{ old('tags') }}" required autocomplete="tags" autofocus>

                                @error('tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#textarea' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const categorySelect = document.getElementById('categorySelect');
    const additionalFields = document.getElementById('additionalFields');

    categorySelect.addEventListener('change', () => {
        const selectedCategoryId = categorySelect.value;

        if (selectedCategoryId == 0) {
            additionalFields.innerHTML = `
                <label for="lowprice" class="col-md-4 col-form-label text-md-right">Harga terendah\n</label>
                    <div class="col-md-6">
                    <input id="lowprice" type="text" class="form-control" name="lowprice">
                </div>

                <label for="highprice" class="col-md-4 col-form-label text-md-right">Harga tertinggi</label>
                <div class="col-md-6">
                    <input id="highprice" type="text" class="form-control" name="highprice">
                </div>

                <label for="penjelasan" class="col-md-4 col-form-label text-md-right">Penjelasan</label>
                <div class="col-md-6">
                    <input id="penjelasan" type="text" class="form-control" name="penjelasan">
                </div>

                <label for="tags" class="col-md-4 col-form-label text-md-right">Tags</label>
                <div class="col-md-6">
                    <input id="tags" type="text" class="form-control" name="tags">
                </div>
            `;
        } else {
            additionalFields.innerHTML = '';
        }
    });
</script>
@endsection
@endif
@endauth
