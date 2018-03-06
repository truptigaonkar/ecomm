@extends('layouts.main')
@section('promo')
	<section id="promo">
		<div id="promo-details">
        	<h1>Today's Deals</h1>
            <p>Checkout this section of<br />
            products at a discounted price.</p>
            <a href="#" class="default-btn">Shop Now</a>
       	</div><!-- end promo-details -->
    	{{ Html::image('img/promo.png', 'Promotional Ad')}}    
    </section><!-- promo -->
@stop

@section('content')
	<h2>New Products</h2>
    <hr>
    <div id="products">
    	@foreach($products as $product)
        <div class="product">
        	<a href="/store/{{ $product->id }}">
        		<img style="width:100%" src="/storage/images/{{$product->image}}">    
        	</a>
        	<hr>
            <h3><a href="/store/{{ $product->id }}">{{ $product->title }}</a></h3>
            <p>{{ $product->description }}</p>
            <p>
                <a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>" class="cart-btn">
                	<span class="price">{{ $product->price }}</span>
                	{{ Html::image('img/white-cart.gif', 'Add to Cart')}}    
                    ADD TO CART
                </a>
            </p>
        </div>
        @endforeach
    </div><!-- end Products -->
@stop
