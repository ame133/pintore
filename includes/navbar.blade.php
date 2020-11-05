<div>
@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: black;">
  <div class="container">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav" >
      <li><a href="{{route('principal')}}">INICIO</a></li>
      <li class="active" ><a href="{{route('uno')}}" >DIEGO RIVERA</a></li>
      <li><a href="{{route('dos')}}">VINCENT VAN GOGH</a></li>
      <li><a href="{{route ('tres')}}">EDVARD MUNCH</a></li>
      <li><a href="{{route('cuatro')}}">LEONARDO DA VINCE</a></li>
      <li><a href="{{route('cinco')}}">PABLO PICASSO</a></li>
  </div>
</nav>
</body>
</html>

</div>
