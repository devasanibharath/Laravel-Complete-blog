@extends('template.main')
@section('id'){{'log'}}@endsection
@section('content')
<section id="logbox">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<h5 class="panel-heading text-center"><i class="fa fa-lock"></i> Admin Panel</h5>
					<div class="panel-body">
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<strong>Whoops!</strong> There were some problems with your input.<br><br>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
								<label class="col-md-4 control-label"><i class="fa fa-envelope fa-2x"></i></label>
								<div class="col-md-6">
									<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label"><i class="fa fa-key fa-2x"></i></label>
								<div class="col-md-6">
									<input type="password" class="form-control" name="password" placeholder="Password">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember"> Remember
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-8 col-md-offset-2">
									<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i> Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
