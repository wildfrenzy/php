<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        {!! Form::open(['url' => 'form/story']) !!}
        <label for="">ID</label>
            {!! Form::number('id', $cat->id,['class' => 'myCoolClass']) !!}
        <label for="">name</label>
            {!! Form::text('name', $cat->name,['class' => 'myCoolClass']) !!}
        <label for="">desc</label>
            {!! Form::textarea('description', $cat->description) !!}
            {!! Form::submit('Click Me!') !!}
        {!! Form::close() !!}
    </body>
</html>
