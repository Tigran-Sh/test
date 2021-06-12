<div class="form-group">
    {!! Form::label($name, __(ucfirst(str_replace('_', ' ', $name)))) !!}
    <div class="input-group">
        <span class="input-group-prepend">
            <span class="input-group-text"><i class="icon-calendar3"></i></span>
        </span>
        {!! Form::text($name, $value ?? null, ['id' => $name, 'class' => 'form-control', 'required' => $required ?? false]) !!}
    </div>
    {!! $errors->first($name, '<span class="form-text text-danger">:message</span>') !!}
</div>
<script src="/_dashboard/js/plugins/pickers/anytime.min.js"></script>
<script>

    $('#' + '{{$name}}').AnyTime_picker({
        format: '%Y-%m-%d %H:%i:%s',
    });
</script>
