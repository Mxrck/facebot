@extends('layouts.backend')

@section('placement', 'Answers')

@section('content')
    <div class="row">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Answers</h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Text</th>
                                    <th>Rule</th>
                                    <th>Type</th>
                                    <th>Attachment url</th>
                                    <th>Creation Date</th>
                                </tr>
                                @foreach($answers as $key => $answer)

                                    <tr>
                                        <td><a href="{{ route('answers.edit', $answer->id) }}">{{ $key + 1 }}</a></td>
                                        <td>{{ $answer->text }}</td>
                                        <td>{{ $answer->rule->title }}</td>
                                        <td>{{ $answer->type }}</td>
                                        <td>
                                            @if(!empty($answer->attachment_url))
                                                <a href="{{ $answer->attachment_url }}" target="blank"> attachment URL </a>
                                            @else
                                                No Attachment
                                            @endif
                                        </td>
                                        <td>{{ $answer->created_at }}</td>
                                    </tr>

                                @endforeach
                            </table>
                        </div>
                        <div class="box-footer clearfix text-center">
                            {{ $answers->links() }}
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection