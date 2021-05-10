<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
{{-- Model HTML email --}}
<body>
    {{-- name --}}
    <h1>{{ request()->input('title') }}</h1>
    {{-- email --}}
    <h2>{{ request()->input('email') }}</h2>
    {{-- subject --}}
    <p>Objet: {{ request()->input('subject') }}</p>
    {{-- body --}}
    <p>{{ request()->input('body') }}</p>
</body>
</html>

