@extends('master')

@section('title','Cartlist')

@section('content')
    <div class=" custom-product">

        <div class="col-sm-10">

            <div class="trending-wrapper">
                <h2>Cart List</h2>
                <a class="btn btn-success" href="ordernow">Order Now</a>  <br><br>
                <div class="">
                    @foreach ($products as $item)
                        <div class="row searched-item cart-list-devider">
                            <div class="col-sm-3">
                                <a href="detail/{{ $item->id}}">
                                    <img class="trending" src="{{ $item->gallery }}">
                                </a>
                            </div>

                            <div class="col-sm-3">
                                    <div class="">
                                        <h2>{{ $item->name }}</h2>
                                        <h5>{{ $item->description }}</h5>
                                    </div>
                            </div>

                            <div class="col-sm-3">

                                       <a href="removecart/{{$item->cart_id}}"> <button class="btn btn-danger">Remove from Cart</button></a>
                            </div>


                        </div>
                    @endforeach
                <a class="btn btn-success" href="ordernow">Order Now</a>  <br><br>

                </div>
            </div>
        </div>
    </div>
@endsection
