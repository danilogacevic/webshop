@extends('layouts.checkout')

@section('content')

<!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
      <h4 class="text-center bg-danger"></h4>
      <h1>Checkout</h1>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="edwindiaz123-facilitator@gmail.com">
<input type="hidden" name="currency_code" value="US">
    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>

        @foreach($products as $product)

            @if(session('product_'.$product->id))

              @php

              $item_quantity+=session('product_'.$product->id)

              @endphp

              <tr>

      				  <td>{{$product->product_title}}<br>

      				  <img width='100' src='{{$product->photos()->first()->name}}'>

      				  </td>
      				  <td>&#36;{{$product->product_price}}</td>
      				  <td>{{session('product_'.$product->id)}}</td>
      				  <td>&#36;{{$product->product_price*session('product_'.$product->id)}}</td>
      				  <td><a class='btn btn-warning' href="{{route('decreaseAmount',$product->id)}}"><span class='glyphicon glyphicon-minus'></span></a>   <a class='btn btn-success' href="{{route('increaseAmount',$product->id)}}"><span class='glyphicon glyphicon-plus'></span></a>
      				  <a class='btn btn-danger' href="{{route('removeProduct',$product->id)}}"><span class='glyphicon glyphicon-remove'></span></a></td>         
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

         

		

				    </tbody>
    </table>


      <input type="image" name="upload" border="0"
			src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
			alt="PayPal - The safer, easier way to pay online">
			</form>


			<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount">{{Session::get('item_quantity')}}</span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">&#36;

{{Session::get('item_total')}}

</span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


    </div>
    <!-- /.container -->


    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2030</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

@stop

@section('scripts')
<script>
  
 if($("table.table-striped tr").length == 1) {

  $("input").css('display','none');

 };
</script>
@stop