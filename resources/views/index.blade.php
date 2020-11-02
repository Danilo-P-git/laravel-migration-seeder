<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($comics as $comic)
      <div class="card">


      <h3>{{$comic->title}}</h3>
      <img src="{{$comic->image}}" alt="">
      <p>{{$comic->desc}}</p>
      </div>
    @endforeach

  </body>
</html>
