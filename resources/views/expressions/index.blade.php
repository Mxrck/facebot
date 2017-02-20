@extends('layouts.backend')

@section('placement', 'Expressions')

@section('content')
    <div class="row">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Expressions</h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Expression</th>
                                    <th>Rule</th>
                                    <th>Answers</th>
                                    <th>Resources</th>
                                    <th>Creation Date</th>
                                </tr>
                                @foreach($expressions as $key => $expression)

                                    <tr>
                                        <td><a href="{{ route('expressions.edit', $expression->id) }}">{{ $key + 1 }}</a></td>
                                        <td>{{ $expression->text }}</td>
                                        <td>{{ $expression->rule->title }}</td>
                                        <td>{{ $expression->answers->count() }}</td>
                                        <td>{{ $expression->resources->count() }}</td>
                                        <td>{{ $expression->created_at }}</td>
                                    </tr>

                                @endforeach
                            </table>
                        </div>
                        <div class="box-footer clearfix text-center">
                            {{ $expressions->links() }}
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection