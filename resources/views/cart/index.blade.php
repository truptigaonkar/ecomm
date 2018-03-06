@extends('layouts.main')
@section('content')
    <!--{{$cartItems}}-->
    <div id="shopping-cart">
    <h1><strong>Shopping Cart & Checkout</strong></h1>
    <p>Here you can view, delete and create items in the cart. Perform checkout</p>
    <?php 
    if($cartItems->isEmpty())
    {
        echo '<h1 align="center" style="color:green">Cart is Empty</h1>';
    }
    else
    { ?>
        <table border="1">
            <tr>
                <th>Item</th>
                <th>Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            @foreach($cartItems as $cartItem)
            <tr>
                <td>{{ $cartItem->id }}</td>
                <td>{{ $cartItem->name }}</td>
                <td>{{ $cartItem->price }}</td>
                <td>
                    {!! Form::open(['url' => ['cart/update',$cartItem->rowId], 'method'=>'put']) !!}
                        <input type="text" value="{{$cartItem->qty}}" id="count{{$cartItem->id}}" name="qty" size="2" required="1">
                        <input type="submit" value="Update">
                    {!! Form::close() !!}
                </td>
                <td>{{ $cartItem->subtotal }} 
                    <a href="{{url('/cart/remove')}}/<?php echo $cartItem->rowId; ?>">
                        <img src="img/remove.gif" alt="Remove product" />
                    </a>
                </td>                   
            </tr>
            @endforeach

            <tr class="total">
                <td colspan="5">
                    Subtotal: {{ Cart::subtotal() }}<br/>
                    Eco tax: {{ Cart::tax() }}<br/>
                    Shipping Cost: Free
                    <span>TOTAL: ${{ Cart::total() }}</span><br />
                        <a href="/" class="tertiary-btn">CONTINUE SHOPPING</a>
                    <input type="submit" value="CHECKOUT WITH PAYPAL" class="secondary-cart-btn">
                </td>
            </tr>                          
        </table>

    <?php } ?>
    </div><!-- end admin -->
@stop