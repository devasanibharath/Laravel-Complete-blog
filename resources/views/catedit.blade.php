@extends('template.main')
@section('title'){{ 'Edit Category| ' . \Auth::user()->username }}@endsection
@section('content')
    @include('template.partials.logbar')
    <div class="row-fluid">
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center">
                    Edit Category
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                {!! Form::open(['url' => 'admin/category/'.$cat->id.'/refresh', 'autocomplete' => 'off']) !!}
                <fieldset>
                    <input type="text" name="categoryname" value="{{$cat->category}}" placeholder="Category Name" class="form-control">
                    <br>
                    <input type="submit" value="Update" class="btn btn-block btn-success">
                </fieldset>
                {!! Form::close() !!}
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br><br>
    @include('template.partials.footer')
@endsection