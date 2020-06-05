@extends('layout')

@section('content')
    <div class="help text-bold">Use this form to create a new category.</div>
    <form method="POST" action="/categories">
        @csrf
        <div class="field">
            <label class="label" for="name">Name</label>
            <div class="control">
                <input class="input @error('category_name') is-danger @enderror" type="text" name="category_name" id="category_name" value="{{ old('category_name') }}"/>
            </div>
            @error('category_name')
                <p class="help is-danger">{{ $errors->first('category_name') }}</p>
            @enderror
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>
    </form>
@endsection
