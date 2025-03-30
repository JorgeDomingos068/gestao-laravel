@props ([
   "class" => "",
   "classBody" => "",
   "style" => '',
])

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
        <div class="{{ $class." card rounded border shadow" }}" style="{{ $style }}">
          <div class="{{ $classBody." card-body"}}">
            {{$slot}}
          </div>
        </div>
  </body>
</html>