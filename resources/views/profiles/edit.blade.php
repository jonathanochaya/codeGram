@extends('layouts.app')


@section('content')

<div class="container">
	<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
		@csrf
		@method('PATCH')

		<div class="row">
			<div class="col-8 offset-2">
				
				<div class="row">
					<h1>Edit Profile</h1>
				</div>

				<div class="form-group row">
					<label for="title" class="col-md-4 col-form-label">Title</label>

					<input 
						type="text" 
						id="title" 
						name="title" 
						autocomplete="title" 
						class="form-control @error('title') is-invalid @enderror"
						value="{{ old('title') ?? $user->profile->title }}">

					@if($errors->has('title'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('title') }}</strong>	
						</span>
					@endif
				</div>
				
				<div class="form-group row">
					<label for="description" class="col-md-4 col-form-label">Description</label>

					<input 
						type="text" 
						id="description" 
						name="description" 
						autocomplete="description" 
						class="form-control @error('description') is-invalid @enderror"
						value="{{ old('description') ?? $user->profile->description }}">

					@if($errors->has('description'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('description') }}</strong>	
						</span>
					@endif
				</div>

				<div class="form-group row">
					<label for="url" class="col-md-4 col-form-label">URL</label>

					<input 
						type="text" 
						id="url" 
						name="url" 
						autocomplete="url" 
						class="form-control @error('url') is-invalid @enderror"
						value="{{ old('url') ?? $user->profile->url }}">

					@if($errors->has('url'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('url') }}</strong>	
						</span>
					@endif
				</div>

				<div class="row">
	            	<label for="image" class="col-md-4 col-form-label">{{ __('Profile Image') }}</label>
	            	
	            	<input type="file" class="form-control-file" id="image" name="image">

	            	@if($errors->has('image'))
	                	<strong>{{ $errors->first('image') }}</strong>
	                @endif
	            </div>

	            <div class="row pt-4">
		            <button type="submit" class="btn btn-primary">Save Profile</button>
	           	</div>
			</div>
		</div>

	</form>
</div>

@endsection