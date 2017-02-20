@extends('layouts.backend')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Answer</h3>
                </div>
                {!! Form::model($answer, ['route' => ['answers.update', $answer->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                @include('answers.inputs')

                <div class="box-footer">
                    <button type="submit" class="btn btn-info btn-group-lg">Edit Answer</button>

                    <a class="btn btn-danger btn-group-lg" href="{{ route('answers.delete', $answer->id) }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                        Delete Answer
                    </a>

                </div>

                {!! Form::close() !!}
                {!! Form::open(['route' => ['answers.delete', $answer->id], 'method' => 'DELETE', 'id' => 'delete-form', 'style' => 'display: none;']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection