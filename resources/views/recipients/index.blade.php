@extends('layouts.backend')

@section('placement', 'Recipients')

@section('content')
    <div class="row">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Users</h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>Profile picture</th>
                                    <th>Locale</th>
                                    <th>Timezone</th>
                                    <th>Messages</th>
                                    <th>Creation Date</th>
                                    <th style="width:50px">Delete</th>
                                </tr>
                                @foreach($recipients as $key => $recipient)

                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $recipient->first_name }}</td>
                                        <td>{{ $recipient->last_name }}</td>
                                        <td>{{ $recipient->gender }}</td>
                                        <td><a href="{{ $recipient->profile_pic }}" target="blank">visit</a></td>
                                        <td>{{ $recipient->locale }}</td>
                                        <td>{{ $recipient->timezone }}</td>
                                        <td>{{ $recipient->messages->count() }}</td>
                                        <td>{{ $recipient->created_at }}</td>
                                        <td>
                                            {!! Form::open(['route' => ['recipients.delete', $recipient->id], 'method' => 'DELETE']) !!}

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
                            {{ $recipients->links() }}
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection