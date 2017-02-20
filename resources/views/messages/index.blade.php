@extends('layouts.backend')

@section('placement', 'Messages')

@section('content')
    <div class="row">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Last 10 Messages</h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Message</th>
                                    <th style="width:130px">From</th>
                                    <th style="width:135px">Date</th>
                                    <th style="width:50px">Delete</th>
                                </tr>
                                @foreach($messages as $key => $message)

                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $message->text }}</td>
                                    <td> {{ $message->recipient->first_name . ' ' . $message->recipient->last_name }} </td>
                                    <td>{{ $message->created_at }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['messages.delete', $message->id], 'method' => 'DELETE']) !!}

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                        {!! Form::close() !!}
                                    </td>
                                </tr>

                                @endforeach
                            </table>
                        </div>
                        <div class="box-footer clearfix text-center">
                            {{ $messages->links() }}
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection