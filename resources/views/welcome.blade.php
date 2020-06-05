@extends('layout')

@section('content')
    <main>
        <div class="columns">
            <div class="column">
                <div class="flex-center position-ref full-height">


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
