<div class="box-body">
    <div class="form-group @if($errors->has('title')) has-error @endif">
        <label for="text" class="col-sm-2 control-label">Ttitle</label>
        <div class="col-sm-10">
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Resource Title']) !!}
            {!! $errors->first('title', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}

        </div>
    </div>
    <div class="form-group @if($errors->has('rule_id')) has-error @endif">
        <label for="rule" class="col-sm-2 control-label">Rule</label>
        <div class="col-sm-10">
            {!! Form::select('rule_id', App\Rule::pluck('title', 'id'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group @if($errors->has('link')) has-error @endif">
        <label for="text" class="col-sm-2 control-label">Link</label>
        <div class="col-sm-10">
            {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Resource Link']) !!}
            {!! $errors->first('link', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}

        </div>
    </div>
    <div class="form-group @if($errors->has('button_text')) has-error @endif">
        <label for="text" class="col-sm-2 control-label">Button Text</label>
        <div class="col-sm-10">
            {!! Form::text('button_text', null, ['class' => 'form-control', 'placeholder' => 'Button text']) !!}
            {!! $errors->first('button_text', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}

        </div>
    </div>
</div>

@section('placement', 'Resources')