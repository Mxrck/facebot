@extends('layouts.backend')

@section('placement', 'Configuration')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Configuration</h3>
                </div>
                {!! Form::open(['route' => ['configuration.update'], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                <div class="box-body">
                    <div class="form-group @if($errors->has('site_name')) has-error @endif">
                        <label for="text" class="col-sm-2 control-label">Site Name</label>
                        <div class="col-sm-10">
                            {!! Form::text('site_name', $data['site_name'], ['class' => 'form-control', 'placeholder' => 'Site name']) !!}
                            {!! $errors->first('site_name', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('pagination')) has-error @endif">
                        <label for="text" class="col-sm-2 control-label">Pagination</label>
                        <div class="col-sm-10">
                            {!! Form::text('pagination', $data['pagination'], ['class' => 'form-control', 'placeholder' => 'Pagination count']) !!}
                            {!! $errors->first('pagination', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
                        </div>
                    </div>

                    <div class="form-group @if($errors->has('message_exception')) has-error @endif">
                        <label for="text" class="col-sm-2 control-label">Uncaught Expression answer</label>
                        <div class="col-sm-10">
                            {!! Form::text('message_exception', $data['message_exception'], ['class' => 'form-control', 'placeholder' => 'Exception Message']) !!}
                            {!! $errors->first('message_exception', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
                        </div>
                    </div>

                    <div class="form-group @if($errors->has('mark_seen')) has-error @endif">
                        <label for="text" class="col-sm-2 control-label">Mark seen after</label>
                        <div class="col-sm-10">
                            {!! Form::text('mark_seen', $data['mark_seen'], ['class' => 'form-control', 'placeholder' => '0 second(s)']) !!}
                            {!! $errors->first('mark_seen', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
                        </div>
                    </div>

                    <div class="form-group @if($errors->has('typing_on')) has-error @endif">
                        <label for="text" class="col-sm-2 control-label">Typing on after</label>
                        <div class="col-sm-10">
                            {!! Form::text('typing_on', $data['typing_on'], ['class' => 'form-control', 'placeholder' => '1 second(s)']) !!}
                            {!! $errors->first('typing_on', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
                        </div>
                    </div>

                    <div class="form-group @if($errors->has('typing_off')) has-error @endif">
                        <label for="text" class="col-sm-2 control-label">Typing off after</label>
                        <div class="col-sm-10">
                            {!! Form::text('typing_off', $data['typing_off'], ['class' => 'form-control', 'placeholder' => '2 second(s)']) !!}
                            {!! $errors->first('typing_off', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-info btn-group-lg">Update Configuration</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection