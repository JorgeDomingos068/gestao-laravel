@props ([
   "class" => "",
   "style" => '',
])

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SIG' }}</title>
    @vite([ 'resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="{{$class}}" style="{{$style}}">
    {{ $slot }}
</body>
</html>