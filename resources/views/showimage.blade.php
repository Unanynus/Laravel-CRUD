<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        @csrf
        
        
        <table class="table">
            <tbody>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>File Path</th>
                <th>image</th>
            </tr>
            @foreach($docs as $doc)
            <tr>
                <td>{{$doc->id}}</td>
                <td>{{$doc->name}}</td>
                <td>{{$doc->filrepath}}</td>
                <td><img src="{{asset('$doc->image')}}" /></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <img src="{{URL::asset('/storage/app/public/uploads')}}" height="500"  width="800">
        
      
      
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>
</html>
