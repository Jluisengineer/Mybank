<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('images/icon-gold.png')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
   
    <title>@yield('title')</title>
    <style>
        body{
            background-color: lightgray;
        }
        .by{
            color: red;
            float: right;
            margin-top: 10px;
            margin-right: 15px;
            margin-bottom: 15px;
        }
        .container{
            margin-top: 40px;
        }
    </style>
    
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <div>
        
        @yield('navbar')
        <ul class="nav justify-content-end align-middle bg-dark">
            <li class="nav-item">
                <a href="https://github.com/Jluisengineer/CAVC"><img src="{{asset('/images/Git_logo.png')}}" title="My GitHub"></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="/index">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Customers</a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{route('customer.index')}}">Customers</a></li>
                <li><a class="dropdown-item" href="{{route('customer.create')}}">New customer</a></li>
                <li><a class="dropdown-item" href="#">Search customer</a></li>
                <li><a class="dropdown-item" href="#">Edit Customer</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Accounts</a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{route('customer.index')}}">Accounts</a></li>
                <li><a class="dropdown-item" href="{{route('customer.create')}}">New Account</a></li>
                <li><a class="dropdown-item" href="#">Search customer</a></li>
                <li><a class="dropdown-item" href="#">Edit Customer</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Transactions</a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{route('customer.index')}}">Transactions</a></li>
                <li><a class="dropdown-item" href="{{route('customer.create')}}">New Transaction</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About me!</a>
            </li>
          </ul>

 
    </div
    <div>
    @yield('by')
    <p class='by'>This project has been made by Jose Luis Diaz</p>
    </div>

    <div>
        @yield('container')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>