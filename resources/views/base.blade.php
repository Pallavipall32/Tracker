<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tracker @yield('title')</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container">
            <a href="" class="navbar-brand">Asset Tracker</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('manageasset')}}" class="nav-link">manageasset</a></li>
           
                @guest
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
              
                @endguest
               
               <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">Logout</a></li>
            
              
            </ul>
        </div>
    </nav>
    @section('data')
    @show
</body>

</html>