@extends('layouts.backend')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">New Resource</h3>
                </div>
                {!! Form::open(['route' => ['resources.store'], 'class' => 'form-horizontal']) !!}

                @include('resources.inputs')

                <div class="box-footer">
                    <button type="submit" class="btn btn-info btn-group-lg">Save a new Resource</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection