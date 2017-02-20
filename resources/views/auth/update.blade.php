@extends('layouts.backend')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Update profile</h3>
                </div>
                {!! Form::open(['route' => ['profile.update'], 'method' => 'PUT', 'files' => true, 'class' => 'form-horizontal']) !!}

                <div class="box-body">
                    <div class="form-group @if($errors->has('name')) has-error @endif">
                        <label for="text" class="col-sm-2 control-label">Full name</label>
                        <div class="col-sm-10">
                            {!! Form::text('name', Auth::user()->name, ['class' => 'form-control', 'placeholder' => 'Full name']) !!}
                            {!! $errors->first('name', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('image')) has-error @endif">
                        <label for="text" class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                            {!! Form::file('image', ['class' => 'form-control']) !!}
                            {!! $errors->first('image', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('email')) has-error @endif">
                        <label for="text" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            {!! Form::text('email', Auth::user()->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                            {!! $errors->first('email', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('password')) has-error @endif">
                        <label for="text" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) !!}
                            {!! $errors->first('password', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('password_confirmed')) has-error @endif">
                        <label for="text" class="col-sm-2 control-label">Password Confirmation</label>
                        <div class="col-sm-10">
                            {!! Form::password('password_confirmed', ['class' => 'form-control', 'placeholder' => 'password confirmation']) !!}
                            {!! $errors->first('password_confirmed', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-info btn-group-lg">Update Profile</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection