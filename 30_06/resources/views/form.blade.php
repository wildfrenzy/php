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
            {!! Form::text('name', 'qwe1',['class' => 'myCoolClass']) !!}
            {!! Form::submit('Click Me!') !!}
        {!! Form::close() !!}
    </body>
</html>
