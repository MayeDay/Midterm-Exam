<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exam App</title>
  <link rel="stylesheet" href="css/style.css">

  <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white">
  <div class="container bg-opacity-dark p-5">
    <div class="header border border-dark bg-opacity-tan p-5 mb-5 mx-4">
      <h1 class="text-center">MIDTERM EXAM</h1>
      <h5 class="text-center">James Allen Maye III</h5>
      <h6 class="text-center">BSIT - 4A </h6>


    </div>
    <div class="content border border-dark bg-opacity-tan p-5 my-5 mx-4">
      <div class="user-input text-center bg-opacity-secondary p-3">
        <form action="/" method="get">
          @csrf
          <div class="row m-2">
            <div class="col-sm-4"><label for="value1">Length</label></div>
            <div class="col-sm-4"><label for="value1">Width</label></div>
            <div class="col-sm-4"><label for="value1">Height</label></div>
          </div>
          <div class="row m-2">
            <div class="col-sm-4"><input type="text" name="value1" id="" placeholder="Input Value"></div>
            <div class="col-sm-4"><input type="text" name="value2" id="" placeholder="Input Value"></div>
            <div class="col-sm-4"><input type="text" name="value3" id="" placeholder="Input Value"></div>
          </div>
    
          <button type="submit" class="mt-3 btn btn-info">Submit</button>
        </form>
      </div>
    </div>

    <div class="border border-dark bg-opacity-tan p-5 my-5 mx-4">
      <div class="results text-center bg-opacity-secondary p-3">
        <div class="row">
          <div class="col-sm-4"><h3>Rectangle</h3></div>
          <div class="col-sm-4"><h3>Cuboid</h3></div>
          <div class="col-sm-4"><h3>Square</h3></div>
        </div>

        <div class="row">
          @foreach($results as $result)
            <div class="col-sm-4"><h3>{{ $result}}</h3></div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</body>
</html>