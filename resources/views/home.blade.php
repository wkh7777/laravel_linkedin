<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($name == 'Kas')
    <h1>Hello Admin</h1>
    @else
    <h1>Hello User</h1>
    @endif
</body>
</html>