<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
<div id="app">
{{--    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                Bill's Blog
            </div>
            <div id="nav-items" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/">Home</a>
                    <a class="navbar-item" href="/categories">Categories</a>
                    <a class="navbar-item" href="/posts">Posts</a>
                </div>
            </div>
            <div class="navbar-end">
                @if (Route::has('login'))
                    <div class="navbar-item">
                        <div class="buttons">
                            @auth
                                <a href="{{ route('logout') }}" class="button is-primary">Logout</a>
                            @else
                                <a href="{{ route('login') }}" class="button is-light">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="button is-primary">Register</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                @endif
            </div>
        </nav>
    </header>--}}
    <header class="section py-6 mb-8" style="background-color: gray;">
        <h1>
            <router-link to="/">
                <img alt="Bill's Blog" src="/images/logo.svg">
            </router-link>
        </h1>
    </header>
    <div class="section pb-10">
        <div class="container">
            <main class="flex">
                <aside class="w-64 pt-8 flex-no-shrink">
                    <div class="mb-10">
                        <h5 class="uppercase font-bold mb-5 text-base">Blog Actions</h5>

                        <ul class="list-reset">
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/" exact>Home</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/logo-symbol">Categories</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/colors">Posts</router-link></li>
                        </ul>
                    </div>

                    <div>
                        <h5 class="uppercase font-bold mb-5 text-base">Account</h5>

                        <ul class="list-reset">
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/mascot">Login</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/illustrations">Register</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/loaders-and-animations">Logout</router-link></li>
                        </ul>
                    </div>
                </aside>

                <div class="primary flex-1">
                    @yield('content')
                    <router-view></router-view>
                </div>
            </main>
        </div>
    </div>
    <footer class="section py-6 mb-8" style="background-color: gray;">
        <h3 class="text-bold">By Bill</h3>
    </footer>
</div>

<script src="/js/app.js"></script>
</body>
</html>
