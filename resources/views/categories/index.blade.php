@extends('layouts.main')
@section('content')
	@if(Auth::id() == 2)
		<div id="admin">
			<h1>Categories Admin Panel</h1>
			<p>Here you can view, delete and create new categories</p>
			<h2>Categories</h2><hr>
			<ul>
				@foreach($categories as $category)
					<li>
						{!! $category->name !!} -
						{!! Form::open(['action' => ['CategoriesController@destroy', $category->id], 'method' => 'POST', 'class'=>'form-inline']) !!}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete') }}	
						{!! Form::close() !!}
					</li>
				@endforeach
			</ul>
			<h2>Create New Category</h2>
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

					{!! Form::open(['action' => 'CategoriesController@store', 'method' => 'POST']) !!}
					<p>
						{{ Form::label('name') }}
						{{ Form::text('name') }}
					</p>
					{!! Form::submit('Create Category', array('class'=>'secondary-cart-btn')) !!}
					{!! Form::close() !!}
		</div><!-- end admin -->
	@endif
@stop