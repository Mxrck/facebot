<div class="box-body">
    <div class="form-group @if($errors->has('text')) has-error @endif">
        <label for="text" class="col-sm-2 control-label">Text</label>
        <div class="col-sm-10">
            {!! Form::text('text', null, ['class' => 'form-control', 'placeholder' => 'Answer Text']) !!}
            {!! $errors->first('text', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
        </div>
    </div>
    <div class="form-group @if($errors->has('rule_id')) has-error @endif">
        <label for="rule" class="col-sm-2 control-label">Rule</label>
        <div class="col-sm-10">
            {!! Form::select('rule_id', App\Rule::pluck('title', 'id'), null, ['class' => 'form-control']) !!}
            {!! $errors->first('rule_id', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
        </div>
    </div>
    <div class="form-group @if($errors->has('type')) has-error @endif">
        <label for="rule" class="col-sm-2 control-label">Type</label>
        <div class="col-sm-10">
            {!! Form::select('type', ['image' => 'image', 'audio' => 'audio', 'video' => 'video', 'file' => 'file', 'text' => 'text'], null, ['class' => 'form-control']) !!}
            {!! $errors->first('type', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
        </div>
    </div>
    <div class="form-group @if($errors->has('attachment_url')) has-error @endif">
        <label for="text" class="col-sm-2 control-label">Attachment URL</label>
        <div class="col-sm-10">
            {!! Form::text('attachment_url', null, ['class' => 'form-control', 'placeholder' => 'Attachment URL']) !!}
            {!! $errors->first('attachment_url', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>')  !!}
        </div>
    </div>
</div>
@section('placement', 'Answers')