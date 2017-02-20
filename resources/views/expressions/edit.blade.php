@extends('layouts.backend')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Expression</h3>
                </div>
                {!! Form::model($expression, ['route' => ['expressions.update', $expression->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                @include('expressions.inputs')

                <div class="box-footer">
                    <button type="submit" class="btn btn-info btn-group-lg">Edit Expression</button>
                    <a class="btn btn-danger btn-group-lg" href="{{ route('expressions.delete', $expression->id) }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                        Delete Expression
                    </a>
                </div>


                {!! Form::close() !!}
                {!! Form::open(['route' => ['expressions.delete', $expression->id], 'method' => 'DELETE', 'id' => 'delete-form', 'style' => 'display: none;']) !!}

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection