@extends('layouts.backend')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">New Rule</h3>
                </div>
                {!! Form::model($resource, ['route' => ['resources.update', $resource->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                @include('resources.inputs')

                <div class="box-footer">
                    <button type="submit" class="btn btn-info btn-group-lg">Update Resource</button>
                    <a class="btn btn-danger btn-group-lg" href="{{ route('resources.delete', $resource->id) }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                        Delete Resource
                    </a>
                </div>

                {!! Form::close() !!}
                {!! Form::open(['route' => ['resources.delete', $resource->id], 'method' => 'DELETE', 'id' => 'delete-form', 'style' => 'display: none;']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection