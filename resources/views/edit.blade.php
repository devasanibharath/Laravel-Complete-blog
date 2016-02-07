@extends('template.main')
@section('title'){{ 'Edit Post | ' . $post->title }}@endsection
@section('content')
	@include('template.partials.logbar')
	<div class="row-fluid">
		<div class="container">
			<div class="jumbotron">
				<h1 class="text-center">
					Edit Post
				</h1>
			</div>
		</div>
		<div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				{!! Form::open(['url' => 'admin/posts/'.$post->id.'/refresh', 'autocomplete' => 'off','files'=>true]) !!}
					<fieldset>
						<input type="text" name="title" value="{{$post->title}}" class="form-control">
						<br>
						<textarea name="metadescription" placeholder="Meta Description ( Limit to 160 characters)" class="form-control">
							{{$post->metadescription}}
						</textarea>
						<br>
						<textarea name="content" id="editor" cols="30" rows="15" class="form-control">
							{{$post->content}}
						</textarea>
						<br>
						<input type="text" name="tags" value="{{$post->tags}}" class="form-control">
						<br>
						<select name="category" class="form-control">
							<option value="{{$post->category}}">{{$catname}}</option>
							@foreach($cat as $c)
								<option value="{{$c->id}}">{{$c->category}}</option>
							@endforeach
						</select>
						<br>
						<input type="file" name="photo" id="file" class="form-control" placeholder="Upload Image">
						<br>
						<input type="submit" value="Update" class="btn btn-block btn-primary">
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