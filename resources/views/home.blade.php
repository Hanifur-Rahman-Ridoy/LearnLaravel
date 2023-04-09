<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>


    <h1>Contact Form </h1>

   

  <div class="row">
    <div class="card col-lg-6 ml-6">
      <div class="card-body">
        <form action="{{ route('store.student') }}" method="post">
          @csrf

          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            <div  class="form-text text-danger">@error('name') নাম দিতে সমস্যা কি তোমার @enderror</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            <div  class="form-text text-danger">@error('email')ইমেইল তাড়াতাড়ি দে
              
            @enderror</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" name="password" class="form-control" >
            <div  class="form-text text-danger">@error('password') Please Valid Password
              
            @enderror</div>
          </div>
         
          <button type="submit" class="btn btn-primary" name="btn">Submit</button>
        </form>
      </div>
    </div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

