<ul>
    <li>
        {!! Form::label('title') !!}
        {!! Form::text('title') !!}
    </li>
    <li>
        {!! Form::label('body') !!}
        {!! Form::textarea('body') !!}
    </li>
    <li>
        {!! Form::submit($btnText) !!}
    </li>
</ul>
