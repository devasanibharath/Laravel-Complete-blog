@extends('template.main')
@section('title'){{ 'New Post| ' . \Auth::user()->username }}@endsection
@section('content')
	@include('template.partials.logbar')
	<div class="row-fluid">
		<div class="container">
			<div class="jumbotron">
				<h1 class="text-center">
					Create a New Post
				</h1>
			</div>
		</div>
		<div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8">

				{!! Form::open(['url' => 'admin/posts/new', 'autocomplete' => 'on','files'=>true]) !!}
					<fieldset>
						<input type="text" name="title" placeholder="Title of the Post" class="form-control">
						<br>
						<textarea name="metadescription" placeholder="Meta Description ( Limit to 160 characters)" class="form-control"></textarea>
						<br>
						<textarea name="content" id="editor" cols="30" rows="15" class="form-control" placeholder="Content">
						</textarea>
						<br>
						<input type="text" name="tags" class="form-control" placeholder="Tags (Separate by coma)">
						<br>
						<select name="category" class="form-control">
							<option value="">Select Option</option>
							@foreach($cat as $c)
								<option value="{{$c->id}}">{{$c->category}}</option>
							@endforeach
						</select>
						<br>
						{{--<input type="text" name="photo" placeholder="Image Post" class="form-control">--}}
						<input type="file" name="photo" id="file" class="form-control" placeholder="Upload Image">
						<br>
						<input type="submit" value="create" class="btn btn-block btn-success">
					</fieldset>
				{!! Form::close() !!}
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<br><br>
	@include('template.partials.footer')
@endsection
@section('js')
	<script>
		$('#editor').trumbowyg();
	</script>
@stop