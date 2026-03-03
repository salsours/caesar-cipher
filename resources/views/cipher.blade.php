<!DOCTYPE html>
<html>
<head>
    <title>Caesar Cipher Converter</title>
</head>
<body>
    <h2>Caesar Cipher</h2>

    <form method="POST">
        @csrf
        <label>Text:</label><br>
        <input type="text" name="text" value="{{ session('text') }}"><br><br>

        <label>Shift:</label><br>
        <input type="number" name="shift" value="{{ session('shift') }}"><br><br>

        <button formaction="{{ route('encrypt') }}" type="submit">Encrypt</button>
        <button formaction="{{ route('decrypt') }}" type="submit">Decrypt</button>
    </form>

    @if(session('result'))
        <h3>Result:</h3>
        <p>{{ session('result') }}</p>
    @endif
</body>
</html>