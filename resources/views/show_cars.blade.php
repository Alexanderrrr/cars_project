<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach ($cars as $car)
      <li><a href="/cars/one_car/{{ $car->id }}">{{ $car->title }} {{ $car->producer }}</a></li>

      @endforeach
    </ul>
  </body>
</html>
