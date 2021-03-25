<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    
    <div class="row mt-5">
      
      <div class="col-sm-2"></div>
        <div class="col-sm-8">
           @if (Session::has('message'))
      <div class="alert {{ Session::get('class') }}">{{ Session::get('message') }}</div>
    @endif
         
     <!--  @if (count($errors) > 0)
         
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif -->
           <form method="post" action="register">
            @csrf
    <!-- First Name input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form1Example1">First Name<span class="text-danger">*</span></label>
    <input type="text" name="f_name" id="form1Example1" class="form-control" /> 
     @if (count($errors) > 0)
         
               @foreach ($errors->get('f_name') as $error)
                  <p class="text-danger">{{ $error }}</p>
              @endforeach        
      @endif
  </div>
   <!-- Last Name input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form1Example1">Last Name<span class="text-danger">*</span></label>
    <input type="text" name="l_name" id="form1Example1" class="form-control" /> 
    @if (count($errors) > 0)
         
               @foreach ($errors->get('l_name') as $error)
                  <p class="text-danger">{{ $error }}</p>
              @endforeach        
      @endif
  </div>         
  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form1Example1">Email address<span class="text-danger">*</span></label>
    <input type="email" name="email" id="form1Example1" class="form-control" /> 
    @if (count($errors) > 0)
         
               @foreach ($errors->get('email') as $error)
                  <p class="text-danger">{{ $error }}</p>
              @endforeach        
      @endif
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form1Example2">Password<span class="text-danger">*</span></label>
    <input type="password" name="password" id="form1Example2" class="form-control" />
   
    @if (count($errors) > 0)
         
               @foreach ($errors->get('password') as $error)
                  <p class="text-danger">{{ $error }}</p>
              @endforeach        
      @endif
  </div>

 
    <div class="col-sm-2"></div>
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
   <a href="login1" class="btn btn-success btn-block">Back</a>
</form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>