@extends('layout')

@section('content')
    <div class="help text-bold">Use this form to edit {{ $category->category_name }}.</div>
    <form method="POST" action="/categories">
        @csrf
        @method('PUT')

        <div class="field">
            <label class="label" for="name">Name</label>
            <div class="control">
                <input class="input" type="text" name="category_name" id="category_name" value="{{ $category->category_name }}"/>
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>
    </form>
@endsection
