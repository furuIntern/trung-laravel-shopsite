<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css\app.css">
    <title>Welcom to shop</title>
</head>
<body>
<nav class='navbar text-light bg-secondary '>
    <div>
    <a href="{{route('home')}}" class="badge badge-warning"><h3 class='my-0'>Shop</h3></a>
    </div>
    <div class='dropdown'>
        @guest
        <a href="{{route('login')}}" class="btn btn-warning">Login</a>
        <a href="{{route('register')}}" class="btn btn-warning">Register</a>
        @else
        <form action="{{ route('logout') }}" method="post" id='logout'>
            @csrf
        </form>
        <button class='btn btn-danger' onclick="logout()">Logout</button>
        @endif
        @cannot('manager','admin')
        <button class="btn btn-outline-warning" id='cart' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Your cart</button>
        <div class="dropdown-menu dropdown-menu-right p-3" aria-labelledby="cart">
            <div>
            @yield('cart')
            </div>
            <div class='text-center'><a href="payment" class="btn btn-outline-success">Payment</a></div>
        </div>
        @endcannot
    </div>
</nav>
<div class="container">
    @yield('goods')
</div>
<script src="js/app.js"></script>
<script>
    let logout = ()=>{document.getElementById('logout').submit()};
</script>
</body>
</html>