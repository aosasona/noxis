<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSRF Test</title>
</head>
<body>
    <form action="/csrf/drealayodeji/realao" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Run Test</button>
    </form>
</body>
</html>