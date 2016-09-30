{{ csrf_field() }}
<ul>
    <li>
        {!! Form::label('title') !!}
        {!! Form::text('title') !!}
        {!! $errors->first('title', '<p class="error">:message</p>') !!}
    </li>
    <li>
        {!! Form::label('body') !!}
        {!! Form::textarea('body') !!}
        {!! $errors->first('body', '<p class="error">:message</p>') !!}
    </li>
    <li>
        {!! Form::submit($btnText) !!}
    </li>
</ul>
