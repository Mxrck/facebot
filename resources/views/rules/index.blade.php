@extends('layouts.backend')

@section('placement', 'Rules')

@section('content')
    <div class="row">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Rules</h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Rule</th>
                                    <th>Expressions</th>
                                    <th>Answers</th>
                                    <th>Resources</th>
                                    <th>Creation Date</th>
                                </tr>
                                @foreach($rules as $key => $rule)

                                    <tr>
                                        <td><a href="{{ route('rules.edit', $rule->id) }}">{{ $key + 1 }}</a></td>
                                        <td>{{ $rule->title }}</td>
                                        <td>{{ $rule->expressions->count() }}</td>
                                        <td>{{ $rule->answers->count() }}</td>
                                        <td>{{ $rule->resources->count() }}</td>
                                        <td>{{ $rule->created_at }}</td>
                                    </tr>

                                @endforeach
                            </table>
                        </div>
                        <div class="box-footer clearfix text-center">
                            {{ $rules->links() }}
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection