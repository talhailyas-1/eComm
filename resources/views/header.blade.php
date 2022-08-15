<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total=ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">E-comm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myorder">Orders</a>
                </li>


                <form action="/search" class="form-inline my-2 my-lg-0">
                    <div class="form-group">
                    <input class="form-control mr-sm-2 search-box" type="text" name="query" placeholder="Search" aria-label="Search">
                    </div>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Session::has('user'))
                <li><a href="cartlist" >Cart Item({{$total}})</a></li>
                @endif
                @if (Session::has('user'))

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="/logout">Logout</a></li>

                    </ul>
                  </li>
                  @else
                  <li><a href="/login">Login</a></li>
                  @endif


            </ul>
        </div>
    </div>
</nav>
