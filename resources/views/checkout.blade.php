@extends('layouts.checkout_ecada')

@section('items')

    @foreach($products as $product)

        @if(session('product_'.$product->id))

            @php

                $item_quantity+=session('product_'.$product->id)

            @endphp

            <tr>
                <td data-title="No">{{$item_number++}}</td>
                <td data-title="Product">
                    <a href="#" class="alignleft"><img src="{{$product->photos()->first()->file}}" alt="" width="50px" height="50px"/></a>
                    <h6 class="item-title"><a href="#">{{$product->product_title}}</a></h6>
                </td>
                <td data-title="Color">Purple</td>
                <td data-title="Size">L</td>

                {{--<td>{{session('product_'.$product->id)}}</td>--}}
                <td data-title="Qty">
                    <div class="input-group input-group-lg">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn-e btn-e-primary btn-e-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </span>
                        <input type="text" name="quant[2]" class="form-control input-number" data-min="1" data-max="10" value="1">
                        <span class="input-group-btn">
                                                    <button type="button" class="btn-e btn-e-primary btn-e-number" data-type="plus" data-field="quant[2]">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </span>
                    </div>
                </td>
                <td>&#36;{{$product->product_price*session('product_'.$product->id)}}</td>
                {{--<td><a class='btn btn-warning' href="{{route('decreaseAmount',$product->id)}}"><span class='glyphicon glyphicon-minus'></span></a>   <a class='btn btn-success' href="{{route('increaseAmount',$product->id)}}"><span class='glyphicon glyphicon-plus'></span></a>--}}
                {{--<a class='btn btn-danger' href="{{route('removeProduct',$product->id)}}"><span class='glyphicon glyphicon-remove'></span></a></td>--}}
                <td data-title="Remove"><a href="#" class="remove"><i class="fa fa-remove"></i></a></td>
            </tr>

            <input type="hidden" name="item_name_{{$item_name++}}" value="{{$product->product_title}}">
            <input type="hidden" name="item_number_{{$item_number++}}" value="{{$product->id}}">
            <input type="hidden" name="amount_{{$amount++}}" value="{{$product->product_price}}">
            <input type="hidden" name="quantity_{{$quantity++}}" value="{{$product->product_quantity}}">

            @php

                $total += $product->product_price*session('product_'.$product->id)

            @endphp

        @endif

    @endforeach


    @php

        session(['item_total' => $total]);
        session(['item_quantity' => $item_quantity]);

    @endphp



@endsection

@section('total_cart')

    <!-- Start total cart -->
    <div class="col-md-12">
        <div class="cart-total pull-right">
            <p class="subtotal">
                <label>Sub total :</label> <span class="primary">$193</span></p>
            <h6>Discount code :</h6>
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" id="CouponDiscount" placeholder="Coupon discount" />
                </div>
                <button type="submit" class="btn-e btn-e-primary btn-e-checkout">Submit</button>
            </form>
            <p class="grand-total">
                <label>Grand total :</label> <span class="primary">$193</span></p>
            <button type="submit" class="btn-e btn-e-primary btn-block">Proceed to checkout</button>
        </div>
    </div>
    <!-- End total cart -->

@endsection