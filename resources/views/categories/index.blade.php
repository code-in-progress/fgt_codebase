@extends('layout')

@section('content')
    <main>
        <div class="columns">
            <div class="column">
                <div class="flex-center position-ref full-height">
                    <ul>
                        @foreach($categories as $c)
                            <li>
                                <form action="">
                                    <div>Name: <input type="text" id="category_name" value="{{ $c->category_name }}" /></div>
                                    <div>ID: {{ $c->id }}</div>

                                    <button type="submit" class="btn text-muted">Save Changes</button>
                                </form>

                                <hr />
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="column">
                <div>This is where the Vue component loads</div>

                <div id="app">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </main>
@endsection
