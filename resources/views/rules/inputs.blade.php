<div class="box-body">
    <div class="form-group @if($errors->has('title')) has-error @endif">
        <label for="text" class="col-sm-2 control-label">Text</label>
        <div class="col-sm-10">
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Rule Title']) !!}
            {!! $errors->first('title', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
        </div>
    </div>
</div>

@section('placement', 'Rules')