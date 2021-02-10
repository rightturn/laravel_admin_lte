<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Lenses</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<style>
  .nav_bar{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);
    padding:5px;
  }
</style>

<body>
  <!-- partial:index.partial.html -->
  <div>
    <div class="text-center nav_bar">
      <!-- gray -->
      <a href="{{route('lens.filter',['color'=>'gray'])}}" style="margin:0px 5px;border-radius: 100%;width: 60px; height: 60px; display:inline-block;background-color:#56534e;{{$color == 'gray' ? 'border:4px solid goldenrod;' : ''}}"></a>
      <!-- blue -->
      <a href="{{route('lens.filter',['color'=>'blue'])}}" style="margin:0px 5px;border-radius: 100%;width: 60px; height: 60px; display:inline-block;background-color:#256d86;{{$color == 'blue' ? 'border:4px solid goldenrod;' : ''}}"></a>
      <!-- brown -->
      <a href="{{route('lens.filter',['color'=>'brown'])}}" style="margin:0px 5px;border-radius: 100%;width: 60px; height: 60px; display:inline-block;background-color:#3a1f04;{{$color == 'brown' ? 'border:4px solid goldenrod;' : ''}}"></a>
      <!-- green -->
      <a href="{{route('lens.filter',['color'=>'green'])}}" style="margin:0px 5px;border-radius: 100%;width: 60px; height: 60px; display:inline-block;background-color:#32633a;{{$color == 'green' ? 'border:4px solid goldenrod;' : ''}}"></a>
      <!-- hazel -->
      <a href="{{route('lens.filter',['color'=>'hazel'])}}" style="margin:0px 5px;border-radius: 100%;width: 60px; height: 60px; display:inline-block;background-color:#f9e076;{{$color == 'hazel' ? 'border:4px solid goldenrod;' : ''}}"></a>
      <!-- purple -->
      <a href="{{route('lens.filter',['color'=>'purple'])}}" style="margin:0px 5px;border-radius: 100%;width: 60px; height: 60px; display:inline-block;background-color:purple;{{$color == 'purple' ? 'border:4px solid goldenrod;' : ''}}"></a>
    </div>
  </div>
  <div class="container-fluid">

    <div class="row">
        @foreach($lens as $l)
      <div class="col-md-3">
      <div class="form-group">
        <div class="card">
          <div class="card-body">
            <a href="/{{str_replace('public','storage',$l->image)}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
              <img src="/{{str_replace('public','storage',$l->image)}}" class="img-fluid rounded">
            </a>
          </div>
        </div>
        </div>

      </div>
      @endforeach
    </div>
  </div>

  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js'></script>
  <script src="js/script.js"></script>

</body>

</html>