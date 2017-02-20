@extends('layouts.backend')

@section('content')
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ App\Message::count() }}</h3>
                  <p>Message(s) received</p>
                </div>
                <div class="icon">
                  <i class="fa fa-comment"></i>
                </div>
                <a href="{{ route('messages.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{ App\Rule::count() }}</h3>
                  <p>Rule(s)</p>
                </div>
                <div class="icon">
                  <i class="fa fa-check"></i>
                </div>
                <a href="{{ route('rules.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ App\Recipient::count() }}</h3>
                  <p>User(s)</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('recipients.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{ App\Expression::count() }}</h3>
                  <p>Expression(s)</p>
                </div>
                <div class="icon">
                  <i class="fa fa-exclamation"></i>
                </div>
                <a href="{{ route('expressions.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="row">
            <section class="content">
              <div class="row">
                <div class="col-md-4">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Latest Members</h3>
                      <div class="box-tools pull-right">
                        <span class="label label-danger">Latest Members</span>
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body no-padding">
                      <ul class="users-list clearfix">
                        @foreach(App\Recipient::paginate(8) as $recipient)

                          <li>
                            <img src="{{ $recipient->profile_pic }}" alt="User Image" style="height:66px; width:66px">
                            <a class="users-list-name" href="{{ $recipient->profile_pic }}" target="_blank">{{ $recipient->first_name }}</a>
                            <span class="users-list-date">{{ $recipient->gender }}</span>
                          </li>

                        @endforeach
                      </ul>
                    </div>
                    <div class="box-footer text-center">
                      <a href="{{ route('recipients.index') }}" class="uppercase">View All Users</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-8">
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
                        </tr>
                        @foreach(App\Message::paginate(10) as $key => $message)

                          <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ str_limit($message->text, 70) }}</td>
                            <td>{{ $message->recipient->first_name . ' ' . $message->recipient->last_name }}</td>
                            <td>{{ $message->created_at }}</td>
                          </tr>

                        @endforeach
                      </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                      <a href="{{ route('messages.index') }}" class="uppercase">View All Messages</a>
                    </div>
                  </div><!-- /.box -->
                </div>
              
              </div>
              
            </section>
          </div><!-- /.row (main row) -->
@endsection
