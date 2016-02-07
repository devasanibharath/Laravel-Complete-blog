@extends('template.main')
@section('title'){{ 'Desk | ' . Auth::user()->username }}@endsection
@section('content')
	@include('template.partials.logbar')
	<div class="row-fluid">
		<div class="container" id="admin">
			@if(\Session::has('alert'))
				<div class="alert alert-dismissible alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>{{Session::get('alert')}}</strong>
				</div>
			@endif
			<table class="table table-striped table-hover table-bordered">
				<thead>
				<th>Title</th>
				<th class="foo">Actions</th>
				</thead>
				<tbody>
				@foreach($cat as $x)
					<tr>
						<td>{{$x->category}}</td>
						<td>
							<div class="btn-group-justified">
								<a href="admin/category/{{$x->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
								<a href="admin/category/{{$x->id}}/delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
							</div>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop