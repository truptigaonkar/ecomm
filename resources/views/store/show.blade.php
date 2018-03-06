@extends('layouts.main')
@section('content')

	<div id="product-image">
		<img style="width:100%" src="/storage/images/{{$product->image}}">
    </div><!-- end product-image -->
    <div id="product-details">
    	<h1>{{ $product->title }}</h1>
        <p>{{ $product->description }}</p>
        <hr />
        <form action="{{url('/cart/addItem')}}/<?php echo $product->id; ?>">
            <label for="qty">Qty:</label>
            <input type="text" id="qty" name="qty" value="1" maxlength="2">
            <button type="submit" class="secondary-cart-btn">
                {{ Html::image('img/white-cart.gif', 'Add to Cart')}} 
                ADD TO CART
            </button>
        </form>
    </div><!-- end product-details -->
    <div id="product-info">
    	<p class="price">{{ $product->price }}</p>
    	<p>Product Code: <span>{{ $product->id }}</span></p>
    </div><!-- end product-info -->

@stop