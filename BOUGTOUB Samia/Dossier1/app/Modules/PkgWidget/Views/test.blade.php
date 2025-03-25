<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>test</h1>

    <form action="{{ route('widget.execute') }}" method="POST">
    @csrf
        <label for="">nom de methode</label>
        <input type="text" name="method_name">
        <button type="submit">Exécuter</button>
    </form>
    @if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif

@if(isset($result))
    <h2>{{ $result['title'] }}</h2>

    @if(isset($result['value']))
        <p>Valeur : {{ $result['value'] }}</p>
    @elseif(isset($result['list']))
        <ul>
            @foreach($result['list'] as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
        <p>Total : {{ $result['total'] }}</p>
    @endif
@endif

</body>
</html>