<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servizi</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <h1 class="text-center pb-1"><a href="/">Torna alla homepage</a></h2>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center my-4">
    @foreach ($services as $service )
        <div class="card mb-4  rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">{{$service['title']}}</h4>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title"><small class="text-body-secondary fw-light">{{$service['price']}}</small></h2>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary"><a href="/servizio/{{$service['slug']}}">Vai sul link {{$service['title']}} </a></button>
          </div>
        </div>
        @endforeach
    </div>
    
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
  </body>
</html>