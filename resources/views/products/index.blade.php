@extends('layouts.main')
@section('content')
	@if(Auth::id() == 2)
		<div id="admin">
			<h1>Products Admin Panel</h1>
			<p>Here you can view, delete and create new products</p>
			<h2>Products</h2><hr>
			<ul>
				@foreach($products as $product)
					<li>
						<img style="width:8%" src="/storage/images/{{$product->image}}">
						{!! $product->title !!} -
						{!! Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST', 'class'=>'form-inline']) !!}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete') }}	
						{!! Form::close() !!}
					</li>
				@endforeach
			</ul>
			<h2>Create New Product</h2>
					@if( count( $errors ) > 0 )
						<div id="form-errors">
							<p>The following errors have occurred:</p>
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div><!-- end form-errors -->
					@endif

					{!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
					<p>
						{{ Form::label('category_id', 'Category') }}
						{{ Form::select('category_id', $categories) }}
					</p>
					<p>
						{{ Form::label('title') }}
						{{ Form::text('title') }}
					</p>
					<p>
						{{ Form::label('description') }}
						{{ Form::textarea('description') }}
					</p>
					<p>
						{{ Form::label('price') }}
						{{ Form::text('price', null, array('class'=>'form-price')) }}
					</p>
					<p>
						{{Form::label('image', 'Image')}}
						{{Form::file('image')}}
					</p>

					{!! Form::submit('Create Product', array('class'=>'secondary-cart-btn')) !!}
					{!! Form::close() !!}
		</div><!-- end admin -->
	@endif
@stop
