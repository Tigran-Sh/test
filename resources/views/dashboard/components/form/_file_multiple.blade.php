<div class="form-group">
    {!! Form::label($name, __(ucfirst(str_replace('_', ' ', $name)))) !!}
    <br>
    @if($name == 'file')
        {!! Form::file($name, ['id' => $name, 'accept' => "application/pdf"]) !!}
    @else
        {!! Form::file($name.'[]', ['id' => $name, 'multiple' => true]) !!}
    @endif
    {!! $errors->first($name, '<span class="form-text text-danger">:message</span>') !!}
</div>

@if(isset($object) && $object && $object->$name)
    {!! Form::label('current_' . $name, __('Current ' . ucfirst(str_replace('_', ' ', $name)))) !!}
    <br>
    <div class="form-group">
        @foreach($object->$name()->get() as $object)

            @if($name != 'file')
                <img src="{{url('/storage/'.$object->url)}}" width="120px" alt="{{$object->url}}">
            @else
                <a href="{{url('/storage/'.$object->url)}}" target="_blank">{{__('Link to file')}}</a>
            @endif

        @endforeach
    </div>
@endif
