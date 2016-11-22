@extends('layouts.app')

@section('title')
	Change Password
@endsection

@section('body')

<section class="vbox">
    <section class="scrollable padder">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Workset</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">Add a Order</h3>
        </div>
        <section class="panel panel-default">
            <header class="panel-heading">
                Add Order
                <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
            </header>

            <div class="panel-body">

                {!! Form::open(array('method'=>'POST')) !!}
                    <div class="col-sm-6">

                    	@if($errors)
						   	@foreach ($errors->all() as $error)
						      	<div class="alert alert-danger">{{ $error }}</div>
						  	@endforeach
						@endif

                        <div class="form-group">
                            <label>Current Password</label>
                            {!! Form::password('mypassword', ['placeholder'=>'Enter Current Password', 'class'=>'form-control input-lg']) !!}
                        </div>
                        <br>
                        <div class="form-group">
                            <label>New Password</label>
                            {!! Form::password('password', ['placeholder'=>'Enter New Password', 'class'=>'form-control input-lg']) !!}
                            <span class="pull-right"><i>Password length minimum 6 and maximum 18 </i></span>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            {!! Form::password('password_confirmation', ['placeholder'=>'Confirm Password', 'class'=>'form-control input-lg']) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('images/lock.jpg') }}" width="80%" class="pull-right">
                    </div>
                    <div class="col-md-12">
                        <div class="line line-dashed line-lg pull-in"></div>
                        {!! Form::submit('Submit', [ 'class'=>'btn btn-default']) !!}
                    </div>
                {!! Form::close() !!}
            </div>

        </section>
    </section>
</section>

@endsection