@extends('layouts.main')
@section('content')
	<div id="search-results">
        <h3>Search result for: {{ $keyword }}</h3>
        <hr>
		@foreach($products as $product)
        <div class="product">
        	<a href="/store/{{ $product->id }}">
        		<img style="width:100%" src="/storage/images/{{$product->image}}">    
        	</a>
        	<hr/>
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
	</div><!--end search results -->
@stop