<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/stylewvii.css')}}" />
    </head>
    <body>
        <header>
            <h1>@yield('title')</h1>
            <nav>
                <a href="{{route('product-list')}}">Product</a>
                <a href="{{route('shop-list')}}">Shop</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            &#xA9; Copyright Week-07, 2020 Apigorn's Database.
        </footer>
    </body>
</html>