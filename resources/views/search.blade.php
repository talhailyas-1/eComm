@extends('master')
@section('content')
    <div class=" custom-product">
        <div class="col-sm-4">
            <a href="">Filter Products</a>
        </div>
        <div class="col-sm-4">

            <div class="trending-wrapper">
                <h2>Result for search items</h2>
                <div class="">
                    @foreach ($products as $item)
                        <div class="searched-item">
                            <a href="detail/{{ $item['id'] }}">
                                <img class="trending" src="{{ $item['gallery'] }}">
                                <div class="">
                                    <h2>{{ $item['name'] }}</h2>
                                    <h5>{{ $item['description'] }}</h5>

                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
