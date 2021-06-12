<div class="form-group">
    {!! Form::label($name, $label ?? __(ucfirst(str_replace('_', ' ', $name)))) !!}
    {!! Form::number($name, $value ?? null, ['id' => $name, 'class' => 'form-control', 'placeholder' => $label ?? __(ucfirst(str_replace('_', ' ', $name)))]) !!}
    {!! $errors->first($name, '<span class="form-text text-danger">:message</span>') !!}
</div>
