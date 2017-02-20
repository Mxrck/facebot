@extends('layouts.backend')

@section('placement', 'Resources')

@section('content')
    <div class="row">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Resources</h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Title</th>
                                    <th>Rule</th>
                                    <th>Link</th>
                                    <th>Button text</th>
                                    <th>Creation Date</th>
                                </tr>
                                @foreach($resources as $key => $resource)

                                    <tr>
                                        <td><a href="{{ route('resources.edit', $resource->id) }}">{{ $key + 1 }}</a></td>
                                        <td>{{ $resource->title }}</td>
                                        <td>{{ $resource->rule->title }}</td>
                                        <td><a href="{{ $resource->link }}" target="blank"> Visit </a></td>
                                        <td>{{ $resource->button_text }}</td>
                                        <td>{{ $resource->created_at }}</td>
                                    </tr>

                                @endforeach
                            </table>
                        </div>
                        <div class="box-footer clearfix text-center">
                            {{ $resources->links() }}
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection