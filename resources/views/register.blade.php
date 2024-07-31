<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
   <div class="wrapped">
   <center>
    <form action="{{route('signup')}}" method="POST">
        @csrf
        <div class="contain container">
          <div class="card p-5 shadow bg-white">
              <center>
                  <div class="great">TEEGREAT TECH CODING SCHOOL</div>
                  <div class="account">Create account for admission</div>
                  <div class="kindly">Kindly fill up your account to start admission process..</div>
                 </center>
              <div class="form-group mt-2">
                  <input type="text" class="form-control" name="surname" value="{{ old('firstname') }}">
                  <label for="surname">SURNAME</label>
                  @error('surname')
                  <small class="text-danger">{{$message}}</small>
              @enderror
              </div>
            
  
              <div class="form-group mt-2">
                  <input type="text" class="form-control" name="firstname">
                  <label for="firstname">FIRST NAME</label>
                  @error('firstname')
                  <small class="text-danger">{{$message}}</small>
              @enderror
              </div>
  
              <div class="form-group mt-2">
                  <input type="email" class="form-control" name="email">
                  <label for="email">EMAIL</label>
                  @error('email')
                  <small class="text-danger">{{$message}}</small>
              @enderror
              </div>

              <div class="form-group mt-2">
                <input type="text" class="form-control" name="password">
                <label for="password">PASSWORD</label>
                @error('password')
                <small class="text-danger">{{$message}}</small>
            @enderror
            </div>
  
              <div class="form-group mt-2">
                  <input type="number" class="form-control" name="phonenumber">
                  <label for="phonenumber">PHONE NUMBER</label>
                  @error('phonenumber')
                  <small class="text-danger">{{$message}}</small>
              @enderror
              </div>
  
              <div class="reg mt-2">
                  <div><a href="">Already have an account? Sign in instead</a></div>
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>
          </div>
        </div>
      </form>
   </center>
   </div>
</body>
</html>