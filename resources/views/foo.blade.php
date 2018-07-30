<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Foo</title>
    <body>
    <p>Hello World!</p>
    <ul>
        @foreach ($books as $book)
            <p>タイトルは {{ $book->title }} です。</p>
        @endforeach
    </ul>
    </body>
</html>
