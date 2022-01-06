@extends('frontend.master')
@section('content')
<div class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>price</th>
                            <th>quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $product)

                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->qty }}</td>
                                <td> <a href="{{ route('cart.delete', $product->id)}}" class="btn btn-primary btn-sm">delete</a></td>


                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
