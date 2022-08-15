@extends('master')
@section('content')
    <div class=" custom-product">

        <div class="col-sm-10">

            <div class="trending-wrapper">
                <h2>Orders List</h2>
                <div class="">
                    @foreach ($orders as $item)
                        <div class="row searched-item cart-list-devider">
                            <div class="col-sm-3">
                                <a href="detail/{{ $item->id}}">
                                    <img class="trending" src="{{ $item->gallery }}">
                                </a>
                            </div>

                            <div class="col-sm-3">
                                    <div class="">
                                        <h2>{{ $item->name }}</h2>
                                        <h5><b>Delivery Status</b> : {{ $item->status }}</h5>
                                        <h5><b>Payment Status</b> : {{ $item->payment_status }}</h5>
                                        <h5><b>Payment Method</b> : {{ $item->payment_method }}</h5>
                                        <h5><b>Delivery Address</b> : {{ $item->address }}</h5>
                                        <h5><b>Price</b> : {{ $item->price }}</h5>

                                    </div>
                            </div>

                            <div class="col-sm-3">
                                       {{-- <a href="removecart/{{$item->cart_id}}"> <button class="btn btn-danger">Remove from Cart</button></a> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
