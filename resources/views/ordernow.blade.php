@extends('master')
@section('content')
    <div class=" custom-product">

        <div class="col-sm-6">
            <table class="table table-striped">

                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>{{$total}} Rupees </td>

                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>0 Rupees</td>
                  </tr>
                  <tr>
                    <td>Delivery charges</td>
                    <td>100 Rupees</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>{{$total+100}}</td>
                  </tr>
                </tbody>
              </table>
              <form action="orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea placeholder="enter your address" name="address" class="form-control" > </textarea>
                </div>
                <div class="form-group">
                    <label for="">Payment Method</label>
                    <p> <input type="radio" name="payment" value="cash">  <span>Online Payment</span> </p>
                    <p> <input type="radio" name="payment" value="cash">  <span>EMI Payment</span> </p>
                    <p> <input type="radio" name="payment" value="cash">  <span>Payment on Delivery</span> </p>

                </div>

                <button type="submit" class="btn btn-info">Order Now</button>
              </form>
        </div>
    </div>
@endsection
